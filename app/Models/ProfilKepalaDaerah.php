<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilKepalaDaerah extends Model
{
    use HasFactory;

    protected $table = 'profil_kepala_daerah';

    protected $fillable = [
        'nama_kepala_daerah',
        'jabatan',
        'deskripsi',
    ];
    
}
