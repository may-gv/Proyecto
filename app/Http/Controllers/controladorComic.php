<?php

namespace App\Http\Controllers;
use App\Http\Requests\validarArticulo;
use App\Http\Requests\validarProveedor;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;


//Importamos los validadodes
use App\Http\Requests\ValidadorComic;
use App\Http\Requests\ValidadorUsuario;
use App\Http\Requests\ValidadorVentaComic;
use App\Http\Requests\ValidadorPedido;

class controladorComic extends Controller
{

    public function showArticulos(){
        return view('Articulos');

    }

    public function showProveedores(){
        return view('Proveedores');

    }

    public function showventasrealizadas(){
      return view('VentasRealizadas');

  }

    public function GuardarA(validarArticulo $req){


        return redirect('MostrarArticulos')->with('Finalizado', 'Articulo Guardado');
    }


    public function GuardarP(validarProveedor $req){

        return redirect('MostrarProveedores')->with('Finalizado', 'Proveedor Guardado');

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
          
        return redirect('MostrarUsuarios')->with('confirmacion' , ' Usuario Registrado');
      }
    
      public function procesarComic(ValidadorComic $req){
          
        return redirect('MostrarComics')->with('confirmacion' , ' Comic Registrado');
      }

      public function showVentasCom(){
        return view('Ventas_comics');

    }

    public function procesarVentaComic(ValidadorVentaComic $req){
          
      return redirect('MostrarComics')->with('Acabo' , 'Venta Registrada');
    }

    public function showPedidos(){
      return view('Pedidos');

  }

    public function procesarPedido(ValidadorPedido $req){
          
      return redirect('MostrarProveedores')->with('Acabo' , 'Venta Registrada');
    }
    

}
