<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Route;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Http\Resources\ScheduleResource;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all(); // Ambil semua jadwal
        return ScheduleResource::collection($schedules); // Kembalikan sebagai koleksi dengan HATEOAS
    }

    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);
        return new ScheduleResource($schedule); // Kembalikan satu jadwal dengan HATEOAS
    }
}
