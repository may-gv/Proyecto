@extends('plantilla')
@section('contenido')

@if(session()->has('Finalizado'))
<div class="alert alert-primary" role="alert">
   Articulo Guardado
</div>
@endif

@if($errors->any())
     @foreach($errors->all() as $error)
     
     @endforeach
@endif


    <div class="container mt-4 col-md-6" id="contenedor">
     

        <form class="m-4 col-md-9" id="hey" method="post"action ="confirmarA">
        @csrf
            
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white">
            Registrar Articulo
          </div>
          <img src= "css\images\libro.png" id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                    <label class="form-label"> Tipo </label>
                    <input type="text" class="form-control" id="input" name="txtTipo" placeholder="Tipo">
                    <p class="text-primary fst-italic">{{$errors->first('txtTipo')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Marca </label>
                    <input type="text" class="form-control" id="input" name="txtMarca" placeholder="Marca">
                    <p class="text-primary fst-italic">{{$errors->first('txtMarca')}}</p>

                    

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Descripción </label>
                    <textarea type="text" class="form-control" id="input" name="txtDescripcion" placeholder="Descripción"></textarea>
                    <p class="text-primary fst-italic">{{$errors->first('txtDescripcion')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Cantidad </label>
                    <input type="number" step="any" class="form-control" id="input" name="txtCantidad" placeholder="Cantidad">
                    <p class="text-primary fst-italic">{{$errors->first('txtCantidad')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio compra </label>
                    <input type="number" step="any" class="form-control" id="input" name="txtPrecioCompra" placeholder="Precio compra">
                    <p class="text-primary fst-italic">{{$errors->first('txtPrecioCompra')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio Venta </label>
                    <input type="number" step="any"  class="form-control" id="input" name="txtPrecioVenta" placeholder="Precio Venta" >
                    <p class="text-primary fst-italic">{{$errors->first('txtPrecioVenta')}}</p>

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Fecha ingreso </label>
                    <input type="date" class="form-control" id="input" name="txtFecha" placeholder="Fecha ingreso ">
                    <p class="text-primary fst-italic">{{$errors->first('txtFecha')}}</p>

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Proveedor </label>
                </div>
                <div class="mb-3 " id="input">
                    <select name="txtProveedor" id="" class="form-control" style="background: #48608583">
                        <option value="" style="background: #48608583">......</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        
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