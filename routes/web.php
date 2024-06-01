<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPageController;


Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/produk', [LandingPageController::class, 'produk'])->name('produk');
Route::get('/deskripsiproduk/{id}', [LandingPageController::class, 'deskripsiproduk'])->name('deskripsiproduk');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/user', function () {
//     return view('pengguna.dashboard');
// })->middleware(['auth', 'verified'])->name('user');

Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');

Route::get('/transaksi', function () {
    return view('dashboard.transaksi');
})->middleware(['auth', 'verified'])->name('transaksi');

// Route::get('/pembayaran', function () {
//     return view('dashboard.pembayaran');
// })->middleware(['auth', 'verified'])->name('pembayaran');

Route::get('/produkadmin', [ProdukController::class, 'showproduk'])->middleware(['auth', 'verified'])->name('produkadmin');

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
Route::post('/hapus/{id}', [ProdukController::class, 'hapus'])->name('hapus');
Route::post('/update/{id}', [ProdukController::class, 'update'])->name('update');
Route::get('/test', [ProdukController::class, 'test'])->name('test');
Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
Route::get('/card', [ProdukController::class, 'card'])->name('card');
Route::get('/testket', [ProdukController::class, 'testket'])->name('testket');
// Route::get('/', [ProdukController::class, 'testket'])->name('testket');

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');

