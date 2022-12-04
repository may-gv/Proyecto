<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorComic;
use App\Http\Requests\ValidadorUsuario;
use App\Http\Requests\ValidadorVentaComic;
use App\Http\Requests\ValidadorLogin;
use App\Http\Requests\ValidadorPedido;
use App\Http\Requests\ValidadorVentaArticulos;
use DB;
use Carbon\Carbon;

class Controladorbd extends Controller
{
    
    public function index_usu()
    {
        $ConsultaUsuarios= DB::table('tb_usuarios')->get();
        
        return view('MostrarUsuarios',compact('ConsultaUsuarios'));
    }

    public function create_usu()
    {
        
        
        return view('Usuarios');
    }

    
    public function store_usu(Request $request)
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
        return view('EliminarUsuarios', compact('consultaId'));
    }

    public function edit_usu($id_usu)
    {
        $consultaId= DB::table('tb_usuarios')->where('idusu',$id_usu)->first();
        return view('EditarUsuarios', compact('consultaId'));
    }

   
    public function update_usu(Request $request, $id_usu)
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
}
