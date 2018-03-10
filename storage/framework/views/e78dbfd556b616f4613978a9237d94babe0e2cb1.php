<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.entree.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading" style="text-transform: uppercase;">
            <?php echo e(isset($entree->stock->designation) ? $entree->stock->designation : ''); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.entree.fields.date'); ?></th>
                            <td field-key='date'><?php echo e($entree->date); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.entree.fields.stock'); ?></th>
                            <td field-key='stock'><a href="<?php echo e(route('admin.liste_stocks.show',[$entree->stock->id])); ?>"><?php echo e(isset($entree->stock->designation) ? $entree->stock->designation : ''); ?></a></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.entree.fields.quantite'); ?></th>
                            <td field-key='quantite'><?php echo e($entree->quantite); ?> <?php echo e($entree->unite); ?></td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.entree.fields.unite'); ?></th>
                            <td field-key='unite'><?php echo e($entree->unite); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.entree.fields.motif'); ?></th>
                            <td field-key='motif'><?php echo $entree->motif; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.entrees.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"> <?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_edit')): ?>
                                    <a href="<?php echo e(route('admin.entrees.edit',[$entree->id])); ?>" class="btn btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>