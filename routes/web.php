<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Pengaduan;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [Admin::class, 'index']);
Route::get('/laporan-pengaduan', [Pengaduan::class, 'tambah_pengaduan']);