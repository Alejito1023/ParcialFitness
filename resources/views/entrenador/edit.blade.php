@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Entrenador</h1>
    <form action="{{ route('entrenadores.update', $entrenador->entrenador_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="entrenador_nom" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="entrenador_nom" name="entrenador_nom" value="{{ $entrenador->entrenador_nom }}">
        </div>
        <div class="mb-3">
            <label for="entrenador_ape" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="entrenador_ape" name="entrenador_ape" value="{{ $entrenador->entrenador_ape }}">
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input type="text" class="form-control" id="especialidad" name="especialidad" value="{{ $entrenador->especialidad }}">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $entrenador->telefono }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
