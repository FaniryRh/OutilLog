@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.liste-groupe-sectoriel.title')</h3>
    @can('liste_groupe_sectoriel_create')
    <p>
        <a href="{{ route('admin.liste_groupe_sectoriels.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('liste_groupe_sectoriel_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.liste_groupe_sectoriels.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.liste_groupe_sectoriels.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($liste_groupe_sectoriels) > 0 ? 'datatable' : '' }} @can('liste_groupe_sectoriel_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('liste_groupe_sectoriel_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.groupe-sectoriel')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.organisme')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.fonction')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.tel')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($liste_groupe_sectoriels) > 0)
                        @foreach ($liste_groupe_sectoriels as $liste_groupe_sectoriel)
                            <tr data-entry-id="{{ $liste_groupe_sectoriel->id }}">
                                @can('liste_groupe_sectoriel_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='groupe_sectoriel'>{{ $liste_groupe_sectoriel->groupe_sectoriel->name or '' }}</td>
                                <td field-key='nom_prenom'>{{ $liste_groupe_sectoriel->nom_prenom }}</td>
                                <td field-key='organisme'>{{ $liste_groupe_sectoriel->organisme->name or '' }}</td>
                                <td field-key='fonction'>{{ $liste_groupe_sectoriel->fonction }}</td>
                                <td field-key='tel'>{{ $liste_groupe_sectoriel->tel }}</td>
                                <td field-key='email'>{{ $liste_groupe_sectoriel->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('liste_groupe_sectoriel_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.restore', $liste_groupe_sectoriel->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('liste_groupe_sectoriel_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.perma_del', $liste_groupe_sectoriel->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('liste_groupe_sectoriel_view')
                                    <a href="{{ route('admin.liste_groupe_sectoriels.show',[$liste_groupe_sectoriel->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('liste_groupe_sectoriel_edit')
                                    <a href="{{ route('admin.liste_groupe_sectoriels.edit',[$liste_groupe_sectoriel->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('liste_groupe_sectoriel_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.destroy', $liste_groupe_sectoriel->id])) !!}
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
        @can('liste_groupe_sectoriel_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.liste_groupe_sectoriels.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection