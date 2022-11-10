<?php

use Illuminate\Support\Facades\Route;

/* Impostamos el Controlador */
use App\Http\Controllers\controladorComic;



/* Creamos las vistas */
Route::get('/', [controladorComic::class, 'showLogin']) -> name('Log');
Route::post('Ingresar', [controladorComic::class, 'procesarLogin']) -> name('inic');



Route::get('inicio', [controladorComic::class, 'showinicio']) -> name('in');


Route::get('inicioo', [controladorComic::class, 'showinicioo']) -> name('ini');

Route::get('Usuarios', [controladorComic::class, 'showUsuarios']) -> name('usu');

Route::get('Comics', [controladorComic::class, 'showComics']) -> name('Com');

Route::post('UsuarioGuardado', [controladorComic::class, 'procesarUsuario']) -> name('UsuGua');

Route::post('ComicGuardado', [controladorComic::class, 'procesarComic']) -> name('ComGua');



Route::get('Articulos',[controladorComic::class,'showArticulos'])->name('Arti');

Route::post('confirmarA', [controladorComic::class, 'GuardarA'])->name('saveA');

Route::get('Proveedores',[controladorComic::class,'showProveedores'])->name('Provee');

Route::post('confirmarP', [controladorComic::class, 'GuardarP'])->name('saveP');



Route::get('MostrarUsuarios',[controladorComic::class,'showmUsuarios.'])->name('mosUsu');


Route::get('MostrarUsuarios',[controladorComic::class,'showmUsuar'])->name('mosUsu');


Route::get('MostrarComics',[controladorComic::class,'showmComics'])->name('mosCom');

Route::get('MostrarArticulos',[controladorComic::class,'showmArt'])->name('mosArt');

Route::get('MostrarProveedores',[controladorComic::class,'showmPro'])->name('mosPro');

Route::get('Ventas_comics',[controladorComic::class,'showVentasCom'])->name('Vent');
Route::post('Venta_com', [controladorComic::class, 'procesarVentaComic'])->name('Ventasss');






Route::get('Ventas_articulos',[controladorComic::class,'showVentasArt'])->name('Venta');

Route::post('Venta_art', [controladorComic::class, 'procesarVentaArticulo'])->name('Vent_ar');




Route::get('Pedidos',[controladorComic::class,'showPedidos'])->name('Ped');

Route::post('Genera_Pedido', [controladorComic::class, 'procesarPedido'])->name('Pedido');

Route::get('VentasRealizadas',[controladorComic::class,'showVentasRealizadas'])->name('VentasReli');