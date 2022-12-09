@extends('plantilla')


@section('contenido')


<div class="container mt-5 mb-5 col-md-7">

    <div class="card text-center">
    
      <div class="card-header">
        Eliminar Usiario
      </div>
      <form action="{{route('usuario.destroy',$consultaId->idusu)}}" method="POST">
        @csrf
        @method('DELETE')
    
      <div class="card-body">
        <h6>Nombre:</h6>
        <h5 class="card-title">{{$consultaId->Nombre}}</h5>
        <h6>Usuario:</h6>
        <h5 class="card-title"> {{$consultaId->Usuario}}</h5>

      </div>
    
    
      <div class="card-footer text-muted">
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{route('usuario.index')}}" class="btn btn-primary"> No Regresar </a>
      </form>
      </div>
    
    </div>


@stop