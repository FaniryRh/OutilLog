@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contacts-region.title')</h3>
    @can('contacts_region_create')
    <p>
        <a href="{{ route('admin.contacts_regions.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('contacts_region_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.contacts_regions.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.contacts_regions.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($contacts_regions) > 0 ? 'datatable' : '' }} @can('contacts_region_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('contacts_region_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.contacts-region.fields.region')</th>
                        <th>@lang('quickadmin.contacts-region.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.contacts-region.fields.organisme')</th>
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
                                @can('contacts_region_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='region'>{{ $contacts_region->region->name or '' }}</td>
                                <td field-key='nom_prenom'>{{ $contacts_region->nom_prenom }}</td>
                                <td field-key='organisme'>{{ $contacts_region->organisme->name or '' }}</td>
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
    </div>
@stop

@section('javascript') 
    <script>
        @can('contacts_region_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.contacts_regions.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection