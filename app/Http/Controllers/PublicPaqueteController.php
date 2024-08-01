<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;

class PublicPaqueteController extends Controller
{
    //
    // Método para mostrar todos los paquetes
    public function index()
    {
        $paquetes = Paquete::all();
        return view('layouts.index', compact('paquetes'));
        
        
    }
    // Método para mostrar los paquetes en la vista de paquetes
    public function showPackages()
    {
        $paquetes = Paquete::all();
        return view('layouts.packages', compact('paquetes'));
    }
    // Método para mostrar un paquete específico
    // Método para mostrar los paquetes en la vista de paquetes

    public function show(Request $request)
    {
        $packageId = $request->input('id'); // Obtener el ID del cuerpo de la solicitud POST
        $package = Paquete::with('imagenes')->find($packageId); // Usa Paquete aquí, no Package

        if (!$package) {
            abort(404, 'Package not found'); // Manejo de errores si no se encuentra el paquete
        }

        return view('layouts.details', compact('package')); // Asegúrate de que el nombre de la vista sea correcto
    }
    

    
}
