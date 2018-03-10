<?php

namespace App\Http\Controllers\Admin;

use App\ChefDeRegion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreChefDeRegionsRequest;
use App\Http\Requests\Admin\UpdateChefDeRegionsRequest;

class ChefDeRegionsController extends Controller
{
    /**
     * Display a listing of ChefDeRegion.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('chef_de_region_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('chef_de_region_delete')) {
                return abort(401);
            }
            $chef_de_regions = ChefDeRegion::onlyTrashed()->get();
        } else {
            $chef_de_regions = ChefDeRegion::all();
        }

        return view('admin.chef_de_regions.index', compact('chef_de_regions'));
    }

    /**
     * Show the form for creating new ChefDeRegion.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('chef_de_region_create')) {
            return abort(401);
        }
        
        $provinces = \App\Province::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.chef_de_regions.create', compact('provinces', 'regions'));
    }

    /**
     * Store a newly created ChefDeRegion in storage.
     *
     * @param  \App\Http\Requests\StoreChefDeRegionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChefDeRegionsRequest $request)
    {
        if (! Gate::allows('chef_de_region_create')) {
            return abort(401);
        }
        $chef_de_region = ChefDeRegion::create($request->all());



        return redirect()->route('admin.chef_de_regions.index');
    }


    /**
     * Show the form for editing ChefDeRegion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('chef_de_region_edit')) {
            return abort(401);
        }
        
        $provinces = \App\Province::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $chef_de_region = ChefDeRegion::findOrFail($id);

        return view('admin.chef_de_regions.edit', compact('chef_de_region', 'provinces', 'regions'));
    }

    /**
     * Update ChefDeRegion in storage.
     *
     * @param  \App\Http\Requests\UpdateChefDeRegionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChefDeRegionsRequest $request, $id)
    {
        if (! Gate::allows('chef_de_region_edit')) {
            return abort(401);
        }
        $chef_de_region = ChefDeRegion::findOrFail($id);
        $chef_de_region->update($request->all());



        return redirect()->route('admin.chef_de_regions.index');
    }


    /**
     * Display ChefDeRegion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('chef_de_region_view')) {
            return abort(401);
        }
        $chef_de_region = ChefDeRegion::findOrFail($id);

        return view('admin.chef_de_regions.show', compact('chef_de_region'));
    }


    /**
     * Remove ChefDeRegion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('chef_de_region_delete')) {
            return abort(401);
        }
        $chef_de_region = ChefDeRegion::findOrFail($id);
        $chef_de_region->delete();

        return redirect()->route('admin.chef_de_regions.index');
    }

    /**
     * Delete all selected ChefDeRegion at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('chef_de_region_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ChefDeRegion::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore ChefDeRegion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('chef_de_region_delete')) {
            return abort(401);
        }
        $chef_de_region = ChefDeRegion::onlyTrashed()->findOrFail($id);
        $chef_de_region->restore();

        return redirect()->route('admin.chef_de_regions.index');
    }

    /**
     * Permanently delete ChefDeRegion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('chef_de_region_delete')) {
            return abort(401);
        }
        $chef_de_region = ChefDeRegion::onlyTrashed()->findOrFail($id);
        $chef_de_region->forceDelete();

        return redirect()->route('admin.chef_de_regions.index');
    }
}
