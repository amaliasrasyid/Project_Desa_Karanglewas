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
    
}
