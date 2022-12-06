@extends('plantilla')
@section('contenido')





    <div class="container mt-4 col-md-6" id="contenedor">
     

        <form class="m-4 col-md-9" id="hey" method="post" action="{{route('proveedor.store')}}">
        @csrf
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white">
            Registrar Proveedor
          </div>
          <img src= "css\images\proveedor.png" id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Empresa </label>
                    <input type="text" class="form-control" id="input" name="txtEmpresa" placeholder="Empresa" value=" {{ old('txtEmpresa')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtEmpresa')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Tipo de mercancia </label>
                    <input type="text" class="form-control" id="input" name="txtMercancia" placeholder="Tipo de mercancia" value=" {{ old('txtMercancia')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtMercancia')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Dirección </label>
                    <textarea type="text" class="form-control" id="input" name="txtDireccion" placeholder="Dirección" value=" {{ old('txtDireccion')}}"></textarea>
                    <p class="text-primary fst-italic">{{$errors->first('txtDireccion')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> País </label>
                    <input type="text" step="any" class="form-control" id="input" name="txtPais" placeholder="País" value=" {{ old('txtPais')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtPais')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Contacto </label>
                    <input type="text" step="any"  class="form-control" id="input" name="txtContacto" placeholder="Contacto" value=" {{ old('txtContacto')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtContacto')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Número fijo </label>
                    <input type="text" class="form-control" id="input" name="txtNum_fijo" placeholder=" Número fijo " value=" {{ old('txtNum_fijo')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtNum_fijo')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Número celular </label>
                    <input type="text" class="form-control" id="input" name="txtNumero_cel" placeholder="Número celular " value=" {{ old('txtNumero_cel')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtNumero_cel')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Correo </label>
                    <input type="email" class="form-control" id="input" name="txtCorreo" placeholder="Correo " value=" {{ old('txtCorreo')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtCorreo')}}</p>
                </div>


                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>
         
        </div>
    
        
    
</form>

</div>
</div>
@stop