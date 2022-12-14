@extends('plantilla')

@section('contenido')


<div class="container text-left" id="conte">
    <a href={{route('comic.index')}}> 
        <img src={!! asset('css\images\deshacer.png')!!} id="bu"alt=""></td>
    </a>
</div>

    <div class="container mt-4 col-md-6" id="contenedor">
     
        
            
        <form class="m-4 col-md-9" id="hey" method="post" action="{{route('comic.update',$consultaId->idComic)}}">
            @csrf
            {!!method_field('PUT')!!}
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white">
            Registrar Comic
          </div>
          <img src= {!! asset('css\images\comi.png')!!} id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Tipo" value="{{$consultaId->Nombre}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtNombre')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Edición </label>
                    <input type="text" class="form-control" id="input" name="txtEdicion" placeholder="Marca" value="{{$consultaId->Edicion}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtEdicion')}}</p>

                    

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Compañia </label>
                    <input type="text" class="form-control" id="input" name="txtCompania" placeholder="Descripción" value="{{$consultaId->Compania}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtCompania')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Cantidad </label>
                    <input type="text" step="any" class="form-control" id="input" name="txtCantidad" placeholder="Cantidad" value="{{$consultaId->Cantidad}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtCantidad')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Precio compra </label>
                    <input type="text" step="any" class="form-control" id="input" name="txtPrecioCompra" placeholder="Precio compra" value="{{$consultaId->PrecioCompra}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtPrecioCompra')}}</p>


                </div>


                <div class="mb-3 text-white">
                    <label class="form-label"> Fecha ingreso </label>
                    <input type="date" class="form-control" id="input" name="txtFecha" placeholder="Fecha ingreso " value="{{$consultaId->FechaIngreso}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtFecha')}}</p>

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Proveedor </label>
                    <select name="txtProveedor" id="" class="form-control" style="background: #48608583" value="{{$consultaId->id_prov}}">
                        
                        
                        <option selected disabled="disabled" value="" style="background: #48608583">Selecciona Proveedor:</option>
                        @foreach($ConsultaProvee as $prove)
                        
                            <option value="{{$prove->idProo}}">{{$prove->Empresa}}</option>
                        
                        @endforeach
                        
                    </select>
                    
                    <p class="text-primary fst-italic">{{$errors->first('txtProveedor')}}</p>

                    
                </div>
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Editar</button>
         
        </div>
    
        
    
</form>

</div>
</div>
@stop
        
  