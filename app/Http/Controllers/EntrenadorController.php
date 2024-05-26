<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrenador;

class EntrenadorController extends Controller
{
    
    public function index()
    {
        $entrenadores = Entrenador::all();
        return view('entrenadores.index', ['entrenadores' => $entrenadores]);
    }

    
    public function create()
    {
        return view('entrenadores.create');
    }

    
    public function store(Request $request)
    {
        Entrenador::create($request->all());
        return redirect()->route('entrenadores.index')->with('success', 'Entrenador creado correctamente');
    
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $entrenador = Entrenador::findOrFail($id);
        return view('entrenadores.edit', ['entrenador' => $entrenador]);
    }

    
    public function update(Request $request, string $id)
    {
        $entrenador = Entrenador::findOrFail($id);
        $entrenador->update($request->all());
        return redirect()->route('entrenadores.index')->with('success', 'Entrenador actualizado correctamente');
    }

    
    public function destroy(string $id)
    {
        $entrenador = Entrenador::findOrFail($id);
        $entrenador->delete();
        return redirect()->route('entrenadores.index')->with('success', 'Entrenador eliminado correctamente');
    }
}
