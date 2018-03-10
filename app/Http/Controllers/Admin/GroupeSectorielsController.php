<?php

namespace App\Http\Controllers\Admin;

use App\GroupeSectoriel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreGroupeSectorielsRequest;
use App\Http\Requests\Admin\UpdateGroupeSectorielsRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class GroupeSectorielsController extends Controller
{
    /**
     * Display a listing of GroupeSectoriel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('groupe_sectoriel_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('groupe_sectoriel_delete')) {
                return abort(401);
            }
            $groupe_sectoriels = GroupeSectoriel::onlyTrashed()->get();
        } else {
            $groupe_sectoriels = GroupeSectoriel::all();
        }

        return view('admin.groupe_sectoriels.index', compact('groupe_sectoriels'));
    }

    /**
     * Show the form for creating new GroupeSectoriel.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('groupe_sectoriel_create')) {
            return abort(401);
        }
        return view('admin.groupe_sectoriels.create');
    }

    /**
     * Store a newly created GroupeSectoriel in storage.
     *
     * @param  \App\Http\Requests\StoreGroupeSectorielsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupeSectorielsRequest $request)
    {
        if (! Gate::allows('groupe_sectoriel_create')) {
            return abort(401);
        }
        $groupe_sectoriel = GroupeSectoriel::create($request->all());

        foreach ($request->input('liste_groupe_sectoriels', []) as $data) {
            $groupe_sectoriel->listeGroupeSectoriel()->create($data);
        }


        return redirect()->route('admin.groupe_sectoriels.index');
    }


    /**
     * Show the form for editing GroupeSectoriel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('groupe_sectoriel_edit')) {
            return abort(401);
        }
        $groupe_sectoriel = GroupeSectoriel::findOrFail($id);

        return view('admin.groupe_sectoriels.edit', compact('groupe_sectoriel'));
    }

    /**
     * Update GroupeSectoriel in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupeSectorielsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupeSectorielsRequest $request, $id)
    {
        if (! Gate::allows('groupe_sectoriel_edit')) {
            return abort(401);
        }
        $groupe_sectoriel = GroupeSectoriel::findOrFail($id);
        $groupe_sectoriel->update($request->all());

        $listeGroupeSectoriels           = $groupe_sectoriel->listeGroupeSectoriel;
        $currentListeGroupeSectorielData = [];
        foreach ($request->input('liste_groupe_sectoriels', []) as $index => $data) {
            if (is_integer($index)) {
                $groupe_sectoriel->listeGroupeSectoriel()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentListeGroupeSectorielData[$id] = $data;
            }
        }
        foreach ($listeGroupeSectoriels as $item) {
            if (isset($currentListeGroupeSectorielData[$item->id])) {
                $item->update($currentListeGroupeSectorielData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.groupe_sectoriels.index');
    }


    /**
     * Display GroupeSectoriel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('groupe_sectoriel_view')) {
            return abort(401);
        }
        $liste_groupe_sectoriels = \App\ListeGroupeSectoriel::where('groupe_sectoriel_id', $id)->get();

        $groupe_sectoriel = GroupeSectoriel::findOrFail($id);

        return view('admin.groupe_sectoriels.show', compact('groupe_sectoriel', 'liste_groupe_sectoriels'));
    }


    /**
     * Remove GroupeSectoriel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('groupe_sectoriel_delete')) {
            return abort(401);
        }
        $groupe_sectoriel = GroupeSectoriel::findOrFail($id);
        $groupe_sectoriel->delete();

        return redirect()->route('admin.groupe_sectoriels.index');
    }

    /**
     * Delete all selected GroupeSectoriel at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('groupe_sectoriel_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = GroupeSectoriel::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore GroupeSectoriel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('groupe_sectoriel_delete')) {
            return abort(401);
        }
        $groupe_sectoriel = GroupeSectoriel::onlyTrashed()->findOrFail($id);
        $groupe_sectoriel->restore();

        return redirect()->route('admin.groupe_sectoriels.index');
    }

    /**
     * Permanently delete GroupeSectoriel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('groupe_sectoriel_delete')) {
            return abort(401);
        }
        $groupe_sectoriel = GroupeSectoriel::onlyTrashed()->findOrFail($id);
        $groupe_sectoriel->forceDelete();

        return redirect()->route('admin.groupe_sectoriels.index');
    }
}
