@extends('plantilla')


@section('contenido')


    <div class="container mt-4 col-md-6" id="contenedor">
     

        <form class="m-4 col-md-9" id="hey">
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white">
            Registrar Articulo
          </div>

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                  
                    <label class="form-label"> Tipo </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Tipo">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Marca </label>
                    <input type="text" class="form-control" id="input" name="txtTelefono" placeholder="Marca">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Descripción </label>
                    <textarea type="text" class="form-control" id="input" name="txtDescripcion" placeholder="Descripción"></textarea>
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Cantidad </label>
                    <input type="number" step="any" class="form-control" id="input" name="txtCantidad" placeholder="Cantidad">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio compra </label>
                    <input type="number" step="any" class="form-control" id="input" name="txtPrecioCompra" placeholder="Precio compra">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio Venta </label>
                    <input type="number" step="any"  class="form-control" id="input" name="txtPrecioVenta" placeholder="Precio Venta" >
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Fecha ingreso </label>
                    <input type="date" class="form-control" id="input" name="txtFecha" placeholder="Fecha ingreso ">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Proveedor </label>
                </div>
                <div class="mb-3 " id="input">
                    <select name="txtProveedor" id="" class="form-control" style="background: #48608583">
                        <option value="" style="background: #48608583">......</option>
                        
                    </select>
                </div>

                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Registrar</button>
         
        </div>
    
        
    
</form>

</div>
</div>