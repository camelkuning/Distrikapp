<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarBeranda extends Model
{
    use HasFactory;

    protected $table = 'gambar_beranda';

    protected $fillable = [
        'id_beranda',
        'gambar',
    ];

    public function beranda()
    {
        return $this->belongsTo(Beranda::class, 'id_beranda');
    }
}
