@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.entree.title')</h3>

    <div class="panel panel-primary">
        <div class="panel-heading" style="text-transform: uppercase;">
            {{ $entree->stock->designation or '' }}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.entree.fields.date')</th>
                            <td field-key='date'>{{ $entree->date }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.entree.fields.stock')</th>
                            <td field-key='stock'><a href="{{ route('admin.liste_stocks.show',[$entree->stock->id]) }}">{{ $entree->stock->designation or '' }}</a></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.entree.fields.quantite')</th>
                            <td field-key='quantite'>{{ $entree->quantite }} {{ $entree->unite }}</td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.entree.fields.unite')</th>
                            <td field-key='unite'>{{ $entree->unite }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.entree.fields.motif')</th>
                            <td field-key='motif'>{!! $entree->motif !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.entrees.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>
            @can('entree_edit')
                                    <a href="{{ route('admin.entrees.edit',[$entree->id]) }}" class="btn btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan
        </div>
    </div>
@stop
