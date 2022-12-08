@extends('plantilla')


@section('contenido')

@if(session()->has('confirmacion'))
<?php

        $nom = session()->get('txtNombre');
            
        ?>
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Proveedor {$nom} Registrado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Actualizado'))

{!! " <script> Swal.fire(
 'Eso es todo!',
 'Proveedor Actualizado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Eliminado'))

{!! "<script>Swal.fire({
  icon: 'error',
  title: 'Eliminado',
  text: 'Proveedor Eliminado!',
})</script> "!!}
@endif


@if($errors->any())
     @foreach($errors->all() as $error)
     
     @endforeach
@endif


@if(session()->has('Acabo'))
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Pedido Generado',
 'success'  ) </script> "!!}
@endif


@if($errors->any())
     @foreach($errors->all() as $error)
     
     @endforeach
@endif
     
<div class="container mt-5 col-md-10 " id="hey">
  <h1 class=" mt-4 text-center text-white fw-bold">Proveedores</h1>
  <a href="/Proveedores">
    <button type="submit" class="btn btn-secondary" id="buton">Registrar Provedor</button></a>

    <form action="{{route('proveedor.index')}}" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
      <div class="input-group mb-3 col-md-3">
        <input type="text" name ="busqueda"class="form-control text-center" placeholder="Buscar Proveedor" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
        <button class="btn btn-outline-secondary" type="submit" id="buton">Buscar</button>
      </div>
    </form>
<table class=" table text-center text-white" id="hey">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Empresa</th>
        <th scope="col">Tipo de mercancia</th>
        <th scope="col">Dirección</th>
        <th scope="col">País</th>
        <th scope="col">Contacto</th>
        <th scope="col">No fijo</th>
        <th scope="col">No celular</th>
        <th scope="col">Correo</th>
        <th scope="col">Borrar</th>
          <th scope="col">Editar</th>
          <th scope="col">Generar pedido</th>
        
      </tr>
    </thead>
    <tbody>
     
      <tr>
        @foreach($ConsultaProveedores as $proveedor)
        <th scope="row">{{$proveedor->idProo}}</th>
        <td>{{$proveedor->Empresa}}</td>
        <td>{{$proveedor->Tipomercancia}}</td>
        <td>{{$proveedor->Direccion}}</td>
        <td>{{$proveedor->Pais}}</td>
        <td>{{$proveedor->Contrato}}</td>
        <td>{{$proveedor->Nofijo}}</td>
        <td>{{$proveedor->Nocel}}</td>
        <td>{{$proveedor->Correo}}</td>



        <td><a href={{route('proveedor.show',$proveedor->idProo)}}>
          <img src="css\images\borrar-amigo.png" id="opciones"alt=""> </a></td>


        <td><img src={!! asset('css\images\borrar-amigo.png') !!} id="opciones"alt=""></td>


        <td><a href={{route('proveedor.show',$proveedor->idProo)}}><img src={!! asset('css\images\borrar-amigo.png') !!} id="opciones"alt=""></td></a>

        <td><a href={{route('proveedor.edit',$proveedor->idProo)}}>
          <img src={!! asset('css\images\editar.png') !!} id="opciones" alt="">
        </a>
        </td>

        <td>
          <a href="/Pedidos">
          <img src={!! asset('css\images\pedido.png') !!} id="opciones" alt=""></td>
        
      </tr>

      @endforeach
    </tbody>
  </table>

    
</div>

@stop