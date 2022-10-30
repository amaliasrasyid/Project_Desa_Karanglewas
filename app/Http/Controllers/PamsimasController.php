<?php

namespace App\Http\Controllers;

use App\Models\Pam;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PamsimasController extends Controller
{
    public function index()
    {
        $pamsimas = Pam::join('penduduks', 'pams.user_id', '=', 'penduduks.user_id')
            ->select('pams.*', 'penduduks.nik', 'penduduks.nama', 'penduduks.alamat')
            ->latest()
            ->paginate(10);
        $penduduk = Penduduk::where('user_id', Auth::user()->id)->first();
        // dd($penduduk);
        return view('pamsimas.index', compact('pamsimas', 'penduduk'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function store(Request $request)
    {
        $pam = new Pam();
        $pam->user_id = $request->user_id;
        $pam->bulan = $request->bulan;
        $pam->tanggal = $request->tanggal;
        $pam->harga = $request->harga;
        $pam->status = $request->statuspembayaran;
        // dd($pam);
        if ($pam->save()) {
            return redirect()->route('pamsimas.index')->with('success', 'Data Pembayaran Pamsimas Berhasil Disimpan');
        }
    }
}
