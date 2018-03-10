<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.capacite.title'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('capacite_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.capacites.create')); ?>" class="btn btn-success">Nouvelle Capacité</a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($capacites) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('capacite_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('capacite_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.capacite.fields.titre'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.capacite.fields.description'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.capacite.fields.piece-jointe'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($capacites) > 0): ?>
                        <?php $__currentLoopData = $capacites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $capacite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($capacite->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('capacite_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='titre'><?php echo e($capacite->titre); ?></td>
                                <td field-key='description'><?php echo $capacite->description; ?></td>
                                <td field-key='piece_jointe'><?php if($capacite->piece_jointe): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $capacite->piece_jointe)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('capacite_view')): ?>
                                    <a href="<?php echo e(route('admin.capacites.show',[$capacite->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('capacite_edit')): ?>
                                    <a href="<?php echo e(route('admin.capacites.edit',[$capacite->id])); ?>" class="btn btn-xs btn-info fa fa-edit"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('capacite_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.capacites.destroy', $capacite->id])); ?>

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
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('capacite_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.capacites.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>