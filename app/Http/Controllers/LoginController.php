<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
           'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        /*
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }*/
        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => 'Неверно введен email или пароль', // Единое сообщение
            ]);
        }
        $request->session()->regenerate();
        return redirect()->intended('/home');
    }

    public function logout(Request $request)
    {

    }
}
