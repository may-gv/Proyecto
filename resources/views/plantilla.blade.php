<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"  href="/css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    
</head>



<body background="{{asset('css\images\Fondocomics.jpg')}}">

    <!--- Barra de navegacion --->


    <nav class="navbar navbar-expand-lg " id="nav">
        <div class="container-fluid ">
          <a class="navbar-brand text-white" href="/"> Weidoc Comic's </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link text-white"  href="inicio"> inicio </a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-white" href="MostrarUsuarios"> Usuarios </a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-white" href="MostrarComics">Comics</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-white" href="MostrarArticulos">Articulos</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-white" href="MostrarProveedores">Proveedores</a>
              </li>
        
            </ul>
          </div>
        </div>
      </nav>

      <!--- Contenido --->
      @yield('contenido')



    
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>