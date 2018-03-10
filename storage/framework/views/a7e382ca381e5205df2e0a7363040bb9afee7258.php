<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo e(isset($sortie->stock->designation) ? $sortie->stock->designation : ''); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?> -->Détails
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.parsonnel'); ?></th>
                            <td field-key='parsonnel'><?php echo e(isset($sortie->parsonnel->nom_prenom) ? $sortie->parsonnel->nom_prenom : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.stock'); ?></th>
                            <td field-key='stock'><?php echo e(isset($sortie->stock->designation) ? $sortie->stock->designation : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.quantite'); ?></th>
                            <td field-key='quantite'><?php echo e($sortie->quantite); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.unite'); ?></th>
                            <td field-key='unite'><?php echo e($sortie->unite); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.motif'); ?></th>
                            <td field-key='motif'><?php echo $sortie->motif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.date'); ?></th>
                            <td field-key='date'><?php echo e($sortie->date); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.dateheurfin'); ?></th>
                            <td field-key='dateheurfin'><?php echo e($sortie->dateheurfin); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.statut'); ?></th>
                            <td field-key='statut'><?php echo e(isset($sortie->statut->nom) ? $sortie->statut->nom : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.reponsable-sortie'); ?></th>
                            <td field-key='reponsable_sortie'><?php echo e($sortie->reponsable_sortie); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.location'); ?></th>
                            <td field-key='location'><?php echo e($sortie->location_address); ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.sorties.index')); ?>" class="btn btn-default fa fa-arrow-circle-left" > <?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_edit')): ?>
                                    <a href="<?php echo e(route('admin.sorties.edit',[$sortie->id])); ?>" class="btn btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>