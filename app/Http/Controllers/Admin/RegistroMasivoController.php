<?php

namespace App\Http\Controllers\Admin;


use DB;
use Illuminate\Database\Seeder;
use App\User;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



namespace App\Http\Controllers\Admin;

use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;

class RegistroMasivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('admin.users.registroMasivo');
    }

    public function guardar(Request $request){

        // dd($archivo);

        // echo $archivo->file('path')->store('csv');
        $path = $request->file('path')->store("/");// $path = public_path('Ejemplo.csv'); // Le pasamos el archivo
        // echo "csv/".$path;
        rename ("csv/".$path,"csv/datos.csv");

        $path = public_path('csv/datos.csv'); // $path = public_path('Ejemplo.csv'); // Le pasamos el archivo
        // echo $path;
        $arregloLineas = file($path);
        $codificado = array_map('utf8_encode', $arregloLineas);
        $array = array_map('str_getcsv',$codificado);//
        $arregloPalabras = array();
        $indicePalabras = 0;
        $palabra='';
        

        for($cadena = 0; $cadena < count($array); $cadena++){//Recorre las listas
            for ($letra=0; $letra < strlen($array[$cadena][0]); $letra++) {//Recorre las letras 
                if((string)strcmp($array[$cadena][0][$letra], (string) ';')==0){
                    // echo " / ".$array[$cadena][0][$letra] . "Es igual   /";
                    // echo $palabra
                    $arregloPalabras[$cadena][$indicePalabras] = (string) $palabra;
                    $palabra = '';
                    $indicePalabras++;

                }else{
                    // echo "  / " . $array[$cadena][0][$letra] . "No es igual   /";
                    $palabra = (string) $palabra . (string) $array[$cadena][0][$letra];
                }
            }
            $arregloPalabras[$cadena][7]=$palabra;
            $palabra = '';
            $indicePalabras = 0;
        }

        // echo "Contrasenia: " . $arregloPalabras[4][6];
        //Agregar a la baase de datos
// echo "El rol es: " . $arregloPalabras[4][7];

        for ($i=1; $i < count($arregloPalabras); $i++) { 
            $user = User::create([
                'name'=>(string)$arregloPalabras[$i][0],
                'apellidopaterno'=>(string)$arregloPalabras[$i][1],
                'apellidomaterno'=>(string)$arregloPalabras[$i][2],
                'cedula'=>(string)$arregloPalabras[$i][3],
                'codigosiss'=>(string)$arregloPalabras[$i][4],
                'email'=>(string)$arregloPalabras[$i][5],
                'password'=>(string)bcrypt($arregloPalabras[$i][6]) 
                ]);
            $user->assignRole($arregloPalabras[$i][7]);
        
        }

        //Redireccionamiento
    if (! Gate::allows('users_manage')) {
        return abort(401);
    }

    //Redireccionamiento
    $users = User::all();
    error_log ('holamundo');
    error_log('App.timezone');

    return view('admin.users.index', compact('users'));
    }

    public function e(Request $request){

        $path = $request->file('path')->store("/");// $path = public_path('Ejemplo.csv'); // Le pasamos el archivo
        // echo "csv/".$path;
        rename ("csv/".$path,"csv/datos.csv");
    }

}
