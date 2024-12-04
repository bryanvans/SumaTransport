<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule; // Pastikan model Schedule sudah dibuat

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data jadwal dari database
        $schedules = Schedule::all();
    
        // Kirim data ke view
        return view('schedules.index', compact('schedules'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Logika untuk menampilkan form tambah jadwal
        return view('schedules.create'); // Pastikan file view schedules/create.blade.php ada
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi dan penyimpanan data
        $validated = $request->validate([
            'bus_id' => 'required|string',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'from' => 'required|string',
            'destination' => 'required|string',
            'seat_count' => 'required|integer',
            'date' => 'required|date',
        ]);

        Schedule::create($validated);

        return redirect()->back()->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Logika untuk menampilkan detail jadwal tertentu
        $schedule = Schedule::findOrFail($id);
        return view('schedules.show', compact('schedule')); // Pastikan file view schedules/show.blade.php ada
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Logika untuk menampilkan form edit jadwal
        $schedule = Schedule::findOrFail($id);
        return view('schedules.edit', compact('schedule')); // Pastikan file view schedules/edit.blade.php ada
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi dan pembaruan data
        $validated = $request->validate([
            'bus_id' => 'required|string',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'from' => 'required|string',
            'destination' => 'required|string',
            'seat_count' => 'required|integer',
            'date' => 'required|date',
        ]);

        $schedule = Schedule::findOrFail($id);
        $schedule->update($validated);

        return redirect()->back()->with('success', 'Jadwal berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Logika untuk menghapus jadwal
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect()->back()->with('success', 'Jadwal berhasil dihapus!');
    }
}
