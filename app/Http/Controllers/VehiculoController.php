<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        // Realiza la solicitud a la API
        $response = Http::get('http://localhost:3000/comparar-vehiculos');
            //https://backendlenguajeiv.onrender.com/comparar-vehiculos
        
        // Obtiene los datos como un array
        $vehiculos = $response->json();
        
        // Asegúrate de que $vehiculos es un array antes de pasarlo a la vista
        if (!is_array($vehiculos)) {
            $vehiculos = [];
        }

        // Pasa los datos a la vista
        return view('vehiculos', compact('vehiculos'));
    }
}
