<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::resource('/', HomeController::class);
Route::get('login', [HomeController::class, 'Login']) -> name('login');
Route::get('register', [HomeController::class, 'Register']) -> name('register');
Route::get('jadwal', [HomeController::class, 'Jadwal']) -> name('jadwal');
Route::get('rute', [HomeController::class, 'Rute']) -> name('rute');
Route::get('qna', [HomeController::class, 'QnA']) -> name('qna');
Route::get('kbt', [HomeController::class, 'KBT']) -> name('kbt');
Route::get('kpt', [HomeController::class, 'KPT']) -> name('kpt');
Route::get('tiomaz', [HomeController::class, 'TIOMAZ']) -> name('tiomaz');
Route::get('karyaagung', [HomeController::class, 'KaryaAgung']) -> name('karyaagung');
Route::get('home', [HomeController::class, 'index']) -> name('home');
