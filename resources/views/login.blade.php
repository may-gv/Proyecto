<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"  href="/css/styles.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body  background="{{asset('css\images\Fondocomics.jpg')}}">



    <div class="container mt-5 col-md-4 " id="contenedor">
        @if($errors->any())
        @foreach($errors->all() as $error)
        
        @endforeach
    @endif
     

        <form class="m-4 " id="hey" method="POST" action="Ingresar">
            @csrf
        <div class="card text-center mb-2 fw-bold" id="cole">

            <div class="card-header fs-2 text-white">
                Weirdo's Comics
              </div>

            <div class="card-body">

                    <div class="mb-3 text-white">
                      
                        <label class="form-label"> Usuario </label>
                        <input type="text" class="form-control" id="input" name="txtUsuario" placeholder="Usuario" value="{{ old('txtUsuario') }}">
                        <p class="text-primary fst-Italic">{{ $errors->first('txtUsuario') }} </p>
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label"> Contraseña </label>
                        <input type="password" class="form-control" id="input"name="txtContra" placeholder="Contraseña" value="{{ old('txtContra') }}">
                        <p class="text-primary fst-Italic">{{ $errors->first('txtContra') }} </p>
                    </div>
                   
          
                    
            <div class="card-footer">
                
                <button type="submit" class="btn btn-secondary" id="buton">Ingresar</button>
                
            </div>
        
            
        
    </form>
    
 
    </div>
    </div>
</body>
</html>