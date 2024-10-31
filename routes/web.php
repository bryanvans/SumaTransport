<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\QnAController;
use App\Http\Controllers\AuthController;

// Rute untuk login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk register
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute halaman-halaman lain di HomeController
Route::get('jadwal', [BusController::class, 'index'])->name('jadwal');
Route::get('rute', [HomeController::class, 'Rute'])->name('rute');
Route::get('qna', [QnAController::class, 'index'])->name('qna');
Route::post('qna', [QnAController::class, 'store'])->name('qna.store');
Route::get('kbt', [HomeController::class, 'KBT'])->name('kbt');
Route::get('kpt', [HomeController::class, 'KPT'])->name('kpt');
Route::get('tiomaz', [HomeController::class, 'TIOMAZ'])->name('tiomaz');
Route::get('karyaagung', [HomeController::class, 'KaryaAgung'])->name('karyaagung');
