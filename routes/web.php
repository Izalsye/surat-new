<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Jika user belum login, akses login & root redirect
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login'); // root diarahkan ke login
    });

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

// Jika user sudah login
Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::view('/', 'index');
    Route::view('/surat-masuk', 'surat_masuk');
});
