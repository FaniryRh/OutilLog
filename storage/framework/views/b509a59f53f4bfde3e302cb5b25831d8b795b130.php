<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.tasks.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo e($task->name); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.type'); ?></th>
                            <td field-key='type'><?php echo e(isset($task->type->nom) ? $task->type->nom : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.mission'); ?></th>
                            <td field-key='mission'><?php echo e(isset($task->mission->objet) ? $task->mission->objet : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.name'); ?></th>
                            <td field-key='name'><?php echo e($task->name); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.description'); ?></th>
                            <td field-key='description'><?php echo $task->description; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.status'); ?></th>
                            <td field-key='status'><?php echo e(isset($task->status->name) ? $task->status->name : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.attachment'); ?></th>
                            <td field-key='attachment'><?php if($task->attachment): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $task->attachment)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Date d'échéance</th>
                            <td field-key='due_date'><?php echo e($task->due_date); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.heur'); ?></th>
                            <td field-key='heur'><?php echo e($task->heur); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.user'); ?></th>
                            <td field-key='user'><?php echo e(isset($task->user->nom_prenom) ? $task->user->nom_prenom : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.participant'); ?></th>
                            <td field-key='participant'>
                                <?php $__currentLoopData = $task->participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleParticipant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singleParticipant->nom_prenom); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.organisme'); ?></th>
                            <td field-key='organisme'>
                                <?php $__currentLoopData = $task->organisme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleOrganisme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singleOrganisme->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.tasks.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>