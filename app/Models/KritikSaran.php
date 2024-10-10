<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;

    protected $table = 'kritik_saran';

    protected $fillable = [
        'id_user',
        'nama_guest',
        'email',
        'subjek',
        'pesan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
