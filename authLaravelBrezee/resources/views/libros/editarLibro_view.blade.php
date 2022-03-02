@extends('layouts.master')
@section('title','Editar Libro')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Libro</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
            input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
          background-color: #45a049;
        }
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>NUEVO LIBRO</h1>
    <form action="/libros/editar/<?php echo $libro["ISBN"] ?>" method ="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="csrf_token()">
        <label>ISBN:</label>
        <input type="text" name="ISBN" maxlength="13" placeholder="ISBN (13 carácteres)" value="<?php echo $libro["ISBN"] ?>"><br>
        <label>TITULO:</label>
        <input type="text" name="titulo" placeholder="Título" value="<?php echo $libro["titulo"] ?>"><br>
        <label>AUTOR:</label>
        <input type="text" name="autor" placeholder="Autor/a" value="<?php echo $libro["autor"] ?>"><br>
        <label>IDIOMA:</label>
        <input type="text" name="idioma" placeholder="Idioma" value="<?php echo $libro["idioma"] ?>"><br>
        <label>PUBLICACIÓN</label>
        <input type="date" name="publicacion" value="<?php echo $libro["publicacion"] ?>"><br><br>
        <label>EDITORIAL</label>
        <input type="number" placeholder="Introduce el id de la Editorial" name="editorial" value="<?php echo $libro["editorial"] ?>">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
@endsection