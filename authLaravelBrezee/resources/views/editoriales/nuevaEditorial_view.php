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
    <form action="/editoriales/crearEditorial" method ="POST">
    <input type="hidden" name="_token" value="csrf_token()">
        <label>id</label>
        <input type="number" placeholder="Introduce el id de la Editorial" name="id" maxlength="11"><br><br>
        
        <label>NOMBRE:</label>
        <input type="text" name="nombre" placeholder="Nombre"><br>

        <label>NACIONALIDAD:</label>
        <input type="text" name="nacionalidad" placeholder="Nacionalidad"><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>