@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.reunion.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.reunions.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('objet', trans('quickadmin.reunion.fields.objet').'', ['class' => 'control-label']) !!}
                    {!! Form::text('objet', old('objet'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('objet'))
                        <p class="help-block">
                            {{ $errors->first('objet') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date', trans('quickadmin.reunion.fields.date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('date', old('date'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date'))
                        <p class="help-block">
                            {{ $errors->first('date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('personnel_id', trans('quickadmin.reunion.fields.personnel').'', ['class' => 'control-label']) !!}
                    {!! Form::select('personnel_id', $personnels, old('personnel_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('personnel_id'))
                        <p class="help-block">
                            {{ $errors->first('personnel_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('organisme_id', trans('quickadmin.reunion.fields.organisme-id').'', ['class' => 'control-label']) !!}
                    {!! Form::select('organisme_id[]', $organisme_ids, old('organisme_id'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('organisme_id'))
                        <p class="help-block">
                            {{ $errors->first('organisme_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', trans('quickadmin.reunion.fields.description').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('participant_bngrc', trans('quickadmin.reunion.fields.participant-bngrc').'', ['class' => 'control-label']) !!}
                    {!! Form::select('participant_bngrc[]', $participant_bngrcs, old('participant_bngrc'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('participant_bngrc'))
                        <p class="help-block">
                            {{ $errors->first('participant_bngrc') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rapport', trans('quickadmin.reunion.fields.rapport').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('rapport', old('rapport')) !!}
                    {!! Form::file('rapport', ['class' => 'form-control']) !!}
                    {!! Form::hidden('rapport_max_size', 10) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rapport'))
                        <p class="help-block">
                            {{ $errors->first('rapport') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "HH:mm:ss"
        });
    </script>

@stop