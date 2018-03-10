@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.liste-des-prefets.title')</h3>
    
    {!! Form::model($liste_des_prefet, ['method' => 'PUT', 'route' => ['admin.liste_des_prefets.update', $liste_des_prefet->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('province_id', trans('quickadmin.liste-des-prefets.fields.province').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('province_id', $provinces, old('province_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('province_id'))
                        <p class="help-block">
                            {{ $errors->first('province_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('region_id', trans('quickadmin.liste-des-prefets.fields.region').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('region_id', $regions, old('region_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('region_id'))
                        <p class="help-block">
                            {{ $errors->first('region_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('prefecture_id', trans('quickadmin.liste-des-prefets.fields.prefecture').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('prefecture_id', $prefectures, old('prefecture_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('prefecture_id'))
                        <p class="help-block">
                            {{ $errors->first('prefecture_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nom_prenom', trans('quickadmin.liste-des-prefets.fields.nom-prenom').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('tel1', trans('quickadmin.liste-des-prefets.fields.tel1').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('tel1', old('tel1'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tel1'))
                        <p class="help-block">
                            {{ $errors->first('tel1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tel2', trans('quickadmin.liste-des-prefets.fields.tel2').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('email', trans('quickadmin.liste-des-prefets.fields.email').'', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

