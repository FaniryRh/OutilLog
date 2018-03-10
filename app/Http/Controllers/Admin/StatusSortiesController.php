<?php

namespace App\Http\Controllers\Admin;

use App\StatusSortie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStatusSortiesRequest;
use App\Http\Requests\Admin\UpdateStatusSortiesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class StatusSortiesController extends Controller
{
    /**
     * Display a listing of StatusSortie.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('status_sortie_access')) {
            return abort(401);
        }


                $status_sorties = StatusSortie::all();

        return view('admin.status_sorties.index', compact('status_sorties'));
    }

    /**
     * Show the form for creating new StatusSortie.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('status_sortie_create')) {
            return abort(401);
        }
        return view('admin.status_sorties.create');
    }

    /**
     * Store a newly created StatusSortie in storage.
     *
     * @param  \App\Http\Requests\StoreStatusSortiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusSortiesRequest $request)
    {
        if (! Gate::allows('status_sortie_create')) {
            return abort(401);
        }
        $status_sortie = StatusSortie::create($request->all());



        return redirect()->route('admin.status_sorties.index');
    }


    /**
     * Show the form for editing StatusSortie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('status_sortie_edit')) {
            return abort(401);
        }
        $status_sortie = StatusSortie::findOrFail($id);

        return view('admin.status_sorties.edit', compact('status_sortie'));
    }

    /**
     * Update StatusSortie in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusSortiesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusSortiesRequest $request, $id)
    {
        if (! Gate::allows('status_sortie_edit')) {
            return abort(401);
        }
        $status_sortie = StatusSortie::findOrFail($id);
        $status_sortie->update($request->all());



        return redirect()->route('admin.status_sorties.index');
    }


    /**
     * Display StatusSortie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('status_sortie_view')) {
            return abort(401);
        }
        $sorties = \App\Sortie::where('statut_id', $id)->get();

        $status_sortie = StatusSortie::findOrFail($id);

        return view('admin.status_sorties.show', compact('status_sortie', 'sorties'));
    }


    /**
     * Remove StatusSortie from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('status_sortie_delete')) {
            return abort(401);
        }
        $status_sortie = StatusSortie::findOrFail($id);
        $status_sortie->delete();

        return redirect()->route('admin.status_sorties.index');
    }

    /**
     * Delete all selected StatusSortie at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('status_sortie_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = StatusSortie::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
