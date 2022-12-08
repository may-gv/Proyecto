@extends('plantilla')

@section('contenido')


<div class="container text-left" id="conte">
    <a href={{route('articulo.index')}}> 
        <img src={!! asset('css\images\deshacer.png')!!} id="bu"alt=""></td>
    </a>
</div>

    <div class="container mt-4 col-md-6" id="contenedor">
     
        
            
        <form class="m-4 col-md-9" id="hey" method="post"action="{{route('articulo.update',$consultaId->idArticulo)}}">
        @csrf
        {!!method_field('PUT')!!}
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
        <div class="card-header fs-2 text-white">
            Editar Articulo
          </div>
          <img src= {!! asset('css\images\libro.png')!!} id="icon">

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Tipo </label>
                    <input type="text" class="form-control" id="input" name="txtTipo" placeholder="Tipo" value="{{$consultaId->Tipo}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtTipo')}}</p>


                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Marca </label>
                    <input type="text" class="form-control" id="input" name="txtMarca" placeholder="Marca" value="{{$consultaId->Marca}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtMarca')}}</p>

                    

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Descripción </label>
                    <textarea type="text" class="form-control" id="input" name="txtDescripcion" placeholder="Descripción" >{{$consultaId->Descripcion}}</textarea>
                    <p class="text-primary fst-italic">{{$errors->first('txtDescripcion')}}</p>


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
                    <select name="txtProveedor" id="" class="form-control" style="background: #48608583" >{{$consultaId->id_prov}}
                        
                        

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