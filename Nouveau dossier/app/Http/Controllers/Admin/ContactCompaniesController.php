<?php

namespace App\Http\Controllers\Admin;

use App\ContactCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreContactCompaniesRequest;
use App\Http\Requests\Admin\UpdateContactCompaniesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ContactCompaniesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of ContactCompany.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('contact_company_access')) {
            return abort(401);
        }


                $contact_companies = ContactCompany::all();

        return view('admin.contact_companies.index', compact('contact_companies'));
    }

    /**
     * Show the form for creating new ContactCompany.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('contact_company_create')) {
            return abort(401);
        }
        return view('admin.contact_companies.create');
    }

    /**
     * Store a newly created ContactCompany in storage.
     *
     * @param  \App\Http\Requests\StoreContactCompaniesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactCompaniesRequest $request)
    {
        if (! Gate::allows('contact_company_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $contact_company = ContactCompany::create($request->all());

        foreach ($request->input('contacts_regions', []) as $data) {
            $contact_company->contactsRegion()->create($data);
        }
        foreach ($request->input('liste_groupe_sectoriels', []) as $data) {
            $contact_company->listeGroupeSectoriel()->create($data);
        }


        return redirect()->route('admin.contact_companies.index');
    }


    /**
     * Show the form for editing ContactCompany.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('contact_company_edit')) {
            return abort(401);
        }
        $contact_company = ContactCompany::findOrFail($id);

        return view('admin.contact_companies.edit', compact('contact_company'));
    }

    /**
     * Update ContactCompany in storage.
     *
     * @param  \App\Http\Requests\UpdateContactCompaniesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactCompaniesRequest $request, $id)
    {
        if (! Gate::allows('contact_company_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $contact_company = ContactCompany::findOrFail($id);
        $contact_company->update($request->all());

        $contactsRegions           = $contact_company->contactsRegion;
        $currentContactsRegionData = [];
        foreach ($request->input('contacts_regions', []) as $index => $data) {
            if (is_integer($index)) {
                $contact_company->contactsRegion()->create($data);
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
        $listeGroupeSectoriels           = $contact_company->listeGroupeSectoriel;
        $currentListeGroupeSectorielData = [];
        foreach ($request->input('liste_groupe_sectoriels', []) as $index => $data) {
            if (is_integer($index)) {
                $contact_company->listeGroupeSectoriel()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentListeGroupeSectorielData[$id] = $data;
            }
        }
        foreach ($listeGroupeSectoriels as $item) {
            if (isset($currentListeGroupeSectorielData[$item->id])) {
                $item->update($currentListeGroupeSectorielData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.contact_companies.index');
    }


    /**
     * Display ContactCompany.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('contact_company_view')) {
            return abort(401);
        }
        $contacts = \App\Contact::where('company_id', $id)->get();$contact_districts = \App\ContactDistrict::where('organisme_id', $id)->get();$contacts_regions = \App\ContactsRegion::where('organisme_id', $id)->get();$liste_groupe_sectoriels = \App\ListeGroupeSectoriel::where('organisme_id', $id)->get();$oms = \App\Om::whereHas('prise_en_charge',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();$tasks = \App\Task::whereHas('organisme',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $contact_company = ContactCompany::findOrFail($id);

        return view('admin.contact_companies.show', compact('contact_company', 'contacts', 'contact_districts', 'contacts_regions', 'liste_groupe_sectoriels', 'oms', 'tasks'));
    }


    /**
     * Remove ContactCompany from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('contact_company_delete')) {
            return abort(401);
        }
        $contact_company = ContactCompany::findOrFail($id);
        $contact_company->delete();

        return redirect()->route('admin.contact_companies.index');
    }

    /**
     * Delete all selected ContactCompany at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('contact_company_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ContactCompany::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
