<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.assets.title'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.assets.create')); ?>" class="btn btn-success"><?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?></a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_list'); ?>
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($assets) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_delete')): ?> dt-select <?php endif; ?>">
                <thead>
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.category'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.serial-number'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.title'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.photo1'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.photo2'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.photo3'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.date-acquisition'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.quantite-stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.location'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.assigned-user'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.notes'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($assets) > 0): ?>
                        <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($asset->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='category'><?php echo e(isset($asset->category->title) ? $asset->category->title : ''); ?></td>
                                <td field-key='serial_number'><?php echo e($asset->serial_number); ?></td>
                                <td field-key='title'><?php echo e($asset->title); ?></td>
                                <td field-key='photo1'><?php if($asset->photo1): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo1)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1)); ?>"/></a><?php endif; ?></td>
                                <td field-key='photo2'><?php if($asset->photo2): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo2)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2)); ?>"/></a><?php endif; ?></td>
                                <td field-key='photo3'><?php if($asset->photo3): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo3)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3)); ?>"/></a><?php endif; ?></td>
                                <td field-key='date_acquisition'><?php echo e($asset->date_acquisition); ?></td>
                                <td field-key='quantite_stock'><?php echo e($asset->quantite_stock); ?></td>
                                <td field-key='status'><?php echo e(isset($asset->status->title) ? $asset->status->title : ''); ?></td>
                                <td field-key='location'><?php echo e(isset($asset->location->title) ? $asset->location->title : ''); ?></td>
                                <td field-key='assigned_user'><?php echo e(isset($asset->assigned_user->nom_prenom) ? $asset->assigned_user->nom_prenom : ''); ?></td>
                                <td field-key='notes'><?php echo $asset->notes; ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_view')): ?>
                                    <a href="<?php echo e(route('admin.assets.show',[$asset->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_edit')): ?>
                                    <a href="<?php echo e(route('admin.assets.edit',[$asset->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.assets.destroy', $asset->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="19"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.assets.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>