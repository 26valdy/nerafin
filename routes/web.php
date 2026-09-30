<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.submit');
});

Route::middleware('auth')->group(function () {

    // Semua user yang sudah login
    Route::view('/', 'home')
        ->name('home');

    // Khusus Bendahara
    Route::get('/test-bendahara', function () {
        return 'Akses Bendahara berhasil.';
    })->middleware('role:Bendahara');

    // Khusus Ketua
    Route::get('/test-ketua', function () {
        return 'Akses Ketua berhasil.';
    })->middleware('role:Ketua');

    // Contoh route yang boleh diakses kedua role
    Route::get('/test-keuangan', function () {
        return 'Akses Keuangan berhasil.';
    })->middleware('role:Bendahara,Ketua');
});