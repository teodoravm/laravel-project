<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|min:5|email|unique:users,email',
            'password' => 'required|min:3|confirmed:psw-repeat',
        ], [
            'email.unique' => 'Имейл адресът вече е регистриран.',
        ]);
              

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // автоматичен вход
        Auth::login($user);

        return redirect('/')->with('success', 'Успешна регистрация!');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Успешен вход!');
        }

        return back()->withErrors([
            'email' => 'Невалидни данни за вход.',
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Изходът е успешен!');
    }
}
