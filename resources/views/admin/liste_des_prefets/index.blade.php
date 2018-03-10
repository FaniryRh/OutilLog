@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.liste-des-prefets.title')</h3>
    @can('liste_des_prefet_create')
    <p>
        <a href="{{ route('admin.liste_des_prefets.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('liste_des_prefet_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.liste_des_prefets.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.liste_des_prefets.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($liste_des_prefets) > 0 ? 'datatable' : '' }} @can('liste_des_prefet_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('liste_des_prefet_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.liste-des-prefets.fields.province')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.region')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.prefecture')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.tel1')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.tel2')</th>
                        <th>@lang('quickadmin.liste-des-prefets.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($liste_des_prefets) > 0)
                        @foreach ($liste_des_prefets as $liste_des_prefet)
                            <tr data-entry-id="{{ $liste_des_prefet->id }}">
                                @can('liste_des_prefet_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='province'>{{ $liste_des_prefet->province->name or '' }}</td>
                                <td field-key='region'>{{ $liste_des_prefet->region->name or '' }}</td>
                                <td field-key='prefecture'>{{ $liste_des_prefet->prefecture->name or '' }}</td>
                                <td field-key='nom_prenom'>{{ $liste_des_prefet->nom_prenom }}</td>
                                <td field-key='tel1'>{{ $liste_des_prefet->tel1 }}</td>
                                <td field-key='tel2'>{{ $liste_des_prefet->tel2 }}</td>
                                <td field-key='email'>{{ $liste_des_prefet->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('liste_des_prefet_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_des_prefets.restore', $liste_des_prefet->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('liste_des_prefet_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_des_prefets.perma_del', $liste_des_prefet->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('liste_des_prefet_view')
                                    <a href="{{ route('admin.liste_des_prefets.show',[$liste_des_prefet->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('liste_des_prefet_edit')
                                    <a href="{{ route('admin.liste_des_prefets.edit',[$liste_des_prefet->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('liste_des_prefet_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_des_prefets.destroy', $liste_des_prefet->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
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
        @can('liste_des_prefet_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.liste_des_prefets.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection