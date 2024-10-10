<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    
    protected $fillable = [
        'id_user',
        'judul_berita',
        'deskripsi_berita',
        'tanggal_berita',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function gambarBerita()
    {
        return $this->hasMany(GambarBerita::class, 'id_berita');
    }
}
