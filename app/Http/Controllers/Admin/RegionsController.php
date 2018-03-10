<?php

namespace App\Http\Controllers\Admin;

use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRegionsRequest;
use App\Http\Requests\Admin\UpdateRegionsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class RegionsController extends Controller
{
    /**
     * Display a listing of Region.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('region_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('region_delete')) {
                return abort(401);
            }
            $regions = Region::onlyTrashed()->get();
        } else {
            $regions = Region::all();
        }

        return view('admin.regions.index', compact('regions'));
    }

    /**
     * Show the form for creating new Region.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('region_create')) {
            return abort(401);
        }
        
        $provinces = \App\Province::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.regions.create', compact('provinces'));
    }

    /**
     * Store a newly created Region in storage.
     *
     * @param  \App\Http\Requests\StoreRegionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegionsRequest $request)
    {
        if (! Gate::allows('region_create')) {
            return abort(401);
        }
        $region = Region::create($request->all());

        foreach ($request->input('contacts_regions', []) as $data) {
            $region->contactsRegion()->create($data);
        }
        foreach ($request->input('districts', []) as $data) {
            $region->district()->create($data);
        }
        foreach ($request->input('prefectures', []) as $data) {
            $region->prefecture()->create($data);
        }


        return redirect()->route('admin.regions.index');
    }


    /**
     * Show the form for editing Region.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('region_edit')) {
            return abort(401);
        }
        
        $provinces = \App\Province::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $region = Region::findOrFail($id);

        return view('admin.regions.edit', compact('region', 'provinces'));
    }

    /**
     * Update Region in storage.
     *
     * @param  \App\Http\Requests\UpdateRegionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegionsRequest $request, $id)
    {
        if (! Gate::allows('region_edit')) {
            return abort(401);
        }
        $region = Region::findOrFail($id);
        $region->update($request->all());

        $contactsRegions           = $region->contactsRegion;
        $currentContactsRegionData = [];
        foreach ($request->input('contacts_regions', []) as $index => $data) {
            if (is_integer($index)) {
                $region->contactsRegion()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentContactsRegionData[$id] = $data;
            }
        }
        foreach ($contactsRegions as $item) {
            if (isset($currentContactsRegionData[$item->id])) {
                $item->update($currentContactsRegionData[$item->id]);
            } else {
                $item->delete();
            }
        }
        $districts           = $region->district;
        $currentDistrictData = [];
        foreach ($request->input('districts', []) as $index => $data) {
            if (is_integer($index)) {
                $region->district()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentDistrictData[$id] = $data;
            }
        }
        foreach ($districts as $item) {
            if (isset($currentDistrictData[$item->id])) {
                $item->update($currentDistrictData[$item->id]);
            } else {
                $item->delete();
            }
        }
        $prefectures           = $region->prefecture;
        $currentPrefectureData = [];
        foreach ($request->input('prefectures', []) as $index => $data) {
            if (is_integer($index)) {
                $region->prefecture()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentPrefectureData[$id] = $data;
            }
        }
        foreach ($prefectures as $item) {
            if (isset($currentPrefectureData[$item->id])) {
                $item->update($currentPrefectureData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.regions.index');
    }


    /**
     * Display Region.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('region_view')) {
            return abort(401);
        }
        
        $provinces = \App\Province::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$contacts_regions = \App\ContactsRegion::where('region_id', $id)->get();$districts = \App\District::where('region_id', $id)->get();$prefectures = \App\Prefecture::where('region_id', $id)->get();$chef_districts = \App\ChefDistrict::where('region_id', $id)->get();$chef_de_regions = \App\ChefDeRegion::where('region_id', $id)->get();$liste_des_prefets = \App\ListeDesPrefet::where('region_id', $id)->get();

        $region = Region::findOrFail($id);

        return view('admin.regions.show', compact('region', 'contacts_regions', 'districts', 'prefectures', 'chef_districts', 'chef_de_regions', 'liste_des_prefets'));
    }


    /**
     * Remove Region from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('region_delete')) {
            return abort(401);
        }
        $region = Region::findOrFail($id);
        $region->delete();

        return redirect()->route('admin.regions.index');
    }

    /**
     * Delete all selected Region at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('region_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Region::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Region from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('region_delete')) {
            return abort(401);
        }
        $region = Region::onlyTrashed()->findOrFail($id);
        $region->restore();

        return redirect()->route('admin.regions.index');
    }

    /**
     * Permanently delete Region from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('region_delete')) {
            return abort(401);
        }
        $region = Region::onlyTrashed()->findOrFail($id);
        $region->forceDelete();

        return redirect()->route('admin.regions.index');
    }
}
