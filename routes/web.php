<?php

use App\Http\Controllers\FormpemesananController;
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
Route::get('/home', function () {
    return view('tamu.tamu');
});

Route::get('/kamar', function (){
    return view('fasilitas.kamar');
});
//PEMESANAN

Route::get('/tampil', [FormpemesananController::class, 'index'])->name('pesan');

Route::get('/tambahdata', [FormpemesananController::class, 'tambah']);
Route::post('/insertdata', [FormpemesananController::class, 'simpan'])->name('simpan');

Route::delete('/hapus/{id}', [FormpemesananController::class, 'destroy']);
