<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.om.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo e(isset($om->mission->objet) ? $om->mission->objet : ''); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.mission'); ?></th>
                            <td field-key='mission' style="font-weight: bold;"><a href="<?php echo e(route('admin.missions.show',[$om->mission->id])); ?>"><?php echo e(isset($om->mission->objet) ? $om->mission->objet : ''); ?></a></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.ordonnee-a'); ?></th>
                            <td field-key='ordonnee_a'><?php echo e(isset($om->ordonnee_a->nom_prenom) ? $om->ordonnee_a->nom_prenom : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.destination'); ?></th>
                            <td field-key='destination'><?php echo e($om->destination); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.itineraire'); ?></th>
                            <td field-key='itineraire'><?php echo e($om->itineraire); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.depart'); ?></th>
                            <td field-key='depart'><?php echo e($om->depart); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.duree'); ?></th>
                            <td field-key='duree'><?php echo e($om->duree); ?> Jour(s)</td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.prise-en-charge'); ?></th>
                            <td field-key='prise_en_charge'>
                                <?php $__currentLoopData = $om->prise_en_charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePriseEnCharge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><a style="color: white;" href="<?php echo e(route('admin.contact_companies.show',[$singlePriseEnCharge->id])); ?>"><?php echo e($singlePriseEnCharge->name); ?></a></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.fichier-om'); ?></th>
                            <td field-key='fichier_om'><?php if($om->fichier_om): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->fichier_om)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.etat'); ?></th>
                            <td field-key='etat'><?php echo e(isset($om->etat->nom) ? $om->etat->nom : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.rapport-de-mission'); ?></th>
                            <td field-key='rapport_de_mission'><?php if($om->rapport_de_mission): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->rapport_de_mission)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.remise-rapport'); ?></th>
                            <td field-key='remise_rapport'><?php echo e($om->remise_rapport); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.om.fields.etat-rapport-de-mission'); ?></th>
                            <td field-key='etat_rapport_de_mission'><?php echo e(isset($om->etat_rapport_de_mission->nom) ? $om->etat_rapport_de_mission->nom : ''); ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.oms.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"> <?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_edit')): ?>
                                    <a href="<?php echo e(route('admin.oms.edit',[$om->id])); ?>" class="btn btn-info fa fa-edit "> <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>