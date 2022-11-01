<?php

namespace App\Http\Controllers\Admin;

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

        $dataVaksin = Penduduk::join('vaksins', 'vaksins.user_id', '=', 'penduduks.user_id')->select('vaksins.*', 'penduduks.nama')->latest()->get();
        $dataPamsimas = Penduduk::join('pams', 'penduduks.user_id', '=', 'pams.user_id')->select('pams.*', 'penduduks.nama')->latest()->get();
        // dd($dataPamsimas);
        return view('dashboard.index', compact('penduduk', 'laki', 'perempuan', 'vaksin', 'dataVaksin', 'dataPamsimas'));
    }

    public function getData($user_id)
    {
        $data = Penduduk::where('user_id', $user_id)->first();
        return response()->json($data, 200);
    }
}
