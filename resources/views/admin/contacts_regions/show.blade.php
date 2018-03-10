@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contacts-region.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.contacts-region.fields.nom-prenom')</th>
                            <td field-key='nom_prenom'>{{ $contacts_region->nom_prenom }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts-region.fields.fonction')</th>
                            <td field-key='fonction'>{{ $contacts_region->fonction }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts-region.fields.tel')</th>
                            <td field-key='tel'>{{ $contacts_region->tel }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts-region.fields.email')</th>
                            <td field-key='email'>{{ $contacts_region->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.contacts_regions.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
