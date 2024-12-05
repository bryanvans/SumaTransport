<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            // Cek usertype
            if (Auth::user()->usertype === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif (Auth::user()->usertype === 'user') {
                return redirect()->route('user.dashboard');
            }
        }
    
        return view('login'); // Tampilan login
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home'); // Ganti dengan rute yang sesuai
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
