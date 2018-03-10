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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Tijdstip',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
		'assets-history' => [		'title' => 'Historiques',		'created_at' => 'Tijdstip',		'fields' => [		],	],
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
		'assets-history' => [		'title' => 'Historique',		'created_at' => 'Tijdstip',		'fields' => [			'asset' => 'Matériel',			'status' => 'Statut',			'location' => 'Location',			'assigned-user' => 'Responsable',		],	],
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
	'qa_create' => 'Toevoegen',
	'qa_save' => 'Opslaan',
	'qa_edit' => 'Bewerken',
	'qa_view' => 'Bekijken',
	'qa_update' => 'Bijwerken',
	'qa_list' => 'Lijst',
	'qa_no_entries_in_table' => 'Geen inhoud gevonden',
	'qa_custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Logout',
	'qa_add_new' => 'Toevoegen',
	'qa_are_you_sure' => 'Ben je zeker?',
	'qa_back_to_list' => 'Terug naar lijst',
	'qa_dashboard' => 'Boordtabel',
	'qa_delete' => 'Verwijderen',
	'qa_restore' => 'Herstellen',
	'qa_permadel' => 'Definitief verwijderen',
	'qa_all' => 'Alle',
	'qa_trash' => 'Prullenbak',
	'qa_delete_selected' => 'Geselecteerde verwijderen',
	'qa_category' => 'Categorie',
	'qa_categories' => 'Categoriën',
	'qa_questions' => 'Vragen',
	'qa_question' => 'Vraag',
	'qa_answer' => 'Antwoord',
	'qa_sample_question' => 'Demo vraag',
	'qa_sample_answer' => 'Demo antwoord',
	'qa_faq_management' => 'FAQ beheer',
	'qa_administrator_can_create_other_users' => 'Beheerder (kan gebruikers toevoegen)',
	'qa_simple_user' => 'Gewone gebruiker',
	'qa_title' => 'Titel',
	'qa_roles' => 'Rollen',
	'qa_role' => 'Rol',
	'qa_user_management' => 'Gebruikersbeheer',
	'qa_users' => 'Gebruikers',
	'qa_user' => 'Gebruiker',
	'qa_name' => 'Naam',
	'qa_email' => 'E-mail',
	'qa_password' => 'Paswoord',
	'qa_remember_token' => 'Herinneringstoken',
	'qa_permissions' => 'Toelatingen',
	'qa_user_actions' => 'Gebruikeracties',
	'qa_action' => 'Actie',
	'qa_action_model' => 'Actie model',
	'qa_action_id' => 'Actie id',
	'qa_time' => 'Tijdstip',
	'qa_campaign' => 'Campagne',
	'qa_campaigns' => 'Campagnes',
	'qa_description' => 'Omschrijving',
	'qa_valid_from' => 'Geldig van',
	'qa_valid_to' => 'Geldig tot',
	'qa_discount_amount' => 'Bedrag korting',
	'qa_discount_percent' => 'Percentage korting',
	'qa_coupons_amount' => 'Bedrag coupon',
	'qa_coupons' => 'Coupons',
	'qa_code' => 'Code',
	'qa_redeem_time' => 'Inlevertijd',
	'qa_coupon_management' => 'Couponbeheer',
	'qa_time_management' => 'Tijdmanagement',
	'qa_projects' => 'Projecten',
	'qa_reports' => 'Rapporten',
	'qa_sample_category' => 'Demo categorie',
	'qa_work_type' => 'Soort werk',
	'qa_work_types' => 'Soorten werk',
	'qa_project' => 'Project',
	'qa_start_time' => 'Starttijd',
	'qa_end_time' => 'Eindtijd',
	'qa_expense_category' => 'Uitgave categorie',
	'qa_expense_categories' => 'Uitgave categoriën',
	'qa_expense_management' => 'Uitgavebeheer',
	'qa_expenses' => 'Uitgaven',
	'qa_expense' => 'Uitgave',
	'qa_amount' => 'Bedrag',
	'qa_income_categories' => 'Inkomst categorieën',
	'qa_monthly_report' => 'Maandelijks rapport',
	'qa_companies' => 'Bedrijven',
	'qa_company_name' => 'Naam bedrijf',
	'qa_address' => 'Adres',
	'qa_website' => 'Website',
	'qa_contact_management' => 'Contactbeheer',
	'qa_contacts' => 'Contacten',
	'qa_company' => 'Bedrijf',
	'qa_first_name' => 'Voornaam',
	'qa_last_name' => 'Familienaam',
	'qa_phone' => 'Telefoon',
	'qa_phone1' => 'Telefoon 1',
	'qa_phone2' => 'Teelefoon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Foto (max. 8mb)',
	'qa_category_name' => 'Categorienaam',
	'qa_product_management' => 'Productbeheer',
	'qa_products' => 'Producten',
	'qa_product_name' => 'Productnaam',
	'qa_price' => 'Prijs',
	'qa_tags' => 'Tags',
	'qa_tag' => 'Tag',
	'qa_photo1' => 'Foto1',
	'qa_photo2' => 'Foto2',
	'qa_photo3' => 'Foto3',
	'qa_calendar' => 'Kalender',
	'qa_statuses' => 'Statuten',
	'qa_task_management' => 'Takenbeheer',
	'qa_tasks' => 'Taken',
	'qa_status' => 'Statuut',
	'qa_attachment' => 'Bijlage',
	'qa_assigned_to' => 'Toegewezen aan',
	'qa_serial_number' => 'Serienummer',
	'qa_location' => 'Plaats',
	'qa_locations' => 'Plaatsen',
	'qa_assigned_user' => 'Toegewezen (gebruiker)',
	'qa_notes' => 'Notities',
	'qa_please_select' => 'Kies',
	'qa_register' => 'Registreer',
	'qa_registration' => 'Registratie',
	'qa_not_approved_title' => 'Je bent niet toegelaten.',
	'qa_not_approved_p' => 'Ja acccount is nog niet goedgekeurd door een administrator. Even geduld en probeer later opnieuw.',
	'qa_there_were_problems_with_input' => 'Er waren problemen met de input',
	'qa_whoops' => 'Whoops!',
	'qa_file_contains_header_row' => 'Bevat het bestand een titelrij ?',
	'qa_csvImport' => 'CSV import',
	'qa_csv_file_to_import' => 'te importeren CSV bestand',
	'qa_parse_csv' => 'CSV bestand parsen',
	'qa_import_data' => 'Gegevens importeren',
	'qa_imported_rows_to_table' => ':row rijen geïmporteerd in tabel :table',
	'qa_time_entries' => 'Tijdingaves',
	'qa_entry_date' => 'Ingavedatum',
	'qa_colvis' => 'Kolom zichtbaarheid',
	'qa_pdf' => 'PDF',
	'qa_create_new_calendar_source' => 'Nieuwe kalenderbron',
	'qa_edit_calendar_source' => 'Kalenderbronnen bewerken',
	'qa_client_management' => 'Klantbeheer',
	'qa_client_management_settings' => 'Klantbeheer settings',
	'qa_country' => 'Land',
	'qa_client_status' => 'Klant status',
	'qa_clients' => 'Klanten',
	'qa_client_statuses' => 'Klant statuses',
	'qa_currencies' => 'Munteenheden',
	'qa_main_currency' => 'Hoofdmunteenheid',
	'qa_documents' => 'Documenten',
	'qa_file' => 'Bestand',
	'qa_income_source' => 'Inkomstbron',
	'qa_income_sources' => 'Inkomstbronnen',
	'qa_fee_percent' => 'Fee percent',
	'qa_note_text' => 'Nota tekst',
	'qa_client' => 'Klant',
	'qa_start_date' => 'Startdatum',
	'qa_budget' => 'Budget',
	'qa_project_status' => 'Project status',
	'qa_project_statuses' => 'Project statuses',
	'qa_transactions' => 'Transacties',
	'qa_transaction_types' => 'Transactietypes',
	'qa_transaction_type' => 'Transactietype',
	'qa_transaction_date' => 'Transactiedatum',
	'qa_currency' => 'Munteenheid',
	'qa_current_password' => 'Huidig paswoord',
	'qa_new_password' => 'Nieuw paswoord',
	'qa_password_confirm' => 'Bevestiging nieuw paswoord',
	'qa_dashboard_text' => 'Je bent ingelogd !',
	'qa_forgot_password' => 'Paswoord vergeten ?',
	'qa_remember_me' => 'Herinner mij',
	'qa_login' => 'Login',
	'qa_change_password' => 'Paswoord wijzigen',
	'qa_csv' => 'CSV',
	'qa_print' => 'Afdrukken',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Kopiëren',
	'qa_upgrade_to_premium' => 'Upgrade naar Premium.',
	'qa_messages' => 'Berichten',
	'qa_you_have_no_messages' => 'Je hebt geen berichten.',
	'qa_all_messages' => 'Alle berichten',
	'qa_new_message' => 'Nieuw bericht',
	'qa_outbox' => 'Outbox',
	'qa_inbox' => 'Inbox',
	'qa_recipient' => 'Bestemmeling',
	'qa_subject' => 'Onderwerp',
	'qa_message' => 'Bericht',
	'qa_send' => 'Verzend',
	'qa_reply' => 'Antwoord',
	'qa_calendar_sources' => 'Kalenderbronnen',
	'qa_new_calendar_source' => 'Een nieuwe kalenderbron maken',
	'qa_crud_title' => 'Crud titel',
	'qa_crud_date_field' => 'Crud datumveld',
	'qa_prefix' => 'Prefix',
	'qa_label_field' => 'Label veld',
	'qa_suffix' => 'Suffix',
	'qa_no_calendar_sources' => 'Geen kalenderbronnen beschikbaar',
	'qa_crud_event_field' => 'Event label veld',
	'qa_due_date' => 'Vervaldatum',
	'qa_assets' => 'Activa',
	'qa_asset' => 'Activa',
	'qa_assets_history' => 'Activa geschiedenis',
	'qa_assets_management' => 'Activabeheer',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'Inhoudbeheer',
	'qa_text' => 'Tekst',
	'qa_excerpt' => 'Extract',
	'qa_featured_image' => 'Feature afbeelding',
	'qa_pages' => 'Pagina\'s',
	'qa_axis' => 'As',
	'qa_show' => 'Toon',
	'qa_group_by' => 'Groepeer op',
	'qa_chart_type' => 'Grafiektype',
	'qa_create_new_report' => 'Maak nieuw rapport',
	'qa_no_reports_yet' => 'Nog geen rapporten',
	'qa_created_at' => 'Gemaakt op',
	'qa_updated_at' => 'Geüpdate op',
	'qa_deleted_at' => 'Verwijderd op',
	'qa_reports_x_axis_field' => 'X-as - kies één van de datum/tijd velden',
	'qa_reports_y_axis_field' => 'Y-as - kies één van de cijfervelden',
	'qa_select_crud_placeholder' => 'Kies één van je CRUD\'s',
	'qa_select_dt_placeholder' => 'Kies één van de datum/tijd velden',
	'qa_aggregate_function_use' => 'Te gebruiken functie ',
	'qa_x_axis_group_by' => 'X-as groepeer op',
	'qa_x_axis_field' => 'Y-as veld (datum/tijd)',
	'qa_y_axis_field' => 'Y-as veld',
	'qa_integer_float_placeholder' => 'Kies één van de integer/float velden',
	'qa_change_notifications_field_1_label' => 'Zend een e-mail naar Gebruiker',
	'qa_change_notifications_field_2_label' => 'Bij een CRUD entry',
	'qa_select_users_placeholder' => 'Kies één van je Gebruikers',
	'qa_is_created' => 'werd aangemaakt',
	'qa_is_updated' => 'werd geüpdate',
	'qa_is_deleted' => 'werd verwijderd',
	'qa_notifications' => 'Verwittigingen',
	'qa_notify_user' => 'Verwittig Gebruiker',
	'qa_when_crud' => 'wanneer CRUD',
	'qa_create_new_notification' => 'Maak een nieuwe verwittiging aan',
	'qa_stripe_transactions' => 'Stripe transacties',
	'quickadmin_title' => 'BNGRC1',
];