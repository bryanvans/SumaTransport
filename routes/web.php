<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;  
use App\Http\Controllers\BusController;
use App\Http\Controllers\QnAController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rute untuk login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Rute untuk register
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Rute untuk Home
Route::resource('/', HomeController::class);
Route::get('jadwal', [HomeController::class, 'Jadwal'])->name('jadwal');
Route::get('rute', [HomeController::class, 'Rute'])->name('rute');
Route::get('kbt', [HomeController::class, 'KBT'])->name('kbt');
Route::get('kpt', [HomeController::class, 'KPT'])->name('kpt');
Route::get('tiomaz', [HomeController::class, 'TIOMAZ'])->name('tiomaz');
Route::get('karyaagung', [HomeController::class, 'KaryaAgung'])->name('karyaagung');
Route::get('home', [HomeController::class, 'index'])->name('home');

// Rute untuk Bus
Route::get('jadwal', [BusController::class, 'index']);

// Rute untuk QnA
Route::get('qna', [QnAController::class, 'index'])->name('qna.index');
Route::post('qna', [QnAController::class, 'store'])->name('qna.store');