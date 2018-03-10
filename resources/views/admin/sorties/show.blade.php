@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{ $sortie->stock->designation or '' }}</h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_view') -->Détails
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.parsonnel')</th>
                            <td field-key='parsonnel'>{{ $sortie->parsonnel->nom_prenom or '' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.stock')</th>
                            <td field-key='stock'><a href="{{ route('admin.liste_stocks.show',[$sortie->stock->id]) }}">{{ $sortie->stock->designation or '' }}</a></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.quantite')</th>
                            <td field-key='quantite'>{{ $sortie->quantite }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.unite')</th>
                            <td field-key='unite'>{{ $sortie->unite }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.motif')</th>
                            <td field-key='motif'>{!! $sortie->motif !!}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.date')</th>
                            <td field-key='date'>{{ $sortie->date }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.dateheurfin')</th>
                            <td field-key='dateheurfin'>{{ $sortie->dateheurfin }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.statut')</th>
                            <td field-key='statut'>{{ $sortie->statut->nom or '' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.reponsable-sortie')</th>
                            <td field-key='reponsable_sortie'>{{ $sortie->reponsable_sortie }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.sortie.fields.location')</th>
                            <td field-key='location'>{{ $sortie->location_address }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.sorties.index') }}" class="btn btn-default fa fa-arrow-circle-left" > @lang('quickadmin.qa_back_to_list')</a>

                                    @can('sortie_edit')
                                    <a href="{{ route('admin.sorties.edit',[$sortie->id]) }}" class="btn btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan
        </div>
    </div>
@stop
