@extends('layouts.master')
@section('title','Libros')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
    <style>
        #separador{
            margin: 50px;
        }
        #tabla{
            margin: auto;
        }
        #h1{
            text-align: center
        }
    </style>
    <script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</head>
<body>
    <div id="separador"></div>
    <h1 id="h1">LISTA DE LIBROS</h1>
    <div class="container">
    <table class="table table-sm" id="tabla">
        <tr>
            <th>ISBN</th>
            <th>TÍTULO</th>
            <th>AUTOR</th>
            <th>IDIOMA</th>
            <th>PUBLICACIÓN</th>
            <th>EDITORIAL</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
            @foreach ($libros as $libro) 
        <tr>
            <td>{{ $libro->ISBN }}</td>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->idioma }}</td>
            <td>{{ $libro->publicacion }}</td>
            <td>{{ $libro->editorial }}</td>
            
            <td><a class="btn btn-secondary" href="/libro/{{$libro->ISBN}}">Ver</a></td>
            @auth
            <td><a class="btn btn-secondary" href="/libros/editar/{{$libro->ISBN}}">Editar</a></td>
            <td><a class="btn btn-secondary" href="/libros/borrar/{{$libro->ISBN}}">Eliminar</a></td>
            @endauth
        </tr>
        @endforeach
    </table>
    <div id="separador"></div>
    <div style="text-align: center">
        <a class="btn btn-secondary" href="/libros/crearPDF">GUARDAR EN PDF</a>
    </div>
    </div>
</body>
</html>
@endsection