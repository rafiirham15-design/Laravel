<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori/create/{kategori?}', [KategoriController::class, 'store']);
Route::get('/kategori/{kategori}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::delete('/produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/create', [PelangganController::class, 'create']);
Route::post('/pelanggan', [PelangganController::class, 'store']);
Route::get('/pelanggan/{pelanggan}/edit', [PelangganController::class, 'edit']);
Route::delete('/pelanggan/{pelanggan}', [PelangganController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/redirect/google', [LoginController::class, 'redirectToGoogle']);
Route::get('/callback/google', [LoginController::class, 'googleCallback']);

Route::get('/', function () {
    return view('dashboard');
});