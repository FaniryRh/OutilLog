<?php $__env->startSection('content'); ?>
    <!-- <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.assets-locations.title'); ?></h3> -->
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.assets_locations.store']]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_create'); ?> -->Nouvelle location
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('title', trans('quickadmin.assets-locations.fields.title').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('title')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('title')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>

    <?php echo Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>