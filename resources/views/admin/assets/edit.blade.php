@extends('layouts.app')

@section('content')

<style>
        #map-canvas{
            height: 200px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title">@lang('quickadmin.assets.title')</h3>
    
    {!! Form::model($asset, ['method' => 'PUT', 'route' => ['admin.assets.update', $asset->id], 'files' => true,]) !!}

    <div class="panel panel-primary">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('category_id', trans('quickadmin.assets.fields.category').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('category_id'))
                        <p class="help-block">
                            {{ $errors->first('category_id') }}
                        </p>
                    @endif
                </div>


                <div class="col-xs-6 form-group">
                    @if ($asset->photo1)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$asset->photo1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$asset->photo1) }}"></a>
                    @endif
                    {!! Form::label('photo1', trans('quickadmin.assets.fields.photo1').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('photo1', old('photo1')) !!}
                    {!! Form::file('photo1', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('photo1_max_size', 8) !!}
                    {!! Form::hidden('photo1_max_width', 6000) !!}
                    {!! Form::hidden('photo1_max_height', 6000) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo1'))
                        <p class="help-block">
                            {{ $errors->first('photo1') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('title', trans('quickadmin.assets.fields.title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    @if ($asset->photo2)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$asset->photo2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$asset->photo2) }}"></a>
                    @endif
                    {!! Form::label('photo2', trans('quickadmin.assets.fields.photo2').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('photo2', old('photo2')) !!}
                    {!! Form::file('photo2', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('photo2_max_size', 8) !!}
                    {!! Form::hidden('photo2_max_width', 6000) !!}
                    {!! Form::hidden('photo2_max_height', 6000) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo2'))
                        <p class="help-block">
                            {{ $errors->first('photo2') }}
                        </p>
                    @endif
                </div>

            </div>

            <div class="row">
                

                <div class="col-xs-6 form-group">
                    {!! Form::label('serial_number', trans('quickadmin.assets.fields.serial-number').'', ['class' => 'control-label']) !!}
                    {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('serial_number'))
                        <p class="help-block">
                            {{ $errors->first('serial_number') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    @if ($asset->photo3)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$asset->photo3) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$asset->photo3) }}"></a>
                    @endif
                    {!! Form::label('photo3', trans('quickadmin.assets.fields.photo3').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('photo3', old('photo3')) !!}
                    {!! Form::file('photo3', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('photo3_max_size', 8) !!}
                    {!! Form::hidden('photo3_max_width', 6000) !!}
                    {!! Form::hidden('photo3_max_height', 6000) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo3'))
                        <p class="help-block">
                            {{ $errors->first('photo3') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('date_acquisition', 'Date d\'acquisition', ['class' => 'control-label']) !!}
                    {!! Form::text('date_acquisition', old('date_acquisition'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_acquisition'))
                        <p class="help-block">
                            {{ $errors->first('date_acquisition') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('quantite_stock', trans('quickadmin.assets.fields.quantite-stock').'', ['class' => 'control-label']) !!}
                    {!! Form::number('quantite_stock', old('quantite_stock'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quantite_stock'))
                        <p class="help-block">
                            {{ $errors->first('quantite_stock') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('status_id', trans('quickadmin.assets.fields.status').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('status_id'))
                        <p class="help-block">
                            {{ $errors->first('status_id') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('location_id', trans('quickadmin.assets.fields.location').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('location_id', $locations, old('location_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('location_id'))
                        <p class="help-block">
                            {{ $errors->first('location_id') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('assigned_user_id', trans('quickadmin.assets.fields.assigned-user').'', ['class' => 'control-label']) !!}
                    {!! Form::select('assigned_user_id', $assigned_users, old('assigned_user_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('assigned_user_id'))
                        <p class="help-block">
                            {{ $errors->first('assigned_user_id') }}
                        </p>
                    @endif
                </div>

                
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notes', trans('quickadmin.assets.fields.notes').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('notes', old('notes'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notes'))
                        <p class="help-block">
                            {{ $errors->first('notes') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row" style="display: none;">

                <div class="col-xs-12 form-group">
                    {!! Form::label('latitude', trans('quickadmin.assets.fields.latitude').'', ['class' => 'control-label']) !!}
                    {!! Form::text('latitude', old('latitude'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('latitude'))
                        <p class="help-block">
                            {{ $errors->first('latitude') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-12 form-group">
                    {!! Form::label('longitude', trans('quickadmin.assets.fields.longitude').'', ['class' => 'control-label']) !!}
                    {!! Form::text('longitude', old('longitude'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('longitude'))
                        <p class="help-block">
                            {{ $errors->first('longitude') }}
                        </p>
                    @endif
                </div>
            </div>

            <input type="text" id="searchmap" ></input>

            <div id="map-canvas" class="col-xs-12 " ></div>
            
        </div>
    </div>

    <a href="{{ route('admin.assets.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>

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



        function icon_img(){
return "{{url('/icon/placeholder.png')}}";
        }

        var iconBase = icon_img();
        
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: -18.915647,
                lng:  47.540394
            },
            zoom:6

        });

        var marker = new google.maps.Marker({
            position:{
                lat: {{ $asset->latitude }},
                lng:  {{ $asset->longitude }}
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