<?php

namespace App\Http\Controllers\Admin;

use App\ListeStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreListeStocksRequest;
use App\Http\Requests\Admin\UpdateListeStocksRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ListeStocksController extends Controller
{
    /**
     * Display a listing of ListeStock.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('liste_stock_access')) {
            return abort(401);
        }


                $liste_stocks = ListeStock::all();

        return view('admin.liste_stocks.index', compact('liste_stocks'));
    }

    /**
     * Show the form for creating new ListeStock.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('liste_stock_create')) {
            return abort(401);
        }
        
        $unites = \App\Unite::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.liste_stocks.create', compact('unites'));
    }

    /**
     * Store a newly created ListeStock in storage.
     *
     * @param  \App\Http\Requests\StoreListeStocksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListeStocksRequest $request)
    {
        if (! Gate::allows('liste_stock_create')) {
            return abort(401);
        }
        $liste_stock = ListeStock::create($request->all());



        return redirect()->route('admin.liste_stocks.index');
    }


    /**
     * Show the form for editing ListeStock.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('liste_stock_edit')) {
            return abort(401);
        }
        
        $unites = \App\Unite::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $liste_stock = ListeStock::findOrFail($id);

        return view('admin.liste_stocks.edit', compact('liste_stock', 'unites'));
    }

    /**
     * Update ListeStock in storage.
     *
     * @param  \App\Http\Requests\UpdateListeStocksRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListeStocksRequest $request, $id)
    {
        if (! Gate::allows('liste_stock_edit')) {
            return abort(401);
        }
        $liste_stock = ListeStock::findOrFail($id);
        $liste_stock->update($request->all());



        return redirect()->route('admin.liste_stocks.index');
    }


    /**
     * Display ListeStock.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('liste_stock_view')) {
            return abort(401);
        }
        
        $unites = \App\Unite::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$sorties = \App\Sortie::where('stock_id', $id)->get();$entrees = \App\Entree::where('stock_id', $id)->get();$inventaires = \App\Inventaire::where('stock_id', $id)->get();

        $liste_stock = ListeStock::findOrFail($id);

        return view('admin.liste_stocks.show', compact('liste_stock', 'sorties', 'entrees', 'inventaires'));
    }


    /**
     * Remove ListeStock from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('liste_stock_delete')) {
            return abort(401);
        }
        $liste_stock = ListeStock::findOrFail($id);
        $liste_stock->delete();

        return redirect()->route('admin.liste_stocks.index');
    }

    /**
     * Delete all selected ListeStock at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('liste_stock_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ListeStock::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
