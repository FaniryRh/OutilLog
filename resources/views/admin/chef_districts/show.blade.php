@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.chef-district.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.chef-district.fields.region')</th>
                            <td field-key='region'>{{ $chef_district->region->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-district.fields.district')</th>
                            <td field-key='district'>{{ $chef_district->district->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-district.fields.nom-prenom')</th>
                            <td field-key='nom_prenom'>{{ $chef_district->nom_prenom }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-district.fields.tel1')</th>
                            <td field-key='tel1'>{{ $chef_district->tel1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-district.fields.tel2')</th>
                            <td field-key='tel2'>{{ $chef_district->tel2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-district.fields.email')</th>
                            <td field-key='email'>{{ $chef_district->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.chef_districts.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
