<?php

namespace App\Http\Controllers\Admin;

use App\ChefDistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreChefDistrictsRequest;
use App\Http\Requests\Admin\UpdateChefDistrictsRequest;

class ChefDistrictsController extends Controller
{
    /**
     * Display a listing of ChefDistrict.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('chef_district_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('chef_district_delete')) {
                return abort(401);
            }
            $chef_districts = ChefDistrict::onlyTrashed()->get();
        } else {
            $chef_districts = ChefDistrict::all();
        }

        return view('admin.chef_districts.index', compact('chef_districts'));
    }

    /**
     * Show the form for creating new ChefDistrict.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('chef_district_create')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $districts = \App\District::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.chef_districts.create', compact('regions', 'districts'));
    }

    /**
     * Store a newly created ChefDistrict in storage.
     *
     * @param  \App\Http\Requests\StoreChefDistrictsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChefDistrictsRequest $request)
    {
        if (! Gate::allows('chef_district_create')) {
            return abort(401);
        }
        $chef_district = ChefDistrict::create($request->all());



        return redirect()->route('admin.chef_districts.index');
    }


    /**
     * Show the form for editing ChefDistrict.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('chef_district_edit')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $districts = \App\District::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $chef_district = ChefDistrict::findOrFail($id);

        return view('admin.chef_districts.edit', compact('chef_district', 'regions', 'districts'));
    }

    /**
     * Update ChefDistrict in storage.
     *
     * @param  \App\Http\Requests\UpdateChefDistrictsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChefDistrictsRequest $request, $id)
    {
        if (! Gate::allows('chef_district_edit')) {
            return abort(401);
        }
        $chef_district = ChefDistrict::findOrFail($id);
        $chef_district->update($request->all());



        return redirect()->route('admin.chef_districts.index');
    }


    /**
     * Display ChefDistrict.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('chef_district_view')) {
            return abort(401);
        }
        $chef_district = ChefDistrict::findOrFail($id);

        return view('admin.chef_districts.show', compact('chef_district'));
    }


    /**
     * Remove ChefDistrict from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('chef_district_delete')) {
            return abort(401);
        }
        $chef_district = ChefDistrict::findOrFail($id);
        $chef_district->delete();

        return redirect()->route('admin.chef_districts.index');
    }

    /**
     * Delete all selected ChefDistrict at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('chef_district_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ChefDistrict::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore ChefDistrict from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('chef_district_delete')) {
            return abort(401);
        }
        $chef_district = ChefDistrict::onlyTrashed()->findOrFail($id);
        $chef_district->restore();

        return redirect()->route('admin.chef_districts.index');
    }

    /**
     * Permanently delete ChefDistrict from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('chef_district_delete')) {
            return abort(401);
        }
        $chef_district = ChefDistrict::onlyTrashed()->findOrFail($id);
        $chef_district->forceDelete();

        return redirect()->route('admin.chef_districts.index');
    }
}
