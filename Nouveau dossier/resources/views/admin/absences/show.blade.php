@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.absence.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.absence.fields.personnel')</th>
                            <td field-key='personnel'>{{ $absence->personnel->nom_prenom or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.absence.fields.date')</th>
                            <td field-key='date'>{{ $absence->date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.absence.fields.date-fin')</th>
                            <td field-key='date_fin'>{{ $absence->date_fin }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.absence.fields.motif')</th>
                            <td field-key='motif'>{!! $absence->motif !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.absences.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
