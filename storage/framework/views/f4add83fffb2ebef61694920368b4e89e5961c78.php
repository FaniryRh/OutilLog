<?php $__env->startSection('content'); ?>
    <h3 class="page-title">Sortie</h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.sorties.store']]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_create'); ?>
        </div>
        
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('date', trans('quickadmin.sortie.fields.date').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('date', old('date'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('date')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('date')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('stock_id', trans('quickadmin.sortie.fields.stock').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('stock_id', $stocks, old('stock_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('stock_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('stock_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('quantite', trans('quickadmin.sortie.fields.quantite').'*', ['class' => 'control-label']); ?>

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
                    <?php echo Form::label('unite', trans('quickadmin.sortie.fields.unite').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('unite', old('unite'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('unite')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('unite')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('motif', trans('quickadmin.sortie.fields.motif').'', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('motif', old('motif'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('motif')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('motif')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
            
        </div>
    </div>

    <?php echo Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##
    <script src="<?php echo e(url('quickadmin/js')); ?>/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "<?php echo e(config('app.date_format_js')); ?>",
            timeFormat: "HH:mm:ss"
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>