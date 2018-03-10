@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contact-district.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.contact-district.fields.nom-prenom')</th>
                            <td field-key='nom_prenom'>{{ $contact_district->nom_prenom }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-district.fields.organisme')</th>
                            <td field-key='organisme'>{{ $contact_district->organisme->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-district.fields.fonction')</th>
                            <td field-key='fonction'>{{ $contact_district->fonction }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-district.fields.tel')</th>
                            <td field-key='tel'>{{ $contact_district->tel }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-district.fields.email')</th>
                            <td field-key='email'>{{ $contact_district->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.contact_districts.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
