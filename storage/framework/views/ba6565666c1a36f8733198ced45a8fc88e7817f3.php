<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.contacts.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?> --><?php echo e($contact->first_name); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.company'); ?></th>
                            <td field-key='company'><?php echo e(isset($contact->company->name) ? $contact->company->name : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.fonction'); ?></th>
                            <td field-key='fonction'><?php echo e($contact->fonction); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.first-name'); ?></th>
                            <td field-key='first_name'><?php echo e($contact->first_name); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.phone1'); ?></th>
                            <td field-key='phone1'><?php echo e($contact->phone1); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.phone2'); ?></th>
                            <td field-key='phone2'><?php echo e($contact->phone2); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.email'); ?></th>
                            <td field-key='email'><?php echo e($contact->email); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contacts.fields.address'); ?></th>
                            <td field-key='address'><?php echo e($contact->address); ?></td>
                        </tr>
                    </table>

                    
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.contacts.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_edit')): ?>
                         <a href="<?php echo e(route('admin.contacts.edit',[$contact->id])); ?>" class="btn btn-info fa fa-edit"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>