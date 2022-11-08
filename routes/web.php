<?php

use Illuminate\Support\Facades\Route;



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

<<<<<<< HEAD
Route::get('/Formulario_Usu', function () {
    return view('Formulario_Usu');
});
=======
Route::get('/Comics', function () {
    return view('Comics');
});

Route::get('/Articulos', function () {
    return view('Articulos');
});

Route::get('/Proveedores', function () {
    return view('Proveedores');
});

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
>>>>>>> main
