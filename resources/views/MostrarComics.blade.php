@extends('plantilla')


@section('contenido')

<div class="container mt-5 col-md-10 text-center" id="hey">
  <h1 class=" mt-4 text-center text-white fw-bold">Comics</h1>
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
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>Mark</td>
        <td>Otto</td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Jacob</td>
        <td>Thornton</td>
        
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Jacob</td>
        <td>Thornton</td>
      </tr>
    </tbody>
  </table>


    <a href="/Comics">
    <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>
</div>

@stop