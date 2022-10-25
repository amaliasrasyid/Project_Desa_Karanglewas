<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaksinController extends Controller
{
    public function index()
    {
        return view('vaksin');
    }
}
