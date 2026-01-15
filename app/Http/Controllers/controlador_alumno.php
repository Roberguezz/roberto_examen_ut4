<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelo_alumno;
use Illuminate\Support\Facades\File;

class controlador_alumno extends Controller
{
     public function create()
    {
        $bienvenida = "Bienvenido al formulario para agregar un alumno";

        // Retornamos la vista del formulario
        return view('admin.alumno.create', compact('bienvenida'));
    }

    public function store(Request $request)
    {
        // Validamos los datos recibidos
        $datos = $request->validate([
            'nombre' => 'required|string|',
            'modulo' => 'required|string|',
            'calificacion' => 'required|integer|',
        ]);

         // Crear una nueva instancia del modelo Message
        $alumno = new modelo_alumno();   
        $alumno->nombre = $datos['nombre'];
        $alumno->modulo = $datos['modulo'];
        $alumno->calificacion = $datos['calificacion'];
        
        // Guardar el mensaje en la base de datos
        $alumno->save();

        return redirect()->route('admin.alumno.create')->with('status', 'Alumno guardado correctamente.');
    }
}
