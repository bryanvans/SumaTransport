<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Bisa ditambahkan data yang ingin ditampilkan di dashboard
        return view('admin.dashboard');
    }
}
