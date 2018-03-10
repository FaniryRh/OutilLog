<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.contact-companies.title'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.contact_companies.create')); ?>" class="btn btn-success"><!-- <?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?> -->Nouvelle Organisme</a>
        
    </p>
    <?php endif; ?>

    

    <div class="panel panel-primary">
        <div class="panel-heading">
           <!--  <?php echo app('translator')->getFromJson('quickadmin.qa_list'); ?> -->Liste
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($contact_companies) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_delete')): ?> dt-select <?php endif; ?>">
                <thead style="background-color: orange;">
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>

                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.logo'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.address'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.website'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.tel'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($contact_companies) > 0): ?>
                        <?php $__currentLoopData = $contact_companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact_company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($contact_company->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td field-key='logo'><?php if($contact_company->logo): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $contact_company->logo)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $contact_company->logo)); ?>"/></a><?php endif; ?></td>
                                <td field-key='name'><?php echo e($contact_company->name); ?></td>
                                <td field-key='address'><?php echo e($contact_company->address); ?></td>
                                <td field-key='website'><?php echo e($contact_company->website); ?></td>
                                <td field-key='email'><?php echo e($contact_company->email); ?></td>
                                <td field-key='tel'><?php echo e($contact_company->tel); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_view')): ?>
                                    <a href="<?php echo e(route('admin.contact_companies.show',[$contact_company->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_edit')): ?>
                                    <a href="<?php echo e(route('admin.contact_companies.edit',[$contact_company->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_companies.destroy', $contact_company->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

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
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.contact_companies.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>