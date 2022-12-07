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
       
    

        <form class="m-4 col-md-9" id="hey" method="post"action="{{route('proveedor.update',$consultaId->idProo)}}">
           
            @csrf

            {!!method_field('PUT')!!}
            
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
          
        
        <div class="card-header fs-2 text-white">
            
            Editar Usuario
          </div>
          

        <div class="card-body col-md-12">

            <div class="mb-3 text-white">
                    
                <label class="form-label"> Empresa </label>
                <input type="text" class="form-control" id="input" name="txtEmpresa" placeholder="Empresa" value="{{$consultaId->Empresa}}">
                <p class="text-primary fst-italic">{{$errors->first('txtEmpresa')}}</p>
            </div>

            <div class="mb-3 text-white">
                
                <label class="form-label"> Tipo de mercancia </label>
                <input type="text" class="form-control" id="input" name="txtMercancia" placeholder="Tipo de mercancia" value="{{$consultaId->Tipomercancia}}">
                <p class="text-primary fst-italic">{{$errors->first('txtMercancia')}}</p>
            </div>

            <div class="mb-3 text-white">
                
                <label class="form-label"> Dirección </label>
                <textarea type="text" class="form-control" id="input" name="txtDireccion" placeholder="Dirección">{{$consultaId->Direccion}}</textarea>
                <p class="text-primary fst-italic">{{$errors->first('txtDireccion')}}</p>
            </div>

            <div class="mb-3 text-white">
                
                <label class="form-label"> País </label>
                <input type="text" step="any" class="form-control" id="input" name="txtPais" placeholder="País" value="{{$consultaId->Pais}}">
                <p class="text-primary fst-italic">{{$errors->first('txtPais')}}</p>
            </div>

            <div class="mb-3 text-white">
                
                <label class="form-label"> Contacto </label>
                <input type="text" step="any"  class="form-control" id="input" name="txtContacto" placeholder="Contacto" value="{{$consultaId->Contrato}}">
                <p class="text-primary fst-italic">{{$errors->first('txtContacto')}}</p>
            </div>

            <div class="mb-3 text-white">
                
                <label class="form-label"> Número fijo </label>
                <input type="text" class="form-control" id="input" name="txtNum_fijo" placeholder=" Número fijo " value="{{$consultaId->Nofijo}}">
                <p class="text-primary fst-italic">{{$errors->first('txtNum_fijo')}}</p>
            </div>

            <div class="mb-3 text-white">
                
                <label class="form-label"> Número celular </label>
                <input type="text" class="form-control" id="input" name="txtNumero_cel" placeholder="Número celular " value="{{$consultaId->Nocel}}">
                <p class="text-primary fst-italic">{{$errors->first('txtNumero_cel')}}</p>
            </div>

            <div class="mb-3 text-white">
                
                <label class="form-label"> Correo </label>
                <input type="email" class="form-control" id="input" name="txtCorreo" placeholder="Correo " value="{{$consultaId->Correo}}">
                <p class="text-primary fst-italic">{{$errors->first('txtCorreo')}}</p>
            </div>
            
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Editar</button>
        
        </div>
    </form>
  
    </div>
    
</div>
    
    
        
    </body>

    </html>
    


