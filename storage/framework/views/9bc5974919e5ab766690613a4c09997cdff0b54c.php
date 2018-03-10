<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.province.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?>
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?php echo app('translator')->getFromJson('quickadmin.province.fields.name'); ?></th>
                            <td field-key='name'><?php echo e($province->name); ?></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#region" aria-controls="region" role="tab" data-toggle="tab">Région</a></li>
<li role="presentation" class=""><a href="#chefderegion" aria-controls="chefderegion" role="tab" data-toggle="tab">Chef de région</a></li>
<li role="presentation" class=""><a href="#listedesprefets" aria-controls="listedesprefets" role="tab" data-toggle="tab">Liste des préfets</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="region">
<table class="table table-bordered table-striped <?php echo e(count($regions) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.region.fields.name'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($regions) > 0): ?>
            <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($region->id); ?>">
                    <td field-key='name'><?php echo e($region->name); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('region_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.regions.restore', $region->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('region_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.regions.perma_del', $region->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('region_view')): ?>
                                    <a href="<?php echo e(route('admin.regions.show',[$region->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('region_edit')): ?>
                                    <a href="<?php echo e(route('admin.regions.edit',[$region->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('region_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.regions.destroy', $region->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
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
<div role="tabpanel" class="tab-pane " id="chefderegion">
<table class="table table-bordered table-striped <?php echo e(count($chef_de_regions) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.province'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.region'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.nom-prenom'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.tel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.tel2'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.email'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($chef_de_regions) > 0): ?>
            <?php $__currentLoopData = $chef_de_regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chef_de_region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($chef_de_region->id); ?>">
                    <td field-key='province'><?php echo e(isset($chef_de_region->province->name) ? $chef_de_region->province->name : ''); ?></td>
                                <td field-key='region'><?php echo e(isset($chef_de_region->region->name) ? $chef_de_region->region->name : ''); ?></td>
                                <td field-key='nom_prenom'><?php echo e($chef_de_region->nom_prenom); ?></td>
                                <td field-key='tel'><?php echo e($chef_de_region->tel); ?></td>
                                <td field-key='tel2'><?php echo e($chef_de_region->tel2); ?></td>
                                <td field-key='email'><?php echo e($chef_de_region->email); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chef_de_region_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.chef_de_regions.restore', $chef_de_region->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chef_de_region_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.chef_de_regions.perma_del', $chef_de_region->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chef_de_region_view')): ?>
                                    <a href="<?php echo e(route('admin.chef_de_regions.show',[$chef_de_region->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chef_de_region_edit')): ?>
                                    <a href="<?php echo e(route('admin.chef_de_regions.edit',[$chef_de_region->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chef_de_region_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.chef_de_regions.destroy', $chef_de_region->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="11"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="listedesprefets">
<table class="table table-bordered table-striped <?php echo e(count($liste_des_prefets) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.liste-des-prefets.fields.province'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-des-prefets.fields.region'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-des-prefets.fields.prefecture'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-des-prefets.fields.nom-prenom'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-des-prefets.fields.tel1'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-des-prefets.fields.tel2'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-des-prefets.fields.email'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($liste_des_prefets) > 0): ?>
            <?php $__currentLoopData = $liste_des_prefets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liste_des_prefet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($liste_des_prefet->id); ?>">
                    <td field-key='province'><?php echo e(isset($liste_des_prefet->province->name) ? $liste_des_prefet->province->name : ''); ?></td>
                                <td field-key='region'><?php echo e(isset($liste_des_prefet->region->name) ? $liste_des_prefet->region->name : ''); ?></td>
                                <td field-key='prefecture'><?php echo e(isset($liste_des_prefet->prefecture->name) ? $liste_des_prefet->prefecture->name : ''); ?></td>
                                <td field-key='nom_prenom'><?php echo e($liste_des_prefet->nom_prenom); ?></td>
                                <td field-key='tel1'><?php echo e($liste_des_prefet->tel1); ?></td>
                                <td field-key='tel2'><?php echo e($liste_des_prefet->tel2); ?></td>
                                <td field-key='email'><?php echo e($liste_des_prefet->email); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_des_prefet_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_des_prefets.restore', $liste_des_prefet->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_des_prefet_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_des_prefets.perma_del', $liste_des_prefet->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_des_prefet_view')): ?>
                                    <a href="<?php echo e(route('admin.liste_des_prefets.show',[$liste_des_prefet->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_des_prefet_edit')): ?>
                                    <a href="<?php echo e(route('admin.liste_des_prefets.edit',[$liste_des_prefet->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_des_prefet_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_des_prefets.destroy', $liste_des_prefet->id])); ?>

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
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.provinces.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>