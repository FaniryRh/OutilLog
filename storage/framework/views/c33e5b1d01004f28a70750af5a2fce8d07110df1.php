<?php $__env->startSection('content'); ?>
<style>
        #map-canvas{
            width: 800px;
            height: 580px;
        }

        
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>

    <div class="panel box-warning panel-primary">
        <div class="panel-heading bg-primary">
            <?php echo e($asset->title); ?>

        </div>

        <div class="panel-body table-responsive box box-warning ">
            <div class="row">
                <div class="col-md-6 ">
                    <table class="table table-bordered table-striped table_data box box-warning">
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
                            <th style="background-color:grey; width: 200px; color: white;">Photo 1</th>
                            <td field-key='photo1'><?php if($asset->photo1): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo1)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1)); ?>"/></a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color: grey; width: 200px; color: white;">Photo 2</th>
                            <td field-key='photo2'><?php if($asset->photo2): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo2)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2)); ?>"/></a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Photo 3</th>
                            <td field-key='photo3'><?php if($asset->photo3): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo3)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3)); ?>"/></a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Date d'aquisition</th>
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
                            <td field-key='assigned_user'><?php echo e(isset($asset->assigned_user->nom_prenom) ? $asset->assigned_user->nom_prenom : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.notes'); ?></th>
                            <td field-key='notes'><?php echo $asset->notes; ?></td>
                        </tr>
                        <tr style="visibility: hidden;">
                            <th style="visibility: hidden; background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.latitude'); ?></th>
                            <td field-key='latitude'><?php echo e($asset->latitude); ?></td>
                        </tr>
                        <tr style="visibility: hidden;">
                            <th style=" visibility: hidden; background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets.fields.longitude'); ?></th>
                            <td field-key='longitude'><?php echo e($asset->longitude); ?></td>
                        </tr>
                    </table>
                </div>
                <div id="map-canvas" class="box box-warning"></div></br>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" >
    
<li role="presentation" class="active"><a href="#assetshistory" aria-controls="assetshistory" role="tab" data-toggle="tab"  >Historique</a></li>
<li role="presentation" class=""><a href="#inventaire" aria-controls="inventaire" role="tab" data-toggle="tab" >Inventaire</a></li>
<li role="presentation" class=""><a href="#missions" aria-controls="missions" role="tab" data-toggle="tab" >Missions</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="assetshistory">
<table class="table table-bordered table-striped <?php echo e(count($assets_histories) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.created_at'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.fields.asset'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.fields.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.fields.location'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.fields.assigned-user'); ?></th>
                        
        </tr>
    </thead>

    <tbody>
        <?php if(count($assets_histories) > 0): ?>
            <?php $__currentLoopData = $assets_histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assets_history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($assets_history->id); ?>">
                    <td><?php echo e(isset($assets_history->created_at) ? $assets_history->created_at : ''); ?></td>
                                <td field-key='asset'><?php echo e(isset($assets_history->asset->title) ? $assets_history->asset->title : ''); ?></td>
                                <td field-key='status'><?php echo e(isset($assets_history->status->title) ? $assets_history->status->title : ''); ?></td>
                                <td field-key='location'><?php echo e(isset($assets_history->location->title) ? $assets_history->location->title : ''); ?></td>
                                <td field-key='assigned_user'><?php echo e(isset($assets_history->assigned_user->nom_prenom) ? $assets_history->assigned_user->nom_prenom : ''); ?></td>
                                
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="7"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="inventaire">
<table class="table table-bordered table-striped <?php echo e(count($inventaires) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr >
            <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.asset'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.nombre'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.responsable-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.destination'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($inventaires) > 0): ?>
            <?php $__currentLoopData = $inventaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($inventaire->id); ?>">
                    <td field-key='date'><?php echo e($inventaire->date); ?></td>
                                <td field-key='mission'><?php echo e(isset($inventaire->mission->objet) ? $inventaire->mission->objet : ''); ?></td>
                                <td field-key='stock'><?php echo e(isset($inventaire->stock->designation) ? $inventaire->stock->designation : ''); ?></td>
                                <td field-key='quantite'><?php echo e($inventaire->quantite); ?></td>
                                <td field-key='unite'><?php echo e($inventaire->unite); ?></td>
                                <td field-key='asset'><?php echo e(isset($inventaire->asset->title) ? $inventaire->asset->title : ''); ?></td>
                                <td field-key='nombre'><?php echo e($inventaire->nombre); ?></td>
                                <td field-key='responsable_id'>
                                    <?php $__currentLoopData = $inventaire->responsable_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleResponsableId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleResponsableId->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='destination'><?php echo e($inventaire->destination); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_view')): ?>
                                    <a href="<?php echo e(route('admin.inventaires.show',[$inventaire->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_edit')): ?>
                                    <a href="<?php echo e(route('admin.inventaires.edit',[$inventaire->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.inventaires.destroy', $inventaire->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="16"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="missions">
<table class="table table-bordered table-striped <?php echo e(count($missions) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.objet'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.location'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-deb'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-fin'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.personnel-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.materiel-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.progression'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.stat'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($missions) > 0): ?>
            <?php $__currentLoopData = $missions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($mission->id); ?>">
                    <td field-key='objet'><?php echo e($mission->objet); ?></td>
                                <td field-key='location'><?php echo e($mission->location); ?></td>
                                <td field-key='date_deb'><?php echo e($mission->date_deb); ?></td>
                                <td field-key='date_fin'><?php echo e($mission->date_fin); ?></td>
                                <td field-key='personnel_id'>
                                    <?php $__currentLoopData = $mission->personnel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePersonnelId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singlePersonnelId->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='materiel_id'>
                                    <?php $__currentLoopData = $mission->materiel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleMaterielId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleMaterielId->title); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='progression'><?php echo e($mission->progression); ?></td>
                                <td field-key='stat'><?php echo e(isset($mission->stat->name) ? $mission->stat->name : ''); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.restore', $mission->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.perma_del', $mission->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_view')): ?>
                                    <a href="<?php echo e(route('admin.missions.show',[$mission->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_edit')): ?>
                                    <a href="<?php echo e(route('admin.missions.edit',[$mission->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.destroy', $mission->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="19"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.assets.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
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
      '<h3>'+'<?php echo e($asset->title); ?>'+'</h3>'+
      '<div id="bodyContent">'+
      '<p><strong>N°: </strong><h style="color:blue;"> '+'<?php echo e($asset->serial_number); ?>'+'</h></p>'+
      '<p><strong>Responsable: </strong><h style="color:red;"> '+'<?php echo e($asset->assigned_user->nom_prenom); ?>'+'</h></p>'+
      '<p><strong>Statut: </strong><h style="color:green;">'+'<?php echo e($asset->status->title); ?>'+'</h></p>'+
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
            icon: iconBase
            

        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>