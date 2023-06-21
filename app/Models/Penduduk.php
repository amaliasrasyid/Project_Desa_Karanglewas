<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pkh;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
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

    public function pkh()
    {
        return $this->hasOne(Pkh::class, 'user_id', 'user_id');
    }
    public function vaksin()
    {
        return $this->hasOne(Vaksin::class, 'user_id', 'user_id');
    }
}
