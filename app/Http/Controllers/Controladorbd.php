<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorUsuario;
use App\Http\Requests\validarProveedor;
use App\Http\Requests\ValidadorComic;
use App\Http\Requests\ValidadorVentaArticulos;
use App\Http\Requests\validarArticulo;
use App\Http\Requests\ValidadorVentaComic;


use DB;
use Carbon\Carbon;

class Controladorbd extends Controller
{
    //---------------Usuarios-------------------------
    public function index_usu(Request $request)
    {
        $busqueda=$request->busqueda;
        $ConsultaUsuarios= DB::table('tb_usuarios')->where('nombre','LIKE','%'.$busqueda.'%')->get();
        
        return view('MostrarUsuarios',compact('ConsultaUsuarios','busqueda'));
    }

    public function create_usu()
    {
        return view('Usuarios');
    }

    
    public function store_usu(ValidadorUsuario $request)
    {
        DB::table('tb_usuarios')->insert([
            "Nombre"=> $request->input('txtNombre'),
            "Telefono"=> $request->input('txtTelefono'),
            "Usuario"=> $request->input('txtUsuario'),
            "Contraseña"=> $request->input('txtContra'),
            "Rol"=> $request->input('Rol'),
            
            
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtNombre');

        return redirect('usuario')->with('confirmacion','abc')->with('txtNombre', $nom);
    }

    public function show_usu($id_usu)
    {
        $consultaId= DB::table('tb_usuarios')->where('idusu',$id_usu)->first();
        return view('', compact('consultaId'));
    }

    public function edit_usu($id_usu)
    {
        $consultaId= DB::table('tb_usuarios')->where('idusu',$id_usu)->first();
        return view('EditarUsuarios', compact('consultaId'));
    }

   
    public function update_usu(ValidadorUsuario $request, $id_usu)
    {
        DB::table('tb_usuarios')->where('idusu', $id_usu)->update([
                "Nombre"=> $request->input('txtNombre'),
                "Telefono"=> $request->input('txtTelefono'),
                "Usuario"=> $request->input('txtUsuario'),
                "Contraseña"=> $request->input('txtContra'),
                "Rol"=> $request->input('Rol'),

            "updated_at"=> Carbon::now()
        ]);
        
        return redirect('usuario')->with('Actualizado','abc',);
    }

    
    public function destroy_usu($id_usu)
    {
        DB::table('tb_usuarios')->where('idusu', $id_usu)->delete();
        return redirect('usuario')->with('Eliminado','abc');
    }

    //----------------Proveedores------------

    public function index_pro(Request $request)
    {
        $busqueda=$request->busqueda;
        $ConsultaProveedores= DB::table('tb_proveedores')->where('Empresa','LIKE','%'.$busqueda.'%')->get();
        
        return view('MostrarProveedores',compact('ConsultaProveedores','busqueda'));
    }

    public function create_pro()
    {
        return view('Proveedores');
    }

    
    public function store_pro(validarProveedor $request)
    {
        DB::table('tb_proveedores')->insert([
            "Empresa"=> $request->input('txtEmpresa'),
            "Tipomercancia"=> $request->input('txtMercancia'),
            "Direccion"=> $request->input('txtDireccion'),
            "Pais"=> $request->input('txtPais'),
            "Contrato"=> $request->input('txtContacto'),
            "Nofijo"=> $request->input('txtNum_fijo'),
            "Nocel"=> $request->input('txtNumero_cel'),
            "Correo"=> $request->input('txtCorreo'),
            
            
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtEmpresa');

        return redirect('proveedor')->with('confirmacion','abc')->with('txtEmpresa', $nom);
    }

    public function show_pro($id_pro)
    {
        $consultaId= DB::table('tb_proveedores')->where('idProo',$id_pro)->first();
        return view('', compact('consultaId'));
    }

    public function edit_pro($id_pro)
    {
        $consultaId= DB::table('tb_proveedores')->where('idProo',$id_pro)->first();
        return view('EditarProveedores', compact('consultaId'));
    }

   
    public function update_pro(validarProveedor $request, $id_pro)
    {
        DB::table('tb_proveedores')->where('idProo', $id_pro)->update([
            "Empresa"=> $request->input('txtEmpresa'),
            "Tipomercancia"=> $request->input('txtMercancia'),
            "Direccion"=> $request->input('txtDireccion'),
            "Pais"=> $request->input('txtPais'),
            "Contrato"=> $request->input('txtContacto'),
            "Nofijo"=> $request->input('txtNum_fijo'),
            "Nocel"=> $request->input('txtNumero_cel'),
            "Correo"=> $request->input('txtCorreo'),

            "updated_at"=> Carbon::now()
        ]);
        
        return redirect('proveedor')->with('Actualizado','abc',);
    }

    
    public function destroy_pro($id_pro)
    {
        DB::table('tb_proveedores')->where('idusu', $id_pro)->delete();
        return redirect('proveedor')->with('Eliminado','abc');
    }

    //----------------Comics------------

    public function index_com(Request $request)
    {
        $busqueda=$request->busqueda;
        $ConsultaComics= DB::table('tb_comics')->where('Nombre','LIKE','%'.$busqueda.'%')->get();
        
        
        return view('MostrarComics',compact('ConsultaComics','busqueda'));
        
       
    }

    public function create_com()
    {   $ConsultaProvee = DB::table('tb_proveedores')->get();
        return view('Comics',compact('ConsultaProvee'));
    }

    
    public function store_com(ValidadorComic $request)
    {
        $precio = $request->txtPrecioCompra;

        $precioVenta = $precio+(0.4*$precio);
        DB::table('tb_comics')->insert([
            "Nombre"=> $request->input('txtNombre'),
            "Edicion"=> $request->input('txtEdicion'),
            "Compania"=> $request->input('txtCompania'),
            "Cantidad"=> $request->input('txtCantidad'),
            "PrecioCompra"=> $request->input('txtPrecioCompra'),
            "PrecioVenta"=> $precioVenta,
            "FechaIngreso"=> $request->input('txtFecha'),
            "id_prov"=> $request->input('txtProveedor'),

            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtNombre');

        return redirect('comic')->with('confirmacion','abc')->with('txtNombre', $nom);
    }

    public function show_com($id_com)
    {
        $consultaId= DB::table('tb_comics')->where('idComic',$id_com)->first();
        return view('', compact('consultaId'));
    }

    public function edit_com($id_com)
    {
        $consultaId= DB::table('tb_comics')->where('idProo',$id_com)->first();
        return view('EditarComic', compact('consultaId'));
    }

   
    public function update_com(ValidadorComic $request, $id_com)
    {
        DB::table('tb_comics')->where('idProo', $id_com)->update([
            "Empresa"=> $request->input('txtEmpresa'),
            "Tipomercancia"=> $request->input('txtMercancia'),
            "Direccion"=> $request->input('txtDireccion'),
            "Pais"=> $request->input('txtPais'),
            "Contrato"=> $request->input('txtContacto'),
            "Nofijo"=> $request->input('txtNum_fijo'),
            "Nocel"=> $request->input('txtNumero_cel'),
            "Correo"=> $request->input('txtCorreo'),

            "updated_at"=> Carbon::now()
        ]);
        
        return redirect('comic')->with('Actualizado','abc',);
    }

    
    public function destroy_com($id_com)
    {
        DB::table('tb_comics')->where('idComic', $id_com)->delete();
        return redirect('proveedor')->with('Eliminado','abc');
    }

    //----------------Articulos------------

    public function index_art(Request $request)
    {
        $busqueda=$request->busqueda;
        $ConsultaArticulos= DB::table('tb_articulos')->where('Tipo','LIKE','%'.$busqueda.'%')->get();
        
        
        return view('MostrarArticulos',compact('ConsultaArticulos','busqueda'));
    }

    public function create_art()
    {
        $ConsultaProvee = DB::table('tb_proveedores')->get();
        return view('Articulos',compact('ConsultaProvee'));
    }

    
    public function store_art(validarArticulo $request)
    {
        $precio = $request->txtPrecioCompra;

        $precioVenta = $precio+(0.4*$precio);
        DB::table('tb_articulos')->insert([
            "Tipo"=> $request->input('txtTipo'),
            "Marca"=> $request->input('txtMarca'),
            "Descripcion"=> $request->input('txtDescripcion'),
            "Cantidad"=> $request->input('txtCantidad'),
            "PrecioCompra"=> $request->input('txtPrecioCompra'),
            "PrecioVenta"=> $precioVenta,
            "FechaIngreso"=> $request->input('txtFecha'),
            "id_prov"=> $request->input('txtProveedor'),
            
            
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        
       
        return redirect('articulo')->with('confirmacion','abc');
    }

    public function show_art($id_art)
    {
        $consultaId= DB::table('tb_articulos')->where('idProo',$id_art)->first();
        return view('EliminarArticulo', compact('consultaId'));
    }

    public function edit_art($id_art)
    {
        $ConsultaProvee = DB::table('tb_proveedores')->get();
        $consultaId= DB::table('tb_articulos')->where('idArticulo',$id_art)->first();
        return view('EditarArticulos', compact('consultaId','ConsultaProvee'));
    }

   
    public function update_art(validarArticulo $request, $id_art)
    {
        $precio = $request->txtPrecioCompra;

        $precioVenta = $precio+(0.4*$precio);

        DB::table('tb_articulos')->where('idArticulo', $id_art)->update([
            "Tipo"=> $request->input('txtTipo'),
            "Marca"=> $request->input('txtMarca'),
            "Descripcion"=> $request->input('txtDescripcion'),
            "Cantidad"=> $request->input('txtCantidad'),
            "PrecioCompra"=> $request->input('txtPrecioCompra'),
            "PrecioVenta"=> $precioVenta,
            "FechaIngreso"=> $request->input('txtFecha'),
            "id_prov"=> $request->input('txtProveedor'),

            "updated_at"=> Carbon::now()
        ]);
        $ConsultaProvee = DB::table('tb_proveedores')->get();
        return redirect('articulo')->with('Actualizado','abc',compact('ConsultaProvee'));
    }

    
    public function destroy_art($id_art)
    {
        DB::table('tb_proveedores')->where('idusu', $id_art)->delete();
        return redirect('proveedor')->with('Eliminado','abc');
    }
    //--------------Ventas articulos--------------------
    
    public function index_venart(Request $request)
    {   
        $bus=$request->bus;
        $ConsultaVentaComic= DB::table('tb_ventas_comics')->where('id_comic','LIKE','%'.$bus.'%')->get();
        $busqueda=$request->busqueda;
        $ConsultaVentaArt= DB::table('tb_ventas_articulos')->where('id_art','LIKE','%'.$busqueda.'%')->get();
       
        
        return view('MostrarVentas',compact('ConsultaVentaArt','busqueda','ConsultaVentaComic','bus'));
    }

    

    public function store_venart(ValidadorVentaArticulos $request )
    {
        $cantidad = $request->txtCantidad;
        $precio = $request->txtPrecioVenta;
        $idArt = $request->txtArticulo;
        $total = $cantidad*$precio;
        DB::table('tb_ventas_articulos')->insert([
            "id_usu"=> $request->input('txtVendedor'),
            "id_art"=> $request->input('txtArticulo'),
            "Cantidad"=> $request->input('txtCantidad'),
            "Total"=> $total,
            "Fecha"=> Carbon::now(),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        $cantidad_disp = $request->txtCantidad_disp;
        $cant= $request->txtCantidad;
        $tot = $cantidad_disp-$cant;
        $id_venart = $request->input('txtArticulo');
        DB::table('tb_articulos')->where('idArticulo', $id_venart)->update([
            "Cantidad"=>$tot,
            "updated_at"=> Carbon::now()
        ]);

        return redirect('articuloven')->with('con','abc');
    }
    public function edit_venart($id_vart)
    {
        $ConsultaUsu = DB::table('tb_usuarios')->get();
        $consultaId= DB::table('tb_articulos')->where('idArticulo',$id_vart)->first();
        return view('Ventas_articulos', compact('consultaId','ConsultaUsu'));
    }

//--------------------------Venta Comics---------------------

public function index_vencom(Request $request)
{   
    
    
   
    
    
}



public function edit_vencom($id_vcom)
{
    $ConsultaUsu = DB::table('tb_usuarios')->get();
    $consultaId= DB::table('tb_comics')->where('idComic',$id_vcom)->first();
    return view('Ventas_comics', compact('consultaId','ConsultaUsu'));
}

public function store_vencom(ValidadorVentaComic $request )
    {
        $cantidad = $request->txtCantidad;
        $precio = $request->txtPrecioVenta;
        $idArt = $request->txtArticulo;
        $total = $cantidad*$precio;
        DB::table('tb_ventas_comics')->insert([
            "id_usu"=> $request->input('txtVendedor'),
            "id_comic"=> $request->input('txtComic'),
            "Cantidad"=> $request->input('txtCantidad'),
            "Total"=> $total,
            "Fecha"=> Carbon::now(),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        $cantidad_disp = $request->txtCantidad_disp;
        $cant= $request->txtCantidad;
        $tot = $cantidad_disp-$cant;
        $id_venacom = $request->input('txtComic');
        DB::table('tb_comics')->where('idComic', $id_venacom)->update([
            "Cantidad"=>$tot,
            "updated_at"=> Carbon::now()
        ]);

        return redirect('articuloven')->with('co','abc');
    }

}
