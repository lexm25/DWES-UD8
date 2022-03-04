@extends('layouts.master')
@section('title','Crear Libros')
@section('content')
<div style="margin-top: 50px"></div>
    <h1 style="text-align: center">INTRODUZCA SUS DATOS</h1>
    <div class="container">
        <div class="card" style="width: 30%;margin: auto">
            <div class="card-body" >
                <form action="/formularioMail" method ="POST">
                    <input type="hidden" name="_token" value="csrf_token()">

                    <label>NOMBRE Y APELLIDOS:</label><br>
                    <input class="form-control" type="text" name="nombreApe" maxlength="13" placeholder="Nombre y apellidos" required><br>
                    <br>
                    <label>E-MAIL:</label><br>
                    <input class="form-control" type="email" name="email" placeholder="e-mail" required><br>
                    <br>
                    <label>TÍTULO:</label><br>
                    <input class="form-control" type="text" name="titulo" placeholder="Título" required><br>
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