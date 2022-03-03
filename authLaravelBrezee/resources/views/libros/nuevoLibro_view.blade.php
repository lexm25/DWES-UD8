@extends('layouts.master')
@section('title','Crear Libros')
@section('content')
<div style="margin-top: 50px"></div>
    <h1 style="text-align: center">NUEVO LIBRO</h1>
    <div class="container">
        <div class="card" style="width: 30%;margin: auto">
            <div class="card-body" >
                <form action="/libros/crearLibro" method ="POST">
                    <input type="hidden" name="_token" value="csrf_token()">

                    <label>ISBN:</label><br>
                    <input class="form-control" type="text" name="ISBN" maxlength="13" placeholder="ISBN (13 carácteres)"><br>
                    <br>
                    <label>TITULO:</label><br>
                    <input class="form-control" type="text" name="titulo" placeholder="Título"><br>
                    <br>
                    <label>AUTOR:</label><br>
                    <input class="form-control" type="text" name="autor" placeholder="Autor/a"><br>
                    <br>
                    <label>IDIOMA:</label><br>
                    <input class="form-control" type="text" name="idioma" placeholder="Idioma">
                    <br>
                    <br><label>PUBLICACIÓN</label><br>
                    <input class="form-control" type="date" name="publicacion"><br>
                    <br>
                    <label>EDITORIAL</label>
                    <input class="form-control" type="number" placeholder="Introduce el id de la Editorial" name="editorial"><br><br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        
                        <input class="btn btn-secondary" type="submit" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection