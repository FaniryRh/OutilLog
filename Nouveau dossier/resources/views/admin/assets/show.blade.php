@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.assets.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.assets.fields.category')</th>
                            <td field-key='category'>{{ $asset->category->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.serial-number')</th>
                            <td field-key='serial_number'>{{ $asset->serial_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.title')</th>
                            <td field-key='title'>{{ $asset->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.photo1')</th>
                            <td field-key='photo1'>@if($asset->photo1)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.photo2')</th>
                            <td field-key='photo2'>@if($asset->photo2)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.photo3')</th>
                            <td field-key='photo3'>@if($asset->photo3)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo3) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.date-acquisition')</th>
                            <td field-key='date_acquisition'>{{ $asset->date_acquisition }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.quantite-stock')</th>
                            <td field-key='quantite_stock'>{{ $asset->quantite_stock }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.status')</th>
                            <td field-key='status'>{{ $asset->status->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.location')</th>
                            <td field-key='location'>{{ $asset->location->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.assigned-user')</th>
                            <td field-key='assigned_user'>{{ $asset->assigned_user->nom_prenom or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.notes')</th>
                            <td field-key='notes'>{!! $asset->notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.latitude')</th>
                            <td field-key='latitude'>{{ $asset->latitude }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.longitude')</th>
                            <td field-key='longitude'>{{ $asset->longitude }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#assetshistory" aria-controls="assetshistory" role="tab" data-toggle="tab">Historique</a></li>
<li role="presentation" class=""><a href="#inventaire" aria-controls="inventaire" role="tab" data-toggle="tab">Inventaire</a></li>
<li role="presentation" class=""><a href="#missions" aria-controls="missions" role="tab" data-toggle="tab">Missions</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="assetshistory">
<table class="table table-bordered table-striped {{ count($assets_histories) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.assets-history.created_at')</th>
                        <th>@lang('quickadmin.assets-history.fields.asset')</th>
                        <th>@lang('quickadmin.assets-history.fields.status')</th>
                        <th>@lang('quickadmin.assets-history.fields.location')</th>
                        <th>@lang('quickadmin.assets-history.fields.assigned-user')</th>
                        
        </tr>
    </thead>

    <tbody>
        @if (count($assets_histories) > 0)
            @foreach ($assets_histories as $assets_history)
                <tr data-entry-id="{{ $assets_history->id }}">
                    <td>{{ $assets_history->created_at or '' }}</td>
                                <td field-key='asset'>{{ $assets_history->asset->title or '' }}</td>
                                <td field-key='status'>{{ $assets_history->status->title or '' }}</td>
                                <td field-key='location'>{{ $assets_history->location->title or '' }}</td>
                                <td field-key='assigned_user'>{{ $assets_history->assigned_user->nom_prenom or '' }}</td>
                                
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="inventaire">
<table class="table table-bordered table-striped {{ count($inventaires) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.inventaire.fields.date')</th>
                        <th>@lang('quickadmin.inventaire.fields.mission')</th>
                        <th>@lang('quickadmin.inventaire.fields.stock')</th>
                        <th>@lang('quickadmin.inventaire.fields.quantite')</th>
                        <th>@lang('quickadmin.inventaire.fields.unite')</th>
                        <th>@lang('quickadmin.inventaire.fields.materiel-id')</th>
                        <th>@lang('quickadmin.inventaire.fields.responsable-id')</th>
                        <th>@lang('quickadmin.inventaire.fields.destination')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($inventaires) > 0)
            @foreach ($inventaires as $inventaire)
                <tr data-entry-id="{{ $inventaire->id }}">
                    <td field-key='date'>{{ $inventaire->date }}</td>
                                <td field-key='mission'>{{ $inventaire->mission->objet or '' }}</td>
                                <td field-key='stock'>{{ $inventaire->stock->designation or '' }}</td>
                                <td field-key='quantite'>{{ $inventaire->quantite }}</td>
                                <td field-key='unite'>{{ $inventaire->unite }}</td>
                                <td field-key='materiel_id'>
                                    @foreach ($inventaire->materiel_id as $singleMaterielId)
                                        <span class="label label-info label-many">{{ $singleMaterielId->title }}</span>
                                    @endforeach
                                </td>
                                <td field-key='responsable_id'>
                                    @foreach ($inventaire->responsable_id as $singleResponsableId)
                                        <span class="label label-info label-many">{{ $singleResponsableId->nom_prenom }}</span>
                                    @endforeach
                                </td>
                                <td field-key='destination'>{{ $inventaire->destination }}</td>
                                                                <td>
                                    @can('inventaire_view')
                                    <a href="{{ route('admin.inventaires.show',[$inventaire->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('inventaire_edit')
                                    <a href="{{ route('admin.inventaires.edit',[$inventaire->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('inventaire_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.inventaires.destroy', $inventaire->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="15">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="missions">
<table class="table table-bordered table-striped {{ count($missions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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

            <p>&nbsp;</p>

            <a href="{{ route('admin.assets.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
