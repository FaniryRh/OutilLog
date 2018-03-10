@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.statut-mission.title')</h3>
    @can('statut_mission_create')
    <p>
        <a href="{{ route('admin.statut_missions.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($statut_missions) > 0 ? 'datatable' : '' }} @can('statut_mission_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('statut_mission_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.statut-mission.fields.name')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($statut_missions) > 0)
                        @foreach ($statut_missions as $statut_mission)
                            <tr data-entry-id="{{ $statut_mission->id }}">
                                @can('statut_mission_delete')
                                    <td></td>
                                @endcan

                                <td field-key='name'>{{ $statut_mission->name }}</td>
                                                                <td>
                                    @can('statut_mission_view')
                                    <a href="{{ route('admin.statut_missions.show',[$statut_mission->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('statut_mission_edit')
                                    <a href="{{ route('admin.statut_missions.edit',[$statut_mission->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('statut_mission_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.statut_missions.destroy', $statut_mission->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('statut_mission_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.statut_missions.mass_destroy') }}';
        @endcan

    </script>
@endsection