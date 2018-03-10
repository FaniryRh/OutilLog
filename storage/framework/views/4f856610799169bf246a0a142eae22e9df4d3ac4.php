<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $nbr_perso ?></h3>

              <p>Personnel du BNGRC</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo e(route('admin.personnel_du_bngrcs.index')); ?>" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $nbr_asset ?></h3>

              <p>Matériels</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
            <a href="<?php echo e(route('admin.assets.index')); ?>" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $nbr_stock ?></h3>

              <p>Stock</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
            <a href="<?php echo e(route('admin.liste_stocks.index')); ?>" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3><?= $nbr_reunion ?></h3>

                    <p>Réunion en attente</p>
                </div>
                <div class="icon">
                <i class="fa  fa-tasks"></i>
            </div>
            <a href="<?php echo e(route('admin.tasks.index')); ?>" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    </div>
        




    <div class="row">
        <style>
            #map-canvas{
                height: 650px;
            }
        </style>
        <div class="col-md-6">
            <div class="panel panel-default box box-warning ">
                <div class="panel-heading ">
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
        </div> 

        <div class="col-md-6" >
            <div class="panel panel-primary">
                <div class="box-header">
                    <h3 class="box-title">Statut missions <span class="badge bg-orange">Total: <?= $nbr_mission ?></span></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style=" overflow-y:auto; max-height: 300px;">
                    <?php if(count($progress_mission) > 0): ?>
                    <?php $__currentLoopData = $progress_mission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><span class="label label-black bg-blue"><a href="missions/<?php echo e($mission->id); ?>" style="color: white; "><?php echo e($mission->objet); ?></a></span><span class="badge bg-blue">     <?php echo e($mission->progression); ?>%</span><code style="color: blue;"><?php echo e($mission->date_deb); ?></code></p>
                    <div class="progress progress-sm active">
                        <div class="progress-bar progress-bar-default progress-bar-striped" role="progressbar" aria-valuenow= "" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($mission->progression); ?>%">
                            <span class="sr-only"></span>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="19">Aucune mission</td>
                    </tr>
                    <?php endif; ?>
                        
                                          
                </div>
                <!-- /.box-body -->
            </div>
          <!-- /.box -->
        </div>
            <!--  -->



        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Missions ajoutées récemment</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> <?php echo app('translator')->getFromJson('quickadmin.missions.fields.objet'); ?></th> 
                            <th> <?php echo app('translator')->getFromJson('quickadmin.missions.fields.location'); ?></th> 
                            <th> <?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-deb'); ?></th> 
                            <th> <?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-fin'); ?></th> 
                            <!-- <th> <?php echo app('translator')->getFromJson('quickadmin.missions.fields.description'); ?></th>  -->
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $missions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                               
                                <td style="background-color: #ffeecc; font-weight: bold;"><?php echo e($mission->objet); ?> </td> 
                                <td><?php echo e($mission->location); ?> </td> 
                                <td><?php echo e($mission->date_deb); ?> </td> 
                                <td><?php echo e($mission->date_fin); ?> </td> 
                                <!-- <td><?php echo e($mission->description); ?> </td>  -->
                                <td>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_view')): ?>
                                    <a href="<?php echo e(route('admin.missions.show',[$mission->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"> <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_edit')): ?>
                                    <a href="<?php echo e(route('admin.missions.edit',[$mission->id])); ?>" class="btn btn-xs btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
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
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
 </div>


        
        </div>
      <!-- /.row -->











      <div class="row">

      <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Tâches ajoutées récemment</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> <?php echo app('translator')->getFromJson('quickadmin.tasks.fields.name'); ?></th> 
                            <!-- <th> <?php echo app('translator')->getFromJson('quickadmin.tasks.fields.description'); ?></th>  -->
                            <th> <?php echo app('translator')->getFromJson('quickadmin.tasks.fields.due-date'); ?></th> 
                            <th> <?php echo app('translator')->getFromJson('quickadmin.tasks.fields.heur'); ?></th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                               
                                <td style="background-color: #ffeecc; font-weight: bold;"><?php echo e($task->name); ?> </td> 
                                <!-- <td><?php echo e($task->description); ?> </td>  -->
                                <td><?php echo e($task->due_date); ?> </td> 
                                <td><?php echo e($task->heur); ?> </td> 
                                <td>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_view')): ?>
                                    <a href="<?php echo e(route('admin.tasks.show',[$task->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"> <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_edit')): ?>
                                    <a href="<?php echo e(route('admin.tasks.edit',[$task->id])); ?>" class="btn btn-xs btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
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
                    </table>
                </div>
            </div>
 </div>
         <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">OM ajouté récemment</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> <?php echo app('translator')->getFromJson('quickadmin.om.fields.destination'); ?></th> 
                            <th> <?php echo app('translator')->getFromJson('quickadmin.om.fields.itineraire'); ?></th> 
                            <th> <?php echo app('translator')->getFromJson('quickadmin.om.fields.depart'); ?></th> 
                            <th> <?php echo app('translator')->getFromJson('quickadmin.om.fields.duree'); ?></th> 
                            <th> <?php echo app('translator')->getFromJson('quickadmin.om.fields.remise-rapport'); ?></th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $oms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $om): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                               
                                <td style="background-color: #ffeecc; font-weight: bold;"><?php echo e($om->destination); ?> </td> 
                                <td><?php echo e($om->itineraire); ?> </td> 
                                <td><?php echo e($om->depart); ?> </td> 
                                <td><?php echo e($om->duree); ?> </td> 
                                <td><?php echo e($om->remise_rapport); ?> </td> 
                                <td>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_view')): ?>
                                    <a href="<?php echo e(route('admin.oms.show',[$om->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"> <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_edit')): ?>
                                    <a href="<?php echo e(route('admin.oms.edit',[$om->id])); ?>" class="btn btn-xs btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
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
                    </table>
                </div>
            </div>
 </div>

 

 


    </div>



  <!--  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>