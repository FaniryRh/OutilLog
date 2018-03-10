@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.reunion.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.reunion.fields.objet')</th>
                            <td field-key='objet'>{{ $reunion->objet }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reunion.fields.date')</th>
                            <td field-key='date'>{{ $reunion->date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reunion.fields.personnel')</th>
                            <td field-key='personnel'>{{ $reunion->personnel->nom_prenom or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reunion.fields.organisme-id')</th>
                            <td field-key='organisme_id'>
                                @foreach ($reunion->organisme_id as $singleOrganismeId)
                                    <span class="label label-info label-many">{{ $singleOrganismeId->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reunion.fields.description')</th>
                            <td field-key='description'>{!! $reunion->description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reunion.fields.participant-bngrc')</th>
                            <td field-key='participant_bngrc'>
                                @foreach ($reunion->participant_bngrc as $singleParticipantBngrc)
                                    <span class="label label-info label-many">{{ $singleParticipantBngrc->nom_prenom }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reunion.fields.rapport')</th>
                            <td field-key='rapport'>@if($reunion->rapport)<a href="{{ asset(env('UPLOAD_PATH').'/' . $reunion->rapport) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.reunions.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
