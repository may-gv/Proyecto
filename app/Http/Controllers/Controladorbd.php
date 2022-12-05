<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorUsuario;
use App\Http\Requests\ValidarProveedor;

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
        DB::table('tb_proveedores')->where('idProo', $id_usu)->update([
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
        DB::table('tb_proveedores')->where('idusu', $id_usu)->delete();
        return redirect('proveedor')->with('Eliminado','abc');
    }
}
