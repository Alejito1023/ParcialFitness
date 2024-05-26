@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Equipo</h1>
        <form action="{{ route('equipos.update', $equipo->equipo_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="equipo_nom" class="form-label">Nombre del equipo:</label>
                <input type="text" class="form-control" id="equipo_nom" name="equipo_nom" value="{{ $equipo->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="tipo_equipo" class="form-label">Tipo del equipo:</label>
                <input type="text" class="form-control" id="tipo_equipo" name="tipo_equipo" value="{{ $equipo->tipo }}" required>
            </div>
            <div class="mb-3">
                <label for="cantidad_disponible" class="form-label">Cantidad Disponible:</label>
                <input type="number" class="form-control" id="cantidad_disponible" name="cantidad_disponible" value="{{ $equipo->cantidad_disponible }}" required>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" value="{{ $equipo->estado }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
