<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Gestion des contacts
        Gate::define('gestion_des_contact_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });

        // Auth gates for: Contact companies
        Gate::define('contact_company_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('contact_company_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('contact_company_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Contacts
        Gate::define('contact_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('contact_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('contact_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Dropdown
        Gate::define('dropdown_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Region
        Gate::define('region_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('region_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('region_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('region_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('region_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Province
        Gate::define('province_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('province_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('province_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('province_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('province_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: District
        Gate::define('district_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('district_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('district_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('district_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('district_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Chef de region
        Gate::define('chef_de_region_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('chef_de_region_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('chef_de_region_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('chef_de_region_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('chef_de_region_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Prefecture
        Gate::define('prefecture_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('prefecture_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('prefecture_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('prefecture_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('prefecture_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Liste des prefets
        Gate::define('liste_des_prefet_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('liste_des_prefet_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('liste_des_prefet_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('liste_des_prefet_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('liste_des_prefet_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Chef district
        Gate::define('chef_district_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('chef_district_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('chef_district_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('chef_district_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('chef_district_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Personnel du bngrc
        Gate::define('personnel_du_bngrc_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('personnel_du_bngrc_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('personnel_du_bngrc_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('personnel_du_bngrc_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('personnel_du_bngrc_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Etat impression
        Gate::define('etat_impression_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('etat_impression_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('etat_impression_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('etat_impression_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('etat_impression_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Contacts region
        Gate::define('contacts_region_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('contacts_region_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contacts_region_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contacts_region_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('contacts_region_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Internal notifications
        Gate::define('internal_notification_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('internal_notification_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('internal_notification_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('internal_notification_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('internal_notification_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Contact district
        Gate::define('contact_district_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('contact_district_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_district_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_district_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('contact_district_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Groupe sectoriel
        Gate::define('groupe_sectoriel_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('groupe_sectoriel_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('groupe_sectoriel_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('groupe_sectoriel_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('groupe_sectoriel_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Liste groupe sectoriel
        Gate::define('liste_groupe_sectoriel_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('liste_groupe_sectoriel_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('liste_groupe_sectoriel_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('liste_groupe_sectoriel_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('liste_groupe_sectoriel_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Gestion des taches
        Gate::define('gestion_des_tach_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });

        // Auth gates for: Task statuses
        Gate::define('task_status_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('task_status_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('task_status_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('task_status_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('task_status_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Task tags
        Gate::define('task_tag_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('task_tag_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('task_tag_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('task_tag_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('task_tag_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Tasks
        Gate::define('task_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('task_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('task_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('task_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('task_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Task calendar
        Gate::define('task_calendar_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });

        // Auth gates for: Google map
        Gate::define('google_map_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Type risque
        Gate::define('type_risque_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_risque_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_risque_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_risque_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_risque_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Gestion des missions
        Gate::define('gestion_des_mission_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });

        // Auth gates for: Missions
        Gate::define('mission_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 5]);
        });
        Gate::define('mission_create', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('mission_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('mission_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 5]);
        });
        Gate::define('mission_delete', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });

        // Auth gates for: Google map mission
        Gate::define('google_map_mission_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });

        // Auth gates for: Gestion des matériels
        Gate::define('gestion_des_matériel_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });

        // Auth gates for: Assets categories
        Gate::define('assets_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Assets statuses
        Gate::define('assets_status_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Assets locations
        Gate::define('assets_location_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Assets
        Gate::define('asset_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('asset_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('asset_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('asset_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('asset_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Assets history
        Gate::define('assets_history_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Google map materiel
        Gate::define('google_map_materiel_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });

        // Auth gates for: Carte
        Gate::define('carte_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Competance formation
        Gate::define('competance_formation_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('competance_formation_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('competance_formation_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('competance_formation_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });
        Gate::define('competance_formation_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Statut mission
        Gate::define('statut_mission_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('statut_mission_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('statut_mission_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('statut_mission_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('statut_mission_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Stock
        Gate::define('stock_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });

        // Auth gates for: Unite
        Gate::define('unite_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('unite_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('unite_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('unite_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('unite_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Liste stock
        Gate::define('liste_stock_access', function ($user) {
            return in_array($user->role_id, [1, 2, 5, 3]);
        });
        Gate::define('liste_stock_create', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('liste_stock_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('liste_stock_view', function ($user) {
            return in_array($user->role_id, [1, 2, 5, 3]);
        });
        Gate::define('liste_stock_delete', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });

        // Auth gates for: Entree
        Gate::define('entree_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('entree_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('entree_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('entree_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('entree_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Sortie
        Gate::define('sortie_access', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('sortie_create', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('sortie_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('sortie_view', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('sortie_delete', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });

        // Auth gates for: Inventaire
        Gate::define('inventaire_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('inventaire_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('inventaire_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('inventaire_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('inventaire_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Type tache
        Gate::define('type_tache_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_tache_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_tache_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_tache_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_tache_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Etat om
        Gate::define('etat_om_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('etat_om_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('etat_om_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('etat_om_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('etat_om_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Etat rapport om
        Gate::define('etat_rapport_om_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('etat_rapport_om_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('etat_rapport_om_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('etat_rapport_om_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('etat_rapport_om_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Om
        Gate::define('om_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4]);
        });
        Gate::define('om_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('om_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('om_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4]);
        });
        Gate::define('om_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Capacite
        Gate::define('capacite_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4]);
        });
        Gate::define('capacite_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('capacite_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('capacite_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4]);
        });
        Gate::define('capacite_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Absence
        Gate::define('absence_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4]);
        });
        Gate::define('absence_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('absence_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('absence_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4]);
        });
        Gate::define('absence_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Etat du personnel
        Gate::define('etat_du_personnel_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Statut personnel
        Gate::define('statut_personnel_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('statut_personnel_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('statut_personnel_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('statut_personnel_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('statut_personnel_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Status sortie
        Gate::define('status_sortie_access', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('status_sortie_create', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('status_sortie_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('status_sortie_view', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('status_sortie_delete', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });

    }
}
