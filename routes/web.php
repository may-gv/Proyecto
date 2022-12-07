<?php

use Illuminate\Support\Facades\Route;

/* Impostamos el Controlador */
use App\Http\Controllers\controladorComic;
use App\Http\Controllers\Controladorbd;



/* Creamos las vistas */
Route::get('/', [controladorComic::class, 'showLogin']) -> name('Log');
Route::post('Ingresar', [controladorComic::class, 'procesarLogin']) -> name('inic');



Route::get('inicio', [controladorComic::class, 'showinicio']) -> name('in');


Route::get('inicioo', [controladorComic::class, 'showinicioo']) -> name('ini');

Route::get('Usuarios', [controladorComic::class, 'showUsuarios']) -> name('usu');

Route::get('Comics', [controladorComic::class, 'showComics']) -> name('Com');





/* ---------Formularios  Validar--------------*/



Route::get('Articulos',[controladorComic::class,'showArticulos'])->name('Arti');

//Route::post('confirmarA', [controladorComic::class, 'GuardarA'])->name('saveA');

Route::get('Proveedores',[controladorComic::class,'showProveedores'])->name('Provee');

//Route::post('confirmarP', [controladorComic::class, 'GuardarP'])->name('saveP');

Route::get('MostrarUsuarios',[controladorComic::class,'showmUsuarios.'])->name('mosUsu');


Route::get('MostrarUsuarios',[controladorComic::class,'showmUsuar'])->name('mosUsu');


Route::get('MostrarComics',[controladorComic::class,'showmComics'])->name('mosCom');

Route::get('MostrarArticulos',[controladorComic::class,'showmArt'])->name('mosArt');

Route::get('MostrarProveedores',[controladorComic::class,'showmPro'])->name('mosPro');

Route::get('Ventas_comics',[controladorComic::class,'showVentasCom'])->name('Vent');
Route::post('Venta_com', [controladorComic::class, 'procesarVentaComic'])->name('Ventasss');

Route::get('Ventas_articulos',[controladorComic::class,'showVentasArt'])->name('Vent');
Route::post('Venta_Art', [controladorComic::class, 'procesarVentaArticulo'])->name('Ventass');

Route::get('VentasRealizadas',[controladorComic::class,'showmVentas'])->name('mosVentas');
Route::post('GenerarPedido', [controladorComic::class, 'procesarPedido'])->name('Pedido');

Route::get('Pedidos',[controladorComic::class,'showPedidos'])->name('Genera');


//--------------------------Usuarios--------------------------------------
//Create
Route::get('usuario/create_usu', [Controladorbd::class,'create_usu'])->name('usuario.create');
//Store
Route::post('usuario', [Controladorbd::class,'store_usu'])->name('usuario.store');
//index
Route::get('usuario', [Controladorbd::class,'index_usu'])->name('usuario.index');
//Edit
Route::get('usuario/{id_usu}/edit_usu', [Controladorbd::class,'edit_usu'])->name('usuario.edit');
//Update
Route::put('usuario/{id_usu}', [Controladorbd::class,'update_usu'])->name('usuario.update');
//show
Route::get('usuario/{id}/show_usu', [Controladorbd::class,'show_usu'])->name('usuario.show');
//Destroy
Route::delete('usuario/{id}', [Controladorbd::class,'destroy_usu'])->name('usuario.destroy');


//----------------------Proveedores--------------------------------------------
//Create
Route::get('proveedor/create_pro', [Controladorbd::class,'create_pro'])->name('proveedor.create');
//Store
Route::post('proveedor', [Controladorbd::class,'store_pro'])->name('proveedor.store');
//index
Route::get('proveedor', [Controladorbd::class,'index_pro'])->name('proveedor.index');
//Edit
Route::get('proveedor/{id_pro}/edit_pro', [Controladorbd::class,'edit_pro'])->name('proveedor.edit');
//Update
Route::put('proveedor/{id_pro}', [Controladorbd::class,'update_pro'])->name('proveedor.update');
//show
Route::get('proveedor/{id_pro}/show_pro', [Controladorbd::class,'show_pro'])->name('proveedor.show');
//Destroy
Route::delete('proveedor/{id_pro}', [Controladorbd::class,'destroy_pro'])->name('proveedor.destroy');

//----------------------Comics--------------------------------------------
//Create
Route::get('comic/create_art', [Controladorbd::class,'create_com'])->name('comic.create');
//Store
Route::post('comic', [Controladorbd::class,'store_com'])->name('comic.store');
//index
Route::get('comic', [Controladorbd::class,'index_com'])->name('comic.index');
//Edit
Route::get('comic/{id_com}/edit_com', [Controladorbd::class,'edit_com'])->name('comic.edit');
//Update
Route::put('comic/{id_com}', [Controladorbd::class,'update_com'])->name('comic.update');
//show
Route::get('comic/{id_com}/show_com', [Controladorbd::class,'show_com'])->name('comic.show');
//Destroy
Route::delete('comic/{id_com}', [Controladorbd::class,'destroy_com'])->name('comic.destroy');

//----------------------Articulos--------------------------------------------
//Create
Route::get('articulo/create_art', [Controladorbd::class,'create_art'])->name('articulo.create');
//Store
Route::post('articulo', [Controladorbd::class,'store_art'])->name('articulo.store');
//index
Route::get('articulo', [Controladorbd::class,'index_art'])->name('articulo.index');
//Edit
Route::get('articulo/{id_art}/edit_com', [Controladorbd::class,'edit_art'])->name('articulo.edit');
//Update
Route::put('articulo/{id_art}', [Controladorbd::class,'update_art'])->name('articulo.update');
//show
Route::get('articulo/{id_art}/show_com', [Controladorbd::class,'show_art'])->name('articulo.show');
//Destroy
Route::delete('articulo/{id_art}', [Controladorbd::class,'destroy_art'])->name('articulo.destroy');



