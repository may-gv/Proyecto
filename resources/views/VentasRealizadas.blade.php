@extends('plantilla')


@section('contenido')

@

     
<div class="container mt-5 col-md-10 " id="hey">
  <h1 class=" mt-4 text-center text-white fw-bold">Ventas Realizadas</h1>
  

    <div class="input-group mb-3 col-md-3">
      <input type="text" class="form-control text-center" placeholder="Buscar Venta " aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
      <button class="btn btn-outline-secondary" type="button" id="buton">Buscar</button>
    </div>
<table class=" table text-center text-white" id="hey">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Venta</th>
        <th scope="col">Empleado</th>
        <th scope="col">Dia</th>
        <th scope="col">Mes</th>
        
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        
      </tr>
    </tbody>
  </table>

    
</div>

@stop