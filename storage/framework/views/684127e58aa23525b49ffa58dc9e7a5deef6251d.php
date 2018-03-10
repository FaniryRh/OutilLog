<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.chef_de_regions.store']]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_create'); ?>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('province_id', trans('quickadmin.chef-de-region.fields.province').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('province_id', $provinces, old('province_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('province_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('province_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('region_id', trans('quickadmin.chef-de-region.fields.region').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('region_id', $regions, old('region_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('region_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('region_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('nom_prenom', trans('quickadmin.chef-de-region.fields.nom-prenom').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('nom_prenom', old('nom_prenom'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('nom_prenom')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('nom_prenom')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('tel', trans('quickadmin.chef-de-region.fields.tel').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('tel')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('tel')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('tel2', trans('quickadmin.chef-de-region.fields.tel2').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('tel2', old('tel2'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('tel2')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('tel2')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('email', trans('quickadmin.chef-de-region.fields.email').'', ['class' => 'control-label']); ?>

                    <?php echo Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('email')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('email')); ?>

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