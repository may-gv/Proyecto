@extends('plantilla')


@section('contenido')

@if(session()->has('confirmacion')) 

    <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong> Usuario Registrado  </strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif


    <div class="container mt-4 col-md-6" id="contenedor">
        @if ($errors->any())

        @foreach ($errors->all() as $error)
 
       
        @endforeach  
      @endif
     

      <div class="card text-center mb-2 fw-bold" id="cole">

        <form class="m-4 col-md-9" id="hey" method="POST" action="UsuarioGuardado" >
            @csrf

        <div class="card-header fs-2 text-white  ">
            Registrar Usuario
          </div>
          <img src= "css\images\usuario.png" id="icon">
          

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                  
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Nombre" value=" {{ old('txtNombre')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtNombre') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Teléfono </label>
                    <input type="number" class="form-control" id="input" name="txtTelefono" placeholder="Teléfono" value=" {{ old('txtTelefono')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtTelefono') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Usuario </label>
                    <input type="text" class="form-control" id="input" name="txtUsuario" placeholder="Usuario" value=" {{ old('txtUsuario')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtUsuario') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Contraseña </label>
                    <input type="password" class="form-control" id="input" name="txtContra" placeholder="Contraseña" value=" {{ old('txtContra')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtContra') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label" > Rol </label>
                </div>
                <div class="mb-3 " id="input">
                    <select name="Rol" id="" class="form-control" style="background: #48608583" value=" {{ old('Rol')}}">
                        <option value="" style="background: #48608583">Super Usuario</option>
                        <option value="" style="background: #48608583">Vendedor</option>
                    </select>
                </div>

               
      
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="hey">Registrar</button>
            </form>
        </div>
    </div>
</div>
         
    
        
    
@stop