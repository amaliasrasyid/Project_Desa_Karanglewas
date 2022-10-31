<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::count();
        $laki = Penduduk::where('kelamin', 'laki-laki')->count();
        $perempuan = Penduduk::where('kelamin', 'perempuan')->count();
        $vaksin = Penduduk::join('vaksins', 'penduduks.user_id', '=', 'vaksins.user_id')->where('vaksins.vaksin', '>', '0')->count();

        return view('dashboard.index', compact('penduduk', 'laki', 'perempuan', 'vaksin'));
    }
}
