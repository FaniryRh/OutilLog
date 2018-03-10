<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.status-sortie.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?>
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.status-sortie.fields.nom'); ?></th>
                            <td field-key='nom'><?php echo e($status_sortie->nom); ?></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#sortie" aria-controls="sortie" role="tab" data-toggle="tab">Sortie</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="sortie">
<table class="table table-bordered table-striped <?php echo e(count($sorties) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.parsonnel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.motif'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.dateheurfin'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.statut'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.reponsable-sortie'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.location'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($sorties) > 0): ?>
            <?php $__currentLoopData = $sorties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sorty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($sorty->id); ?>">
                    <td field-key='parsonnel'><?php echo e(isset($sorty->parsonnel->nom_prenom) ? $sorty->parsonnel->nom_prenom : ''); ?></td>
                                <td field-key='stock'><?php echo e(isset($sorty->stock->designation) ? $sorty->stock->designation : ''); ?></td>
                                <td field-key='quantite'><?php echo e($sorty->quantite); ?></td>
                                <td field-key='unite'><?php echo e($sorty->unite); ?></td>
                                <td field-key='motif'><?php echo $sorty->motif; ?></td>
                                <td field-key='date'><?php echo e($sorty->date); ?></td>
                                <td field-key='dateheurfin'><?php echo e($sorty->dateheurfin); ?></td>
                                <td field-key='statut'><?php echo e(isset($sorty->statut->nom) ? $sorty->statut->nom : ''); ?></td>
                                <td field-key='reponsable_sortie'><?php echo e($sorty->reponsable_sortie); ?></td>
                                <td field-key='location'><?php echo e($sorty->location_address); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_view')): ?>
                                    <a href="<?php echo e(route('admin.sorties.show',[$sorty->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_edit')): ?>
                                    <a href="<?php echo e(route('admin.sorties.edit',[$sorty->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.sorties.destroy', $sorty->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="16"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.status_sorties.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>