@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.entree.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.entree.fields.date')</th>
                            <td field-key='date'>{{ $entree->date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.entree.fields.stock')</th>
                            <td field-key='stock'>{{ $entree->stock->designation or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.entree.fields.quantite')</th>
                            <td field-key='quantite'>{{ $entree->quantite }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.entree.fields.unite')</th>
                            <td field-key='unite'>{{ $entree->unite }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.entree.fields.motif')</th>
                            <td field-key='motif'>{!! $entree->motif !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.entrees.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
