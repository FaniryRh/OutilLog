@extends('layouts.app')

@section('content')
    <!-- <h3 class="page-title">@lang('quickadmin.tasks.title')</h3> -->

    <div class="panel panel-primary">
        <div class="panel-heading">
            {{ $task->name }}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.type')</th>
                            <td field-key='type'>{{ $task->type->nom or '' }}</td>
                        </tr>

                        <?php if ($task->mission != null){?> 
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.mission')</th>
                            <td field-key='mission'><a href="{{ route('admin.missions.show',[$task->mission->id]) }}"  > {{ $task->mission->objet or '' }}</a></td>
                        </tr>
                        <?php } ?>

                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.name')</th>
                            <td field-key='name'>{{ $task->name }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.description')</th>
                            <td field-key='description'>{!! $task->description !!}</td>
                        </tr>
                        
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.attachment')</th>
                            <td field-key='attachment'>@if($task->attachment)<a href="{{ asset(env('UPLOAD_PATH').'/' . $task->attachment) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Date d'échéance</th>
                            <td field-key='due_date'>{{ $task->due_date }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.heur')</th>
                            <td field-key='heur'>{{ $task->heur }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.user')</th>
                            <td field-key='user'><a href="{{ route('admin.personnel_du_bngrcs.show',[$task->user->id]) }}">{{ $task->user->nom_prenom or '' }}</a></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.participant')</th>
                            <td field-key='participant'>
                                @foreach ($task->participant as $singleParticipant)
                                    <span class="label label-info label-many"><a style="color: white;" href="{{ route('admin.personnel_du_bngrcs.show',[$singleParticipant->id]) }}">{{ $singleParticipant->nom_prenom }}</a></span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.organisme')</th>
                            <td field-key='organisme'>
                                @foreach ($task->organisme as $singleOrganisme)
                                    <span class="label label-info label-many"><a style="color: white;" href="{{ route('admin.contact_companies.show',[$singleOrganisme->id]) }}">{{ $singleOrganisme->name }}</a></span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.tasks.fields.status')</th>
                            <td field-key='status'>{{ $task->status->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

                <a href="{{ route('admin.tasks.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>

            @can('task_edit')
                <a href="{{ route('admin.tasks.edit',[$task->id]) }}" class="btn btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
            @endcan
            @can('task_calendar_access')
                <a href="{{ route('admin.task_calendars.index') }}" class="btn btn-default fa fa-calendar"> Calendrier</a>
            @endcan
        </div>
    </div>
@stop
