<?php

use App\Http\Controllers\api\MiembroController;
use App\Http\Controllers\api\EquipoController;
use App\Http\Controllers\api\EntrenadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/miembros', [MiembroController::class, 'index'])->name('miembros');
Route::post('/miembros',[MiembroController::class, 'store'])->name('miembros.store');   
Route::delete('/miembros/{miembro}',[MiembroController::class, 'destroy'])->name('miembros.destroy');
Route::put('/miembros/{miembro}',[MiembroController::class, 'update'])->name('miembros.update');
Route::get('/miembros/{miembro}',[MiembroController::class, 'show'])->name('miembros.show');

Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos');
Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('/equipos/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');
Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

Route::get('/entrenadores', [EntrenadorController::class, 'index'])->name('entrenadores');
Route::post('/entrenadores', [EntrenadorController::class, 'store'])->name('entrenadores.store');
Route::get('/entrenadores/{entrenador}', [EntrenadorController::class, 'show'])->name('entrenadores.show');
Route::put('/entrenadores/{entrenador}', [EntrenadorController::class, 'update'])->name('entrenadores.update');
Route::delete('/entrenadores/{entrenador}', [EntrenadorController::class, 'destroy'])->name('entrenadores.destroy');