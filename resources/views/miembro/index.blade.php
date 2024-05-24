<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Miembros</title>
  </head>
  <body>
    <div class="container">
    <h1>Listado de Miembros</h1>
    <a href="{{ route('miembros.create')}}" class="btn btn-success">Add</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Miembro</th>
            <th scope="col">Apellido</th>
            <th scope="col">Fecha nacimiento</th>
            <th scope="col">Genero</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Suscripcion</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($miembros as $miembro)
          <tr>
            <th scope="row">{{$miembro->miembro_id}}</th>
            <td>{{$miembro->miembro_nom}}</td>
            <td>{{$miembro->miembro_ape}}</td>
            <td>{{$miembro->fecha_nacimiento}}</td>
            <td>{{$miembro->genero}}</td>
            <td>{{$miembro->telefono}}</td>
            <td>{{$miembro->email}}</td>
            <td>{{$miembro->fecha_inicio}}</td>
            <td>{{$miembro->suscripcion_id}}</td>
            <td>
                <a href="{{ route('miembros.edit',['miembro'=>$miembro->miembro_id])}}"
                    class="btn btn-info"> Edit</a>
                <form action="{{ route('miembros.destroy', ['miembros'=> $miembro->miembro_id])}}"
                method="POST" style="display: inline-block">
                @method('delete')
                @csrf
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

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