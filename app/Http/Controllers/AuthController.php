<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginsimpan(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        return back()->with('LoginError', 'Login Gagal');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registersimpan(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return redirect('login')->with('success', 'register sukses');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}