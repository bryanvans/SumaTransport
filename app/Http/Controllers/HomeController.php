<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('home');
    }

    public function Login()
    {
        //
        return view('Login');
    }

    public function Register()
    {
        //
        return view('Register');
    }

    public function Jadwal()
    {
        //
        return view('jadwal');
    }

    public function Rute()
    {
        //
        return view('rute');
    }

    public function QnA()
    {
        //
        return view('qna');
    }

    public function KBT()
    {
        //
        return view('informasibus.kbt');
    }

    public function KPT()
    {
        //
        return view('informasibus.kpt');
    }

    public function TIOMAZ()
    {
        //
        return view('informasibus.tiomaz');
    }

    public function KaryaAgung()
    {
        //
        return view('informasibus.karyaagung');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
