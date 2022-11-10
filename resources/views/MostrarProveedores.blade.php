@extends('plantilla')


@section('contenido')

@if(session()->has('Finalizado'))
{!! " <script> Swal.fire(
 'Eso es todo!',
 'Proveedor Registrado',
 'success'  ) </script> "!!}
@endif


@if($errors->any())
     @foreach($errors->all() as $error)
     
     @endforeach
@endif
     
<div class="container mt-5 col-md-10 " id="hey">
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
        <th scope="col">Borrar</th>
          <th scope="col">Editar</th>
          <th scope="col">Generar pedido</th>
        
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
        <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>
        <td><img src="css\images\vendido.png" id="opciones" alt=""></td>
        
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
        <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>
        <td><img src="css\images\vendido.png" id="opciones" alt=""></td>
        
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
        <td><img src="css\images\borrar-amigo.png" id="opciones"alt=""></td>
        <td><img src="css\images\editar.png" id="opciones" alt=""></td>
        <td><img src="css\images\vendido.png" id="opciones" alt=""></td>
      </tr>
    </tbody>
  </table>

    
</div>

@stop