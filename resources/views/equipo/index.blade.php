@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Equipos</h1>
        <a href="{{ route('equipos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Equipo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Cantidad Disponible</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->equipo_id }}</td>
                        <td>{{ $equipo->equipo_nom }}</td>
                        <td>{{ $equipo->tipo_equipo }}</td>
                        <td>{{ $equipo->cantidad_disponible }}</td>
                        <td>{{ $equipo->estado }}</td>
                        <td>
                            <a href="{{ route('equipos.edit', $equipo->equipo_id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('equipos.destroy', $equipo->equipo_id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
