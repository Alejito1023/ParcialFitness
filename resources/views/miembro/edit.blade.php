<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Miembro</title>
  </head>
  <body>
    <div class="container">
    <h1>Add Miembro</h1>
    <form method="POST" action="{{ route('miembros.store',['miembro'=>$miembro->miembro_id])}}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="miembro_id" class="form-label"> Code</label>
          <input type="text" class="form-control" id="miembro_id" aria-describedby="idHelp" name="id"
          disabled="disabled">
          <div id="idHelp" class="form-text">Miembro Code</div>
        </div>
        <div class="mb-3">
          <label for="miembro_nom" class="form-label">Nombre Miembro</label>
          <input type="text" required class="form-control" id="miembro_nom" aria-describedby="nameHelp"
          name="miembro_nom" placeholder="Miembro name">
        </div>
        <div class="mb-3">
            <label for="miembro_ape" class="form-label">Apellido Miembro</label>
            <input type="text" required class="form-control" id="miembro_ape" aria-describedby="nameHelp"
            name="miembro_ape" placeholder="Apellido name">
          </div>
          <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
            <input type="text" required class="form-control" id="fecha_nacimiento" aria-describedby="nameHelp"
            name="fecha_nacimiento" placeholder="Fecha nacimiento">
          </div>
          <div class="mb-3">
            <label for="genero" class="form-label">Genero</label>
            <input type="text" required class="form-control" id="genero" aria-describedby="nameHelp"
            name="genero" placeholder="Genero">
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Telefono Miembro</label>
            <input type="text" required class="form-control" id="telefono" aria-describedby="nameHelp"
            name="telefono" placeholder="Telefono">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">email Miembro</label>
            <input type="text" required class="form-control" id="email" aria-describedby="nameHelp"
            name="email" placeholder="email">
          </div>
          <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha inicio</label>
            <input type="text" required class="form-control" id="fecha_inicio" aria-describedby="nameHelp"
            name="fecha_inicio" placeholder="Fecha Inicio">
          </div>
          
          <label for="suscripciones">Suscripcion:</label>
        <select class="form-select" id="suscripciones" name="code" required>
              <option selected disabled value="">Choose one...</option>
              @foreach ($suscripciones as $suscripcion)
              @if ($suscripcion->suscripcion_id == $miembro->miembro_id) 
              <option selected value="{{ $suscripcion->suscripcion_id}}">{{ $suscripcion->tipo_suscripcion}}</option>
              @else
              <option value="{{ $suscripcion->suscripcion_id}}">{{ $suscripcion->tipo_suscripcion}}</option>
              @endif
            </select>
            <div class="mt-3">
           <button type="submit" class="btn btn-primary">Update</button>
           <a href="{{ route('miembros.index')}}" class="btm btn-warning">Cancel</a>
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