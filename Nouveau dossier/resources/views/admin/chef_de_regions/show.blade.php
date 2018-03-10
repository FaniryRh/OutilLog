@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.chef-de-region.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.chef-de-region.fields.province')</th>
                            <td field-key='province'>{{ $chef_de_region->province->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-de-region.fields.region')</th>
                            <td field-key='region'>{{ $chef_de_region->region->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-de-region.fields.nom-prenom')</th>
                            <td field-key='nom_prenom'>{{ $chef_de_region->nom_prenom }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-de-region.fields.tel')</th>
                            <td field-key='tel'>{{ $chef_de_region->tel }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-de-region.fields.tel2')</th>
                            <td field-key='tel2'>{{ $chef_de_region->tel2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.chef-de-region.fields.email')</th>
                            <td field-key='email'>{{ $chef_de_region->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.chef_de_regions.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
