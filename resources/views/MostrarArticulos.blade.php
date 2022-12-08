@extends('plantilla')


@section('contenido')

@if(session()->has('confirmacion'))
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Articulo Registrado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Actualizado'))


{!! " <script> Swal.fire(
 'Eso es todo!',
 'Articulo Actualizado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Acaboo'))

{!! " <script> Swal.fire(
 'Eso es todo!',
 'Articulo Actualizado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!! "<script>Swal.fire({
  icon: 'error',
  title: 'Eliminado',
  text: 'Articulo Eliminado!',
})</script> "!!}
@endif


@if($errors->any())
     @foreach($errors->all() as $error)
     
     @endforeach
@endif


<div class="container mt-5 col-md-10" id="hey">
    <h1 class=" mt-4 text-center text-white fw-bold">Articulos</h1>
    <a href={{route('articulo.create')}}>
      <button type="submit" class="btn btn-secondary" id="buton">Registrar Articulo</button></a>
  
      <form action="{{route('articulo.index')}}" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
        <div class="input-group mb-3 col-md-3">
          <input type="text" name ="busqueda"class="form-control text-center" placeholder="Buscar Articulo" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
          <button class="btn btn-outline-secondary" type="submit" id="buton">Buscar</button>
        </div>
      </form>
  <table class=" table text-center text-white" id="hey">
    
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tipo</th>
          <th scope="col">Marca</th>
          <th scope="col">Descripción</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio compra</th>
          <th scope="col">Precio venta</th>
          <th scope="col">Fecha ingreso</th>
          
          <th scope="col">Borrar</th>
          <th scope="col">Editar</th>
          <th scope="col">Vender</th>
        
        </tr>
      </thead>
      <tbody>
        
    
          @foreach($ConsultaArticulos as $articulos)
          <tr class="@if($articulos->Cantidad == 0)
            table-danger
                    @endif">
          <th scope="row">{{$articulos->idArticulo}}</th>
          <td>{{$articulos->Tipo}}</td>
          <td>{{$articulos->Marca}}</td>
          <td>{{$articulos->Descripcion}}</td>
          <td>{{$articulos->Cantidad}}</td>
          <td>{{$articulos->PrecioCompra}}</td>
          <td>{{$articulos->PrecioVenta}}</td>
          <td>{{$articulos->FechaIngreso}}</td>



          <td><a href="{{route('articulo.show',$articulos->idArticulo)}}"><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td></a>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>

        
          <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>

        <td><a href="{{route('articulo.edit',$articulos->idArticulo)}}">
          <img src="css\images\editar.png" id="opciones" alt="">
        </a>
        </td>



          <td><a href="{{route('articulo.show',$articulos->idArticulo)}}"><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td></a>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>

          <td><a href=""><img src={!! asset('css\images\borrar-amigo.png')!!} id="opciones"alt=""></td></a>

          <td><a href={{route('articulo.show',$articulos->idArticulo)}}><img src={!! asset('css\images\borrar-amigo.png')!!} id="opciones"alt=""></td></a>

        <td><a href={{route('articulo.edit',$articulos->idArticulo)}}><img src={!! asset('css\images\editar.png')!!} id="opciones" alt=""></td></a>


        <td>
        <a href={{route('articuloventa.edit',$articulos->idArticulo)}}>
        <img src={!! asset('css\images\vendido.png')!!} id="opciones" alt=""></td>
        </a>
        </tr>
        @endforeach
      </tbody>
    </table>

 



   
</div>

@stop

