@extends('plantilla')


@section('contenido')



<div class="container mt-5 mb-5 col-md-7">

<div class="card text-center">

  <div class="card-header">
    Eliminar Articulo
  </div>
  <form action="{{route('articulo.destroy',$consultaId->idArticulo)}}" method="POST">
    @csrf
    @method('DELETE')

  <div class="card-body">
    <h6>Marca:</h6>
    <h5 class="card-title">{{$consultaId->Marca}}</h5>
    <h6>Descripcion:</h6>
    <h5 class="card-title"> {{$consultaId->Descripcion}}</h5>
    <h6>Cantidad:</h6>
    <h5 class="card-title">{{$consultaId->Cantidad}}</h5>
  </div>


  <div class="card-footer text-muted">
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="{{route('articulo.index')}}" class="btn btn-primary"> No Regresar </a>
  </form>
  </div>

</div>



@stop