@extends('layouts.master')
@section('title','Pelicula')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
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
    <h1 id="h1">PELÍCULA</h1>
    <div class="container">
    <table class="table table-sm" id="tabla">
        <tr>
            <th>ISBN</th>
            <th>TÍTULO</th>
            @auth
            <th>E-MAIL</th>   
            @endauth
        </tr>
        <tr>
            <td>{{$pelicula->titulo}}</td>
            <td> </td>
            @auth
            <td><td>
            @endauth
        </tr>
    </table>
</body>
</html>
@endsection