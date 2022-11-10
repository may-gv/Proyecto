@extends('plantilla')


@section('contenido')

@if(session()->has('Finalizado'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Articulo Guardado!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
     @foreach($errors->all() as $error)
     
     @endforeach
@endif


<div class="container mt-5 col-md-10 text-center" id="hey">
    <h1 class=" mt-4 text-center text-white fw-bold">Articulos</h1>
  <table class=" table text-center text-white" id="hey">
    
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tipo</th>
          <th scope="col">Marca</th>
          <th scope="col">Descripción</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio venta</th>
          <th scope="col">Fecha ingreso</th>
          <th scope="col">Proveedor</th>
          <th scope="col">Borrar</th>
          <th scope="col">Editar</th>
          <th scope="col">Vender</th>
        
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>Mark</td>
          <td>Otto</td>
          <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>
        <td><img src="css\images\vendido.png" id="opciones" alt=""></td>
          
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>
        <td><img src="css\images\vendido.png" id="opciones" alt=""></td>
          
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
          <td><img src="css\images\editar.png" id="opciones" alt=""></td>
          <td><img src="css\images\vendido.png" id="opciones" alt=""></td>
        </tr>
      </tbody>
    </table>

<a href="/Articulos">
  <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>



   
</div>

@stop