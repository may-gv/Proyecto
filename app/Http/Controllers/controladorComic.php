<?php

namespace App\Http\Controllers;
use App\Http\Requests\validarArticulo;
use App\Http\Requests\validarProveedor;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;


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

    public function showmUsuarios(){
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



    
}
