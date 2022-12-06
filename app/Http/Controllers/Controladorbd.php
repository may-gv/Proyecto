<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorUsuario;
use App\Http\Requests\validarProveedor;
use App\Http\Requests\ValidadorComic;
use App\Http\Requests\ValidadorVentaArticulos;
use App\Http\Requests\validarArticulo;

use DB;
use Carbon\Carbon;

class Controladorbd extends Controller
{
    //---------------Usuarios-------------------------
    public function index_usu()
    {
        $ConsultaUsuarios= DB::table('tb_usuarios')->get();
        
        return view('MostrarUsuarios',compact('ConsultaUsuarios'));
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

    public function index_pro()
    {
        $ConsultaProveedores= DB::table('tb_proveedores')->get();
        
        return view('MostrarProveedores',compact('ConsultaProveedores'));
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

    public function index_com()
    {
        $ConsultaComics= DB::table('tb_comics')->get();
        
        return view('MostrarComics',compact('ConsultaComics'));
    }

    public function create_com()
    {
        return view('Comics');
    }

    
    public function store_com(ValidadorComic $request)
    {
        
        DB::table('tb_comics')->insert([
            "Nombre"=> $request->input('txtNombre'),
            "Edicion"=> $request->input('txtEdicion'),
            "Compania"=> $request->input('txtCompania'),
            "Cantidad"=> $request->input('txtCantidad'),
            "PrecioCompra"=> $request->input('txtPrecioCompra'),
            "PrecioVenta"=> $request->input('txtPrecioVenta'),
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
        $consultaId= DB::table('tb_comics')->where('idProo',$id_com)->first();
        return view('', compact('consultaId'));
    }

    public function edit_com($id_com)
    {
        $consultaId= DB::table('tb_comics')->where('idProo',$id_com)->first();
        return view('EditarComic', compact('consultaId'));
    }

   
    public function update_com(ValidadorComic $request, $id_com)
    {
        DB::table('tb_proveedores')->where('idProo', $id_com)->update([
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
        DB::table('tb_proveedores')->where('idusu', $id_com)->delete();
        return redirect('proveedor')->with('Eliminado','abc');
    }

    //----------------Articulos------------

    public function index_art()
    {

        $ConsultaArticulos= DB::table('tb_articulos')->get();
        
        
        return view('MostrarArticulos',compact('ConsultaArticulos'));
    }

    public function create_art()
    {
        $ConsultaProvee = DB::table('tb_proveedores')->get();
        return view('Articulos',compact('ConsultaProvee'));
    }

    
    public function store_art(validarArticulo $request)
    {
        DB::table('tb_articulos')->insert([
            "Tipo"=> $request->input('txtTipo'),
            "Marca"=> $request->input('txtMarca'),
            "Descripcion"=> $request->input('txtDescripcion'),
            "Cantidad"=> $request->input('txtCantidad'),
            "PrecioCompra"=> $request->input('txtPrecioCompra'),
            "PrecioVenta"=> $request->input('txtPrecioVenta'),
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
        $consultaId= DB::table('tb_proveedores')->where('idProo',$id_art)->first();
        return view('EditarProveedores', compact('consultaId'));
    }

   
    public function update_art(validarArticulo $request, $id_art)
    {
        DB::table('tb_proveedores')->where('idProo', $id_art)->update([
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

    
    public function destroy_art($id_art)
    {
        DB::table('tb_proveedores')->where('idusu', $id_art)->delete();
        return redirect('proveedor')->with('Eliminado','abc');
    }
}
