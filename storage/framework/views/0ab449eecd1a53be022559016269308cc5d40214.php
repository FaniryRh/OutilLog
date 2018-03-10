<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.om.title'); ?></h3>
    
    <?php echo Form::model($om, ['method' => 'PUT', 'route' => ['admin.oms.update', $om->id], 'files' => true,]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('mission_id', trans('quickadmin.om.fields.mission').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('mission_id', $missions, old('mission_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('mission_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('mission_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('ordonnee_a_id', trans('quickadmin.om.fields.ordonnee-a').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('ordonnee_a_id', $ordonnee_as, old('ordonnee_a_id'), ['class' => 'form-control select2', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('ordonnee_a_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('ordonnee_a_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('destination', trans('quickadmin.om.fields.destination').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('destination', old('destination'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('destination')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('destination')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('itineraire', trans('quickadmin.om.fields.itineraire').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('itineraire', old('itineraire'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('itineraire')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('itineraire')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('depart', trans('quickadmin.om.fields.depart').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('depart', old('depart'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('depart')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('depart')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                 <div class="col-xs-6 form-group">
                    <?php echo Form::label('duree', trans('quickadmin.om.fields.duree').'(Jour)'.'*', ['class' => 'control-label']); ?>

                    <?php echo Form::number('duree', old('duree'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('duree')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('duree')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('prise_en_charge', trans('quickadmin.om.fields.prise-en-charge').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('prise_en_charge[]', $prise_en_charges, old('prise_en_charge') ? old('prise_en_charge') : $om->prise_en_charge->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('prise_en_charge')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('prise_en_charge')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('fichier_om', trans('quickadmin.om.fields.fichier-om').'', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('fichier_om', old('fichier_om')); ?>

                    <?php if($om->fichier_om): ?>
                        <a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->fichier_om)); ?>" target="_blank">Download file</a>
                    <?php endif; ?>
                    <?php echo Form::file('fichier_om', ['class' => 'form-control']); ?>

                    <?php echo Form::hidden('fichier_om_max_size', 5); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('fichier_om')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('fichier_om')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('etat_id', trans('quickadmin.om.fields.etat').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('etat_id', $etats, old('etat_id'), ['class' => 'form-control select2']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('etat_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('etat_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('rapport_de_mission', trans('quickadmin.om.fields.rapport-de-mission').'', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('rapport_de_mission', old('rapport_de_mission')); ?>

                    <?php if($om->rapport_de_mission): ?>
                        <a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->rapport_de_mission)); ?>" target="_blank">Download file</a>
                    <?php endif; ?>
                    <?php echo Form::file('rapport_de_mission', ['class' => 'form-control']); ?>

                    <?php echo Form::hidden('rapport_de_mission_max_size', 5); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('rapport_de_mission')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('rapport_de_mission')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('remise_rapport', trans('quickadmin.om.fields.remise-rapport').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('remise_rapport', old('remise_rapport'), ['class' => 'form-control datetime', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('remise_rapport')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('remise_rapport')); ?>

                        </p>
                    <?php endif; ?>
                </div>

                <div class="col-xs-6 form-group">
                    <?php echo Form::label('etat_rapport_de_mission_id', trans('quickadmin.om.fields.etat-rapport-de-mission').'', ['class' => 'control-label']); ?>

                    <?php echo Form::select('etat_rapport_de_mission_id', $etat_rapport_de_missions, old('etat_rapport_de_mission_id'), ['class' => 'form-control select2']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('etat_rapport_de_mission_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('etat_rapport_de_mission_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            
        </div>
    </div>

    <a href="<?php echo e(route('admin.oms.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"> <?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

    <?php echo Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']); ?>

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