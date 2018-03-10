@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.district.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.district.fields.name')</th>
                            <td field-key='name'>{{ $district->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#contactdistrict" aria-controls="contactdistrict" role="tab" data-toggle="tab">Contacts District</a></li>
<li role="presentation" class=""><a href="#chefdistrict" aria-controls="chefdistrict" role="tab" data-toggle="tab">Chef district</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="contactdistrict">
<table class="table table-bordered table-striped {{ count($contact_districts) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.contact-district.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.contact-district.fields.organisme')</th>
                        <th>@lang('quickadmin.contact-district.fields.fonction')</th>
                        <th>@lang('quickadmin.contact-district.fields.tel')</th>
                        <th>@lang('quickadmin.contact-district.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($contact_districts) > 0)
            @foreach ($contact_districts as $contact_district)
                <tr data-entry-id="{{ $contact_district->id }}">
                    <td field-key='nom_prenom'>{{ $contact_district->nom_prenom }}</td>
                                <td field-key='organisme'>{{ $contact_district->organisme->name or '' }}</td>
                                <td field-key='fonction'>{{ $contact_district->fonction }}</td>
                                <td field-key='tel'>{{ $contact_district->tel }}</td>
                                <td field-key='email'>{{ $contact_district->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('contact_district_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_districts.restore', $contact_district->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('contact_district_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_districts.perma_del', $contact_district->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('contact_district_view')
                                    <a href="{{ route('admin.contact_districts.show',[$contact_district->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('contact_district_edit')
                                    <a href="{{ route('admin.contact_districts.edit',[$contact_district->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('contact_district_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_districts.destroy', $contact_district->id])) !!}
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
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.districts.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
