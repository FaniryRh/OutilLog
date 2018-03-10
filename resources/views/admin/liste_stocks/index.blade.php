@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Stock</h3>
    @can('liste_stock_create')
    <p>
        <a href="{{ route('admin.liste_stocks.create') }}" class="btn btn-success fa fa-plus"> @lang('quickadmin.qa_add_new')</a>
        <a href="{{ route('admin.sorties.create') }}" class="btn btn-danger fa fa-arrow-circle-up" style="float: right; margin-left: 10px;"> <!-- @lang('quickadmin.qa_add_new') -->Effectuer Sortie</a>
        <a href="{{ route('admin.entrees.create') }}" class="btn btn-info fa fa-arrow-circle-down" style="float: right; "> <!-- @lang('quickadmin.qa_add_new') -->Effectuer Entrée</a>
        
        
    </p>
    @endcan

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_list') -->Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($liste_stocks) > 0 ? 'datatable' : '' }} @can('liste_stock_delete') dt-select @endcan">
                <thead style="background-color: orange;">
                    <tr>
                        @can('liste_stock_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.liste-stock.fields.photo')</th>
                        <th>@lang('quickadmin.liste-stock.fields.designation')</th>
                        <th>@lang('quickadmin.liste-stock.fields.description')</th>
                        <th>@lang('quickadmin.liste-stock.fields.quantite')</th>
                        <!-- <th>@lang('quickadmin.liste-stock.fields.unite')</th> -->
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($liste_stocks) > 0)
                        @foreach ($liste_stocks as $liste_stock)
                            <tr data-entry-id="{{ $liste_stock->id }}">
                                @can('liste_stock_delete')
                                    <td></td>
                                @endcan

                                <td field-key='photo'>@if($liste_stock->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $liste_stock->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $liste_stock->photo) }}"/></a>@endif</td>
                                <td field-key='designation' style="background-color: #ffeecc; font-weight: bold;">{{ $liste_stock->designation }}</td>
                                <td field-key='description'>{!! $liste_stock->description !!}</td>
                                <td field-key='quantite' style="font-weight: bold;">{{ $liste_stock->quantite }} {{ $liste_stock->unite->nom or '' }}</td>
                                <!-- <td field-key='unite'>{{ $liste_stock->unite->nom or '' }}</td> -->
                                                                <td>
                                    @can('liste_stock_view')
                                    <a href="{{ route('admin.liste_stocks.show',[$liste_stock->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('liste_stock_edit')
                                    <a href="{{ route('admin.liste_stocks.edit',[$liste_stock->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
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
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('liste_stock_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.liste_stocks.mass_destroy') }}';
        @endcan

    </script>
@endsection