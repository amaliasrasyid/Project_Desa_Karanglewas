<?php

namespace App\Http\Controllers;

use App\Models\Pam;
use Illuminate\Http\Request;

class PamsimasController extends Controller
{
    public function index()
    {
        $pamsimas = Pam::join('penduduks', 'pams.user_id', '=', 'penduduks.user_id')
            ->select('pams.*', 'penduduks.nik', 'penduduks.nama', 'penduduks.alamat')
            ->latest()
            ->paginate(10);
        // dd($pamsimas);
        return view('pamsimas', compact('pamsimas'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
