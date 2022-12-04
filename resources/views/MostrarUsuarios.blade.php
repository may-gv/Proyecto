@extends('plantilla')


@section('contenido')

@if(session()->has('confirmacion')) 
<?php

        $nom = session()->get('txtNombre');
            
        ?>
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Usuario {$nom} Registrado',
 'success'  ) </script> "!!}
@endif

    @if($errors->any())
        @foreach($errors->all() as $error)
        
        @endforeach
    @endif

<div class="container mt-5 col-md-10" id="hey">
  <h1 class=" mt-4 text-left text-white text-center fw-bold">Usuarios</h1>
  <a href="/Usuarios">
    <button type="submit" class="btn btn-secondary" id="buton">Registrar Usuario</button></a>

    <div class="input-group mb-3 col-md-3">
      <input type="text" class="form-control text-center" placeholder="Buscar Usuario" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
      <button class="btn btn-outline-secondary" type="button" id="buton">Buscar</button>
    </div>

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