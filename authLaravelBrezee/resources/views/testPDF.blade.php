<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Generate PDF From View</title>
</head>
<body>
    @foreach ($libros as $libro) 
    {{ $libro->ISBN }}
    {{ $libro->titulo }}<br>
    @endforeach
</body>
</html>