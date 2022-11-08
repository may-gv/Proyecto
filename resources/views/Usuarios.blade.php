@extends('plantilla')


@section('contenido')


<div class="container mt-3 col-md-4 " id="contenedor">
     

    <form class="m-4 " id="hey">
    <div class="card text-center mb-2 fw-bold" id="cole">

        <div class="card-header fs-2 text-white">
            Registrar Usuario
          </div>

        <div class="card-body">

                <div class="mb-3 text-white">
                  
                    <label class="form-label"> Usuario </label>
                    <input type="text" class="form-control" id="input" name="" placeholder="Usuario">
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Contraseña </label>
                    <input type="password" class="form-control" id="input" name="password" placeholder="Contraseña">
                </div>
               
      
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="hey">Ingresar</button>
         
        </div>
    
        
    
</form>

</div>
</div>











@stop