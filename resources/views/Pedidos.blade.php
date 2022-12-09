@extends('plantilla')


@section('contenido')



    <div class="container mt-4 col-md-6" id="contenedor">
        

        <form class="m-4 col-md-9" id="hey" method="POST" action="{{route('pedido.store', $consultaId->idProo)}}">
            @csrf

        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">

            <div class="card-header fs-2 text-white">
                Generar Pedido
            </div>
            <img src= {!! asset('css\images\compra.png') !!} id="icon">

            <div class="card-body col-md-12">
                
                <div class="mb-3 text-white">
                    
                    
                    <input type="text" class="form-control" id="input"  name="txtProv" placeholder="Nombre" value="{{$consultaId->idProo}}" readonly onmousedown="return false">
                    
                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Cantidad </label>
                    <input type="text" step="any" class="form-control" id="input" name="txtCantidad" placeholder="Cantidad" value=" {{ old('txtCantidad')}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtCantidad')}}</p>
                </div>


                <div class="mb-3 text-white">
                    <label class="form-label"> Descripción </label>
                    <textarea type="text" class="form-control" id="input" name="txtDescripcion" placeholder="Descripción" value=" {{ old('txtDescripcion')}}"></textarea>
                    <p class="text-primary fst-italic">{{$errors->first('txtDescripcion')}}</p>

                </div>

                <div class="mb-3 text-white">
                    <label class="form-label"> Usuario </label>
                    <select name="txtVendedor" id="" class="form-control" style="background: #48608583" value=" {{ old('txtVendedor')}}">
                        
                        
                        <option selected disabled="disabled" value="" style="background: #48608583">Selecciona Usuario:</option>
                        @foreach($ConsultaUsu as $usu)
                        
                            <option value="{{$usu->idusu}}">{{$usu->Nombre}}</option>
                        
                        @endforeach
                        
                    </select>
                    
                    <p class="text-primary fst-italic">{{$errors->first('txtVendedor')}}</p>

                </div>
            </div>
                
                
            <div class="card-footer">
                
                <button type="submit" class="btn btn-secondary" id="buton"> Solicitar </button>
                


            
            </div>
        </div>
    </form>
</div>


@stop