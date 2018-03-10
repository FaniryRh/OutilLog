<?php $__env->startSection('content'); ?>
<style>
        #map-canvas{
            width: 600px;
            height: 580px;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.assets.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?> --><?php echo e($asset->title); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.category'); ?></th>
                            <td field-key='category'><?php echo e(isset($asset->category->title) ? $asset->category->title : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.serial-number'); ?></th>
                            <td field-key='serial_number'><?php echo e($asset->serial_number); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.title'); ?></th>
                            <td field-key='title'><?php echo e($asset->title); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Photo</th>
                            <td field-key='photo1'><?php if($asset->photo1): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo1)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1)); ?>"/></a><?php endif; ?> <?php if($asset->photo2): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo2)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2)); ?>"/></a><?php endif; ?> <?php if($asset->photo3): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo3)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3)); ?>"/></a><?php endif; ?></td>
                        </tr>
                        
                        
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Date d'acquisition</th>
                            <td field-key='date_acquisition'><?php echo e($asset->date_acquisition); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.quantite-stock'); ?></th>
                            <td field-key='quantite_stock'><?php echo e($asset->quantite_stock); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.status'); ?></th>
                            <td field-key='status'><?php echo e(isset($asset->status->title) ? $asset->status->title : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.location'); ?></th>
                            <td field-key='location'><?php echo e(isset($asset->location->title) ? $asset->location->title : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.assigned-user'); ?></th>
                            <td field-key='assigned_user'><a href="<?php echo e(route('admin.personnel_du_bngrcs.show',[$asset->assigned_user->id])); ?>"><?php echo e(isset($asset->assigned_user->nom_prenom) ? $asset->assigned_user->nom_prenom : ''); ?></a></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.notes'); ?></th>
                            <td field-key='notes'><?php echo $asset->notes; ?></td>
                        </tr>
                        <tr style="display: none;">
                            <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.latitude'); ?></th>
                            <td field-key='latitude'><?php echo e($asset->latitude); ?></td>
                        </tr>
                        <tr style="display: none;">
                            <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.longitude'); ?></th>
                            <td field-key='longitude'><?php echo e($asset->longitude); ?></td>
                        </tr>
                    </table>
                </div>
                <div id="map-canvas" class="box box-warning"></div></br>
            </div><!-- Nav tabs -->


            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.assets.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"> <?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_edit')): ?>
                                    <a href="<?php echo e(route('admin.assets.edit',[$asset->id])); ?>" class="btn btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
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
      '<h2>'+'<?php echo e($asset->title); ?>'+'</h3>'+
            
      '</div>'+
      '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
            
            
            
        

        var marker = new google.maps.Marker({
            position:{
                lat: <?php echo e($asset->latitude); ?>,
                lng:  <?php echo e($asset->longitude); ?>

            },
            map: map,
            draggable:false,
            icon: iconBase,

        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>