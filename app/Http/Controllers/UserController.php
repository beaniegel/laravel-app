<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(): View
    {
        return view('register');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'bail|required|unique:users|max:255',
            'email' => 'bail|required|email|unique:users|max:255',
            'password' => 'bail|required|max:255|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/login')->with('new-account', 'Success! Login with your new account details');
    }
}
