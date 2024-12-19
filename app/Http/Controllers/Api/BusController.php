<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $buses = DB::table('buses')->get(); // Ambil semua data bus

    if ($buses->isEmpty()) {
        return response()->json(['message' => 'No buses found'], 404);
    }

    return response()->json($buses, 200);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'route' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        // Buat data bus baru berdasarkan input
        $bus = Bus::create($validated);

        // Mengembalikan response dalam format JSON
        return response()->json($bus, 201); // Status 201 untuk "Created"
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $bus = DB::table('buses')->where('id', $id)->first(); // Cari bus berdasarkan ID

    if (!$bus) {
        return response()->json(['message' => 'Bus not found'], 404);
    }

    return response()->json($bus, 200);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $bus = DB::table('buses')->where('id', $id)->first();

    if (!$bus) {
        return response()->json(['message' => 'Bus not found'], 404);
    }

    $validated = $request->validate([
        'name' => 'nullable|string',
        'route' => 'nullable|string',
        'capacity' => 'nullable|integer',
    ]);

    DB::table('buses')->where('id', $id)->update($validated);

    return response()->json(['message' => 'Bus updated successfully'], 200);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $bus = DB::table('buses')->where('id', $id)->first();

    if (!$bus) {
        return response()->json(['message' => 'Bus not found'], 404);
    }

    DB::table('buses')->where('id', $id)->delete();

    return response()->json(['message' => 'Bus deleted successfully'], 200);
}

}
