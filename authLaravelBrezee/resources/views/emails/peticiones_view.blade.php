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
    <h1 id="h1">LISTA DE PETICIONES</h1>
    <div class="container">
    <table class="table table-sm" id="tabla">
        <tr>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>TÍTULO</th>
        </tr>
        <?php
            foreach ($peticiones as $peticion) {
                echo "<tr>";
                echo "<td>" . $peticion["nombreApe"] . "</td>";
                echo "<td>" . $peticion["email"] . "</td>";
                echo "<td>" . $peticion["titulo"] . "</td>";
                //echo "<td><a href='/libro/" . $editorial["ISBN"] . "'>VIEW</a>";
                //echo "<td><a href='/libros/editar/" . $editorial["ISBN"] . "'>EDIT</a>";
                echo "</tr>";
            }
        ?>
    </table>
    </div>
</body>
</html>
@endsection