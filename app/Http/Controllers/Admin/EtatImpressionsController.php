<?php

namespace App\Http\Controllers\Admin;

use App\EtatImpression;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEtatImpressionsRequest;
use App\Http\Requests\Admin\UpdateEtatImpressionsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class EtatImpressionsController extends Controller
{
    /**
     * Display a listing of EtatImpression.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('etat_impression_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('etat_impression_delete')) {
                return abort(401);
            }
            $etat_impressions = EtatImpression::onlyTrashed()->get();
        } else {
            $etat_impressions = EtatImpression::all();
        }

        return view('admin.etat_impressions.index', compact('etat_impressions'));
    }

    /**
     * Show the form for creating new EtatImpression.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('etat_impression_create')) {
            return abort(401);
        }
        return view('admin.etat_impressions.create');
    }

    /**
     * Store a newly created EtatImpression in storage.
     *
     * @param  \App\Http\Requests\StoreEtatImpressionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEtatImpressionsRequest $request)
    {
        if (! Gate::allows('etat_impression_create')) {
            return abort(401);
        }
        $etat_impression = EtatImpression::create($request->all());



        return redirect()->route('admin.etat_impressions.index');
    }


    /**
     * Show the form for editing EtatImpression.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('etat_impression_edit')) {
            return abort(401);
        }
        $etat_impression = EtatImpression::findOrFail($id);

        return view('admin.etat_impressions.edit', compact('etat_impression'));
    }

    /**
     * Update EtatImpression in storage.
     *
     * @param  \App\Http\Requests\UpdateEtatImpressionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtatImpressionsRequest $request, $id)
    {
        if (! Gate::allows('etat_impression_edit')) {
            return abort(401);
        }
        $etat_impression = EtatImpression::findOrFail($id);
        $etat_impression->update($request->all());



        return redirect()->route('admin.etat_impressions.index');
    }


    /**
     * Display EtatImpression.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('etat_impression_view')) {
            return abort(401);
        }
        $etat_impression = EtatImpression::findOrFail($id);

        return view('admin.etat_impressions.show', compact('etat_impression'));
    }


    /**
     * Remove EtatImpression from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('etat_impression_delete')) {
            return abort(401);
        }
        $etat_impression = EtatImpression::findOrFail($id);
        $etat_impression->delete();

        return redirect()->route('admin.etat_impressions.index');
    }

    /**
     * Delete all selected EtatImpression at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('etat_impression_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = EtatImpression::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore EtatImpression from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('etat_impression_delete')) {
            return abort(401);
        }
        $etat_impression = EtatImpression::onlyTrashed()->findOrFail($id);
        $etat_impression->restore();

        return redirect()->route('admin.etat_impressions.index');
    }

    /**
     * Permanently delete EtatImpression from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('etat_impression_delete')) {
            return abort(401);
        }
        $etat_impression = EtatImpression::onlyTrashed()->findOrFail($id);
        $etat_impression->forceDelete();

        return redirect()->route('admin.etat_impressions.index');
    }
}
