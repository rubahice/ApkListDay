<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donghua extends Model
{
    protected $fillable = [
        'kategori', 'title', 'genre', 'deskripsi', 'episode', 'status',
        'tahun_rilis', 'studio', 'rating', 'gambar'
    ];
}
