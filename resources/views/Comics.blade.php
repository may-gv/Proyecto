@extends('plantilla')


@section('contenido')

@if(session()->has('confirmacion')) 

<div class="alert alert-primary" role="alert">
    Comic Guardado
 </div>
 @endif
 
 @if($errors->any())
      @foreach($errors->all() as $error)
      
      @endforeach
 @endif

    <div class="container mt-4 col-md-6" id="contenedor">
        

        <form class="m-4 col-md-9" id="hey" method="POST" action="ComicGuardado">
            @csrf

        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">

        <div class="card-header fs-2 text-white">
            Registrar Comic
          </div>
          <img src= "css\images\comic.png" id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                  
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Nombre" value=" {{ old('txtNombre')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtNombre') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Edición </label>
                    <input type="text" class="form-control" id="input" name="txtEdicion" placeholder="Teléfono" value=" {{ old('txtEdicion')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtEdicion') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Compañia </label>
                    <input type="text" class="form-control" id="input" name="txtCompania" placeholder="Compañia" value=" {{ old('txtCompania')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtCompania') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio compra </label>
                    <input type="number" step="any" class="form-control" id="input" name="txtPrecioCompra" placeholder="Precio compra" value=" {{ old('txtPrecioCompra')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtPrecioCompra') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio Venta </label>
                    <input type="number" step="any"  class="form-control" id="input" name="txtPrecioVenta" placeholder="Precio Venta" value=" {{ old('txtPrecioVenta')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtPrecioVenta') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Fecha ingreso </label>
                    <input type="date" class="form-control" id="input" name="txtFecha" placeholder="Fecha ingreso " value=" {{ old('txtFecha')}}">
                    <p class="text-primary fst-Italic">{{ $errors->first('txtFecha') }} </p>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Proveedor </label>
                </div>
                <div class="mb-3 " id="input">
                    <select name="txtRol" id="" class="form-control" style="background: #48608583">
                        <option value="" style="background: #48608583">......</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        
                    </select>
                <p class="text-primary fst-italic">{{$errors->first('txtRol')}}</p>

                    
                </div>

                
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>

        </form>
    </div>
</div>
</div>


         
        </div>
            </form>
            </div>
        </div>
    


@stop