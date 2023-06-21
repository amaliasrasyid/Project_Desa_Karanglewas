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
        // ngoo ngitung total jumlah penduduk
        $penduduk = Penduduk::count();
        // nggo ngitung jumlah penduduk lanang
        $laki = Penduduk::where('kelamin', 'laki-laki')->count();
        // nggo ngitung jumlah penduduk wadon
        $perempuan = Penduduk::where('kelamin', 'perempuan')->count();
        // nggo ngitung jumlah penduduk sing ws vaksin
        $vaksin = Penduduk::join('vaksins', 'penduduks.user_id', '=', 'vaksins.user_id')->where('vaksins.vaksin', '>', '0')->count();

        // nggo nampilna data diri user/penduduk sing login
        $data = Penduduk::where('penduduks.user_id', Auth::user()->id)->join('vaksins', 'penduduks.user_id', '=', 'vaksins.user_id')->select('penduduks.*', 'vaksins.vaksin')->first();
        // nggo nampilna riwayat pembayaran pamsimas user/penduduk sing login
        $dataPamsimas = Penduduk::join('pams', 'penduduks.user_id', '=', 'pams.user_id')->select('pams.*', 'penduduks.nama')->where('pams.user_id', Auth::user()->id)->latest()->get();

        $pkh = Penduduk::join('pkhs', 'penduduks.user_id', '=', 'pkhs.user_id')->select('pkhs.*', 'penduduks.nama')->latest()->get();


        // nggo manggil file tampilan we, nggawa data sing ws di gawe ng nduwur
        return view('dashboard.index', compact('penduduk', 'laki', 'perempuan', 'vaksin', 'data', 'dataPamsimas', 'pkh'));
    }
}
