@extends('layouts.master')
@section('title','Editar Libro')
@section('content')
<div style="margin-top: 50px"></div>
    <h1 style="text-align: center">EDITAR LIBRO</h1>
    <div class="container">
        <div class="card" style="width: 30%;margin: auto">
            <div class="card-body" >
                <form action="/libros/editar/<?php echo $libro["ISBN"] ?>" method ="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="csrf_token()">
                    <label>ISBN:</label>
                    <input class="form-control" type="text" name="ISBN" maxlength="13" placeholder="ISBN (13 carácteres)" value="<?php echo $libro["ISBN"] ?>"><br>
                    <label>TITULO:</label>
                    <input class="form-control" type="text" name="titulo" placeholder="Título" value="<?php echo $libro["titulo"] ?>"><br>
                    <label>AUTOR:</label>
                    <input class="form-control" type="text" name="autor" placeholder="Autor/a" value="<?php echo $libro["autor"] ?>"><br>
                    <label>IDIOMA:</label>
                    <input class="form-control" type="text" name="idioma" placeholder="Idioma" value="<?php echo $libro["idioma"] ?>"><br>
                    <label>PUBLICACIÓN</label>
                    <input class="form-control" type="date" name="publicacion" value="<?php echo $libro["publicacion"] ?>"><br><br>
                    <label>EDITORIAL</label>
                    <input class="form-control" type="number" placeholder="Introduce el id de la Editorial" name="editorial" value="<?php echo $libro["editorial"] ?>">
                    <input type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection