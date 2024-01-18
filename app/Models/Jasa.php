<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_jasa',
        'id_bengkel'
    ];

    public function bengkel()
    {
        return $this->belongsTo('App\Models\Bengkel', 'id_bengkel');
    }
}
