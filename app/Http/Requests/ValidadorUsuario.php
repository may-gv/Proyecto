<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorUsuario extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    
    

    {
        
        return [
            'txtNombre'=> 'required', 
            'txtTelefono'=>'required|numeric|min:9',
            'txtUsuario'=> 'required', 
            'txtContra'=>'required',
            'txtConfirma'=>'required|same:txtContra',
            'Rol'=> 'required', 
        ];
    }
}
