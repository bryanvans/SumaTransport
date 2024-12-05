<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\QnAController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\BusScheduleController;


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
Route::controller(AuthController::class)->group(function () {
    Route::get('login', function () {
        if (Auth::check()) {
            // Periksa usertype
            if (Auth::user()->usertype === 'admin') {
                return redirect()->route('dashboard');
            } elseif (Auth::user()->usertype === 'user') {
                return redirect()->route('home');
            }
        }
        return app(AuthController::class)->showLogin();
    })->name('login');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->name('logout');
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
    Route::get('kbt', 'KBT')->name('kbt');
    Route::get('kpt', 'KPT')->name('kpt');
    Route::get('tiomaz', 'TIOMAZ')->name('tiomaz');
    Route::get('karyaagung', 'KaryaAgung')->name('karyaagung');
});

// Rute untuk jadwal di BusController
Route::controller(BusController::class)->group(function () {
    Route::get('jadwal', 'index')->name('jadwal');
});

// Rute untuk halaman QnA
Route::controller(QnAController::class)->group(function () {
    Route::get('qna', 'index')->name('qna.index'); // This defines the 'qna.index' route
    Route::post('qna', 'store')->name('qna.store');
});


// Rute untuk halaman dashboard dan homepage (statik)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');


Route::get('/bus', function () {
    return view('bus');
});

// Route::get('/jadwalbus', function () {
//     return view('jadwalbus');
// })->name('jadwalbus');

Route::get('/jadwalbus', [BusScheduleController::class, 'index'])->name('jadwalbus');

// routes/web.php
Route::get('/rutebus', function () {
    return view('rutebus');
})->name('rutebus');

Route::get('/busdashboard', function () {
    return view('busdashboard');
})->name('busdashboard');

Route::get('/qnadashboard', function () {
    return view('qnadashboard');
})->name('qnadashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');  

Route::get('/rutebus', function () {
    return view('rutebus');
})->name('rutebus');

Route::get('/qnadashboard', function () {
    return view('qnadashboard');
})->name('qnadashboard');

// Route::get('/jadwalbus', function () {
//     return view('jadwalbus');
// })->name('jadwalbus');

// Rute untuk sistem CRUD Profil (auth middleware)
Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile', 'showProfile')->name('profile.show'); // Read Profil
        Route::put('/profile/update', 'updateProfile')->name('profile.update'); // Update Profil
        Route::post('/password/update', 'updatePassword')->name('password.update'); // Update Password
        Route::delete('/profile', 'deleteAccount')->name('profile.delete'); // Delete Profil
    });
});


// Rute untuk login/register dengan Google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);



Route::resource('bus-schedules', BusScheduleController::class);


Route::resource('schedules', ScheduleController::class);


Route::post('/jadwalbus', [BusScheduleController::class, 'store'])->name('jadwalbus.store');
