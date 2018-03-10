@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.absence.title')</h3>
    @can('absence_create')
    <p>
        <a href="{{ route('admin.absences.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($absences) > 0 ? 'datatable' : '' }} @can('absence_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('absence_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.absence.fields.personnel')</th>
                        <th>@lang('quickadmin.absence.fields.date')</th>
                        <th>@lang('quickadmin.absence.fields.date-fin')</th>
                        <th>@lang('quickadmin.absence.fields.motif')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($absences) > 0)
                        @foreach ($absences as $absence)
                            <tr data-entry-id="{{ $absence->id }}">
                                @can('absence_delete')
                                    <td></td>
                                @endcan

                                <td field-key='personnel'>{{ $absence->personnel->nom_prenom or '' }}</td>
                                <td field-key='date'>{{ $absence->date }}</td>
                                <td field-key='date_fin'>{{ $absence->date_fin }}</td>
                                <td field-key='motif'>{!! $absence->motif !!}</td>
                                                                <td>
                                    @can('absence_view')
                                    <a href="{{ route('admin.absences.show',[$absence->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('absence_edit')
                                    <a href="{{ route('admin.absences.edit',[$absence->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('absence_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.absences.destroy', $absence->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('absence_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.absences.mass_destroy') }}';
        @endcan

    </script>
@endsection