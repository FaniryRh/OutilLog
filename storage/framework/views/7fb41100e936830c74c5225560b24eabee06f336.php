<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.capacite.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo e($capacite->titre); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.capacite.fields.titre'); ?></th>
                            <td field-key='titre'><?php echo e($capacite->titre); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.capacite.fields.description'); ?></th>
                            <td field-key='description'><?php echo $capacite->description; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.capacite.fields.piece-jointe'); ?></th>
                            <td field-key='piece_jointe'><?php if($capacite->piece_jointe): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $capacite->piece_jointe)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#personneldubngrc" aria-controls="personneldubngrc" role="tab" data-toggle="tab">Personnel du BNGRC</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="personneldubngrc">
<table class="table table-bordered table-striped <?php echo e(count($personnel_du_bngrcs) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;"">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.photo'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.fonction'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.nom-prenom'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.tel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.tel2'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.adresse'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.competence-formation'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.capacites'); ?></th>
                        <th>Date d'embauche</th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.statut'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($personnel_du_bngrcs) > 0): ?>
            <?php $__currentLoopData = $personnel_du_bngrcs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel_du_bngrc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($personnel_du_bngrc->id); ?>">
                    <td field-key='photo'><?php if($personnel_du_bngrc->photo): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $personnel_du_bngrc->photo)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $personnel_du_bngrc->photo)); ?>"/></a><?php endif; ?></td>
                                <td field-key='fonction'><?php echo e($personnel_du_bngrc->fonction); ?></td>
                                <td field-key='nom_prenom'><?php echo e($personnel_du_bngrc->nom_prenom); ?></td>
                                <td field-key='tel'><?php echo e($personnel_du_bngrc->tel); ?></td>
                                <td field-key='tel2'><?php echo e($personnel_du_bngrc->tel2); ?></td>
                                <td field-key='email'><?php echo e($personnel_du_bngrc->email); ?></td>
                                <td field-key='adresse'><?php echo e($personnel_du_bngrc->adresse); ?></td>
                                <td field-key='competence_formation'>
                                    <?php $__currentLoopData = $personnel_du_bngrc->competence_formation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleCompetenceFormation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleCompetenceFormation->titre); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='capacites'>
                                    <?php $__currentLoopData = $personnel_du_bngrc->capacites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleCapacites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleCapacites->titre); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='date_embauche'><?php echo e($personnel_du_bngrc->date_embauche); ?></td>
                                <td field-key='statut'><?php echo e(isset($personnel_du_bngrc->statut->nom) ? $personnel_du_bngrc->statut->nom : ''); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('personnel_du_bngrc_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.personnel_du_bngrcs.restore', $personnel_du_bngrc->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('personnel_du_bngrc_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.personnel_du_bngrcs.perma_del', $personnel_du_bngrc->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('personnel_du_bngrc_view')): ?>
                                    <a href="<?php echo e(route('admin.personnel_du_bngrcs.show',[$personnel_du_bngrc->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('personnel_du_bngrc_edit')): ?>
                                    <a href="<?php echo e(route('admin.personnel_du_bngrcs.edit',[$personnel_du_bngrc->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('personnel_du_bngrc_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.personnel_du_bngrcs.destroy', $personnel_du_bngrc->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="18"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.capacites.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>