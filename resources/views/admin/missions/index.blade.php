@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.missions.title')</h3>
    @can('mission_create')
    <p>
        <a href="{{ route('admin.missions.create') }}" class="btn btn-success fa fa-plus"><!-- @lang('quickadmin.qa_add_new') --> Nouvelle Mission</a>
        
    </p>
    @endcan

    @can('mission_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.missions.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.missions.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_list') -->Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($missions) > 0 ? 'datatable' : '' }} @can('mission_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead style="background-color: orange;">
                    <tr>
                        @can('mission_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                            @else <th style="text-align:center;"></th>
                            @endif
                        @endcan

                        <th>@lang('quickadmin.missions.fields.objet')</th>
                        <th>@lang('quickadmin.missions.fields.location')</th>
                        <th>@lang('quickadmin.missions.fields.date-deb')</th>
                        <th>@lang('quickadmin.missions.fields.date-fin')</th>
                        <!-- <th>@lang('quickadmin.missions.fields.personnel-id')</th> -->
                        <th>Progression</th>
                        <th>@lang('quickadmin.missions.fields.stat')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($missions) > 0)
                        @foreach ($missions as $mission)
                            <tr data-entry-id="{{ $mission->id }}">
                                @can('mission_delete')

                                <?php if($mission->progression == 0 ){ ?>

                                
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                

                                <?php }else{ ?> 
                                    
                                            <td style="visibility: hidden;"></td>
                                  
                                <?php } ?>

                                @endcan



                                <td field-key='objet' style="background-color: #ffeecc; font-weight: bold;">{{ $mission->objet }}</td>
                                <td field-key='location'>{{ $mission->location }}</td>
                                <td field-key='date_deb'>{{ $mission->date_deb }}</td>
                                <td field-key='date_fin'>{{ $mission->date_fin }}</td>
                                <!-- <td field-key='personnel_id'>
                                    @foreach ($mission->personnel_id as $singlePersonnelId)
                                        <span class="label label-info label-many">{{ $singlePersonnelId->nom_prenom }}</span>
                                    @endforeach
                                </td> -->
                                <td field-key='progression'><div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: {{ $mission->progression }}%">
                                <span class="sr-only">{{ $mission->progression }} %</span>
                            </div>
                        </div>{{ $mission->progression }}%</td>
                                <td field-key='stat'>{{ $mission->stat->name or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('mission_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.restore', $mission->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('mission_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.perma_del', $mission->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('mission_view')
                                    <a href="{{ route('admin.missions.show',[$mission->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('mission_edit')
                                    <a href="{{ route('admin.missions.edit',[$mission->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    <?php if($mission->progression == 0 ){ ?>

                                    @can('mission_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.destroy', $mission->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan

                                    <?php } ?>



                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="17">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('mission_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.missions.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection