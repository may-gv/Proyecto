@extends('plantilla')


@section('contenido')

 <h1>Inicio Administrador</h1>


    <div class="row">
        <div class="col-4 ">
            <div class="card text-center mb-5 ml-5 fw-bold" style="width: 24rem; margin-left: 1rem">
                
        
                <div class="card-header text-center">
                    Administracion de Usuarios
                </div>
                <img src="css\images\descarga.png" class="card-img-top" alt="...">
        
                <div class="card-body">
                    <p class="card-text"> Aqui se mandara al formulario y consulta para poder agregar, eliminar y editar usuarios del sistema. </p>
        
                </div>
        
        
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary" id="cuerpo"> Usuarios </button>
                </div>
        
        
            </div> 
        </div>
        <div class="col-4">
            <div class="container col-md-12" > 

                <div class="card text-center mb-5 fw-bold" style="width: 24rem; margin-left: 2rem">
                    
                    <div class="card-header text-center">
                        Administracion de Comic's 
                    </div>
                    <img src="css\images\Comic.jpg" class="card-img-top" alt="...">
            
                    <div class="card-body">
                        <p class="card-text">En este apartado se mandara al formulario para poder vender comics. </p>
            
                    </div>
            
            
            
                    <div class="card-footer">
                        <button type="submit" class="btn btn-secondary" id="cuerpo"> Comics </button>
                    </div>
            
            
                </div> 
                
            
            </div>
        </div>
        <div class="col-4">
            <div class="container col-md-12"  > 

                <div class="card text-center mb-5 fw-bold" style="width: 24rem; margin-left: 4rem">
                    
                    <div class="card-header text-center">
                        Administracion de Articulos
                    </div>
                    <img src="css\images\articulos.jpg" class="card-img-top" alt="...">
            
                    <div class="card-body">
                        <p class="card-text">En este apartado se mandara al formulario para poder hacer la venta de articulos. </p>
            
                    </div>
            
            
            
                    <div class="card-footer">
                        <button type="submit" class="btn btn-secondary" id="cuerpo"> Articulos </button>
                    </div>
            
            
                </div> 
                
            
            </div>
        </div>
        <div class="col-4 ">
            <div class="card text-center mb-5 ml-5 fw-bold" style="width: 24rem; margin-left: 36rem">
        
                <div class="card-header text-center">
                    Administracion de Proveedores
                </div>
                <img src="css\images\proo.jpg" class="card-img-top" alt="...">
        
                <div class="card-body">
                    <p class="card-text">En este apartado se mandara al formulario para poder visualisar, y poder agregar, eliminar o editar Proveedores </p>
        
                </div>
        
        
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary" id="cuerpo"> Proveedores </button>
                </div>
        
        
            </div> 
        </div>
    </div>

  

     
    

</div>

@stop