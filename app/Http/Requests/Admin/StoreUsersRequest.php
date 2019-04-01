<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersRequest extends FormRequest
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
            'name' => 'required|regex:/^[A-Za-z]*\s()[A-Za-z]*$/|string|max:30',
            'apellidoPaterno' => 'required',
            'cedula' => 'numeric|required|unique:users|digits_between:5,8',
            'codigoSiss' => 'numeric|required|unique:users|digits_between:9,10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'roles' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El campo nombre es obligatorio',
            // 'apellidoPaterno.required' => 'El campo apellido es obligatorio',
        ];
 }
}
