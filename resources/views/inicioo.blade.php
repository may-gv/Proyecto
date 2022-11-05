@extends('plantilla')


@section('contenido')

<h1> Inicio </h1>


    <div class="row">
        <div class="col-4 ">
            <div class="card text-center mb-5 ml-5 fw-bold" style="width: 24rem; margin-left: 12rem">
        
                <div class="card-header text-center">
                    Comics
                </div>
        
                <div class="card-body">
                    <p class="card-text">En este apartado se mandara al formulario para poder vender comics. </p>
        
                </div>
        
        
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary" id="cuerpo"> Comics </button>
                </div>
        
        
            </div> 
        </div>
        <div class="col-4">
            <div class="container col-md-12" > 

                <div class="card text-center mb-5 fw-bold" style="width: 24rem; margin-left: 24rem">
                    
                    <div class="card-header text-center">
                        Articulos 
                    </div>
            
                    <div class="card-body">
                        
                        <p class="card-text"> En este apartado se mandara al formulario para poder hacer la venta de articulos. </p>
            
                    </div>
            
            
            
                    <div class="card-footer">
                        <a href="usuarios">
                        <button type="submit" class="btn btn-secondary" id="cuerpo"> Articulos </button></a>
                    </div>
            
            
                </div> 
                
            
            </div>

    </div>  


</div>

@stop