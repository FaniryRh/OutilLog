@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.absence.title')</h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            {{ $absence->personnel->nom_prenom or '' }}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.absence.fields.personnel')</th>
                            <td field-key='personnel'>{{ $absence->personnel->nom_prenom or '' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.absence.fields.date')</th>
                            <td field-key='date'>{{ $absence->date }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.absence.fields.date-fin')</th>
                            <td field-key='date_fin'>{{ $absence->date_fin }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.absence.fields.motif')</th>
                            <td field-key='motif'>{!! $absence->motif !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.absences.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>
            @can('absence_edit')
                      <a href="{{ route('admin.absences.edit',[$absence->id]) }}" class="btn btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
            @endcan
        </div>
    </div>
@stop
