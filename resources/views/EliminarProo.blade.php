@extends('plantilla')


@section('contenido')



<div class="container mt-5 mb-5 col-md-7">

<div class="card text-center">

  <div class="card-header">
    Eliminar Proveedor
  </div>
  <form action="{{route('proveedor.destroy',$consultaId->idProo)}}" method="POST">
    @csrf
    @method('DELETE')

  <div class="card-body">
    <h6>Empresa:</h6>
    <h5 class="card-title">{{$consultaId->Empresa}}</h5>
    <h6>Tipo de Mercancia:</h6>
    <h5 class="card-title">{{$consultaId->Tipomercancia}}</h5>
    <h6>Direccion:</h6>
    <h5 class="card-title">{{$consultaId->Direccion}}</h5>
  </div>


  <div class="card-footer text-muted">
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="{{route('proveedor.index')}}" class="btn btn-primary"> No Regresar </a>
  </form>
  </div>

</div>



@stop