<?php

namespace App\Http\Controllers\Admin;

use App\ListeDesPrefet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreListeDesPrefetsRequest;
use App\Http\Requests\Admin\UpdateListeDesPrefetsRequest;

class ListeDesPrefetsController extends Controller
{
    /**
     * Display a listing of ListeDesPrefet.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('liste_des_prefet_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('liste_des_prefet_delete')) {
                return abort(401);
            }
            $liste_des_prefets = ListeDesPrefet::onlyTrashed()->get();
        } else {
            $liste_des_prefets = ListeDesPrefet::all();
        }

        return view('admin.liste_des_prefets.index', compact('liste_des_prefets'));
    }

    /**
     * Show the form for creating new ListeDesPrefet.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('liste_des_prefet_create')) {
            return abort(401);
        }
        
        $provinces = \App\Province::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $prefectures = \App\Prefecture::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.liste_des_prefets.create', compact('provinces', 'regions', 'prefectures'));
    }

    /**
     * Store a newly created ListeDesPrefet in storage.
     *
     * @param  \App\Http\Requests\StoreListeDesPrefetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListeDesPrefetsRequest $request)
    {
        if (! Gate::allows('liste_des_prefet_create')) {
            return abort(401);
        }
        $liste_des_prefet = ListeDesPrefet::create($request->all());



        return redirect()->route('admin.liste_des_prefets.index');
    }


    /**
     * Show the form for editing ListeDesPrefet.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('liste_des_prefet_edit')) {
            return abort(401);
        }
        
        $provinces = \App\Province::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $prefectures = \App\Prefecture::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $liste_des_prefet = ListeDesPrefet::findOrFail($id);

        return view('admin.liste_des_prefets.edit', compact('liste_des_prefet', 'provinces', 'regions', 'prefectures'));
    }

    /**
     * Update ListeDesPrefet in storage.
     *
     * @param  \App\Http\Requests\UpdateListeDesPrefetsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListeDesPrefetsRequest $request, $id)
    {
        if (! Gate::allows('liste_des_prefet_edit')) {
            return abort(401);
        }
        $liste_des_prefet = ListeDesPrefet::findOrFail($id);
        $liste_des_prefet->update($request->all());



        return redirect()->route('admin.liste_des_prefets.index');
    }


    /**
     * Display ListeDesPrefet.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('liste_des_prefet_view')) {
            return abort(401);
        }
        $liste_des_prefet = ListeDesPrefet::findOrFail($id);

        return view('admin.liste_des_prefets.show', compact('liste_des_prefet'));
    }


    /**
     * Remove ListeDesPrefet from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('liste_des_prefet_delete')) {
            return abort(401);
        }
        $liste_des_prefet = ListeDesPrefet::findOrFail($id);
        $liste_des_prefet->delete();

        return redirect()->route('admin.liste_des_prefets.index');
    }

    /**
     * Delete all selected ListeDesPrefet at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('liste_des_prefet_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ListeDesPrefet::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore ListeDesPrefet from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('liste_des_prefet_delete')) {
            return abort(401);
        }
        $liste_des_prefet = ListeDesPrefet::onlyTrashed()->findOrFail($id);
        $liste_des_prefet->restore();

        return redirect()->route('admin.liste_des_prefets.index');
    }

    /**
     * Permanently delete ListeDesPrefet from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('liste_des_prefet_delete')) {
            return abort(401);
        }
        $liste_des_prefet = ListeDesPrefet::onlyTrashed()->findOrFail($id);
        $liste_des_prefet->forceDelete();

        return redirect()->route('admin.liste_des_prefets.index');
    }
}
