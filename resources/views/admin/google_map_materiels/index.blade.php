@extends('layouts.app')

@section('content')

    <style>
        #map-canvas{
            width: 100%;
            height: 650px;
        }
    </style>


    <div class="panel panel-primary">
  		<div class="panel-heading">

  		Localisation

  		</div>

  		<div class="panel-body"> 

  	<div id="map_canvas" style="width:auto;height:800px">

<?php 
echo $a;
echo $c;
echo $d;

    ?>
    	
    </div>


  		</div>
	</div>
@stop