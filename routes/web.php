<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QnAController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\GoogleController;

/*
|-------------------------------------------------------------------------- 
| Web Routes
|-------------------------------------------------------------------------- 
*/
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'showLogin')->name('login');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->name('logout');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'showRegister')->name('register');
    Route::post('register', 'register');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('home', 'index')->name('home');
    Route::get('rute', 'Rute')->name('rute');
    Route::get('kbt', 'KBT')->name('kbt');
    Route::get('kpt', 'KPT')->name('kpt');
    Route::get('tiomaz', 'TIOMAZ')->name('tiomaz');
    Route::get('karyaagung', 'KaryaAgung')->name('karyaagung');
});

// Rute untuk halaman QnA
Route::controller(QnAController::class)->group(function () {
    Route::get('qna', 'index')->name('qna.index');
    Route::post('qna', 'store')->name('qna.store');
});

// Rute untuk halaman dashboard dan homepage (statik)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rute untuk halaman lainnya seperti bus, jadwal, dll.
Route::get('/bus', function () {
    return view('bus');
});
Route::get('/jadwalbus', function () {
    return view('jadwalbus');
})->name('jadwalbus');
Route::get('/rutebus', function () {
    return view('rutebus');
})->name('rutebus');
Route::get('/busdashboard', function () {
    return view('busdashboard');
})->name('busdashboard');
Route::get('/qnadashboard', function () {
    return view('qnadashboard');
})->name('qnadashboard');

// Rute untuk sistem CRUD Profil (auth middleware)
Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile', 'showProfile')->name('profile.show');
        Route::put('/profile/update', 'updateProfile')->name('profile.update');
        Route::post('/password/update', 'updatePassword')->name('password.update');
        Route::delete('/profile', 'deleteAccount')->name('profile.delete');
    });
});

// Rute untuk login/register dengan Google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// Rute untuk halaman Jadwal Bus
Route::get('/jadwal', function () {
    return view('jadwal'); // Pastikan view file berada di resources/views/jadwal.blade.php
})->name('jadwal');
