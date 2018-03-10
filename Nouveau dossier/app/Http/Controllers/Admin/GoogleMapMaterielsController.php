<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class GoogleMapMaterielsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('google_map_materiel_access')) {
            return abort(401);
        }
        return view('admin.google_map_materiels.index');
    }
}
