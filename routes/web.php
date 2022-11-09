<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorComic;


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



