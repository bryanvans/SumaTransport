<?php

namespace App\Http\Controllers;

use App\Models\Route; // Pastikan untuk mengimpor model Route
use Illuminate\Http\Request;

class BusController 
{
    public function index()
{
    $kbtRoutes = Route::with('bus')->whereHas('bus', function($query) {
        $query->where('name', 'KBT');
    })->get();

    $kptRoutes = Route::with('bus')->whereHas('bus', function($query) {
        $query->where('name', 'KPT');
    })->get();

    $tiomazRoutes = Route::with('bus')->whereHas('bus', function($query) {
        $query->where('name', 'TIOMAZ');
    })->get();

    $karyaAgungRoutes = Route::with('bus')->whereHas('bus', function($query) {
        $query->where('name', 'Karya Agung');
    })->get();

    return view('jadwal', compact('kbtRoutes', 'kptRoutes', 'tiomazRoutes', 'karyaAgungRoutes'));
}

}

