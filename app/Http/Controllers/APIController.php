<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku; 

class APIController extends Controller
{
    public function searchbuku(Request $request)
    {
        $cari = $request->input('q');
        $buku = Buku::where('judul', 'LIKE', "%{$cari}%")->get();

        if($buku->isEmpty())
        {
            return response()->json([
                'success' => false,
                'data' => 'Data Tidak Ditemukan'
            ], 404)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
        else
        {
            return response()->json([
                'success' => true,
                'data' => $buku
            ], 200)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
    }
}
