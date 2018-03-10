<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'gestion-des-contacts' => [		'title' => 'Contacts',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Organisme',		'fields' => [			'logo' => 'Logo',			'name' => 'Nom',			'address' => 'Adresse',			'website' => 'Website',			'email' => 'Email',			'tel' => 'Téléphone',		],	],
		'contacts' => [		'title' => 'Contacts',		'fields' => [			'company' => 'Organisme',			'fonction' => 'Fonction',			'first-name' => 'Nom et Prénom',			'phone1' => 'Phone 1',			'phone2' => 'Phone 2',			'email' => 'Email',			'address' => 'Address',		],	],
		'dropdown' => [		'title' => 'Statique',		'fields' => [		],	],
		'region' => [		'title' => 'Région',		'fields' => [			'province' => 'Province',			'name' => 'Désignation',		],	],
		'province' => [		'title' => 'Province',		'fields' => [			'name' => 'Nom',		],	],
		'district' => [		'title' => 'District',		'fields' => [			'region' => 'Région',			'name' => 'Désignation',		],	],
		'chef-de-region' => [		'title' => 'Chef de région',		'fields' => [			'province' => 'Province',			'region' => 'Région',			'nom-prenom' => 'Nom et Prénom',			'tel' => 'Téléphone',			'tel2' => 'Téléphone 2',			'email' => 'E-mail',		],	],
		'prefecture' => [		'title' => 'prefecture',		'fields' => [			'region' => 'Région',			'name' => 'Nom',		],	],
		'liste-des-prefets' => [		'title' => 'Liste des préfets',		'fields' => [			'province' => 'Province',			'region' => 'Région',			'prefecture' => 'Préfecture',			'nom-prenom' => 'Nom et Prénom',			'tel1' => 'Téléphone 1',			'tel2' => 'Téléphone 2',			'email' => 'Email',		],	],
		'chef-district' => [		'title' => 'Chef district',		'fields' => [			'region' => 'Région',			'district' => 'District',			'nom-prenom' => 'Nom et Prénom',			'tel1' => 'Téléphone 1',			'tel2' => 'Téléphone 2',			'email' => 'Email',		],	],
		'rapport-de-situation' => [		'title' => 'Rapport de situation',		'fields' => [		],	],
		'rapport' => [		'title' => 'Rapport',		'fields' => [		],	],
		'fichier' => [		'title' => 'Fichiers',		'fields' => [		],	],
		'personnel-du-bngrc' => [		'title' => 'Personnel du BNGRC',		'fields' => [			'photo' => 'Photo',			'fonction' => 'Fonction',			'nom-prenom' => 'Nom et Prénom',			'tel' => 'Téléphone 1',			'tel2' => 'Téléphone 2',			'email' => 'Email',			'adresse' => 'Adresse',			'competence-formation' => 'Compétence/Formation',			'capacites' => 'Capacités',			'date-embauche' => 'Date d\\\\\\\'embauche',			'latitude' => 'Latitude',			'longitude' => 'Longitude',		],	],
		'etat-impression' => [		'title' => 'Etat impression',		'fields' => [			'name' => 'Name',		],	],
		'impression' => [		'title' => 'Impression',		'fields' => [		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [		],	],
		'contacts-region' => [		'title' => 'Contacts Région',		'fields' => [			'region' => 'Région',			'nom-prenom' => 'Nom et Prénom',			'organisme' => 'Organisme',			'fonction' => 'Fonction',			'tel' => 'Téléphone',			'email' => 'Email',		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [			'text' => 'Text',			'link' => 'Link',			'users' => 'Users',		],	],
		'contact-district' => [		'title' => 'Contacts District',		'fields' => [			'district' => 'District',			'nom-prenom' => 'Nom et Prénom',			'organisme' => 'Organisme',			'fonction' => 'Fonction',			'tel' => 'Téléphone',			'email' => 'Email',		],	],
		'groupe-sectoriel' => [		'title' => 'Groupe sectoriel',		'fields' => [			'name' => 'Nom',		],	],
		'liste-groupe-sectoriel' => [		'title' => 'Groupe sectoriel',		'fields' => [			'groupe-sectoriel' => 'Groupe sectoriel',			'nom-prenom' => 'Nom et Prénom',			'organisme' => 'Organisme',			'fonction' => 'Fonction',			'tel' => 'Téléphone',			'email' => 'Email',		],	],
		'reunion' => [		'title' => 'Réunion',		'fields' => [		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Time',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'gestion-des-taches' => [		'title' => 'Tâches',		'fields' => [		],	],
		'task-statuses' => [		'title' => 'Statuts',		'fields' => [			'name' => 'Nom',		],	],
		'task-tags' => [		'title' => 'Tags',		'fields' => [			'name' => 'Name',		],	],
		'tasks' => [		'title' => 'Tâches',		'fields' => [			'type' => 'Type',			'mission' => 'Mission',			'name' => 'Objet',			'description' => 'Description',			'status' => 'Etat',			'attachment' => 'Pièce jointe',			'due-date' => 'date d\\\'échéance',			'heur' => 'Heur',			'user' => 'Responsable',			'participant' => 'Participants',			'organisme' => 'Organismes',		],	],
		'task-calendar' => [		'title' => 'Calendar',		'fields' => [		],	],
		'gestion-des-materiel' => [		'title' => 'Gestion des matériels',		'fields' => [		],	],
		'assets-categories' => [		'title' => 'Catégories',		'fields' => [		],	],
		'assets-statuses' => [		'title' => 'Statuts',		'fields' => [		],	],
		'assets-locations' => [		'title' => 'Locations',		'fields' => [		],	],
		'assets' => [		'title' => 'Matériels',		'fields' => [		],	],
		'assets-history' => [		'title' => 'Historiques',		'created_at' => 'Time',		'fields' => [		],	],
		'google-map' => [		'title' => 'Google map',		'fields' => [		],	],
		'gestion-risque-cata' => [		'title' => 'GRC',		'fields' => [		],	],
		'type-risque' => [		'title' => 'Type risque',		'fields' => [			'name' => 'Name',		],	],
		'risque-catastrophe' => [		'title' => 'Risque/Catastrophe',		'fields' => [		],	],
		'google-map-rc' => [		'title' => 'Google map',		'fields' => [		],	],
		'gestion-des-missions' => [		'title' => 'Missions',		'fields' => [		],	],
		'missions' => [		'title' => 'Missions',		'fields' => [			'objet' => 'Objet',			'location' => 'Location',			'date-deb' => 'Date début',			'date-fin' => 'Date fin',			'piece-jointe' => 'Pièce jointe',			'description' => 'Description',			'itineraire' => 'Itinéraire (photo)',			'multiple-piece-jointe' => 'Multiple pièce jointe',			'personnel-id' => 'Participant(s)',			'materiel-id' => 'Matériel',			'progression' => 'Progression (%)',			'stat' => 'Statut',			'latitude' => 'Latitude',			'longitude' => 'Longitude',		],	],
		'google-map-mission' => [		'title' => 'Google map',		'fields' => [		],	],
		'google-map-global' => [		'title' => 'Carte',		'fields' => [		],	],
		'multiple-file' => [		'title' => 'Fichier multiple',		'fields' => [		],	],
		'rapports' => [		'title' => 'Rapports',		'fields' => [		],	],
		'gestion-des-materiels' => [		'title' => 'Matériels',		'fields' => [		],	],
		'assets-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Titre',		],	],
		'assets-statuses' => [		'title' => 'Statuts',		'fields' => [			'title' => 'Titre',		],	],
		'assets-locations' => [		'title' => 'Locations',		'fields' => [			'title' => 'Titre',		],	],
		'assets' => [		'title' => 'Matériels',		'fields' => [			'category' => 'Catégorie',			'serial-number' => 'Numéro de série ',			'title' => 'Titre',			'photo1' => 'Photo1',			'photo2' => 'Photo2',			'photo3' => 'Photo3',			'date-acquisition' => 'Date d\\\\\\\'acquisition ',			'quantite-stock' => 'Quantité en stock',			'status' => 'Statut',			'location' => 'Location',			'assigned-user' => 'Responsable',			'notes' => 'Notes',			'latitude' => 'Latitude',			'longitude' => 'Longitude',		],	],
		'assets-history' => [		'title' => 'Historique',		'created_at' => 'Time',		'fields' => [			'asset' => 'Matériel',			'status' => 'Statut',			'location' => 'Location',			'assigned-user' => 'Responsable',		],	],
		'google-map-materiel' => [		'title' => 'Carte',		'fields' => [		],	],
		'main-courante' => [		'title' => 'Main courante',		'fields' => [		],	],
		'carte' => [		'title' => 'Carte',		'fields' => [		],	],
		'graph-mission' => [		'title' => 'Graph mission',		'fields' => [		],	],
		'competance-formation' => [		'title' => 'Compétence/Formation',		'fields' => [			'titre' => 'Titre',			'description' => 'Description',			'piece-jointe' => 'Pièce jointe',		],	],
		'statut-mission' => [		'title' => 'Statut mission',		'fields' => [			'name' => 'Nom',		],	],
		'stock' => [		'title' => 'Stock',		'fields' => [		],	],
		'unite' => [		'title' => 'Unité',		'fields' => [			'nom' => 'Nom',		],	],
		'liste-stock' => [		'title' => 'Liste stock',		'fields' => [			'designation' => 'Désignation',			'description' => 'Description',			'quantite' => 'Quantité en stock',			'unite' => 'Unité',		],	],
		'entree' => [		'title' => 'Entrée',		'fields' => [			'date' => 'Date/Heur',			'stock' => 'Désignation',			'quantite' => 'Quantité',			'unite' => 'Unité',			'motif' => 'Motif',		],	],
		'sortie' => [		'title' => 'Sortie',		'fields' => [			'stock' => 'Désignation',			'quantite' => 'Quantité',			'unite' => 'Unité',			'motif' => 'Motif',			'date' => 'Date/Heur',		],	],
		'inventaire' => [		'title' => 'Inventaire',		'fields' => [			'date' => 'Date/Heur',			'mission' => 'Mission',			'stock' => 'Designation stock',			'quantite' => 'Quantité',			'unite' => 'Unité',			'materiel-id' => 'Materiels',			'responsable-id' => 'Responsable(s)',			'destination' => 'Déstination',			'latitude' => 'Latitude',			'longitude' => 'Longitude',		],	],
		'type-tache' => [		'title' => 'Type tâche',		'fields' => [			'nom' => 'Nom',		],	],
		'etat-om' => [		'title' => 'Etat OM',		'fields' => [			'nom' => 'Nom',		],	],
		'etat-rapport-om' => [		'title' => 'Etat rapport OM',		'fields' => [			'nom' => 'Nom',		],	],
		'om' => [		'title' => 'OM',		'fields' => [			'mission' => 'Objet de la mission',			'ordonnee-a' => 'Ordonnée à',			'destination' => 'Déstination',			'itineraire' => 'Itinéraire',			'depart' => 'Départ',			'duree' => 'Durée',			'prise-en-charge' => 'Prise en charge',			'fichier-om' => 'Fichier OM',			'etat' => 'Etat OM',			'rapport-de-mission' => 'Rapport de mission',			'remise-rapport' => 'Date remise du rapport',			'etat-rapport-de-mission' => 'Etat rapport',		],	],
		'capacite' => [		'title' => 'Capacités',		'fields' => [			'titre' => 'Titre',			'description' => 'Description',			'piece-jointe' => 'Piece jointe',		],	],
		'absence' => [		'title' => 'Absence',		'fields' => [			'personnel' => 'Nom et Prénom',			'date' => 'Date début',			'date-fin' => 'Date fin',			'motif' => 'Motif',		],	],
		'etat-du-personnel' => [		'title' => 'Etat du personnel',		'fields' => [		],	],
	'qa_create' => 'Crear',
	'qa_save' => 'Guardar',
	'qa_edit' => 'Editar',
	'qa_restore' => 'Restaurar',
	'qa_permadel' => 'Esborrar permanentment',
	'qa_all' => 'Tot',
	'qa_trash' => 'Paperera',
	'qa_view' => 'Veure',
	'qa_update' => 'Actualitzar',
	'qa_list' => 'Llista',
	'qa_no_entries_in_table' => 'No hi ha registres a la taula',
	'qa_logout' => 'Sortir',
	'qa_add_new' => 'Afegir nou',
	'qa_are_you_sure' => 'Estàs segur?',
	'qa_back_to_list' => 'Tornar a la Llista',
	'qa_dashboard' => 'Taulell de control',
	'qa_delete' => 'Esborrar',
	'qa_delete_selected' => 'Esborrar seleccionats',
	'qa_category' => 'Categoria',
	'qa_categories' => 'Categories',
	'qa_sample_category' => 'Categoria d\'exemple',
	'qa_questions' => 'Qüestions',
	'qa_question' => 'Qüestió',
	'qa_answer' => 'Resposta',
	'qa_sample_question' => 'Qüestió d\'exemple',
	'qa_sample_answer' => 'Resposta d\'exemple',
	'qa_faq_management' => 'Gestió de preguntes freqüents',
	'qa_administrator_can_create_other_users' => 'Administrador (pot crear altres usuaris)',
	'qa_simple_user' => 'Usuari bàsic',
	'qa_title' => 'Títol',
	'qa_roles' => 'Rols',
	'qa_role' => 'Rol',
	'qa_user_management' => 'Gestió d\'usuaris',
	'qa_users' => 'Usuaris',
	'qa_user' => 'Usuari',
	'qa_name' => 'Nom',
	'qa_email' => 'Correu-e',
	'qa_password' => 'Contrasenya',
	'qa_remember_token' => 'Recordar token',
	'qa_permissions' => 'Permissos',
	'qa_project' => 'Projecte',
	'qa_start_time' => 'Hora d\'inici',
	'qa_end_time' => 'Hora de finalització',
	'qa_expense_category' => 'Categoria de la despesa',
	'qa_expense_categories' => 'Categories de despeses',
	'qa_expense_management' => 'Gestió de despeses',
	'qa_expenses' => 'Despeses',
	'qa_expense' => 'Despesa',
	'qa_entry_date' => 'Data d\'entrada',
	'qa_amount' => 'Import',
	'qa_income_categories' => 'Categories d\'ingressos',
	'qa_monthly_report' => 'Informe mensual',
	'qa_companies' => 'Empreses',
	'qa_company_name' => 'Empresa',
	'qa_address' => 'Adreça',
	'qa_website' => 'Lloc web',
	'qa_contact_management' => 'Gestió de contactes',
	'qa_contacts' => 'Contactes',
	'qa_company' => 'Empresa',
	'qa_first_name' => 'Nom',
	'qa_last_name' => 'Cognoms',
	'qa_phone' => 'Telèfon',
	'qa_phone1' => 'Telèfon 1',
	'qa_phone2' => 'Telèfon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Foto (max 8Mb)',
	'qa_category_name' => 'Categoria',
	'qa_product_management' => 'Gestió de productes',
	'qa_products' => 'Productes',
	'qa_product_name' => 'Producte',
	'qa_price' => 'Preu',
	'qa_tags' => 'Etiquetes',
	'qa_tag' => 'Etiqueta',
	'qa_photo1' => 'Foto 1',
	'qa_photo2' => 'Foto 2',
	'qa_photo3' => 'Foto 3',
	'qa_calendar' => 'Calendari',
	'qa_statuses' => 'Situacions',
	'qa_task_management' => 'Gestió de tasques',
	'qa_tasks' => 'Tasca',
	'qa_status' => 'Situació',
	'qa_attachment' => 'Adjunt',
	'qa_due_date' => 'Data límit',
	'qa_assigned_to' => 'Assignat a',
	'qa_assets' => 'Actius',
	'qa_asset' => 'Actiu',
	'qa_serial_number' => 'Número de sèrie',
	'qa_location' => 'Ubicació',
	'qa_locations' => 'Ubicacions',
	'qa_assigned_user' => 'Assignat (Usuari)',
	'qa_notes' => 'Notes',
	'qa_assets_history' => 'Històric d\'actius',
	'qa_assets_management' => 'Gestió d\'actius',
	'qa_text' => 'Text',
	'qa_featured_image' => 'Imatge destacada',
	'qa_pages' => 'Pàgines',
	'qa_axis' => 'Eixos',
	'qa_show' => 'Veure',
	'qa_group_by' => 'Agrupar per',
	'qa_chart_type' => 'Tipus de gràfic',
	'qa_create_new_report' => 'Crear nou informe',
	'qa_no_reports_yet' => 'Encara no hi ha informes',
	'qa_created_at' => 'Creat el',
	'qa_updated_at' => 'Actualitzat el',
	'qa_deleted_at' => 'Esborrat el',
	'qa_custom_controller_index' => 'index del controlador personalitzat',
	'qa_user_actions' => 'Accions de l\'usuari',
	'qa_action' => 'Acció',
	'qa_action_model' => 'Model d\'acció',
	'qa_action_id' => 'Id d\'acció',
	'qa_time' => 'Temps',
	'qa_campaign' => 'Campanya',
	'qa_campaigns' => 'Campanyes',
	'qa_description' => 'Descripció',
	'qa_valid_from' => 'Vàlid des de',
	'qa_valid_to' => 'Vàlid fins a',
	'qa_discount_amount' => 'Import del descompte',
	'qa_discount_percent' => 'Percentatge de descompte',
	'qa_coupons_amount' => 'Import dels cupons',
	'qa_coupons' => 'Cupons',
	'qa_code' => 'Codi',
	'qa_redeem_time' => 'Validesa del cupó',
	'qa_coupon_management' => 'Gestió de cupons',
	'qa_time_management' => 'Gestió del temps',
	'qa_projects' => 'Projectes',
	'qa_reports' => 'Informes',
	'qa_work_type' => 'Tipus de feina',
	'qa_work_types' => 'Tipus de feines',
	'qa_slug' => 'Escletxa',
	'qa_content_management' => 'Gestió de continguts',
	'qa_excerpt' => 'Extracte',
	'qa_reports_x_axis_field' => 'Eix-X escull un dels camps data/hora',
	'qa_reports_y_axis_field' => 'Eix-Y escull un dels camps numèrics',
	'qa_select_crud_placeholder' => 'Si us plau, selecciona un dels teus CRUDs',
	'qa_select_dt_placeholder' => 'Si us plau, selecciona un dels camps data/hora',
	'qa_aggregate_function_use' => 'Funció agregada a utilitzar',
	'qa_x_axis_group_by' => 'Agrupar l\'eix-X per',
	'qa_x_axis_field' => 'Camp de l\'eix-X (data/hora)',
	'qa_y_axis_field' => 'Camp de l\'eix-Y',
	'qa_integer_float_placeholder' => 'Si us plau, selecciona un dels camps enter/real',
	'qa_change_notifications_field_1_label' => 'Enviar notificació per correu-e a l\'usuari',
	'qa_change_notifications_field_2_label' => 'Quan accedeixes al CRUD',
	'qa_select_users_placeholder' => 'Si us plau, selecciona un dels teus Usuaris',
	'qa_is_created' => 'està creat',
	'qa_is_updated' => 'està actualitzat',
	'qa_is_deleted' => 'està esborrat',
	'qa_notifications' => 'Notificacions',
	'qa_notify_user' => 'Notifica a l\'usuari',
	'qa_when_crud' => 'Quan CRUD',
	'qa_create_new_notification' => 'Crear nova notificació',
	'qa_stripe_transactions' => 'Transaccions d\'Stripe',
	'qa_upgrade_to_premium' => 'Actualitza a Premium',
	'qa_messages' => 'Missatges',
	'qa_you_have_no_messages' => 'No tens missatges',
	'qa_all_messages' => 'Tots els missatges',
	'qa_new_message' => 'Nou missatge',
	'qa_outbox' => 'Safata de sortida',
	'qa_inbox' => 'Safata d\'entrada',
	'qa_recipient' => 'Destinatari',
	'qa_subject' => 'Assumpte',
	'qa_message' => 'Missatge',
	'qa_send' => 'Envia',
	'qa_reply' => 'Respon',
	'qa_calendar_sources' => 'Fonts del calendari',
	'qa_new_calendar_source' => 'Crear una nova font del calendari',
	'qa_crud_title' => 'Títol del Crud',
	'qa_crud_date_field' => 'Camp data del Crud',
	'qa_prefix' => 'Prefix',
	'qa_label_field' => 'Camp etiqueta',
	'qa_suffix' => 'Sufix',
	'qa_no_calendar_sources' => 'No hi ha fonts del calendari',
	'qa_crud_event_field' => 'Camp d\'etiqueta d\'event',
	'qa_create_new_calendar_source' => 'Crear una nova font del calendari',
	'qa_edit_calendar_source' => 'Editar la font del calendari',
	'qa_client_management' => 'Gestió de clients',
	'qa_client_management_settings' => 'Paràmetres de la gestió de clients',
	'qa_country' => 'País',
	'qa_client_status' => 'Estat del client',
	'qa_clients' => 'Clients',
	'qa_client_statuses' => 'Estats dels clients',
	'qa_currencies' => 'Monedes',
	'qa_main_currency' => 'Moneda principal',
	'qa_documents' => 'Documents',
	'qa_file' => 'Fitxer',
	'qa_income_source' => 'Font d\'ingressos',
	'qa_income_sources' => 'Fonts d\'ingressos',
	'qa_fee_percent' => 'Percentatge de comissió',
	'qa_note_text' => 'Nota de text',
	'qa_client' => 'Client',
	'qa_start_date' => 'Datat d\'inici',
	'qa_budget' => 'Pressupost',
	'qa_project_status' => 'Estat del projecte',
	'qa_project_statuses' => 'Estats del projecte',
	'qa_transactions' => 'Transaccions',
	'qa_transaction_types' => 'Tipus de transacció',
	'qa_transaction_type' => 'Tipus de transacció',
	'qa_transaction_date' => 'Data de la transacció',
	'qa_currency' => 'Moneda',
	'qa_current_password' => 'Contrasenya actual',
	'qa_new_password' => 'Contrasenya nova',
	'qa_password_confirm' => 'Confirma contrassenya nova',
	'qa_dashboard_text' => 'T\'has validat correctament!',
	'qa_forgot_password' => 'Has oblidat la contrassenya?',
	'qa_remember_me' => 'Recorda\'m',
	'qa_login' => 'Entrar',
	'qa_change_password' => 'Canviar password',
	'qa_csv' => 'CSV',
	'qa_print' => 'Imprimir',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Còpia',
	'qa_colvis' => 'Columnes visibles',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'Restablir contrassenya',
	'qa_reset_password_woops' => 'strong>Vaja!</strong>Hi ha hagut problemes amb input:',
	'qa_email_line1' => 'Estàs rebent aquest correu perquè s\'ha solicitat un restablimentd e contrasenya de la teva compte',
	'qa_email_line2' => 'Si no has demanat restablir la contrasenya, no cal que facis res',
	'qa_email_greet' => 'Hola',
	'qa_email_regards' => 'Salutacions',
	'qa_confirm_password' => 'Confirma la contrassenya',
	'qa_if_you_are_having_trouble' => 'Si tens problemes al fer click ',
	'qa_copy_paste_url_bellow' => 'botó, copia i enganxa aquesta adreça web al teu navegador.',
	'qa_please_select' => 'Si us plau, selecciona',
	'qa_register' => 'Registra',
	'qa_registration' => 'Registre',
	'qa_not_approved_title' => 'No has estat aprovat',
	'qa_not_approved_p' => 'La teva compte no ha estat aprovada per l\'administrador. Si us plau torna a provar en una estona',
	'qa_there_were_problems_with_input' => 'Hi ha problemes amb input:',
	'qa_whoops' => 'Vaja!',
	'qa_file_contains_header_row' => 'El fitxer compté una fila de capçalera?',
	'qa_csvImport' => 'importar de CSV',
	'qa_csv_file_to_import' => 'Fitxer CSV a importar',
	'qa_parse_csv' => 'Analitza CSV',
	'qa_import_data' => 'Importar dades',
	'qa_imported_rows_to_table' => 'Importades :row files a la taula :taula',
	'quickadmin_title' => 'BNGRC1',
];