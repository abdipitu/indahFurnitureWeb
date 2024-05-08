<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPageController;


Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/produk', [LandingPageController::class, 'produk'])->name('produk');
Route::get('/deskripsiproduk', [LandingPageController::class, 'deskripsiproduk'])->name('deskripsiproduk');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pemesanan', function () {
    return view('dashboard.pemesanan');
})->middleware(['auth', 'verified'])->name('pemesanan');

Route::get('/pembayaran', function () {
    return view('dashboard.pembayaran');
})->middleware(['auth', 'verified'])->name('pembayaran');

Route::get('/produkadmin', function () {
    return view('dashboard.produk');
})->middleware(['auth', 'verified'])->name('produkadmin');

Route::get('/tambahproduk', function () {
    return view('dashboard.tambahproduk');
})->middleware(['auth', 'verified'])->name('tambahproduk');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/tambah', [ProdukController::class, 'index'])->name('tambah');
Route::get('/test', [ProdukController::class, 'test'])->name('test');
Route::get('/card', [ProdukController::class, 'card'])->name('card');
Route::get('/testket', [ProdukController::class, 'testket'])->name('testket');

