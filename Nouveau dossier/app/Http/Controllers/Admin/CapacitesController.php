<?php

namespace App\Http\Controllers\Admin;

use App\Capacite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCapacitesRequest;
use App\Http\Requests\Admin\UpdateCapacitesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CapacitesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Capacite.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('capacite_access')) {
            return abort(401);
        }


                $capacites = Capacite::all();

        return view('admin.capacites.index', compact('capacites'));
    }

    /**
     * Show the form for creating new Capacite.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('capacite_create')) {
            return abort(401);
        }
        return view('admin.capacites.create');
    }

    /**
     * Store a newly created Capacite in storage.
     *
     * @param  \App\Http\Requests\StoreCapacitesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCapacitesRequest $request)
    {
        if (! Gate::allows('capacite_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $capacite = Capacite::create($request->all());



        return redirect()->route('admin.capacites.index');
    }


    /**
     * Show the form for editing Capacite.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('capacite_edit')) {
            return abort(401);
        }
        $capacite = Capacite::findOrFail($id);

        return view('admin.capacites.edit', compact('capacite'));
    }

    /**
     * Update Capacite in storage.
     *
     * @param  \App\Http\Requests\UpdateCapacitesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCapacitesRequest $request, $id)
    {
        if (! Gate::allows('capacite_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $capacite = Capacite::findOrFail($id);
        $capacite->update($request->all());



        return redirect()->route('admin.capacites.index');
    }


    /**
     * Display Capacite.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('capacite_view')) {
            return abort(401);
        }
        $personnel_du_bngrcs = \App\PersonnelDuBngrc::whereHas('capacites',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $capacite = Capacite::findOrFail($id);

        return view('admin.capacites.show', compact('capacite', 'personnel_du_bngrcs'));
    }


    /**
     * Remove Capacite from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('capacite_delete')) {
            return abort(401);
        }
        $capacite = Capacite::findOrFail($id);
        $capacite->delete();

        return redirect()->route('admin.capacites.index');
    }

    /**
     * Delete all selected Capacite at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('capacite_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Capacite::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
