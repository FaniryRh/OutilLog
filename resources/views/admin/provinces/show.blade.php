@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.province.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.province.fields.name')</th>
                            <td field-key='name'>{{ $province->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#region" aria-controls="region" role="tab" data-toggle="tab">Région</a></li>
<li role="presentation" class=""><a href="#chefderegion" aria-controls="chefderegion" role="tab" data-toggle="tab">Chef de région</a></li>
<li role="presentation" class=""><a href="#listedesprefets" aria-controls="listedesprefets" role="tab" data-toggle="tab">Liste des préfets</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="region">
<table class="table table-bordered table-striped {{ count($regions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.region.fields.name')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($regions) > 0)
            @foreach ($regions as $region)
                <tr data-entry-id="{{ $region->id }}">
                    <td field-key='name'>{{ $region->name }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('region_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.regions.restore', $region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('region_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.regions.perma_del', $region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('region_view')
                                    <a href="{{ route('admin.regions.show',[$region->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('region_edit')
                                    <a href="{{ route('admin.regions.edit',[$region->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('region_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.regions.destroy', $region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="chefderegion">
<table class="table table-bordered table-striped {{ count($chef_de_regions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.chef-de-region.fields.province')</th>
                        <th>@lang('quickadmin.chef-de-region.fields.region')</th>
                        <th>@lang('quickadmin.chef-de-region.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.chef-de-region.fields.tel')</th>
                        <th>@lang('quickadmin.chef-de-region.fields.tel2')</th>
                        <th>@lang('quickadmin.chef-de-region.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($chef_de_regions) > 0)
            @foreach ($chef_de_regions as $chef_de_region)
                <tr data-entry-id="{{ $chef_de_region->id }}">
                    <td field-key='province'>{{ $chef_de_region->province->name or '' }}</td>
                                <td field-key='region'>{{ $chef_de_region->region->name or '' }}</td>
                                <td field-key='nom_prenom'>{{ $chef_de_region->nom_prenom }}</td>
                                <td field-key='tel'>{{ $chef_de_region->tel }}</td>
                                <td field-key='tel2'>{{ $chef_de_region->tel2 }}</td>
                                <td field-key='email'>{{ $chef_de_region->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('chef_de_region_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.chef_de_regions.restore', $chef_de_region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('chef_de_region_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.chef_de_regions.perma_del', $chef_de_region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('chef_de_region_view')
                                    <a href="{{ route('admin.chef_de_regions.show',[$chef_de_region->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('chef_de_region_edit')
                                    <a href="{{ route('admin.chef_de_regions.edit',[$chef_de_region->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('chef_de_region_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.chef_de_regions.destroy', $chef_de_region->id])) !!}
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
<div role="tabpanel" class="tab-pane " id="listedesprefets">
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

            <a href="{{ route('admin.provinces.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
