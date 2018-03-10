@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.tasks.title')</h3>
    @can('task_create')
    <p>
        <a href="{{ route('admin.tasks.create') }}" class="btn btn-success fa fa-plus"> Nouvelle Tâche</a>
        <a href="{{ route('admin.task_calendars.index') }}" class="btn btn-default fa fa-calendar"> Calendrier</a>
        
    </p>
    @endcan
        

    <div class="panel panel-primary">
        <div class="panel-heading">
            Liste des Tâches
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($tasks) > 0 ? 'datatable' : '' }} @can('task_delete') dt-select @endcan">
                <thead style="background-color: orange;">
                    <tr>
                        @can('task_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.tasks.fields.type')</th>
                        <th>@lang('quickadmin.tasks.fields.mission')</th>
                        <th>@lang('quickadmin.tasks.fields.name')</th>
                        <th>@lang('quickadmin.tasks.fields.description')</th>
                        <th>@lang('quickadmin.tasks.fields.status')</th>
                        <th>@lang('quickadmin.tasks.fields.attachment')</th>
                        <th>Date d'échéance</th>
                        <th>@lang('quickadmin.tasks.fields.heur')</th>
                        <th>@lang('quickadmin.tasks.fields.user')</th>
                        <!-- <th>@lang('quickadmin.tasks.fields.participant')</th>
                        <th>@lang('quickadmin.tasks.fields.organisme')</th> -->
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($tasks) > 0)
                        @foreach ($tasks as $task)
                            <tr data-entry-id="{{ $task->id }}">
                                @can('task_delete')
                                <?php if($task->status_id != 3 ){ ?>
                                
                                    <td></td>
                                
                                <?php }else{


                                    ?> <td style="visibility: hidden;"></td><?php
                                }




                                 ?>
                                 @endcan



                                <td field-key='type'>{{ $task->type->nom or '' }}</td>
                                <td field-key='mission'><a <?php if($task->mission){ ?> href="{{ route('admin.missions.show',[$task->mission->id]) }}"  <?php } ?> >{{ $task->mission->objet or '-' }}</a></td>
                                <td field-key='name' style="background-color: #ffeecc; font-weight: bold;">{{ $task->name }}</td>
                                <td field-key='description'>{!! $task->description !!}</td>
                                <td field-key='status'>{{ $task->status->name or '' }}</td>
                                <td field-key='attachment'>@if($task->attachment)<a href="{{ asset(env('UPLOAD_PATH').'/' . $task->attachment) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='due_date' style="font-weight: bold;">{{ $task->due_date }}</td>
                                <td field-key='heur'>{{ $task->heur }}</td>
                                <td field-key='user'>{{ $task->user->nom_prenom or '' }}</td>
                                <!-- <td field-key='participant'>
                                    @foreach ($task->participant as $singleParticipant)
                                        <span class="label label-info label-many">{{ $singleParticipant->nom_prenom }}</span>
                                    @endforeach
                                </td>
                                <td field-key='organisme'>
                                    @foreach ($task->organisme as $singleOrganisme)
                                        <span class="label label-info label-many">{{ $singleOrganisme->name }}</span>
                                    @endforeach
                                </td> -->
                                                                <td>
                                    @can('task_view')
                                    <a href="{{ route('admin.tasks.show',[$task->id]) }}" class="btn btn-xs btn-primary fa fa-eye"> @lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('task_edit')
                                    <a href="{{ route('admin.tasks.edit',[$task->id]) }}" class="btn btn-xs btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    <?php if($task->status_id != 3){ ?>

                                        

                                    @can('task_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan

                                        

                                    <?php } ?>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="16">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('task_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.tasks.mass_destroy') }}';
        @endcan

    </script>
@endsection