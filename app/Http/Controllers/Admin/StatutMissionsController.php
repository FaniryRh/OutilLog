<?php

namespace App\Http\Controllers\Admin;

use App\StatutMission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStatutMissionsRequest;
use App\Http\Requests\Admin\UpdateStatutMissionsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class StatutMissionsController extends Controller
{
    /**
     * Display a listing of StatutMission.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('statut_mission_access')) {
            return abort(401);
        }


                $statut_missions = StatutMission::all();

        return view('admin.statut_missions.index', compact('statut_missions'));
    }

    /**
     * Show the form for creating new StatutMission.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('statut_mission_create')) {
            return abort(401);
        }
        return view('admin.statut_missions.create');
    }

    /**
     * Store a newly created StatutMission in storage.
     *
     * @param  \App\Http\Requests\StoreStatutMissionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatutMissionsRequest $request)
    {
        if (! Gate::allows('statut_mission_create')) {
            return abort(401);
        }
        $statut_mission = StatutMission::create($request->all());



        return redirect()->route('admin.statut_missions.index');
    }


    /**
     * Show the form for editing StatutMission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('statut_mission_edit')) {
            return abort(401);
        }
        $statut_mission = StatutMission::findOrFail($id);

        return view('admin.statut_missions.edit', compact('statut_mission'));
    }

    /**
     * Update StatutMission in storage.
     *
     * @param  \App\Http\Requests\UpdateStatutMissionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatutMissionsRequest $request, $id)
    {
        if (! Gate::allows('statut_mission_edit')) {
            return abort(401);
        }
        $statut_mission = StatutMission::findOrFail($id);
        $statut_mission->update($request->all());



        return redirect()->route('admin.statut_missions.index');
    }


    /**
     * Display StatutMission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('statut_mission_view')) {
            return abort(401);
        }
        $missions = \App\Mission::where('stat_id', $id)->get();

        $statut_mission = StatutMission::findOrFail($id);

        return view('admin.statut_missions.show', compact('statut_mission', 'missions'));
    }


    /**
     * Remove StatutMission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('statut_mission_delete')) {
            return abort(401);
        }
        $statut_mission = StatutMission::findOrFail($id);
        $statut_mission->delete();

        return redirect()->route('admin.statut_missions.index');
    }

    /**
     * Delete all selected StatutMission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('statut_mission_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = StatutMission::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
