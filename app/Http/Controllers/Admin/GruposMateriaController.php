<?php

namespace App\Http\Controllers\Admin;

use App\GrupoMateria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StoreGruposMateriaRequest;
use App\Http\Requests\Admin\UpdateGruposMateriaRequest;


class GruposMateriaController extends Controller
{
    /**
     * Display a listing of GrupoMateria.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        if (!Gate::allows('users_manage')) {

            return abort(401);
        }

        $gruposMateria = GrupoMateria::all();

        return view('admin.grupoMateria.index', compact('gruposMateria'));
    }

    /**
     * Show the form for creating new GrupoMateria.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        return view('admin.grupoMateria.create');
    }

    /**
     * Store a newly created GrupoMateria in storage.
     *
     * @param  \App\Http\Requests\StoregruposMateriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregruposMateriaRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        GrupoMateria::create($request->all());

        return redirect()->route('admin.gruposMateria.index');

    }


    /**
     * Show the form for editing GrupoMateria.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $grupoMateria = GrupoMateria::findOrFail($id);

        return view('admin.grupoMateria.edit', compact('grupoMateria'));
    }

    /**
     * Update GrupoMateria in storage.
     *
     * @param  \App\Http\Requests\UpdategruposMateriaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategruposMateriaRequest $request, $id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $grupoMateria = GrupoMateria::findOrFail($id);
        $grupoMateria->update($request->all());

        return redirect()->route('admin.gruposMateria.index');
    }


    /**
     * Remove GrupoMateria from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $grupoMateria = GrupoMateria::findOrFail($id);
        $grupoMateria->delete();

        return redirect()->route('admin.gruposMateria.index');
    }

    /**
     * Delete all selected GrupoMateria at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = GrupoMateria::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}











