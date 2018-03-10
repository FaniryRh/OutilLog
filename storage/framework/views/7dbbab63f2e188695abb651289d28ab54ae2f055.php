<?php $__env->startSection('content'); ?>

<style>
        #map-canvas{
            width: 800px;
            height: 580px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.inventaire.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?>
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.date'); ?></th>
                            <td field-key='date'><?php echo e($inventaire->date); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.mission'); ?></th>
                            <td field-key='mission'><?php echo e(isset($inventaire->mission->objet) ? $inventaire->mission->objet : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.stock'); ?></th>
                            <td field-key='stock'><?php echo e(isset($inventaire->stock->designation) ? $inventaire->stock->designation : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.quantite'); ?></th>
                            <td field-key='quantite'><?php echo e($inventaire->quantite); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.unite'); ?></th>
                            <td field-key='unite'><?php echo e($inventaire->unite); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.asset'); ?></th>
                            <td field-key='asset'><?php echo e(isset($inventaire->asset->title) ? $inventaire->asset->title : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.nombre'); ?></th>
                            <td field-key='nombre'><?php echo e($inventaire->nombre); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.responsable-id'); ?></th>
                            <td field-key='responsable_id'>
                                <?php $__currentLoopData = $inventaire->responsable_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleResponsableId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singleResponsableId->nom_prenom); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.destination'); ?></th>
                            <td field-key='destination'><?php echo e($inventaire->destination); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.latitude'); ?></th>
                            <td field-key='latitude'><?php echo e($inventaire->latitude); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.longitude'); ?></th>
                            <td field-key='longitude'><?php echo e($inventaire->longitude); ?></td>
                        </tr>
                    </table>
                </div>
                <div id="map-canvas" class="box box-warning"></div></br>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.inventaires.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
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
            return "<?php echo e(url('/icon/placeholder.png')); ?>";

        }

        var iconBase = icon_img();





        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3>'+'<?php echo e(isset($inventaire->mission->objet) ? $inventaire->mission->objet : ''); ?>'+'</h3>'+
      '<div id="bodyContent">'+
      '<p><strong>Stock : </strong><h style="color:blue;"> '+'<?php echo e(isset($inventaire->stock->designation) ? $inventaire->stock->designation : ''); ?>(<?php echo e($inventaire->quantite); ?> <?php echo e($inventaire->unite); ?> )'+'</h></p>'+
      '<p><strong>Matériel: </strong><h style="color:red;"> '+'<?php echo e(isset($inventaire->asset->title) ? $inventaire->asset->title : ''); ?>'+'</h></p>'+
      
      '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
            
            
            
        

        var marker = new google.maps.Marker({
            position:{
                lat: <?php echo e($inventaire->latitude); ?>,
                lng:  <?php echo e($inventaire->longitude); ?>

            },
            map: map,
            draggable:false,
            icon: iconBase
            

        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>