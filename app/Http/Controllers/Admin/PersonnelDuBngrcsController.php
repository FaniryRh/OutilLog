<?php

namespace App\Http\Controllers\Admin;

use App\PersonnelDuBngrc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePersonnelDuBngrcsRequest;
use App\Http\Requests\Admin\UpdatePersonnelDuBngrcsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class PersonnelDuBngrcsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of PersonnelDuBngrc.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('personnel_du_bngrc_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('personnel_du_bngrc_delete')) {
                return abort(401);
            }
            $personnel_du_bngrcs = PersonnelDuBngrc::onlyTrashed()->get();
        } else {
            $personnel_du_bngrcs = PersonnelDuBngrc::all();
        }

        return view('admin.personnel_du_bngrcs.index', compact('personnel_du_bngrcs'));
    }

    /**
     * Show the form for creating new PersonnelDuBngrc.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('personnel_du_bngrc_create')) {
            return abort(401);
        }
        
        $competence_formations = \App\CompetanceFormation::get()->pluck('titre', 'id');

        $capacites = \App\Capacite::get()->pluck('titre', 'id');

        $statuts = \App\StatutPersonnel::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.personnel_du_bngrcs.create', compact('competence_formations', 'capacites', 'statuts'));
    }

    /**
     * Store a newly created PersonnelDuBngrc in storage.
     *
     * @param  \App\Http\Requests\StorePersonnelDuBngrcsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonnelDuBngrcsRequest $request)
    {
        if (! Gate::allows('personnel_du_bngrc_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $personnel_du_bngrc = PersonnelDuBngrc::create($request->all());
        $personnel_du_bngrc->competence_formation()->sync(array_filter((array)$request->input('competence_formation')));
        $personnel_du_bngrc->capacites()->sync(array_filter((array)$request->input('capacites')));



        return redirect()->route('admin.personnel_du_bngrcs.index');
    }


    /**
     * Show the form for editing PersonnelDuBngrc.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('personnel_du_bngrc_edit')) {
            return abort(401);
        }
        
        $competence_formations = \App\CompetanceFormation::get()->pluck('titre', 'id');

        $capacites = \App\Capacite::get()->pluck('titre', 'id');

        $statuts = \App\StatutPersonnel::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $personnel_du_bngrc = PersonnelDuBngrc::findOrFail($id);

        return view('admin.personnel_du_bngrcs.edit', compact('personnel_du_bngrc', 'competence_formations', 'capacites', 'statuts'));
    }

    /**
     * Update PersonnelDuBngrc in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonnelDuBngrcsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonnelDuBngrcsRequest $request, $id)
    {
        if (! Gate::allows('personnel_du_bngrc_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $personnel_du_bngrc = PersonnelDuBngrc::findOrFail($id);
        $personnel_du_bngrc->update($request->all());
        $personnel_du_bngrc->competence_formation()->sync(array_filter((array)$request->input('competence_formation')));
        $personnel_du_bngrc->capacites()->sync(array_filter((array)$request->input('capacites')));



        return redirect()->route('admin.personnel_du_bngrcs.index');
    }


    /**
     * Display PersonnelDuBngrc.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('personnel_du_bngrc_view')) {
            return abort(401);
        }
        
        $competence_formations = \App\CompetanceFormation::get()->pluck('titre', 'id');

        $capacites = \App\Capacite::get()->pluck('titre', 'id');

        $statuts = \App\StatutPersonnel::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$absences = \App\Absence::where('personnel_id', $id)->get();$sorties = \App\Sortie::where('parsonnel_id', $id)->get();$oms = \App\Om::where('ordonnee_a_id', $id)->get();$assets_histories = \App\AssetsHistory::where('assigned_user_id', $id)->get();$inventaires = \App\Inventaire::whereHas('responsable_id',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();$missions = \App\Mission::whereHas('personnel_id',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();$tasks = \App\Task::where('user_id', $id)->get();$tasks = \App\Task::whereHas('participant',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();$assets = \App\Asset::where('assigned_user_id', $id)->get();

        $personnel_du_bngrc = PersonnelDuBngrc::findOrFail($id);

        return view('admin.personnel_du_bngrcs.show', compact('personnel_du_bngrc', 'absences', 'sorties', 'oms', 'assets_histories', 'inventaires', 'missions', 'tasks', 'tasks', 'assets'));
    }


    /**
     * Remove PersonnelDuBngrc from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('personnel_du_bngrc_delete')) {
            return abort(401);
        }
        $personnel_du_bngrc = PersonnelDuBngrc::findOrFail($id);
        $personnel_du_bngrc->delete();

        return redirect()->route('admin.personnel_du_bngrcs.index');
    }

    /**
     * Delete all selected PersonnelDuBngrc at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('personnel_du_bngrc_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = PersonnelDuBngrc::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore PersonnelDuBngrc from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('personnel_du_bngrc_delete')) {
            return abort(401);
        }
        $personnel_du_bngrc = PersonnelDuBngrc::onlyTrashed()->findOrFail($id);
        $personnel_du_bngrc->restore();

        return redirect()->route('admin.personnel_du_bngrcs.index');
    }

    /**
     * Permanently delete PersonnelDuBngrc from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('personnel_du_bngrc_delete')) {
            return abort(401);
        }
        $personnel_du_bngrc = PersonnelDuBngrc::onlyTrashed()->findOrFail($id);
        $personnel_du_bngrc->forceDelete();

        return redirect()->route('admin.personnel_du_bngrcs.index');
    }
}
