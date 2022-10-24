<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIK',
        'user_id',
        'nama',
        'alamat',
        'telpon',
        'tptLahir',
        'kelamin',
        'kawin',
        'agama',
        'pendidikan',
        'noAkta',
        'pam',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
