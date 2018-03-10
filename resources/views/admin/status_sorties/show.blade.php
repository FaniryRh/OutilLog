@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.status-sortie.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.status-sortie.fields.nom')</th>
                            <td field-key='nom'>{{ $status_sortie->nom }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#sortie" aria-controls="sortie" role="tab" data-toggle="tab">Sortie</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="sortie">
<table class="table table-bordered table-striped {{ count($sorties) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.sortie.fields.parsonnel')</th>
                        <th>@lang('quickadmin.sortie.fields.stock')</th>
                        <th>@lang('quickadmin.sortie.fields.quantite')</th>
                        <th>@lang('quickadmin.sortie.fields.unite')</th>
                        <th>@lang('quickadmin.sortie.fields.motif')</th>
                        <th>@lang('quickadmin.sortie.fields.date')</th>
                        <th>@lang('quickadmin.sortie.fields.dateheurfin')</th>
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
                    <td field-key='parsonnel'>{{ $sorty->parsonnel->nom_prenom or '' }}</td>
                                <td field-key='stock'>{{ $sorty->stock->designation or '' }}</td>
                                <td field-key='quantite'>{{ $sorty->quantite }}</td>
                                <td field-key='unite'>{{ $sorty->unite }}</td>
                                <td field-key='motif'>{!! $sorty->motif !!}</td>
                                <td field-key='date'>{{ $sorty->date }}</td>
                                <td field-key='dateheurfin'>{{ $sorty->dateheurfin }}</td>
                                <td field-key='statut'>{{ $sorty->statut->nom or '' }}</td>
                                <td field-key='reponsable_sortie'>{{ $sorty->reponsable_sortie }}</td>
                                <td field-key='location'>{{ $sorty->location_address }}</td>
                                                                <td>
                                    @can('sortie_view')
                                    <a href="{{ route('admin.sorties.show',[$sorty->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('sortie_edit')
                                    <a href="{{ route('admin.sorties.edit',[$sorty->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
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
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.status_sorties.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
