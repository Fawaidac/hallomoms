<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('layouts.auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email == 'hellomom@gmail.com' && $password == 'isadmin') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors('Email atau password tidak valid');
        }
    }
}
