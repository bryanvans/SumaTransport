<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    // Menampilkan semua rute berdasarkan bus tertentu
    public function index()
    {
        // Mengambil semua rute untuk bus tertentu dan terkait fasilitasnya
        $kbtRoutes = Route::with(['buses', 'buses.facilities'])->whereHas('buses', function($query) {
            $query->where('name', 'KBT');
        })->get();

        $kptRoutes = Route::with(['buses', 'buses.facilities'])->whereHas('buses', function($query) {
            $query->where('name', 'KPT');
        })->get();

        $tiomazRoutes = Route::with(['buses', 'buses.facilities'])->whereHas('buses', function($query) {
            $query->where('name', 'TIOMAZ');
        })->get();

        $karyaAgungRoutes = Route::with(['buses', 'buses.facilities'])->whereHas('buses', function($query) {
            $query->where('name', 'Karya Agung');
        })->get();

        // Mengirimkan data ke view
        return view('jadwal', compact('kbtRoutes', 'kptRoutes', 'tiomazRoutes', 'karyaAgungRoutes'));
    }

    // API untuk mendapatkan data bus dan rute
    public function apiIndex()
    {
        // Mengambil semua bus dan rute terkait
        $buses = Bus::with(['routes', 'facilities'])->get();

        // Mengembalikan data dalam format JSON
        return response()->json($buses);
    }
}




