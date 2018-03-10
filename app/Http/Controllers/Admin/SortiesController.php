<?php

namespace App\Http\Controllers\Admin;

use App\Sortie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSortiesRequest;
use App\Http\Requests\Admin\UpdateSortiesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class SortiesController extends Controller
{
    /**
     * Display a listing of Sortie.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('sortie_access')) {
            return abort(401);
        }


                $sorties = Sortie::all();

        return view('admin.sorties.index', compact('sorties'));
    }

    /**
     * Show the form for creating new Sortie.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('sortie_create')) {
            return abort(401);
        }
        
        $parsonnels = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $stocks = \App\ListeStock::get()->pluck('designation', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $missions = \App\Mission::get()->pluck('objet', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $statuts = \App\StatusSortie::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.sorties.create', compact('parsonnels', 'stocks', 'missions', 'statuts'));
    }

    /**
     * Store a newly created Sortie in storage.
     *
     * @param  \App\Http\Requests\StoreSortiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSortiesRequest $request)
    {
        if (! Gate::allows('sortie_create')) {
            return abort(401);
        }
        $sortie = Sortie::create($request->all());



        return redirect()->route('admin.sorties.index');
    }


    /**
     * Show the form for editing Sortie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('sortie_edit')) {
            return abort(401);
        }
        
        $parsonnels = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $stocks = \App\ListeStock::get()->pluck('designation', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $missions = \App\Mission::get()->pluck('objet', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $statuts = \App\StatusSortie::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $sortie = Sortie::findOrFail($id);

        return view('admin.sorties.edit', compact('sortie', 'parsonnels', 'stocks', 'missions', 'statuts'));
    }

    /**
     * Update Sortie in storage.
     *
     * @param  \App\Http\Requests\UpdateSortiesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSortiesRequest $request, $id)
    {
        if (! Gate::allows('sortie_edit')) {
            return abort(401);
        }
        $sortie = Sortie::findOrFail($id);
        $sortie->update($request->all());



        return redirect()->route('admin.sorties.index');
    }


    /**
     * Display Sortie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('sortie_view')) {
            return abort(401);
        }
        $sortie = Sortie::findOrFail($id);

        return view('admin.sorties.show', compact('sortie'));
    }


    /**
     * Remove Sortie from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('sortie_delete')) {
            return abort(401);
        }
        $sortie = Sortie::findOrFail($id);
        $sortie->delete();

        return redirect()->route('admin.sorties.index');
    }

    /**
     * Delete all selected Sortie at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('sortie_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Sortie::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
