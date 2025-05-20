<?php

use App\Http\Controllers\AdolescentesController;
use App\Http\Controllers\AdultosController;
use App\Http\Controllers\BebesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JovenesController;
use App\Http\Controllers\LongevosController;
use App\Http\Controllers\MayoresController;
use App\Http\Controllers\NinosController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/procesar-edad', function () {})->middleware('age.classifier')->name('process-age');

Route::get('/bebes', [BebesController::class, 'index'])->name('bebes');
Route::get('/ninos', [NinosController::class, 'index'])->name('ninos');
Route::get('/adolescentes', [AdolescentesController::class, 'index'])->name('adolescentes');
Route::get('/jovenes', [JovenesController::class, 'index'])->name('jovenes');
Route::get('/adultos', [AdultosController::class, 'index'])->name('adultos');
Route::get('/mayores', [MayoresController::class, 'index'])->name('mayores');
Route::get('/longevos', [LongevosController::class, 'index'])->name('longevos');

// Ruta de error
Route::get('/error', function () {
    return view('error');
})->name('error');
