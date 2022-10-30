<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::latest()->paginate(10);
        return view('penduduk.index', compact('penduduk'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('penduduk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|min:16|unique:penduduks|numeric',
            'akta' => 'required|numeric|unique:penduduks',
        ]);
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
            $data->akta = $request->akta;
            $data->pam = $request->pam;
            $data->save();
        }

        return redirect()->route('penduduk.index')->with('success', 'Data Penduduk Berhasil Disimpan');
        // dd($request->all());
    }
}
