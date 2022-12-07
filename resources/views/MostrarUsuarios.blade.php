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
    <form action="{{route('usuario.index')}}" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
    <div class="input-group mb-3 col-md-3">
      <input type="text" name ="busqueda"class="form-control text-center" placeholder="Buscar Usuario" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
      <button class="btn btn-outline-secondary" type="submit" id="buton">Buscar</button>
    </div>
  </form>

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
      @foreach($ConsultaUsuarios as $consulta)
      <tr>
       
        <th scope="row">{{$consulta->idusu}}</th>
        <td>{{$consulta->Nombre}}</td>
        <td>{{$consulta->Telefono}}</td>
        <td>{{$consulta->Usuario}}</td>
        <td>{{$consulta->Contraseña}}</td>
        <td>{{$consulta->Rol}}</td>
        <td><a href="{{route('usuario.edit',$consulta->idusu)}}">
          <img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
        <td>
          <a href={{route('usuario.edit',$consulta->idusu)}}>
          <img src="css\images\editar.png" id="opciones" alt=""></td>
        
        
      </tr>
      @endforeach


    </tbody>
  </table>


    
</div>

@stop