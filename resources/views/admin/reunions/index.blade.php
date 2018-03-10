@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.reunion.title')</h3>
    @can('reunion_create')
    <p>
        <a href="{{ route('admin.reunions.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('reunion_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.reunions.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.reunions.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($reunions) > 0 ? 'datatable' : '' }} @can('reunion_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('reunion_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.reunion.fields.objet')</th>
                        <th>@lang('quickadmin.reunion.fields.date')</th>
                        <th>@lang('quickadmin.reunion.fields.personnel')</th>
                        <th>@lang('quickadmin.reunion.fields.organisme-id')</th>
                        <th>@lang('quickadmin.reunion.fields.participant-bngrc')</th>
                        <th>@lang('quickadmin.reunion.fields.rapport')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($reunions) > 0)
                        @foreach ($reunions as $reunion)
                            <tr data-entry-id="{{ $reunion->id }}">
                                @can('reunion_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='objet'>{{ $reunion->objet }}</td>
                                <td field-key='date'>{{ $reunion->date }}</td>
                                <td field-key='personnel'>{{ $reunion->personnel->nom_prenom or '' }}</td>
                                <td field-key='organisme_id'>
                                    @foreach ($reunion->organisme_id as $singleOrganismeId)
                                        <span class="label label-info label-many">{{ $singleOrganismeId->name }}</span>
                                    @endforeach
                                </td>
                                <td field-key='participant_bngrc'>
                                    @foreach ($reunion->participant_bngrc as $singleParticipantBngrc)
                                        <span class="label label-info label-many">{{ $singleParticipantBngrc->nom_prenom }}</span>
                                    @endforeach
                                </td>
                                <td field-key='rapport'>@if($reunion->rapport)<a href="{{ asset(env('UPLOAD_PATH').'/' . $reunion->rapport) }}" target="_blank">Download file</a>@endif</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('reunion_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.reunions.restore', $reunion->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('reunion_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.reunions.perma_del', $reunion->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('reunion_view')
                                    <a href="{{ route('admin.reunions.show',[$reunion->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('reunion_edit')
                                    <a href="{{ route('admin.reunions.edit',[$reunion->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('reunion_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.reunions.destroy', $reunion->id])) !!}
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
        @can('reunion_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.reunions.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection