<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
    <style>
        table, td, th {
        border: 1px solid black;
        }
        table {
        border-collapse: collapse;
        width: 50%;
        }
    </style>
    <script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</head>
<body>
    <table style="border: 1px solid black;">
        <tr>
            <th>ISBN</th>
            <th>TÍTULO</th>
            <th>AUTOR</th>
            <th>IDIOMA</th>
            <th>PUBLICACIÓN</th>
            <th>EDITORIAL</th>
            <th></th>
        </tr>
        <?php
            foreach ($libros as $libro) {
                echo "<tr>";
                echo "<td>" . $libro["ISBN"] . "</td>";
                echo "<td>" . $libro["titulo"] . "</td>";
                echo "<td>" . $libro["autor"] . "</td>";
                echo "<td>" . $libro["idioma"] . "</td>";
                echo "<td>" . $libro["publicacion"] . "</td>";
                echo "<td>" . $libro["editorial"] . "</td>";
                echo "<td><a href='/libro/" . $libro["ISBN"] . "'>VIEW</a>";
                echo "<td><a href='/libros/editar/" . $libro["ISBN"] . "'>EDIT</a>";
                echo "<td><a href='/libros/borrar/" . $libro["ISBN"] . "'>DELETE</a>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>