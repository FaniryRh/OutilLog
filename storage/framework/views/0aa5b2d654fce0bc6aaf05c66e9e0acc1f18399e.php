<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><!-- <?php echo app('translator')->getFromJson('quickadmin.contacts.title'); ?> -->Liste Contacts</h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.contacts.create')); ?>" class="btn btn-success fa fa-plus"><!-- <?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?> --> Nouveau Contact</a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_list'); ?> -->Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($contacts) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.company'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.fonction'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.first-name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.phone1'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.phone2'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.address'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($contacts) > 0): ?>
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($contact->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='company'><?php echo e(isset($contact->company->name) ? $contact->company->name : ''); ?></td>
                                <td field-key='fonction'><?php echo e($contact->fonction); ?></td>
                                <td field-key='first_name' style="background-color: #ffeecc; font-weight: bold;"><?php echo e($contact->first_name); ?></td>
                                <td field-key='phone1'><?php echo e($contact->phone1); ?></td>
                                <td field-key='phone2'><?php echo e($contact->phone2); ?></td>
                                <td field-key='email'><?php echo e($contact->email); ?></td>
                                <td field-key='address'><?php echo e($contact->address); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_view')): ?>
                                    <a href="<?php echo e(route('admin.contacts.show',[$contact->id])); ?>" class="btn btn-xs btn-primary fa fa-eye"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_edit')): ?>
                                    <a href="<?php echo e(route('admin.contacts.edit',[$contact->id])); ?>" class="btn btn-xs btn-info fa fa-edit"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts.destroy', $contact->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.contacts.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>