@extends('layouts.master')
@section('title','Crear Pelicula')
@section('content')
<div style="margin-top: 50px"></div>
    <h1 style="text-align: center">PETICIÓN PELÍCULA</h1>
    <div class="container">
        <div class="card" style="width: 30%;margin: auto">
            <div class="card-body" >
                <form action="/peliculas/crearPelicula" method ="POST">
                    <input type="hidden" name="_token" value="csrf_token()">

                    <label>TÍTULO:</label><br>
                    <input class="form-control" type="text" name="titulo" placeholder="Título" required><br>
                    <br>
                    <label>DURACION:</label><br>
                    <input class="form-control" type="number" name="duracion" placeholder="Duracion (>0)" min="1"><br>
                    <br>
                    <label>EMAIL:</label><br>
                    <input class="form-control" type="email" name="email" placeholder="e-mail"><br>
                    <br>
                    <br><br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input class="btn btn-secondary" type="submit" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection