<?php $__env->startSection('content'); ?>

 <style>
        #map-canvas{
            width: 800px;
            height: 580px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.missions.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo e($mission->objet); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.objet'); ?></th>
                            <td field-key='objet'><?php echo e($mission->objet); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.location'); ?></th>
                            <td field-key='location'><?php echo e($mission->location); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-deb'); ?></th>
                            <td field-key='date_deb'><?php echo e($mission->date_deb); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-fin'); ?></th>
                            <td field-key='date_fin'><?php echo e($mission->date_fin); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.piece-jointe'); ?></th>
                            <td field-key='piece_jointe'><?php if($mission->piece_jointe): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $mission->piece_jointe)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.description'); ?></th>
                            <td field-key='description'><?php echo $mission->description; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.itineraire'); ?></th>
                            <td field-key='itineraire'><?php if($mission->itineraire): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $mission->itineraire)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $mission->itineraire)); ?>"/></a><?php endif; ?></td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.multiple-piece-jointe'); ?></th>
                            <td field-key='multiple_piece_jointe's> <?php $__currentLoopData = $mission->getMedia('multiple_piece_jointe'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="form-group">
                                    <a href="<?php echo e($media->getUrl()); ?>" target="_blank"><?php echo e($media->name); ?> (<?php echo e($media->size); ?> KB)</a>
                                </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.personnel-id'); ?></th>
                            <td field-key='personnel_id'>
                                <?php $__currentLoopData = $mission->personnel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePersonnelId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singlePersonnelId->nom_prenom); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.materiel-id'); ?></th>
                            <td field-key='materiel_id'>
                                <?php $__currentLoopData = $mission->materiel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleMaterielId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singleMaterielId->title); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Progression</th>
                            <td field-key='progression'><div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($mission->progression); ?>%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div><?php echo e($mission->progression); ?>%</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.stat'); ?></th>
                            <td field-key='stat'><?php echo e(isset($mission->stat->name) ? $mission->stat->name : ''); ?></td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.latitude'); ?></th>
                            <td field-key='latitude'><?php echo e($mission->latitude); ?></td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.longitude'); ?></th>
                            <td field-key='longitude'><?php echo e($mission->longitude); ?></td>
                        </tr>

                    </table>
                    <a href="<?php echo e(route('admin.missions.create')); ?>" class="btn btn-success">Ajouter OM</a> <a href="<?php echo e(route('admin.missions.create')); ?>" class="btn btn-success">Ajouter Tâche</a> <a href="<?php echo e(route('admin.missions.create')); ?>" class="btn btn-success">Ajouter Inventaire</a>
                </div>
                <div id="map-canvas" class="box box-warning"></div></br>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#om" aria-controls="om" role="tab" data-toggle="tab">OM</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Tâches</a></li>
<li role="presentation" class=""><a href="#inventaire" aria-controls="inventaire" role="tab" data-toggle="tab">Inventaire</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="om">
<table class="table table-bordered table-striped <?php echo e(count($oms) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.ordonnee-a'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.destination'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.itineraire'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.depart'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.duree'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.prise-en-charge'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.fichier-om'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.etat'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.rapport-de-mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.remise-rapport'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.etat-rapport-de-mission'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($oms) > 0): ?>
            <?php $__currentLoopData = $oms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $om): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($om->id); ?>">
                    <td field-key='mission'><?php echo e(isset($om->mission->objet) ? $om->mission->objet : ''); ?></td>
                                <td field-key='ordonnee_a'><?php echo e(isset($om->ordonnee_a->nom_prenom) ? $om->ordonnee_a->nom_prenom : ''); ?></td>
                                <td field-key='destination'><?php echo e($om->destination); ?></td>
                                <td field-key='itineraire'><?php echo e($om->itineraire); ?></td>
                                <td field-key='depart'><?php echo e($om->depart); ?></td>
                                <td field-key='duree'><?php echo e($om->duree); ?></td>
                                <td field-key='prise_en_charge'>
                                    <?php $__currentLoopData = $om->prise_en_charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePriseEnCharge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singlePriseEnCharge->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='fichier_om'><?php if($om->fichier_om): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->fichier_om)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='etat'><?php echo e(isset($om->etat->nom) ? $om->etat->nom : ''); ?></td>
                                <td field-key='rapport_de_mission'><?php if($om->rapport_de_mission): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->rapport_de_mission)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='remise_rapport'><?php echo e($om->remise_rapport); ?></td>
                                <td field-key='etat_rapport_de_mission'><?php echo e(isset($om->etat_rapport_de_mission->nom) ? $om->etat_rapport_de_mission->nom : ''); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_view')): ?>
                                    <a href="<?php echo e(route('admin.oms.show',[$om->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_edit')): ?>
                                    <a href="<?php echo e(route('admin.oms.edit',[$om->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.oms.destroy', $om->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="17"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped <?php echo e(count($tasks) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.type'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.description'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.attachment'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.due-date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.heur'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.user'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.participant'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.organisme'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($tasks) > 0): ?>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($task->id); ?>">
                    <td field-key='type'><?php echo e(isset($task->type->nom) ? $task->type->nom : ''); ?></td>
                                <td field-key='mission'><?php echo e(isset($task->mission->objet) ? $task->mission->objet : ''); ?></td>
                                <td field-key='name'><?php echo e($task->name); ?></td>
                                <td field-key='description'><?php echo $task->description; ?></td>
                                <td field-key='status'><?php echo e(isset($task->status->name) ? $task->status->name : ''); ?></td>
                                <td field-key='attachment'><?php if($task->attachment): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $task->attachment)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='due_date'><?php echo e($task->due_date); ?></td>
                                <td field-key='heur'><?php echo e($task->heur); ?></td>
                                <td field-key='user'><?php echo e(isset($task->user->nom_prenom) ? $task->user->nom_prenom : ''); ?></td>
                                <td field-key='participant'>
                                    <?php $__currentLoopData = $task->participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleParticipant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleParticipant->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='organisme'>
                                    <?php $__currentLoopData = $task->organisme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleOrganisme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleOrganisme->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_view')): ?>
                                    <a href="<?php echo e(route('admin.tasks.show',[$task->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_edit')): ?>
                                    <a href="<?php echo e(route('admin.tasks.edit',[$task->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])); ?>

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
<div role="tabpanel" class="tab-pane " id="inventaire">
<table class="table table-bordered table-striped <?php echo e(count($inventaires) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.materiel-id'); ?></th>
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
                                <td field-key='materiel_id'>
                                    <?php $__currentLoopData = $inventaire->materiel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleMaterielId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleMaterielId->title); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
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
                <td colspan="15"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.missions.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
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
      '<h2>'+'<?php echo e($mission->objet); ?>'+'</h3>'+
            
      '</div>'+
      '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
            
            
            
        

        var marker = new google.maps.Marker({
            position:{
                lat: <?php echo e($mission->latitude); ?>,
                lng:  <?php echo e($mission->longitude); ?>

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