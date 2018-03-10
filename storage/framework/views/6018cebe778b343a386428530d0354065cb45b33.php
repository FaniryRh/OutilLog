<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.absence.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo e(isset($absence->personnel->nom_prenom) ? $absence->personnel->nom_prenom : ''); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.absence.fields.personnel'); ?></th>
                            <td field-key='personnel'><?php echo e(isset($absence->personnel->nom_prenom) ? $absence->personnel->nom_prenom : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.absence.fields.date'); ?></th>
                            <td field-key='date'><?php echo e($absence->date); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.absence.fields.date-fin'); ?></th>
                            <td field-key='date_fin'><?php echo e($absence->date_fin); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.absence.fields.motif'); ?></th>
                            <td field-key='motif'><?php echo $absence->motif; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.absences.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>