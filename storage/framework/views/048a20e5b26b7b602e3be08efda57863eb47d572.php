<?php $__env->startSection('content'); ?>
<style>
        #map-canvas{
            width: 800px;
            height: 650px;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?>
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.photo'); ?></th>
                            <td field-key='photo'><?php if($personnel_du_bngrc->photo): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $personnel_du_bngrc->photo)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $personnel_du_bngrc->photo)); ?>"/></a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.fonction'); ?></th>
                            <td field-key='fonction'><?php echo e($personnel_du_bngrc->fonction); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.nom-prenom'); ?></th>
                            <td field-key='nom_prenom'><?php echo e($personnel_du_bngrc->nom_prenom); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.tel'); ?></th>
                            <td field-key='tel'><?php echo e($personnel_du_bngrc->tel); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.tel2'); ?></th>
                            <td field-key='tel2'><?php echo e($personnel_du_bngrc->tel2); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.email'); ?></th>
                            <td field-key='email'><?php echo e($personnel_du_bngrc->email); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.adresse'); ?></th>
                            <td field-key='adresse'><?php echo e($personnel_du_bngrc->adresse); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.competence-formation'); ?></th>
                            <td field-key='competence_formation'>
                                <?php $__currentLoopData = $personnel_du_bngrc->competence_formation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleCompetenceFormation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singleCompetenceFormation->titre); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.date-embauche'); ?></th>
                            <td field-key='date_embauche'><?php echo e($personnel_du_bngrc->date_embauche); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.latitude'); ?></th>
                            <td field-key='latitude'><?php echo e($personnel_du_bngrc->latitude); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.longitude'); ?></th>
                            <td field-key='longitude'><?php echo e($personnel_du_bngrc->longitude); ?></td>
                        </tr>
                    </table>
                </div>
                <div id="map-canvas"></div></br>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#reunion" aria-controls="reunion" role="tab" data-toggle="tab">Réunion</a></li>
<li role="presentation" class=""><a href="#assetshistory" aria-controls="assetshistory" role="tab" data-toggle="tab">Historique</a></li>
<li role="presentation" class=""><a href="#reunion" aria-controls="reunion" role="tab" data-toggle="tab">Réunion</a></li>
<li role="presentation" class=""><a href="#inventaire" aria-controls="inventaire" role="tab" data-toggle="tab">Inventaire</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Tâches</a></li>
<li role="presentation" class=""><a href="#missions" aria-controls="missions" role="tab" data-toggle="tab">Missions</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Tâches</a></li>
<li role="presentation" class=""><a href="#assets" aria-controls="assets" role="tab" data-toggle="tab">Matériels</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="reunion">
<table class="table table-bordered table-striped <?php echo e(count($reunions) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.objet'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.personnel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.organisme-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.participant-bngrc'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.rapport'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($reunions) > 0): ?>
            <?php $__currentLoopData = $reunions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reunion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($reunion->id); ?>">
                    <td field-key='objet'><?php echo e($reunion->objet); ?></td>
                                <td field-key='date'><?php echo e($reunion->date); ?></td>
                                <td field-key='personnel'><?php echo e(isset($reunion->personnel->nom_prenom) ? $reunion->personnel->nom_prenom : ''); ?></td>
                                <td field-key='organisme_id'>
                                    <?php $__currentLoopData = $reunion->organisme_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleOrganismeId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleOrganismeId->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='participant_bngrc'>
                                    <?php $__currentLoopData = $reunion->participant_bngrc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleParticipantBngrc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleParticipantBngrc->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='rapport'><?php if($reunion->rapport): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $reunion->rapport)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.reunions.restore', $reunion->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.reunions.perma_del', $reunion->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_view')): ?>
                                    <a href="<?php echo e(route('admin.reunions.show',[$reunion->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_edit')): ?>
                                    <a href="<?php echo e(route('admin.reunions.edit',[$reunion->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.reunions.destroy', $reunion->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="12"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="assetshistory">
<table class="table table-bordered table-striped <?php echo e(count($assets_histories) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.created_at'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.fields.asset'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.fields.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.fields.location'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets-history.fields.assigned-user'); ?></th>
                        
        </tr>
    </thead>

    <tbody>
        <?php if(count($assets_histories) > 0): ?>
            <?php $__currentLoopData = $assets_histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assets_history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($assets_history->id); ?>">
                    <td><?php echo e(isset($assets_history->created_at) ? $assets_history->created_at : ''); ?></td>
                                <td field-key='asset'><?php echo e(isset($assets_history->asset->title) ? $assets_history->asset->title : ''); ?></td>
                                <td field-key='status'><?php echo e(isset($assets_history->status->title) ? $assets_history->status->title : ''); ?></td>
                                <td field-key='location'><?php echo e(isset($assets_history->location->title) ? $assets_history->location->title : ''); ?></td>
                                <td field-key='assigned_user'><?php echo e(isset($assets_history->assigned_user->nom_prenom) ? $assets_history->assigned_user->nom_prenom : ''); ?></td>
                                
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="7"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="reunion">
<table class="table table-bordered table-striped <?php echo e(count($reunions) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.objet'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.personnel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.organisme-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.participant-bngrc'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.reunion.fields.rapport'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($reunions) > 0): ?>
            <?php $__currentLoopData = $reunions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reunion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($reunion->id); ?>">
                    <td field-key='objet'><?php echo e($reunion->objet); ?></td>
                                <td field-key='date'><?php echo e($reunion->date); ?></td>
                                <td field-key='personnel'><?php echo e(isset($reunion->personnel->nom_prenom) ? $reunion->personnel->nom_prenom : ''); ?></td>
                                <td field-key='organisme_id'>
                                    <?php $__currentLoopData = $reunion->organisme_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleOrganismeId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleOrganismeId->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='participant_bngrc'>
                                    <?php $__currentLoopData = $reunion->participant_bngrc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleParticipantBngrc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleParticipantBngrc->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='rapport'><?php if($reunion->rapport): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $reunion->rapport)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.reunions.restore', $reunion->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.reunions.perma_del', $reunion->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_view')): ?>
                                    <a href="<?php echo e(route('admin.reunions.show',[$reunion->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_edit')): ?>
                                    <a href="<?php echo e(route('admin.reunions.edit',[$reunion->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reunion_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.reunions.destroy', $reunion->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="12"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="inventaire">
<table class="table table-bordered table-striped <?php echo e(count($inventaires) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.asset'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.nombre'); ?></th>
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
                                <td field-key='asset'><?php echo e(isset($inventaire->asset->title) ? $inventaire->asset->title : ''); ?></td>
                                <td field-key='nombre'><?php echo e($inventaire->nombre); ?></td>
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
                <td colspan="16"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped <?php echo e(count($tasks) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.type'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.description'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.attachment'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.due-date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.heur'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.user'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.participant'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.organisme'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($tasks) > 0): ?>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($task->id); ?>">
                    <td field-key='type'><?php echo e(isset($task->type->nom) ? $task->type->nom : ''); ?></td>
                                <td field-key='mission'><?php echo e(isset($task->mission->objet) ? $task->mission->objet : ''); ?></td>
                                <td field-key='name'><?php echo e($task->name); ?></td>
                                <td field-key='description'><?php echo $task->description; ?></td>
                                <td field-key='status'><?php echo e(isset($task->status->name) ? $task->status->name : ''); ?></td>
                                <td field-key='attachment'><?php if($task->attachment): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $task->attachment)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='due_date'><?php echo e($task->due_date); ?></td>
                                <td field-key='heur'><?php echo e($task->heur); ?></td>
                                <td field-key='user'><?php echo e(isset($task->user->nom_prenom) ? $task->user->nom_prenom : ''); ?></td>
                                <td field-key='participant'>
                                    <?php $__currentLoopData = $task->participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleParticipant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleParticipant->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='organisme'>
                                    <?php $__currentLoopData = $task->organisme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleOrganisme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleOrganisme->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_view')): ?>
                                    <a href="<?php echo e(route('admin.tasks.show',[$task->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_edit')): ?>
                                    <a href="<?php echo e(route('admin.tasks.edit',[$task->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])); ?>

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
<div role="tabpanel" class="tab-pane " id="missions">
<table class="table table-bordered table-striped <?php echo e(count($missions) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.objet'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.location'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-deb'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-fin'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.personnel-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.materiel-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.progression'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.stat'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($missions) > 0): ?>
            <?php $__currentLoopData = $missions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($mission->id); ?>">
                    <td field-key='objet'><?php echo e($mission->objet); ?></td>
                                <td field-key='location'><?php echo e($mission->location); ?></td>
                                <td field-key='date_deb'><?php echo e($mission->date_deb); ?></td>
                                <td field-key='date_fin'><?php echo e($mission->date_fin); ?></td>
                                <td field-key='personnel_id'>
                                    <?php $__currentLoopData = $mission->personnel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePersonnelId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singlePersonnelId->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='materiel_id'>
                                    <?php $__currentLoopData = $mission->materiel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleMaterielId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleMaterielId->title); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='progression'><?php echo e($mission->progression); ?></td>
                                <td field-key='stat'><?php echo e(isset($mission->stat->name) ? $mission->stat->name : ''); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.restore', $mission->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.perma_del', $mission->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_view')): ?>
                                    <a href="<?php echo e(route('admin.missions.show',[$mission->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_edit')): ?>
                                    <a href="<?php echo e(route('admin.missions.edit',[$mission->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.destroy', $mission->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="19"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped <?php echo e(count($tasks) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.type'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.description'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.attachment'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.due-date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.heur'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.user'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.participant'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.organisme'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($tasks) > 0): ?>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($task->id); ?>">
                    <td field-key='type'><?php echo e(isset($task->type->nom) ? $task->type->nom : ''); ?></td>
                                <td field-key='mission'><?php echo e(isset($task->mission->objet) ? $task->mission->objet : ''); ?></td>
                                <td field-key='name'><?php echo e($task->name); ?></td>
                                <td field-key='description'><?php echo $task->description; ?></td>
                                <td field-key='status'><?php echo e(isset($task->status->name) ? $task->status->name : ''); ?></td>
                                <td field-key='attachment'><?php if($task->attachment): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $task->attachment)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='due_date'><?php echo e($task->due_date); ?></td>
                                <td field-key='heur'><?php echo e($task->heur); ?></td>
                                <td field-key='user'><?php echo e(isset($task->user->nom_prenom) ? $task->user->nom_prenom : ''); ?></td>
                                <td field-key='participant'>
                                    <?php $__currentLoopData = $task->participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleParticipant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleParticipant->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='organisme'>
                                    <?php $__currentLoopData = $task->organisme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleOrganisme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleOrganisme->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_view')): ?>
                                    <a href="<?php echo e(route('admin.tasks.show',[$task->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_edit')): ?>
                                    <a href="<?php echo e(route('admin.tasks.edit',[$task->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])); ?>

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
<div role="tabpanel" class="tab-pane " id="assets">
<table class="table table-bordered table-striped <?php echo e(count($assets) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.category'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.serial-number'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.title'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.photo1'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.photo2'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.photo3'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.date-acquisition'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.quantite-stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.location'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.assigned-user'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.notes'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($assets) > 0): ?>
            <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($asset->id); ?>">
                    <td field-key='category'><?php echo e(isset($asset->category->title) ? $asset->category->title : ''); ?></td>
                                <td field-key='serial_number'><?php echo e($asset->serial_number); ?></td>
                                <td field-key='title'><?php echo e($asset->title); ?></td>
                                <td field-key='photo1'><?php if($asset->photo1): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo1)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1)); ?>"/></a><?php endif; ?></td>
                                <td field-key='photo2'><?php if($asset->photo2): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo2)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2)); ?>"/></a><?php endif; ?></td>
                                <td field-key='photo3'><?php if($asset->photo3): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $asset->photo3)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3)); ?>"/></a><?php endif; ?></td>
                                <td field-key='date_acquisition'><?php echo e($asset->date_acquisition); ?></td>
                                <td field-key='quantite_stock'><?php echo e($asset->quantite_stock); ?></td>
                                <td field-key='status'><?php echo e(isset($asset->status->title) ? $asset->status->title : ''); ?></td>
                                <td field-key='location'><?php echo e(isset($asset->location->title) ? $asset->location->title : ''); ?></td>
                                <td field-key='assigned_user'><?php echo e(isset($asset->assigned_user->nom_prenom) ? $asset->assigned_user->nom_prenom : ''); ?></td>
                                <td field-key='notes'><?php echo $asset->notes; ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_view')): ?>
                                    <a href="<?php echo e(route('admin.assets.show',[$asset->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_edit')): ?>
                                    <a href="<?php echo e(route('admin.assets.edit',[$asset->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.assets.destroy', $asset->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="19"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.personnel_du_bngrcs.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>


    <script>
        
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: -18.915647,
                lng:  47.540394
            },
            zoom:6

        });


        function icon_img(){
            return "<?php echo e(url('/icon/placeholder.png')); ?>";

        }

        var iconBase = icon_img();





        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3>'+'<?php echo e($personnel_du_bngrc->nom_prenom); ?>'+'</h3>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
            
            
            
        

        var marker = new google.maps.Marker({
            position:{
                lat: <?php echo e($personnel_du_bngrc->latitude); ?>,
                lng:  <?php echo e($personnel_du_bngrc->longitude); ?>

            },
            map: map,
            draggable:false,
            icon: iconBase
            

        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>