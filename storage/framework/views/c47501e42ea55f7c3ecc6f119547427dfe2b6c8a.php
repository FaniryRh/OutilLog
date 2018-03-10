<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.google-map-mission.title'); ?></h3>
    
    <p>
        <?php echo e(trans('quickadmin.qa_custom_controller_index')); ?> 
    </p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>