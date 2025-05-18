<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MayoresController extends Controller
{
    public function index()
    {
        return view('edad.mayores', [
            'message' => 'Bienvenido al portal de salud para mayores'
        ]);
    }
}
