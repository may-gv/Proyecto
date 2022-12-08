@extends('plantilla')

@section('contenido')


<div class="container text-left" id="conte">
    <a href={{route('comic.index')}}> 
        <img src={!! asset('css\images\deshacer.png')!!} id="bu"alt=""></td>
    </a>
</div>

    <div class="container mt-4 col-md-6" id="contenedor">
     
        
            
        <form class="m-4 col-md-9" id="hey" method="post" action="{{route('comic.store')}}">
        @csrf
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white">
            Registrar Comic
          </div>
          <img src= {!! asset('css\images\comi.png')!!} id="icon">

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
                <input type="text" step="any" class="form-control" id="input" name="txtPrecioCompra" placeholder="Precio compra" value=" {{ old('txtPrecioCompra')}}">
                <p class="text-primary fst-Italic">{{ $errors->first('txtPrecioCompra') }} </p>
            </div>

            <div class="mb-3 text-white">
                <label class="form-label"> Precio Venta </label>
                <input type="text" step="any"  class="form-control" id="input" name="txtPrecioVenta" placeholder="Precio Venta" value=" {{ old('txtPrecioVenta')}}">
                <p class="text-primary fst-Italic">{{ $errors->first('txtPrecioVenta') }} </p>
            </div>

            <div class="mb-3 text-white">
                <label class="form-label"> Fecha ingreso </label>
                <input type="date" class="form-control" id="input" name="txtFecha" placeholder="Fecha ingreso " value="{{old('txtFecha')}}">
                <p class="text-primary fst-Italic">{{ $errors->first('txtFecha') }} </p>
            </div>

            <div class="mb-3 text-white">
                <label class="form-label"> Cantidad </label>
                <input type="text" class="form-control" id="input" name="txtCantidad" placeholder="Cantidad " value="{{old('txtCantidad')}}">
                <p class="text-primary fst-Italic">{{ $errors->first('txtCantidad') }} </p>
            </div>


                <div class="mb-3 text-white">
                    <label class="form-label"> Proveedor </label>
                </div>
                <div class="mb-3 " id="input">
                    <select name="txtProveedor" id="" class="form-control" style="background: #48608583" value=" {{ old('txtRol')}}" >
                        <option value="" style="background: #48608583" value=" {{ old('txtRol')}}">Selecciona</option>
                        <option value="1">One</option>
                        <option value="1">Two</option>
                        <option value="1">Three</option>
                        
                    </select>
                <p class="text-primary fst-italic">{{$errors->first('txtProveedor')}}</p>

                    
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Tipo" value=" {{ old('txtNombre')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtNombre')}}</p>



                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Edición </label>
                    <input type="text" class="form-control" id="input" name="txtEdicion" placeholder="Marca" value=" {{ old('txtEdicion')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtEdicion')}}</p>

                    

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Compañia </label>
                    <textarea type="text" class="form-control" id="input" name="txtCompania" placeholder="Descripción" >{{ old('txtCompania')}}</textarea>
                    <p class="text-primary fst-italic">{{$errors->first('txtCompania')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Cantidad </label>
                    <input type="text" step="any" class="form-control" id="input" name="txtCantidad" placeholder="Cantidad" value=" {{ old('txtCantidad')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtCantidad')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio compra </label>
                    <input type="text" step="any" class="form-control" id="input" name="txtPrecioCompra" placeholder="Precio compra" value=" {{ old('txtPrecioCompra')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtPrecioCompra')}}</p>


                </div>


                <div class="mb-3 text-white">
                    <label class="form-label"> Fecha ingreso </label>
                    <input type="date" class="form-control" id="input" name="txtFecha" placeholder="Fecha ingreso " value="{{old('txtFecha')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtFecha')}}</p>

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Proveedor </label>
                    <select name="txtProveedor" id="" class="form-control" style="background: #48608583" value=" {{ old('txtProveedor')}}">
                        
                        
                        <option selected disabled="disabled" value="" style="background: #48608583">Selecciona Proveedor:</option>
                        @foreach($ConsultaProvee as $prove)
                        
                            <option value="{{$prove->idProo}}">{{$prove->Empresa}}</option>
                        
                        @endforeach
                        
                    </select>
                    
                    <p class="text-primary fst-italic">{{$errors->first('txtProveedor')}}</p>

                    
                </div>
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>
         
        </div>
    
        
    
</form>

</div>
</div>
@stop