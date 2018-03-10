@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.prefecture.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.prefecture.fields.name')</th>
                            <td field-key='name'>{{ $prefecture->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#listedesprefets" aria-controls="listedesprefets" role="tab" data-toggle="tab">Liste des préfets</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="listedesprefets">
<table class="table table-bordered table-striped {{ count($liste_des_prefets) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.liste-des-prefets.fields.province')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.region')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.prefecture')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.tel1')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.tel2')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($liste_des_prefets) > 0)
            @foreach ($liste_des_prefets as $liste_des_prefet)
                <tr data-entry-id="{{ $liste_des_prefet->id }}">
                    <td field-key='province'>{{ $liste_des_prefet->province->name or '' }}</td>
                                <td field-key='region'>{{ $liste_des_prefet->region->name or '' }}</td>
                                <td field-key='prefecture'>{{ $liste_des_prefet->prefecture->name or '' }}</td>
                                <td field-key='nom_prenom'>{{ $liste_des_prefet->nom_prenom }}</td>
                                <td field-key='tel1'>{{ $liste_des_prefet->tel1 }}</td>
                                <td field-key='tel2'>{{ $liste_des_prefet->tel2 }}</td>
                                <td field-key='email'>{{ $liste_des_prefet->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('liste_des_prefet_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_des_prefets.restore', $liste_des_prefet->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('liste_des_prefet_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_des_prefets.perma_del', $liste_des_prefet->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('liste_des_prefet_view')
                                    <a href="{{ route('admin.liste_des_prefets.show',[$liste_des_prefet->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('liste_des_prefet_edit')
                                    <a href="{{ route('admin.liste_des_prefets.edit',[$liste_des_prefet->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('liste_des_prefet_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_des_prefets.destroy', $liste_des_prefet->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="12">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.prefectures.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
