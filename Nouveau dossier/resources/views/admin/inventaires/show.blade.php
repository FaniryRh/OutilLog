@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.inventaire.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.date')</th>
                            <td field-key='date'>{{ $inventaire->date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.mission')</th>
                            <td field-key='mission'>{{ $inventaire->mission->objet or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.stock')</th>
                            <td field-key='stock'>{{ $inventaire->stock->designation or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.quantite')</th>
                            <td field-key='quantite'>{{ $inventaire->quantite }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.unite')</th>
                            <td field-key='unite'>{{ $inventaire->unite }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.materiel-id')</th>
                            <td field-key='materiel_id'>
                                @foreach ($inventaire->materiel_id as $singleMaterielId)
                                    <span class="label label-info label-many">{{ $singleMaterielId->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.responsable-id')</th>
                            <td field-key='responsable_id'>
                                @foreach ($inventaire->responsable_id as $singleResponsableId)
                                    <span class="label label-info label-many">{{ $singleResponsableId->nom_prenom }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.destination')</th>
                            <td field-key='destination'>{{ $inventaire->destination }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.latitude')</th>
                            <td field-key='latitude'>{{ $inventaire->latitude }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.inventaire.fields.longitude')</th>
                            <td field-key='longitude'>{{ $inventaire->longitude }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.inventaires.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
