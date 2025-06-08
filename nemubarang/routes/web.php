<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminController;

Route::post('/laporan/store', [LaporanController::class, 'store'])->name('laporan.store');


Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.pengajuan');
Route::get('/dashboard/ditemukan', [AdminController::class, 'ditemukan'])->name('dashboard.ditemukan');
Route::get('/dashboard/kehilangan', [AdminController::class, 'dicari'])->name('dashboard.kehilangan');
Route::get('/dashboard/postingan', [AdminController::class, 'postingan'])->name('dashboard.postingan');
Route::get('/dashboard/postingan-selesai', [AdminController::class, 'postingan_selesai'])->name('dashboard.postingan_selesai');


Route::get('/dashboard/laporan/setujui/{id}', [LaporanController::class, 'setujui'])->name('laporan.setujui');
Route::get('/dashboard/laporan/tolak/{id}', [LaporanController::class, 'tolak'])->name('laporan.tolak');

