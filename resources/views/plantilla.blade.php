<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet"  href="/css/styles.css">
    <title>Comics</title>
</head>
<body background="{{asset('css\images\Fondocomics.jpg')}}">

     <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <img class="izq" src="css\images\comi.png" width="50" height="50" alt="" id="logito" id="logi">
          <a class="navbar-brand fs-2 fw-bold"  href="inicio" id="letras" >Weidoc Comic's
            
          </a>
          
          
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title fs-2" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active fst-italic fs-3" aria-current="page" href="inicio">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active fst-italic fs-3" aria-current="page" href="MostrarUsuarios">Usuarios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active fst-italic fs-3" href="MostrarComics">Comics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active fst-italic fs-3" href="MostrarArticulos">Articulos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active fst-italic fs-3" href="VentasRealizadas">Ventas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active fst-italic fs-3" aria-current="page" href="MostrarProveedores">Provedores</a>
                </li>
                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle fst-italic fs-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Registros
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item fs-4 fst-italic" href="Comics">Comics</a></li>
                    <li><a class="dropdown-item fs-4 fst-italic" href="Articulos">Articulos</a></li>
                    <li><a class="dropdown-item fs-4 fst-italic" href="Usuarios">Usuarios</a></li>
                    <li><a class="dropdown-item fs-4 fst-italic" href="Proveedores">Provedores</a></li>
                    
                  </ul>
                </li>
              </ul>
              
            </div>
          </div>
        </div>
      </nav>
      <br><br><br>


       <!--- Contenido --->
       @yield('contenido')


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
