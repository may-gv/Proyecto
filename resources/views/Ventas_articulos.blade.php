@extends('plantilla')
@section('contenido')




    <div class="container mt-4 col-md-6" id="contenedor">
     

        <form class="m-4 col-md-9" id="hey" method="post"action ="">
        @csrf
            
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white">
            Venta de Articulo
          </div>
          <img src= "css\images\libro.png" id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                    <label class="form-label"> Tipo </label>
                    <input type="text" class="form-control" id="input" name="txtTipo" placeholder="Tipo" value=" {{ old('txtTipo')}}" disabled>
                    


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Marca </label>
                    <input type="text" class="form-control" id="input" name="txtMarca" placeholder="Marca" value=" {{ old('txtMarca')}}" disabled>
                    

                    

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Descripción </label>
                    <textarea type="text" class="form-control" id="input" name="txtDescripcion" placeholder="Descripción" value=" {{ old('txtDescripcion')}}" disabled></textarea>
                    


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
                    <label class="form-label"> Precio Venta </label>
                    <input type="number" step="any"  class="form-control" id="input" name="txtPrecioVenta" placeholder="Precio Venta" value=" {{ old('txtPrecioVenta')}}" disabled>
                    

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Total </label>
                    <input type="number" step="any"  class="form-control" id="input" name="txtTotal" placeholder="Precio Venta" value=" {{ old('txtTotal')}}" disabled>
                    

                </div>

                

                

                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>
         
        </div>
    
        
    
</form>

</div>
</div>
@stop