@extends('layouts.master')
@section('title','Crear Libros')
@section('content')
<div style="margin-top: 50px"></div>
    <h1 style="text-align: center">NUEVO LIBRO</h1>
    <div class="container">
        <div class="card" style="width: 18rem;margin: auto">
            <div class="card-body" >
                <form action="/libros/crearLibro" method ="POST">
                    <input type="hidden" name="_token" value="csrf_token()">

                    <label>ISBN:</label>
                    <input type="text" name="ISBN" maxlength="13" placeholder="ISBN (13 carácteres)"><br>
                    
                    <label>TITULO:</label>
                    <input type="text" name="titulo" placeholder="Título"><br>
                
                    <label>AUTOR:</label>
                    <input type="text" name="autor" placeholder="Autor/a"><br>
                
                    <label>IDIOMA:</label>
                    <input type="text" name="idioma" placeholder="Idioma">
                    
                    <br><label>PUBLICACIÓN</label><br>
                    <input type="date" name="publicacion"><br>
                    
                    <label>EDITORIAL</label>
                    <input type="number" placeholder="Introduce el id de la Editorial" name="editorial"><br><br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        
                        <input class="btn btn-secondary" type="submit" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection