<?php

namespace App\Http\Controllers\Admin;

use App\Entree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEntreesRequest;
use App\Http\Requests\Admin\UpdateEntreesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class EntreesController extends Controller
{
    /**
     * Display a listing of Entree.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('entree_access')) {
            return abort(401);
        }


                $entrees = Entree::all();

        return view('admin.entrees.index', compact('entrees'));
    }

    /**
     * Show the form for creating new Entree.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('entree_create')) {
            return abort(401);
        }
        
        $stocks = \App\ListeStock::get()->pluck('designation', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.entrees.create', compact('stocks'));
    }

    /**
     * Store a newly created Entree in storage.
     *
     * @param  \App\Http\Requests\StoreEntreesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntreesRequest $request)
    {
        if (! Gate::allows('entree_create')) {
            return abort(401);
        }
        $entree = Entree::create($request->all());



        return redirect()->route('admin.entrees.index');
    }


    /**
     * Show the form for editing Entree.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('entree_edit')) {
            return abort(401);
        }
        
        $stocks = \App\ListeStock::get()->pluck('designation', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $entree = Entree::findOrFail($id);

        return view('admin.entrees.edit', compact('entree', 'stocks'));
    }

    /**
     * Update Entree in storage.
     *
     * @param  \App\Http\Requests\UpdateEntreesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntreesRequest $request, $id)
    {
        if (! Gate::allows('entree_edit')) {
            return abort(401);
        }
        $entree = Entree::findOrFail($id);
        $entree->update($request->all());



        return redirect()->route('admin.entrees.index');
    }


    /**
     * Display Entree.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('entree_view')) {
            return abort(401);
        }
        $entree = Entree::findOrFail($id);

        return view('admin.entrees.show', compact('entree'));
    }


    /**
     * Remove Entree from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('entree_delete')) {
            return abort(401);
        }
        $entree = Entree::findOrFail($id);
        $entree->delete();

        return redirect()->route('admin.entrees.index');
    }

    /**
     * Delete all selected Entree at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('entree_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Entree::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
