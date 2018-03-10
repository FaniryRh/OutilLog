@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.capacite.title')</h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            {{ $capacite->titre }}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.capacite.fields.titre')</th>
                            <td field-key='titre'>{{ $capacite->titre }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.capacite.fields.description')</th>
                            <td field-key='description'>{!! $capacite->description !!}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.capacite.fields.piece-jointe')</th>
                            <td field-key='piece_jointe'>@if($capacite->piece_jointe)<a href="{{ asset(env('UPLOAD_PATH').'/' . $capacite->piece_jointe) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                    </table>

                    <a href="{{ route('admin.capacites.index') }}" class="btn btn-default fa fa-arrow-circle-left">@lang('quickadmin.qa_back_to_list')</a>
                    @can('capacite_edit')
                                    <a href="{{ route('admin.capacites.edit',[$capacite->id]) }}" class="btn btn-info">@lang('quickadmin.qa_edit')</a>
                    @endcan
                </div>
            </div><!-- Nav tabs -->
            </br>
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#personneldubngrc" aria-controls="personneldubngrc" role="tab" data-toggle="tab">Personnel du BNGRC</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="personneldubngrc">
<table class="table table-bordered table-striped {{ count($personnel_du_bngrcs) > 0 ? 'datatable' : '' }}">
    <thead style="background-color: orange;"">
        <tr>
            <th>@lang('quickadmin.personnel-du-bngrc.fields.photo')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.fonction')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.tel')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.tel2')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.email')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.adresse')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.competence-formation')</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.capacites')</th>
                        <th>Date d'embauche</th>
                        <th>@lang('quickadmin.personnel-du-bngrc.fields.statut')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($personnel_du_bngrcs) > 0)
            @foreach ($personnel_du_bngrcs as $personnel_du_bngrc)
                <tr data-entry-id="{{ $personnel_du_bngrc->id }}">
                    <td field-key='photo'>@if($personnel_du_bngrc->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $personnel_du_bngrc->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $personnel_du_bngrc->photo) }}"/></a>@endif</td>
                                <td field-key='fonction'>{{ $personnel_du_bngrc->fonction }}</td>
                                <td field-key='nom_prenom'>{{ $personnel_du_bngrc->nom_prenom }}</td>
                                <td field-key='tel'>{{ $personnel_du_bngrc->tel }}</td>
                                <td field-key='tel2'>{{ $personnel_du_bngrc->tel2 }}</td>
                                <td field-key='email'>{{ $personnel_du_bngrc->email }}</td>
                                <td field-key='adresse'>{{ $personnel_du_bngrc->adresse }}</td>
                                <td field-key='competence_formation'>
                                    @foreach ($personnel_du_bngrc->competence_formation as $singleCompetenceFormation)
                                        <span class="label label-info label-many">{{ $singleCompetenceFormation->titre }}</span>
                                    @endforeach
                                </td>
                                <td field-key='capacites'>
                                    @foreach ($personnel_du_bngrc->capacites as $singleCapacites)
                                        <span class="label label-info label-many">{{ $singleCapacites->titre }}</span>
                                    @endforeach
                                </td>
                                <td field-key='date_embauche'>{{ $personnel_du_bngrc->date_embauche }}</td>
                                <td field-key='statut'>{{ $personnel_du_bngrc->statut->nom or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('personnel_du_bngrc_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.personnel_du_bngrcs.restore', $personnel_du_bngrc->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('personnel_du_bngrc_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.personnel_du_bngrcs.perma_del', $personnel_du_bngrc->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('personnel_du_bngrc_view')
                                    <a href="{{ route('admin.personnel_du_bngrcs.show',[$personnel_du_bngrc->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('personnel_du_bngrc_edit')
                                    <a href="{{ route('admin.personnel_du_bngrcs.edit',[$personnel_du_bngrc->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('personnel_du_bngrc_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.personnel_du_bngrcs.destroy', $personnel_du_bngrc->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="18">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.capacites.index') }}" class="btn btn-default fa fa-arrow-circle-left">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
