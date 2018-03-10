@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.missions.title')</h3>
    @can('mission_create')
    <p>
        <a href="{{ route('admin.missions.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('mission_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.missions.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.missions.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($missions) > 0 ? 'datatable' : '' }} @can('mission_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('mission_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.missions.fields.objet')</th>
                        <th>@lang('quickadmin.missions.fields.location')</th>
                        <th>@lang('quickadmin.missions.fields.date-deb')</th>
                        <th>@lang('quickadmin.missions.fields.date-fin')</th>
                        <th>@lang('quickadmin.missions.fields.personnel-id')</th>
                        <th>@lang('quickadmin.missions.fields.materiel-id')</th>
                        <th>@lang('quickadmin.missions.fields.progression')</th>
                        <th>@lang('quickadmin.missions.fields.stat')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($missions) > 0)
                        @foreach ($missions as $mission)
                            <tr data-entry-id="{{ $mission->id }}">
                                @can('mission_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='objet'>{{ $mission->objet }}</td>
                                <td field-key='location'>{{ $mission->location }}</td>
                                <td field-key='date_deb'>{{ $mission->date_deb }}</td>
                                <td field-key='date_fin'>{{ $mission->date_fin }}</td>
                                <td field-key='personnel_id'>
                                    @foreach ($mission->personnel_id as $singlePersonnelId)
                                        <span class="label label-info label-many">{{ $singlePersonnelId->nom_prenom }}</span>
                                    @endforeach
                                </td>
                                <td field-key='materiel_id'>
                                    @foreach ($mission->materiel_id as $singleMaterielId)
                                        <span class="label label-info label-many">{{ $singleMaterielId->title }}</span>
                                    @endforeach
                                </td>
                                <td field-key='progression'>{{ $mission->progression }}</td>
                                <td field-key='stat'>{{ $mission->stat->name or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('mission_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.restore', $mission->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('mission_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.perma_del', $mission->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('mission_view')
                                    <a href="{{ route('admin.missions.show',[$mission->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('mission_edit')
                                    <a href="{{ route('admin.missions.edit',[$mission->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('mission_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.destroy', $mission->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="19">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('mission_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.missions.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection