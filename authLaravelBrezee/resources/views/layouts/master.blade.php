<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      footer {
        color: white;
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
        top: -1;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" width="50px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/libros">Libros</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link active" href="/libros/crearLibro">Nuevo Libro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/editoriales">Editoriales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/editoriales/crearEditorial">Nueva Editorial</a>
              </li>
              @endauth
              <li class="nav-item">
                <a class="nav-link active" href="/formularioMail">Sugerencias</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link active" href="/peticiones">Peticiones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/peliculas/crearPelicula">Petici??n Pel??culas</a>
              </li>
              @endauth
              <li class="nav-item">
                <a class="nav-link active" href="/peliculas">Pel??culas</a>
              </li>
              @guest
              <li>
                <a class="nav-link position-absolute end-0" href="/login" style="padding-right: 2em">Login</a>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
      <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2);">
          ?? Copyright Alejandro Mart??n ??lvarez, 2022
        </div>
        <!-- Copyright -->
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>