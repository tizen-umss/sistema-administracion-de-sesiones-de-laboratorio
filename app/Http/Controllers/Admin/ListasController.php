<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Tarea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = tarea::all();

        

        

            $listas=DB::select(
                'select users.id , users.name, users.apellidopaterno, users.apellidomaterno, users.cedula, users.codigosiss, grupos_materia.nombregrupomat, materias.nombremateria, tareas.calificacion
                
                from users, grupos_materia, materias, tareas
                
                where materias.id = grupos_materia.materia_id and grupos_materia.user_id = users.id and
                users.id = tareas.user_id' );
            
                
    return view('admin.lista.index',  compact('listas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

// $listas=DB::select(
//     'select u.id ,u.name, u.apellidopaterno, u.apellidomaterno, u.cedula, u.codigosiss ,gm.nombregrupomat,m.nombremateria, t.calificacion
//     from users as u, grupos_materia as gm, materias as m, asignaciones as a,tareas as t
//     where a.user_id=u.id and a.grupomateria_id=gm.id and gm.materia_id=m.id and t.user_id=u.id and gm.id='.$idgrupomateria .'and materias.id='.$idmateria );
    
