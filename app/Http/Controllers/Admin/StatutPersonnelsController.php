<?php

namespace App\Http\Controllers\Admin;

use App\StatutPersonnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStatutPersonnelsRequest;
use App\Http\Requests\Admin\UpdateStatutPersonnelsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class StatutPersonnelsController extends Controller
{
    /**
     * Display a listing of StatutPersonnel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('statut_personnel_access')) {
            return abort(401);
        }


                $statut_personnels = StatutPersonnel::all();

        return view('admin.statut_personnels.index', compact('statut_personnels'));
    }

    /**
     * Show the form for creating new StatutPersonnel.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('statut_personnel_create')) {
            return abort(401);
        }
        return view('admin.statut_personnels.create');
    }

    /**
     * Store a newly created StatutPersonnel in storage.
     *
     * @param  \App\Http\Requests\StoreStatutPersonnelsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatutPersonnelsRequest $request)
    {
        if (! Gate::allows('statut_personnel_create')) {
            return abort(401);
        }
        $statut_personnel = StatutPersonnel::create($request->all());



        return redirect()->route('admin.statut_personnels.index');
    }


    /**
     * Show the form for editing StatutPersonnel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('statut_personnel_edit')) {
            return abort(401);
        }
        $statut_personnel = StatutPersonnel::findOrFail($id);

        return view('admin.statut_personnels.edit', compact('statut_personnel'));
    }

    /**
     * Update StatutPersonnel in storage.
     *
     * @param  \App\Http\Requests\UpdateStatutPersonnelsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatutPersonnelsRequest $request, $id)
    {
        if (! Gate::allows('statut_personnel_edit')) {
            return abort(401);
        }
        $statut_personnel = StatutPersonnel::findOrFail($id);
        $statut_personnel->update($request->all());



        return redirect()->route('admin.statut_personnels.index');
    }


    /**
     * Display StatutPersonnel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('statut_personnel_view')) {
            return abort(401);
        }
        $personnel_du_bngrcs = \App\PersonnelDuBngrc::where('statut_id', $id)->get();

        $statut_personnel = StatutPersonnel::findOrFail($id);

        return view('admin.statut_personnels.show', compact('statut_personnel', 'personnel_du_bngrcs'));
    }


    /**
     * Remove StatutPersonnel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('statut_personnel_delete')) {
            return abort(401);
        }
        $statut_personnel = StatutPersonnel::findOrFail($id);
        $statut_personnel->delete();

        return redirect()->route('admin.statut_personnels.index');
    }

    /**
     * Delete all selected StatutPersonnel at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('statut_personnel_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = StatutPersonnel::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
