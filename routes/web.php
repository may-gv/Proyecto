<?php

use Illuminate\Support\Facades\Route;

/* Impostamos el Controlador */
use App\Http\Controllers\controladorComic;

/* Creamos las vistas */
Route::get('/', [controladorComic::class, 'showLogin']) -> name('Log');

Route::get('inicio', [controladorComic::class, 'showinicio']) -> name('in');

Route::get('inicioo', [controladorComic::class, 'showinicioo']) -> name('ini');

Route::get('Usuarios', [controladorComic::class, 'showUsuarios']) -> name('usu');

Route::get('Comics', [controladorComic::class, 'showComics']) -> name('Com');

Route::post('UsuarioGuardado', [controladorComic::class, 'procesarUsuario']) -> name('UsuGua');

Route::post('ComicGuardado', [controladorComic::class, 'procesarComic']) -> name('ComGua');

Route::get('/', function () {
    return view('prueba');
});


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

Route::get('/Usuarios', function () {
    return view('Usuarios');
});

Route::get('/Comics', function () {
    return view('Comics');
});
---------Formularios  Valida Christian--------------*/

/* ---------Formularios  Valida Angel--------------*/
Route::get('/Articulos', function () {
    return view('Articulos');
});

Route::get('/Proveedores', function () {
    return view('Proveedores');
});
/*-------------Tablas--------------*/
Route::get('/MostrarUsuarios', function () {
    return view('MostrarUsuarios');
});

Route::get('/MostrarComics', function () {
    return view('MostrarComics');
});

Route::get('/MostrarArticulos', function () {
    return view('MostrarArticulos');
});

Route::get('/MostrarProveedores', function () {
    return view('MostrarProveedores');
});


