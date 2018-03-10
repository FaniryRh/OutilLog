<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.om.title'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.oms.create')); ?>" class="btn btn-success fa fa-plus"> <?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?></a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_list'); ?> -->Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($oms) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange; height: 1px;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.ordonnee-a'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.destination'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.itineraire'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.depart'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.duree'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.prise-en-charge'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.fichier-om'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.etat'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.rapport-de-mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.remise-rapport'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.etat-rapport-de-mission'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($oms) > 0): ?>
                        <?php $__currentLoopData = $oms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $om): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($om->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='mission' style="font-weight: bold;"><a <?php if($om->mission){ ?>  href="<?php echo e(route('admin.missions.show',[$om->mission->id])); ?>"  <?php } ?> ><?php echo e(isset($om->mission->objet) ? $om->mission->objet : ''); ?></a></td>
                                <td field-key='ordonnee_a' style="background-color: #ffeecc; font-weight: bold;"><?php echo e(isset($om->ordonnee_a->nom_prenom) ? $om->ordonnee_a->nom_prenom : ''); ?></td>
                                <td field-key='destination'><?php echo e($om->destination); ?></td>
                                <td field-key='itineraire'><?php echo e($om->itineraire); ?></td>
                                <td field-key='depart'><?php echo e($om->depart); ?></td>
                                <td field-key='duree'><?php echo e($om->duree); ?> J</td>
                                <td field-key='prise_en_charge'>
                                    <?php $__currentLoopData = $om->prise_en_charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePriseEnCharge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singlePriseEnCharge->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='fichier_om'><?php if($om->fichier_om): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->fichier_om)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='etat'><?php echo e(isset($om->etat->nom) ? $om->etat->nom : ''); ?></td>
                                <td field-key='rapport_de_mission'><?php if($om->rapport_de_mission): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->rapport_de_mission)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='remise_rapport'><?php echo e($om->remise_rapport); ?></td>
                                <td field-key='etat_rapport_de_mission'><?php echo e(isset($om->etat_rapport_de_mission->nom) ? $om->etat_rapport_de_mission->nom : ''); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_view')): ?>
                                    <a href="<?php echo e(route('admin.oms.show',[$om->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"> <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_edit')): ?>
                                    <a href="<?php echo e(route('admin.oms.edit',[$om->id])); ?>" class="btn btn-xs btn-info fa fa-edit"> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.oms.destroy', $om->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="17"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.oms.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>