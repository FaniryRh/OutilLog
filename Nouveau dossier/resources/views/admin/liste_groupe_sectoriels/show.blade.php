@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.liste-groupe-sectoriel.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.liste-groupe-sectoriel.fields.nom-prenom')</th>
                            <td field-key='nom_prenom'>{{ $liste_groupe_sectoriel->nom_prenom }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.liste-groupe-sectoriel.fields.fonction')</th>
                            <td field-key='fonction'>{{ $liste_groupe_sectoriel->fonction }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.liste-groupe-sectoriel.fields.tel')</th>
                            <td field-key='tel'>{{ $liste_groupe_sectoriel->tel }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.liste-groupe-sectoriel.fields.email')</th>
                            <td field-key='email'>{{ $liste_groupe_sectoriel->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.liste_groupe_sectoriels.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
