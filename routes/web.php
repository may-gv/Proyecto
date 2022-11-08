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

Route::get('/Comics', function () {
    return view('Comics');
});

Route::get('/Articulos', function () {
    return view('Articulos');
});

Route::get('/Proveedores', function () {
    return view('Proveedores');
});