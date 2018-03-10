<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.sortie.title'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.sorties.create')); ?>" class="btn btn-success"><!-- <?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?> -->Effectuer nouvelle sortie</a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_list'); ?> -->Liste des sorties
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($sorties) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.parsonnel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.quantite'); ?></th>
                        <!-- <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.unite'); ?></th> -->
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.motif'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.date'); ?></th>
                        <!-- <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.dateheurfin'); ?></th> -->
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.statut'); ?></th>
                        <!-- <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.reponsable-sortie'); ?></th> -->
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.location'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($sorties) > 0): ?>
                        <?php $__currentLoopData = $sorties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sorty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($sorty->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='parsonnel'><?php echo e(isset($sorty->parsonnel->nom_prenom) ? $sorty->parsonnel->nom_prenom : ''); ?></td>
                                <td field-key='stock' style="background-color: #ffeecc; font-weight: bold;"><a href="<?php echo e(route('admin.liste_stocks.show',[$sorty->stock->id])); ?>"><?php echo e(isset($sorty->stock->designation) ? $sorty->stock->designation : ''); ?></a></td>
                                <td field-key='quantite' style="font-weight: bold;"><?php echo e($sorty->quantite); ?> <?php echo e($sorty->unite); ?></td>
                                <!-- <td field-key='unite'><?php echo e($sorty->unite); ?></td> -->
                                <td field-key='motif'><?php echo $sorty->motif; ?></td>
                                <td field-key='mission'><?php echo e(isset($sorty->mission->objet) ? $sorty->mission->objet : ''); ?></td>
                                <td field-key='date'><?php echo e($sorty->date); ?></td>
                                <!-- <td field-key='dateheurfin'><?php echo e($sorty->dateheurfin); ?></td> -->
                                <td field-key='statut' style="font-weight: bold;"><?php echo e(isset($sorty->statut->nom) ? $sorty->statut->nom : ''); ?></td>
                                <!-- <td field-key='reponsable_sortie'><?php echo e($sorty->reponsable_sortie); ?></td> -->
                                <td field-key='location'><?php echo e($sorty->location_address); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_view')): ?>
                                    <a href="<?php echo e(route('admin.sorties.show',[$sorty->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"> <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_edit')): ?>
                                    <a href="<?php echo e(route('admin.sorties.edit',[$sorty->id])); ?>" class="btn btn-xs btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.sorties.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>