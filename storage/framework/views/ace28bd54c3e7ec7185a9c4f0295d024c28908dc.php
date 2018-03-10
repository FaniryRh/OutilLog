<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title">Stock</h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_stock_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.liste_stocks.create')); ?>" class="btn btn-success"><?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?></a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-primary">
        <div class="panel-heading">
           Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($liste_stocks) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_stock_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_stock_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-stock.fields.designation'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-stock.fields.description'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-stock.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-stock.fields.unite'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($liste_stocks) > 0): ?>
                        <?php $__currentLoopData = $liste_stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liste_stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($liste_stock->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_stock_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='designation'><?php echo e($liste_stock->designation); ?></td>
                                <td field-key='description'><?php echo $liste_stock->description; ?></td>
                                <td field-key='quantite'><?php echo e($liste_stock->quantite); ?></td>
                                <td field-key='unite'><?php echo e(isset($liste_stock->unite->nom) ? $liste_stock->unite->nom : ''); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_stock_view')): ?>
                                    <a href="<?php echo e(route('admin.liste_stocks.show',[$liste_stock->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_stock_edit')): ?>
                                    <a href="<?php echo e(route('admin.liste_stocks.edit',[$liste_stock->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_stock_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_stocks.destroy', $liste_stock->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_stock_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.liste_stocks.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>