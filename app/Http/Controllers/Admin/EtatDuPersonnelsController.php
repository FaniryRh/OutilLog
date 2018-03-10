<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class EtatDuPersonnelsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('etat_du_personnel_access')) {
            return abort(401);
        }
        return view('admin.etat_du_personnels.index');
    }
}
