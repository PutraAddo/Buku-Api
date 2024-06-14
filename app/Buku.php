<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';  // Ensure this is correct
    protected $fillable = [
        'judul',
        'harga',
        'penulis',
        'gambar'    
    ];
}
