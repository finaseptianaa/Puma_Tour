<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::middleware('guest')->group(function () {
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login/submit',[AuthController::class,'loginSubmit']);
    Route::get('/registrasi',[AuthController::class,'registrasi'])->name('registrasi');
    Route::post('/registrasi/submit',[AuthController::class,'registrasiSubmit']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout',[AuthController::class,'logout']);
    Route::get('/dashboard',[DashboardController::class,'tampil']);
    
    Route::get('/paket',[PaketController::class,'tampil']);
    Route::get('/paket/tambah',[PaketController::class,'tambah']);
    Route::post('/paket/submit',[PaketController::class,'submit']);
    Route::post('/paket/hapus/{id}',[PaketController::class,'hapus']);
    Route::get('/paket/edit/{id}',[PaketController::class,'edit']);
    Route::post('/paket/update/{id}',[PaketController::class,'update']);

    Route::get('/manajemen/pemesanan', [PemesananController::class, 'manajemenPemesanan']);
    Route::post('/manajemen/pemesanan/status/{id}', [PemesananController::class, 'manajemenPemesananStatus']);
    
    Route::get('/pemesanan',[PemesananController::class,'tampil']);
    Route::get('/pemesanan/rincian/{id}',[PemesananController::class,'rincian']);
    Route::post('/pemesanan/pembayaran/{id}',[PemesananController::class,'pembayaran']);
    

    Route::get('/laporan',[LaporanController::class,'tampil']);

    Route::get('/pengguna',[PenggunaController::class,'tampil']);
    Route::get('/pengguna/tambah',[PenggunaController::class,'tambah']);
    Route::post('/pengguna/submit',[PenggunaController::class,'submit']);
    Route::post('/pengguna/hapus/{id}',[PenggunaController::class,'hapus']);
    Route::get('/pengguna/edit/{id}',[PenggunaController::class,'edit']);
    Route::post('/pengguna/update/{id}',[PenggunaController::class,'update']);

    //buat konsumen
    Route::get('/pemesanan/paket/{id}', [PemesananController::class, 'pemesananPaket']);
    Route::post('/pemesanan/paket/{id}/submit', [PemesananController::class, 'pemesananPaketSubmit']);
});
