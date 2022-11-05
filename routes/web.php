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

Route::get('/usuarios', function () {
    return view('Usuarios');
});