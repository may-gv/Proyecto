<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorComic;

/* Impostamos el Controlador */
use App\Http\Controllers\controladorComic;


/*

/* Creamos las vistas */
Route::get('/', [controladorComic::class, 'showLogin']) -> name('Log');


Route::get('inicio', [controladorComic::class, 'showinicio']) -> name('in');

Route::get('inicioo', [controladorComic::class, 'showinicioo']) -> name('ini');

Route::get('Usuarios', [controladorComic::class, 'showUsuarios']) -> name('usu');

Route::get('Comics', [controladorComic::class, 'showComics']) -> name('Com');

Route::post('UsuarioGuardado', [controladorComic::class, 'procesarUsuario']) -> name('UsuGua');

Route::post('ComicGuardado', [controladorComic::class, 'procesarComic']) -> name('ComGua');




/* 
Route::get('/', function () {
    return view('login');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/inicioo', function () {
    return view('inicioo');
});

 ---------Formularios  Valida Christian--------------

Route::get('/Usuarios', function () {
    return view('Usuarios');
});

Route::get('/Comics', function () {
    return view('Comics');
});

*/


---------Formularios  Valida Christian--------------*/


/* ---------Formularios  Valida Angel--------------*/

Route::get('Articulos',[controladorComic::class,'showArticulos'])->name('Arti');

Route::post('confirmarA', [controladorComic::class, 'GuardarA'])->name('saveA');

Route::get('Proveedores',[controladorComic::class,'showProveedores'])->name('Provee');

Route::post('confirmarP', [controladorComic::class, 'GuardarP'])->name('saveP');


/*-------------Tablas--------------*/

Route::get('MostrarUsuarios',[controladorComic::class,'showmUsuarios.'])->name('mosUsu');

Route::get('MostrarComics',[controladorComic::class,'showmComics'])->name('mosCom');

Route::get('MostrarArticulos',[controladorComic::class,'showmArt'])->name('mosArt');

Route::get('MostrarProveedores',[controladorComic::class,'showmPro'])->name('mosPro');



