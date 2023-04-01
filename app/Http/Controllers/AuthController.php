<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check())
            return redirect('/');
        return view('index');
    }

    public function login(Request $request)
    {
        $cred = $request->only('email', 'password');
        if (Auth::attempt($cred)) {
            return redirect('/');
        }

        $message = 'Email or password not matched';

        return view('index', compact('message'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
