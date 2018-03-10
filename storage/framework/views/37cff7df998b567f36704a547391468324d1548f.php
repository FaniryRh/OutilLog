<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.entree.title'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.entrees.create')); ?>" class="btn btn-success fa fa-plus"> <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?> -->Nouvelle Entrée</a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($entrees) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.quantite'); ?></th>
                        <!-- <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.unite'); ?></th> -->
                        <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.motif'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($entrees) > 0): ?>
                        <?php $__currentLoopData = $entrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($entree->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='date'><?php echo e($entree->date); ?></td>
                                <td field-key='stock' style="background-color: #ffeecc; font-weight: bold;"><a href="<?php echo e(route('admin.liste_stocks.show',[$entree->stock->id])); ?>"><?php echo e(isset($entree->stock->designation) ? $entree->stock->designation : ''); ?></a></td>
                                <td field-key='quantite' style="font-weight: bold;"><?php echo e($entree->quantite); ?> <?php echo e($entree->unite); ?></td>
                                <!-- <td field-key='unite'><?php echo e($entree->unite); ?></td> -->
                                <td field-key='motif'><?php echo $entree->motif; ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_view')): ?>
                                    <a href="<?php echo e(route('admin.entrees.show',[$entree->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"> <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_edit')): ?>
                                    <a href="<?php echo e(route('admin.entrees.edit',[$entree->id])); ?>" class="btn btn-xs btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.entrees.destroy', $entree->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.entrees.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>