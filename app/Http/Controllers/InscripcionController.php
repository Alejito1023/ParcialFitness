<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Miembro;
use App\Models\Clase;

class InscripcionController extends Controller
{
    // Obtener todas las inscripciones junto con sus miembros y clases asociadas
    public function index()
    {
        $inscripciones = Inscripcion::with(['miembro', 'clase'])->get();
        return view('inscripciones.index', compact('inscripciones'));
    }

    
    public function create()
    {
        // Obtener todos los miembros y clases para los menús desplegables

        $miembros = Miembro::all();
        $clases = Clase::all();
        return view('inscripciones.create', compact('miembros', 'clases'));
    }

    
    public function store(Request $request)
    {
        // Obtener todos los miembros y clases para los menús desplegables

        $request->validate([
            'miembro_id' => 'required|exists:miembros,miembro_id',
            'clase_id' => 'required|exists:clases,clase_id',
            'fecha_inscripcion' => 'required|date'
        ]);

        // Crear una nueva inscripción
        Inscripcion::create($request->all());

        // Redirigir a la lista de inscripciones
        return redirect()->route('inscripciones.index');
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit( $id)
    {
        // Obtener la inscripción que se va a editar
        $inscripcion = Inscripcion::findOrFail($id);

        // Obtener todos los miembros y clases para los menús desplegables
        $miembros = Miembro::all();
        $clases = Clase::all();

        return view('inscripciones.edit', compact('inscripcion', 'miembros', 'clases'));
    }

    
    public function update(Request $request, string $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'miembro_id' => 'required|exists:miembros,miembro_id',
            'clase_id' => 'required|exists:clases,clase_id',
            'fecha_inscripcion' => 'required|date'
        ]);

        // Obtener la inscripción que se va a actualizar
        $inscripcion = Inscripcion::findOrFail($id);

        // Actualizar los datos de la inscripción
        $inscripcion->update($request->all());

        // Redirigir a la lista de inscripciones
        return redirect()->route('inscripciones.index');
    }

    
    public function destroy(string $id)
    {
        // Obtener la inscripción que se va a eliminar
        $inscripcion = Inscripcion::findOrFail($id);

        // Eliminar la inscripción
        $inscripcion->delete();

        // Redirigir a la lista de inscripciones
        return redirect()->route('inscripciones.index');
    }
}
