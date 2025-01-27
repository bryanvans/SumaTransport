<?php

namespace App\Http\Controllers;

use App\Models\BusSchedule;
use Illuminate\Http\Request;

class BusScheduleController extends Controller
{

    // Menampilkan form untuk menambahkan jadwal bus
    public function create()
    {
        return view('admin.create-schedule'); // Pastikan path sesuai dengan lokasi view
    }

    // Menyimpan jadwal bus baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'bus_name' => 'required|string|max:255',
            'departure_time' => 'required|date_format:H:i',
            'route' => 'required|string|max:255',
        ]);

        // Menyimpan jadwal baru ke database
        BusSchedule::create([
            'bus_name' => $validated['bus_name'],
            'departure_time' => $validated['departure_time'],
            'route' => $validated['route'],
        ]);

        // Redirect setelah menyimpan
        return redirect()->route('bus-schedules.index')->with('success', 'Jadwal bus berhasil ditambahkan!');
    }

    public function index()
{
    $schedules = BusSchedule::all();
    return view('admin.bus-schedule', compact('schedules'));
}

}
