<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\User;
use App\Models\Vaksin;
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
            // $data->save();


            if ($data->save()) {
                $vaksin = new Vaksin();
                $vaksin->user_id = $user->id;
                $vaksin->save();
            }
        }

        return redirect()->route('penduduk.index')->with('success', 'Data Penduduk Berhasil Disimpan');
        // dd($request->all());
    }


    public function edit($id)
    {
        $data = Penduduk::find($id);
        // dd($data);
        return view('penduduk.edit', compact('data'));
    }


    public function update(Request $request, Penduduk $penduduk)
    {
        $id = $penduduk->id;
        // dd($request->all());
        $request->validate([
            'nik' => 'required|min:16|unique:penduduks,nik,'.$penduduk->nik.',nik'
            // 'nik' => 'required|min:16|unique:penduduks|numeric'
            ]);
        $user = User::whereId($id)->update([
            'username' => $request->nik,
        ]);

        $data = Penduduk::where('id', $id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'tptLahir' => $request->tempatLahir,
            'tglLahir' => $request->tanggalLahir,
            'akta' => $request->akta,
            'kelamin' => $request->jenisKelamin,
            'kawin' => $request->kawin,
            'pam' => $request->pam,
        ]);
        // dd($data);
        return redirect()->route('penduduk.index')->with('success', 'Data Penduduk Berhasil Diubah');
    }


    public function delete($id)
    {
        // dd($id);
        $data = Penduduk::whereId($id);
        $user = User::whereId($data->user_id);
        $data->delete();
        $user->delete();

        if ($data && $user) {

            return redirect()->route('penduduk.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {

            return redirect()->route('penduduk.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
