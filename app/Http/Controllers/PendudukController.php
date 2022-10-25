<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        return view('penduduk');
    }

    public function create()
    {
        return view('create-penduduk');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->nama;
        $user->username = $request->nik;
        $user->password = bcrypt('123456');
        $user->role = 'user';

        if ($user->save()) {
            $data = new Penduduk();
            $data->nik = $request->nik;
            $data->nama = $request->nama;
            $data->user_id = $user->id;
            $data->alamat = $request->alamat;
            $data->tptLahir = $request->tempatLahir;
            $data->tglLahir = $request->tanggalLahir;
            $data->kelamin = $request->jenisKelamin;
            $data->kawin = $request->kawin;
            $data->agama = $request->agama;
            $data->pendidikan = $request->pendidikan;
            $data->noAkta = $request->akta;
            $data->pam = $request->pam;
            $data->save();
        }

        return redirect()->route('penduduk.index');
        // dd($request->all());
    }
}
