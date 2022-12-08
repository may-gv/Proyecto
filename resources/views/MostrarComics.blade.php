@extends('plantilla')


@section('contenido')

@if(session()->has('confirmacion'))
<?php

        $nom = session()->get('txtNombre');
            
        ?>
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Comic {$nom} Guardado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Actualizado'))

{!! " <script> Swal.fire(
 'Eso es todo!',
 'Comic Actualizado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Acabo')) 
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Venta Realizada',
 'success'  ) </script> "!!}
@endif
 
 @if($errors->any())
      @foreach($errors->all() as $error)
      
      @endforeach
 @endif
 

<div class="container mt-5 col-md-10 " id="hey">
  <h1 class=" mt-4 text-center text-white fw-bold">Comics</h1>

  <a href="/Comics">
    <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>
    </a>
<table class=" table text-center mt-2 text-white" id="hey">


  <form action="{{route('comic.index')}}" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
    <div class="input-group mb-3 col-md-3">
      <input type="text" name ="busqueda"class="form-control text-center" placeholder="Buscar Comic" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
      <button class="btn btn-outline-secondary" type="submit" id="buton">Buscar</button>
    </div>
  </form>
<table class=" table text-center text-white" id="hey">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edición</th>
        <th scope="col">Compañia</th>
        <th scope="col">Precio compra</th>
        <th scope="col">Precio venta</th>
        <th scope="col">Fecha ingreso</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
        <th scope="col">Vender</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ConsultaComics as $comics)
      <tr>
        <tr class="@if($comics->Cantidad == 0)
          table-danger
                  @endif">
        
        <th scope="row">{{$comics->idComic}}</th>
        <td>{{$comics->Nombre}}</td>
        <td>{{$comics->Edicion}}</td>
        <td>{{$comics->Compania}}</td>
        <td>{{$comics->Cantidad}}</td>
        <td>{{$comics->PrecioCompra}}</td>
        <td>{{$comics->PrecioVenta}}</td>
        <td>{{$comics->FechaIngreso}}</td>
        <td><img src={!! asset('css\images\borrar-amigo.png')!!} id="opciones"alt=""></td>
        <td><a href={{route('comic.edit',$comics->idComic)}}><img src={!! asset('css\images\editar.png')!!} id="opciones" alt=""></td></a>
        <td>
          <a href={{route('comicventa.edit',$comics->idComic)}}>
            <img src="css\images\vendido.png" id="opciones" alt=""></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>


    
</div>

@stop