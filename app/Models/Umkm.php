<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lokasi',
        'kategori',
        'produk',
        'gambar',
        'harga',
        'satuan',
    ];
}
