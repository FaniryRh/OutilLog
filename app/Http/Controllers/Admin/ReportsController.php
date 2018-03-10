<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use App\Reunion;
use App\Mission;

class ReportsController extends Controller
{
    public function taches()
    {
        $reportTitle = 'Tâches';
        $reportLabel = 'COUNT';
        $chartType   = 'pie';

        $results = Task::get()->sortBy('due_date')->groupBy(function ($entry) {
            if ($entry->due_date instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->due_date)->format('Y-m-d');
            }

            return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->due_date)->format('Y-m-d');
        })->map(function ($entries, $group) {
            return $entries->count('id');
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

    public function reunion()
    {
        $reportTitle = 'Réunion';
        $reportLabel = 'COUNT';
        $chartType   = 'line';

        $results = Reunion::get()->sortBy('date')->groupBy(function ($entry) {
            if ($entry->date instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->date)->format('Y-m-d');
            }

            return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->date)->format('Y-m-d');
        })->map(function ($entries, $group) {
            return $entries->count('id');
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

    public function mission()
    {
        $reportTitle = 'Mission';
        $reportLabel = 'COUNT';
        $chartType   = 'line';

        $results = Mission::get()->sortBy('date_deb')->groupBy(function ($entry) {
            if ($entry->date_deb instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->date_deb)->format('Y-m');
            }

            return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->date_deb)->format('Y-m');
        })->map(function ($entries, $group) {
            return $entries->count('id');
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

}
