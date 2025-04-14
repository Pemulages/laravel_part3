<?php

use App\Http\Controllers\MemeriksaController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use App\Models\Obat;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout.landingpage'); // Pastikan file berada di resources/views/layout/landingpage.blade.php
// });

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/auth/register', function () {
    return view('auth.register');
});

Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard');
});

Route::get('/dokter/obat', [ObatController::class,"dashboard"]);

Route::get('/dokter/memeriksa', [MemeriksaController::class, "dashboard"]);

Route::get('/pasien/dashboard', function () {
    return view('pasien.dashboard');
});

Route::get('/pasien/riwayat', function () {
    return view('pasien.riwayat');
});

Route::get('/pasien/periksa', [PeriksaController::class, "dashboard"]);