<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.tasks.title'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.tasks.create')); ?>" class="btn btn-success fa fa-plus"> Nouvelle Tâche</a>
        <a href="<?php echo e(route('admin.task_calendars.index')); ?>" class="btn btn-default fa fa-calendar"> Calendrier</a>
        
    </p>
    <?php endif; ?>
        

    <div class="panel panel-primary">
        <div class="panel-heading">
            Liste des Tâches
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($tasks) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.type'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.description'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.attachment'); ?></th>
                        <th>Date d'échéance</th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.heur'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.user'); ?></th>
                        <!-- <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.participant'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.organisme'); ?></th> -->
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($tasks) > 0): ?>
                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($task->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?>
                                <?php if($task->status_id != 3 ){ ?>
                                
                                    <td></td>
                                
                                <?php }else{


                                    ?> <td style="visibility: hidden;"></td><?php
                                }




                                 ?>
                                 <?php endif; ?>



                                <td field-key='type'><?php echo e(isset($task->type->nom) ? $task->type->nom : ''); ?></td>
                                <td field-key='mission'><a <?php if($task->mission){ ?> href="<?php echo e(route('admin.missions.show',[$task->mission->id])); ?>"  <?php } ?> ><?php echo e(isset($task->mission->objet) ? $task->mission->objet : '-'); ?></a></td>
                                <td field-key='name' style="background-color: #ffeecc; font-weight: bold;"><?php echo e($task->name); ?></td>
                                <td field-key='description'><?php echo $task->description; ?></td>
                                <td field-key='status'><?php echo e(isset($task->status->name) ? $task->status->name : ''); ?></td>
                                <td field-key='attachment'><?php if($task->attachment): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $task->attachment)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='due_date' style="font-weight: bold;"><?php echo e($task->due_date); ?></td>
                                <td field-key='heur'><?php echo e($task->heur); ?></td>
                                <td field-key='user'><?php echo e(isset($task->user->nom_prenom) ? $task->user->nom_prenom : ''); ?></td>
                                <!-- <td field-key='participant'>
                                    <?php $__currentLoopData = $task->participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleParticipant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleParticipant->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='organisme'>
                                    <?php $__currentLoopData = $task->organisme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleOrganisme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleOrganisme->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td> -->
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_view')): ?>
                                    <a href="<?php echo e(route('admin.tasks.show',[$task->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"> <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_edit')): ?>
                                    <a href="<?php echo e(route('admin.tasks.edit',[$task->id])); ?>" class="btn btn-xs btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>

                                    <?php if($task->status_id != 3){ ?>

                                        

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>

                                        

                                    <?php } ?>
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
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.tasks.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>