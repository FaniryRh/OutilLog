@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.unite.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.unite.fields.nom')</th>
                            <td field-key='nom'>{{ $unite->nom }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#listestock" aria-controls="listestock" role="tab" data-toggle="tab">Liste stock</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="listestock">
<table class="table table-bordered table-striped {{ count($liste_stocks) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.liste-stock.fields.designation')</th>
                        <th>@lang('quickadmin.liste-stock.fields.description')</th>
                        <th>@lang('quickadmin.liste-stock.fields.quantite')</th>
                        <th>@lang('quickadmin.liste-stock.fields.unite')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($liste_stocks) > 0)
            @foreach ($liste_stocks as $liste_stock)
                <tr data-entry-id="{{ $liste_stock->id }}">
                    <td field-key='designation'>{{ $liste_stock->designation }}</td>
                                <td field-key='description'>{!! $liste_stock->description !!}</td>
                                <td field-key='quantite'>{{ $liste_stock->quantite }}</td>
                                <td field-key='unite'>{{ $liste_stock->unite->nom or '' }}</td>
                                                                <td>
                                    @can('liste_stock_view')
                                    <a href="{{ route('admin.liste_stocks.show',[$liste_stock->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('liste_stock_edit')
                                    <a href="{{ route('admin.liste_stocks.edit',[$liste_stock->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('liste_stock_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_stocks.destroy', $liste_stock->id])) !!}
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
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.unites.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
