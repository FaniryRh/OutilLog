@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.groupe-sectoriel.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.groupe-sectoriel.fields.name')</th>
                            <td field-key='name'>{{ $groupe_sectoriel->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#listegroupesectoriel" aria-controls="listegroupesectoriel" role="tab" data-toggle="tab">Groupe sectoriel</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="listegroupesectoriel">
<table class="table table-bordered table-striped {{ count($liste_groupe_sectoriels) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.liste-groupe-sectoriel.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.fonction')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.tel')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($liste_groupe_sectoriels) > 0)
            @foreach ($liste_groupe_sectoriels as $liste_groupe_sectoriel)
                <tr data-entry-id="{{ $liste_groupe_sectoriel->id }}">
                    <td field-key='nom_prenom'>{{ $liste_groupe_sectoriel->nom_prenom }}</td>
                                <td field-key='fonction'>{{ $liste_groupe_sectoriel->fonction }}</td>
                                <td field-key='tel'>{{ $liste_groupe_sectoriel->tel }}</td>
                                <td field-key='email'>{{ $liste_groupe_sectoriel->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('liste_groupe_sectoriel_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.restore', $liste_groupe_sectoriel->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('liste_groupe_sectoriel_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.perma_del', $liste_groupe_sectoriel->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('liste_groupe_sectoriel_view')
                                    <a href="{{ route('admin.liste_groupe_sectoriels.show',[$liste_groupe_sectoriel->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('liste_groupe_sectoriel_edit')
                                    <a href="{{ route('admin.liste_groupe_sectoriels.edit',[$liste_groupe_sectoriel->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('liste_groupe_sectoriel_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.destroy', $liste_groupe_sectoriel->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.groupe_sectoriels.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
