<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarBerita extends Model
{
    use HasFactory;

    protected $table = 'gambar_berita';

    protected $fillable = [
        'id_berita',
        'gambar',
        'tanggal_upload',
    ];

    public function berita()
    {
        return $this->belongsTo(Berita::class, 'id_berita');
    }
}
