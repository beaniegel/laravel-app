<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(Request $request): View
    {

        return view('dashboard', [
            'name' => $request->user()->name,
            'users' => DB::table('users')->paginate(5)
        ]);
    }
}
