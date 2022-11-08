@extends('plantilla')


@section('contenido')
<<<<<<< HEAD
<br>


 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="css\images\descarga.png" class="d-block w-100" width="380" height="600" alt="...">
      </div>

      <div class="carousel-item">
        <img src="css\images\Comic.jpg" class="d-block w-100" width="380" height="600" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
<br><br><br><br>

    <div class="row">
        <div class="col-4 ">
            <div class="card text-center mb-5 ml-5 fw-bold" style="width: 24rem; margin-left: 1rem">
                
        
                <div class="card-header text-center">
                    Administracion de Usuarios
                </div>
                <img src="css\images\descarga.png" class="card-img-top" alt="...">
        
                <div class="card-body">
                    <p class="card-text"> Aqui se mandara al formulario y consulta para poder agregar, eliminar y editar usuarios del sistema. </p>
        
                </div>
        
        
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary" id="cuerpo"> Usuarios </button>
                </div>
        
        
            </div> 
=======
<div class="container mt-5 col-md-10">
    <div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
>>>>>>> main
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

@stop