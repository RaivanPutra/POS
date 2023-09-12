<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\LoginController;


Route::get('/', [HomeController::class, 'index']);
Route::get('faq', [FaqController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('profile', [ProfileController::class, 'index']);
Route::resource('produk', ProdukController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('pemasok', PemasokController::class);
Route::resource('barang', BarangController::class);
Route::resource('transaksi', TransaksiController::class);
// Login
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/cek', [LoginController::class, 'cekLogin'])->name('cekLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// Route untuk yang sudah login
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('faq', [FaqController::class, 'index']);
    Route::get('contact', [ContactController::class, 'index']);
    Route::get('profile', [ProfileController::class, 'index']);
    Route::resource('produk', ProdukController::class);
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('pemasok', PemasokController::class);
    Route::resource('barang', BarangController::class);
});
