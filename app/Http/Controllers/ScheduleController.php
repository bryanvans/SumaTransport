<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Route;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // Tampilkan semua jadwal
    public function index()
    {
        $buses = Bus::with('routes')->get();
        return view('jadwal.index', compact('buses'));
    }

    // Form tambah jadwal
    public function create()
    {
        $buses = Bus::all();
        return view('jadwal.create', compact('buses'));
    }

    // Simpan jadwal baru
    public function store(Request $request)
    {
        $request->validate([
            'bus_id' => 'required|exists:buses,id',
            'departure_city' => 'required|string',
            'arrival_city' => 'required|string',
            'departure_time' => 'required|date_format:H:i',
            'arrival_time' => 'required|date_format:H:i',
        ]);

        Route::create($request->all());
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    // Form edit jadwal
    public function edit($id)
    {
        $route = Route::findOrFail($id);
        $buses = Bus::all();
        return view('jadwal.edit', compact('route', 'buses'));
    }

    // Update jadwal
    public function update(Request $request, $id)
    {
        $request->validate([
            'bus_id' => 'required|exists:buses,id',
            'departure_city' => 'required|string',
            'arrival_city' => 'required|string',
            'departure_time' => 'required|date_format:H:i',
            'arrival_time' => 'required|date_format:H:i',
        ]);

        $route = Route::findOrFail($id);
        $route->update($request->all());
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui!');
    }

    // Hapus jadwal
    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();
        return redirect()->route('jadwal')->with('success', 'Jadwal berhasil dihapus!');
    }
}