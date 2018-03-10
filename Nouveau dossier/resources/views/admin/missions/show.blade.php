@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.missions.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.missions.fields.objet')</th>
                            <td field-key='objet'>{{ $mission->objet }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.location')</th>
                            <td field-key='location'>{{ $mission->location }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.date-deb')</th>
                            <td field-key='date_deb'>{{ $mission->date_deb }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.date-fin')</th>
                            <td field-key='date_fin'>{{ $mission->date_fin }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.piece-jointe')</th>
                            <td field-key='piece_jointe'>@if($mission->piece_jointe)<a href="{{ asset(env('UPLOAD_PATH').'/' . $mission->piece_jointe) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.description')</th>
                            <td field-key='description'>{!! $mission->description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.itineraire')</th>
                            <td field-key='itineraire'>@if($mission->itineraire)<a href="{{ asset(env('UPLOAD_PATH').'/' . $mission->itineraire) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $mission->itineraire) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.multiple-piece-jointe')</th>
                            <td field-key='multiple_piece_jointe's> @foreach($mission->getMedia('multiple_piece_jointe') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                </p>
                            @endforeach</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.personnel-id')</th>
                            <td field-key='personnel_id'>
                                @foreach ($mission->personnel_id as $singlePersonnelId)
                                    <span class="label label-info label-many">{{ $singlePersonnelId->nom_prenom }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.materiel-id')</th>
                            <td field-key='materiel_id'>
                                @foreach ($mission->materiel_id as $singleMaterielId)
                                    <span class="label label-info label-many">{{ $singleMaterielId->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.progression')</th>
                            <td field-key='progression'>{{ $mission->progression }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.stat')</th>
                            <td field-key='stat'>{{ $mission->stat->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.latitude')</th>
                            <td field-key='latitude'>{{ $mission->latitude }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.missions.fields.longitude')</th>
                            <td field-key='longitude'>{{ $mission->longitude }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#om" aria-controls="om" role="tab" data-toggle="tab">OM</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Tâches</a></li>
<li role="presentation" class=""><a href="#inventaire" aria-controls="inventaire" role="tab" data-toggle="tab">Inventaire</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="om">
<table class="table table-bordered table-striped {{ count($oms) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.om.fields.mission')</th>
                        <th>@lang('quickadmin.om.fields.ordonnee-a')</th>
                        <th>@lang('quickadmin.om.fields.destination')</th>
                        <th>@lang('quickadmin.om.fields.itineraire')</th>
                        <th>@lang('quickadmin.om.fields.depart')</th>
                        <th>@lang('quickadmin.om.fields.duree')</th>
                        <th>@lang('quickadmin.om.fields.prise-en-charge')</th>
                        <th>@lang('quickadmin.om.fields.fichier-om')</th>
                        <th>@lang('quickadmin.om.fields.etat')</th>
                        <th>@lang('quickadmin.om.fields.rapport-de-mission')</th>
                        <th>@lang('quickadmin.om.fields.remise-rapport')</th>
                        <th>@lang('quickadmin.om.fields.etat-rapport-de-mission')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($oms) > 0)
            @foreach ($oms as $om)
                <tr data-entry-id="{{ $om->id }}">
                    <td field-key='mission'>{{ $om->mission->objet or '' }}</td>
                                <td field-key='ordonnee_a'>{{ $om->ordonnee_a->nom_prenom or '' }}</td>
                                <td field-key='destination'>{{ $om->destination }}</td>
                                <td field-key='itineraire'>{{ $om->itineraire }}</td>
                                <td field-key='depart'>{{ $om->depart }}</td>
                                <td field-key='duree'>{{ $om->duree }}</td>
                                <td field-key='prise_en_charge'>
                                    @foreach ($om->prise_en_charge as $singlePriseEnCharge)
                                        <span class="label label-info label-many">{{ $singlePriseEnCharge->name }}</span>
                                    @endforeach
                                </td>
                                <td field-key='fichier_om'>@if($om->fichier_om)<a href="{{ asset(env('UPLOAD_PATH').'/' . $om->fichier_om) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='etat'>{{ $om->etat->nom or '' }}</td>
                                <td field-key='rapport_de_mission'>@if($om->rapport_de_mission)<a href="{{ asset(env('UPLOAD_PATH').'/' . $om->rapport_de_mission) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='remise_rapport'>{{ $om->remise_rapport }}</td>
                                <td field-key='etat_rapport_de_mission'>{{ $om->etat_rapport_de_mission->nom or '' }}</td>
                                                                <td>
                                    @can('om_view')
                                    <a href="{{ route('admin.oms.show',[$om->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('om_edit')
                                    <a href="{{ route('admin.oms.edit',[$om->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('om_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.oms.destroy', $om->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

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
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped {{ count($tasks) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.tasks.fields.type')</th>
                        <th>@lang('quickadmin.tasks.fields.mission')</th>
                        <th>@lang('quickadmin.tasks.fields.name')</th>
                        <th>@lang('quickadmin.tasks.fields.description')</th>
                        <th>@lang('quickadmin.tasks.fields.status')</th>
                        <th>@lang('quickadmin.tasks.fields.attachment')</th>
                        <th>@lang('quickadmin.tasks.fields.due-date')</th>
                        <th>@lang('quickadmin.tasks.fields.heur')</th>
                        <th>@lang('quickadmin.tasks.fields.user')</th>
                        <th>@lang('quickadmin.tasks.fields.participant')</th>
                        <th>@lang('quickadmin.tasks.fields.organisme')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <tr data-entry-id="{{ $task->id }}">
                    <td field-key='type'>{{ $task->type->nom or '' }}</td>
                                <td field-key='mission'>{{ $task->mission->objet or '' }}</td>
                                <td field-key='name'>{{ $task->name }}</td>
                                <td field-key='description'>{!! $task->description !!}</td>
                                <td field-key='status'>{{ $task->status->name or '' }}</td>
                                <td field-key='attachment'>@if($task->attachment)<a href="{{ asset(env('UPLOAD_PATH').'/' . $task->attachment) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='due_date'>{{ $task->due_date }}</td>
                                <td field-key='heur'>{{ $task->heur }}</td>
                                <td field-key='user'>{{ $task->user->nom_prenom or '' }}</td>
                                <td field-key='participant'>
                                    @foreach ($task->participant as $singleParticipant)
                                        <span class="label label-info label-many">{{ $singleParticipant->nom_prenom }}</span>
                                    @endforeach
                                </td>
                                <td field-key='organisme'>
                                    @foreach ($task->organisme as $singleOrganisme)
                                        <span class="label label-info label-many">{{ $singleOrganisme->name }}</span>
                                    @endforeach
                                </td>
                                                                <td>
                                    @can('task_view')
                                    <a href="{{ route('admin.tasks.show',[$task->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('task_edit')
                                    <a href="{{ route('admin.tasks.edit',[$task->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('task_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="16">@lang('quickadmin.qa_no_entries_in_table')</td>
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
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.missions.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
