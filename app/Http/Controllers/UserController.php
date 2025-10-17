<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => "required|string|max:255",
            'email' => "required|string|email|max:255|unique:users",
            'password' => "required|string|min:8",
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'User created successfully');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => "required|string|email|max:255",
            'password' => "required|string|min:8",
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Login successful!');
        }

        return back()->with('error', "Worg credentials");
    }

    public function logout() {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout successful!');
    }
}
