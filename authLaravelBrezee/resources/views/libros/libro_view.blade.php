@extends('layouts.master')
@section('title','Libro')
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
        </tr>
        <?php
                echo "<tr>";
                echo "<td>" . $libro["ISBN"] . "</td>";
                echo "<td>" . $libro["titulo"] . "</td>";
                echo "<td>" . $libro["autor"] . "</td>";
                echo "<td>" . $libro["idioma"] . "</td>";
                echo "<td>" . $libro["publicacion"] . "</td>";
                echo "<td>" . $libro["editorial"] . "</td>";
                echo "</tr>";
        ?>
    </table>
    <div id="separador"></div>
    <div style="text-align: center">
        <a class="btn btn-secondary" href="/libro/crearPDF/<?php echo $libro["ISBN"] ?>">GUARDAR EN PDF</a>
    </div>
</body>
</html>
@endsection