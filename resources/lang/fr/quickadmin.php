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
		'personnel-du-bngrc' => [		'title' => 'Personnel du BNGRC',		'fields' => [			'photo' => 'Photo',			'fonction' => 'Fonction',			'nom-prenom' => 'Nom et Prénom',			'tel' => 'Téléphone 1',			'tel2' => 'Téléphone 2',			'email' => 'Email',			'adresse' => 'Adresse',			'competence-formation' => 'Compétence/Formation',			'capacites' => 'Capacités',			'date-embauche' => 'Date d\\\'embauche',			'statut' => 'Statut',			'latitude' => 'Latitude',			'longitude' => 'Longitude',		],	],
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
		'missions' => [		'title' => 'Missions',		'fields' => [			'objet' => 'Objet',			'location' => 'Location',			'date-deb' => 'Date début',			'date-fin' => 'Date fin',			'piece-jointe' => 'Pièce jointe',			'description' => 'Description',			'itineraire' => 'Itinéraire (photo)',			'personnel-id' => 'Participant(s)',			'progression' => 'Progression (%)',			'stat' => 'Statut',			'latitude' => 'Latitude',			'longitude' => 'Longitude',		],	],
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
		'liste-stock' => [		'title' => 'Liste stock',		'fields' => [			'photo' => 'Photo',			'designation' => 'Désignation',			'description' => 'Description',			'quantite' => 'Quantité en stock',			'unite' => 'Unité',		],	],
		'entree' => [		'title' => 'Entrée',		'fields' => [			'date' => 'Date/Heur',			'stock' => 'Désignation',			'quantite' => 'Quantité',			'unite' => 'Unité',			'motif' => 'Motif',		],	],
		'sortie' => [		'title' => 'Sortie',		'fields' => [			'parsonnel' => 'Responsable',			'stock' => 'Désignation',			'quantite' => 'Quantité',			'unite' => 'Unité',			'motif' => 'Motif',			'mission' => 'Mission',			'date' => 'Date/Heur',			'dateheurfin' => 'Date/Heur Fin',			'statut' => 'Statut',			'reponsable-sortie' => 'Reponsable sortie',			'location' => 'Location',		],	],
		'inventaire' => [		'title' => 'Inventaire',		'fields' => [			'date' => 'Date/Heur',			'mission' => 'Mission',			'stock' => 'Designation stock',			'quantite' => 'Quantité',			'unite' => 'Unité',			'materiel-id' => 'Materiels',			'responsable-id' => 'Responsable(s)',			'destination' => 'Déstination',			'latitude' => 'Latitude',			'longitude' => 'Longitude',		],	],
		'type-tache' => [		'title' => 'Type tâche',		'fields' => [			'nom' => 'Nom',		],	],
		'etat-om' => [		'title' => 'Etat OM',		'fields' => [			'nom' => 'Nom',		],	],
		'etat-rapport-om' => [		'title' => 'Etat rapport OM',		'fields' => [			'nom' => 'Nom',		],	],
		'om' => [		'title' => 'OM',		'fields' => [			'mission' => 'Objet de la mission',			'ordonnee-a' => 'Ordonnée à',			'destination' => 'Déstination',			'itineraire' => 'Itinéraire',			'depart' => 'Départ',			'duree' => 'Durée',			'prise-en-charge' => 'Prise en charge',			'fichier-om' => 'Fichier OM',			'etat' => 'Etat OM',			'rapport-de-mission' => 'Rapport de mission',			'remise-rapport' => 'Date remise du rapport',			'etat-rapport-de-mission' => 'Etat rapport',		],	],
		'capacite' => [		'title' => 'Capacités',		'fields' => [			'titre' => 'Titre',			'description' => 'Description',			'piece-jointe' => 'Piece jointe',		],	],
		'absence' => [		'title' => 'Absence',		'fields' => [			'personnel' => 'Nom et Prénom',			'date' => 'Date début',			'date-fin' => 'Date fin',			'motif' => 'Motif',		],	],
		'etat-du-personnel' => [		'title' => 'Etat du personnel',		'fields' => [		],	],
		'statut-personnel' => [		'title' => 'Statut personnel',		'fields' => [			'nom' => 'Nom',		],	],
		'status-sortie' => [		'title' => 'Status sortie',		'fields' => [			'nom' => 'Nom',		],	],
	'qa_create' => 'Créer',
	'qa_save' => 'Sauver',
	'qa_edit' => 'Modifier',
	'qa_restore' => 'Restaurer',
	'qa_permadel' => 'Supprimer définitivement',
	'qa_all' => 'Tous',
	'qa_trash' => 'Poubelle',
	'qa_view' => 'Voir',
	'qa_update' => 'Mettre à jour',
	'qa_list' => 'Lister',
	'qa_logout' => 'Déconnexion',
	'qa_add_new' => 'Nouveau',
	'qa_are_you_sure' => 'Êtes-vous certain ?',
	'qa_back_to_list' => 'Retour à la liste',
	'qa_dashboard' => 'Tableau de bord',
	'qa_delete' => 'Supprimer',
	'qa_delete_selected' => 'Supprimer sélectionnés',
	'qa_category' => 'Catégorie',
	'qa_categories' => 'Catégories',
	'qa_please_select' => 'Sélectionner',
	'qa_crud_event_field' => 'Champ de l\'étiquette d\'événement',
	'qa_create_new_calendar_source' => 'Créer une nouvelle source de calendrier',
	'qa_edit_calendar_source' => 'Modifier la source du calendrier',
	'qa_client_management' => 'Gestion des clients',
	'qa_client_management_settings' => 'Paramètres de gestion du client',
	'qa_country' => 'Pays',
	'qa_client_status' => 'Statut du client',
	'qa_clients' => 'Clients',
	'qa_client_statuses' => 'Statut des clients',
	'qa_currencies' => 'Devises',
	'qa_main_currency' => 'Monnaie principale',
	'qa_documents' => 'Documents',
	'qa_file' => 'Fichier',
	'qa_income_source' => 'Source de revenu',
	'qa_income_sources' => 'Sources de revenu',
	'qa_fee_percent' => 'Pourcentage de frais',
	'qa_note_text' => 'Texte de note',
	'qa_client' => 'Client',
	'qa_start_date' => 'Date de début',
	'qa_budget' => 'Budget',
	'qa_project_status' => 'L\'état du projet',
	'qa_project_statuses' => 'Statut du projet',
	'qa_transactions' => 'Transaction',
	'qa_transaction_types' => 'Type de transaction',
	'qa_transaction_type' => 'Type de transaction',
	'qa_transaction_date' => 'Date de la transaction',
	'qa_currency' => 'Devise',
	'qa_current_password' => 'Mot de passe actuel',
	'qa_new_password' => 'Nouveau mot de passe',
	'qa_password_confirm' => 'Confirmation du nouveau mot de passe',
	'qa_dashboard_text' => 'Vous êtes authentifié!',
	'qa_forgot_password' => 'Mot de passe oublié?',
	'qa_remember_me' => 'Se souvenir de moi',
	'qa_login' => 'S\'identifier',
	'qa_change_password' => 'Changer le mot de passe',
	'qa_print' => 'Imprimer',
	'qa_copy' => 'Copier',
	'qa_colvis' => 'Visibilité de la colonne',
	'qa_reset_password' => 'Réinitialiser le mot de passe',
	'qa_reset_password_woops' => '<strong>Whoops!</strong> Il y avait des problèmes d\'entrée:',
	'qa_email_line1' => 'Vous recevez ce courrier électronique parce que nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.',
	'qa_email_line2' => 'Si vous n\'avez pas demandé de réinitialisation d\'un mot de passe, aucune autre action n\'est requise.',
	'qa_email_greet' => 'Bonjour',
	'qa_email_regards' => 'Cordialement',
	'qa_confirm_password' => 'Confirmez le mot de passe',
	'qa_if_you_are_having_trouble' => 'Si vous rencontrez des problèmes, cliquez sur',
	'qa_copy_paste_url_bellow' => 'bouton, copiez et collez l\'URL ci-dessous dans votre navigateur Web:',
	'qa_register' => 'S\'inscrire',
	'qa_registration' => 'Enregistrement',
	'qa_not_approved_title' => 'Vous n\'êtes pas approuvé',
	'qa_not_approved_p' => 'Votre compte n\'est toujours pas approuvé par l\'administrateur. Veuillez patienter et réessayer plus tard.',
	'qa_questions' => 'Des questions',
	'qa_question' => 'Question',
	'qa_answer' => 'Réponse',
	'qa_sample_question' => 'Exemple de question',
	'qa_sample_answer' => 'Exemple de réponse',
	'qa_password' => 'Mot de passe',
	'qa_remember_token' => 'Se souvenir du jeton',
	'qa_permissions' => 'Autorisations',
	'qa_user_actions' => 'Actions de l\'utilisateur',
	'qa_action' => 'Action',
	'qa_time' => 'Heure',
	'qa_description' => 'Déscription',
	'qa_valid_from' => 'Validation à partir de ',
	'qa_discount_amount' => 'Montant de l\'abonnement',
	'qa_discount_percent' => '% De réduction',
	'qa_coupons_amount' => 'Montant des coupons',
	'qa_coupons' => 'Coupons',
	'qa_redeem_time' => 'Échangez le temps',
	'qa_coupon_management' => 'Gestion des coupons',
	'qa_time_management' => 'Gestion du temps',
	'qa_projects' => 'Projet',
	'qa_reports' => 'Rapports',
	'qa_time_entries' => 'Entrées de l\'heure',
	'qa_work_type' => 'Type de travail',
	'qa_work_types' => 'Types de travail',
	'qa_project' => 'Projet',
	'qa_start_time' => 'Heure de début',
	'qa_end_time' => 'Heure de fin',
	'qa_expense_category' => 'Catégorie de dépenses',
	'qa_expense_categories' => 'Catégories de dépenses',
	'qa_expense_management' => 'Gestion des dépenses',
	'qa_expenses' => 'Dépenses',
	'qa_expense' => 'Dépense',
	'qa_entry_date' => 'Date d\'entrée',
	'qa_amount' => 'Montant',
	'qa_income_categories' => 'Catégories de revenu',
	'qa_monthly_report' => 'Rapport mensuel',
	'qa_companies' => 'Organisme',
	'qa_company_name' => 'Nom de l\'organisme',
	'qa_address' => 'Addresse',
	'qa_website' => 'Site web',
	'qa_contact_management' => 'Gestion des contacts',
	'qa_contacts' => 'Contacts',
	'qa_company' => 'Organisme',
	'qa_first_name' => 'Prénom',
	'qa_last_name' => 'Nom',
	'qa_phone' => 'Téléphone',
	'qa_category_name' => 'Nom de la catégorie',
	'qa_product_management' => 'Gestion des produits',
	'qa_products' => 'Produits',
	'qa_product_name' => 'Désignation du produit',
	'qa_price' => 'Prix',
	'qa_calendar' => 'Calendrier',
	'qa_statuses' => 'Statut',
	'qa_task_management' => 'Gestion des tâches',
	'qa_tasks' => 'Tâches',
	'qa_status' => 'Statut',
	'qa_attachment' => 'Document joint',
	'qa_due_date' => 'Date d\'échéance',
	'qa_assigned_to' => 'Assigné à',
	'qa_assets' => 'Les atouts',
	'qa_asset' => 'Atout',
	'qa_serial_number' => 'Numéro de série',
	'qa_assigned_user' => 'Affecté (utilisateur)',
	'qa_assets_history' => 'Historique des actifs',
	'qa_assets_management' => 'Gestion d\'actifs',
	'qa_slug' => 'Limace',
	'qa_content_management' => 'Gestion de contenu',
	'qa_text' => 'Texte',
	'qa_excerpt' => 'Extrait',
	'qa_featured_image' => 'L\'image sélectionnée',
	'qa_axis' => 'Axe',
	'qa_show' => 'Afficher',
	'qa_group_by' => 'Grouper par',
	'qa_chart_type' => 'Type de graphique',
	'qa_create_new_report' => 'Créer un nouveau rapport',
	'qa_select_dt_placeholder' => 'Sélectionnez un des champs date / heure',
	'qa_aggregate_function_use' => 'Fonction agrégée à utiliser',
	'qa_change_notifications_field_1_label' => 'Envoyer une notification par courrier électronique à l\'utilisateur',
	'qa_select_users_placeholder' => 'Sélectionnez un de vos Utilisateurs',
	'qa_is_created' => 'est créé',
	'qa_is_updated' => 'est mis à jour',
	'qa_is_deleted' => 'est supprimé',
	'qa_notifications' => 'Notifications',
	'qa_notify_user' => 'Notifier l\'utilisateur',
	'qa_create_new_notification' => 'Créer une nouvelle notification',
	'qa_stripe_transactions' => 'Transactions de rayures',
	'qa_upgrade_to_premium' => 'Passer à la version premium',
	'qa_messages' => 'Messages',
	'qa_you_have_no_messages' => 'Vous n\'avez pas de messages.',
	'qa_all_messages' => 'Tous les messages',
	'qa_new_message' => 'Nouveau message',
	'qa_outbox' => 'Boîte d\'envoi',
	'qa_inbox' => 'Boîte de réception',
	'qa_recipient' => 'destinataire',
	'qa_message' => 'Message',
	'qa_send' => 'Envoyer',
	'qa_reply' => 'Répondre',
	'qa_calendar_sources' => 'Sources de calendrier',
	'qa_new_calendar_source' => 'Créer une nouvelle source de calendrier',
	'qa_crud_title' => 'Titre de Crud',
	'qa_crud_date_field' => 'Champ de dates de Crud',
	'qa_prefix' => 'Préfixe',
	'qa_label_field' => 'Champ d\'étiquette',
	'qa_suffix' => 'Sufix',
	'qa_no_calendar_sources' => 'Il n\'y a pas encore de sources de calendrier.',
	'qa_no_entries_in_table' => 'Table vide',
	'qa_faq_management' => 'Gestion des questions',
	'qa_administrator_can_create_other_users' => 'Administrateur',
	'qa_simple_user' => 'Utilisateur',
	'qa_title' => 'Titre',
	'qa_roles' => 'Rôles',
	'qa_role' => 'Rôle',
	'qa_user_management' => 'Gestion des Utilisateurs',
	'qa_users' => 'Utilisateurs',
	'qa_user' => 'Utilisateur',
	'qa_name' => 'Nom',
	'qa_email' => 'eMail',
	'qa_valid_to' => 'Valide jusqua',
	'qa_phone1' => 'Téléphone 1',
	'qa_tags' => 'Mots clefs',
	'qa_tag' => 'Mot clef',
	'qa_when_crud' => 'Sur modification',
	'qa_phone2' => 'Téléphone 2',
	'quickadmin_title' => 'BNGRC1',
];