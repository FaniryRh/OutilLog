@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title"><!-- @lang('quickadmin.contacts.title') -->Liste Contacts</h3>
    @can('contact_create')
    <p>
        <a href="{{ route('admin.contacts.create') }}" class="btn btn-success fa fa-plus"><!-- @lang('quickadmin.qa_add_new') --> Nouveau Contact</a>
        
    </p>
    @endcan

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_list') -->Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($contacts) > 0 ? 'datatable' : '' }} @can('contact_delete') dt-select @endcan">
                <thead style="background-color: orange;">
                    <tr>
                        @can('contact_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.contacts.fields.company')</th>
                        <th>@lang('quickadmin.contacts.fields.fonction')</th>
                        <th>@lang('quickadmin.contacts.fields.first-name')</th>
                        <th>@lang('quickadmin.contacts.fields.phone1')</th>
                        <th>@lang('quickadmin.contacts.fields.phone2')</th>
                        <th>@lang('quickadmin.contacts.fields.email')</th>
                        <th>@lang('quickadmin.contacts.fields.address')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($contacts) > 0)
                        @foreach ($contacts as $contact)
                            <tr data-entry-id="{{ $contact->id }}">
                                @can('contact_delete')
                                    <td></td>
                                @endcan

                                <td field-key='company'>{{ $contact->company->name or '' }}</td>
                                <td field-key='fonction'>{{ $contact->fonction }}</td>
                                <td field-key='first_name' style="background-color: #ffeecc; font-weight: bold;">{{ $contact->first_name }}</td>
                                <td field-key='phone1'>{{ $contact->phone1 }}</td>
                                <td field-key='phone2'>{{ $contact->phone2 }}</td>
                                <td field-key='email'>{{ $contact->email }}</td>
                                <td field-key='address'>{{ $contact->address }}</td>
                                                                <td>
                                    @can('contact_view')
                                    <a href="{{ route('admin.contacts.show',[$contact->id]) }}" class="btn btn-xs btn-primary fa fa-eye">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('contact_edit')
                                    <a href="{{ route('admin.contacts.edit',[$contact->id]) }}" class="btn btn-xs btn-info fa fa-edit">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('contact_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts.destroy', $contact->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

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
@stop

@section('javascript') 
    <script>
        @can('contact_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.contacts.mass_destroy') }}';
        @endcan

    </script>
@endsection