@extends('layouts.app')

@section('content')

<style>
        #map-canvas{

            height: 400px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title">@lang('quickadmin.inventaire.title')</h3>
    
    {!! Form::model($inventaire, ['method' => 'PUT', 'route' => ['admin.inventaires.update', $inventaire->id]]) !!}

    <div class="panel panel-primary">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('date', trans('quickadmin.inventaire.fields.date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('date', old('date'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date'))
                        <p class="help-block">
                            {{ $errors->first('date') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
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
                <div class="col-xs-6 form-group">
                    {!! Form::label('stock_id', trans('quickadmin.inventaire.fields.stock').'', ['class' => 'control-label']) !!}
                    {!! Form::select('stock_id', $stocks, old('stock_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('stock_id'))
                        <p class="help-block">
                            {{ $errors->first('stock_id') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
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
                <div class="col-xs-6 form-group">
                    {!! Form::label('unite', trans('quickadmin.inventaire.fields.unite').'', ['class' => 'control-label']) !!}
                    {!! Form::text('unite', old('unite'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('unite'))
                        <p class="help-block">
                            {{ $errors->first('unite') }}
                        </p>
                    @endif
                </div>

                 <div class="col-xs-6 form-group">
                    {!! Form::label('materiel_id', trans('quickadmin.inventaire.fields.materiel-id').'', ['class' => 'control-label']) !!}
                    {!! Form::select('materiel_id[]', $materiel_ids, old('materiel_id') ? old('materiel_id') : $inventaire->materiel_id->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('materiel_id'))
                        <p class="help-block">
                            {{ $errors->first('materiel_id') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('responsable_id', trans('quickadmin.inventaire.fields.responsable-id').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('responsable_id[]', $responsable_ids, old('responsable_id') ? old('responsable_id') : $inventaire->responsable_id->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('responsable_id'))
                        <p class="help-block">
                            {{ $errors->first('responsable_id') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
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

            <input type="text" id="searchmap" ></input>

            <div id="map-canvas"></div>

            <div class="row" style="display: none;">
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


    <script>
        
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: -18.915647,
                lng:  47.540394
            },
            zoom:6

        });

         function icon_img(){
            return "{{url('/icon/placeholder.png')}}";

        }

        var iconBase = icon_img();

        var marker = new google.maps.Marker({
            position:{
                lat: {{ $inventaire->latitude }},
                lng:  {{ $inventaire->longitude }}
            },
            map: map,
            draggable:true,
            icon: iconBase

        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

        google.maps.event.addListener(searchBox,'places_changed',function(){
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;

            for(i=0; place = places[i]; i++){
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }

            map.fitBounds(bounds);
            map.setZoom(10);


        });

        google.maps.event.addListener(marker, 'position_changed',function(){
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lng').val(lng);



        })


    </script>

@stop