<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BusScheduleController extends Controller
{
    public function index()
    {
        $busSchedules = BusSchedule::all();
        return view('jadwalbus', compact('busSchedules'));
    }
    
    
    public function store(Request $request)
{
    $request->validate([
        'id_bus' => 'required|exists:buses,id',
        'waktu_keberangkatan' => 'required|date_format:H:i',
        'waktu_tiba' => 'required|date_format:H:i',
        'dari' => 'required|string',
        'tujuan' => 'required|string',
        'jumlah_kursi' => 'required|integer|min:1',
        'tanggal' => 'required|date',
    ]);

    BusSchedule::create($request->all());
    return redirect()->route('bus-schedules.index')->with('success', 'Jadwal Bus berhasil ditambahkan.');
}

}
