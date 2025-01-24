<?php

use App\Http\Controllers\IPMController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\KemiskinanController;
use App\Http\Controllers\LamaSekolahController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KabkotController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/provinsi', [BerandaController::class, 'index'])
    ->name('provinsi');

Route::get('/kabkot', [KabkotController::class, 'index'])
    ->name('kabkot');

Route::get('/kemiskinan', [KemiskinanController::class, 'index']);

Route::get('/penduduk', [PendudukController::class, 'index']);

Route::get('/pendapatan', [PendapatanController::class, 'index']);

Route::get('/sekolah', [LamaSekolahController::class, 'index']);

Route::get('/kematian', [KematianController::class, 'index']);



