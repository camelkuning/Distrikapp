<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontent extends Model
{
    use HasFactory;

    protected $table = 'kontent';

    protected $fillable = [
        'nama_kontent',
    ];

    public function galeri()
    {
        return $this->hasMany(Galeri::class, 'id_kontent');
    }
    
}
