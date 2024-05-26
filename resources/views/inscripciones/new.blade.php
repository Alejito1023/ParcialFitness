<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Inscripción</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Agregar Inscripción</h1>
        <form action="{{ route('inscripciones.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="miembro_id">Miembro</label>
                <select name="miembro_id" id="miembro_id" class="form-control" required>
                    <option value="">Seleccionar Miembro</option>
                    @foreach($miembros as $miembro)
                        <option value="{{ $miembro->miembro_id }}">{{ $miembro->miembro_nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="clase_id">Clase</label>
                <select name="clase_id" id="clase_id" class="form-control" required>
                    <option value="">Seleccionar Clase</option>
                    @foreach($clases as $clase)
                        <option value="{{ $clase->clase_id }}">{{ $clase->clase_nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_inscripcion">Fecha de Inscripción</label>
                <input type="date" name="fecha_inscripcion" id="fecha_inscripcion" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Agregar</button>
            <a href="{{ route('inscripciones.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
