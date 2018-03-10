@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.om.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.om.fields.mission')</th>
                            <td field-key='mission'>{{ $om->mission->objet or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.ordonnee-a')</th>
                            <td field-key='ordonnee_a'>{{ $om->ordonnee_a->nom_prenom or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.destination')</th>
                            <td field-key='destination'>{{ $om->destination }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.itineraire')</th>
                            <td field-key='itineraire'>{{ $om->itineraire }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.depart')</th>
                            <td field-key='depart'>{{ $om->depart }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.duree')</th>
                            <td field-key='duree'>{{ $om->duree }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.prise-en-charge')</th>
                            <td field-key='prise_en_charge'>
                                @foreach ($om->prise_en_charge as $singlePriseEnCharge)
                                    <span class="label label-info label-many">{{ $singlePriseEnCharge->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.fichier-om')</th>
                            <td field-key='fichier_om'>@if($om->fichier_om)<a href="{{ asset(env('UPLOAD_PATH').'/' . $om->fichier_om) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.etat')</th>
                            <td field-key='etat'>{{ $om->etat->nom or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.rapport-de-mission')</th>
                            <td field-key='rapport_de_mission'>@if($om->rapport_de_mission)<a href="{{ asset(env('UPLOAD_PATH').'/' . $om->rapport_de_mission) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.remise-rapport')</th>
                            <td field-key='remise_rapport'>{{ $om->remise_rapport }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.om.fields.etat-rapport-de-mission')</th>
                            <td field-key='etat_rapport_de_mission'>{{ $om->etat_rapport_de_mission->nom or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.oms.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
