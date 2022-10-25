<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nik',
        'nama',
        'alamat',
        'tptLahir',
        'tglLahir',
        'kelamin',
        'kawin',
        'agama',
        'pendidikan',
        'noAkta',
        'pam',
    ];
}
