<?php

namespace App\Http\Controllers\Admin;

use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDistrictsRequest;
use App\Http\Requests\Admin\UpdateDistrictsRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class DistrictsController extends Controller
{
    /**
     * Display a listing of District.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('district_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('district_delete')) {
                return abort(401);
            }
            $districts = District::onlyTrashed()->get();
        } else {
            $districts = District::all();
        }

        return view('admin.districts.index', compact('districts'));
    }

    /**
     * Show the form for creating new District.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('district_create')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.districts.create', compact('regions'));
    }

    /**
     * Store a newly created District in storage.
     *
     * @param  \App\Http\Requests\StoreDistrictsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDistrictsRequest $request)
    {
        if (! Gate::allows('district_create')) {
            return abort(401);
        }
        $district = District::create($request->all());

        foreach ($request->input('contact_districts', []) as $data) {
            $district->contactDistrict()->create($data);
        }


        return redirect()->route('admin.districts.index');
    }


    /**
     * Show the form for editing District.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('district_edit')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $district = District::findOrFail($id);

        return view('admin.districts.edit', compact('district', 'regions'));
    }

    /**
     * Update District in storage.
     *
     * @param  \App\Http\Requests\UpdateDistrictsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDistrictsRequest $request, $id)
    {
        if (! Gate::allows('district_edit')) {
            return abort(401);
        }
        $district = District::findOrFail($id);
        $district->update($request->all());

        $contactDistricts           = $district->contactDistrict;
        $currentContactDistrictData = [];
        foreach ($request->input('contact_districts', []) as $index => $data) {
            if (is_integer($index)) {
                $district->contactDistrict()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentContactDistrictData[$id] = $data;
            }
        }
        foreach ($contactDistricts as $item) {
            if (isset($currentContactDistrictData[$item->id])) {
                $item->update($currentContactDistrictData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.districts.index');
    }


    /**
     * Display District.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('district_view')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$contact_districts = \App\ContactDistrict::where('district_id', $id)->get();$chef_districts = \App\ChefDistrict::where('district_id', $id)->get();

        $district = District::findOrFail($id);

        return view('admin.districts.show', compact('district', 'contact_districts', 'chef_districts'));
    }


    /**
     * Remove District from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('district_delete')) {
            return abort(401);
        }
        $district = District::findOrFail($id);
        $district->delete();

        return redirect()->route('admin.districts.index');
    }

    /**
     * Delete all selected District at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('district_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = District::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore District from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('district_delete')) {
            return abort(401);
        }
        $district = District::onlyTrashed()->findOrFail($id);
        $district->restore();

        return redirect()->route('admin.districts.index');
    }

    /**
     * Permanently delete District from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('district_delete')) {
            return abort(401);
        }
        $district = District::onlyTrashed()->findOrFail($id);
        $district->forceDelete();

        return redirect()->route('admin.districts.index');
    }
}
