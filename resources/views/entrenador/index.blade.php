@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Entrenadores</h1>
    <a href="{{ route('entrenadores.create') }}" class="btn btn-primary mb-3">Nuevo Entrenador</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entrenadores as $entrenador)
            <tr>
                <td>{{ $entrenador->entrenador_id }}</td>
                <td>{{ $entrenador->entrenador_nom }}</td>
                <td>{{ $entrenador->entrenador_ape }}</td>
                <td>{{ $entrenador->especialidad }}</td>
                <td>{{ $entrenador->telefono }}</td>
                <td>
                    <a href="{{ route('entrenadores.edit', $entrenador->entrenador_id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('entrenadores.destroy', $entrenador->entrenador_id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este entrenador?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
