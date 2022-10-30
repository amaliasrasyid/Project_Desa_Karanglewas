<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function getData($user_id)
    {
        $data = Penduduk::where('user_id', $user_id)->first();
        return response()->json($data, 200);
    }
}
