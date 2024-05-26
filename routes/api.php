<?php
use App\Http\Controllers\api\ClaseController;
use App\Http\Controllers\api\MiembroController;
use App\Http\Controllers\api\InscripcionController;
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

Route::get('/clases',[ClaseController::class, 'index'])->name('clases.index');
Route::post('/clases',[ClaseController::class, 'store'])->name('clases.store');
Route::delete('/clases/{clase}',[ClaseController::class, 'destroy'])->name('clases.destroy');
Route::put('/clases/{clase}',[ClaseController::class, 'update'])->name('clases.update');
Route::get('/clases/{clase}',[ClaseController::class, 'show'])->name('clases.show');

Route::get('/inscripciones', [InscripcionController::class, 'index']);
Route::post('/inscripciones', [InscripcionController::class, 'store']);
Route::get('/inscripciones/{inscripcion}', [InscripcionController::class, 'show']);
Route::put('/inscripciones/{inscripcion}', [InscripcionController::class, 'update']);
Route::delete('/inscripciones/{inscripcion}', [InscripcionController::class, 'destroy']);