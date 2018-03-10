<?php

namespace App\Http\Controllers\Admin;

use App\Reunion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreReunionsRequest;
use App\Http\Requests\Admin\UpdateReunionsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ReunionsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Reunion.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('reunion_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('reunion_delete')) {
                return abort(401);
            }
            $reunions = Reunion::onlyTrashed()->get();
        } else {
            $reunions = Reunion::all();
        }

        return view('admin.reunions.index', compact('reunions'));
    }

    /**
     * Show the form for creating new Reunion.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('reunion_create')) {
            return abort(401);
        }
        
        $personnels = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $organisme_ids = \App\ContactCompany::get()->pluck('name', 'id');

        $participant_bngrcs = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id');


        return view('admin.reunions.create', compact('personnels', 'organisme_ids', 'participant_bngrcs'));
    }

    /**
     * Store a newly created Reunion in storage.
     *
     * @param  \App\Http\Requests\StoreReunionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReunionsRequest $request)
    {
        if (! Gate::allows('reunion_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $reunion = Reunion::create($request->all());
        $reunion->organisme_id()->sync(array_filter((array)$request->input('organisme_id')));
        $reunion->participant_bngrc()->sync(array_filter((array)$request->input('participant_bngrc')));



        return redirect()->route('admin.reunions.index');
    }


    /**
     * Show the form for editing Reunion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('reunion_edit')) {
            return abort(401);
        }
        
        $personnels = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $organisme_ids = \App\ContactCompany::get()->pluck('name', 'id');

        $participant_bngrcs = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id');


        $reunion = Reunion::findOrFail($id);

        return view('admin.reunions.edit', compact('reunion', 'personnels', 'organisme_ids', 'participant_bngrcs'));
    }

    /**
     * Update Reunion in storage.
     *
     * @param  \App\Http\Requests\UpdateReunionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReunionsRequest $request, $id)
    {
        if (! Gate::allows('reunion_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $reunion = Reunion::findOrFail($id);
        $reunion->update($request->all());
        $reunion->organisme_id()->sync(array_filter((array)$request->input('organisme_id')));
        $reunion->participant_bngrc()->sync(array_filter((array)$request->input('participant_bngrc')));



        return redirect()->route('admin.reunions.index');
    }


    /**
     * Display Reunion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('reunion_view')) {
            return abort(401);
        }
        $reunion = Reunion::findOrFail($id);

        return view('admin.reunions.show', compact('reunion'));
    }


    /**
     * Remove Reunion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('reunion_delete')) {
            return abort(401);
        }
        $reunion = Reunion::findOrFail($id);
        $reunion->delete();

        return redirect()->route('admin.reunions.index');
    }

    /**
     * Delete all selected Reunion at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('reunion_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Reunion::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Reunion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('reunion_delete')) {
            return abort(401);
        }
        $reunion = Reunion::onlyTrashed()->findOrFail($id);
        $reunion->restore();

        return redirect()->route('admin.reunions.index');
    }

    /**
     * Permanently delete Reunion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('reunion_delete')) {
            return abort(401);
        }
        $reunion = Reunion::onlyTrashed()->findOrFail($id);
        $reunion->forceDelete();

        return redirect()->route('admin.reunions.index');
    }
}
