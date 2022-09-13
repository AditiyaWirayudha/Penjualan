<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController,
    BarangController,
    SuplierController,
    PembeliController,
    DashboardController,
    PembelianController
};

//  Route dashboard

Route::get('/', [DashboardController::class, 'index']);

// Route barang

Route::resource('/barang',BarangController::class);
Route::get('/barang/{id}/hapus', [BarangController::class,'destroy']);
Route::get('/barang/{id}/edit', [BarangController::class,'edit']);

// route kategori

Route::resource('/kategori', KategoriController::class);
Route::get('/kategori/hapus/{id}', [KategoriController::class,'destroy']);
Route::get('/kategori/edit/{id}', [KategoriController::class,'edit']);

// Route suplier

Route::resource('/suplier',SuplierController::class);
Route::get('/suplier/{id}/hapus', [SuplierController::class,'destroy']);
Route::get('/suplier/{id}/edit', [SuplierController::class,'edit']);

// route pembeli

Route::resource('/pembeli',PembeliController::class);
Route::get('/pembeli/{id}/hapus', [PembeliController::class,'destroy']);
Route::get('/pembeli/{id}/edit', [PembeliController::class,'edit']);

//route pembelian

Route::resource('/pembelian',PembelianController::class);
Route::get('/pembelian/{id}/hapus', [PembelianController::class,'destroy']);
Route::get('/pembelian/{id}/edit', [PembelianController::class,'edit']);

//route penjualan

Route::get('/penjualan', function () {
    return view('penjualan.index');
});


