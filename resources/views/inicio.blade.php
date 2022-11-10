@extends('plantilla')


@section('contenido')

@if(session()->has('confirmacion'))
{!! " <script> Swal.fire(
 'Welcome To The Jungle',
 'Ya estas Dentro',
 'success'  ) </script> "!!}
@endif



  <div class="container mt-5 col-md-4" id="car">

    <div class="card text-center mb-2 fw-bold " id="lol">
    

  <div id="carouselExampleControls " class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner mt-5">
        <div class="carousel-item active">
          <img src="https://as01.epimg.net/meristation/imagenes/2022/04/22/reportajes/1650661515_467770_1650696764_noticia_normal.jpg" class="d-block w-100" width="380" height="600" alt="...">
        </div>

        <div class="carousel-item">
          <img src="https://i.etsystatic.com/13702629/r/il/067798/1979047720/il_570xN.1979047720_kthx.jpg" class="d-block w-100" width="380" height="600" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.akiracomics.com/imagenes/poridentidad?identidad=8c292853-11f4-408e-a869-0bda5f2b382d&ancho=850&alto=" class="d-block w-100" width="380" height="600" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.clubdelectores.cl/wp-content/uploads/1661873759-61.jpg" class="d-block w-100" width="380" height="600" alt="...">
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
    
  <br>
  <br>
    <div class="card">
      <div class="card-body text-center mb-2 fst-italic" >
        <h1>Somos Weidoc Comic's</h1>
        La mejor y más grande tienda de cómics en México.
        <br>
        Nuestra misión es satisfacer todas las necesidades de los coleccionistas del cómic mexicanos.
      </div>
    </div>
<br>
<br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="https://m.media-amazon.com/images/I/51vtj0CYiGL.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Amazing Spider-man Epic Collect TP Great Power </h5>
            <p class="card-text">Novela Grafica
              Marvel Comics
              Disponible
              <br>
              MXN $1035.00</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://previewsworld.com/SiteImage/MainImage/STL249104.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Fantastic Four 7th Series #1 Alex Ross B Var</h5>
            <p class="card-text">Comic Nuevo
              Marvel Comics
              Disponible
              <br>
              MXN $115.00</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://cdn.shopify.com/s/files/1/1796/6731/products/STL244725.jpg?v=1664135685" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ghost Rider 10th Series #8 Coccolo X-treme Marvel Var</h5>
            <p class="card-text">Comic Nuevo
              Marvel Comics
              Disponible
            <br>
            MXN $92.00</p>
          </div>
        </div>
      </div>

    </div>

  

    
        </div> 
      </div> 
 
  


@stop