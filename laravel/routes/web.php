<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(App\Http\Controllers\FormSurveiController::class)->group(function() {
	Route::get('/', 'index')->name('formSurvei.index');
	Route::post('/', 'store')->name('formSurvei.create');
	Route::post('/cek-nik', 'cekNik')->name('formSurvei.cekNik');
});