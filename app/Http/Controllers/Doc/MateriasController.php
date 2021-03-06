<?php

namespace App\Http\Controllers\Doc;

use App\Materia;
use App\Actividad;
use App\User;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StoreMateriasRequest;
use App\Http\Requests\Admin\UpdateMateriasRequest;
use Illuminate\Support\Facades\Auth;

class MateriasController extends Controller
{
    /**
     * Display a listing of Materia.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('users_manage')) {
        //     return abort(401);
        // }

        // $materias = Materia::all();
        $userAuth=Auth::user()->id;
        $materias=DB::table('grupos_materia')->join('materias','materias.id','=','grupos_materia.materia_id')->where('user_id',$userAuth)->get();
        // return $materias;

        $actividades = Actividad::all();

        return view('doc.materia.index', compact('materias','actividades'));
    }

    /**
     * Show the form for creating new Materia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (! Gate::allows('users_manage')) {
        //     return abort(401);
        // }
        return view('aux.materia.create');
    }

    /**
     * Store a newly created Materia in storage.
     *
     * @param  \App\Http\Requests\StoreMateriasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMateriasRequest $request)
    {
        // if (! Gate::allows('users_manage')) {
        //     return abort(401);
        // }
        Materia::create($request->all());

        return redirect()->route('materias.index');

    }


    /**
     * Show the form for editing Materia.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if (! Gate::allows('users_manage')) {
        //     return abort(401);
        // }
        $materia = User::findOrFail($id);
        
        return view('doc.materia.edit', compact('materia'));
    }

    /**
     * Update Materia in storage.
     *
     * @param  \App\Http\Requests\UpdateMateriasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMateriasRequest $request, $id)
    {
        // if (! Gate::allows('users_manage')) {
        //     return abort(401);
        // }
        $materia = Materia::findOrFail($id);
        $materia->update($request->all());

        return redirect()->route('materias.index');
    }


    /**
     * Remove Materia from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (! Gate::allows('users_manage')) {
        //     return abort(401);
        // }
        $materia = Materia::findOrFail($id);
        $materia->delete();

        return redirect()->route('materias.index');
    }

    /**
     * Delete all selected Materia at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('users_manage')) {
        //     return abort(401);
        // }
        if ($request->input('ids')) {
            $entries = Materia::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
