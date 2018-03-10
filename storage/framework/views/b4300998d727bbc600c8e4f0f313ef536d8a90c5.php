<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><!-- <?php echo app('translator')->getFromJson('quickadmin.contact-companies.title'); ?> --><?php echo e($contact_company->name); ?></h3>
    
    <?php echo Form::model($contact_company, ['method' => 'PUT', 'route' => ['admin.contact_companies.update', $contact_company->id], 'files' => true,]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php if($contact_company->logo): ?>
                        <a href="<?php echo e(asset(env('UPLOAD_PATH').'/'.$contact_company->logo)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/'.$contact_company->logo)); ?>"></a>
                    <?php endif; ?>
                    <?php echo Form::label('logo', trans('quickadmin.contact-companies.fields.logo').'', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('logo', old('logo')); ?>

                    <?php echo Form::file('logo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                    <?php echo Form::hidden('logo_max_size', 5); ?>

                    <?php echo Form::hidden('logo_max_width', 4096); ?>

                    <?php echo Form::hidden('logo_max_height', 4096); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('logo')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('logo')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('name', trans('quickadmin.contact-companies.fields.name').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('name')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('name')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('address', trans('quickadmin.contact-companies.fields.address').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('address')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('address')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('website', trans('quickadmin.contact-companies.fields.website').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('website', old('website'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('website')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('website')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('email', trans('quickadmin.contact-companies.fields.email').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('email')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('email')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('tel', trans('quickadmin.contact-companies.fields.tel').'', ['class' => 'control-label']); ?>

                    <?php echo Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('tel')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('tel')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Contacts Région
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><?php echo app('translator')->getFromJson('quickadmin.contacts-region.fields.nom-prenom'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts-region.fields.fonction'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts-region.fields.tel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts-region.fields.email'); ?></th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="contacts-region">
                    <?php $__empty_1 = true; $__currentLoopData = old('contacts_regions', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php echo $__env->make('admin.contact_companies.contacts_regions_row', [
                            'index' => $index
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php $__currentLoopData = $contact_company->contactsRegion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('admin.contact_companies.contacts_regions_row', [
                                'index' => 'id-' . $item->id,
                                'field' => $item
                            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new"><?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?></a>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Groupe sectoriel
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><?php echo app('translator')->getFromJson('quickadmin.liste-groupe-sectoriel.fields.nom-prenom'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-groupe-sectoriel.fields.fonction'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-groupe-sectoriel.fields.tel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-groupe-sectoriel.fields.email'); ?></th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="groupe-sectoriel">
                    <?php $__empty_1 = true; $__currentLoopData = old('liste_groupe_sectoriels', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php echo $__env->make('admin.contact_companies.liste_groupe_sectoriels_row', [
                            'index' => $index
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php $__currentLoopData = $contact_company->listeGroupeSectoriel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('admin.contact_companies.liste_groupe_sectoriels_row', [
                                'index' => 'id-' . $item->id,
                                'field' => $item
                            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new"><?php echo app('translator')->getFromJson('quickadmin.qa_add_new'); ?></a>
        </div>
    </div>

    <?php echo Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##

    <script type="text/html" id="contacts-region-template">
        <?php echo $__env->make('admin.contact_companies.contacts_regions_row', [
            'index' => '_INDEX_'
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </script>

    <script type="text/html" id="groupe-sectoriel-template">
        <?php echo $__env->make('admin.contact_companies.liste_groupe_sectoriels_row', [
            'index' => '_INDEX_'
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </script>

            <script>
        $('.add-new').click(function () {
            var tableBody = $(this).parent().find('tbody');
            var template = $('#' + tableBody.attr('id') + '-template').html();
            var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
            if (isNaN(lastIndex)) {
                lastIndex = 0;
            }
            tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
            return false;
        });
        $(document).on('click', '.remove', function () {
            var row = $(this).parentsUntil('tr').parent();
            row.remove();
            return false;
        });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>