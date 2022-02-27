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
        </tr>
        <?php
                echo "<tr>";
                echo "<td>" . $libro["ISBN"] . "</td>";
                echo "<td>" . $libro["titulo"] . "</td>";
                echo "<td>" . $libro["autor"] . "</td>";
                echo "<td>" . $libro["idioma"] . "</td>";
                echo "<td>" . $libro["publicacion"] . "</td>";
                echo "<td>" . $libro["editorial"] . "</td>";
                echo "</tr>";
        ?>
    </table>
</body>
</html>