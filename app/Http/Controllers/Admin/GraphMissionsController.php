<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class GraphMissionsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('graph_mission_access')) {
            return abort(401);
        }
        return view('admin.graph_missions.index');
    }
}
