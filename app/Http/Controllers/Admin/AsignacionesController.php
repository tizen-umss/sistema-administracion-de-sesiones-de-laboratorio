<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\Materia;
use App\Asignacion;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StoreAsignacionesRequest;
use App\Http\Requests\Admin\UpdateAsignacionesRequest;

class AsignacionesController extends Controller
{
    //
    /**
     * Display a listing of Asignacion.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $asignaciones = Asignacion::all();
        // return Materia::first()->gruposMateria;

        return view('admin.asignacion.index', compact('asignaciones'));
    }

    /**
     * Show the form for creating new Asignacion.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        return view('admin.asignacion.create');
    }

    /**
     * Store a newly created Asignacion in storage.
     *
     * @param  \App\Http\Requests\StoreAsignacionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsignacionesRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        Asignacion::create($request->all());

        return redirect()->route('admin.asignaciones.index');

    }


    /**
     * Show the form for editing Asignacion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $asignacion = Asignacion::findOrFail($id);

        return view('admin.asignacion.edit', compact('asignacion'));
    }

    /**
     * Update Asignacion in storage.
     *
     * @param  \App\Http\Requests\UpdateAsignacionesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAsignacionesRequest $request, $id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $asignacion = Asignacion::findOrFail($id);
        $asignacion->update($request->all());

        return redirect()->route('admin.asignaciones.index');
    }


    /**
     * Remove Asignacion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $asignacion = Asignacion::findOrFail($id);
        $asignacion->delete();

        return redirect()->route('admin.asignaciones.index');
    }

    /**
     * Delete all selected Asignacion at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Asignacion::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}












