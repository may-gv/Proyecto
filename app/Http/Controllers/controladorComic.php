<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importamos los validadodes
use App\Http\Requests\ValidadorComic;
use App\Http\Requests\ValidadorUsuario;

class controladorComic extends Controller
{
    //Creamos las funciones
    public function showLogin(){ 
        return view ('login');
    }
      
      public function showinicio(){ 
        return view ('inicio');
      }

      public function showinicioo(){ 
        return view ('inicioo');
      }

      public function showUsuarios(){ 
        return view ('Usuarios');
      }
      public function showComics(){ 
        return view ('Comics');
      }

      public function procesarUsuario(ValidadorUsuario $req){
          
        return redirect('Usuarios')->with('confirmacion' , ' Usuario Registrado');
      }
    
      public function procesarComic(ValidadorComic $req){
          
        return redirect('Comics')->with('confirmacion' , ' Comic Registrado');
      }
}
