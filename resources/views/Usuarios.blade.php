@extends('plantilla')


@section('contenido')



     

    <div class="container mt-4 col-md-6" id="contenedor">
     

        <form class="m-4 col-md-9" id="hey" >
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white  ">
            Registrar Usuario
          </div>
          <img src= "css\images\usuario.png" id="icon">
          

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                  
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Nombre">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Teléfono </label>
                    <input type="number" class="form-control" id="input" name="txtTelefono" placeholder="Teléfono">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Usuario </label>
                    <input type="text" class="form-control" id="input" name="txtUsuario" placeholder="Usuario">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Contraseña </label>
                    <input type="password" class="form-control" id="input" name="txtContra" placeholder="Contraseña">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Rol </label>
                </div>
                <div class="mb-3 " id="input">
                    <select name="Rol" id="" class="form-control" style="background: #48608583">
                        <option value="" style="background: #48608583">Super Usuario</option>
                        <option value="" style="background: #48608583">Vendedor</option>
                    </select>
                </div>

               
      
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="hey">Registrar</button>
         
        </div>
    
        
    
</form>

</div>
</div>











@stop