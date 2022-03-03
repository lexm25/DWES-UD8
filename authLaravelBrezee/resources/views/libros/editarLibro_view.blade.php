@extends('layouts.master')
@section('title','Editar Libro')
@section('content')
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