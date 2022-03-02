@extends('layouts.master')
@section('title','Editoriales')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
    <style>
        table, td, th {
        border: 1px solid black;
        }
        table {
        border-collapse: collapse;
        width: 50%;
        }
    </style>
    <script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</head>
<body>
    <table style="border: 1px solid black;">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>NACIONALIDAD</th>
        </tr>
        <?php
            foreach ($editoriales as $editorial) {
                echo "<tr>";
                echo "<td>" . $editorial["id"] . "</td>";
                echo "<td>" . $editorial["nombre"] . "</td>";
                echo "<td>" . $editorial["nacionalidad"] . "</td>";
                //echo "<td><a href='/libro/" . $editorial["ISBN"] . "'>VIEW</a>";
               //echo "<td><a href='/libros/editar/" . $editorial["ISBN"] . "'>EDIT</a>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
@endsection