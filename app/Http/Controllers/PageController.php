<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function buku()
    {
        $Buku = Buku::orderBy('id', 'desc')->get();
        return view("buku", ["key" => "buku", "et" => $Buku]);
    }
    
    public function settings()
    {
        return view("setting", ["key" => "setting"]);
    }

    public function fromeditbuku($id)
    {
        $Buku = Buku::find($id);
        return view("formedit", ["key" => "buku", "ts" => $Buku]);
    }

    public function updateBuku($id, Request $request)
    {
        $Buku = Buku::find($id);

        $Buku->judul = $request->judul;
        $Buku->harga = $request->harga;
        $Buku->penulis = $request->penulis;

        if ($request->gambar) {
            if ($Buku->gambar) {
                Storage::disk('public')->delete($Buku->gambar);
            }

            $file_name = time().'-'.$request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->storeAs('gambar', $file_name, 'public');
            $Buku->gambar = $path;
        }


        $Buku->save();

        return redirect("buku")->with('alert', 'Data Berhasil di Update');
    }

    public function savedata(Request $request)
    {
        $file_name = time().'-'.$request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('gambar', $file_name, 'public');

        Buku::create([
            'judul' => $request->judul,
            'harga' => $request->harga,
            'penulis' => $request->penulis,
            'gambar' => $path
        ]);

        return redirect("buku")->with('alert', 'Data Berhasil di Simpan');
    }

    public function formaddbuku()
    {
        return view("formadd", ["key" => "buku"]);
    }

    public function deleteBuku($id)
{
    $Buku = Buku::find($id);

    if ($Buku->gambar) {
        Storage::disk('public')->delete($Buku->gambar);
    }

    $Buku->delete();

    return redirect("buku")->with('alert', 'Data Berhasil di Hapus');
}
public function saveSettings(Request $request)
{
    $theme = $request->theme;
    $settings = ['theme' => $theme];
    session(['settings' => $settings]);

    return redirect("settings")->with('alert', 'Settings Updated Successfully');
}

public function login(Request $request)
{

    return view("login") ;
}
    

public function showChangePasswordForm()
{
    return view("changepass",["key" => "home"]);
}

public function changePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    $user = Auth::user();

    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
    }

    $user->password = Hash::make ($request->new_password);
    $user->save();

    return redirect("/")->with('alert', 'Password changed successfully.');
}

}
