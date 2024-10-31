<?php

namespace App\Http\Controllers;

use App\Models\Route; 
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
{
    $kbtRoutes = Route::with(['bus', 'bus.facilities'])->whereHas('bus', function($query) {
        $query->where('name', 'KBT');
    })->get();

    $kptRoutes = Route::with(['bus', 'bus.facilities'])->whereHas('bus', function($query) {
        $query->where('name', 'KPT');
    })->get();

    $tiomazRoutes = Route::with(['bus', 'bus.facilities'])->whereHas('bus', function($query) {
        $query->where('name', 'TIOMAZ');
    })->get();

    $karyaAgungRoutes = Route::with(['bus', 'bus.facilities'])->whereHas('bus', function($query) {
        $query->where('name', 'Karya Agung');
    })->get();

    return view('jadwal', compact('kbtRoutes', 'kptRoutes', 'tiomazRoutes', 'karyaAgungRoutes'));
}

}

