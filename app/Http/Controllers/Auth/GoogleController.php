<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    /**
     * Redirect user to Google for authentication.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle callback from Google.
     */
    public function handleGoogleCallback()
    {
        try {
            // Mendapatkan informasi user dari Google
            $googleUser = Socialite::driver('google')->user();

            // Periksa apakah user sudah terdaftar berdasarkan email
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'password' => bcrypt(str()->random(24)), // Buat password acak untuk user baru
                ]
            );

            // Login user ke aplikasi
            Auth::login($user, true);

            // Redirect ke halaman utama setelah login/register berhasil
            return redirect()->route('home'); // Ganti 'home' dengan rute halaman utama Anda
        } catch (\Exception $e) {
            // Tangani error jika terjadi masalah selama proses autentikasi
            return redirect()->route('login')->with('error', 'Login dengan Google gagal. Silakan coba lagi.');
        }
    }
}
