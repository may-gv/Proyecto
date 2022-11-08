@extends('plantilla')


@section('contenido')

<div class="container mt-5 col-md-10 text-center" id="hey">
  <h1 class=" mt-4 text-center text-white fw-bold">Proveedores</h1>
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
        <td>Otto</td>
        
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
        <td>Otto</td>
      </tr>
    </tbody>
  </table>

    <a href="/Proveedores">
    <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>
</div>

@stop