<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarProveedor extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            'txtEmpresa' => 'required',
            'txtMercancia' => 'required',
            'txtDireccion' => 'required',
            'txtPais' => 'required',
            'txtContacto' => 'required',
            'txtNum_fijo' => 'required|numeric',
            'txtNumero_cel' => 'required|numeric',
            'txtCorreo' => 'required|email'
        ];
    }
}
