<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    // Menampilkan halaman profil pengguna
    public function show()
    {
        return view('profile.show');  // Gantilah dengan nama view yang sesuai
    }

    // Menangani update profil pengguna
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi gambar
        ]);

        // Mendapatkan user yang sedang login
        $user = Auth::user();
        
        // Mengupdate nama pengguna
        $user->name = $request->input('name');

        // Jika ada gambar avatar yang diupload
        if ($request->hasFile('avatar')) {
            // Hapus gambar lama jika ada
            if ($user->avatar) {
                Storage::delete('public/' . $user->avatar);
            }

            // Simpan gambar baru ke folder public/avatars
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $avatarPath;  // Simpan path gambar ke database
        }

        // Simpan perubahan ke database
        $user->save();

        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->route('profile.show')->with('success', 'Profil Anda berhasil diperbarui.');
    }
}
