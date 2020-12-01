<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(): View
    {
        return view('login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'bail|required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->input('remember'))) {
            return redirect()->intended();
        }

        return redirect('/login')->with('no-account', 'No user with this email or password');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect('/login');
    }
}
