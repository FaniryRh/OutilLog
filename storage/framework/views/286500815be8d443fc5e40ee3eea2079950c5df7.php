<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.liste-stock.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading" style="text-transform: uppercase;">
            <?php echo e($liste_stock->designation); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.liste-stock.fields.designation'); ?></th>
                            <td field-key='designation'><?php echo e($liste_stock->designation); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.liste-stock.fields.description'); ?></th>
                            <td field-key='description'><?php echo $liste_stock->description; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.liste-stock.fields.quantite'); ?></th>
                            <td field-key='quantite'><?php echo e($liste_stock->quantite); ?> <?php echo e(isset($liste_stock->unite->nom) ? $liste_stock->unite->nom : ''); ?></td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.liste-stock.fields.unite'); ?></th>
                            <td field-key='unite'><?php echo e(isset($liste_stock->unite->nom) ? $liste_stock->unite->nom : ''); ?></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#sortie" aria-controls="sortie" role="tab" data-toggle="tab">Sortie</a></li>
<li role="presentation" class=""><a href="#entree" aria-controls="entree" role="tab" data-toggle="tab">Entrée</a></li>
<li role="presentation" class=""><a href="#inventaire" aria-controls="inventaire" role="tab" data-toggle="tab">Inventaire</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="sortie">
<table class="table table-bordered table-striped <?php echo e(count($sorties) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.motif'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.date'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($sorties) > 0): ?>
            <?php $__currentLoopData = $sorties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sorty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($sorty->id); ?>">
                    <td field-key='stock'><?php echo e(isset($sorty->stock->designation) ? $sorty->stock->designation : ''); ?></td>
                                <td field-key='quantite'><?php echo e($sorty->quantite); ?></td>
                                <td field-key='unite'><?php echo e($sorty->unite); ?></td>
                                <td field-key='motif'><?php echo $sorty->motif; ?></td>
                                <td field-key='date'><?php echo e($sorty->date); ?></td>
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
                <td colspan="10"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="entree">
<table class="table table-bordered table-striped <?php echo e(count($entrees) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.entree.fields.motif'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($entrees) > 0): ?>
            <?php $__currentLoopData = $entrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($entree->id); ?>">
                    <td field-key='date'><?php echo e($entree->date); ?></td>
                                <td field-key='stock'><?php echo e(isset($entree->stock->designation) ? $entree->stock->designation : ''); ?></td>
                                <td field-key='quantite'><?php echo e($entree->quantite); ?></td>
                                <td field-key='unite'><?php echo e($entree->unite); ?></td>
                                <td field-key='motif'><?php echo $entree->motif; ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_view')): ?>
                                    <a href="<?php echo e(route('admin.entrees.show',[$entree->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_edit')): ?>
                                    <a href="<?php echo e(route('admin.entrees.edit',[$entree->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
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
<div role="tabpanel" class="tab-pane " id="inventaire">
<table class="table table-bordered table-striped <?php echo e(count($inventaires) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.materiel-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.responsable-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.destination'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($inventaires) > 0): ?>
            <?php $__currentLoopData = $inventaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($inventaire->id); ?>">
                    <td field-key='date'><?php echo e($inventaire->date); ?></td>
                                <td field-key='mission'><?php echo e(isset($inventaire->mission->objet) ? $inventaire->mission->objet : ''); ?></td>
                                <td field-key='stock'><?php echo e(isset($inventaire->stock->designation) ? $inventaire->stock->designation : ''); ?></td>
                                <td field-key='quantite'><?php echo e($inventaire->quantite); ?></td>
                                <td field-key='unite'><?php echo e($inventaire->unite); ?></td>
                                <td field-key='materiel_id'>
                                    <?php $__currentLoopData = $inventaire->materiel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleMaterielId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleMaterielId->title); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='responsable_id'>
                                    <?php $__currentLoopData = $inventaire->responsable_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleResponsableId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleResponsableId->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='destination'><?php echo e($inventaire->destination); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_view')): ?>
                                    <a href="<?php echo e(route('admin.inventaires.show',[$inventaire->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_edit')): ?>
                                    <a href="<?php echo e(route('admin.inventaires.edit',[$inventaire->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.inventaires.destroy', $inventaire->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="15"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.liste_stocks.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>