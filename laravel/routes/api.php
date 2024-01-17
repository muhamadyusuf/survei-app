<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(App\Http\Controllers\LokasiController::class)->group(function() {
    Route::get('/lokasi/provinsi-lists', 'states'); // route untuk menampilkan daftar provinsi
    Route::get('/lokasi/provinsi/{lokasi_kode}/kota-lists', 'cities'); // route untuk menampilkan daftar kota di suatu provinsi
    Route::get('/lokasi/kota/{lokasi_kode}/kecamatan-lists', 'districts'); // route untuk menampilkan daftar kecamatan di suatu kota
    Route::get('/lokasi/kecamatan/{lokasi_kode}/kelurahan-lists', 'villages'); // route untuk menampilkan daftar kelurahan di suatu kecamatan
});
