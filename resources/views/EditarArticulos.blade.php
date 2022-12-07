<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet"  href="/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Comics</title>
</head>
<body background="{{asset('css\images\Fondocomics.jpg')}}">

    <div class="container text-left" id="conte">
        <a href={{route('usuario.index')}}> 
            <
        </a>

    </div>

    <div class="container col-md-6" id="contenedor">
       
    

        <form class="m-4 col-md-9" id="hey" method="post"action="{{route('articulo.update',$consultaId->idArticulo)}}">
           
            @csrf

            {!!method_field('PUT')!!}
            
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
          
        
        <div class="card-header fs-2 text-white">
            
            Editar Articulo
          </div>
          

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
                    <input type="text" class="form-control" id="input" name="txtDescripcion" placeholder="Descripcion" value="{{$consultaId->Descripcion}}">
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
                    <label class="form-label"> Precio Venta </label>
                    <input type="text" step="any"  class="form-control" id="input" name="txtPrecioVenta" placeholder="Precio Venta" value="{{$consultaId->PrecioVenta}}" >
                    <p class="text-primary fst-italic">{{$errors->first('txtPrecioVenta')}}</p>

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
    
    
        
    </body>

    </html>
    


