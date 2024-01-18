<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bengkel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_bengkel',
        'nama_bengkel',
        'alamat',
        'keterangan',
        'peta',
        'gambar'
    ];

    // public function jasa()
    // {
    //     return $this->hasOne('App\Models\Jasa', 'id_bengkel');
    // }

    // public function kategori()
    // {
    //     return $this->belongsToMany('App\Models\Kategori', 'id_kategori');
    // }
}
