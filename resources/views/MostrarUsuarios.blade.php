@extends('plantilla')


@section('contenido')

@if(session()->has('confirmacion')) 
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Usuario Registrado',
 'success'  ) </script> "!!}
@endif

    @if($errors->any())
        @foreach($errors->all() as $error)
        
        @endforeach
    @endif

<div class="container mt-5 col-md-10" id="hey">
  <h1 class=" mt-4 text-left text-white text-center fw-bold">Usuarios</h1>
  <a href="/Usuarios">
    <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>

<table class=" table text-center text-white mt-2" id="hey">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Usuario</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Rol</th>
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
          
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Angel</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
        <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>
        
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>
        
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>
      </tr>
    </tbody>
  </table>


    
</div>

@stop