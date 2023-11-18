<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\signup;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nama_usaha' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            
        ]);

        signup::create([
            'name' => $request->name,
            'nama_usaha' => $request->nama_usaha,
            'email' => $request->email,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password,
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
