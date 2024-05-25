<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Clase</title>
  </head>
  <body>
    <div class="container">
    <h1>Add Clase</h1>
    <form method="POST" action="{{ route('clases.store')}}">
        @csrf
        <div class="mb-3">
          <label for="clase_id" class="form-label"> Code</label>
          <input type="text" class="form-control" id="clase_id" aria-describedby="idHelp" name="id"
          disabled="disabled">
          <div id="idHelp" class="form-text">Clase Code</div>
        </div>
        <div class="mb-3">
          <label for="clase_nom" class="form-label">Nombre Clase</label>
          <input type="text" required class="form-control" id="clase_nom" aria-describedby="nameHelp"
          name="clase_nom" placeholder="clase name">
        </div>
        <div class="mb-3">
            <label for="clase_descp" class="form-label">Descripcion Clase</label>
            <input type="text" required class="form-control" id="clase_descp" aria-describedby="nameHelp"
            name="clase_descp" placeholder="Descripcion clase">
          </div>
          <div class="mb-3">
            <label for="hora_inicio" class="form-label">Hora Inicio Clase</label>
            <input type="text" required class="form-control" id="hora_inicio" aria-describedby="nameHelp"
            name="hora_inicio" placeholder="Hora Inicio">
          </div>
          <div class="mb-3">
            <label for="duracion" class="form-label">Duracion</label>
            <input type="text" required class="form-control" id="duracion" aria-describedby="nameHelp"
            name="duracion" placeholder="duracion">
          </div>
          <div class="mb-3">
            <label for="entrenador_id" class="form-label">Entrenador id </label>
            <input type="text" required class="form-control" id="entrenador_id" aria-describedby="nameHelp"
            name="entrenador_id" placeholder="entrenador_id">
          </div>
          <div class="mb-3">
            <label for="capacidad" class="form-label">Capacidad clase</label>
            <input type="text" required class="form-control" id="capacidad" aria-describedby="nameHelp"
            name="capacidad" placeholder="capacidad">
          </div>
          
          <label for="entrenadores">entrenadores:</label>
        <select class="form-select" id="entrenadores" name="code" required>
              <option selected disabled value="">Choose one...</option>
              @foreach ($entrenadores as $entrenador)
                 <option value="{{ $entrenador->entrenador_id}}">{{ $entrenador->entrenador_nom}}</option>
              @endforeach
            </select>
            <div class="mt-3">
           <button type="submit" class="btn btn-primary">Save</button>
           <a href="{{ route('clases.index')}}" class="btm btn-warning">Cancel</a>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>