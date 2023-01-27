<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h3>Incidencia {{$incidencia->id}}</h3>    

        <a class="btn bg-black text-white mb-3" href="/">Volver</a>

        <table class="table table-success table-striped">
            <thead>
                <tr>
                  <th scope="col">Latitud</th>
                  <th scope="col">Longitud</th>
                  <th scope="col">Ciudad</th>
                  <th scope="col">Dirección</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Estado</th>
                </tr>
            </thead>

            <tbody>
                    <tr>
                        <td>{{$incidencia->latitud}}</td>
                        <td>{{$incidencia->longitud}}</td>
                        <td>{{$incidencia->ciudad}}</td>
                        <td>{{$incidencia->direccion}}</td>
                        <td>{{$incidencia->descripcion}}</td>
                        <td>{{$incidencia->estado}}</td>
                    </tr>
            </tbody>
        </table>


    </div>
    