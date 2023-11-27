<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function show()
    {
        if (Auth::guest()) 
            return Redirect::route('login');

        return View::make('dashboard');
    }
}
