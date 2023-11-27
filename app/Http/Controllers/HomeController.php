<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

class HomeController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            return Redirect::route('dashboard');
        }
          
        return Redirect::route('login');
    }
}
