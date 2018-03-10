<?php $__env->startSection('content'); ?>
    <!-- <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.contacts.title'); ?></h3> -->
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.contacts.store']]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_create'); ?> --> Nouveau Contact
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('company_id', trans('quickadmin.contacts.fields.company').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('company_id', $companies, old('company_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('company_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('company_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('fonction', trans('quickadmin.contacts.fields.fonction').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('fonction', old('fonction'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('fonction')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('fonction')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('first_name', trans('quickadmin.contacts.fields.first-name').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('first_name')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('first_name')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('phone1', trans('quickadmin.contacts.fields.phone1').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('phone1', old('phone1'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('phone1')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('phone1')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('phone2', trans('quickadmin.contacts.fields.phone2').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('phone2', old('phone2'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('phone2')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('phone2')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('email', trans('quickadmin.contacts.fields.email').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('email')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('email')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('address', trans('quickadmin.contacts.fields.address').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('address')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('address')); ?>

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