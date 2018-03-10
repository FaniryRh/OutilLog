<?php

namespace App\Http\Controllers\Admin;

use App\EtatOm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEtatOmsRequest;
use App\Http\Requests\Admin\UpdateEtatOmsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class EtatOmsController extends Controller
{
    /**
     * Display a listing of EtatOm.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('etat_om_access')) {
            return abort(401);
        }


                $etat_oms = EtatOm::all();

        return view('admin.etat_oms.index', compact('etat_oms'));
    }

    /**
     * Show the form for creating new EtatOm.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('etat_om_create')) {
            return abort(401);
        }
        return view('admin.etat_oms.create');
    }

    /**
     * Store a newly created EtatOm in storage.
     *
     * @param  \App\Http\Requests\StoreEtatOmsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEtatOmsRequest $request)
    {
        if (! Gate::allows('etat_om_create')) {
            return abort(401);
        }
        $etat_om = EtatOm::create($request->all());



        return redirect()->route('admin.etat_oms.index');
    }


    /**
     * Show the form for editing EtatOm.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('etat_om_edit')) {
            return abort(401);
        }
        $etat_om = EtatOm::findOrFail($id);

        return view('admin.etat_oms.edit', compact('etat_om'));
    }

    /**
     * Update EtatOm in storage.
     *
     * @param  \App\Http\Requests\UpdateEtatOmsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtatOmsRequest $request, $id)
    {
        if (! Gate::allows('etat_om_edit')) {
            return abort(401);
        }
        $etat_om = EtatOm::findOrFail($id);
        $etat_om->update($request->all());



        return redirect()->route('admin.etat_oms.index');
    }


    /**
     * Display EtatOm.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('etat_om_view')) {
            return abort(401);
        }
        $oms = \App\Om::where('etat_id', $id)->get();

        $etat_om = EtatOm::findOrFail($id);

        return view('admin.etat_oms.show', compact('etat_om', 'oms'));
    }


    /**
     * Remove EtatOm from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('etat_om_delete')) {
            return abort(401);
        }
        $etat_om = EtatOm::findOrFail($id);
        $etat_om->delete();

        return redirect()->route('admin.etat_oms.index');
    }

    /**
     * Delete all selected EtatOm at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('etat_om_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = EtatOm::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
