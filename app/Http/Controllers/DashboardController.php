<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('index');
    }

    public function user()
    {
        return view('index');
    }
}
