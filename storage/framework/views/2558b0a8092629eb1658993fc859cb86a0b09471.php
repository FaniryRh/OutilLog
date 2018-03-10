<?php $request = app('Illuminate\Http\Request'); ?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="<?php echo e($request->segment(1) == 'home' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/')); ?>">
                    <i class="fa fa-wrench"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.qa_dashboard'); ?></span>
                </a>
            </li>

            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('etat_du_personnel_access')): ?>
            <li class="<?php echo e($request->segment(2) == 'etat_du_personnels' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.etat_du_personnels.index')); ?>">
                    <i class="fa fa-calendar-check-o"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.etat-du-personnel.title'); ?></span>
                </a>
            </li>
            <?php endif; ?>
            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.user-management.title'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_action_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'user_actions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.user_actions.index')); ?>">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.user-actions.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'roles' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.roles.index')); ?>">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.roles.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'users' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.users.index')); ?>">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.users.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dropdown_access')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-zip-o"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.dropdown.title'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('region_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'regions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.regions.index')); ?>">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.region.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('province_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'provinces' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.provinces.index')); ?>">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.province.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('district_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'districts' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.districts.index')); ?>">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.district.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('prefecture_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'prefectures' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.prefectures.index')); ?>">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.prefecture.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('etat_impression_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'etat_impressions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.etat_impressions.index')); ?>">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.etat-impression.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('type_risque_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'type_risques' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.type_risques.index')); ?>">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.type-risque.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('groupe_sectoriel_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'groupe_sectoriels' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.groupe_sectoriels.index')); ?>">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.groupe-sectoriel.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('unite_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'unites' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.unites.index')); ?>">
                            <i class="fa fa-balance-scale"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.unite.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('etat_om_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'etat_oms' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.etat_oms.index')); ?>">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.etat-om.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('etat_rapport_om_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'etat_rapport_oms' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.etat_rapport_oms.index')); ?>">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.etat-rapport-om.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gestion_des_contact_access')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-phone-square"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.gestion-des-contacts.title'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'contact_companies' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.contact_companies.index')); ?>">
                            <i class="fa fa-building-o"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.contact-companies.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'contacts' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.contacts.index')); ?>">
                            <i class="fa fa-user-plus"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.contacts.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <!-- <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chef_de_region_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'chef_de_regions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.chef_de_regions.index')); ?>">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.chef-de-region.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_des_prefet_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'liste_des_prefets' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.liste_des_prefets.index')); ?>">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.liste-des-prefets.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chef_district_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'chef_districts' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.chef_districts.index')); ?>">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.chef-district.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?> -->
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('personnel_du_bngrc_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'personnel_du_bngrcs' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.personnel_du_bngrcs.index')); ?>">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.personnel-du-bngrc.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <!-- <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contacts_region_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'contacts_regions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.contacts_regions.index')); ?>">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.contacts-region.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_district_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'contact_districts' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.contact_districts.index')); ?>">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.contact-district.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_groupe_sectoriel_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'liste_groupe_sectoriels' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.liste_groupe_sectoriels.index')); ?>">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.liste-groupe-sectoriel.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?> -->
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('competance_formation_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'competance_formations' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.competance_formations.index')); ?>">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.competance-formation.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('capacite_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'capacites' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.capacites.index')); ?>">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.capacite.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('absence_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'absences' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.absences.index')); ?>">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.absence.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carte_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'cartes' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.cartes.index')); ?>">
                            <i class="fa fa-map"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.carte.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gestion_des_mission_access')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-maxcdn"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.gestion-des-missions.title'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mission_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'missions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.missions.index')); ?>">
                            <i class="fa fa-list-alt"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.missions.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventaire_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'inventaires' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.inventaires.index')); ?>">
                            <i class="fa fa-list-alt"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.inventaire.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <!-- <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('statut_mission_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'statut_missions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.statut_missions.index')); ?>">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.statut-mission.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?> -->
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('om_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'oms' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.oms.index')); ?>">
                            <i class="fa fa-calendar-check-o"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.om.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('google_map_mission_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'google_map_missions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.google_map_missions.index')); ?>">
                            <i class="fa fa-map-marker"></i>
                            <span class="title">
                                Carte
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gestion_des_tach_access')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.gestion-des-taches.title'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'tasks' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.tasks.index')); ?>">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.tasks.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <!-- <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_status_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'task_statuses' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.task_statuses.index')); ?>">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.task-statuses.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_tag_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'task_tags' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.task_tags.index')); ?>">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.task-tags.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('type_tache_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'type_taches' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.type_taches.index')); ?>">
                            <i class="fa fa-outdent"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.type-tache.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?> -->
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task_calendar_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'task_calendars' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.task_calendars.index')); ?>">
                            <i class="fa fa-calendar"></i>
                            <span class="title">
                                Calendrier
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gestion_des_matériel_access')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.gestion-des-materiels.title'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'assets' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.assets.index')); ?>">
                            <i class="fa fa-book"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.assets.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_category_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'assets_categories' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.assets_categories.index')); ?>">
                            <i class="fa fa-tags"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.assets-categories.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_location_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'assets_locations' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.assets_locations.index')); ?>">
                            <i class="fa fa-home"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.assets-locations.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <!-- <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_status_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'assets_statuses' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.assets_statuses.index')); ?>">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.assets-statuses.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets_history_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'assets_histories' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.assets_histories.index')); ?>">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.assets-history.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?> -->
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('google_map_materiel_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'google_map_materiels' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.google_map_materiels.index')); ?>">
                            <i class="fa fa-map-marker"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.google-map-materiel.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('stock_access')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.stock.title'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('liste_stock_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'liste_stocks' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.liste_stocks.index')); ?>">
                            <i class="fa fa-list-ol"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.liste-stock.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('entree_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'entrees' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.entrees.index')); ?>">
                            <i class="fa fa-sign-in"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.entree.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sortie_access')): ?>
                <li class="<?php echo e($request->segment(2) == 'sorties' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.sorties.index')); ?>">
                            <i class="fa fa-sign-out"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('quickadmin.sortie.title'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>
            <!-- <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('internal_notification_access')): ?>
            <li class="<?php echo e($request->segment(2) == 'internal_notifications' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.internal_notifications.index')); ?>">
                    <i class="fa fa-briefcase"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.internal-notifications.title'); ?></span>
                </a>
            </li>
            <?php endif; ?> -->
            

            

            



           <!--  <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('auth.change_password')); ?>">
                    <i class="fa fa-key"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.qa_change_password'); ?></span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('quickadmin.qa_logout'); ?></span>
                </a>
            </li> -->
        </ul>
    </section>
</aside>
<?php echo Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']); ?>

<button type="submit"><?php echo app('translator')->getFromJson('quickadmin.logout'); ?></button>
<?php echo Form::close(); ?>

