<?php

namespace App\Http\Controllers\Admin;

use App\ContactDistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreContactDistrictsRequest;
use App\Http\Requests\Admin\UpdateContactDistrictsRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ContactDistrictsController extends Controller
{
    /**
     * Display a listing of ContactDistrict.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('contact_district_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('contact_district_delete')) {
                return abort(401);
            }
            $contact_districts = ContactDistrict::onlyTrashed()->get();
        } else {
            $contact_districts = ContactDistrict::all();
        }

        return view('admin.contact_districts.index', compact('contact_districts'));
    }

    /**
     * Show the form for creating new ContactDistrict.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('contact_district_create')) {
            return abort(401);
        }
        
        $districts = \App\District::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $organismes = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.contact_districts.create', compact('districts', 'organismes'));
    }

    /**
     * Store a newly created ContactDistrict in storage.
     *
     * @param  \App\Http\Requests\StoreContactDistrictsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactDistrictsRequest $request)
    {
        if (! Gate::allows('contact_district_create')) {
            return abort(401);
        }
        $contact_district = ContactDistrict::create($request->all());



        return redirect()->route('admin.contact_districts.index');
    }


    /**
     * Show the form for editing ContactDistrict.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('contact_district_edit')) {
            return abort(401);
        }
        
        $districts = \App\District::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $organismes = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $contact_district = ContactDistrict::findOrFail($id);

        return view('admin.contact_districts.edit', compact('contact_district', 'districts', 'organismes'));
    }

    /**
     * Update ContactDistrict in storage.
     *
     * @param  \App\Http\Requests\UpdateContactDistrictsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactDistrictsRequest $request, $id)
    {
        if (! Gate::allows('contact_district_edit')) {
            return abort(401);
        }
        $contact_district = ContactDistrict::findOrFail($id);
        $contact_district->update($request->all());



        return redirect()->route('admin.contact_districts.index');
    }


    /**
     * Display ContactDistrict.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('contact_district_view')) {
            return abort(401);
        }
        $contact_district = ContactDistrict::findOrFail($id);

        return view('admin.contact_districts.show', compact('contact_district'));
    }


    /**
     * Remove ContactDistrict from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('contact_district_delete')) {
            return abort(401);
        }
        $contact_district = ContactDistrict::findOrFail($id);
        $contact_district->delete();

        return redirect()->route('admin.contact_districts.index');
    }

    /**
     * Delete all selected ContactDistrict at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('contact_district_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ContactDistrict::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore ContactDistrict from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('contact_district_delete')) {
            return abort(401);
        }
        $contact_district = ContactDistrict::onlyTrashed()->findOrFail($id);
        $contact_district->restore();

        return redirect()->route('admin.contact_districts.index');
    }

    /**
     * Permanently delete ContactDistrict from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('contact_district_delete')) {
            return abort(401);
        }
        $contact_district = ContactDistrict::onlyTrashed()->findOrFail($id);
        $contact_district->forceDelete();

        return redirect()->route('admin.contact_districts.index');
    }
}
