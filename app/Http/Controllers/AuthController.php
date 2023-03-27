<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password')))
            return redirect()->route('home');

        return redirect()->route('login')->withError("Email or password not matched");
    }

    public function logout()
    {
        \Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
