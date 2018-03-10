@extends('layouts.app')

@section('content')

<style>
        #map-canvas{

            height: 400px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title">@lang('quickadmin.missions.title')</h3>
    
    {!! Form::model($mission, ['method' => 'PUT', 'route' => ['admin.missions.update', $mission->id], 'files' => true,]) !!}

    <div class="panel panel-primary">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('objet', trans('quickadmin.missions.fields.objet').'', ['class' => 'control-label']) !!}
                    {!! Form::text('objet', old('objet'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('objet'))
                        <p class="help-block">
                            {{ $errors->first('objet') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('location', trans('quickadmin.missions.fields.location').'', ['class' => 'control-label']) !!}
                    {!! Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('location'))
                        <p class="help-block">
                            {{ $errors->first('location') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('date_deb', trans('quickadmin.missions.fields.date-deb').'', ['class' => 'control-label']) !!}
                    {!! Form::text('date_deb', old('date_deb'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_deb'))
                        <p class="help-block">
                            {{ $errors->first('date_deb') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('date_fin', trans('quickadmin.missions.fields.date-fin').'', ['class' => 'control-label']) !!}
                    {!! Form::text('date_fin', old('date_fin'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_fin'))
                        <p class="help-block">
                            {{ $errors->first('date_fin') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('piece_jointe', trans('quickadmin.missions.fields.piece-jointe').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('piece_jointe', old('piece_jointe')) !!}
                    @if ($mission->piece_jointe)
                        <a href="{{ asset(env('UPLOAD_PATH').'/' . $mission->piece_jointe) }}" target="_blank">Download file</a>
                    @endif
                    {!! Form::file('piece_jointe', ['class' => 'form-control']) !!}
                    {!! Form::hidden('piece_jointe_max_size', 10) !!}
                    <p class="help-block"></p>
                    @if($errors->has('piece_jointe'))
                        <p class="help-block">
                            {{ $errors->first('piece_jointe') }}
                        </p>
                    @endif
                </div>

                
                <div class="col-xs-6 form-group">
                    @if ($mission->itineraire)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$mission->itineraire) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$mission->itineraire) }}"></a>
                    @endif
                    {!! Form::label('itineraire', trans('quickadmin.missions.fields.itineraire').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('itineraire', old('itineraire')) !!}
                    {!! Form::file('itineraire', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('itineraire_max_size', 10) !!}
                    {!! Form::hidden('itineraire_max_width', 4096) !!}
                    {!! Form::hidden('itineraire_max_height', 4096) !!}
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
                    {!! Form::label('personnel_id', trans('quickadmin.missions.fields.personnel-id').'', ['class' => 'control-label']) !!}
                    {!! Form::select('personnel_id[]', $personnel_ids, old('personnel_id') ? old('personnel_id') : $mission->personnel_id->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('personnel_id'))
                        <p class="help-block">
                            {{ $errors->first('personnel_id') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('progression', trans('quickadmin.missions.fields.progression').'', ['class' => 'control-label']) !!}
                    {!! Form::text('progression', old('progression'), ['class' => 'form-control', 'placeholder' => '', 'readonly']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('progression'))
                        <p class="help-block">
                            {{ $errors->first('progression') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                

                <div class="col-xs-6 form-group">
                    {!! Form::label('stat_id', trans('quickadmin.missions.fields.stat').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('stat_id', $stats, old('stat_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('stat_id'))
                        <p class="help-block">
                            {{ $errors->first('stat_id') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('description', trans('quickadmin.missions.fields.description').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row" style="display: none;">
                <div class="col-xs-6 form-group">
                    {!! Form::label('latitude', trans('quickadmin.missions.fields.latitude').'', ['class' => 'control-label']) !!}
                    {!! Form::text('latitude', old('latitude'), [ 'id' => 'lat','class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('latitude'))
                        <p class="help-block">
                            {{ $errors->first('latitude') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('longitude', trans('quickadmin.missions.fields.longitude').'', ['class' => 'control-label']) !!}
                    {!! Form::text('longitude', old('longitude'), ['id' => 'lng','class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('longitude'))
                        <p class="help-block">
                            {{ $errors->first('longitude') }}
                        </p>
                    @endif
                </div>
            </div>
                        
        </div>

        <input type="text" id="searchmap" ></input>

            <div id="map-canvas" ></div>
    </div>
    <!-- <div class="panel panel-primary">
        <div class="panel-heading">
            Sortie
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.sortie.fields.quantite')</th>
                        <th>@lang('quickadmin.sortie.fields.unite')</th>
                        <th>@lang('quickadmin.sortie.fields.reponsable-sortie')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="sortie">
                    @forelse(old('sorties', []) as $index => $data)
                        @include('admin.missions.sorties_row', [
                            'index' => $index
                        ])
                    @empty
                        @foreach($mission->sortie as $item)
                            @include('admin.missions.sorties_row', [
                                'index' => 'id-' . $item->id,
                                'field' => $item
                            ])
                        @endforeach
                    @endforelse
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div> -->

    <a href="{{ route('admin.missions.index') }}" class="btn btn-default fa fa-arrow-circle-left">@lang('quickadmin.qa_back_to_list')</a>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script type="text/html" id="sortie-template">
        @include('admin.missions.sorties_row', [
            'index' => '_INDEX_'
        ])
    </script>
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
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

            <script>
        $('.add-new').click(function () {
            var tableBody = $(this).parent().find('tbody');
            var template = $('#' + tableBody.attr('id') + '-template').html();
            var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
            if (isNaN(lastIndex)) {
                lastIndex = 0;
            }
            tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
            return false;
        });
        $(document).on('click', '.remove', function () {
            var row = $(this).parentsUntil('tr').parent();
            row.remove();
            return false;
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
                lat: {{ $mission->latitude }},
                lng:  {{ $mission->longitude }}
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