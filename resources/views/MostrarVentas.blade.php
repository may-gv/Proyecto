@extends('plantilla')


@section('contenido')

@if(session()->has('con'))
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
  <h1 class=" mt-4 text-center text-white fw-bold">Ventas Realizadas</h1>
  
    
    

    <form action="{{route('articuloventa.index')}}" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
      <div class="input-group mb-3 col-md-3">
        <input type="text" name ="busqueda"class="form-control text-center" placeholder="Buscar Proveedor" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
        <button class="btn btn-outline-secondary" type="submit" id="buton">Buscar</button>
      </div>
    </form>
<table class=" table text-center text-white" id="hey">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Usuario</th>
        <th scope="col">Articulo</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Total</th>
        <th scope="col">Fecha</th>
        <th scope="col">Opciones</th>
        
        
      </tr>
    </thead>
    <tbody>
     
      <tr>
        @foreach($ConsultaVentaArt as $ventaArt)
        <th scope="row">{{$ventaArt->idVentaArt}}</th>
        <td>{{$ventaArt->id_usu}}</td>
        <td>{{$ventaArt->id_art}}</td>
        <td>{{$ventaArt->Cantidad}}</td>
        <td>{{$ventaArt->Total}}</td>
        <td>{{$ventaArt->Fecha}}</td>
        
        

        <td>
          <a href="">
          <img src={!! asset('css\images\cuenta.png') !!} id="opciones" alt=""></td>
        
      </tr>

      @endforeach
    </tbody>
  </table>

    
</div>

@stop