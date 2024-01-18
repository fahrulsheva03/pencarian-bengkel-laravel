<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kategori'
    ];

    public function bengkel()
    {
        return $this->hasMany('App\Models\Bengkel', 'id_kategori');
    }
}
