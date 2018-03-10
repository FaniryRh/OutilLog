@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.chef-de-region.title')</h3>
    
    {!! Form::model($chef_de_region, ['method' => 'PUT', 'route' => ['admin.chef_de_regions.update', $chef_de_region->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('province_id', trans('quickadmin.chef-de-region.fields.province').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('region_id', trans('quickadmin.chef-de-region.fields.region').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('nom_prenom', trans('quickadmin.chef-de-region.fields.nom-prenom').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('tel', trans('quickadmin.chef-de-region.fields.tel').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
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
                    {!! Form::label('tel2', trans('quickadmin.chef-de-region.fields.tel2').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('email', trans('quickadmin.chef-de-region.fields.email').'', ['class' => 'control-label']) !!}
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

