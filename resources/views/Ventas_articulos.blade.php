@extends('plantilla')


@section('contenido')



    <div class="container mt-4 col-md-6" id="contenedor">
        @if($errors->any())
        @foreach($errors->all() as $error)
        
        @endforeach
    @endif
        

        <form class="m-4 col-md-9" id="hey" method="POST" action="{{route('articuloventa.store',$consultaId->idArticulo)}}">
            @csrf

        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">

        <div class="card-header fs-2 text-white">
            Vender Articulo
          </div>
          <img src= {!! asset('css\images\comic.png')!!} id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                  
                    <label class="form-label"> Tipo </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Nombre" value="{{$consultaId->Tipo}}" disabled>
                    
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Marca </label>
                    <input type="text" class="form-control" id="input" name="txtEdicion" placeholder="Teléfono" value="{{$consultaId->Tipo}}" disabled>
                    
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Descripción </label>
                    <input type="text" class="form-control" id="input" name="txtCompania" placeholder="Compañia" value="{{$consultaId->Tipo}}" disabled>
                    
                </div>

                

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio venta por pieza </label>
                    <input type="number" step="any"  class="form-control" id="input" name="txtPrecioVenta" placeholder="Precio Venta" value="{{$consultaId->PrecioCompra}}" disabled>
                    
                </div>
                <div class="mb-3 text-white">
                    <label class="form-label"> Cantidad disponible </label>
                    <input type="number" class="form-control" id="input" name="txtCantidad_disp" placeholder="Cantidad disponible" value="{{$consultaId->Cantidad}}" disabled>
                    
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Ingrese la cantidad a vender </label>
                    <input type="number" step="any" class="form-control" id="input" name="txtCantidad" placeholder="Cantidad" value=" {{ old('txtCantidad')}}">
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