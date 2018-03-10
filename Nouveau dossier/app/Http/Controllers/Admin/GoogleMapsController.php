<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class GoogleMapsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('google_map_access')) {
            return abort(401);
        }
        return view('admin.google_maps.index');
    }
}
