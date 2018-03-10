<?php

namespace App\Http\Controllers\Admin;

use App\EtatRapportOm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEtatRapportOmsRequest;
use App\Http\Requests\Admin\UpdateEtatRapportOmsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class EtatRapportOmsController extends Controller
{
    /**
     * Display a listing of EtatRapportOm.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('etat_rapport_om_access')) {
            return abort(401);
        }


                $etat_rapport_oms = EtatRapportOm::all();

        return view('admin.etat_rapport_oms.index', compact('etat_rapport_oms'));
    }

    /**
     * Show the form for creating new EtatRapportOm.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('etat_rapport_om_create')) {
            return abort(401);
        }
        return view('admin.etat_rapport_oms.create');
    }

    /**
     * Store a newly created EtatRapportOm in storage.
     *
     * @param  \App\Http\Requests\StoreEtatRapportOmsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEtatRapportOmsRequest $request)
    {
        if (! Gate::allows('etat_rapport_om_create')) {
            return abort(401);
        }
        $etat_rapport_om = EtatRapportOm::create($request->all());



        return redirect()->route('admin.etat_rapport_oms.index');
    }


    /**
     * Show the form for editing EtatRapportOm.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('etat_rapport_om_edit')) {
            return abort(401);
        }
        $etat_rapport_om = EtatRapportOm::findOrFail($id);

        return view('admin.etat_rapport_oms.edit', compact('etat_rapport_om'));
    }

    /**
     * Update EtatRapportOm in storage.
     *
     * @param  \App\Http\Requests\UpdateEtatRapportOmsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtatRapportOmsRequest $request, $id)
    {
        if (! Gate::allows('etat_rapport_om_edit')) {
            return abort(401);
        }
        $etat_rapport_om = EtatRapportOm::findOrFail($id);
        $etat_rapport_om->update($request->all());



        return redirect()->route('admin.etat_rapport_oms.index');
    }


    /**
     * Display EtatRapportOm.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('etat_rapport_om_view')) {
            return abort(401);
        }
        $oms = \App\Om::where('etat_rapport_de_mission_id', $id)->get();

        $etat_rapport_om = EtatRapportOm::findOrFail($id);

        return view('admin.etat_rapport_oms.show', compact('etat_rapport_om', 'oms'));
    }


    /**
     * Remove EtatRapportOm from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('etat_rapport_om_delete')) {
            return abort(401);
        }
        $etat_rapport_om = EtatRapportOm::findOrFail($id);
        $etat_rapport_om->delete();

        return redirect()->route('admin.etat_rapport_oms.index');
    }

    /**
     * Delete all selected EtatRapportOm at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('etat_rapport_om_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = EtatRapportOm::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
