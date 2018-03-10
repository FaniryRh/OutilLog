@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.type-tache.title')</h3>
    
    {!! Form::model($type_tache, ['method' => 'PUT', 'route' => ['admin.type_taches.update', $type_tache->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nom', trans('quickadmin.type-tache.fields.nom').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('nom', old('nom'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nom'))
                        <p class="help-block">
                            {{ $errors->first('nom') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

