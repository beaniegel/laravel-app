<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show(Request $request): View
    {
        return view('dashboard', ['name' => $request->user()->name]);
    }
}
