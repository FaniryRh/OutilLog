<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <!-- <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.assets-categories.title'); ?></h3> -->
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_category_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.assets_categories.create')); ?>" class="btn btn-success">Nouvelle catégorie</a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_list'); ?> -->Liste catégorie
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($assets_categories) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_category_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_category_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.assets-categories.fields.title'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($assets_categories) > 0): ?>
                        <?php $__currentLoopData = $assets_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assets_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($assets_category->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_category_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='title'><?php echo e($assets_category->title); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_category_view')): ?>
                                    <a href="<?php echo e(route('admin.assets_categories.show',[$assets_category->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_category_edit')): ?>
                                    <a href="<?php echo e(route('admin.assets_categories.edit',[$assets_category->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_category_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.assets_categories.destroy', $assets_category->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_category_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.assets_categories.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>