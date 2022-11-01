<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::join('penduduks', 'umkms.user_id', '=', 'penduduks.user_id')
            ->select('umkms.*', 'penduduks.nik', 'penduduks.nama')
            ->latest()
            ->paginate(10);
        return view('umkm.index', compact('umkms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function jadi()
    {
        $umkms = Umkm::where('kategori', 'Jadi')->get();
        return view('umkm.jadi', compact('umkms'));
    }

    public function setJadi()
    {
        $umkms = Umkm::where('kategori', 'Setengah Jadi')->get();
        return view('umkm.setengahjadi', compact('umkms'));
    }

    public function mentah()
    {
        $umkms = Umkm::where('kategori', 'Mentah')->get();
        return view('umkm.mentah', compact('umkms'));
    }

    public function create()
    {

        $penduduk = Penduduk::latest()->get();
        return view('umkm.create', compact('penduduk'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $request->image = "$productImage";
            // dd($request->image);
        }

        $umkm = new Umkm();
        $umkm->user_id = $request->nik;
        $umkm->lokasi = $request->lokasi;
        $umkm->kategori = $request->kategori;
        $umkm->produk = $request->produk;
        $umkm->gambar = $request->image;
        $umkm->harga = $request->harga;
        $umkm->satuan = $request->satuan;
        // dd($umkm);

        if ($umkm->save()) {
            return redirect()->route('umkm.index')->with('success', 'Data UMKM Berhasil Disimpan');
        }
    }

    public function edit($id)
    {
        // dd($id);
        $data = Umkm::join('penduduks', 'umkms.user_id', '=', 'penduduks.user_id')
            ->select('umkms.*', 'penduduks.nik', 'penduduks.nama')
            ->first();

        return view('umkm.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $request->image = "$productImage";
        }

        $data = Umkm::whereId($id)->update([
            'lokasi' => $request->lokasi,
            'produk' => $request->produk,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'gambar' => $request->image,
        ]);
        return redirect()->route('umkm.index')->with('success', 'Data UMKM Berhasil Diubah');
    }

    public function delete($id)
    {
        // dd($id);
        $data = Umkm::findOrFail($id);
        $data->delete();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('umkm.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('umkm.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
