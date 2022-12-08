@extends('plantilla')


@section('contenido')



    <div class="container mt-4 col-md-6" id="contenedor">
        @if($errors->any())
        @foreach($errors->all() as $error)
        
        @endforeach
    @endif
        

        <form class="m-4 col-md-9" id="hey" method="POST" action="{{route('comicventa.store', $consultaId->idComic)}}">
            @csrf


           

        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">

        <div class="card-header fs-2 text-white">
            Vender Comic
          </div>
          <img src= {!! asset('css\images\comic.png')!!} id="icon">

        <div class="card-body col-md-12">
            <div class="mb-3 text-white">
                  
                
                <input type="text" class="form-control" id="input" name="txtComic" placeholder="Nombre" value="{{$consultaId->idComic}}" readonly onmousedown="return false">
                
            </div>

                <div class="mb-3 text-white">
                  
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Nombre" value="{{$consultaId->Nombre}}" readonly onmousedown="return false">
                    
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Edición </label>
                    <input type="text" class="form-control" id="input" name="txtEdicion" placeholder="Teléfono" value="{{$consultaId->Edicion}}" readonly onmousedown="return false">
                    
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Compañia </label>
                    <input type="text" class="form-control" id="input" name="txtCompania" placeholder="Compañia" value="{{$consultaId->Compania}}" readonly onmousedown="return false">
                    
                </div>

                

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio venta por pieza </label>
                    <input type="number" step="any"  class="form-control" id="input" name="txtPrecioVenta" placeholder="Precio Venta" value="{{$consultaId->PrecioVenta}}"readonly onmousedown="return false">
                    
                </div>
                <div class="mb-3 text-white">
                    <label class="form-label"> Vendedor </label>
                    <select name="txtVendedor" id="" class="form-control" style="background: #48608583" value=" {{ old('txtVendedor')}}">
                        
                        
                        <option selected disabled="disabled" value="" style="background: #48608583">Selecciona Vendedor:</option>
                        @foreach($ConsultaUsu as $usu)
                        
                            <option value="{{$usu->idusu}}">{{$usu->Nombre}}</option>
                        
                        @endforeach
                        
                    </select>
                    
                    <p class="text-primary fst-italic">{{$errors->first('txtVendedor')}}</p>

                    
                </div>
                
                <div class="mb-3 text-white">
                    <label class="form-label"> Cantidad disponible </label>
                    <input type="number" class="form-control" id="input" name="txtCantidad_disp" placeholder="Cantidad disponible" value="{{$consultaId->Cantidad}}" readonly onmousedown="return false">
                    
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Ingrese la cantidad a vender </label>
                    <input type="text" step="any" class="form-control" id="input" name="txtCantidad" placeholder="Cantidad" value=" {{ old('txtCantidad')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtCantidad')}}</p>


                </div>
                

                
                

                    
                </div>

                
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Vender</button>

       
    </div>
</form>



</div>
</div>

    


@stop