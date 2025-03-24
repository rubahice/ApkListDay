<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'kategori', 'title', 'genre', 'deskripsi', 'episode', 'status',
        'tahun_rilis', 'studio', 'rating', 'gambar'
    ];
}
