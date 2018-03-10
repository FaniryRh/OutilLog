<?php

namespace App\Http\Controllers\Admin;

use App\Prefecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePrefecturesRequest;
use App\Http\Requests\Admin\UpdatePrefecturesRequest;

class PrefecturesController extends Controller
{
    /**
     * Display a listing of Prefecture.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('prefecture_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('prefecture_delete')) {
                return abort(401);
            }
            $prefectures = Prefecture::onlyTrashed()->get();
        } else {
            $prefectures = Prefecture::all();
        }

        return view('admin.prefectures.index', compact('prefectures'));
    }

    /**
     * Show the form for creating new Prefecture.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('prefecture_create')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.prefectures.create', compact('regions'));
    }

    /**
     * Store a newly created Prefecture in storage.
     *
     * @param  \App\Http\Requests\StorePrefecturesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrefecturesRequest $request)
    {
        if (! Gate::allows('prefecture_create')) {
            return abort(401);
        }
        $prefecture = Prefecture::create($request->all());



        return redirect()->route('admin.prefectures.index');
    }


    /**
     * Show the form for editing Prefecture.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('prefecture_edit')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $prefecture = Prefecture::findOrFail($id);

        return view('admin.prefectures.edit', compact('prefecture', 'regions'));
    }

    /**
     * Update Prefecture in storage.
     *
     * @param  \App\Http\Requests\UpdatePrefecturesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrefecturesRequest $request, $id)
    {
        if (! Gate::allows('prefecture_edit')) {
            return abort(401);
        }
        $prefecture = Prefecture::findOrFail($id);
        $prefecture->update($request->all());



        return redirect()->route('admin.prefectures.index');
    }


    /**
     * Display Prefecture.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('prefecture_view')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$liste_des_prefets = \App\ListeDesPrefet::where('prefecture_id', $id)->get();

        $prefecture = Prefecture::findOrFail($id);

        return view('admin.prefectures.show', compact('prefecture', 'liste_des_prefets'));
    }


    /**
     * Remove Prefecture from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('prefecture_delete')) {
            return abort(401);
        }
        $prefecture = Prefecture::findOrFail($id);
        $prefecture->delete();

        return redirect()->route('admin.prefectures.index');
    }

    /**
     * Delete all selected Prefecture at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('prefecture_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Prefecture::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Prefecture from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('prefecture_delete')) {
            return abort(401);
        }
        $prefecture = Prefecture::onlyTrashed()->findOrFail($id);
        $prefecture->restore();

        return redirect()->route('admin.prefectures.index');
    }

    /**
     * Permanently delete Prefecture from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('prefecture_delete')) {
            return abort(401);
        }
        $prefecture = Prefecture::onlyTrashed()->findOrFail($id);
        $prefecture->forceDelete();

        return redirect()->route('admin.prefectures.index');
    }
}
