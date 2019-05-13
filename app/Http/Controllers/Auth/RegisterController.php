<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // return Validator::make($data, [
        //     'name' => 'required|regex:/^[A-Za-z]*\s?()[A-Za-z]*$/|string|max:30',
        //     'apellidoPaterno' => 'required|alpha|string|max:30',
        //     'apellidoMaterno' => 'alpha|string|max:30',
        //     'cedula' => 'required|unique:users|numeric|max:255',
        //     'codigosiss' => 'numeric|required|unique:users|digits_between:9,10',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6|confirmed',

        //     // 'name' => 'required|regex:/^[A-Za-z]*\s?()[A-Za-z]*$/|string|max:30',
        //     // 'apellidoPaterno' => 'required|alpha|string|max:30',
        //     // 'apellidoMaterno' => 'alpha|string|max:30',
        //     // 'cedula' => 'numeric|required|unique:users,cedula|digits_between:5,8',
        //     // 'codigosiss' => 'numeric|required|unique:users,codigosiss|digits_between:9,10',
        //     // 'email' => 'required|email|unique:users,email',
        //     // 'password' => 'required',
        //     // 'roles' => 'required',

            
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apellidoPaterno' => $data['apellidoPaterno'],
            'apellidoMaterno' => $data['apellidoMaterno'],
            'cedula' => $data['cedula'],
            'codigosiss' => $data['codigosiss'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    
}
