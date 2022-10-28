<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::join('penduduks', 'umkms.user_id', '=', 'penduduks.user_id')
            ->select('umkms.*', 'penduduks.nik', 'penduduks.nama')
            ->latest()
            ->paginate(10);
        return view('umkm', compact('umkms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('create-umkm');
    }
}
