<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalOperasiController;
use App\Http\Controllers\JadwalPraktikController;
use App\Http\Controllers\ProfilDokterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dokter', [DokterController::class, 'index']);
Route::get('/profil_dokter', [ProfilDokterController::class, 'index']);
Route::get('/jadwal_praktik',[JadwalPraktikController::class, 'index']);
Route::get('/jadwal_operasi',[JadwalOperasiController::class, 'index']);