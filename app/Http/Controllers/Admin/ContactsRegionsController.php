<?php

namespace App\Http\Controllers\Admin;

use App\ContactsRegion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreContactsRegionsRequest;
use App\Http\Requests\Admin\UpdateContactsRegionsRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ContactsRegionsController extends Controller
{
    /**
     * Display a listing of ContactsRegion.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('contacts_region_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('contacts_region_delete')) {
                return abort(401);
            }
            $contacts_regions = ContactsRegion::onlyTrashed()->get();
        } else {
            $contacts_regions = ContactsRegion::all();
        }

        return view('admin.contacts_regions.index', compact('contacts_regions'));
    }

    /**
     * Show the form for creating new ContactsRegion.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('contacts_region_create')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $organismes = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.contacts_regions.create', compact('regions', 'organismes'));
    }

    /**
     * Store a newly created ContactsRegion in storage.
     *
     * @param  \App\Http\Requests\StoreContactsRegionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactsRegionsRequest $request)
    {
        if (! Gate::allows('contacts_region_create')) {
            return abort(401);
        }
        $contacts_region = ContactsRegion::create($request->all());



        return redirect()->route('admin.contacts_regions.index');
    }


    /**
     * Show the form for editing ContactsRegion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('contacts_region_edit')) {
            return abort(401);
        }
        
        $regions = \App\Region::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $organismes = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $contacts_region = ContactsRegion::findOrFail($id);

        return view('admin.contacts_regions.edit', compact('contacts_region', 'regions', 'organismes'));
    }

    /**
     * Update ContactsRegion in storage.
     *
     * @param  \App\Http\Requests\UpdateContactsRegionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactsRegionsRequest $request, $id)
    {
        if (! Gate::allows('contacts_region_edit')) {
            return abort(401);
        }
        $contacts_region = ContactsRegion::findOrFail($id);
        $contacts_region->update($request->all());



        return redirect()->route('admin.contacts_regions.index');
    }


    /**
     * Display ContactsRegion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('contacts_region_view')) {
            return abort(401);
        }
        $contacts_region = ContactsRegion::findOrFail($id);

        return view('admin.contacts_regions.show', compact('contacts_region'));
    }


    /**
     * Remove ContactsRegion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('contacts_region_delete')) {
            return abort(401);
        }
        $contacts_region = ContactsRegion::findOrFail($id);
        $contacts_region->delete();

        return redirect()->route('admin.contacts_regions.index');
    }

    /**
     * Delete all selected ContactsRegion at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('contacts_region_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ContactsRegion::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore ContactsRegion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('contacts_region_delete')) {
            return abort(401);
        }
        $contacts_region = ContactsRegion::onlyTrashed()->findOrFail($id);
        $contacts_region->restore();

        return redirect()->route('admin.contacts_regions.index');
    }

    /**
     * Permanently delete ContactsRegion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('contacts_region_delete')) {
            return abort(401);
        }
        $contacts_region = ContactsRegion::onlyTrashed()->findOrFail($id);
        $contacts_region->forceDelete();

        return redirect()->route('admin.contacts_regions.index');
    }
}
