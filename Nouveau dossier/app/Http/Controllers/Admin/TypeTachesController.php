<?php

namespace App\Http\Controllers\Admin;

use App\TypeTache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTypeTachesRequest;
use App\Http\Requests\Admin\UpdateTypeTachesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class TypeTachesController extends Controller
{
    /**
     * Display a listing of TypeTache.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('type_tache_access')) {
            return abort(401);
        }


                $type_taches = TypeTache::all();

        return view('admin.type_taches.index', compact('type_taches'));
    }

    /**
     * Show the form for creating new TypeTache.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('type_tache_create')) {
            return abort(401);
        }
        return view('admin.type_taches.create');
    }

    /**
     * Store a newly created TypeTache in storage.
     *
     * @param  \App\Http\Requests\StoreTypeTachesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeTachesRequest $request)
    {
        if (! Gate::allows('type_tache_create')) {
            return abort(401);
        }
        $type_tache = TypeTache::create($request->all());



        return redirect()->route('admin.type_taches.index');
    }


    /**
     * Show the form for editing TypeTache.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('type_tache_edit')) {
            return abort(401);
        }
        $type_tache = TypeTache::findOrFail($id);

        return view('admin.type_taches.edit', compact('type_tache'));
    }

    /**
     * Update TypeTache in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeTachesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeTachesRequest $request, $id)
    {
        if (! Gate::allows('type_tache_edit')) {
            return abort(401);
        }
        $type_tache = TypeTache::findOrFail($id);
        $type_tache->update($request->all());



        return redirect()->route('admin.type_taches.index');
    }


    /**
     * Display TypeTache.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('type_tache_view')) {
            return abort(401);
        }
        $tasks = \App\Task::where('type_id', $id)->get();

        $type_tache = TypeTache::findOrFail($id);

        return view('admin.type_taches.show', compact('type_tache', 'tasks'));
    }


    /**
     * Remove TypeTache from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('type_tache_delete')) {
            return abort(401);
        }
        $type_tache = TypeTache::findOrFail($id);
        $type_tache->delete();

        return redirect()->route('admin.type_taches.index');
    }

    /**
     * Delete all selected TypeTache at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('type_tache_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = TypeTache::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
