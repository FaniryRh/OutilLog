<?php

namespace App\Http\Controllers\Admin;

use App\TypeRisque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTypeRisquesRequest;
use App\Http\Requests\Admin\UpdateTypeRisquesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class TypeRisquesController extends Controller
{
    /**
     * Display a listing of TypeRisque.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('type_risque_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('type_risque_delete')) {
                return abort(401);
            }
            $type_risques = TypeRisque::onlyTrashed()->get();
        } else {
            $type_risques = TypeRisque::all();
        }

        return view('admin.type_risques.index', compact('type_risques'));
    }

    /**
     * Show the form for creating new TypeRisque.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('type_risque_create')) {
            return abort(401);
        }
        return view('admin.type_risques.create');
    }

    /**
     * Store a newly created TypeRisque in storage.
     *
     * @param  \App\Http\Requests\StoreTypeRisquesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeRisquesRequest $request)
    {
        if (! Gate::allows('type_risque_create')) {
            return abort(401);
        }
        $type_risque = TypeRisque::create($request->all());



        return redirect()->route('admin.type_risques.index');
    }


    /**
     * Show the form for editing TypeRisque.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('type_risque_edit')) {
            return abort(401);
        }
        $type_risque = TypeRisque::findOrFail($id);

        return view('admin.type_risques.edit', compact('type_risque'));
    }

    /**
     * Update TypeRisque in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeRisquesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeRisquesRequest $request, $id)
    {
        if (! Gate::allows('type_risque_edit')) {
            return abort(401);
        }
        $type_risque = TypeRisque::findOrFail($id);
        $type_risque->update($request->all());



        return redirect()->route('admin.type_risques.index');
    }


    /**
     * Display TypeRisque.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('type_risque_view')) {
            return abort(401);
        }
        $type_risque = TypeRisque::findOrFail($id);

        return view('admin.type_risques.show', compact('type_risque'));
    }


    /**
     * Remove TypeRisque from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('type_risque_delete')) {
            return abort(401);
        }
        $type_risque = TypeRisque::findOrFail($id);
        $type_risque->delete();

        return redirect()->route('admin.type_risques.index');
    }

    /**
     * Delete all selected TypeRisque at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('type_risque_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = TypeRisque::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore TypeRisque from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('type_risque_delete')) {
            return abort(401);
        }
        $type_risque = TypeRisque::onlyTrashed()->findOrFail($id);
        $type_risque->restore();

        return redirect()->route('admin.type_risques.index');
    }

    /**
     * Permanently delete TypeRisque from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('type_risque_delete')) {
            return abort(401);
        }
        $type_risque = TypeRisque::onlyTrashed()->findOrFail($id);
        $type_risque->forceDelete();

        return redirect()->route('admin.type_risques.index');
    }
}
