<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// --- Tambahkan Rute Registrasi ---
Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');

// Rute untuk menampilkan halaman login
// Middleware 'guest' memastikan hanya pengguna yang belum login yang bisa mengakses halaman ini.
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
            ->middleware('guest')
            ->name('login');

// Rute untuk memproses permintaan login dari form
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
            ->middleware('guest');

// Rute untuk memproses logout
// File: routes/auth.php
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->middleware('auth')
            ->name('logout');
