<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Auth;
use Redirect;
use View;

class LoginController extends Controller
{
    //
    public function show()
    {
        if (Auth::check()) {
            return Redirect::route('dashboard');
        }
           

        return View::make('login');
    }
}
