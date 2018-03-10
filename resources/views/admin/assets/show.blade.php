@extends('layouts.app')

@section('content')
<style>
        #map-canvas{
            width: 600px;
            height: 580px;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title">@lang('quickadmin.assets.title')</h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- @lang('quickadmin.qa_view') -->{{ $asset->title }}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.assets.fields.category')</th>
                            <td field-key='category'>{{ $asset->category->title or '' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.assets.fields.serial-number')</th>
                            <td field-key='serial_number'>{{ $asset->serial_number }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.assets.fields.title')</th>
                            <td field-key='title'>{{ $asset->title }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Photo</th>
                            <td field-key='photo1'>@if($asset->photo1)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1) }}"/></a>@endif @if($asset->photo2)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2) }}"/></a>@endif @if($asset->photo3)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo3) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3) }}"/></a>@endif</td>
                        </tr>
                        
                        
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Date d'acquisition</th>
                            <td field-key='date_acquisition'>{{ $asset->date_acquisition }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.assets.fields.quantite-stock')</th>
                            <td field-key='quantite_stock'>{{ $asset->quantite_stock }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.assets.fields.status')</th>
                            <td field-key='status'>{{ $asset->status->title or '' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.assets.fields.location')</th>
                            <td field-key='location'>{{ $asset->location->title or '' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.assets.fields.assigned-user')</th>
                            <td field-key='assigned_user'><a href="{{ route('admin.personnel_du_bngrcs.show',[$asset->assigned_user->id]) }}">{{ $asset->assigned_user->nom_prenom or '' }}</a></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.assets.fields.notes')</th>
                            <td field-key='notes'>{!! $asset->notes !!}</td>
                        </tr>
                        <tr style="display: none;">
                            <th>@lang('quickadmin.assets.fields.latitude')</th>
                            <td field-key='latitude'>{{ $asset->latitude }}</td>
                        </tr>
                        <tr style="display: none;">
                            <th>@lang('quickadmin.assets.fields.longitude')</th>
                            <td field-key='longitude'>{{ $asset->longitude }}</td>
                        </tr>
                    </table>
                </div>
                <div id="map-canvas" class="box box-warning"></div></br>
            </div><!-- Nav tabs -->


            <p>&nbsp;</p>

            <a href="{{ route('admin.assets.index') }}" class="btn btn-default fa fa-arrow-circle-left"> @lang('quickadmin.qa_back_to_list')</a>

            
            @can('asset_edit')
                                    <a href="{{ route('admin.assets.edit',[$asset->id]) }}" class="btn btn-info fa fa-edit"> @lang('quickadmin.qa_edit')</a>
                                    @endcan
        </div>
    </div>

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





        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2>'+'{{ $asset->title }}'+'</h3>'+
            
      '</div>'+
      '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
            
            
            
        

        var marker = new google.maps.Marker({
            position:{
                lat: {{ $asset->latitude }},
                lng:  {{ $asset->longitude }}
            },
            map: map,
            draggable:false,
            icon: iconBase,

        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        


    </script>
@stop
