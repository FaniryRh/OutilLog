<?php

namespace App\Http\Controllers\Admin;

use App\Inventaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreInventairesRequest;
use App\Http\Requests\Admin\UpdateInventairesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class InventairesController extends Controller
{
    /**
     * Display a listing of Inventaire.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('inventaire_access')) {
            return abort(401);
        }


                $inventaires = Inventaire::all();

        return view('admin.inventaires.index', compact('inventaires'));
    }

    /**
     * Show the form for creating new Inventaire.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('inventaire_create')) {
            return abort(401);
        }
        
        $missions = \App\Mission::get()->pluck('objet', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $stocks = \App\ListeStock::get()->pluck('designation', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $materiel_ids = \App\Asset::get()->pluck('title', 'id');

        $responsable_ids = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id');


        return view('admin.inventaires.create', compact('missions', 'stocks', 'materiel_ids', 'responsable_ids'));
    }

    /**
     * Store a newly created Inventaire in storage.
     *
     * @param  \App\Http\Requests\StoreInventairesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInventairesRequest $request)
    {
        if (! Gate::allows('inventaire_create')) {
            return abort(401);
        }
        $inventaire = Inventaire::create($request->all());
        $inventaire->materiel_id()->sync(array_filter((array)$request->input('materiel_id')));
        $inventaire->responsable_id()->sync(array_filter((array)$request->input('responsable_id')));



        return redirect()->route('admin.inventaires.index');
    }


    /**
     * Show the form for editing Inventaire.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('inventaire_edit')) {
            return abort(401);
        }
        
        $missions = \App\Mission::get()->pluck('objet', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $stocks = \App\ListeStock::get()->pluck('designation', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $materiel_ids = \App\Asset::get()->pluck('title', 'id');

        $responsable_ids = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id');


        $inventaire = Inventaire::findOrFail($id);

        return view('admin.inventaires.edit', compact('inventaire', 'missions', 'stocks', 'materiel_ids', 'responsable_ids'));
    }

    /**
     * Update Inventaire in storage.
     *
     * @param  \App\Http\Requests\UpdateInventairesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInventairesRequest $request, $id)
    {
        if (! Gate::allows('inventaire_edit')) {
            return abort(401);
        }
        $inventaire = Inventaire::findOrFail($id);
        $inventaire->update($request->all());
        $inventaire->materiel_id()->sync(array_filter((array)$request->input('materiel_id')));
        $inventaire->responsable_id()->sync(array_filter((array)$request->input('responsable_id')));



        return redirect()->route('admin.inventaires.index');
    }


    /**
     * Display Inventaire.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('inventaire_view')) {
            return abort(401);
        }
        $inventaire = Inventaire::findOrFail($id);

        return view('admin.inventaires.show', compact('inventaire'));
    }


    /**
     * Remove Inventaire from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('inventaire_delete')) {
            return abort(401);
        }
        $inventaire = Inventaire::findOrFail($id);
        $inventaire->delete();

        return redirect()->route('admin.inventaires.index');
    }

    /**
     * Delete all selected Inventaire at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('inventaire_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Inventaire::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
