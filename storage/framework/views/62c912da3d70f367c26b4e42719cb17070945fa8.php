<?php $__env->startSection('content'); ?>

<style>
        #map-canvas{
            width: 600px;
            height: 580px;
        }

        
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDegGHfNMFeCJcd4E9Nh0cPpQhZTpOtviU&libraries=places" type="text/javascript"></script>
    <h3 class="page-title"><?php echo e($personnel_du_bngrc->nom_prenom); ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- <?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?> -->Détails
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.photo'); ?></th>
                            <td field-key='photo'><?php if($personnel_du_bngrc->photo): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $personnel_du_bngrc->photo)); ?>" target="_blank"><img src="<?php echo e(asset(env('UPLOAD_PATH').'/thumb/' . $personnel_du_bngrc->photo)); ?>"/></a>
                            <?php else: ?> 

                                <img src="<?php echo e(url('/images/user.png')); ?>" style="width: 70px; height: 70px;" />

                            <?php endif; ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.fonction'); ?></th>
                            <td field-key='fonction'><?php echo e(isset($personnel_du_bngrc->fonction) ? $personnel_du_bngrc->fonction : '--'); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.nom-prenom'); ?></th>
                            <td field-key='nom_prenom'><?php echo e($personnel_du_bngrc->nom_prenom); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Téléphone</th>
                            <td field-key='tel'><?php echo e(isset($personnel_du_bngrc->tel) ? $personnel_du_bngrc->tel : '--'); ?> / <?php echo e(isset($personnel_du_bngrc->tel2) ? $personnel_du_bngrc->tel2 : '--'); ?></td>
                        </tr>
                        
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.email'); ?></th>
                            <td field-key='email'><?php echo e(isset($personnel_du_bngrc->email) ? $personnel_du_bngrc->email : '--'); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.adresse'); ?></th>
                            <td field-key='adresse'><?php echo e(isset($personnel_du_bngrc->adresse) ? $personnel_du_bngrc->adresse : '--'); ?></td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.competence-formation'); ?></th>
                            <td field-key='competence_formation'>
                                <?php $__currentLoopData = $personnel_du_bngrc->competence_formation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleCompetenceFormation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e(isset($singleCompetenceFormation->titre) ? $singleCompetenceFormation->titre : '--'); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.capacites'); ?></th>
                            <td field-key='capacites'>
                                <?php $__currentLoopData = $personnel_du_bngrc->capacites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleCapacites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e(isset($singleCapacites->titre) ? $singleCapacites->titre : '--'); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:grey; width: 200px; color: white;">Date d'embauche</th>
                            <td field-key='date_embauche'><?php echo e(isset($personnel_du_bngrc->date_embauche) ? $personnel_du_bngrc->date_embauche : '--'); ?></td>
                        </tr>
                        <tr>
                            <?php $stat = e(isset($personnel_du_bngrc->statut->nom) ? $personnel_du_bngrc->statut->nom : ''); $color = null; ?>

                                                                <?php switch ($stat) {
                                                                        case "Disponible":
                                                                            $color = 'green';
                                                                            break;
                                                                        case "Occupé":
                                                                            $color = 'red';
                                                                            break;
                                                                        case "En mission":
                                                                            $color = 'orange';
                                                                            break;
                                                                        case "Absent":
                                                                            $color = 'black';
                                                                            break;
                                                                        case "Au bureau":
                                                                            $color = 'yellow';
                                                                            break;
                                                                        default:
                                                                            $color = 'grey';
                                                                            break;
                                                                }?>

                                                                
                                                                <?php 

                                                                $font = null;


                                                                if ($color == "yellow" || $color == "orange" || $color == "green"){
                                                                    $font = "black";

                                                                }else{ $font = "white"; }


                                                                ?>




                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.statut'); ?></th>
                            <td field-key='statut' style="background-color: <?= $color ?>; color: <?= $font ?>;"><?php echo e(isset($personnel_du_bngrc->statut->nom) ? $personnel_du_bngrc->statut->nom : ''); ?></td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.latitude'); ?></th>
                            <td field-key='latitude'><?php echo e($personnel_du_bngrc->latitude); ?></td>
                        </tr>
                        <tr style="display: none;">
                            <th style="background-color:grey; width: 200px; color: white;"><?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.fields.longitude'); ?></th>
                            <td field-key='longitude'><?php echo e($personnel_du_bngrc->longitude); ?></td>
                        </tr>
                    </table>
                    <a href="<?php echo e(route('admin.personnel_du_bngrcs.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('personnel_du_bngrc_edit')): ?>
                       <a href="<?php echo e(route('admin.personnel_du_bngrcs.edit',[$personnel_du_bngrc->id])); ?>" class="btn btn-info fa fa-edit"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                    <?php endif; ?>
                </div>
                <div id="map-canvas" class="box box-warning col-md-6"></div></br>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#absence" aria-controls="absence" role="tab" data-toggle="tab">Absence</a></li>
<li role="presentation" class=""><a href="#sortie" aria-controls="sortie" role="tab" data-toggle="tab">Sortie</a></li>
<li role="presentation" class=""><a href="#om" aria-controls="om" role="tab" data-toggle="tab">OM</a></li>
<!-- <li role="presentation" class=""><a href="#assetshistory" aria-controls="assetshistory" role="tab" data-toggle="tab">Historique</a></li>
<li role="presentation" class=""><a href="#inventaire" aria-controls="inventaire" role="tab" data-toggle="tab">Inventaire</a></li> -->
<li role="presentation" class=""><a href="#missions" aria-controls="missions" role="tab" data-toggle="tab">Missions</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Tâches</a></li>
<li role="presentation" class=""><a href="#assets" aria-controls="assets" role="tab" data-toggle="tab">Matériels</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="absence">
<table class="table table-bordered table-striped <?php echo e(count($absences) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.absence.fields.personnel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.absence.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.absence.fields.date-fin'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.absence.fields.motif'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($absences) > 0): ?>
            <?php $__currentLoopData = $absences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($absence->id); ?>">
                    <td field-key='personnel'><?php echo e(isset($absence->personnel->nom_prenom) ? $absence->personnel->nom_prenom : ''); ?></td>
                                <td field-key='date'><?php echo e($absence->date); ?></td>
                                <td field-key='date_fin'><?php echo e($absence->date_fin); ?></td>
                                <td field-key='motif'><?php echo $absence->motif; ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('absence_view')): ?>
                                    <a href="<?php echo e(route('admin.absences.show',[$absence->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('absence_edit')): ?>
                                    <a href="<?php echo e(route('admin.absences.edit',[$absence->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('absence_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.absences.destroy', $absence->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="9"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="sortie">
<table class="table table-bordered table-striped <?php echo e(count($sorties) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.parsonnel'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.motif'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.dateheurfin'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.statut'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.reponsable-sortie'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.sortie.fields.location'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($sorties) > 0): ?>
            <?php $__currentLoopData = $sorties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sorty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($sorty->id); ?>">
                    <td field-key='parsonnel' style="width: 20px;"><?php echo e(isset($sorty->parsonnel->nom_prenom) ? $sorty->parsonnel->nom_prenom : ''); ?></td>
                                <td field-key='stock'><?php echo e(isset($sorty->stock->designation) ? $sorty->stock->designation : ''); ?></td>
                                <td field-key='quantite'><?php echo e($sorty->quantite); ?></td>
                                <td field-key='unite'><?php echo e($sorty->unite); ?></td>
                                <td field-key='motif'><?php echo $sorty->motif; ?></td>
                                <td field-key='date'><?php echo e($sorty->date); ?></td>
                                <td field-key='dateheurfin'><?php echo e($sorty->dateheurfin); ?></td>
                                <td field-key='statut'><?php echo e(isset($sorty->statut->nom) ? $sorty->statut->nom : ''); ?></td>
                                <td field-key='reponsable_sortie'><?php echo e($sorty->reponsable_sortie); ?></td>
                                <td field-key='location'><?php echo e($sorty->location_address); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_view')): ?>
                                    <a href="<?php echo e(route('admin.sorties.show',[$sorty->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_edit')): ?>
                                    <a href="<?php echo e(route('admin.sorties.edit',[$sorty->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.sorties.destroy', $sorty->id])); ?>

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
<div role="tabpanel" class="tab-pane " id="om">
<table class="table table-bordered table-striped <?php echo e(count($oms) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.ordonnee-a'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.destination'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.itineraire'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.depart'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.duree'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.prise-en-charge'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.fichier-om'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.etat'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.rapport-de-mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.remise-rapport'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.om.fields.etat-rapport-de-mission'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($oms) > 0): ?>
            <?php $__currentLoopData = $oms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $om): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($om->id); ?>">
                    <td field-key='mission' style="width: 20px;"><?php echo e(isset($om->mission->objet) ? $om->mission->objet : ''); ?></td>
                                <td field-key='ordonnee_a'><?php echo e(isset($om->ordonnee_a->nom_prenom) ? $om->ordonnee_a->nom_prenom : ''); ?></td>
                                <td field-key='destination'><?php echo e($om->destination); ?></td>
                                <td field-key='itineraire'><?php echo e($om->itineraire); ?></td>
                                <td field-key='depart'><?php echo e($om->depart); ?></td>
                                <td field-key='duree'><?php echo e($om->duree); ?></td>
                                <td field-key='prise_en_charge'>
                                    <?php $__currentLoopData = $om->prise_en_charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePriseEnCharge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singlePriseEnCharge->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='fichier_om'><?php if($om->fichier_om): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->fichier_om)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='etat'><?php echo e(isset($om->etat->nom) ? $om->etat->nom : ''); ?></td>
                                <td field-key='rapport_de_mission'><?php if($om->rapport_de_mission): ?><a href="<?php echo e(asset(env('UPLOAD_PATH').'/' . $om->rapport_de_mission)); ?>" target="_blank">Download file</a><?php endif; ?></td>
                                <td field-key='remise_rapport'><?php echo e($om->remise_rapport); ?></td>
                                <td field-key='etat_rapport_de_mission'><?php echo e(isset($om->etat_rapport_de_mission->nom) ? $om->etat_rapport_de_mission->nom : ''); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_view')): ?>
                                    <a href="<?php echo e(route('admin.oms.show',[$om->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_edit')): ?>
                                    <a href="<?php echo e(route('admin.oms.edit',[$om->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.oms.destroy', $om->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="17"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="assetshistory">
<table class="table table-bordered table-striped <?php echo e(count($assets_histories) > 0 ? 'datatable' : ''); ?>">
    <thead>
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
                    <td style="width: 20px;"><?php echo e(isset($assets_history->created_at) ? $assets_history->created_at : ''); ?></td>
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
<div role="tabpanel" class="tab-pane " id="inventaire">
<table class="table table-bordered table-striped <?php echo e(count($inventaires) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.stock'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.quantite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.unite'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.materiel-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.responsable-id'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.inventaire.fields.destination'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($inventaires) > 0): ?>
            <?php $__currentLoopData = $inventaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($inventaire->id); ?>">
                    <td field-key='date'><?php echo e($inventaire->date); ?></td>
                                <td field-key='mission'><?php echo e(isset($inventaire->mission->objet) ? $inventaire->mission->objet : ''); ?></td>
                                <td field-key='stock'><?php echo e(isset($inventaire->stock->designation) ? $inventaire->stock->designation : ''); ?></td>
                                <td field-key='quantite'><?php echo e($inventaire->quantite); ?></td>
                                <td field-key='unite'><?php echo e($inventaire->unite); ?></td>
                                <td field-key='materiel_id'>
                                    <?php $__currentLoopData = $inventaire->materiel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleMaterielId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleMaterielId->title); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='responsable_id'>
                                    <?php $__currentLoopData = $inventaire->responsable_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleResponsableId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleResponsableId->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td field-key='destination'><?php echo e($inventaire->destination); ?></td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_view')): ?>
                                    <a href="<?php echo e(route('admin.inventaires.show',[$inventaire->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_edit')): ?>
                                    <a href="<?php echo e(route('admin.inventaires.edit',[$inventaire->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.inventaires.destroy', $inventaire->id])); ?>

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
<div role="tabpanel" class="tab-pane " id="missions">
<table class="table table-bordered table-striped <?php echo e(count($missions) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th style="width: 20px;"><?php echo app('translator')->getFromJson('quickadmin.missions.fields.objet'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.location'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-deb'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.date-fin'); ?></th>
                        <!-- <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.personnel-id'); ?></th> -->
                        <th>Progression</th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.missions.fields.stat'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($missions) > 0): ?>
            <?php $__currentLoopData = $missions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($mission->id); ?>">
                    <td field-key='objet' style="width: 20px;"><?php echo e($mission->objet); ?></td>
                                <td field-key='location'><?php echo e($mission->location); ?></td>
                                <td field-key='date_deb'><?php echo e($mission->date_deb); ?></td>
                                <td field-key='date_fin'><?php echo e($mission->date_fin); ?></td>
                                <!-- <td field-key='personnel_id'>
                                    <?php $__currentLoopData = $mission->personnel_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePersonnelId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singlePersonnelId->nom_prenom); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td> -->
                                <td field-key='progression'><?php echo e($mission->progression); ?> %</td>
                                <td field-key='stat'><?php echo e(isset($mission->stat->name) ? $mission->stat->name : ''); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.restore', $mission->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_delete')): ?>
                                                                        <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.perma_del', $mission->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_view')): ?>
                                    <a href="<?php echo e(route('admin.missions.show',[$mission->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('quickadmin.qa_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_edit')): ?>
                                    <a href="<?php echo e(route('admin.missions.edit',[$mission->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('quickadmin.qa_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.missions.destroy', $mission->id])); ?>

                                    <?php echo Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="17"><?php echo app('translator')->getFromJson('quickadmin.qa_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped <?php echo e(count($tasks) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.type'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.mission'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.description'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.tasks.fields.attachment'); ?></th>
                        <th>Date d'échéance</th>
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
                    <td field-key='type' style="width: 20px;"><?php echo e(isset($task->type->nom) ? $task->type->nom : ''); ?></td>
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
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped <?php echo e(count($tasks) > 0 ? 'datatable' : ''); ?>">
    <thead>
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
                    <td field-key='type' style="width: 20px;"><?php echo e(isset($task->type->nom) ? $task->type->nom : ''); ?></td>
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
<div role="tabpanel" class="tab-pane " id="assets">
<table class="table table-bordered table-striped <?php echo e(count($assets) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.category'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.serial-number'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.title'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.photo1'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.photo2'); ?></th>
                        <th><?php echo app('translator')->getFromJson('quickadmin.assets.fields.photo3'); ?></th>
                        <th>Date d'acquisition</th>
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
                    <td field-key='category' style="width: 20px;"><?php echo e(isset($asset->category->title) ? $asset->category->title : ''); ?></td>
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

            <a href="<?php echo e(route('admin.personnel_du_bngrcs.index')); ?>" class="btn btn-default fa fa-arrow-circle-left"><?php echo app('translator')->getFromJson('quickadmin.qa_back_to_list'); ?></a>
        </div>
    </div>

    <script>
        
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: <?php echo e($personnel_du_bngrc->latitude); ?>,
                lng:  <?php echo e($personnel_du_bngrc->longitude); ?>

            },
            zoom:6

        });


        function icon_img(){
            return "<?php echo e(url('/icon/placeholder.png')); ?>";

        }

        var iconBase = icon_img();





        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3>'+'<?php echo e($personnel_du_bngrc->nom_prenom); ?>'+'</h3>'+
      
      '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
            
            
            
        

        var marker = new google.maps.Marker({
            position:{
                lat: <?php echo e($personnel_du_bngrc->latitude); ?>,
                lng:  <?php echo e($personnel_du_bngrc->longitude); ?>

            },
            map: map,
            draggable:false,
            icon: iconBase
            

        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>