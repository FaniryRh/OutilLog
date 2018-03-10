@extends('layouts.app')

@section('content')

<style>
        #map-canvas{
            width: 600px;
            height: 580px;
        }

        
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title">{{ $personnel_du_bngrc->nom_prenom }}</h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_view') -->Détails
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.photo')</th>
                            <td field-key='photo'>@if($personnel_du_bngrc->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $personnel_du_bngrc->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $personnel_du_bngrc->photo) }}"/></a>
                            @else 

                                <img src="{{ url('/images/user.png') }}" style="width: 70px; height: 70px;" />

                            @endif</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.fonction')</th>
                            <td field-key='fonction'>{{ $personnel_du_bngrc->fonction or '--' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.nom-prenom')</th>
                            <td field-key='nom_prenom'>{{ $personnel_du_bngrc->nom_prenom }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Téléphone</th>
                            <td field-key='tel'>{{ $personnel_du_bngrc->tel or '--' }} / {{ $personnel_du_bngrc->tel2 or '--' }}</td>
                        </tr>
                        
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.email')</th>
                            <td field-key='email'>{{ $personnel_du_bngrc->email or '--' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.adresse')</th>
                            <td field-key='adresse'>{{ $personnel_du_bngrc->adresse or '--' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.competence-formation')</th>
                            <td field-key='competence_formation'>
                                @foreach ($personnel_du_bngrc->competence_formation as $singleCompetenceFormation)
                                    <span class="label label-info label-many">{{ $singleCompetenceFormation->titre or '--' }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.capacites')</th>
                            <td field-key='capacites'>
                                @foreach ($personnel_du_bngrc->capacites as $singleCapacites)
                                    <span class="label label-info label-many">{{ $singleCapacites->titre or '--' }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Date d'embauche</th>
                            <td field-key='date_embauche'>{{ $personnel_du_bngrc->date_embauche or '--' }}</td>
                        </tr>
                        <tr>
                            <?php $stat = e(isset($personnel_du_bngrc->statut->nom) ? $personnel_du_bngrc->statut->nom : ''); $color = null; ?>

                                                                <?php switch ($stat) {
                                                                        case "Disponible":
                                                                            $color = 'green';
                                                                            break;
                                                                        case "Occupé":
                                                                            $color = 'red';
                                                                            break;
                                                                        case "En mission":
                                                                            $color = 'orange';
                                                                            break;
                                                                        case "Absent":
                                                                            $color = 'black';
                                                                            break;
                                                                        case "Au bureau":
                                                                            $color = 'yellow';
                                                                            break;
                                                                        default:
                                                                            $color = 'grey';
                                                                            break;
                                                                }?>

                                                                
                                                                <?php 

                                                                $font = null;


                                                                if ($color == "yellow" || $color == "orange" || $color == "green"){
                                                                    $font = "black";

                                                                }else{ $font = "white"; }


                                                                ?>




                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.statut')</th>
                            <td field-key='statut' style="background-color: <?= $color ?>; color: <?= $font ?>;">{{ $personnel_du_bngrc->statut->nom or '' }}</td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.latitude')</th>
                            <td field-key='latitude'>{{ $personnel_du_bngrc->latitude }}</td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.personnel-du-bngrc.fields.longitude')</th>
                            <td field-key='longitude'>{{ $personnel_du_bngrc->longitude }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('admin.personnel_du_bngrcs.index') }}" class="btn btn-default fa fa-arrow-circle-left">@lang('quickadmin.qa_back_to_list')</a>
                    @can('personnel_du_bngrc_edit')
                       <a href="{{ route('admin.personnel_du_bngrcs.edit',[$personnel_du_bngrc->id]) }}" class="btn btn-info fa fa-edit">@lang('quickadmin.qa_edit')</a>
                    @endcan
                </div>
                <div id="map-canvas" class="box box-warning col-md-6"></div></br>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#absence" aria-controls="absence" role="tab" data-toggle="tab">Absence</a></li>
<li role="presentation" class=""><a href="#sortie" aria-controls="sortie" role="tab" data-toggle="tab">Sortie</a></li>
<li role="presentation" class=""><a href="#om" aria-controls="om" role="tab" data-toggle="tab">OM</a></li>
<!-- <li role="presentation" class=""><a href="#assetshistory" aria-controls="assetshistory" role="tab" data-toggle="tab">Historique</a></li>
<li role="presentation" class=""><a href="#inventaire" aria-controls="inventaire" role="tab" data-toggle="tab">Inventaire</a></li> -->
<li role="presentation" class=""><a href="#missions" aria-controls="missions" role="tab" data-toggle="tab">Missions</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Tâches</a></li>
<li role="presentation" class=""><a href="#assets" aria-controls="assets" role="tab" data-toggle="tab">Matériels</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="absence">
<table class="table table-bordered table-striped {{ count($absences) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
<div role="tabpanel" class="tab-pane " id="sortie">
<table class="table table-bordered table-striped {{ count($sorties) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.sortie.fields.parsonnel')</th>
                        <th>@lang('quickadmin.sortie.fields.stock')</th>
                        <th>@lang('quickadmin.sortie.fields.quantite')</th>
                        <th>@lang('quickadmin.sortie.fields.unite')</th>
                        <th>@lang('quickadmin.sortie.fields.motif')</th>
                        <th>@lang('quickadmin.sortie.fields.date')</th>
                        <th>@lang('quickadmin.sortie.fields.dateheurfin')</th>
                        <th>@lang('quickadmin.sortie.fields.statut')</th>
                        <th>@lang('quickadmin.sortie.fields.reponsable-sortie')</th>
                        <th>@lang('quickadmin.sortie.fields.location')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($sorties) > 0)
            @foreach ($sorties as $sorty)
                <tr data-entry-id="{{ $sorty->id }}">
                    <td field-key='parsonnel' style="width: 20px;">{{ $sorty->parsonnel->nom_prenom or '' }}</td>
                                <td field-key='stock'>{{ $sorty->stock->designation or '' }}</td>
                                <td field-key='quantite'>{{ $sorty->quantite }}</td>
                                <td field-key='unite'>{{ $sorty->unite }}</td>
                                <td field-key='motif'>{!! $sorty->motif !!}</td>
                                <td field-key='date'>{{ $sorty->date }}</td>
                                <td field-key='dateheurfin'>{{ $sorty->dateheurfin }}</td>
                                <td field-key='statut'>{{ $sorty->statut->nom or '' }}</td>
                                <td field-key='reponsable_sortie'>{{ $sorty->reponsable_sortie }}</td>
                                <td field-key='location'>{{ $sorty->location_address }}</td>
                                                                <td>
                                    @can('sortie_view')
                                    <a href="{{ route('admin.sorties.show',[$sorty->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('sortie_edit')
                                    <a href="{{ route('admin.sorties.edit',[$sorty->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('sortie_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.sorties.destroy', $sorty->id])) !!}
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
<div role="tabpanel" class="tab-pane " id="om">
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
                    <td field-key='mission' style="width: 20px;">{{ $om->mission->objet or '' }}</td>
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
<div role="tabpanel" class="tab-pane " id="assetshistory">
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
                    <td style="width: 20px;">{{ $assets_history->created_at or '' }}</td>
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
            <th style="width: 20px;">@lang('quickadmin.missions.fields.objet')</th>
                        <th>@lang('quickadmin.missions.fields.location')</th>
                        <th>@lang('quickadmin.missions.fields.date-deb')</th>
                        <th>@lang('quickadmin.missions.fields.date-fin')</th>
                        <!-- <th>@lang('quickadmin.missions.fields.personnel-id')</th> -->
                        <th>Progression</th>
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
                    <td field-key='objet' style="width: 20px;">{{ $mission->objet }}</td>
                                <td field-key='location'>{{ $mission->location }}</td>
                                <td field-key='date_deb'>{{ $mission->date_deb }}</td>
                                <td field-key='date_fin'>{{ $mission->date_fin }}</td>
                                <!-- <td field-key='personnel_id'>
                                    @foreach ($mission->personnel_id as $singlePersonnelId)
                                        <span class="label label-info label-many">{{ $singlePersonnelId->nom_prenom }}</span>
                                    @endforeach
                                </td> -->
                                <td field-key='progression'>{{ $mission->progression }} %</td>
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
                        <th>Date d'échéance</th>
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
                    <td field-key='type' style="width: 20px;">{{ $task->type->nom or '' }}</td>
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
                    <td field-key='type' style="width: 20px;">{{ $task->type->nom or '' }}</td>
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
<div role="tabpanel" class="tab-pane " id="assets">
<table class="table table-bordered table-striped {{ count($assets) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.assets.fields.category')</th>
                        <th>@lang('quickadmin.assets.fields.serial-number')</th>
                        <th>@lang('quickadmin.assets.fields.title')</th>
                        <th>@lang('quickadmin.assets.fields.photo1')</th>
                        <th>@lang('quickadmin.assets.fields.photo2')</th>
                        <th>@lang('quickadmin.assets.fields.photo3')</th>
                        <th>Date d'acquisition</th>
                        <th>@lang('quickadmin.assets.fields.quantite-stock')</th>
                        <th>@lang('quickadmin.assets.fields.status')</th>
                        <th>@lang('quickadmin.assets.fields.location')</th>
                        <th>@lang('quickadmin.assets.fields.assigned-user')</th>
                        <th>@lang('quickadmin.assets.fields.notes')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($assets) > 0)
            @foreach ($assets as $asset)
                <tr data-entry-id="{{ $asset->id }}">
                    <td field-key='category' style="width: 20px;">{{ $asset->category->title or '' }}</td>
                                <td field-key='serial_number'>{{ $asset->serial_number }}</td>
                                <td field-key='title'>{{ $asset->title }}</td>
                                <td field-key='photo1'>@if($asset->photo1)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1) }}"/></a>@endif</td>
                                <td field-key='photo2'>@if($asset->photo2)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2) }}"/></a>@endif</td>
                                <td field-key='photo3'>@if($asset->photo3)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo3) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3) }}"/></a>@endif</td>
                                <td field-key='date_acquisition'>{{ $asset->date_acquisition }}</td>
                                <td field-key='quantite_stock'>{{ $asset->quantite_stock }}</td>
                                <td field-key='status'>{{ $asset->status->title or '' }}</td>
                                <td field-key='location'>{{ $asset->location->title or '' }}</td>
                                <td field-key='assigned_user'>{{ $asset->assigned_user->nom_prenom or '' }}</td>
                                <td field-key='notes'>{!! $asset->notes !!}</td>
                                                                <td>
                                    @can('asset_view')
                                    <a href="{{ route('admin.assets.show',[$asset->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('asset_edit')
                                    <a href="{{ route('admin.assets.edit',[$asset->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('asset_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.assets.destroy', $asset->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

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

            <a href="{{ route('admin.personnel_du_bngrcs.index') }}" class="btn btn-default fa fa-arrow-circle-left">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>

    <script>
        
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: {{ $personnel_du_bngrc->latitude }},
                lng:  {{ $personnel_du_bngrc->longitude }}
            },
            zoom:6

        });


        function icon_img(){
            return "{{url('/icon/placeholder.png')}}";

        }

        var iconBase = icon_img();





        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3>'+'{{ $personnel_du_bngrc->nom_prenom }}'+'</h3>'+
      
      '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
            
            
            
        

        var marker = new google.maps.Marker({
            position:{
                lat: {{ $personnel_du_bngrc->latitude }},
                lng:  {{ $personnel_du_bngrc->longitude }}
            },
            map: map,
            draggable:false,
            icon: iconBase
            

        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        


    </script>
@stop
