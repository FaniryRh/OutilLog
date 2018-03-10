@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{ $liste_stock->designation }}</h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_view') -->Détails
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.liste-stock.fields.photo')</th>
                            <td field-key='photo'>@if($liste_stock->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $liste_stock->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $liste_stock->photo) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.liste-stock.fields.designation')</th>
                            <td field-key='designation'>{{ $liste_stock->designation }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.liste-stock.fields.description')</th>
                            <td field-key='description'>{!! $liste_stock->description !!}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.liste-stock.fields.quantite')</th>
                            <td field-key='quantite'>{{ $liste_stock->quantite }} {{ $liste_stock->unite->nom or '' }}</td>
                        </tr>
                        <!-- <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.liste-stock.fields.unite')</th>
                            <td field-key='unite'></td>
                        </tr> -->
                    </table>

                    <a href="{{ route('admin.liste_stocks.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>
                    @can('liste_stock_edit')
                                    <a href="{{ route('admin.liste_stocks.edit',[$liste_stock->id]) }}" class="btn btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan
                </div>
            </div><!-- Nav tabs --></br>
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#entree" aria-controls="entree" role="tab" data-toggle="tab">Entrée</a></li>
<li role="presentation" class=""><a href="#sortie" aria-controls="sortie" role="tab" data-toggle="tab">Sortie</a></li>
<li role="presentation" class=""><a href="#inventaire" aria-controls="inventaire" role="tab" data-toggle="tab">Inventaire</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="entree">
<table class="table table-bordered table-striped {{ count($entrees) > 0 ? 'datatable' : '' }}">
    <thead style="background-color: orange;">
        <tr>
                        <th>@lang('quickadmin.entree.fields.date')</th>
                        <!-- <th>@lang('quickadmin.entree.fields.stock')</th> -->
                        <th>@lang('quickadmin.entree.fields.quantite')</th>
                        <!-- <th>@lang('quickadmin.entree.fields.unite')</th> -->
                        <th>@lang('quickadmin.entree.fields.motif')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($entrees) > 0)
            @foreach ($entrees as $entree)
                <tr data-entry-id="{{ $entree->id }}">
                    <td field-key='date'>{{ $entree->date }}</td>
                                <!-- <td field-key='stock'>{{ $entree->stock->designation or '' }}</td> -->
                                <td field-key='quantite'>{{ $entree->quantite }} {{ $entree->unite }}</td>
                                <!-- <td field-key='unite'></td> -->
                                <td field-key='motif'>{!! $entree->motif !!}</td>
                                                                <td>
                                    @can('entree_view')
                                    <a href="{{ route('admin.entrees.show',[$entree->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('entree_edit')
                                    <a href="{{ route('admin.entrees.edit',[$entree->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('entree_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.entrees.destroy', $entree->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="sortie">
<table class="table table-bordered table-striped {{ count($sorties) > 0 ? 'datatable' : '' }}">
    <thead style="background-color: orange;">
        <tr>
                        <th style="width: 20px;">@lang('quickadmin.sortie.fields.parsonnel')</th>
                        <!-- <th>@lang('quickadmin.sortie.fields.stock')</th> -->
                        <th>@lang('quickadmin.sortie.fields.quantite')</th>
                        <!-- <th>@lang('quickadmin.sortie.fields.unite')</th> -->
                        <th>@lang('quickadmin.sortie.fields.motif')</th>
                        <th>@lang('quickadmin.sortie.fields.date')</th>
                        <!-- <th>@lang('quickadmin.sortie.fields.dateheurfin')</th> -->
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
                                <td field-key='parsonnel'><a href="{{ route('admin.personnel_du_bngrcs.show',[$sorty->parsonnel->id]) }}">{{ $sorty->parsonnel->nom_prenom or '' }}</a></td>
                                <!-- <td field-key='stock'>{{ $sorty->stock->designation or '' }}</td> -->
                                <td field-key='quantite'>{{ $sorty->quantite }} {{ $sorty->unite }}</td>
                                <!-- <td field-key='unite'>{{ $sorty->unite }}</td> -->
                                <td field-key='motif'>{!! $sorty->motif !!}</td>
                                <td field-key='date'>{{ $sorty->date }}</td>
                                <!-- <td field-key='dateheurfin'>{{ $sorty->dateheurfin }}</td> -->
                                <td field-key='statut'>{{ $sorty->statut->nom or '' }}</td>
                                <td field-key='reponsable_sortie'>{{ $sorty->reponsable_sortie }}</td>
                                <td field-key='location'>{{ $sorty->location_address }}</td>
                                                                <td>
                                    @can('sortie_view')
                                    <a href="{{ route('admin.sorties.show',[$sorty->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('sortie_edit')
                                    <a href="{{ route('admin.sorties.edit',[$sorty->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
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
<div role="tabpanel" class="tab-pane " id="inventaire">
<table class="table table-bordered table-striped {{ count($inventaires) > 0 ? 'datatable' : '' }}">
    <thead style="background-color: orange;">
        <tr>
            <th>@lang('quickadmin.inventaire.fields.date')</th>
                        <th>@lang('quickadmin.inventaire.fields.mission')</th>
                        <!-- <th>@lang('quickadmin.inventaire.fields.stock')</th> -->
                        <th>@lang('quickadmin.inventaire.fields.quantite')</th>
                        <!-- <th>@lang('quickadmin.inventaire.fields.unite')</th> -->
                        <!-- <th>@lang('quickadmin.inventaire.fields.materiel-id')</th> -->
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
                                <td field-key='quantite'>{{ $inventaire->quantite }} {{ $inventaire->unite }}</td>
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
                                    <a href="{{ route('admin.inventaires.show',[$inventaire->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('inventaire_edit')
                                    <a href="{{ route('admin.inventaires.edit',[$inventaire->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
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

            <a href="{{ route('admin.liste_stocks.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
