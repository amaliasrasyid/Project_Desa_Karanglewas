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


        $data = Pam::join('penduduks', 'pams.user_id', '=', 'penduduks.user_id')
            ->select('pams.*', 'penduduks.nik', 'penduduks.nama', 'penduduks.alamat')
            ->where('pams.user_id', Auth::user()->id)
            // ->whereNotNull('pams.bulan')
            ->latest()
            ->first();
        // dd($data);
        return view('pamsimas.index', compact('pamsimas', 'penduduk', 'data'))->with('i', (request()->input('page', 1) - 1) * 10);
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

            return redirect('https://api.whatsapp.com/send?phone=6281225614582&text=Halo%20Admin,%20saya%20ingin%20melakukan%20pembayaran%20pamsimas%20pada%20bulan%20' . $request->bulan);
        }
    }


    public function confirm($id)
    {
        $confirm = Pam::whereId($id)->update([
            'status' => 'Sudah Bayar'
        ]);

        return redirect()->route('pamsimas.index')->with('success', 'Status Pembayaran Pamsimas Berhasil Diubah');
    }
}
