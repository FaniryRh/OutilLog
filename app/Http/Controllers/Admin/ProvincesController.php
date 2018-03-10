<?php

namespace App\Http\Controllers\Admin;

use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProvincesRequest;
use App\Http\Requests\Admin\UpdateProvincesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ProvincesController extends Controller
{
    /**
     * Display a listing of Province.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('province_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('province_delete')) {
                return abort(401);
            }
            $provinces = Province::onlyTrashed()->get();
        } else {
            $provinces = Province::all();
        }

        return view('admin.provinces.index', compact('provinces'));
    }

    /**
     * Show the form for creating new Province.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('province_create')) {
            return abort(401);
        }
        return view('admin.provinces.create');
    }

    /**
     * Store a newly created Province in storage.
     *
     * @param  \App\Http\Requests\StoreProvincesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProvincesRequest $request)
    {
        if (! Gate::allows('province_create')) {
            return abort(401);
        }
        $province = Province::create($request->all());

        foreach ($request->input('regions', []) as $data) {
            $province->region()->create($data);
        }


        return redirect()->route('admin.provinces.index');
    }


    /**
     * Show the form for editing Province.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('province_edit')) {
            return abort(401);
        }
        $province = Province::findOrFail($id);

        return view('admin.provinces.edit', compact('province'));
    }

    /**
     * Update Province in storage.
     *
     * @param  \App\Http\Requests\UpdateProvincesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProvincesRequest $request, $id)
    {
        if (! Gate::allows('province_edit')) {
            return abort(401);
        }
        $province = Province::findOrFail($id);
        $province->update($request->all());

        $regions           = $province->region;
        $currentRegionData = [];
        foreach ($request->input('regions', []) as $index => $data) {
            if (is_integer($index)) {
                $province->region()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentRegionData[$id] = $data;
            }
        }
        foreach ($regions as $item) {
            if (isset($currentRegionData[$item->id])) {
                $item->update($currentRegionData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.provinces.index');
    }


    /**
     * Display Province.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('province_view')) {
            return abort(401);
        }
        $regions = \App\Region::where('province_id', $id)->get();$chef_de_regions = \App\ChefDeRegion::where('province_id', $id)->get();$liste_des_prefets = \App\ListeDesPrefet::where('province_id', $id)->get();

        $province = Province::findOrFail($id);

        return view('admin.provinces.show', compact('province', 'regions', 'chef_de_regions', 'liste_des_prefets'));
    }


    /**
     * Remove Province from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('province_delete')) {
            return abort(401);
        }
        $province = Province::findOrFail($id);
        $province->delete();

        return redirect()->route('admin.provinces.index');
    }

    /**
     * Delete all selected Province at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('province_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Province::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Province from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('province_delete')) {
            return abort(401);
        }
        $province = Province::onlyTrashed()->findOrFail($id);
        $province->restore();

        return redirect()->route('admin.provinces.index');
    }

    /**
     * Permanently delete Province from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('province_delete')) {
            return abort(401);
        }
        $province = Province::onlyTrashed()->findOrFail($id);
        $province->forceDelete();

        return redirect()->route('admin.provinces.index');
    }
}
