@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.region.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.region.fields.name')</th>
                            <td field-key='name'>{{ $region->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#contactsregion" aria-controls="contactsregion" role="tab" data-toggle="tab">Contacts Région</a></li>
<li role="presentation" class=""><a href="#district" aria-controls="district" role="tab" data-toggle="tab">District</a></li>
<li role="presentation" class=""><a href="#prefecture" aria-controls="prefecture" role="tab" data-toggle="tab">prefecture</a></li>
<li role="presentation" class=""><a href="#chefdistrict" aria-controls="chefdistrict" role="tab" data-toggle="tab">Chef district</a></li>
<li role="presentation" class=""><a href="#chefderegion" aria-controls="chefderegion" role="tab" data-toggle="tab">Chef de région</a></li>
<li role="presentation" class=""><a href="#listedesprefets" aria-controls="listedesprefets" role="tab" data-toggle="tab">Liste des préfets</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="contactsregion">
<table class="table table-bordered table-striped {{ count($contacts_regions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.contacts-region.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.contacts-region.fields.fonction')</th>
                        <th>@lang('quickadmin.contacts-region.fields.tel')</th>
                        <th>@lang('quickadmin.contacts-region.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($contacts_regions) > 0)
            @foreach ($contacts_regions as $contacts_region)
                <tr data-entry-id="{{ $contacts_region->id }}">
                    <td field-key='nom_prenom'>{{ $contacts_region->nom_prenom }}</td>
                                <td field-key='fonction'>{{ $contacts_region->fonction }}</td>
                                <td field-key='tel'>{{ $contacts_region->tel }}</td>
                                <td field-key='email'>{{ $contacts_region->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('contacts_region_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts_regions.restore', $contacts_region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('contacts_region_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts_regions.perma_del', $contacts_region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('contacts_region_view')
                                    <a href="{{ route('admin.contacts_regions.show',[$contacts_region->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('contacts_region_edit')
                                    <a href="{{ route('admin.contacts_regions.edit',[$contacts_region->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('contacts_region_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts_regions.destroy', $contacts_region->id])) !!}
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
<div role="tabpanel" class="tab-pane " id="district">
<table class="table table-bordered table-striped {{ count($districts) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.district.fields.name')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($districts) > 0)
            @foreach ($districts as $district)
                <tr data-entry-id="{{ $district->id }}">
                    <td field-key='name'>{{ $district->name }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('district_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.districts.restore', $district->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('district_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.districts.perma_del', $district->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('district_view')
                                    <a href="{{ route('admin.districts.show',[$district->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('district_edit')
                                    <a href="{{ route('admin.districts.edit',[$district->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('district_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.districts.destroy', $district->id])) !!}
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
<div role="tabpanel" class="tab-pane " id="prefecture">
<table class="table table-bordered table-striped {{ count($prefectures) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.prefecture.fields.name')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($prefectures) > 0)
            @foreach ($prefectures as $prefecture)
                <tr data-entry-id="{{ $prefecture->id }}">
                    <td field-key='name'>{{ $prefecture->name }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('prefecture_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.prefectures.restore', $prefecture->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('prefecture_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.prefectures.perma_del', $prefecture->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('prefecture_view')
                                    <a href="{{ route('admin.prefectures.show',[$prefecture->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('prefecture_edit')
                                    <a href="{{ route('admin.prefectures.edit',[$prefecture->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('prefecture_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.prefectures.destroy', $prefecture->id])) !!}
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
<div role="tabpanel" class="tab-pane " id="chefdistrict">
<table class="table table-bordered table-striped {{ count($chef_districts) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.chef-district.fields.region')</th>
                        <th>@lang('quickadmin.chef-district.fields.district')</th>
                        <th>@lang('quickadmin.chef-district.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.chef-district.fields.tel1')</th>
                        <th>@lang('quickadmin.chef-district.fields.tel2')</th>
                        <th>@lang('quickadmin.chef-district.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($chef_districts) > 0)
            @foreach ($chef_districts as $chef_district)
                <tr data-entry-id="{{ $chef_district->id }}">
                    <td field-key='region'>{{ $chef_district->region->name or '' }}</td>
                                <td field-key='district'>{{ $chef_district->district->name or '' }}</td>
                                <td field-key='nom_prenom'>{{ $chef_district->nom_prenom }}</td>
                                <td field-key='tel1'>{{ $chef_district->tel1 }}</td>
                                <td field-key='tel2'>{{ $chef_district->tel2 }}</td>
                                <td field-key='email'>{{ $chef_district->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('chef_district_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.chef_districts.restore', $chef_district->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('chef_district_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.chef_districts.perma_del', $chef_district->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('chef_district_view')
                                    <a href="{{ route('admin.chef_districts.show',[$chef_district->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('chef_district_edit')
                                    <a href="{{ route('admin.chef_districts.edit',[$chef_district->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('chef_district_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.chef_districts.destroy', $chef_district->id])) !!}
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

            <a href="{{ route('admin.regions.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
