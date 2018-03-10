<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.title'); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
           <!--  <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?> --><?php echo e($chef_de_region->nom_prenom); ?>

        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.province'); ?></th>
                            <td field-key='province'><?php echo e(isset($chef_de_region->province->name) ? $chef_de_region->province->name : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.region'); ?></th>
                            <td field-key='region'><?php echo e(isset($chef_de_region->region->name) ? $chef_de_region->region->name : ''); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.nom-prenom'); ?></th>
                            <td field-key='nom_prenom'><?php echo e($chef_de_region->nom_prenom); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.tel'); ?></th>
                            <td field-key='tel'><?php echo e($chef_de_region->tel); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.tel2'); ?></th>
                            <td field-key='tel2'><?php echo e($chef_de_region->tel2); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.chef-de-region.fields.email'); ?></th>
                            <td field-key='email'><?php echo e($chef_de_region->email); ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.chef_de_regions.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>