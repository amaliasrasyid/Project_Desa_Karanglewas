<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Pkh;

use Illuminate\Http\Request;

class PKHController extends Controller
{
    public function index()
    {

        $pkh = Pkh::latest()->paginate(10);
        return view('pkh.index', compact('pkh'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $penduduk = Penduduk::latest()->get();
        return view('pkh.create', compact('penduduk'));
    }


    public function store(Request $request)
    {
        $pkh = Pkh::where('user_id', $request->nik)->first();
        // dd($request->all());
        if ($pkh) {
            return redirect()->route('pkh.index')->with('failed', 'Data PKH Sudah Tersedia');
        }else {
            $data = new Pkh();
            $data->user_id = $request->nik;
            $data->anak = $request->anak;
            $data->kendaraan = $request->kendaraan;
            $data->pendapatan = $request->pendapatan;
            $data->penerimaan = $request->penerimaan;
            $data->save();

            return redirect()->route('pkh.index')->with('success', 'Data PKH Berhasil Disimpan');
        }
    }

    public function edit($id)
    {
        $data = Pkh::join('penduduks', 'pkhs.user_id', '=', 'penduduks.user_id')
            ->select('pkhs.*', 'penduduks.nik', 'penduduks.nama', 'penduduks.alamat')
            ->where('pkhs.id', $id)
            ->first();
        return view('pkh.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data = Pkh::where('id',$id)->update([
            'anak' => $request->anak,
            'kendaraan' => $request->kendaraan,
            'pendapatan' => $request->pendapatan,
            'penerimaan' => $request->penerimaan,
        ]);
        return redirect()->route('pkh.index')->with('success', 'Data PKH Berhasil Diubah');
    }

    public function ChangeStatus($id)
    {
        $confirm = Pkh::whereId($id)->update([
            'penerimaan' => 'sudah'
        ]);

        return redirect()->route('pkh.index')->with('success', 'Status Penerimaan PKH Berhasil Diubah');
    }

    public function delete($id)
    {
        // dd($id);
        $pkh = PKH::whereId($id);
        $pkh->delete();

        if ($pkh) {

            return redirect()->route('pkh.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {

            return redirect()->route('pkh.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

}
