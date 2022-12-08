@extends('plantilla')


@section('contenido')

@if(session()->has('con'))
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Venta Realizada',
 'success'  ) </script> "!!}
@endif

@if(session()->has('co'))
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Venta Realizada',
 'success'  ) </script> "!!}
@endif

@if(session()->has('cantidadnodisponible'))
{!! "<script>Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Cantidad Incorrecta!',
})</script> "!!}
@endif

@if(session()->has('cantidadnovalida'))
{!! "<script>Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Cantidad Incorrecta!',
})</script> "!!}
@endif


@if($errors->any())
     @foreach($errors->all() as $error)
     
     @endforeach
@endif
     
<div class="container mt-5 col-md-10 " id="hey">
  <h1 class=" mt-4 text-center text-white fw-bold">Ventas Realizadas</h1>
  
    
    
  
  <form action="{{route('articuloventa.index')}}" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
      <div class="input-group mb-3 col-md-3">
        
        <input type="text" name ="busqueda"class="form-control text-center" placeholder="Buscar Articulo vendido" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
        <button class="btn btn-outline-secondary" type="submit" id="buton">Buscar</button>
      
      </div>
    </form>
    

    <form action="{{route('articuloventa.index')}}" method="GET" class="" id="fo">
      <div class="input-group mb-3 col-md-3">
        <input type="text" name ="bus"class="form-control text-center" placeholder="Buscar Comic vendido" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
        <button class="btn btn-outline-secondary" type="submit" id="buton">Buscar</button>
      </div>
    </form>
<table class=" table text-center text-white" id="hey">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Usuario</th>
        <th scope="col">Tipo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Total</th>
        <th scope="col">Fecha</th>
        <th scope="col">ticket</th>
        
        
      </tr>
    </thead>
    <tbody>
     
      <tr>
        @foreach($ConsultaVentaArt as $ventaArt)
        <th scope="row">{{$ventaArt->idVentaArt}}</th>
        <td>{{$ventaArt->id_usu}}</td>
        <td>Articulos</td>
        <td>{{$ventaArt->id_art}}</td>
        <td>{{$ventaArt->Cantidad}}</td>
        <td>{{$ventaArt->Total}}</td>
        <td>{{$ventaArt->Fecha}}</td>
        
        
        
        
          <td>
          <a href="">
          <img src={!! asset('css\images\cuenta.png') !!} id="opciones" alt=""></td>
          
      </tr>
      @endforeach
      <tr>
        @foreach($ConsultaVentaComic as $ventacomic)
        <th scope="row">{{$ventacomic->idVentaCo}}</th>
        <td>{{$ventacomic->id_usu}}</td>
        <td>Comics</td>
        <td>{{$ventacomic->id_comic}}</td>
        <td>{{$ventacomic->Cantidad}}</td>
        <td>{{$ventacomic->Total}}</td>
        <td>{{$ventacomic->Fecha}}</td>
        
        
        
        
          <td>
          <a href="">
          <img src={!! asset('css\images\cuenta.png') !!} id="opciones" alt=""></td>
          
      </tr>
      
      @endforeach
      
      
      

      
    </tbody>
  </table>

    
</div>

@stop