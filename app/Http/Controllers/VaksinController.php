<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Vaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{

    public function index()
    {
        $vaksin = Vaksin::join('penduduks', 'vaksins.user_id', '=', 'penduduks.user_id')
            ->select('vaksins.*', 'penduduks.nik', 'penduduks.nama', 'penduduks.alamat', 'penduduks.tptLahir', 'penduduks.tglLahir', 'penduduks.kelamin')
            ->latest()
            ->paginate(10);
        return view('vaksin.index', compact('vaksin'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        $penduduk = Penduduk::latest()->get();
        // dd($penduduk);
        return view('vaksin.create', compact('penduduk'));
    }


    public function store(Request $request)
    {
        $vaksin = Vaksin::where('user_id', $request->nik)
        ->first();
        // dd($vaksin);
        if ($vaksin) {
            return redirect()->route('vaksin.index')->with('failed', 'Data Vaksin Sudah Tersedia');
        }else {
            $data = new Vaksin();
            $data->user_id = $request->nik;
            $data->telpon = $request->telepon;
            $data->penyakit = $request->penyakit;
            $data->vaksin = $request->vaksin;
            $data->save();

            return redirect()->route('vaksin.index')->with('success', 'Data Vaksin Berhasil Disimpan');
        }
    }


    public function edit($id)
    {
        $data = Vaksin::join('penduduks', 'vaksins.user_id', '=', 'penduduks.user_id')
            ->select('vaksins.*', 'penduduks.nik', 'penduduks.nama', 'penduduks.alamat', 'penduduks.tptLahir', 'penduduks.tglLahir', 'penduduks.kelamin')
            ->where('vaksins.id', $id)
            ->first();
        return view('vaksin.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Vaksin::whereId($id)->update([
            'telpon' => $request->telepon,
            'penyakit' => $request->penyakit,
            'vaksin' => $request->vaksin,
        ]);
        return redirect()->route('vaksin.index')->with('success', 'Data Vaksin Berhasil Diubah');
    }


    public function delete($id)
    {
        $data = Vaksin::whereId($id);
        $data->delete();

        if ($data) {

            return redirect()->route('vaksin.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {

            return redirect()->route('vaksin.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
