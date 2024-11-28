<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('login'); // Ganti dengan path yang sesuai
    }

    // Memproses login pengguna
    public function login(Request $request)
    {
        // Validasi data input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Coba login
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('home'); // Ganti dengan rute yang sesuai
        }

        return back()->with('error', 'Email atau password salah.');
    }

    // Menampilkan halaman registrasi
    public function showRegister()
    {
        return view('register'); // Ganti dengan path yang sesuai
    }

    // Memproses registrasi pengguna baru
    public function register(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    // Mengeluarkan pengguna dari sesi
    public function logout(Request $request)
    {
        Auth::logout(); // Mengeluarkan pengguna dari sesi

        // Hapus dan regenerate session token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
    }
}

