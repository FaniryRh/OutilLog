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
	'qa_create' => 'Create',
	'qa_save' => 'Save',
	'qa_edit' => 'Edit',
	'qa_restore' => 'Restore',
	'qa_permadel' => 'Delete Permanently',
	'qa_all' => 'All',
	'qa_trash' => 'Trash',
	'qa_view' => 'View',
	'qa_update' => 'Update',
	'qa_list' => 'List',
	'qa_no_entries_in_table' => 'No entries in table',
	'qa_custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Logout',
	'qa_add_new' => 'Add new',
	'qa_are_you_sure' => 'Are you sure?',
	'qa_back_to_list' => 'Back to list',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Delete',
	'qa_delete_selected' => 'Delete selected',
	'qa_category' => 'Category',
	'qa_categories' => 'Categories',
	'qa_sample_category' => 'Sample category',
	'qa_questions' => 'Questions',
	'qa_question' => 'Question',
	'qa_answer' => 'Answer',
	'qa_sample_question' => 'Sample question',
	'qa_sample_answer' => 'Sample answer',
	'qa_faq_management' => 'FAQ Management',
	'qa_administrator_can_create_other_users' => 'Administrator (can create other users)',
	'qa_simple_user' => 'Simple user',
	'qa_title' => 'Title',
	'qa_roles' => 'Roles',
	'qa_role' => 'Role',
	'qa_user_management' => 'User management',
	'qa_users' => 'Users',
	'qa_user' => 'User',
	'qa_name' => 'Name',
	'qa_email' => 'Email',
	'qa_password' => 'Password',
	'qa_remember_token' => 'Remember token',
	'qa_permissions' => 'Permissions',
	'qa_user_actions' => 'User actions',
	'qa_action' => 'Action',
	'qa_action_model' => 'Action model',
	'qa_action_id' => 'Action id',
	'qa_time' => 'Time',
	'qa_campaign' => 'Campaign',
	'qa_campaigns' => 'Campaigns',
	'qa_description' => 'Description',
	'qa_valid_from' => 'Valid from',
	'qa_valid_to' => 'Valid to',
	'qa_discount_amount' => 'Discount amount',
	'qa_discount_percent' => 'Discount percent',
	'qa_coupons_amount' => 'Coupons amount',
	'qa_coupons' => 'Coupons',
	'qa_code' => 'Code',
	'qa_redeem_time' => 'Redeem time',
	'qa_coupon_management' => 'Coupon Management',
	'qa_time_management' => 'Time management',
	'qa_projects' => 'Projects',
	'qa_reports' => 'Reports',
	'qa_time_entries' => 'Time entries',
	'qa_work_type' => 'Work type',
	'qa_work_types' => 'Work types',
	'qa_project' => 'Project',
	'qa_start_time' => 'Start time',
	'qa_end_time' => 'End time',
	'qa_expense_category' => 'Expense Category',
	'qa_expense_categories' => 'Expense Categories',
	'qa_expense_management' => 'Expense Management',
	'qa_expenses' => 'Expenses',
	'qa_expense' => 'Expense',
	'qa_entry_date' => 'Entry date',
	'qa_amount' => 'Amount',
	'qa_income_categories' => 'Income categories',
	'qa_monthly_report' => 'Monthly report',
	'qa_companies' => 'Companies',
	'qa_company_name' => 'Company name',
	'qa_address' => 'Address',
	'qa_website' => 'Website',
	'qa_contact_management' => 'Contact management',
	'qa_contacts' => 'Contacts',
	'qa_company' => 'Company',
	'qa_first_name' => 'First name',
	'qa_last_name' => 'Last name',
	'qa_phone' => 'Phone',
	'qa_phone1' => 'Phone 1',
	'qa_phone2' => 'Phone 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Photo (max 8mb)',
	'qa_category_name' => 'Category name',
	'qa_product_management' => 'Product management',
	'qa_products' => 'Products',
	'qa_product_name' => 'Product name',
	'qa_price' => 'Price',
	'qa_tags' => 'Tags',
	'qa_tag' => 'Tag',
	'qa_photo1' => 'Photo1',
	'qa_photo2' => 'Photo2',
	'qa_photo3' => 'Photo3',
	'qa_calendar' => 'Calendar',
	'qa_statuses' => 'Statuses',
	'qa_task_management' => 'Task management',
	'qa_tasks' => 'Tasks',
	'qa_status' => 'Status',
	'qa_attachment' => 'Attachment',
	'qa_due_date' => 'Due date',
	'qa_assigned_to' => 'Assigned to',
	'qa_assets' => 'Assets',
	'qa_asset' => 'Asset',
	'qa_serial_number' => 'Serial number',
	'qa_location' => 'Location',
	'qa_locations' => 'Locations',
	'qa_assigned_user' => 'Assigned (user)',
	'qa_notes' => 'Notes',
	'qa_assets_history' => 'Assets history',
	'qa_assets_management' => 'Assets management',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'Content management',
	'qa_text' => 'Text',
	'qa_excerpt' => 'Excerpt',
	'qa_featured_image' => 'Featured image',
	'qa_pages' => 'Pages',
	'qa_axis' => 'Axis',
	'qa_show' => 'Show',
	'qa_group_by' => 'Group by',
	'qa_chart_type' => 'Chart type',
	'qa_create_new_report' => 'Create new report',
	'qa_no_reports_yet' => 'No reports yet.',
	'qa_created_at' => 'Created at',
	'qa_updated_at' => 'Updated at',
	'qa_deleted_at' => 'Deleted at',
	'qa_reports_x_axis_field' => 'X-axis - please choose one of date/time fields',
	'qa_reports_y_axis_field' => 'Y-axis - please choose one of number fields',
	'qa_select_crud_placeholder' => 'Please select one of your CRUDs',
	'qa_select_dt_placeholder' => 'Please select one of date/time fields',
	'qa_aggregate_function_use' => 'Aggregate function to use',
	'qa_x_axis_group_by' => 'X-axis group by',
	'qa_x_axis_field' => 'X-axis field (date/time)',
	'qa_y_axis_field' => 'Y-axis field',
	'qa_integer_float_placeholder' => 'Please select one of integer/float fields',
	'qa_change_notifications_field_1_label' => 'Send email notification to User',
	'qa_change_notifications_field_2_label' => 'When Entry on CRUD',
	'qa_select_users_placeholder' => 'Please select one of your Users',
	'qa_is_created' => 'is created',
	'qa_is_updated' => 'is updated',
	'qa_is_deleted' => 'is deleted',
	'qa_notifications' => 'Notifications',
	'qa_notify_user' => 'Notify User',
	'qa_when_crud' => 'When CRUD',
	'qa_create_new_notification' => 'Create new Notification',
	'qa_stripe_transactions' => 'Stripe Transactions',
	'qa_upgrade_to_premium' => 'Upgrade to Premium',
	'qa_messages' => 'Messages',
	'qa_you_have_no_messages' => 'You have no messages.',
	'qa_all_messages' => 'All Messages',
	'qa_new_message' => 'New message',
	'qa_outbox' => 'Outbox',
	'qa_inbox' => 'Inbox',
	'qa_recipient' => 'Recipient',
	'qa_subject' => 'Subject',
	'qa_message' => 'Message',
	'qa_send' => 'Send',
	'qa_reply' => 'Reply',
	'qa_calendar_sources' => 'Calendar sources',
	'qa_new_calendar_source' => 'Create new calendar source',
	'qa_crud_title' => 'Crud title',
	'qa_crud_date_field' => 'Crud date field',
	'qa_prefix' => 'Prefix',
	'qa_label_field' => 'Label field',
	'qa_suffix' => 'Sufix',
	'qa_no_calendar_sources' => 'No calendar sources yet.',
	'qa_crud_event_field' => 'Event label field',
	'qa_create_new_calendar_source' => 'Create new Calendar Source',
	'qa_edit_calendar_source' => 'Edit Calendar Source',
	'qa_client_management' => 'Client management',
	'qa_client_management_settings' => 'Client management settings',
	'qa_country' => 'Country',
	'qa_client_status' => 'Client status',
	'qa_clients' => 'Clients',
	'qa_client_statuses' => 'Client statuses',
	'qa_currencies' => 'Currencies',
	'qa_main_currency' => 'Main currency',
	'qa_documents' => 'Documents',
	'qa_file' => 'File',
	'qa_income_source' => 'Income source',
	'qa_income_sources' => 'Income sources',
	'qa_fee_percent' => 'Fee percent',
	'qa_note_text' => 'Note text',
	'qa_client' => 'Client',
	'qa_start_date' => 'Start date',
	'qa_budget' => 'Budget',
	'qa_project_status' => 'Project status',
	'qa_project_statuses' => 'Project statuses',
	'qa_transactions' => 'Transactions',
	'qa_transaction_types' => 'Transaction types',
	'qa_transaction_type' => 'Transaction type',
	'qa_transaction_date' => 'Transaction date',
	'qa_currency' => 'Currency',
	'qa_current_password' => 'Current password',
	'qa_new_password' => 'New password',
	'qa_password_confirm' => 'New password confirmation',
	'qa_dashboard_text' => 'You are logged in!',
	'qa_forgot_password' => 'Forgot your password?',
	'qa_remember_me' => 'Remember me',
	'qa_login' => 'Login',
	'qa_change_password' => 'Change password',
	'qa_csv' => 'CSV',
	'qa_print' => 'Print',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Copy',
	'qa_colvis' => 'Column visibility',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'Reset password',
	'qa_reset_password_woops' => '<strong>Whoops!</strong> There were problems with input:',
	'qa_email_line1' => 'You are receiving this email because we received a password reset request for your account.',
	'qa_email_line2' => 'If you did not request a password reset, no further action is required.',
	'qa_email_greet' => 'Hello',
	'qa_email_regards' => 'Regards',
	'qa_confirm_password' => 'Confirm password',
	'qa_if_you_are_having_trouble' => 'If you’re having trouble clicking the',
	'qa_copy_paste_url_bellow' => 'button, copy and paste the URL below into your web browser:',
	'qa_please_select' => 'Please select',
	'qa_register' => 'Register',
	'qa_registration' => 'Registration',
	'qa_not_approved_title' => 'You are not approved',
	'qa_not_approved_p' => 'Your account is still not approved by administrator. Please, be patient and try again later.',
	'qa_there_were_problems_with_input' => 'There were problems with input',
	'qa_whoops' => 'Whoops!',
	'qa_file_contains_header_row' => 'File contains header row?',
	'qa_csvImport' => 'CSV Import',
	'qa_csv_file_to_import' => 'CSV file to import',
	'qa_parse_csv' => 'Parse CSV',
	'qa_import_data' => 'Import data',
	'qa_imported_rows_to_table' => 'Imported :rows rows to :table table',
	'quickadmin_title' => 'BNGRC1',
];