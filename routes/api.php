<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\Api\BusController;
use App\Http\Controllers\QnAController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/buses', [BusController::class, 'index']); // Menampilkan semua bus
Route::get('/buses/{id}', [BusController::class, 'show']); // Menampilkan detail bus
Route::post('/buses', [BusController::class, 'store']); // Menambahkan bus baru
Route::put('/buses/{id}', [BusController::class, 'update']); // Mengupdate data bus
Route::delete('/buses/{id}', [BusController::class, 'destroy']); // Menghapus data bus

Route::get('/qna', [QnAController::class, 'index']); // Get all questions
Route::post('/qna', [QnAController::class, 'store']); // Create a new question
Route::get('/qna/{id}', [QnAController::class, 'show']); // Get a single question
Route::put('/qna/{id}', [QnAController::class, 'update']); // Update a question
Route::delete('/qna/{id}', [QnAController::class, 'destroy']); // Delete a question


