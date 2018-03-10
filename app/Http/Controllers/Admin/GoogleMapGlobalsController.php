<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class GoogleMapGlobalsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('google_map_global_access')) {
            return abort(401);
        }
        return view('admin.google_map_globals.index');
    }
}
