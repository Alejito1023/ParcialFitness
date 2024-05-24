<?php

use App\Http\Controllers\api\MiembroController;
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
