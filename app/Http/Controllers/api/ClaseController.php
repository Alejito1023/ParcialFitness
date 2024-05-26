<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clase;
use Illuminate\Support\Facades\DB;
class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clases = DB::table('clases')
        ->join('entrenadores', 'clases.entrenador_id', '=', 'entrenadores.entrenador_id')
        ->select('clases.*', 'entrenadores.entrenador_nom')
        ->get();
        return json_encode(['clases' =>$clases]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $clase = new Clase();

        $clase->clase_nom = $request->name;
        $clase->clase_descp = $request->clase_descp;
        $clase->hora_inicio = $request->hora_inicio;
        $clase->duracion = $request->duracion;
        $clase->entrenador_id = $request->entrenador_id;
        $clase->capacidad = $request->capacidad;
        
        $miembros = DB::table('clases')
        ->join('entrenadores', 'clases.entrenador_id', '=', 'entrenadores.entrenador_id')
        ->select('clases.*', 'entrenadores.tipo_suscripcion')
        ->get();
        return json_encode(['clase' =>$clase]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $clase = Clase::find($id);
        $entrenadores = DB::table('entrenadores')
        ->orderBy('entrenador_nom')
        ->get();

        return json_encode(['clase'=> $clase, 'entrenadores'=>$entrenadores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $clase = new Clase();

        $clase->clase_nom = $request->name;
        $clase->clase_descp = $request->clase_descp;
        $clase->hora_inicio = $request->hora_inicio;
        $clase->duracion = $request->duracion;
        $clase->entrenador_id = $request->code;
        $clase->capacidad = $request->capacidad;
        $clase->save();

        return json_encode(['clase' =>$clase]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $clase = Clase::find($id);
        $clase->delete();

        $clases = DB::table('clases')
        ->join('entrenadores', 'clases.suscripcion_id', "=", 'entrenadores.entrenador_id')
        ->select('clases.*', 'entrenadores.entrenador_nom')
        ->get();

        return json_encode(['clases' =>$clases, 'success'=> true]);
    }
}
