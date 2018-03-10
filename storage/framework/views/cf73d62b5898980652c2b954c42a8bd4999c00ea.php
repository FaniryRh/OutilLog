<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.tasks.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.tasks.store'], 'files' => true,]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            Nouvelle Tâche
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('type_id', trans('quickadmin.tasks.fields.type').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('type_id', $types, old('type_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('type_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('type_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('mission_id', trans('quickadmin.tasks.fields.mission').'', ['class' => 'control-label']); ?>

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
                    <?php echo Form::label('name', trans('quickadmin.tasks.fields.name').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('name')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('name')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('organisme', trans('quickadmin.tasks.fields.organisme').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('organisme[]', $organismes, old('organisme'), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('organisme')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('organisme')); ?>

                        </p>
                    <?php endif; ?>
                </div>


            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('status_id', trans('quickadmin.tasks.fields.status').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('status_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('status_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('attachment', trans('quickadmin.tasks.fields.attachment').'', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('attachment', old('attachment')); ?>

                    <?php echo Form::file('attachment', ['class' => 'form-control']); ?>

                    <?php echo Form::hidden('attachment_max_size', 8); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('attachment')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('attachment')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('due_date', trans('Date').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('due_date', old('due_date'), ['class' => 'form-control date', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('due_date')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('due_date')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('heur', trans('quickadmin.tasks.fields.heur').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('heur', old('heur'), ['class' => 'form-control timepicker', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('heur')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('heur')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('user_id', trans('quickadmin.tasks.fields.user').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('user_id', $users, old('user_id'), ['class' => 'form-control select2']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('user_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('user_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('participant', trans('quickadmin.tasks.fields.participant').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('participant[]', $participants, old('participant'), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('participant')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('participant')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                

                <div class="col-xs-12 form-group">
                    <?php echo Form::label('description', trans('quickadmin.tasks.fields.description').'', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('description')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('description')); ?>

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
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "<?php echo e(config('app.date_format_js')); ?>"
        });
    </script>
    <script src="<?php echo e(url('quickadmin/js')); ?>/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.timepicker').datetimepicker({
            autoclose: true,
            timeFormat: "HH:mm:ss",
            timeOnly: true
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>