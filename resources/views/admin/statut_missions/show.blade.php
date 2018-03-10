@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.statut-mission.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.statut-mission.fields.name')</th>
                            <td field-key='name'>{{ $statut_mission->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#missions" aria-controls="missions" role="tab" data-toggle="tab">Missions</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="missions">
<table class="table table-bordered table-striped {{ count($missions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.missions.fields.objet')</th>
                        <th>@lang('quickadmin.missions.fields.location')</th>
                        <th>@lang('quickadmin.missions.fields.date-deb')</th>
                        <th>@lang('quickadmin.missions.fields.date-fin')</th>
                        <th>@lang('quickadmin.missions.fields.personnel-id')</th>
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
                    <td field-key='objet'>{{ $mission->objet }}</td>
                                <td field-key='location'>{{ $mission->location }}</td>
                                <td field-key='date_deb'>{{ $mission->date_deb }}</td>
                                <td field-key='date_fin'>{{ $mission->date_fin }}</td>
                                <td field-key='personnel_id'>
                                    @foreach ($mission->personnel_id as $singlePersonnelId)
                                        <span class="label label-info label-many">{{ $singlePersonnelId->nom_prenom }}</span>
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
                <td colspan="17">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.statut_missions.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
