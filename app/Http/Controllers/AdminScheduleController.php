<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AdminScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('admin.bus-schedule', compact('schedules'));
    }

    public function create()
    {
        return view('admin.create-schedule');
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'bus_name' => 'required|string|max:255',
            'departure_time' => 'required|date_format:H:i',
            'route' => 'required|string|max:255',
        ]);

        // Simpan ke database
        Schedule::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.bus-schedule')->with('success', 'Jadwal bus berhasil ditambahkan!');
    }

    // API: Ambil semua jadwal dengan HATEOAS
    public function apiIndex()
    {
        $schedules = Schedule::all();

        $response = $schedules->map(function ($schedule) {
            return [
                'id' => $schedule->id,
                'bus_name' => $schedule->bus_name,
                'departure_time' => $schedule->departure_time,
                'route' => $schedule->route,
                'links' => [
                    'self' => url("/api/schedules/{$schedule->id}"),
                    'update' => url("/api/schedules/{$schedule->id}/update"),
                    'delete' => url("/api/schedules/{$schedule->id}/delete"),
                ]
            ];
        });

        return response()->json([
            'success' => true,
            'message' => 'Daftar semua jadwal',
            'data' => $response
        ], 200);
    }

    // API: Ambil satu jadwal berdasarkan ID
    public function apiShow($id)
    {
        try {
            $schedule = Schedule::findOrFail($id);

            return response()->json([
                'success' => true,
                'message' => 'Detail jadwal',
                'data' => [
                    'id' => $schedule->id,
                    'bus_name' => $schedule->bus_name,
                    'departure_time' => $schedule->departure_time,
                    'route' => $schedule->route,
                    'links' => [
                        'self' => url("/api/schedules/{$id}"),
                        'update' => url("/api/schedules/{$id}/update"),
                        'delete' => url("/api/schedules/{$id}/delete"),
                        'all_schedules' => url("/api/schedules")
                    ]
                ]
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Jadwal tidak ditemukan'
            ], 404);
        }
    }

    // API: Tambahkan jadwal baru
    public function apiStore(Request $request)
    {
        $validated = $request->validate([
            'bus_name' => 'required|string|max:255',
            'departure_time' => 'required|date_format:H:i',
            'route' => 'required|string|max:255',
        ]);

        $schedule = Schedule::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Jadwal berhasil ditambahkan!',
            'data' => [
                'id' => $schedule->id,
                'bus_name' => $schedule->bus_name,
                'departure_time' => $schedule->departure_time,
                'route' => $schedule->route,
                'links' => [
                    'self' => url("/api/schedules/{$schedule->id}"),
                    'all_schedules' => url("/api/schedules")
                ]
            ]
        ], 201);
    }

    // API: Update jadwal berdasarkan ID
    public function apiUpdate(Request $request, $id)
    {
        try {
            $schedule = Schedule::findOrFail($id);

            $validated = $request->validate([
                'bus_name' => 'nullable|string|max:255',
                'departure_time' => 'nullable|date_format:H:i',
                'route' => 'nullable|string|max:255',
            ]);

            if (empty(array_filter($validated))) {
                return response()->json([
                    'success' => false,
                    'message' => 'Tidak ada data yang diperbarui.'
                ], 422);
            }

            $schedule->update($validated);

            return response()->json([
                'success' => true,
                'message' => 'Jadwal berhasil diperbarui!',
                'data' => [
                    'id' => $schedule->id,
                    'bus_name' => $schedule->bus_name,
                    'departure_time' => $schedule->departure_time,
                    'route' => $schedule->route,
                    'links' => [
                        'self' => url("/api/schedules/{$id}"),
                        'delete' => url("/api/schedules/{$id}/delete"),
                        'all_schedules' => url("/api/schedules")
                    ]
                ]
            ], 200);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Jadwal tidak ditemukan'
            ], 404);
        }
    }

    // API: Hapus jadwal berdasarkan ID
    public function apiDestroy($id)
    {
        try {
            $schedule = Schedule::findOrFail($id);
            $schedule->delete();

            return response()->json([
                'success' => true,
                'message' => 'Jadwal berhasil dihapus',
                'links' => [
                    'all_schedules' => url("/api/schedules")
                ]
            ], 200);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Jadwal tidak ditemukan'
            ], 404);
        }
    }
}
