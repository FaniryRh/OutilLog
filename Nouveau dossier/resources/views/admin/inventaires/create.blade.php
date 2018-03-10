@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.inventaire.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.inventaires.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date', trans('quickadmin.inventaire.fields.date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('date', old('date'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
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
                    {!! Form::label('mission_id', trans('quickadmin.inventaire.fields.mission').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('mission_id', $missions, old('mission_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mission_id'))
                        <p class="help-block">
                            {{ $errors->first('mission_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('stock_id', trans('quickadmin.inventaire.fields.stock').'', ['class' => 'control-label']) !!}
                    {!! Form::select('stock_id', $stocks, old('stock_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('stock_id'))
                        <p class="help-block">
                            {{ $errors->first('stock_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('quantite', trans('quickadmin.inventaire.fields.quantite').'', ['class' => 'control-label']) !!}
                    {!! Form::text('quantite', old('quantite'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quantite'))
                        <p class="help-block">
                            {{ $errors->first('quantite') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('unite', trans('quickadmin.inventaire.fields.unite').'', ['class' => 'control-label']) !!}
                    {!! Form::text('unite', old('unite'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('unite'))
                        <p class="help-block">
                            {{ $errors->first('unite') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('materiel_id', trans('quickadmin.inventaire.fields.materiel-id').'', ['class' => 'control-label']) !!}
                    {!! Form::select('materiel_id[]', $materiel_ids, old('materiel_id'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('materiel_id'))
                        <p class="help-block">
                            {{ $errors->first('materiel_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('responsable_id', trans('quickadmin.inventaire.fields.responsable-id').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('responsable_id[]', $responsable_ids, old('responsable_id'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('responsable_id'))
                        <p class="help-block">
                            {{ $errors->first('responsable_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('destination', trans('quickadmin.inventaire.fields.destination').'', ['class' => 'control-label']) !!}
                    {!! Form::text('destination', old('destination'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('destination'))
                        <p class="help-block">
                            {{ $errors->first('destination') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('latitude', trans('quickadmin.inventaire.fields.latitude').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('longitude', trans('quickadmin.inventaire.fields.longitude').'', ['class' => 'control-label']) !!}
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