<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;

use Illuminate\Http\Request;

class PKHController extends Controller
{
    public function index()
    {
        // ngambil seluruh data sekang database
        $pkh = Penduduk::latest()->paginate(10);
        return view('pkh.index', compact('pkh'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('pkh.create');
    }

    public function edit()
    {
        return view('pkh.edit');
    }

}
