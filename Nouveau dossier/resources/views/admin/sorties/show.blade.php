@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.sortie.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.sortie.fields.stock')</th>
                            <td field-key='stock'>{{ $sorty->stock->designation or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sortie.fields.quantite')</th>
                            <td field-key='quantite'>{{ $sorty->quantite }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sortie.fields.unite')</th>
                            <td field-key='unite'>{{ $sorty->unite }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sortie.fields.motif')</th>
                            <td field-key='motif'>{!! $sorty->motif !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sortie.fields.date')</th>
                            <td field-key='date'>{{ $sorty->date }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.sorties.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
