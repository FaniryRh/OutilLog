@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contact-district.title')</h3>
    @can('contact_district_create')
    <p>
        <a href="{{ route('admin.contact_districts.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('contact_district_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.contact_districts.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.contact_districts.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($contact_districts) > 0 ? 'datatable' : '' }} @can('contact_district_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('contact_district_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.contact-district.fields.district')</th>
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
                                @can('contact_district_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='district'>{{ $contact_district->district->name or '' }}</td>
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
    </div>
@stop

@section('javascript') 
    <script>
        @can('contact_district_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.contact_districts.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection