<?php

namespace App\Http\Controllers\Admin;

use App\Om;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOmsRequest;
use App\Http\Requests\Admin\UpdateOmsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class OmsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Om.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('om_access')) {
            return abort(401);
        }


                $oms = Om::all();

        return view('admin.oms.index', compact('oms'));
    }

    /**
     * Show the form for creating new Om.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('om_create')) {
            return abort(401);
        }
        
        $missions = \App\Mission::get()->pluck('objet', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $ordonnee_as = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $prise_en_charges = \App\ContactCompany::get()->pluck('name', 'id');

        $etats = \App\EtatOm::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $etat_rapport_de_missions = \App\EtatRapportOm::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.oms.create', compact('missions', 'ordonnee_as', 'prise_en_charges', 'etats', 'etat_rapport_de_missions'));
    }

    /**
     * Store a newly created Om in storage.
     *
     * @param  \App\Http\Requests\StoreOmsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOmsRequest $request)
    {
        if (! Gate::allows('om_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $om = Om::create($request->all());
        $om->prise_en_charge()->sync(array_filter((array)$request->input('prise_en_charge')));



        return redirect()->route('admin.oms.index');
    }


    /**
     * Show the form for editing Om.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('om_edit')) {
            return abort(401);
        }
        
        $missions = \App\Mission::get()->pluck('objet', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $ordonnee_as = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $prise_en_charges = \App\ContactCompany::get()->pluck('name', 'id');

        $etats = \App\EtatOm::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $etat_rapport_de_missions = \App\EtatRapportOm::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $om = Om::findOrFail($id);

        return view('admin.oms.edit', compact('om', 'missions', 'ordonnee_as', 'prise_en_charges', 'etats', 'etat_rapport_de_missions'));
    }

    /**
     * Update Om in storage.
     *
     * @param  \App\Http\Requests\UpdateOmsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOmsRequest $request, $id)
    {
        if (! Gate::allows('om_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $om = Om::findOrFail($id);
        $om->update($request->all());
        $om->prise_en_charge()->sync(array_filter((array)$request->input('prise_en_charge')));



        return redirect()->route('admin.oms.index');
    }


    /**
     * Display Om.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('om_view')) {
            return abort(401);
        }
        $om = Om::findOrFail($id);

        return view('admin.oms.show', compact('om'));
    }


    /**
     * Remove Om from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('om_delete')) {
            return abort(401);
        }
        $om = Om::findOrFail($id);
        $om->delete();

        return redirect()->route('admin.oms.index');
    }

    /**
     * Delete all selected Om at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('om_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Om::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
