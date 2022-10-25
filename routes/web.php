<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/website_desa', function () {
//     return view('layouts.master');
// });
// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'process'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout.logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'login_check:admin']], function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('index');
});
Route::group(['prefix' => 'penduduk', 'as' => 'penduduk.', 'middleware' => 'auth'], function () {
    Route::get('/', [PendudukController::class, 'index'])->name('index');
});
Route::group(['as' => 'user.', 'middleware' => ['auth', 'login_check:user']], function () {
    Route::get('/', [UserDashboardController::class, 'index'])->name('index');
});
