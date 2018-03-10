<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.competance-formation.title'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('competance_formation_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.competance_formations.create')); ?>" class="btn btn-success"><?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?></a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($competance_formations) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('competance_formation_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('competance_formation_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.competance-formation.fields.titre'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.competance-formation.fields.description'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.competance-formation.fields.piece-jointe'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($competance_formations) > 0): ?>
                        <?php $__currentLoopData = $competance_formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $competance_formation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($competance_formation->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('competance_formation_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='titre'><?php echo e($competance_formation->titre); ?></td>
                                <td field-key='description'><?php echo $competance_formation->description; ?></td>
                                <td field-key='piece_jointe'><?php if($competance_formation->piece_jointe): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $competance_formation->piece_jointe)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('competance_formation_view')): ?>
                                    <a href="<?php echo e(route('admin.competance_formations.show',[$competance_formation->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('competance_formation_edit')): ?>
                                    <a href="<?php echo e(route('admin.competance_formations.edit',[$competance_formation->id])); ?>" class="btn btn-xs btn-info fa fa-edit"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('competance_formation_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.competance_formations.destroy', $competance_formation->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('competance_formation_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.competance_formations.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>