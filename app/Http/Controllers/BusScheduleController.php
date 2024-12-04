<?php

namespace App\Http\Controllers;

use App\Models\BusSchedule;
use Illuminate\Http\Request;

class BusScheduleController extends Controller
{
    // Other methods...

    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'id_bus' => 'required',
            'waktu_keberangkatan' => 'required',
            'waktu_tiba' => 'required',
            'dari' => 'required',
            'tujuan' => 'required',
            'jumlah_kursi' => 'required|integer',
            'tanggal' => 'required|date',
        ]);

        // Store the new bus schedule in the database
        $busSchedule = BusSchedule::create($request->all());

        // Return the new bus schedule data as a response
        return response()->json($busSchedule);
    }
}
