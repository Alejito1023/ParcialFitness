<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    
    public function index()
    {
        $equipos = Equipo::all();
        return response()->json(['equipos' => $equipos], 200);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string',
            'tipo' => 'required|string',
            'cantidad_disponible' => 'required|integer',
            'estado' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $equipo = Equipo::create($request->all());
        return response()->json(['equipo' => $equipo], 201);
    }

    
    public function show(string $id)
    {
        $equipo = Equipo::find($id);

        if (!$equipo) {
            return response()->json(['error' => 'Equipo no encontrado'], 404);
        }

        return response()->json(['equipo' => $equipo], 200);
    }

    
    public function update(Request $request, string $id)
    {
        $equipo = Equipo::find($id);

        if (!$equipo) {
            return response()->json(['error' => 'Equipo no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string',
            'tipo' => 'required|string',
            'cantidad_disponible' => 'required|integer',
            'estado' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $equipo->update($request->all());
        return response()->json(['equipo' => $equipo], 200);

    }
    public function destroy(string $id)
    {
        $equipo = Equipo::find($id);

        if (!$equipo) {
            return response()->json(['error' => 'Equipo no encontrado'], 404);
        }

        $equipo->delete();
        return response()->json(['message' => 'Equipo eliminado exitosamente'], 200);
    }
}
