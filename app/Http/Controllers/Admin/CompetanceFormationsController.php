<?php

namespace App\Http\Controllers\Admin;

use App\CompetanceFormation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCompetanceFormationsRequest;
use App\Http\Requests\Admin\UpdateCompetanceFormationsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CompetanceFormationsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of CompetanceFormation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('competance_formation_access')) {
            return abort(401);
        }


                $competance_formations = CompetanceFormation::all();

        return view('admin.competance_formations.index', compact('competance_formations'));
    }

    /**
     * Show the form for creating new CompetanceFormation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('competance_formation_create')) {
            return abort(401);
        }
        return view('admin.competance_formations.create');
    }

    /**
     * Store a newly created CompetanceFormation in storage.
     *
     * @param  \App\Http\Requests\StoreCompetanceFormationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompetanceFormationsRequest $request)
    {
        if (! Gate::allows('competance_formation_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $competance_formation = CompetanceFormation::create($request->all());



        return redirect()->route('admin.competance_formations.index');
    }


    /**
     * Show the form for editing CompetanceFormation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('competance_formation_edit')) {
            return abort(401);
        }
        $competance_formation = CompetanceFormation::findOrFail($id);

        return view('admin.competance_formations.edit', compact('competance_formation'));
    }

    /**
     * Update CompetanceFormation in storage.
     *
     * @param  \App\Http\Requests\UpdateCompetanceFormationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompetanceFormationsRequest $request, $id)
    {
        if (! Gate::allows('competance_formation_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $competance_formation = CompetanceFormation::findOrFail($id);
        $competance_formation->update($request->all());



        return redirect()->route('admin.competance_formations.index');
    }


    /**
     * Display CompetanceFormation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('competance_formation_view')) {
            return abort(401);
        }
        $personnel_du_bngrcs = \App\PersonnelDuBngrc::whereHas('competence_formation',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $competance_formation = CompetanceFormation::findOrFail($id);

        return view('admin.competance_formations.show', compact('competance_formation', 'personnel_du_bngrcs'));
    }


    /**
     * Remove CompetanceFormation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('competance_formation_delete')) {
            return abort(401);
        }
        $competance_formation = CompetanceFormation::findOrFail($id);
        $competance_formation->delete();

        return redirect()->route('admin.competance_formations.index');
    }

    /**
     * Delete all selected CompetanceFormation at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('competance_formation_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = CompetanceFormation::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
