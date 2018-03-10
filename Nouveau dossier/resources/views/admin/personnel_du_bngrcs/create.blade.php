@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.personnel-du-bngrc.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.personnel_du_bngrcs.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('photo', trans('quickadmin.personnel-du-bngrc.fields.photo').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('photo', old('photo')) !!}
                    {!! Form::file('photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('photo_max_size', 5) !!}
                    {!! Form::hidden('photo_max_width', 4096) !!}
                    {!! Form::hidden('photo_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo'))
                        <p class="help-block">
                            {{ $errors->first('photo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('fonction', trans('quickadmin.personnel-du-bngrc.fields.fonction').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('fonction', old('fonction'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('fonction'))
                        <p class="help-block">
                            {{ $errors->first('fonction') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nom_prenom', trans('quickadmin.personnel-du-bngrc.fields.nom-prenom').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('nom_prenom', old('nom_prenom'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nom_prenom'))
                        <p class="help-block">
                            {{ $errors->first('nom_prenom') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tel', trans('quickadmin.personnel-du-bngrc.fields.tel').'', ['class' => 'control-label']) !!}
                    {!! Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tel'))
                        <p class="help-block">
                            {{ $errors->first('tel') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tel2', trans('quickadmin.personnel-du-bngrc.fields.tel2').'', ['class' => 'control-label']) !!}
                    {!! Form::text('tel2', old('tel2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tel2'))
                        <p class="help-block">
                            {{ $errors->first('tel2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.personnel-du-bngrc.fields.email').'', ['class' => 'control-label']) !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('adresse', trans('quickadmin.personnel-du-bngrc.fields.adresse').'', ['class' => 'control-label']) !!}
                    {!! Form::text('adresse', old('adresse'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('adresse'))
                        <p class="help-block">
                            {{ $errors->first('adresse') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('competence_formation', trans('quickadmin.personnel-du-bngrc.fields.competence-formation').'', ['class' => 'control-label']) !!}
                    {!! Form::select('competence_formation[]', $competence_formations, old('competence_formation'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('competence_formation'))
                        <p class="help-block">
                            {{ $errors->first('competence_formation') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('capacites', trans('quickadmin.personnel-du-bngrc.fields.capacites').'', ['class' => 'control-label']) !!}
                    {!! Form::select('capacites[]', $capacites, old('capacites'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('capacites'))
                        <p class="help-block">
                            {{ $errors->first('capacites') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date_embauche', trans('quickadmin.personnel-du-bngrc.fields.date-embauche').'', ['class' => 'control-label']) !!}
                    {!! Form::text('date_embauche', old('date_embauche'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_embauche'))
                        <p class="help-block">
                            {{ $errors->first('date_embauche') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('latitude', trans('quickadmin.personnel-du-bngrc.fields.latitude').'', ['class' => 'control-label']) !!}
                    {!! Form::text('latitude', old('latitude'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('latitude'))
                        <p class="help-block">
                            {{ $errors->first('latitude') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('longitude', trans('quickadmin.personnel-du-bngrc.fields.longitude').'', ['class' => 'control-label']) !!}
                    {!! Form::text('longitude', old('longitude'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('longitude'))
                        <p class="help-block">
                            {{ $errors->first('longitude') }}
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
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop