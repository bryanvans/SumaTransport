<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users', // Validasi username
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',  // password_confirmation harus ada
        ]);

        // Simpan data user baru dengan metode create
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username, // Menyimpan username
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Redirect atau response sukses
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }
}
