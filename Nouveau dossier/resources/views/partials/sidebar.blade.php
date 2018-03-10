@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('etat_du_personnel_access')
            <li class="{{ $request->segment(2) == 'etat_du_personnels' ? 'active' : '' }}">
                <a href="{{ route('admin.etat_du_personnels.index') }}">
                    <i class="fa fa-calendar-check-o"></i>
                    <span class="title">@lang('quickadmin.etat-du-personnel.title')</span>
                </a>
            </li>
            @endcan
            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('user_action_access')
                <li class="{{ $request->segment(2) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('dropdown_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-zip-o"></i>
                    <span class="title">@lang('quickadmin.dropdown.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('region_access')
                <li class="{{ $request->segment(2) == 'regions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.regions.index') }}">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                @lang('quickadmin.region.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('province_access')
                <li class="{{ $request->segment(2) == 'provinces' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.provinces.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.province.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('district_access')
                <li class="{{ $request->segment(2) == 'districts' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.districts.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.district.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('prefecture_access')
                <li class="{{ $request->segment(2) == 'prefectures' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.prefectures.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.prefecture.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('etat_impression_access')
                <li class="{{ $request->segment(2) == 'etat_impressions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.etat_impressions.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.etat-impression.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('type_risque_access')
                <li class="{{ $request->segment(2) == 'type_risques' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.type_risques.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.type-risque.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('groupe_sectoriel_access')
                <li class="{{ $request->segment(2) == 'groupe_sectoriels' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.groupe_sectoriels.index') }}">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                @lang('quickadmin.groupe-sectoriel.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('unite_access')
                <li class="{{ $request->segment(2) == 'unites' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.unites.index') }}">
                            <i class="fa fa-balance-scale"></i>
                            <span class="title">
                                @lang('quickadmin.unite.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('etat_om_access')
                <li class="{{ $request->segment(2) == 'etat_oms' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.etat_oms.index') }}">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                @lang('quickadmin.etat-om.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('etat_rapport_om_access')
                <li class="{{ $request->segment(2) == 'etat_rapport_oms' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.etat_rapport_oms.index') }}">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                @lang('quickadmin.etat-rapport-om.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('gestion_des_contact_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-phone-square"></i>
                    <span class="title">@lang('quickadmin.gestion-des-contacts.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('contact_company_access')
                <li class="{{ $request->segment(2) == 'contact_companies' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contact_companies.index') }}">
                            <i class="fa fa-building-o"></i>
                            <span class="title">
                                @lang('quickadmin.contact-companies.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('contact_access')
                <li class="{{ $request->segment(2) == 'contacts' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contacts.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span class="title">
                                @lang('quickadmin.contacts.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('chef_de_region_access')
                <li class="{{ $request->segment(2) == 'chef_de_regions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.chef_de_regions.index') }}">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                @lang('quickadmin.chef-de-region.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('liste_des_prefet_access')
                <li class="{{ $request->segment(2) == 'liste_des_prefets' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.liste_des_prefets.index') }}">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                @lang('quickadmin.liste-des-prefets.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('chef_district_access')
                <li class="{{ $request->segment(2) == 'chef_districts' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.chef_districts.index') }}">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                @lang('quickadmin.chef-district.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('personnel_du_bngrc_access')
                <li class="{{ $request->segment(2) == 'personnel_du_bngrcs' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.personnel_du_bngrcs.index') }}">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                @lang('quickadmin.personnel-du-bngrc.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('contacts_region_access')
                <li class="{{ $request->segment(2) == 'contacts_regions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contacts_regions.index') }}">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                @lang('quickadmin.contacts-region.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('contact_district_access')
                <li class="{{ $request->segment(2) == 'contact_districts' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contact_districts.index') }}">
                            <i class="fa fa-folder-o"></i>
                            <span class="title">
                                @lang('quickadmin.contact-district.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('liste_groupe_sectoriel_access')
                <li class="{{ $request->segment(2) == 'liste_groupe_sectoriels' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.liste_groupe_sectoriels.index') }}">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                @lang('quickadmin.liste-groupe-sectoriel.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('carte_access')
                <li class="{{ $request->segment(2) == 'cartes' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.cartes.index') }}">
                            <i class="fa fa-map"></i>
                            <span class="title">
                                @lang('quickadmin.carte.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('competance_formation_access')
                <li class="{{ $request->segment(2) == 'competance_formations' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.competance_formations.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.competance-formation.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('capacite_access')
                <li class="{{ $request->segment(2) == 'capacites' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.capacites.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.capacite.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('absence_access')
                <li class="{{ $request->segment(2) == 'absences' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.absences.index') }}">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                @lang('quickadmin.absence.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('gestion_des_mission_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-maxcdn"></i>
                    <span class="title">@lang('quickadmin.gestion-des-missions.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('mission_access')
                <li class="{{ $request->segment(2) == 'missions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.missions.index') }}">
                            <i class="fa fa-list-alt"></i>
                            <span class="title">
                                @lang('quickadmin.missions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('inventaire_access')
                <li class="{{ $request->segment(2) == 'inventaires' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.inventaires.index') }}">
                            <i class="fa fa-list-alt"></i>
                            <span class="title">
                                @lang('quickadmin.inventaire.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('statut_mission_access')
                <li class="{{ $request->segment(2) == 'statut_missions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.statut_missions.index') }}">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                @lang('quickadmin.statut-mission.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('om_access')
                <li class="{{ $request->segment(2) == 'oms' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.oms.index') }}">
                            <i class="fa fa-calendar-check-o"></i>
                            <span class="title">
                                @lang('quickadmin.om.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('google_map_mission_access')
                <li class="{{ $request->segment(2) == 'google_map_missions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.google_map_missions.index') }}">
                            <i class="fa fa-map-marker"></i>
                            <span class="title">
                                @lang('quickadmin.google-map-mission.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('gestion_des_tach_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span class="title">@lang('quickadmin.gestion-des-taches.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('task_access')
                <li class="{{ $request->segment(2) == 'tasks' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.tasks.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.tasks.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_status_access')
                <li class="{{ $request->segment(2) == 'task_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_statuses.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('quickadmin.task-statuses.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_tag_access')
                <li class="{{ $request->segment(2) == 'task_tags' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_tags.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('quickadmin.task-tags.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('type_tache_access')
                <li class="{{ $request->segment(2) == 'type_taches' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.type_taches.index') }}">
                            <i class="fa fa-outdent"></i>
                            <span class="title">
                                @lang('quickadmin.type-tache.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_calendar_access')
                <li class="{{ $request->segment(2) == 'task_calendars' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_calendars.index') }}">
                            <i class="fa fa-calendar"></i>
                            <span class="title">
                                @lang('quickadmin.task-calendar.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('gestion_des_matériel_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span class="title">@lang('quickadmin.gestion-des-materiels.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('asset_access')
                <li class="{{ $request->segment(2) == 'assets' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets.index') }}">
                            <i class="fa fa-book"></i>
                            <span class="title">
                                @lang('quickadmin.assets.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('assets_category_access')
                <li class="{{ $request->segment(2) == 'assets_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets_categories.index') }}">
                            <i class="fa fa-tags"></i>
                            <span class="title">
                                @lang('quickadmin.assets-categories.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('assets_location_access')
                <li class="{{ $request->segment(2) == 'assets_locations' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets_locations.index') }}">
                            <i class="fa fa-home"></i>
                            <span class="title">
                                @lang('quickadmin.assets-locations.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('assets_status_access')
                <li class="{{ $request->segment(2) == 'assets_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets_statuses.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('quickadmin.assets-statuses.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('assets_history_access')
                <li class="{{ $request->segment(2) == 'assets_histories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets_histories.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.assets-history.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('google_map_materiel_access')
                <li class="{{ $request->segment(2) == 'google_map_materiels' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.google_map_materiels.index') }}">
                            <i class="fa fa-map-marker"></i>
                            <span class="title">
                                @lang('quickadmin.google-map-materiel.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('stock_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span class="title">@lang('quickadmin.stock.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('liste_stock_access')
                <li class="{{ $request->segment(2) == 'liste_stocks' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.liste_stocks.index') }}">
                            <i class="fa fa-list-ol"></i>
                            <span class="title">
                                @lang('quickadmin.liste-stock.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('entree_access')
                <li class="{{ $request->segment(2) == 'entrees' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.entrees.index') }}">
                            <i class="fa fa-sign-in"></i>
                            <span class="title">
                                @lang('quickadmin.entree.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('sortie_access')
                <li class="{{ $request->segment(2) == 'sorties' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.sorties.index') }}">
                            <i class="fa fa-sign-out"></i>
                            <span class="title">
                                @lang('quickadmin.sortie.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('internal_notification_access')
            <li class="{{ $request->segment(2) == 'internal_notifications' ? 'active' : '' }}">
                <a href="{{ route('admin.internal_notifications.index') }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">@lang('quickadmin.internal-notifications.title')</span>
                </a>
            </li>
            @endcan
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
