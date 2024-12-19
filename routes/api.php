<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\QnAController;
use App\Http\Controllers\AdminScheduleController;
use App\Http\Controllers\Api\BusController;


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


Route::get('/qna', [QnAController::class, 'index']); // Get all questions
Route::post('/qna', [QnAController::class, 'store']); // Create a new question
Route::get('/qna/{id}', [QnAController::class, 'show']); // Get a single question
Route::put('/qna/{id}', [QnAController::class, 'update']); // Update a question
Route::delete('/qna/{id}', [QnAController::class, 'destroy']); // Delete a question

// Endpoint untuk API schedules
Route::get('/schedules', [AdminScheduleController::class, 'apiIndex']); // GET all schedules
Route::get('/schedules/{id}', [AdminScheduleController::class, 'apiShow']); // GET schedule by ID
Route::post('/schedules', [AdminScheduleController::class, 'apiStore']); // POST new schedule
Route::put('/schedules/{id}', [AdminScheduleController::class, 'apiUpdate']); // PUT update schedule
Route::delete('/schedules/{id}', [AdminScheduleController::class, 'apiDestroy']); // DELETE schedule

Route::get('/buses', [BusController::class, 'index']); // Mendapatkan semua data bus
Route::get('/buses/{id}', [BusController::class, 'show']); // Mendapatkan data bus berdasarkan ID
Route::post('/buses', [BusController::class, 'store']); // Menambahkan data bus baru
Route::put('/buses/{id}', [BusController::class, 'update']); // Mengupdate data bus berdasarkan ID
Route::delete('/buses/{id}', [BusController::class, 'destroy']); // Menghapus data bus berdasarkan ID