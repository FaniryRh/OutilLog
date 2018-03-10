<?php

namespace App\Http\Controllers\Admin;

use App\ListeGroupeSectoriel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreListeGroupeSectorielsRequest;
use App\Http\Requests\Admin\UpdateListeGroupeSectorielsRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ListeGroupeSectorielsController extends Controller
{
    /**
     * Display a listing of ListeGroupeSectoriel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('liste_groupe_sectoriel_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('liste_groupe_sectoriel_delete')) {
                return abort(401);
            }
            $liste_groupe_sectoriels = ListeGroupeSectoriel::onlyTrashed()->get();
        } else {
            $liste_groupe_sectoriels = ListeGroupeSectoriel::all();
        }

        return view('admin.liste_groupe_sectoriels.index', compact('liste_groupe_sectoriels'));
    }

    /**
     * Show the form for creating new ListeGroupeSectoriel.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('liste_groupe_sectoriel_create')) {
            return abort(401);
        }
        
        $groupe_sectoriels = \App\GroupeSectoriel::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $organismes = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.liste_groupe_sectoriels.create', compact('groupe_sectoriels', 'organismes'));
    }

    /**
     * Store a newly created ListeGroupeSectoriel in storage.
     *
     * @param  \App\Http\Requests\StoreListeGroupeSectorielsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListeGroupeSectorielsRequest $request)
    {
        if (! Gate::allows('liste_groupe_sectoriel_create')) {
            return abort(401);
        }
        $liste_groupe_sectoriel = ListeGroupeSectoriel::create($request->all());



        return redirect()->route('admin.liste_groupe_sectoriels.index');
    }


    /**
     * Show the form for editing ListeGroupeSectoriel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('liste_groupe_sectoriel_edit')) {
            return abort(401);
        }
        
        $groupe_sectoriels = \App\GroupeSectoriel::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $organismes = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $liste_groupe_sectoriel = ListeGroupeSectoriel::findOrFail($id);

        return view('admin.liste_groupe_sectoriels.edit', compact('liste_groupe_sectoriel', 'groupe_sectoriels', 'organismes'));
    }

    /**
     * Update ListeGroupeSectoriel in storage.
     *
     * @param  \App\Http\Requests\UpdateListeGroupeSectorielsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListeGroupeSectorielsRequest $request, $id)
    {
        if (! Gate::allows('liste_groupe_sectoriel_edit')) {
            return abort(401);
        }
        $liste_groupe_sectoriel = ListeGroupeSectoriel::findOrFail($id);
        $liste_groupe_sectoriel->update($request->all());



        return redirect()->route('admin.liste_groupe_sectoriels.index');
    }


    /**
     * Display ListeGroupeSectoriel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('liste_groupe_sectoriel_view')) {
            return abort(401);
        }
        $liste_groupe_sectoriel = ListeGroupeSectoriel::findOrFail($id);

        return view('admin.liste_groupe_sectoriels.show', compact('liste_groupe_sectoriel'));
    }


    /**
     * Remove ListeGroupeSectoriel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('liste_groupe_sectoriel_delete')) {
            return abort(401);
        }
        $liste_groupe_sectoriel = ListeGroupeSectoriel::findOrFail($id);
        $liste_groupe_sectoriel->delete();

        return redirect()->route('admin.liste_groupe_sectoriels.index');
    }

    /**
     * Delete all selected ListeGroupeSectoriel at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('liste_groupe_sectoriel_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ListeGroupeSectoriel::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore ListeGroupeSectoriel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('liste_groupe_sectoriel_delete')) {
            return abort(401);
        }
        $liste_groupe_sectoriel = ListeGroupeSectoriel::onlyTrashed()->findOrFail($id);
        $liste_groupe_sectoriel->restore();

        return redirect()->route('admin.liste_groupe_sectoriels.index');
    }

    /**
     * Permanently delete ListeGroupeSectoriel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('liste_groupe_sectoriel_delete')) {
            return abort(401);
        }
        $liste_groupe_sectoriel = ListeGroupeSectoriel::onlyTrashed()->findOrFail($id);
        $liste_groupe_sectoriel->forceDelete();

        return redirect()->route('admin.liste_groupe_sectoriels.index');
    }
}
