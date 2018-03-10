<?php $__env->startSection('content'); ?>
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
echo $b;
echo $c;
echo $d;

    ?>
    	
    </div>


  		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>