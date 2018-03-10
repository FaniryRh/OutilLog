@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.om.title')</h3>
    
    {!! Form::model($om, ['method' => 'PUT', 'route' => ['admin.oms.update', $om->id], 'files' => true,]) !!}

    <div class="panel panel-primary">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('mission_id', trans('quickadmin.om.fields.mission').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('mission_id', $missions, old('mission_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mission_id'))
                        <p class="help-block">
                            {{ $errors->first('mission_id') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('ordonnee_a_id', trans('quickadmin.om.fields.ordonnee-a').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('ordonnee_a_id', $ordonnee_as, old('ordonnee_a_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ordonnee_a_id'))
                        <p class="help-block">
                            {{ $errors->first('ordonnee_a_id') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('destination', trans('quickadmin.om.fields.destination').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('destination', old('destination'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('destination'))
                        <p class="help-block">
                            {{ $errors->first('destination') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('itineraire', trans('quickadmin.om.fields.itineraire').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('itineraire', old('itineraire'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('itineraire'))
                        <p class="help-block">
                            {{ $errors->first('itineraire') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('depart', trans('quickadmin.om.fields.depart').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('depart', old('depart'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('depart'))
                        <p class="help-block">
                            {{ $errors->first('depart') }}
                        </p>
                    @endif
                </div>

                 <div class="col-xs-6 form-group">
                    {!! Form::label('duree', trans('quickadmin.om.fields.duree').'(Jour)'.'*', ['class' => 'control-label']) !!}
                    {!! Form::number('duree', old('duree'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('duree'))
                        <p class="help-block">
                            {{ $errors->first('duree') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('prise_en_charge', trans('quickadmin.om.fields.prise-en-charge').'', ['class' => 'control-label']) !!}
                    {!! Form::select('prise_en_charge[]', $prise_en_charges, old('prise_en_charge') ? old('prise_en_charge') : $om->prise_en_charge->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('prise_en_charge'))
                        <p class="help-block">
                            {{ $errors->first('prise_en_charge') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('fichier_om', trans('quickadmin.om.fields.fichier-om').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('fichier_om', old('fichier_om')) !!}
                    @if ($om->fichier_om)
                        <a href="{{ asset(env('UPLOAD_PATH').'/' . $om->fichier_om) }}" target="_blank">Download file</a>
                    @endif
                    {!! Form::file('fichier_om', ['class' => 'form-control']) !!}
                    {!! Form::hidden('fichier_om_max_size', 5) !!}
                    <p class="help-block"></p>
                    @if($errors->has('fichier_om'))
                        <p class="help-block">
                            {{ $errors->first('fichier_om') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('etat_id', trans('quickadmin.om.fields.etat').'', ['class' => 'control-label']) !!}
                    {!! Form::select('etat_id', $etats, old('etat_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('etat_id'))
                        <p class="help-block">
                            {{ $errors->first('etat_id') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('rapport_de_mission', trans('quickadmin.om.fields.rapport-de-mission').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('rapport_de_mission', old('rapport_de_mission')) !!}
                    @if ($om->rapport_de_mission)
                        <a href="{{ asset(env('UPLOAD_PATH').'/' . $om->rapport_de_mission) }}" target="_blank">Download file</a>
                    @endif
                    {!! Form::file('rapport_de_mission', ['class' => 'form-control']) !!}
                    {!! Form::hidden('rapport_de_mission_max_size', 5) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rapport_de_mission'))
                        <p class="help-block">
                            {{ $errors->first('rapport_de_mission') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('remise_rapport', trans('quickadmin.om.fields.remise-rapport').'', ['class' => 'control-label']) !!}
                    {!! Form::text('remise_rapport', old('remise_rapport'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('remise_rapport'))
                        <p class="help-block">
                            {{ $errors->first('remise_rapport') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('etat_rapport_de_mission_id', trans('quickadmin.om.fields.etat-rapport-de-mission').'', ['class' => 'control-label']) !!}
                    {!! Form::select('etat_rapport_de_mission_id', $etat_rapport_de_missions, old('etat_rapport_de_mission_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('etat_rapport_de_mission_id'))
                        <p class="help-block">
                            {{ $errors->first('etat_rapport_de_mission_id') }}
                        </p>
                    @endif
                </div>
            </div>

            
        </div>
    </div>

    <a href="{{ route('admin.oms.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
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