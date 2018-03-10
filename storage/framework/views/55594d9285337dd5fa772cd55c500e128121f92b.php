<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.competance-formation.title'); ?></h3>
    
    <?php echo Form::model($competance_formation, ['method' => 'PUT', 'route' => ['admin.competance_formations.update', $competance_formation->id], 'files' => true,]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('titre', trans('quickadmin.competance-formation.fields.titre').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('titre', old('titre'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('titre')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('titre')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('description', trans('quickadmin.competance-formation.fields.description').'', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('description', old('description'), ['class' => 'form-control editor', 'placeholder' => '']); ?>

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
                    <?php echo Form::label('piece_jointe', trans('quickadmin.competance-formation.fields.piece-jointe').'', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('piece_jointe', old('piece_jointe')); ?>

                    <?php if($competance_formation->piece_jointe): ?>
                        <a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $competance_formation->piece_jointe)); ?>" target="_blank">Download file</a>
                    <?php endif; ?>
                    <?php echo Form::file('piece_jointe', ['class' => 'form-control']); ?>

                    <?php echo Form::hidden('piece_jointe_max_size', 10); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('piece_jointe')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('piece_jointe')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>

    <a href="<?php echo e(route('admin.competance_formations.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

    <?php echo Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=<?php echo e(csrf_token()); ?>',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=<?php echo e(csrf_token()); ?>'
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>