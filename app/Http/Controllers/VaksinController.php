<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    public function index()
    {
        return view('vaksin');
    }
    
    public function create()
    {
        return view('create-vaksin');
    }

    public function store(Request $request)
    {
        $user = new Vaksin();
        $user->name = $request->nama;
        $user->username = $request->nik;
        $user->password = bcrypt('123456');
        $user->role = 'user';

        if ($user->save()) {
            $data = new Vaksin();
            $data->nik = $request->nik;
            $data->nama = $request->nama;
            $data->user_id = $user->id;
            $data->alamat = $request->alamat;
            $data->tptLahir = $request->tempatLahir;
            $data->tglLahir = $request->tanggalLahir;
            $data->kelamin = $request->jenisKelamin;
            $data->telepon = $request->telepon;
            $data->penyakit = $request->penyakit;
            $data->vaksin = $request->vaksin;
            $data->save();
        }

        return redirect()->route('vaksin.index');
        // dd($request->all());
    }
}
