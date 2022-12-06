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
       
    

        <form class="m-4 col-md-9" id="hey" method="post"action="{{route('usuario.update',$consultaId->idusu)}}">
           
            @csrf

            {!!method_field('PUT')!!}
            
        <div class="card text-center mb-2 fw-bold col-md-12" id="cole">
          
        
        <div class="card-header fs-2 text-white">
            
            Editar Usuario
          </div>
          

        <div class="card-body col-md-12">

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" id="input" name="txtNombre" placeholder="Nombre" value="{{$consultaId->Nombre}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtNombre')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Teléfono </label>
                    <input type="text" class="form-control" id="input" name="txtTelefono" placeholder="Teléfono" value="{{$consultaId->Telefono}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtTelefono')}}</p>
                </div>
                
                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Usuario </label>
                    <input type="text" class="form-control" id="input" name="txtUsuario" placeholder="Usuario" value="{{$consultaId->Usuario}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtUsuario')}}</p>
                </div>

                

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Contraseña </label>
                    <input type="text" class="form-control" id="input" name="txtContra" placeholder="Contraseña" value="{{$consultaId->Contraseña}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtContra')}}</p>
                </div>

                <div class="mb-3 text-white">
                    
                    <label class="form-label"> Confirma Contraseña </label>
                    <input type="text" class="form-control" id="input" name="txtConfirma" placeholder="Confirma Contraseña" value="{{$consultaId->Contraseña}}">
                    <p class="text-primary fst-italic">{{$errors->first('txtConfirma')}}</p>
                </div>


                <div class="mb-3 text-white">
                    <label class="form-label"> Rol </label>
                </div>
                <div class="mb-3 " id="input">
                    <select name="Rol" id="" class="form-control" style="background: #48608583" value="{{$consultaId->Rol}}">
                        <option selected disabled="disabled" style="background: #48608583">Selecciona Rol:</option>
                        <option value="Super Usuario">Super Usuario</option>
                        <option value="Vendedor">Vendedor</option>
                        
                        
                    </select>
                <p class="text-primary fst-italic">{{$errors->first('Rol')}}</p>

                    
                </div>
                
        <div class="card-footer">
            
            <button type="submit" class="btn btn-secondary" id="buton">Editar</button>
        
        </div>
    </form>
  
    </div>
    
</div>
    
    
        
    </body>

    </html>
    


