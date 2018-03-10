<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.sortie.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.sorties.store']]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_create'); ?>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('parsonnel_id', trans('quickadmin.sortie.fields.parsonnel').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('parsonnel_id', $parsonnels, old('parsonnel_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('parsonnel_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('parsonnel_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
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
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('quantite', trans('quickadmin.sortie.fields.quantite').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('quantite', old('quantite'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('quantite')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('quantite')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('unite', trans('quickadmin.sortie.fields.unite').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('unite', old('unite'), ['class' => 'form-control', 'placeholder' => '', 'readonly']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('unite')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('unite')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('mission_id', trans('quickadmin.sortie.fields.mission').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('mission_id', $missions, old('mission_id'), ['class' => 'form-control select2']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('mission_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('mission_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('date', trans('quickadmin.sortie.fields.date').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('date', old('date'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('date')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('date')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('dateheurfin', trans('quickadmin.sortie.fields.dateheurfin').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('dateheurfin', old('dateheurfin'), ['class' => 'form-control date', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('dateheurfin')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('dateheurfin')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('statut_id', trans('quickadmin.sortie.fields.statut').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('statut_id', $statuts, old('statut_id'), ['class' => 'form-control select2']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('statut_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('statut_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('reponsable_sortie', trans('quickadmin.sortie.fields.reponsable-sortie').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('reponsable_sortie', old('reponsable_sortie'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('reponsable_sortie')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('reponsable_sortie')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 form-group">
                    <?php echo Form::label('motif', trans('quickadmin.sortie.fields.motif').'', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('motif', old('motif'), ['class' => 'form-control editor', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('motif')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('motif')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('location_address', trans('quickadmin.sortie.fields.location').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('location_address', old('location_address'), ['class' => 'form-control map-input', 'id' => 'location-input']); ?>

                    <?php echo Form::hidden('location_latitude', 0 , ['id' => 'location-latitude']); ?>

                    <?php echo Form::hidden('location_longitude', 0 , ['id' => 'location-longitude']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('location')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('location')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
            <div id="location-map-container" style="width:100%;height:200px; ">
                <div style="width: 100%; height: 100%" id="location-map"></div>
            </div>
            <?php if(!env('GOOGLE_MAPS_API_KEY')): ?>
                <b>'GOOGLE_MAPS_API_KEY' is not set in the .env</b>
            <?php endif; ?>
            
            
        </div>
    </div>

    <a href="<?php echo e(route('admin.sorties.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"> <?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

    <?php echo Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##
   <script src="/adminlte/js/mapInput.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAPS_API_KEY')); ?>&libraries=places&callback=initialize" async defer></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "<?php echo e(config('app.date_format_js')); ?>"
        });
    </script>
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