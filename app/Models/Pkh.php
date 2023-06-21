<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkh extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'anak',
        'kendaraan',
        'pendapatan',
        'penerimaan',
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'user_id', 'user_id');
    }
}
