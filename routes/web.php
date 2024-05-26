<?php

use App\Http\Controllers\MiembroController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EntrenadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miembros',[MiembroController::class, 'index'])->name('miembros.index');
Route::post('/miembros',[MiembroController::class, 'store'])->name('miembros.store');
Route::get('/miembros/create',[MiembroController::class, 'create'])->name('miembros.create');
Route::delete('/miembros/{miembro}',[MiembroController::class, 'destroy'])->name('miembros.destroy');
Route::put('/miembros/{miembro}',[MiembroController::class, 'update'])->name('miembros.update');
Route::get('/miembros/{miembro}/edit',[MiembroController::class, 'edit'])->name('miembros.edit');

Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('/equipos/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

Route::get('/entrenadores', [EntrenadorController::class, 'index'])->name('entrenadores.index');
Route::get('/entrenadores/create', [EntrenadorController::class, 'create'])->name('entrenadores.create');
Route::post('/entrenadores', [EntrenadorController::class, 'store'])->name('entrenadores.store');
Route::get('/entrenadores/{entrenador}/edit', [EntrenadorController::class, 'edit'])->name('entrenadores.edit');
Route::put('/entrenadores/{entrenador}', [EntrenadorController::class, 'update'])->name('entrenadores.update');
Route::delete('/entrenadores/{entrenador}', [EntrenadorController::class, 'destroy'])->name('entrenadores.destroy');
