@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.sortie.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.sorties.store']]) !!}

    <div class="panel panel-primary">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('parsonnel_id', trans('quickadmin.sortie.fields.parsonnel').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('parsonnel_id', $parsonnels, old('parsonnel_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('parsonnel_id'))
                        <p class="help-block">
                            {{ $errors->first('parsonnel_id') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('stock_id', trans('quickadmin.sortie.fields.stock').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('stock_id', $stocks, old('stock_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('stock_id'))
                        <p class="help-block">
                            {{ $errors->first('stock_id') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('quantite', trans('quickadmin.sortie.fields.quantite').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('quantite', old('quantite'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quantite'))
                        <p class="help-block">
                            {{ $errors->first('quantite') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('unite', trans('quickadmin.sortie.fields.unite').'', ['class' => 'control-label']) !!}
                    {!! Form::text('unite', old('unite'), ['class' => 'form-control', 'placeholder' => '', 'readonly']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('unite'))
                        <p class="help-block">
                            {{ $errors->first('unite') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                

                <div class="col-xs-6 form-group">
                    {!! Form::label('mission_id', trans('quickadmin.sortie.fields.mission').'', ['class' => 'control-label']) !!}
                    {!! Form::select('mission_id', $missions, old('mission_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mission_id'))
                        <p class="help-block">
                            {{ $errors->first('mission_id') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('date', trans('quickadmin.sortie.fields.date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('date', old('date'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date'))
                        <p class="help-block">
                            {{ $errors->first('date') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('dateheurfin', trans('quickadmin.sortie.fields.dateheurfin').'', ['class' => 'control-label']) !!}
                    {!! Form::text('dateheurfin', old('dateheurfin'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dateheurfin'))
                        <p class="help-block">
                            {{ $errors->first('dateheurfin') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('statut_id', trans('quickadmin.sortie.fields.statut').'', ['class' => 'control-label']) !!}
                    {!! Form::select('statut_id', $statuts, old('statut_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('statut_id'))
                        <p class="help-block">
                            {{ $errors->first('statut_id') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('reponsable_sortie', trans('quickadmin.sortie.fields.reponsable-sortie').'', ['class' => 'control-label']) !!}
                    {!! Form::text('reponsable_sortie', old('reponsable_sortie'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('reponsable_sortie'))
                        <p class="help-block">
                            {{ $errors->first('reponsable_sortie') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 form-group">
                    {!! Form::label('motif', trans('quickadmin.sortie.fields.motif').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('motif', old('motif'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('motif'))
                        <p class="help-block">
                            {{ $errors->first('motif') }}
                        </p>
                    @endif
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('location_address', trans('quickadmin.sortie.fields.location').'', ['class' => 'control-label']) !!}
                    {!! Form::text('location_address', old('location_address'), ['class' => 'form-control map-input', 'id' => 'location-input']) !!}
                    {!! Form::hidden('location_latitude', 0 , ['id' => 'location-latitude']) !!}
                    {!! Form::hidden('location_longitude', 0 , ['id' => 'location-longitude']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('location'))
                        <p class="help-block">
                            {{ $errors->first('location') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div id="location-map-container" style="width:100%;height:200px; ">
                <div style="width: 100%; height: 100%" id="location-map"></div>
            </div>
            @if(!env('GOOGLE_MAPS_API_KEY'))
                <b>'GOOGLE_MAPS_API_KEY' is not set in the .env</b>
            @endif
            
            
        </div>
    </div>

    <a href="{{ route('admin.sorties.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
   <script src="/adminlte/js/mapInput.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
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