<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    // Obtener todas las inscripciones

    public function index()
    {
        // Obtener todas las inscripciones junto con la información 
        //de los miembros y clases asociadas

        $inscripciones = Inscripcion::with(['miembro', 'clase'])
        ->get();
        return response()->json($inscripciones, 200);
    }

    // Guardar una nueva inscripción en la base de datos

    public function store(Request $request)
    {
        // Validar los datos recibidos en la solicitud
        $validatedData = $request->validate([
            'miembro_id' => 'required|exists:miembros,miembro_id',
            'clase_id' => 'required|exists:clases,clase_id',
            'fecha_inscripcion' => 'required|date'
        ]);

        // Crear una nueva inscripción con los datos validados
        $inscripcion = Inscripcion::create($validatedData);

        // Devolver la inscripción creada en formato JSON con un código de estado HTTP 201 (creado)
        return response()->json($inscripcion, 201);
    }

    
    public function show(string $id)
    {
        // Buscar la inscripción por su ID junto con la información de los miembros y clases asociadas
        $inscripcion = Inscripcion::with(['miembro', 'clase'])->findOrFail($id);

        // Devolver la inscripción en formato JSON con un código de estado HTTP 200
        return response()->json($inscripcion, 200);
    }

    
    public function update(Request $request,  $id)
    {
        // Validar los datos recibidos en la solicitud
        $validatedData = $request->validate([
            'miembro_id' => 'required|exists:miembros,miembro_id',
            'clase_id' => 'required|exists:clases,clase_id',
            'fecha_inscripcion' => 'required|date'
        ]);

        // Buscar la inscripción por su ID
        $inscripcion = Inscripcion::findOrFail($id);

        // Actualizar la inscripción con los datos validados
        $inscripcion->update($validatedData);

        // Devolver la inscripción actualizada en formato JSON con un código de estado HTTP 200
        return response()->json($inscripcion, 200);
    }

    
    public function destroy( $id)
    {
        // Buscar la inscripción por su ID
        $inscripcion = Inscripcion::findOrFail($id);

        // Eliminar la inscripción
        $inscripcion->delete();

        // Devolver una respuesta vacía con un código de estado HTTP 204 (sin contenido)
        return response()->json(null, 204);
    }
}
