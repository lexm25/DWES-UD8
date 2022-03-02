@extends('layouts.master')
@section('title','Crear Libros')
@section('content')
    <h1>NUEVO LIBRO</h1>
    <form action="/libros/crearLibro" method ="POST">
        <input type="hidden" name="_token" value="csrf_token()">

        <label>ISBN:</label>
        <input type="text" name="ISBN" maxlength="13" placeholder="ISBN (13 carácteres)"><br>
        
        <label>TITULO:</label>
        <input type="text" name="titulo" placeholder="Título"><br>
       
        <label>AUTOR:</label>
        <input type="text" name="autor" placeholder="Autor/a"><br>
       
        <label>IDIOMA:</label>
        <input type="text" name="idioma" placeholder="Idioma"><br>
       
        <label>PUBLICACIÓN</label>
        <input type="date" name="publicacion"><br><br>
        
        <label>EDITORIAL</label>
        <input type="number" placeholder="Introduce el id de la Editorial" name="editorial">
        
        <input type="submit" value="Guardar">
    </form>
@endsection