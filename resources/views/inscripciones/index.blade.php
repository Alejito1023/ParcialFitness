<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Inscripciones</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Inscripciones</h1>
        <a href="{{ route('inscripciones.create') }}" class="btn btn-primary mb-3">Agregar Inscripción</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Miembro</th>
                    <th>Clase</th>
                    <th>Fecha de Inscripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inscripciones as $inscripcion)
                    <tr>
                        <td>{{ $inscripcion->inscripcion_id }}</td>
                        <td>{{ $inscripcion->miembro_nom}}</td>
                        <td>{{ $inscripcion->clase_nom }}</td>
                        <td>{{ $inscripcion->fecha_inscripcion }}</td>
                        <td>
                            <a href="{{ route('inscripciones.edit', $inscripcion->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('inscripciones.destroy', $inscripcion->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
