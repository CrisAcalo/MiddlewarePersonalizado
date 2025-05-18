<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NinosController extends Controller
{
    public function index()
    {
        return view('edad.ninos', [
            'message' => 'Bienvenido al portal de salud para niños'
        ]);
    }
}
