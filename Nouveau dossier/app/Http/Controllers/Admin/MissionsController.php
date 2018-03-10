<?php

namespace App\Http\Controllers\Admin;

use App\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMissionsRequest;
use App\Http\Requests\Admin\UpdateMissionsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class MissionsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Mission.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('mission_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('mission_delete')) {
                return abort(401);
            }
            $missions = Mission::onlyTrashed()->get();
        } else {
            $missions = Mission::all();
        }

        return view('admin.missions.index', compact('missions'));
    }

    /**
     * Show the form for creating new Mission.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('mission_create')) {
            return abort(401);
        }
        
        $personnel_ids = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id');

        $materiel_ids = \App\Asset::get()->pluck('title', 'id');

        $stats = \App\StatutMission::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.missions.create', compact('personnel_ids', 'materiel_ids', 'stats'));
    }

    /**
     * Store a newly created Mission in storage.
     *
     * @param  \App\Http\Requests\StoreMissionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMissionsRequest $request)
    {
        if (! Gate::allows('mission_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $mission = Mission::create($request->all());
        $mission->personnel_id()->sync(array_filter((array)$request->input('personnel_id')));
        $mission->materiel_id()->sync(array_filter((array)$request->input('materiel_id')));


        foreach ($request->input('multiple_piece_jointe_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $mission->id;
            $file->save();
        }

        return redirect()->route('admin.missions.index');
    }


    /**
     * Show the form for editing Mission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('mission_edit')) {
            return abort(401);
        }
        
        $personnel_ids = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id');

        $materiel_ids = \App\Asset::get()->pluck('title', 'id');

        $stats = \App\StatutMission::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $mission = Mission::findOrFail($id);

        return view('admin.missions.edit', compact('mission', 'personnel_ids', 'materiel_ids', 'stats'));
    }

    /**
     * Update Mission in storage.
     *
     * @param  \App\Http\Requests\UpdateMissionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMissionsRequest $request, $id)
    {
        if (! Gate::allows('mission_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $mission = Mission::findOrFail($id);
        $mission->update($request->all());
        $mission->personnel_id()->sync(array_filter((array)$request->input('personnel_id')));
        $mission->materiel_id()->sync(array_filter((array)$request->input('materiel_id')));


        $media = [];
        foreach ($request->input('multiple_piece_jointe_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $mission->id;
            $file->save();
            $media[] = $file->toArray();
        }
        $mission->updateMedia($media, 'multiple_piece_jointe');

        return redirect()->route('admin.missions.index');
    }


    /**
     * Display Mission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('mission_view')) {
            return abort(401);
        }
        
        $personnel_ids = \App\PersonnelDuBngrc::get()->pluck('nom_prenom', 'id');

        $materiel_ids = \App\Asset::get()->pluck('title', 'id');

        $stats = \App\StatutMission::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$oms = \App\Om::where('mission_id', $id)->get();$tasks = \App\Task::where('mission_id', $id)->get();$inventaires = \App\Inventaire::where('mission_id', $id)->get();

        $mission = Mission::findOrFail($id);

        return view('admin.missions.show', compact('mission', 'oms', 'tasks', 'inventaires'));
    }


    /**
     * Remove Mission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('mission_delete')) {
            return abort(401);
        }
        $mission = Mission::findOrFail($id);
        $mission->deletePreservingMedia();

        return redirect()->route('admin.missions.index');
    }

    /**
     * Delete all selected Mission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('mission_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Mission::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->deletePreservingMedia();
            }
        }
    }


    /**
     * Restore Mission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('mission_delete')) {
            return abort(401);
        }
        $mission = Mission::onlyTrashed()->findOrFail($id);
        $mission->restore();

        return redirect()->route('admin.missions.index');
    }

    /**
     * Permanently delete Mission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('mission_delete')) {
            return abort(401);
        }
        $mission = Mission::onlyTrashed()->findOrFail($id);
        $mission->forceDelete();

        return redirect()->route('admin.missions.index');
    }
}
