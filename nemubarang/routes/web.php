<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::post('/laporan/store', [LaporanController::class, 'store'])->name('laporan.store');


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('pengajuan');
});

Route::get('/dashboard/ditemukan', function () {
    return view('ditemukan');
});

Route::get('/dashboard/kehilangan', function () {
    return view('kehilangan');
});

Route::get('/dashboard/postingan', function () {
    return view('postingan');
});