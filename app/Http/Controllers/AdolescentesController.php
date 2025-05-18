<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdolescentesController extends Controller
{
    public function index(){
        return view('edad.adolescentes', [
            'message' => 'Bienvenido al portal de salud para adolescentes'
        ]);
    }
}
