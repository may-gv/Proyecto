<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarComic extends FormRequest
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
            'txtNombre' => 'required|numeric|min:13',
            'txtTelefono' => 'required',
            'txtCompania' => 'required',
            'txtPrecioCompra' => 'required|numeric',
            'txtEditorial' => 'required',
            'txtCorreo' => 'required|email'
        ];
    }
}
