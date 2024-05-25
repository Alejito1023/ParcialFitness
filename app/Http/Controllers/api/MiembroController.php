<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Miembro;
use Illuminate\Support\Facades\DB;

class MiembroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $miembros = DB::table('miembros')
        ->join('suscripciones', 'miembros.suscripcion_id', '=', 'suscripciones.suscripcion_id')
        ->select('miembros.*', 'suscripciones.tipo_suscripcion')
        ->get();
        return json_encode(['miembros' =>$miembros]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        $miembro = new Miembro();

        $miembro->miembro_nom = $request->name;
        $miembro->miembro_ape = $request->miembro_ape;
        $miembro->fecha_nacimiento = $request->fecha_nacimiento;
        $miembro->genero = $request->genero;
        $miembro->telefono = $request->telefono;
        $miembro->email = $request->email;
        $miembro->fecha_inicio = $request->fecha_inicio;
        $miembro->suscripcion_id = $request->code;
        $miembro->save();

        return json_encode(['miembro' =>$miembro]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $miembro = Miembro::find($id);
        $suscripciones = DB::table('suscripciones')
        ->orderBy('tipo_suscripcion')
        ->get();

        return json_encode(['miembro'=> $miembro, 'suscripciones'=>$suscripciones]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $miembro = Miembro::find($id);
        $miembro->miembro_nom = $request->name;
        $miembro->miembro_ape = $request->miembro_ape;
        $miembro->fecha_nacimiento = $request->fecha_nacimiento;
        $miembro->genero = $request->genero;
        $miembro->telefono = $request->telefono;
        $miembro->email = $request->email;
        $miembro->fecha_inicio = $request->fecha_inicio;
        $miembro->suscripcion_id = $request->code;
        $miembro->save();

        return json_encode(['miembro' =>$miembro]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $miembro = Miembro::find($id);
        $miembro->delete();
        $miembros = DB::table('miembros')
        ->join('suscripciones', 'miembros.suscripcion_id', '=', 'suscripciones.suscripcion_id')
        ->select('miembros.*', 'suscripciones.tipo_suscripcion')
        ->get();
        return json_encode(['miembros' =>$miembros, 'success'=> true]);
    }
}
