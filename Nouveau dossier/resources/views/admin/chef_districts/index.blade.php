@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.chef-district.title')</h3>
    @can('chef_district_create')
    <p>
        <a href="{{ route('admin.chef_districts.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('chef_district_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.chef_districts.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.chef_districts.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($chef_districts) > 0 ? 'datatable' : '' }} @can('chef_district_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('chef_district_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

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
                                @can('chef_district_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

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
@stop

@section('javascript') 
    <script>
        @can('chef_district_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.chef_districts.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection