<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPageController;


Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/produk', [LandingPageController::class, 'produk'])->name('produk');

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
