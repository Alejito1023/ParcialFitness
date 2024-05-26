<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Entrenador;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    
    public function index()
    {
        $entrenadores = Entrenador::all();
        return response()->json(['entrenadores' => $entrenadores], 200);
    }

    
    public function store(Request $request)
    {
        $entrenador = Entrenador::create($request->all());
        return response()->json(['entrenador' => $entrenador], 201);
    }

    
    public function show(string $id)
    {
        $entrenador = Entrenador::findOrFail($id);
        return response()->json(['entrenador' => $entrenador], 200);
    }

    
    public function update(Request $request, string $id)
    {
        $entrenador = Entrenador::findOrFail($id);
        $entrenador->update($request->all());
        return response()->json(['message' => 'Entrenador actualizado correctamente'], 200);
    }

    
    public function destroy(string $id)
    {
        $entrenador = Entrenador::findOrFail($id);
        $entrenador->delete();
        return response()->json(['message' => 'Entrenador eliminado correctamente'], 200);
    }
}
