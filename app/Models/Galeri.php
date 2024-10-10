<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';

    protected $fillable = [
        'id_kontent',
        'judul_galeri',
        'deskripsi_galeri',
        'gambar',
    ];

    public function kontent()
    {
        return $this->belongsTo(Kontent::class, 'id_kontent');
    }
}
