<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class JadwalController extends Controller
{


    public function index()
    {
        $schedules = Schedule::all();
        return view('jadwal', compact('schedules'));
    }
}