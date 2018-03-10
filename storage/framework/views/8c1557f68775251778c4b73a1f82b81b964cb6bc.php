<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.assets-locations.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?>
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.assets-locations.fields.title'); ?></th>
                            <td field-key='title'><?php echo e($assets_location->title); ?></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#assetshistory" aria-controls="assetshistory" role="tab" data-toggle="tab">Historique</a></li>
<li role="presentation" class=""><a href="#assets" aria-controls="assets" role="tab" data-toggle="tab">Matériels</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="assetshistory">
<table class="table table-bordered table-striped <?php echo e(count($assets_histories) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
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
<div role="tabpanel" class="tab-pane " id="assets">
<table class="table table-bordered table-striped <?php echo e(count($assets) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
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

            <a href="<?php echo e(route('admin.assets_locations.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>