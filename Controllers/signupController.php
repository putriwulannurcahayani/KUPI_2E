<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class signupController extends Controller
{
    public function index() : View
{
    return view('auth.signup');
}

public function register(Request $request)
{
    $validate = $request->validate([
        "nama" => "required",
        "nama_usaha" => "required",
        "email" => "required|unique:users",
        "password" => "required",
    ]);

    User::create($validate);
    return redirect()->route("login")->with('successAddSekolah', "Sekolah Berhasil Register");
}
}
    