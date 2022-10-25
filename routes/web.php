<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('index');
});
Route::group(['as' => 'user.', 'middleware' => ['auth', 'login_check:user']], function () {
    Route::get('/', [DashboardController::class, 'user'])->name('index');
});
