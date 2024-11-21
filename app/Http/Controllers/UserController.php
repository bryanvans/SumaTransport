<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tampilkan halaman profil
    public function showProfile()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang login
        return view('profile', compact('user'));
    }
    

    // Update profil pengguna
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $avatarPath;
        }

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui.');
    }

    // Ubah password pengguna
    public function updatePassword(Request $request)
{
    // Validasi input
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed', // Password baru harus dikonfirmasi
    ]);

    // Periksa apakah password lama sesuai
    if (!Hash::check($request->current_password, Auth::user()->password)) {
        return back()->withErrors(['current_password' => 'Kata sandi lama tidak sesuai.']);
    }

    // Simpan password baru
    Auth::user()->update([
        'password' => Hash::make($request->new_password),
    ]);

    // Kembalikan respon berhasil
    return back()->with('success', 'Kata sandi berhasil diperbarui.');
}

    public function deleteAccount()
{
    $user = Auth::user();
    $user->delete();

    Auth::logout(); // Logout pengguna setelah akun dihapus
    return redirect('/')->with('success', 'Akun berhasil dihapus.');
}

}
