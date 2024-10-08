<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;

    protected $table = 'beranda';

    protected $fillable = [
        'id',
        'judul_beranda',
        'deskripsi_beranda',
    ];

}
