<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Social Login Routes..
Route::get('login/{driver}', 'Auth\LoginController@redirectToSocial')->name('auth.login.social');
Route::get('{driver}/callback', 'Auth\LoginController@handleSocialCallback')->name('auth.login.social_callback');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('contact_companies', 'Admin\ContactCompaniesController');
    Route::post('contact_companies_mass_destroy', ['uses' => 'Admin\ContactCompaniesController@massDestroy', 'as' => 'contact_companies.mass_destroy']);
    Route::resource('contacts', 'Admin\ContactsController');
    Route::post('contacts_mass_destroy', ['uses' => 'Admin\ContactsController@massDestroy', 'as' => 'contacts.mass_destroy']);
    Route::resource('regions', 'Admin\RegionsController');
    Route::post('regions_mass_destroy', ['uses' => 'Admin\RegionsController@massDestroy', 'as' => 'regions.mass_destroy']);
    Route::post('regions_restore/{id}', ['uses' => 'Admin\RegionsController@restore', 'as' => 'regions.restore']);
    Route::delete('regions_perma_del/{id}', ['uses' => 'Admin\RegionsController@perma_del', 'as' => 'regions.perma_del']);
    Route::resource('provinces', 'Admin\ProvincesController');
    Route::post('provinces_mass_destroy', ['uses' => 'Admin\ProvincesController@massDestroy', 'as' => 'provinces.mass_destroy']);
    Route::post('provinces_restore/{id}', ['uses' => 'Admin\ProvincesController@restore', 'as' => 'provinces.restore']);
    Route::delete('provinces_perma_del/{id}', ['uses' => 'Admin\ProvincesController@perma_del', 'as' => 'provinces.perma_del']);
    Route::resource('districts', 'Admin\DistrictsController');
    Route::post('districts_mass_destroy', ['uses' => 'Admin\DistrictsController@massDestroy', 'as' => 'districts.mass_destroy']);
    Route::post('districts_restore/{id}', ['uses' => 'Admin\DistrictsController@restore', 'as' => 'districts.restore']);
    Route::delete('districts_perma_del/{id}', ['uses' => 'Admin\DistrictsController@perma_del', 'as' => 'districts.perma_del']);
    Route::resource('chef_de_regions', 'Admin\ChefDeRegionsController');
    Route::post('chef_de_regions_mass_destroy', ['uses' => 'Admin\ChefDeRegionsController@massDestroy', 'as' => 'chef_de_regions.mass_destroy']);
    Route::post('chef_de_regions_restore/{id}', ['uses' => 'Admin\ChefDeRegionsController@restore', 'as' => 'chef_de_regions.restore']);
    Route::delete('chef_de_regions_perma_del/{id}', ['uses' => 'Admin\ChefDeRegionsController@perma_del', 'as' => 'chef_de_regions.perma_del']);
    Route::resource('prefectures', 'Admin\PrefecturesController');
    Route::post('prefectures_mass_destroy', ['uses' => 'Admin\PrefecturesController@massDestroy', 'as' => 'prefectures.mass_destroy']);
    Route::post('prefectures_restore/{id}', ['uses' => 'Admin\PrefecturesController@restore', 'as' => 'prefectures.restore']);
    Route::delete('prefectures_perma_del/{id}', ['uses' => 'Admin\PrefecturesController@perma_del', 'as' => 'prefectures.perma_del']);
    Route::resource('liste_des_prefets', 'Admin\ListeDesPrefetsController');
    Route::post('liste_des_prefets_mass_destroy', ['uses' => 'Admin\ListeDesPrefetsController@massDestroy', 'as' => 'liste_des_prefets.mass_destroy']);
    Route::post('liste_des_prefets_restore/{id}', ['uses' => 'Admin\ListeDesPrefetsController@restore', 'as' => 'liste_des_prefets.restore']);
    Route::delete('liste_des_prefets_perma_del/{id}', ['uses' => 'Admin\ListeDesPrefetsController@perma_del', 'as' => 'liste_des_prefets.perma_del']);
    Route::resource('chef_districts', 'Admin\ChefDistrictsController');
    Route::post('chef_districts_mass_destroy', ['uses' => 'Admin\ChefDistrictsController@massDestroy', 'as' => 'chef_districts.mass_destroy']);
    Route::post('chef_districts_restore/{id}', ['uses' => 'Admin\ChefDistrictsController@restore', 'as' => 'chef_districts.restore']);
    Route::delete('chef_districts_perma_del/{id}', ['uses' => 'Admin\ChefDistrictsController@perma_del', 'as' => 'chef_districts.perma_del']);
    Route::resource('personnel_du_bngrcs', 'Admin\PersonnelDuBngrcsController');
    Route::post('personnel_du_bngrcs_mass_destroy', ['uses' => 'Admin\PersonnelDuBngrcsController@massDestroy', 'as' => 'personnel_du_bngrcs.mass_destroy']);
    Route::post('personnel_du_bngrcs_restore/{id}', ['uses' => 'Admin\PersonnelDuBngrcsController@restore', 'as' => 'personnel_du_bngrcs.restore']);
    Route::delete('personnel_du_bngrcs_perma_del/{id}', ['uses' => 'Admin\PersonnelDuBngrcsController@perma_del', 'as' => 'personnel_du_bngrcs.perma_del']);
    Route::resource('etat_impressions', 'Admin\EtatImpressionsController');
    Route::post('etat_impressions_mass_destroy', ['uses' => 'Admin\EtatImpressionsController@massDestroy', 'as' => 'etat_impressions.mass_destroy']);
    Route::post('etat_impressions_restore/{id}', ['uses' => 'Admin\EtatImpressionsController@restore', 'as' => 'etat_impressions.restore']);
    Route::delete('etat_impressions_perma_del/{id}', ['uses' => 'Admin\EtatImpressionsController@perma_del', 'as' => 'etat_impressions.perma_del']);
    Route::resource('contacts_regions', 'Admin\ContactsRegionsController');
    Route::post('contacts_regions_mass_destroy', ['uses' => 'Admin\ContactsRegionsController@massDestroy', 'as' => 'contacts_regions.mass_destroy']);
    Route::post('contacts_regions_restore/{id}', ['uses' => 'Admin\ContactsRegionsController@restore', 'as' => 'contacts_regions.restore']);
    Route::delete('contacts_regions_perma_del/{id}', ['uses' => 'Admin\ContactsRegionsController@perma_del', 'as' => 'contacts_regions.perma_del']);
    Route::get('internal_notifications/read', 'Admin\InternalNotificationsController@read');
    Route::resource('internal_notifications', 'Admin\InternalNotificationsController');
    Route::post('internal_notifications_mass_destroy', ['uses' => 'Admin\InternalNotificationsController@massDestroy', 'as' => 'internal_notifications.mass_destroy']);
    Route::resource('contact_districts', 'Admin\ContactDistrictsController');
    Route::post('contact_districts_mass_destroy', ['uses' => 'Admin\ContactDistrictsController@massDestroy', 'as' => 'contact_districts.mass_destroy']);
    Route::post('contact_districts_restore/{id}', ['uses' => 'Admin\ContactDistrictsController@restore', 'as' => 'contact_districts.restore']);
    Route::delete('contact_districts_perma_del/{id}', ['uses' => 'Admin\ContactDistrictsController@perma_del', 'as' => 'contact_districts.perma_del']);
    Route::resource('groupe_sectoriels', 'Admin\GroupeSectorielsController');
    Route::post('groupe_sectoriels_mass_destroy', ['uses' => 'Admin\GroupeSectorielsController@massDestroy', 'as' => 'groupe_sectoriels.mass_destroy']);
    Route::post('groupe_sectoriels_restore/{id}', ['uses' => 'Admin\GroupeSectorielsController@restore', 'as' => 'groupe_sectoriels.restore']);
    Route::delete('groupe_sectoriels_perma_del/{id}', ['uses' => 'Admin\GroupeSectorielsController@perma_del', 'as' => 'groupe_sectoriels.perma_del']);
    Route::resource('liste_groupe_sectoriels', 'Admin\ListeGroupeSectorielsController');
    Route::post('liste_groupe_sectoriels_mass_destroy', ['uses' => 'Admin\ListeGroupeSectorielsController@massDestroy', 'as' => 'liste_groupe_sectoriels.mass_destroy']);
    Route::post('liste_groupe_sectoriels_restore/{id}', ['uses' => 'Admin\ListeGroupeSectorielsController@restore', 'as' => 'liste_groupe_sectoriels.restore']);
    Route::delete('liste_groupe_sectoriels_perma_del/{id}', ['uses' => 'Admin\ListeGroupeSectorielsController@perma_del', 'as' => 'liste_groupe_sectoriels.perma_del']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('task_statuses', 'Admin\TaskStatusesController');
    Route::post('task_statuses_mass_destroy', ['uses' => 'Admin\TaskStatusesController@massDestroy', 'as' => 'task_statuses.mass_destroy']);
    Route::resource('task_tags', 'Admin\TaskTagsController');
    Route::post('task_tags_mass_destroy', ['uses' => 'Admin\TaskTagsController@massDestroy', 'as' => 'task_tags.mass_destroy']);
    Route::resource('tasks', 'Admin\TasksController');
    Route::post('tasks_mass_destroy', ['uses' => 'Admin\TasksController@massDestroy', 'as' => 'tasks.mass_destroy']);
    Route::resource('task_calendars', 'Admin\TaskCalendarsController');
    Route::resource('google_maps', 'Admin\GoogleMapsController');
    Route::resource('type_risques', 'Admin\TypeRisquesController');
    Route::post('type_risques_mass_destroy', ['uses' => 'Admin\TypeRisquesController@massDestroy', 'as' => 'type_risques.mass_destroy']);
    Route::post('type_risques_restore/{id}', ['uses' => 'Admin\TypeRisquesController@restore', 'as' => 'type_risques.restore']);
    Route::delete('type_risques_perma_del/{id}', ['uses' => 'Admin\TypeRisquesController@perma_del', 'as' => 'type_risques.perma_del']);
    Route::resource('missions', 'Admin\MissionsController');
    Route::post('missions_mass_destroy', ['uses' => 'Admin\MissionsController@massDestroy', 'as' => 'missions.mass_destroy']);
    Route::post('missions_restore/{id}', ['uses' => 'Admin\MissionsController@restore', 'as' => 'missions.restore']);
    Route::delete('missions_perma_del/{id}', ['uses' => 'Admin\MissionsController@perma_del', 'as' => 'missions.perma_del']);
    Route::resource('google_map_missions', 'Admin\GoogleMapMissionsController');
    Route::resource('assets_categories', 'Admin\AssetsCategoriesController');
    Route::post('assets_categories_mass_destroy', ['uses' => 'Admin\AssetsCategoriesController@massDestroy', 'as' => 'assets_categories.mass_destroy']);
    Route::resource('assets_statuses', 'Admin\AssetsStatusesController');
    Route::post('assets_statuses_mass_destroy', ['uses' => 'Admin\AssetsStatusesController@massDestroy', 'as' => 'assets_statuses.mass_destroy']);
    Route::resource('assets_locations', 'Admin\AssetsLocationsController');
    Route::post('assets_locations_mass_destroy', ['uses' => 'Admin\AssetsLocationsController@massDestroy', 'as' => 'assets_locations.mass_destroy']);
    Route::resource('assets', 'Admin\AssetsController');
    Route::post('assets_mass_destroy', ['uses' => 'Admin\AssetsController@massDestroy', 'as' => 'assets.mass_destroy']);
    Route::resource('assets_histories', 'Admin\AssetsHistoriesController');
    Route::resource('google_map_materiels', 'Admin\GoogleMapMaterielsController');
    Route::resource('cartes', 'Admin\CartesController');
    Route::resource('competance_formations', 'Admin\CompetanceFormationsController');
    Route::post('competance_formations_mass_destroy', ['uses' => 'Admin\CompetanceFormationsController@massDestroy', 'as' => 'competance_formations.mass_destroy']);
    Route::resource('statut_missions', 'Admin\StatutMissionsController');
    Route::post('statut_missions_mass_destroy', ['uses' => 'Admin\StatutMissionsController@massDestroy', 'as' => 'statut_missions.mass_destroy']);
    Route::resource('unites', 'Admin\UnitesController');
    Route::post('unites_mass_destroy', ['uses' => 'Admin\UnitesController@massDestroy', 'as' => 'unites.mass_destroy']);
    Route::resource('liste_stocks', 'Admin\ListeStocksController');
    Route::post('liste_stocks_mass_destroy', ['uses' => 'Admin\ListeStocksController@massDestroy', 'as' => 'liste_stocks.mass_destroy']);
    Route::resource('entrees', 'Admin\EntreesController');
    Route::post('entrees_mass_destroy', ['uses' => 'Admin\EntreesController@massDestroy', 'as' => 'entrees.mass_destroy']);
    Route::resource('sorties', 'Admin\SortiesController');
    Route::post('sorties_mass_destroy', ['uses' => 'Admin\SortiesController@massDestroy', 'as' => 'sorties.mass_destroy']);
    Route::resource('inventaires', 'Admin\InventairesController');
    Route::post('inventaires_mass_destroy', ['uses' => 'Admin\InventairesController@massDestroy', 'as' => 'inventaires.mass_destroy']);
    Route::resource('type_taches', 'Admin\TypeTachesController');
    Route::post('type_taches_mass_destroy', ['uses' => 'Admin\TypeTachesController@massDestroy', 'as' => 'type_taches.mass_destroy']);
    Route::resource('etat_oms', 'Admin\EtatOmsController');
    Route::post('etat_oms_mass_destroy', ['uses' => 'Admin\EtatOmsController@massDestroy', 'as' => 'etat_oms.mass_destroy']);
    Route::resource('etat_rapport_oms', 'Admin\EtatRapportOmsController');
    Route::post('etat_rapport_oms_mass_destroy', ['uses' => 'Admin\EtatRapportOmsController@massDestroy', 'as' => 'etat_rapport_oms.mass_destroy']);
    Route::resource('oms', 'Admin\OmsController');
    Route::post('oms_mass_destroy', ['uses' => 'Admin\OmsController@massDestroy', 'as' => 'oms.mass_destroy']);
    Route::resource('capacites', 'Admin\CapacitesController');
    Route::post('capacites_mass_destroy', ['uses' => 'Admin\CapacitesController@massDestroy', 'as' => 'capacites.mass_destroy']);
    Route::resource('absences', 'Admin\AbsencesController');
    Route::post('absences_mass_destroy', ['uses' => 'Admin\AbsencesController@massDestroy', 'as' => 'absences.mass_destroy']);
    Route::resource('etat_du_personnels', 'Admin\EtatDuPersonnelsController');
    Route::resource('statut_personnels', 'Admin\StatutPersonnelsController');
    Route::post('statut_personnels_mass_destroy', ['uses' => 'Admin\StatutPersonnelsController@massDestroy', 'as' => 'statut_personnels.mass_destroy']);
    Route::resource('status_sorties', 'Admin\StatusSortiesController');
    Route::post('status_sorties_mass_destroy', ['uses' => 'Admin\StatusSortiesController@massDestroy', 'as' => 'status_sorties.mass_destroy']);



 
    Route::get('language/{lang}', function ($lang) {
        return redirect()->back()->withCookie(cookie()->forever('language', $lang));
    })->name('language');});
