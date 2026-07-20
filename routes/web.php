<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/jadwal', function () {
    return view('jadwal');
})->name('jadwal');

Route::get('/peta', function () {
    return view('peta');
})->name('peta');

Route::get('/kesehatan', function () {
    return view('kesehatan');
})->name('kesehatan');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/jadwal/pdf', [JadwalController::class, 'downloadPdf'])
    ->name('jadwal.pdf');