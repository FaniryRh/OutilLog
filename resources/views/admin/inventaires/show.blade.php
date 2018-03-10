@extends('layouts.app')

@section('content')

 <style>
        #map-canvas{
            width: 800px;
            height: 580px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title">@lang('quickadmin.inventaire.title')</h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            {{ $inventaire->mission->objet or '' }}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.date')</th>
                            <td field-key='date'>{{ $inventaire->date }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.mission')</th>
                            <td field-key='mission'>{{ $inventaire->mission->objet or '' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.stock')</th>
                            <td field-key='stock'>{{ $inventaire->stock->designation or '' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.quantite')</th>
                            <td field-key='quantite'>{{ $inventaire->quantite }} {{ $inventaire->unite }}</td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.unite')</th>
                            <td field-key='unite'>{{ $inventaire->unite }}</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.materiel-id')</th>
                            <td field-key='materiel_id'>
                                @foreach ($inventaire->materiel_id as $singleMaterielId)
                                    <span class="label label-info label-many">{{ $singleMaterielId->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.responsable-id')</th>
                            <td field-key='responsable_id'>
                                @foreach ($inventaire->responsable_id as $singleResponsableId)
                                    <span class="label label-info label-many">{{ $singleResponsableId->nom_prenom }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.destination')</th>
                            <td field-key='destination'>{{ $inventaire->destination }}</td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.latitude')</th>
                            <td field-key='latitude'>{{ $inventaire->latitude }}</td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;">@lang('quickadmin.inventaire.fields.longitude')</th>
                            <td field-key='longitude'>{{ $inventaire->longitude }}</td>
                        </tr>
                    </table>
                </div>
                <div id="map-canvas" class="box box-warning"></div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.inventaires.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
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
      '<h2>'+'{{ $inventaire->objet }}'+'</h3>'+
            
      '</div>'+
      '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
            
            
            
        

        var marker = new google.maps.Marker({
            position:{
                lat: {{ $inventaire->latitude }},
                lng:  {{ $inventaire->longitude }}
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
