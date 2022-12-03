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

Route::post('UsuarioGuardado', [controladorComic::class, 'procesarUsuario']) -> name('UsuGua');

Route::post('ComicGuardado', [controladorComic::class, 'procesarComic']) -> name('ComGua');





/* ---------Formularios  Validar--------------*/



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

Route::get('Ventas_articulos',[controladorComic::class,'showVentasArt'])->name('Vent');
Route::post('Venta_Art', [controladorComic::class, 'procesarVentaArticulo'])->name('Ventass');

Route::get('VentasRealizadas',[controladorComic::class,'showmVentas'])->name('mosVentas');

<<<<<<< Updated upstream
//--------------------------Usuarios--------------------------------------
//Create
Route::get('usuario/create_usu', [Controladorbd::class,'create_usu'])->name('usuario.create');
//Store
Route::post('usuario', [Controladorbd::class,'store_usu'])->name('usuario.store');
//index
Route::get('usuario', [Controladorbd::class,'index_usu'])->name('usuario.index');
//Edit
Route::get('usuario/{id}/edit_usu', [Controladorbd::class,'edit_usu'])->name('usuario.edit');
//Update
Route::put('usuario/{id}', [Controladorbd::class,'update_usu'])->name('usuario.update');
//show
Route::get('usuario/{id}/show_usu', [Controladorbd::class,'show_usu'])->name('usuario.show');
//Destroy
Route::delete('usuario/{id}', [Controladorbd::class,'destroy_usu'])->name('usuario.destroy');

=======
Route::post('GenerarPedido', [controladorComic::class, 'procesarPedido'])->name('Pedido');

Route::get('Pedidos',[controladorComic::class,'showPedidos'])->name('Genera');
>>>>>>> Stashed changes
