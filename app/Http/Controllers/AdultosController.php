<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdultosController extends Controller
{
    public function index()
    {
        return view('edad.adultos', [
            'message' => 'Bienvenido al portal de salud para adultos'
        ]);
    }
}
