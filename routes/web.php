<?php

use App\Http\Controllers\MiembroController;
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


