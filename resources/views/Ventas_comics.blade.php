@extends('plantilla')


@section('contenido')



    <div class="container mt-4 col-md-6" id="contenedor">
        

        <form class="m-4 col-md-9" id="hey" method="POST" action="ComicGuardado">
            @csrf

        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">

        <div class="card-header fs-2 text-white">
            Vender Comic
          </div>
          <img src= "css\images\comic.png" id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                  
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Nombre" value=" {{ old('txtNombre')}}" disabled>
                    
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Edición </label>
                    <input type="text" class="form-control" id="input" name="txtEdicion" placeholder="Teléfono" value=" {{ old('txtEdicion')}}" disabled>
                    
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Compañia </label>
                    <input type="text" class="form-control" id="input" name="txtCompania" placeholder="Compañia" value=" {{ old('txtCompania')}}" disabled>
                    
                </div>

                

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio Venta </label>
                    <input type="number" step="any"  class="form-control" id="input" name="txtPrecioVenta" placeholder="Precio Venta" value=" {{ old('txtPrecioVenta')}}" disabled>
                    
                </div>
                <div class="mb-3 text-white">
                    <label class="form-label"> Cantidad disponible </label>
                    <input type="number" class="form-control" id="input" name="txtCantidad_disp" placeholder="Cantidad disponible" value=" {{ old('txtCantidad_disp')}}" disabled>
                    


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Ingrese la cantidad a vender </label>
                    <input type="number" step="any" class="form-control" id="input" name="txtCantidad" placeholder="Cantidad" value=" {{ old('txtCantidad')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtCantidad')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Total </label>
                    <input type="number" step="any"  class="form-control" id="input" name="txtTotal" placeholder="Precio Venta" value=" {{ old('txtPrecioVenta')}}" disabled>
                    
                </div>
                

                    
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