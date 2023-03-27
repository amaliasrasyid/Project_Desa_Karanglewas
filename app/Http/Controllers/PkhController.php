<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PKHController extends Controller
{
    public function index()
    {
        return view('pkh.index');
    }
}
