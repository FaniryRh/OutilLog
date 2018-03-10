<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.contact-companies.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?>
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.logo'); ?></th>
                            <td field-key='logo'><?php if($contact_company->logo): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $contact_company->logo)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $contact_company->logo)); ?>"/></a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.name'); ?></th>
                            <td field-key='name'><?php echo e($contact_company->name); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.address'); ?></th>
                            <td field-key='address'><?php echo e($contact_company->address); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.website'); ?></th>
                            <td field-key='website'><?php echo e($contact_company->website); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.email'); ?></th>
                            <td field-key='email'><?php echo e($contact_company->email); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.contact-companies.fields.tel'); ?></th>
                            <td field-key='tel'><?php echo e($contact_company->tel); ?></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab">Contacts</a></li>
<li role="presentation" class=""><a href="#contactdistrict" aria-controls="contactdistrict" role="tab" data-toggle="tab">Contacts District</a></li>
<li role="presentation" class=""><a href="#contactsregion" aria-controls="contactsregion" role="tab" data-toggle="tab">Contacts Région</a></li>
<li role="presentation" class=""><a href="#listegroupesectoriel" aria-controls="listegroupesectoriel" role="tab" data-toggle="tab">Groupe sectoriel</a></li>
<li role="presentation" class=""><a href="#reunion" aria-controls="reunion" role="tab" data-toggle="tab">Réunion</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Tâches</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="contacts">
<table class="table table-bordered table-striped <?php echo e(count($contacts) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
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
                    <td field-key='company'><?php echo e(isset($contact->company->name) ? $contact->company->name : ''); ?></td>
                                <td field-key='fonction'><?php echo e($contact->fonction); ?></td>
                                <td field-key='first_name'><?php echo e($contact->first_name); ?></td>
                                <td field-key='phone1'><?php echo e($contact->phone1); ?></td>
                                <td field-key='phone2'><?php echo e($contact->phone2); ?></td>
                                <td field-key='email'><?php echo e($contact->email); ?></td>
                                <td field-key='address'><?php echo e($contact->address); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_view')): ?>
                                    <a href="<?php echo e(route('admin.contacts.show',[$contact->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_edit')): ?>
                                    <a href="<?php echo e(route('admin.contacts.edit',[$contact->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
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
<div role="tabpanel" class="tab-pane " id="contactdistrict">
<table class="table table-bordered table-striped <?php echo e(count($contact_districts) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.contact-district.fields.nom-prenom'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-district.fields.organisme'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-district.fields.fonction'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-district.fields.tel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contact-district.fields.email'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($contact_districts) > 0): ?>
            <?php $__currentLoopData = $contact_districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact_district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($contact_district->id); ?>">
                    <td field-key='nom_prenom'><?php echo e($contact_district->nom_prenom); ?></td>
                                <td field-key='organisme'><?php echo e(isset($contact_district->organisme->name) ? $contact_district->organisme->name : ''); ?></td>
                                <td field-key='fonction'><?php echo e($contact_district->fonction); ?></td>
                                <td field-key='tel'><?php echo e($contact_district->tel); ?></td>
                                <td field-key='email'><?php echo e($contact_district->email); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_district_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_districts.restore', $contact_district->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_district_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_districts.perma_del', $contact_district->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_district_view')): ?>
                                    <a href="<?php echo e(route('admin.contact_districts.show',[$contact_district->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_district_edit')): ?>
                                    <a href="<?php echo e(route('admin.contact_districts.edit',[$contact_district->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_district_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_districts.destroy', $contact_district->id])); ?>

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
<div role="tabpanel" class="tab-pane " id="contactsregion">
<table class="table table-bordered table-striped <?php echo e(count($contacts_regions) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.contacts-region.fields.nom-prenom'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts-region.fields.fonction'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts-region.fields.tel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.contacts-region.fields.email'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($contacts_regions) > 0): ?>
            <?php $__currentLoopData = $contacts_regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacts_region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($contacts_region->id); ?>">
                    <td field-key='nom_prenom'><?php echo e($contacts_region->nom_prenom); ?></td>
                                <td field-key='fonction'><?php echo e($contacts_region->fonction); ?></td>
                                <td field-key='tel'><?php echo e($contacts_region->tel); ?></td>
                                <td field-key='email'><?php echo e($contacts_region->email); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contacts_region_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts_regions.restore', $contacts_region->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contacts_region_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts_regions.perma_del', $contacts_region->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contacts_region_view')): ?>
                                    <a href="<?php echo e(route('admin.contacts_regions.show',[$contacts_region->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contacts_region_edit')): ?>
                                    <a href="<?php echo e(route('admin.contacts_regions.edit',[$contacts_region->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contacts_region_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts_regions.destroy', $contacts_region->id])); ?>

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
<div role="tabpanel" class="tab-pane " id="listegroupesectoriel">
<table class="table table-bordered table-striped <?php echo e(count($liste_groupe_sectoriels) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.liste-groupe-sectoriel.fields.nom-prenom'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-groupe-sectoriel.fields.fonction'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-groupe-sectoriel.fields.tel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.liste-groupe-sectoriel.fields.email'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($liste_groupe_sectoriels) > 0): ?>
            <?php $__currentLoopData = $liste_groupe_sectoriels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liste_groupe_sectoriel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($liste_groupe_sectoriel->id); ?>">
                    <td field-key='nom_prenom'><?php echo e($liste_groupe_sectoriel->nom_prenom); ?></td>
                                <td field-key='fonction'><?php echo e($liste_groupe_sectoriel->fonction); ?></td>
                                <td field-key='tel'><?php echo e($liste_groupe_sectoriel->tel); ?></td>
                                <td field-key='email'><?php echo e($liste_groupe_sectoriel->email); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_groupe_sectoriel_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.restore', $liste_groupe_sectoriel->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_groupe_sectoriel_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.perma_del', $liste_groupe_sectoriel->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_groupe_sectoriel_view')): ?>
                                    <a href="<?php echo e(route('admin.liste_groupe_sectoriels.show',[$liste_groupe_sectoriel->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_groupe_sectoriel_edit')): ?>
                                    <a href="<?php echo e(route('admin.liste_groupe_sectoriels.edit',[$liste_groupe_sectoriel->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_groupe_sectoriel_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.destroy', $liste_groupe_sectoriel->id])); ?>

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
<div role="tabpanel" class="tab-pane " id="reunion">
<table class="table table-bordered table-striped <?php echo e(count($reunions) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
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
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped <?php echo e(count($tasks) > 0 ? 'datatable' : ''); ?>">
    <thead style="background-color: orange;">
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
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.contact_companies.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>