<?php

namespace App\Http\Controllers\Admin;

use App\Absence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAbsencesRequest;
use App\Http\Requests\Admin\UpdateAbsencesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AbsencesController extends Controller
{
    /**
     * Display a listing of Absence.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('absence_access')) {
            return abort(401);
        }


                $absences = Absence::all();

        return view('admin.absences.index', compact('absences'));
    }

    /**
     * Show the form for creating new Absence.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('absence_create')) {
            return abort(401);
        }
        
        $personnels = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.absences.create', compact('personnels'));
    }

    /**
     * Store a newly created Absence in storage.
     *
     * @param  \App\Http\Requests\StoreAbsencesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbsencesRequest $request)
    {
        if (! Gate::allows('absence_create')) {
            return abort(401);
        }
        $absence = Absence::create($request->all());



        return redirect()->route('admin.absences.index');
    }


    /**
     * Show the form for editing Absence.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('absence_edit')) {
            return abort(401);
        }
        
        $personnels = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $absence = Absence::findOrFail($id);

        return view('admin.absences.edit', compact('absence', 'personnels'));
    }

    /**
     * Update Absence in storage.
     *
     * @param  \App\Http\Requests\UpdateAbsencesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbsencesRequest $request, $id)
    {
        if (! Gate::allows('absence_edit')) {
            return abort(401);
        }
        $absence = Absence::findOrFail($id);
        $absence->update($request->all());



        return redirect()->route('admin.absences.index');
    }


    /**
     * Display Absence.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('absence_view')) {
            return abort(401);
        }
        $absence = Absence::findOrFail($id);

        return view('admin.absences.show', compact('absence'));
    }


    /**
     * Remove Absence from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('absence_delete')) {
            return abort(401);
        }
        $absence = Absence::findOrFail($id);
        $absence->delete();

        return redirect()->route('admin.absences.index');
    }

    /**
     * Delete all selected Absence at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('absence_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Absence::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
