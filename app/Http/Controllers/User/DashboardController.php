<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::count();
        $laki = Penduduk::where('kelamin', 'laki-laki')->count();
        $perempuan = Penduduk::where('kelamin', 'perempuan')->count();
        $vaksin = Penduduk::join('vaksins', 'penduduks.user_id', '=', 'vaksins.user_id')->where('vaksins.vaksin', '>', '0')->count();

        $data = Penduduk::where('penduduks.user_id', Auth::user()->id)->join('vaksins', 'penduduks.user_id', '=', 'vaksins.user_id')->select('penduduks.*', 'vaksins.vaksin')->first();
        $dataPamsimas = Penduduk::join('pams', 'penduduks.user_id', '=', 'pams.user_id')->select('pams.*', 'penduduks.nama')->where('pams.user_id', Auth::user()->id)->latest()->get();

        return view('dashboard.index', compact('penduduk', 'laki', 'perempuan', 'vaksin', 'data', 'dataPamsimas'));
    }
}
