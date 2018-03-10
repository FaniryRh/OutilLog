<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo e($liste_stock->designation); ?></h3>
    
    <?php echo Form::model($liste_stock, ['method' => 'PUT', 'route' => ['admin.liste_stocks.update', $liste_stock->id], 'files' => true,]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?> -->Modification
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php if($liste_stock->photo): ?>
                        <a href="<?php echo e(asset(env('UPLOAD_PATH').'/'.$liste_stock->photo)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/'.$liste_stock->photo)); ?>"></a>
                    <?php endif; ?>
                    <?php echo Form::label('photo', trans('quickadmin.liste-stock.fields.photo').'', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('photo', old('photo')); ?>

                    <?php echo Form::file('photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                    <?php echo Form::hidden('photo_max_size', 5); ?>

                    <?php echo Form::hidden('photo_max_width', 4096); ?>

                    <?php echo Form::hidden('photo_max_height', 4096); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('photo')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('photo')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
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

    <a href="<?php echo e(route('admin.liste_stocks.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

    <?php echo Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>