<?php

namespace App\Http\Controllers\Admin;

use App\Unite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUnitesRequest;
use App\Http\Requests\Admin\UpdateUnitesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class UnitesController extends Controller
{
    /**
     * Display a listing of Unite.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('unite_access')) {
            return abort(401);
        }


                $unites = Unite::all();

        return view('admin.unites.index', compact('unites'));
    }

    /**
     * Show the form for creating new Unite.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('unite_create')) {
            return abort(401);
        }
        return view('admin.unites.create');
    }

    /**
     * Store a newly created Unite in storage.
     *
     * @param  \App\Http\Requests\StoreUnitesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnitesRequest $request)
    {
        if (! Gate::allows('unite_create')) {
            return abort(401);
        }
        $unite = Unite::create($request->all());



        return redirect()->route('admin.unites.index');
    }


    /**
     * Show the form for editing Unite.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('unite_edit')) {
            return abort(401);
        }
        $unite = Unite::findOrFail($id);

        return view('admin.unites.edit', compact('unite'));
    }

    /**
     * Update Unite in storage.
     *
     * @param  \App\Http\Requests\UpdateUnitesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUnitesRequest $request, $id)
    {
        if (! Gate::allows('unite_edit')) {
            return abort(401);
        }
        $unite = Unite::findOrFail($id);
        $unite->update($request->all());



        return redirect()->route('admin.unites.index');
    }


    /**
     * Display Unite.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('unite_view')) {
            return abort(401);
        }
        $liste_stocks = \App\ListeStock::where('unite_id', $id)->get();

        $unite = Unite::findOrFail($id);

        return view('admin.unites.show', compact('unite', 'liste_stocks'));
    }


    /**
     * Remove Unite from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('unite_delete')) {
            return abort(401);
        }
        $unite = Unite::findOrFail($id);
        $unite->delete();

        return redirect()->route('admin.unites.index');
    }

    /**
     * Delete all selected Unite at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('unite_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Unite::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
