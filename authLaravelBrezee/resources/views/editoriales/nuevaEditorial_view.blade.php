@extends('layouts.master')
@section('title','Crear Editorial')
@section('content')
<div style="margin-top: 50px"></div>
    <h1 style="text-align: center">NUEVA EDITORIAL</h1>
    <div class="container">
        <div class="card" style="width: 18rem;margin: auto">
            <div class="card-body" >
                <form action="/editoriales/crearEditorial" method ="POST">
                <input type="hidden" name="_token" value="csrf_token()">
                    <label>NOMBRE:</label>
                    <input type="text" name="nombre" placeholder="Nombre"><br>

                    <label>NACIONALIDAD:</label>
                    <input type="text" name="nacionalidad" placeholder="Nacionalidad">

                    <label>id</label>
                    <input type="number" placeholder="Introduce el id de la Editorial" name="id" maxlength="11"><br>
                    <br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input class="btn btn-secondary" type="submit" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection