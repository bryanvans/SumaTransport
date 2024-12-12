<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QnAController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BusScheduleController;
use App\Http\Controllers\AdminDashboardController; 
use App\Http\Controllers\AdminScheduleController;

/*
|-------------------------------------------------------------------------- 
| Web Routes
|-------------------------------------------------------------------------- 
*/

// Rute untuk login/logout
Route::controller(AuthController::class)->group(function () {
    Route::get('login', function () {
        if (Auth::check()) {
            // Periksa usertype
            if (Auth::user()->usertype === 'admin') {
                return redirect()->route('admin.dashboard'); // Ke halaman dashboard admin
            } elseif (Auth::user()->usertype === 'user') {
                return redirect()->route('home'); // Ke halaman home user
            }
        }
        return app(AuthController::class)->showLogin();
    })->name('login');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->name('logout');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('home');
    });
});

// Rute untuk register
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'showRegister')->name('register');
    Route::post('register', 'register');
});

// Rute untuk halaman utama
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('home', 'index')->name('home');
    Route::get('rute', 'Rute')->name('rute');
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
    Route::get('/jadwal/bus-schedule', [JadwalController::class, 'busSchedule'])->name('jadwal.bus-schedule');
    Route::get('/admin/bus-schedule', [BusScheduleController::class, 'index'])->name('admin.bus-schedule.index');
    Route::get('kbt', 'KBT')->name('kbt');
    Route::get('kpt', 'KPT')->name('kpt');
    Route::get('tiomaz', 'TIOMAZ')->name('tiomaz');
    Route::get('karyaagung', 'KaryaAgung')->name('karyaagung');
});

// Rute untuk halaman QnA
Route::controller(QnAController::class)->group(function () {
    Route::get('qna', 'index')->name('qna.index');
    Route::post('qna', 'store')->name('qna.store');
    Route::post('qna/answer/{question}', 'storeAnswer')->name('qna.answer.store');
});

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

// Rute untuk bus schedules
Route::resource('bus-schedules', BusScheduleController::class);
Route::resource('schedules', ScheduleController::class);
Route::post('/jadwalbus', [BusScheduleController::class, 'store'])->name('jadwalbus.store');

// Rute untuk halaman Admin (hanya untuk user yang login sebagai admin)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/schedule/create', [AdminScheduleController::class, 'create'])->name('admin.schedule.create');
    Route::post('admin/schedule', [AdminScheduleController::class, 'store'])->name('admin.schedule.store');
    Route::get('admin/bus-schedule', [AdminScheduleController::class, 'index'])->name('admin.bus-schedule');
});
