<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('layouts.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Coba melakukan otentikasi
        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, arahkan ke dashboard
            return redirect()->route('dashboard');
        } else {
            // Jika otentikasi gagal, kembalikan ke halaman login dengan pesan kesalahan
            return redirect()->back()->withInput()->withErrors('Email atau password tidak valid');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
