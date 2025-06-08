<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminController;

Route::post('/laporan/store', [LaporanController::class, 'store'])->name('laporan.store');


Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');

// Route::get('/', function () {
//     return view('home');
// });

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/ditemukan', [AdminController::class, 'ditemukan'])->name('dashboard.ditemukan');
    Route::get('/dashboard/kehilangan', [AdminController::class, 'dicari'])->name('dashboard.kehilangan');
    Route::get('/dashboard/postingan', [AdminController::class, 'postingan'])->name('dashboard.postingan');
    Route::get('/dashboard/postingan-selesai', [AdminController::class, 'postingan_selesai'])->name('dashboard.postingan_selesai');


    Route::get('/dashboard/laporan/setujui/{id}', [LaporanController::class, 'setujui'])->name('laporan.setujui');
    Route::get('/dashboard/laporan/tolak/{id}', [LaporanController::class, 'tolak'])->name('laporan.tolak');
    Route::get('/dashboard/laporan/selesai/{id}', [LaporanController::class, 'selesai'])->name('laporan.selesai');

});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
