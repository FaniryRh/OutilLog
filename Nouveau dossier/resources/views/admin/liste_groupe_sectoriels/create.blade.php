@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.liste-groupe-sectoriel.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.liste_groupe_sectoriels.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('groupe_sectoriel_id', trans('quickadmin.liste-groupe-sectoriel.fields.groupe-sectoriel').'', ['class' => 'control-label']) !!}
                    {!! Form::select('groupe_sectoriel_id', $groupe_sectoriels, old('groupe_sectoriel_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('groupe_sectoriel_id'))
                        <p class="help-block">
                            {{ $errors->first('groupe_sectoriel_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nom_prenom', trans('quickadmin.liste-groupe-sectoriel.fields.nom-prenom').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('organisme_id', trans('quickadmin.liste-groupe-sectoriel.fields.organisme').'', ['class' => 'control-label']) !!}
                    {!! Form::select('organisme_id', $organismes, old('organisme_id'), ['class' => 'form-control select2']) !!}
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
                    {!! Form::label('fonction', trans('quickadmin.liste-groupe-sectoriel.fields.fonction').'', ['class' => 'control-label']) !!}
                    {!! Form::text('fonction', old('fonction'), ['class' => 'form-control', 'placeholder' => '']) !!}
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
                    {!! Form::label('tel', trans('quickadmin.liste-groupe-sectoriel.fields.tel').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('email', trans('quickadmin.liste-groupe-sectoriel.fields.email').'', ['class' => 'control-label']) !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
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

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

