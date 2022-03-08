@extends('layouts.master')
@section('title','Peliculas')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
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
</head>
<body>
    <div id="separador"></div>
    <h1 id="h1">LISTA DE PELÍCULAS</h1>
    <div class="container">
    <table class="table table-sm" id="tabla">
        <tr>
            <th>TÍTULO</th>
            <th>DURACIÓN</th>
            @auth
            <th>E-MAIL</th>
            @endauth
            <th></th>
            <th></th>
        </tr>
            @foreach ($peliculas as $pelicula) 
        <tr>
            <td>{{ $pelicula->titulo }}</td>
            <td>{{ $pelicula->duracion }}</td>
            @auth
            <td>{{ $pelicula->email }}</td>
            @endauth
            <td><a class="btn btn-secondary" href="/pelicula/{{$pelicula->titulo}}">Ver</a></td>
            <td><a class="btn btn-secondary" href="/pelicula/{{$pelicula->titulo}}">Enviar e-maill</a></td>
        </tr>
        
        @endforeach
    </table>
    <div id="separador"></div>
    </div>
</body>
</html>
@endsection