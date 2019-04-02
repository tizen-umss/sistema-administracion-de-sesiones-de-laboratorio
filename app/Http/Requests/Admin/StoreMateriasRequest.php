<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMateriasRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombreMateria' => 'required|max:20|unique:materias',
            'codigoMateria' => 'required|max:7|unique:materias',
            'descripcionMateria' => 'max:30',
        ];
    }
}


