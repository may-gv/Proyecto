@extends('plantilla')


@section('contenido')



     

    <div class="container mt-4 col-md-4 " id="contenedor">
     

        <form class="m-4 " id="hey">
        <div class="card text-center mb-2 fw-bold" id="cole">
        <div class="card-header fs-2 text-white">
            Registrar Usuario
          </div>

        <div class="card-body">

                <div class="mb-3 text-white">
                  
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Nombre">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Telefono </label>
                    <input type="number" class="form-control" id="input" name="txtTelefono" placeholder="Telefono">
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
                    <input type="text" class="form-control" id="input" name="txtRol" placeholder="Rol">
                </div>

               
      
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="hey">Registrar</button>
         
        </div>
    
        
    
</form>

</div>
</div>











@stop