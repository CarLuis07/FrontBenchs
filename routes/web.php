<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;


Route::get('/', function () {
    return view('welcome');
});




Route::get('/vehiculos', [VehiculoController::class, 'index']);


Route::get('/precios', function () {
    return view('precios');
});

Route::get('/analisis', function () {
    return view('analisis');
});

Route::get('/reportes', function () {
    return view('reportes');
});