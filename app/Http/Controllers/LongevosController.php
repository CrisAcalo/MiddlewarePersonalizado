<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LongevosController extends Controller
{
    public function index()
    {
        return view('edad.longevos', [
            'message' => 'Bienvenido al portal de salud para longevos'
        ]);
    }
}
