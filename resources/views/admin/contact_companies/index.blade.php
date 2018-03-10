@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contact-companies.title')</h3>
    @can('contact_company_create')
    <p>
        <a href="{{ route('admin.contact_companies.create') }}" class="btn btn-success fa fa-plus"><!-- @lang('quickadmin.qa_add_new') --> Nouvelle Organisme</a>
        
    </p>
    @endcan

    

    <div class="panel panel-primary">
        <div class="panel-heading">
           <!--  @lang('quickadmin.qa_list') -->Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($contact_companies) > 0 ? 'datatable' : '' }} @can('contact_company_delete') dt-select @endcan">
                <thead style="background-color: orange;">
                    <tr>
                        @can('contact_company_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.contact-companies.fields.logo')</th>
                        <th>@lang('quickadmin.contact-companies.fields.name')</th>
                        <th>@lang('quickadmin.contact-companies.fields.address')</th>
                        <th>@lang('quickadmin.contact-companies.fields.website')</th>
                        <th>@lang('quickadmin.contact-companies.fields.email')</th>
                        <th>@lang('quickadmin.contact-companies.fields.tel')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($contact_companies) > 0)
                        @foreach ($contact_companies as $contact_company)
                            <tr data-entry-id="{{ $contact_company->id }}">
                                @can('contact_company_delete')
                                    <td></td>
                                @endcan

                                <td field-key='logo'>@if($contact_company->logo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $contact_company->logo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $contact_company->logo) }}"/></a>@endif</td>
                                <td field-key='name' style="background-color: #ffeecc; font-weight: bold;">{{ $contact_company->name }}</td>
                                <td field-key='address'>{{ $contact_company->address }}</td>
                                <td field-key='website'><a href="{{ $contact_company->website }}">{{ $contact_company->website }}</a></td>
                                <td field-key='email'>{{ $contact_company->email }}</td>
                                <td field-key='tel'>{{ $contact_company->tel }}</td>
                                                                <td>
                                    @can('contact_company_view')
                                    <a href="{{ route('admin.contact_companies.show',[$contact_company->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('contact_company_edit')
                                    <a href="{{ route('admin.contact_companies.edit',[$contact_company->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('contact_company_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_companies.destroy', $contact_company->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

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
        @can('contact_company_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.contact_companies.mass_destroy') }}';
        @endcan

    </script>
@endsection