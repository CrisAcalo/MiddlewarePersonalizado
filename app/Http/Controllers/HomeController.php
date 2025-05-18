<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //elimiar datos de la sesión
        session()->forget('user_age');
        session()->forget('user_classification');
        session()->forget('target_route');

        return view('welcome');
    }
}
