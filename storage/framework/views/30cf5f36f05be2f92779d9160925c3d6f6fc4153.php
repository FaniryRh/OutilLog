<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.liste-stock.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.liste_stocks.store']]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_create'); ?>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('designation', trans('quickadmin.liste-stock.fields.designation').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('designation', old('designation'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('designation')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('designation')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('description', trans('quickadmin.liste-stock.fields.description').'', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('description')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('description')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('quantite', trans('quickadmin.liste-stock.fields.quantite').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('quantite', old('quantite'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('quantite')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('quantite')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('unite_id', trans('quickadmin.liste-stock.fields.unite').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('unite_id', $unites, old('unite_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('unite_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('unite_id')); ?>

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