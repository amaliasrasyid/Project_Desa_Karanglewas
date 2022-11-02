<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // fungsi nggo login
    public function index()
    {
        if ($user = Auth::user()) {
            // nek user ws login cek apakah role e admin?, nek admin di tampilna tampilan nggo admin
            if ($user->role == 'admin') {
                return redirect()->route('admin.index');
                // cek user login nek role e user ditampilna tampilan nggo user
            } elseif ($user->role == 'user') {
                return redirect()->route('user.index');
            }
        }
        return view('auth.login');
    }

    // proses login
    public function process(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('admin.index');
            } elseif ($user->role == 'user') {
                return redirect()->route('user.index');
            }
            return redirect()->route('/');
        }
        return redirect('login')->withInput()->withErrors(['login_failed' => 'These credentials do not match our records.']);
    }

    // fungsi logout
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
