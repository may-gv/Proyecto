@extends('plantilla')
@section('contenido')

@if(session()->has('Finalizado'))
<div class="alert alert-primary" role="alert">
   Proveedor Guardado
</div>
@endif

@if($errors->any())
     @foreach($errors->all() as $error)
     
     @endforeach
@endif
     

    <div class="container mt-4 col-md-6" id="contenedor">
     

        <form class="m-4 col-md-9" id="hey" method="post"action ="confirmarP">
        @csrf
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white">
            Registrar Proveedor
          </div>
          <img src= "css\images\proveedor.png" id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                    <p class="text-primary fst-italic">{{$errors->first('txtEmpresa')}}</p>
                    <label class="form-label"> Empresa </label>
                    <input type="text" class="form-control" id="input" name="txtEmpresa" placeholder="Empresa">
                </div>

                <div class="mb-3 text-white">
                    <p class="text-primary fst-italic">{{$errors->first('txtMercancia')}}</p>
                    <label class="form-label"> Tipo de mercancia </label>
                    <input type="text" class="form-control" id="input" name="txtMercancia" placeholder="Tipo de mercancia">
                </div>

                <div class="mb-3 text-white">
                    <p class="text-primary fst-italic">{{$errors->first('txtDireccion')}}</p>
                    <label class="form-label"> Dirección </label>
                    <textarea type="text" class="form-control" id="input" name="txtDireccion" placeholder="Dirección"></textarea>
                </div>

                <div class="mb-3 text-white">
                    <p class="text-primary fst-italic">{{$errors->first('txtPais')}}</p>
                    <label class="form-label"> País </label>
                    <input type="text" step="any" class="form-control" id="input" name="txtPais" placeholder="País">
                </div>

                <div class="mb-3 text-white">
                    <p class="text-primary fst-italic">{{$errors->first('txtContacto')}}</p>
                    <label class="form-label"> Contacto </label>
                    <input type="text" step="any"  class="form-control" id="input" name="txtContacto" placeholder="Contacto" >
                </div>

                <div class="mb-3 text-white">
                    <p class="text-primary fst-italic">{{$errors->first('txtNum_fijo')}}</p>
                    <label class="form-label"> Número fijo </label>
                    <input type="number" class="form-control" id="input" name="txtNum_fijo" placeholder=" Número fijo ">
                </div>

                <div class="mb-3 text-white">
                    <p class="text-primary fst-italic">{{$errors->first('txtNumero_cel')}}</p>
                    <label class="form-label"> Número celular </label>
                    <input type="number" class="form-control" id="input" name="txtNumero_cel" placeholder="Número celular ">
                </div>

                <div class="mb-3 text-white">
                    <p class="text-primary fst-italic">{{$errors->first('txtCorreo')}}</p>
                    <label class="form-label"> Correo </label>
                    <input type="email" class="form-control" id="input" name="txtCorreo" placeholder="Correo ">
                </div>


                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>
         
        </div>
    
        
    
</form>

</div>
</div>
@stop