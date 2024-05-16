<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    // Menampilkan halaman landing page
    public function index() {
        return view('frontend.landing'); // Ganti dengan tampilan halaman landing page Anda
    }

    // Menampilkan halaman login
    public function showLoginForm() {
        return view('auth.login');
    }

    // Menangani login
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin');
        } else {
            return redirect()->route('login')->withErrors('Username dan Password yang dimasukkan salah')->withInput();
        }
    }
}
