@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.liste-des-prefets.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.liste-des-prefets.fields.province')</th>
                            <td field-key='province'>{{ $liste_des_prefet->province->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.liste-des-prefets.fields.region')</th>
                            <td field-key='region'>{{ $liste_des_prefet->region->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.liste-des-prefets.fields.prefecture')</th>
                            <td field-key='prefecture'>{{ $liste_des_prefet->prefecture->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.liste-des-prefets.fields.nom-prenom')</th>
                            <td field-key='nom_prenom'>{{ $liste_des_prefet->nom_prenom }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.liste-des-prefets.fields.tel1')</th>
                            <td field-key='tel1'>{{ $liste_des_prefet->tel1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.liste-des-prefets.fields.tel2')</th>
                            <td field-key='tel2'>{{ $liste_des_prefet->tel2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.liste-des-prefets.fields.email')</th>
                            <td field-key='email'>{{ $liste_des_prefet->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.liste_des_prefets.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
