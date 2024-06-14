<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
public function ceklogin(Request $request)
{
    if (Auth::attempt([
        'email' =>$request->email,
        'password' =>$request->password]))

        {
            return redirect("/home");
        }
    else
    {
        return redirect("/");
    }
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}

}