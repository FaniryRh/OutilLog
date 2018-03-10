@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.om.title')</h3>
    @can('om_create')
    <p>
        <a href="{{ route('admin.oms.create') }}" class="btn btn-success fa fa-plus"> @lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_list') -->Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($oms) > 0 ? 'datatable' : '' }} @can('om_delete') dt-select @endcan">
                <thead style="background-color: orange; height: 1px;">
                    <tr>
                        @can('om_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

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
                                @can('om_delete')
                                    <td></td>
                                @endcan

                                <td field-key='mission' style="font-weight: bold;"><a <?php if($om->mission){ ?>  href="{{ route('admin.missions.show',[$om->mission->id]) }}"  <?php } ?> >{{ $om->mission->objet or '' }}</a></td>
                                <td field-key='ordonnee_a' style="background-color: #ffeecc; font-weight: bold;">{{ $om->ordonnee_a->nom_prenom or '' }}</td>
                                <td field-key='destination'>{{ $om->destination }}</td>
                                <td field-key='itineraire'>{{ $om->itineraire }}</td>
                                <td field-key='depart'>{{ $om->depart }}</td>
                                <td field-key='duree'>{{ $om->duree }} J</td>
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
                                    <a href="{{ route('admin.oms.show',[$om->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('om_edit')
                                    <a href="{{ route('admin.oms.edit',[$om->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
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
    </div>
@stop

@section('javascript') 
    <script>
        @can('om_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.oms.mass_destroy') }}';
        @endcan

    </script>
@endsection