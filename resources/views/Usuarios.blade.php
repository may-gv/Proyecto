@extends('plantilla')

@section('contenido')


<div class="container text-left" id="conte">
    <a href={{route('usuario.index')}}> 
        <img src="css\images\deshacer.png" id="bu"alt=""></td>
    </a>
</div>

    <div class="container mt-4 col-md-6" id="contenedor">
     
        
            
        <form class="m-4 col-md-9" id="hey" method="post"action="{{route('usuario.store')}}">
        @csrf
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white">
            Registrar Usuario
          </div>
          <img src= "css\images\usuario.png" id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Nombre" value="{{old('txtNombre')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtNombre')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Teléfono </label>
                    <input type="text" class="form-control" id="input" name="txtTelefono" placeholder="Teléfono" value="{{old('txtTelefono')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtTelefono')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Usuario </label>
                    <input type="text" class="form-control" id="input" name="txtUsuario" placeholder="Usuario" value="{{old('txtUsuario')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtUsuario')}}</p>
                </div>

                

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Contraseña </label>
                    <input type="password" class="form-control" id="input" name="txtContra" placeholder="Contraseña" value="{{old('txtContra')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtContra')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Confirma Contraseña </label>
                    <input type="password" class="form-control" id="input" name="txtConfirma" placeholder="Confirma Contraseña" value="{{old('txtConfirma')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtConfirma')}}</p>
                </div>


                <div class="mb-3 text-white">
                    <label class="form-label"> Rol </label>
                </div>
                <div class="mb-3 " id="input">
                    <select name="Rol" id="" class="form-control" style="background: #48608583" value=" {{old('Rol')}}">
                        <option selected disabled="disabled" style="background: #48608583">Selecciona Rol:</option>
                        <option value="Super Usuario">Super Usuario</option>
                        <option value="Vendedor">Vendedor</option>
                        
                        
                    </select>
                <p class="text-primary fst-italic">{{$errors->first('Rol')}}</p>

                    
                </div>
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>
         
        </div>
    
        
    
</form>

</div>
</div>
@stop