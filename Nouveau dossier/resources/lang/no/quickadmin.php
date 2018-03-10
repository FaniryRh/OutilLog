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
	'qa_file_contains_header_row' => 'Inneholder fila overskrift rad?',
	'qa_csvImport' => 'CSV import',
	'qa_csv_file_to_import' => 'CSV fil til importering',
	'qa_parse_csv' => 'Analyser CSV',
	'qa_import_data' => 'Importer data',
	'qa_imported_rows_to_table' => 'Importerte :rows reader til :table tabellen',
	'qa_create' => 'Ny',
	'qa_save' => 'Lagre',
	'qa_edit' => 'Rediger',
	'qa_restore' => 'Hent tilbake',
	'qa_permadel' => 'Slett permanent',
	'qa_all' => 'Alle',
	'qa_trash' => 'Søppel',
	'qa_view' => 'Vis',
	'qa_update' => 'Oppdater',
	'qa_list' => 'Liste',
	'qa_no_entries_in_table' => 'Ingen elemeter i listen.',
	'qa_custom_controller_index' => 'Egendefinert kontroller index.',
	'qa_logout' => 'Logg ut',
	'qa_add_new' => 'Legg til ny',
	'qa_are_you_sure' => 'Er du sikker?',
	'qa_back_to_list' => 'Tilbake til listen',
	'qa_dashboard' => 'Dashbord',
	'qa_delete' => 'Slett',
	'qa_delete_selected' => 'Slett valgte',
	'qa_category' => 'Kategori',
	'qa_categories' => 'Kategorier',
	'qa_sample_category' => 'Eksempel kategori',
	'qa_questions' => 'Spørsmål',
	'qa_question' => 'Spørsmål',
	'qa_answer' => 'Svar',
	'qa_sample_question' => 'Eksempel spørsmål',
	'qa_sample_answer' => 'Eksempel svar',
	'qa_faq_management' => 'FAQ håndtering',
	'qa_administrator_can_create_other_users' => 'Administrator (kan opprette andre brukere)',
	'qa_simple_user' => 'Enkel bruker',
	'qa_title' => 'Tittel',
	'qa_roles' => 'Roller',
	'qa_role' => 'Rolle',
	'qa_user_management' => 'Bruker håndtering',
	'qa_users' => 'Brukere',
	'qa_user' => 'Bruker',
	'qa_name' => 'Navn',
	'qa_email' => 'Epost',
	'qa_password' => 'Passord',
	'qa_remember_token' => 'Husk-meg',
	'qa_permissions' => 'Rettigheter',
	'qa_user_actions' => 'Bruker aksjoner',
	'qa_action' => 'Aksjon',
	'qa_action_model' => 'Aksjons modell',
	'qa_action_id' => 'Aksjon id',
	'qa_time' => 'Tid',
	'qa_campaign' => 'Kampanje',
	'qa_campaigns' => 'Kampanjer',
	'qa_description' => 'Beskrivelse',
	'qa_valid_from' => 'Gyldig fra',
	'qa_valid_to' => 'Gyldig til',
	'qa_discount_amount' => 'Avslagsbeløp',
	'qa_discount_percent' => 'Avslag i prosent',
	'qa_coupons_amount' => 'Kupong beløp',
	'qa_coupons' => 'Kuponger',
	'qa_code' => 'Kode',
	'qa_redeem_time' => 'Innløsningstid',
	'qa_coupon_management' => 'Kuponghåndtering',
	'qa_time_management' => 'Tidshåndtering',
	'qa_projects' => 'Prosjekter',
	'qa_reports' => 'Rapporter',
	'qa_time_entries' => 'Tidsoppføringer',
	'qa_work_type' => 'Arbeidstype',
	'qa_work_types' => 'Arbeidstyper',
	'qa_project' => 'Prosjekt',
	'qa_start_time' => 'Start tid',
	'qa_end_time' => 'Slutt tid',
	'qa_expense_category' => 'Utgiftskategori',
	'qa_expense_categories' => 'Utgiftskategorier',
	'qa_expense_management' => 'Utgiftshåndtering',
	'qa_expenses' => 'Utgifter',
	'qa_expense' => 'Utgift',
	'qa_entry_date' => 'Loggføringsdato',
	'qa_amount' => 'Beløp',
	'qa_income_categories' => 'Inntektskategorier',
	'qa_monthly_report' => 'Månedsrapport',
	'qa_companies' => 'Firmaer',
	'qa_company_name' => 'Firma navn',
	'qa_address' => 'Adresse',
	'qa_website' => 'Webside',
	'qa_contact_management' => 'Kontakt håndering',
	'qa_contacts' => 'Kontakter',
	'qa_company' => 'Firma',
	'qa_first_name' => 'Fornavn',
	'qa_last_name' => 'Etternavn',
	'qa_phone' => 'Telefon',
	'qa_phone1' => 'Telefon 1',
	'qa_phone2' => 'Telefon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Bilde (max 8mb)',
	'qa_category_name' => 'Kategorinavn',
	'qa_product_management' => 'Produkt håndtering',
	'qa_products' => 'Produkter',
	'qa_product_name' => 'Produktnavn',
	'qa_price' => 'Pris',
	'qa_tags' => 'Stikkord',
	'qa_tag' => 'Stikkord',
	'qa_photo1' => 'Bilde 1',
	'qa_photo2' => 'Bilde 2',
	'qa_photo3' => 'Bilde 3',
	'qa_calendar' => 'Kalender',
	'qa_statuses' => 'Statuser',
	'qa_task_management' => 'Oppgave håndtering',
	'qa_tasks' => 'Oppgaver',
	'qa_status' => 'Status',
	'qa_attachment' => 'Vedlegg',
	'qa_due_date' => 'Tidsfrist',
	'qa_assigned_to' => 'Tildelt til',
	'qa_assets' => 'Ressurser',
	'qa_asset' => 'Ressurs',
	'qa_serial_number' => 'Serienummer',
	'qa_location' => 'Lokasjon',
	'qa_locations' => 'Lokasjoner',
	'qa_assigned_user' => 'Tildelt (bruker)',
	'qa_notes' => 'Notater',
	'qa_assets_history' => 'Ressurs historikk',
	'qa_assets_management' => 'Ressurs håndering',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'Innholds håndtering',
	'qa_text' => 'Tekst',
	'qa_excerpt' => 'Utdrag',
	'qa_featured_image' => 'Hoved bilde',
	'qa_pages' => 'Sider',
	'qa_axis' => 'Akser',
	'qa_show' => 'Vis',
	'qa_group_by' => 'Gruppert på',
	'qa_chart_type' => 'Graftype',
	'qa_create_new_report' => 'Lag ny rapport',
	'qa_no_reports_yet' => 'Ingen rapporter sålangt.',
	'qa_created_at' => 'Laget den',
	'qa_updated_at' => 'Oppdatert den',
	'qa_deleted_at' => 'Slettet den',
	'qa_reports_x_axis_field' => 'X-akse - vennligst velg en av dato/tid feltene',
	'qa_reports_y_axis_field' => 'Y-akse - vennligst velg en av nummerfeltene',
	'qa_select_crud_placeholder' => 'Vennligst velg en av dine CRUDs',
	'qa_select_dt_placeholder' => 'Vennligst velg en av dato/tid feltene',
	'qa_aggregate_function_use' => 'Aggregeringsfunksjon som skal brukes',
	'qa_x_axis_group_by' => 'X-akse grupper etter',
	'qa_x_axis_field' => 'X-akse felt (dato/tid)',
	'qa_y_axis_field' => 'Y-akse felt',
	'qa_integer_float_placeholder' => 'Vennligst velt en av heltall/flyttall feltene',
	'qa_change_notifications_field_1_label' => 'Send en epost beskjed til bruker',
	'qa_change_notifications_field_2_label' => 'Når innlegging av CRUD',
	'qa_select_users_placeholder' => 'Vennligst velg en av dine brukere',
	'qa_is_created' => 'er laget',
	'qa_is_updated' => 'er oppdatert',
	'qa_is_deleted' => 'er slettet',
	'qa_notifications' => 'Varsler',
	'qa_notify_user' => 'Varsle bruker',
	'qa_when_crud' => 'Når CRUD',
	'qa_create_new_notification' => 'Lag ett nytt varsel',
	'qa_stripe_transactions' => 'Stripe transaksjon',
	'qa_upgrade_to_premium' => 'Oppgrader til Premium',
	'qa_messages' => 'Melding',
	'qa_you_have_no_messages' => 'Du har ingen meldinger.',
	'qa_all_messages' => 'Alle meldinger',
	'qa_new_message' => 'Ny melding',
	'qa_outbox' => 'Utboks',
	'qa_inbox' => 'Innboks',
	'qa_recipient' => 'Mottager',
	'qa_subject' => 'Emne',
	'qa_message' => 'Melding',
	'qa_send' => 'Send',
	'qa_reply' => 'Svar',
	'qa_calendar_sources' => 'Kalender kilder',
	'qa_new_calendar_source' => 'Lag en ny kalender kilde',
	'qa_crud_title' => 'Crud tittel',
	'qa_crud_date_field' => 'Crud dato felt',
	'qa_prefix' => 'Prefiks',
	'qa_label_field' => 'Etikettfelt',
	'qa_suffix' => 'Suffiks',
	'qa_no_calendar_sources' => 'Ingen kalender kilder enda.',
	'qa_crud_event_field' => 'Hendelse etikettfelt',
	'qa_create_new_calendar_source' => 'Lag en ny kalender kilde',
	'qa_edit_calendar_source' => 'Rediger kalender kilder',
	'qa_client_management' => 'Klient håndtering',
	'qa_client_management_settings' => 'Innstillinger klient håndtering',
	'qa_country' => 'Land',
	'qa_client_status' => 'Klient status',
	'qa_clients' => 'Klienter',
	'qa_client_statuses' => 'Klient statuser',
	'qa_currencies' => 'Valutaer',
	'qa_main_currency' => 'Hoved valuta',
	'qa_documents' => 'Dokumenter',
	'qa_file' => 'Fil',
	'qa_income_source' => 'Inntektskilde',
	'qa_income_sources' => 'Inntektskilder',
	'qa_fee_percent' => 'Avgift i prosent',
	'qa_note_text' => 'Notat tekst',
	'qa_client' => 'Klient',
	'qa_start_date' => 'Start dato',
	'qa_budget' => 'Budsjett',
	'qa_project_status' => 'Prosjekt status',
	'qa_project_statuses' => 'Prosjekt statuser',
	'qa_transactions' => 'Transaksjoner',
	'qa_transaction_types' => 'Transaksjonstyper',
	'qa_transaction_type' => 'Transaksjonstype',
	'qa_transaction_date' => 'Transaksjonsdato',
	'qa_currency' => 'Valuta',
	'qa_current_password' => 'Gjeldende passord',
	'qa_new_password' => 'Nytt passord',
	'qa_password_confirm' => 'Nytt passord bekreftelse',
	'qa_dashboard_text' => 'Du er nå logget inn!',
	'qa_forgot_password' => 'Glemt ditt passord?',
	'qa_remember_me' => 'Husk meg',
	'qa_login' => 'Logg inn',
	'qa_change_password' => 'Endre passord',
	'qa_csv' => 'CSV',
	'qa_print' => 'Skriv ut',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Kopier',
	'qa_colvis' => 'Kolonne visning',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'Tilbakestill passord',
	'qa_reset_password_woops' => '<strong>Oisann!</strong> Det ble problemer med inndata:',
	'qa_email_line1' => 'Du mottar denne eposten fordi vi har mottat ett ønske om å tilbakestille passordet på din konto.',
	'qa_email_line2' => 'Hvis du ikke forespurte om dette, så trenger du ikke gjøre noe.',
	'qa_email_greet' => 'Hallo',
	'qa_confirm_password' => 'Bekreft passordet',
	'qa_email_regards' => 'Hilsen',
	'qa_if_you_are_having_trouble' => 'Hvis du har problemer med å trykke på',
	'qa_copy_paste_url_bellow' => 'knapp, kopier og lim inn URLen under inn i din nettleser.',
	'qa_please_select' => 'Vennligst velg',
	'qa_register' => 'Registrer',
	'qa_registration' => 'Registrering',
	'qa_not_approved_title' => 'Du er ikke godkjent',
	'qa_not_approved_p' => 'Kontoen din er fortsatt ikke godkjent av administrator. Vennligst prøv igjen senere.',
	'qa_there_were_problems_with_input' => 'De oppsto problemer med inn-data',
	'qa_whoops' => 'Oups!',
	'quickadmin_title' => 'BNGRC1',
];