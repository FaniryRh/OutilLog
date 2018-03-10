<?php $__env->startSection('content'); ?>
    <!-- <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.users.title'); ?></h3> -->

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?> --><?php echo e($user->name); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.users.fields.name'); ?></th>
                            <td field-key='name'><?php echo e($user->name); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.users.fields.email'); ?></th>
                            <td field-key='email'><?php echo e($user->email); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.users.fields.role'); ?></th>
                            <td field-key='role'><?php echo e(isset($user->role->title) ? $user->role->title : ''); ?></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#useractions" aria-controls="useractions" role="tab" data-toggle="tab">User actions</a></li>
<li role="presentation" class=""><a href="#internalnotifications" aria-controls="internalnotifications" role="tab" data-toggle="tab">Notifications</a></li>
<li role="presentation" class=""><a href="#assetshistory" aria-controls="assetshistory" role="tab" data-toggle="tab">Assets history</a></li>
<li role="presentation" class=""><a href="#assets" aria-controls="assets" role="tab" data-toggle="tab">Assets</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="useractions">
<table class="table table-bordered table-striped <?php echo e(count($user_actions) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.user-actions.created_at'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.user-actions.fields.user'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.user-actions.fields.action'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.user-actions.fields.action-model'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.user-actions.fields.action-id'); ?></th>
                        
        </tr>
    </thead>

    <tbody >
        <?php if(count($user_actions) > 0): ?>
            <?php $__currentLoopData = $user_actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($user_action->id); ?>">
                    <td><?php echo e(isset($user_action->created_at) ? $user_action->created_at : ''); ?></td>
                                <td field-key='user'><?php echo e(isset($user_action->user->name) ? $user_action->user->name : ''); ?></td>
                                <td field-key='action'><?php echo e($user_action->action); ?></td>
                                <td field-key='action_model'><?php echo e($user_action->action_model); ?></td>
                                <td field-key='action_id'><?php echo e($user_action->action_id); ?></td>
                                
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
<div role="tabpanel" class="tab-pane " id="internalnotifications">
<table class="table table-bordered table-striped <?php echo e(count($internal_notifications) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.internal-notifications.fields.text'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.internal-notifications.fields.link'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.internal-notifications.fields.users'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($internal_notifications) > 0): ?>
            <?php $__currentLoopData = $internal_notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internal_notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($internal_notification->id); ?>">
                    <td field-key='text'><?php echo e($internal_notification->text); ?></td>
                                <td field-key='link'><?php echo e($internal_notification->link); ?></td>
                                <td field-key='users'>
                                    <?php $__currentLoopData = $internal_notification->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleUsers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleUsers->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('internal_notification_view')): ?>
                                    <a href="<?php echo e(route('admin.internal_notifications.show',[$internal_notification->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('internal_notification_edit')): ?>
                                    <a href="<?php echo e(route('admin.internal_notifications.edit',[$internal_notification->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('internal_notification_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.internal_notifications.destroy', $internal_notification->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="8"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="assetshistory">
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
                                <td field-key='assigned_user'><?php echo e(isset($assets_history->assigned_user->name) ? $assets_history->assigned_user->name : ''); ?></td>
                                
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
                                <td field-key='status'><?php echo e(isset($asset->status->title) ? $asset->status->title : ''); ?></td>
                                <td field-key='location'><?php echo e(isset($asset->location->title) ? $asset->location->title : ''); ?></td>
                                <td field-key='assigned_user'><?php echo e(isset($asset->assigned_user->name) ? $asset->assigned_user->name : ''); ?></td>
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
                <td colspan="15"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>