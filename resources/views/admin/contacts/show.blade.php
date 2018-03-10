@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contacts.title')</h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_view') -->{{ $contact->first_name }}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.contacts.fields.company')</th>
                            <td field-key='company'>{{ $contact->company->name or '' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.contacts.fields.fonction')</th>
                            <td field-key='fonction'>{{ $contact->fonction }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.contacts.fields.first-name')</th>
                            <td field-key='first_name'>{{ $contact->first_name }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.contacts.fields.phone1')</th>
                            <td field-key='phone1'>{{ $contact->phone1 }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.contacts.fields.phone2')</th>
                            <td field-key='phone2'>{{ $contact->phone2 }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.contacts.fields.email')</th>
                            <td field-key='email'>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.contacts.fields.address')</th>
                            <td field-key='address'>{{ $contact->address }}</td>
                        </tr>
                    </table>

                    
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.contacts.index') }}" class="btn btn-default fa fa-arrow-circle-left">@lang('quickadmin.qa_back_to_list')</a>

            @can('contact_edit')
                         <a href="{{ route('admin.contacts.edit',[$contact->id]) }}" class="btn btn-info fa fa-edit">@lang('quickadmin.qa_edit')</a>
            @endcan
        </div>
    </div>
@stop
