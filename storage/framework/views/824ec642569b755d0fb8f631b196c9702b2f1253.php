<?php $__env->startSection('content'); ?>
    <div class="row">
    
        

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $nbr_perso ?></h3>

              <p>Personnel du BNGRC</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo e(route('admin.personnel_du_bngrcs.index')); ?>" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $nbr_asset ?></h3>

              <p>Matériels</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
            <a href="<?php echo e(route('admin.assets.index')); ?>" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $nbr_stock ?></h3>

              <p>Stock</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
            <a href="<?php echo e(route('admin.liste_stocks.index')); ?>" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3><?= $nbr_reunion ?></h3>

                    <p>Réunion en attente</p>
                </div>
                <div class="icon">
                <i class="fa  fa-tasks"></i>
            </div>
            <a href="<?php echo e(route('admin.tasks.index')); ?>" class="small-box-footer">
              Voir la liste <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>


</div>




        <div class="row"> 
         <div class="col-md-12" >
                <div class="box box-warning">
                    <div class="box-header bg-blue">
                        <h3 class="box-title">Liste missions <span class="badge bg-orange">Total: <?= $nbr_mission ?></span></h3>
                    </div>
                <!-- /.box-header -->
                    <div class="box-body" style=" overflow-y:auto; max-height: 300px;">

                        <?php if(count($progress_mission) > 0): ?>
                        <?php $__currentLoopData = $progress_mission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><span class="label label-black bg-black"><a href="missions/<?php echo e($mission->id); ?>" style="color: white; "><?php echo e($mission->objet); ?></a></span><span class="badge bg-black">     <?php echo e($mission->progression); ?>%</span><code style="color: black;"><?php echo e($mission->date_deb); ?></code></p>

                            <div class="progress progress-sm active">
                                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow= "" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($mission->progression); ?>%">
                                                <span class="sr-only"></span>
                                            </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="19">Aucune mission</td>
                        </tr>
                    <?php endif; ?>
                        
                                          
                    </div>
                <!-- /.box-body -->
              </div>
          <!-- /.box -->
            </div>
            <div class="col-md-6">
                <div class="box box-warning">
                    <div class="box-header with-border bg-blue">
                        <h3 class="box-title">Statut missions <span class="badge bg-orange">Total: <?= $nbr_mission ?></span></h3>
                    </div>
                <!-- /.box-header -->
                    <div class="box-body">
                        <p><code style="color: black;">En cours <span class="badge bg-black"><?= $nbr_mission_encours ?></span></code></p>

                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow= "" aria-valuemin="0" aria-valuemax="100" style="width: <?= $pourcentage_encours ?>%">
                                <span class="sr-only"></span>
                            </div>
                        </div>
                        
                        <p><code style="color: black;">En attente <span class="badge bg-black"><?= $nbr_mission_enattente ?></span></code></p>

                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: <?= $pourcentage_enattente ?>%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                        
                        <p><code style="color: black;">Terminées <span class="badge bg-black"><?= $nbr_mission_terminee ?></span></code></p>

                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: <?= $pourcentage_terminee ?>%%">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>

                        <p><code style="color: black;">Annulées <span class="badge bg-black"><?= $nbr_mission_annulee ?></span></code></p>

                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: <?= $pourcentage_annulee ?>%">
                              <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>

                  
                    </div>
                <!-- /.box-body -->
              </div>
          <!-- /.box -->
            </div>

            <div class="col-md-6">
                <div class="box box-warning">
                    <div class="box-header with-border bg-blue">
                        <h3 class="box-title">Statut Tâches <span class="badge bg-orange"> Total: <?= $nbr_task ?></span></h3>
                    </div>
                <!-- /.box-header -->
                    <div class="box-body">
                        <p><code style="color: black;">En cours <span class="badge bg-black"><?= $nbr_task_encours ?> </span></code></p>

                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow= "" aria-valuemin="0" aria-valuemax="100" style="width: <?= $pourcentage_task_encours ?>%">
                                <span class="sr-only"><?= $pourcentage_encours ?>%</span>
                            </div>
                        </div>
                        
                        <p><code style="color: black;">En attente <span class="badge bg-black"><?= $nbr_task_enattente ?></span></code></p>

                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: <?= $pourcentage_task_enattente ?>%">
                                <span class="sr-only"><?= $pourcentage_enattente ?>%</span>
                            </div>
                        </div>
                        
                        <p><code style="color: black;">Terminées <span class="badge bg-black"><?= $nbr_task_terminee ?></span></code></p>

                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: <?= $pourcentage_task_terminee ?>%">
                                <span class="sr-only"><?= $pourcentage_terminee ?>%</span>
                            </div>
                        </div>

                        <p><code style="color: black;">Annulées <span class="badge bg-black"><?= $nbr_task_annulee ?></span></code></p>

                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: <?= $pourcentage_task_annulee ?>%">
                              <span class="sr-only"><?= $pourcentage_annulee ?>%</span>
                            </div>
                        </div>

                  
                    </div>
                <!-- /.box-body -->
              </div>
          <!-- /.box -->
            </div>

           
        
        </div>
      <!-- /.row -->








      

      <style>
        #map-canvas{
            width: 100%;
            height: 650px;
        }
    </style>


    <div class="panel panel-default box box-warning ">
      <div class="panel-heading bg-blue">

      Localisation




      </div>
      <div class="panel-body"> 

         <div id="map_canvas" style="width:auto;height:800px">

    <?php 
echo $a;
echo $c;
echo $d;

    ?>
      
    </div>


      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>