<?php

namespace App\Http\Controllers;
use App\Http\Requests\validarArticulo;
use App\Http\Requests\validarProveedor;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;


//Importamos los validadodes
use App\Http\Requests\ValidadorComic;
use App\Http\Requests\ValidadorUsuario;

class controladorComic extends Controller
{

    public function showArticulos(){
        return view('Articulos');

    }

    public function showProveedores(){
        return view('Proveedores');

    }

    public function GuardarA(validarArticulo $req){


        return redirect('Articulos')->with('Finalizado', 'Articulo Guardado');
    }


    public function GuardarP(validarProveedor $req){

        return redirect('Proveedores')->with('Finalizado', 'Proveedor Guardado');

    }


    /* ---------vistas  tablas--------------*/

    public function showmUsuar(){
        return view('MostrarUsuarios');

    }

    public function showmComics(){
        return view('MostrarComics');

    }

    public function showmArt(){
        return view('MostrarArticulos');

    }

    public function showmPro(){
        return view('MostrarProveedores');

    }



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
