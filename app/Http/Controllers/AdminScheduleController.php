<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class AdminScheduleController extends Controller
{
    // Menampilkan halaman untuk membuat jadwal bus
    public function create()
    {
        return view('admin.create-schedule'); // Pastikan path sesuai dengan lokasi file blade
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
        Schedule::create([
            'bus_name' => $validated['bus_name'],
            'departure_time' => $validated['departure_time'],
            'route' => $validated['route'],
        ]);

        // Redirect kembali ke dashboard admin dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'Jadwal bus berhasil ditambahkan!');
    }

    public function index()
{
    // Ambil semua jadwal bus dari database
    $schedules = Schedule::all();

    // Tampilkan view dengan data jadwal
    return view('admin.bus-schedule', compact('schedules'));
}
}
