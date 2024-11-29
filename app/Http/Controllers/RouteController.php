<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Route::all();
        return response()->json($routes, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'start_point' => 'required|string',
            'end_point' => 'required|string',
    ]);

        $route = Route::create($validated);
        return response()->json($route, 201);
    }

    public function show($id)
    {
        $route = Route::findOrFail($id);
        return response()->json($route, 200);
    }

    public function update(Request $request, $id)
    {
        $route = Route::findOrFail($id);
        $route->update($request->all());
        return response()->json($route, 200);
    }

    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();
        return response()->json(null, 204);
    }

}
