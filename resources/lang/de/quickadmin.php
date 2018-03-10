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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Zeit',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
		'assets-history' => [		'title' => 'Historiques',		'created_at' => 'Zeit',		'fields' => [		],	],
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
		'assets-history' => [		'title' => 'Historique',		'created_at' => 'Zeit',		'fields' => [			'asset' => 'Matériel',			'status' => 'Statut',			'location' => 'Location',			'assigned-user' => 'Responsable',		],	],
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
	'qa_create' => 'Erstellen',
	'qa_save' => 'Speichern',
	'qa_edit' => 'Bearbeiten',
	'qa_view' => 'Betrachten',
	'qa_update' => 'Aktualisieren',
	'qa_list' => 'Liste',
	'qa_no_entries_in_table' => 'Keine Einträge in der Tabelle.',
	'qa_custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Abmelden',
	'qa_add_new' => 'Hinzufügen',
	'qa_are_you_sure' => 'Sind Sie sicher?',
	'qa_back_to_list' => 'Zurück zur Liste',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Löschen',
	'qa_restore' => 'Wiederherstellen',
	'qa_permadel' => 'Permant löschen',
	'qa_all' => 'Alle',
	'qa_trash' => 'Papierkorb',
	'qa_delete_selected' => 'Markierte löschen',
	'qa_category' => 'Kategorie',
	'qa_categories' => 'Kategorien',
	'qa_sample_category' => 'Beispielkategorie',
	'qa_questions' => 'Fragen',
	'qa_question' => 'Frage',
	'qa_answer' => 'Antwort',
	'qa_sample_question' => 'Beispielfrage',
	'qa_sample_answer' => 'Beispielantwort',
	'qa_faq_management' => 'FAQ Verwaltung',
	'qa_administrator_can_create_other_users' => 'Administrator (kann andere Benutzer erstellen)',
	'qa_simple_user' => 'Einfacher Benutzer',
	'qa_title' => 'Titel',
	'qa_roles' => 'Rollen',
	'qa_role' => 'Rolle',
	'qa_user_management' => 'Benutzerverwaltung',
	'qa_users' => 'Benutzer',
	'qa_user' => 'Benutzer',
	'qa_name' => 'Name',
	'qa_email' => 'E-Mail',
	'qa_password' => 'Passwort',
	'qa_remember_token' => 'Remember Token',
	'qa_permissions' => 'Zugriffsrechte',
	'qa_user_actions' => 'Prokoll',
	'qa_action' => 'Action',
	'qa_action_model' => 'Action Model',
	'qa_action_id' => 'Action ID',
	'qa_time' => 'Zeit',
	'qa_campaign' => 'Kampagne',
	'qa_campaigns' => 'Kampagnen',
	'qa_description' => 'Beschreibung',
	'qa_valid_from' => 'Gültig von',
	'qa_valid_to' => 'Gültig bis',
	'qa_discount_amount' => 'Rabattbetrag',
	'qa_discount_percent' => 'Rabatt in Prozent',
	'qa_coupons_amount' => 'Anzahl Gutscheine',
	'qa_coupons' => 'Gutscheine',
	'qa_code' => 'Code',
	'qa_redeem_time' => 'Eingelöst',
	'qa_coupon_management' => 'Gutscheinverwaltung',
	'qa_time_management' => 'Zeiterfassung',
	'qa_projects' => 'Projekte',
	'qa_reports' => 'Berichte',
	'qa_time_entries' => 'Zeiterfassungseinträge',
	'qa_work_type' => 'Art der Arbeit',
	'qa_work_types' => 'Arten der Arbeit',
	'qa_project' => 'Projekt',
	'qa_start_time' => 'Beginnt am',
	'qa_end_time' => 'Endet am',
	'qa_expense_category' => 'Asugabenkategorie',
	'qa_expense_categories' => 'Ausgabenkategorien',
	'qa_expense_management' => 'Ausgabenverwaltung',
	'qa_expenses' => 'Ausgaben',
	'qa_expense' => 'Ausgabe',
	'qa_entry_date' => 'Erfasst am',
	'qa_amount' => 'Betrag',
	'qa_income_categories' => 'Einnahmenkategorien',
	'qa_monthly_report' => 'Monatsbericht',
	'qa_companies' => 'Firmen',
	'qa_company_name' => 'Firmenname',
	'qa_address' => 'Adresse',
	'qa_website' => 'Webseite',
	'qa_contact_management' => 'Kontaktverwaltung',
	'qa_contacts' => 'Kontakte',
	'qa_company' => 'Firma',
	'qa_first_name' => 'Vorname',
	'qa_last_name' => 'Nachname',
	'qa_phone' => 'Telefon',
	'qa_phone1' => 'Telefon 1',
	'qa_phone2' => 'Telefon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Foto (max. 8 MB)',
	'qa_category_name' => 'Kategoriename',
	'qa_product_management' => 'Produktverwaltung',
	'qa_products' => 'Produkte',
	'qa_product_name' => 'Produktname',
	'qa_price' => 'Preis',
	'qa_tags' => 'Stichwörter',
	'qa_tag' => 'Stichwort',
	'qa_photo1' => 'Abbildung 1',
	'qa_photo2' => 'Abbildung 2',
	'qa_photo3' => 'Abbildung 3',
	'qa_calendar' => 'Kalender',
	'qa_statuses' => 'Stati',
	'qa_task_management' => 'Aufgabenplanung',
	'qa_tasks' => 'Aufgabe',
	'qa_status' => 'Status',
	'qa_attachment' => 'Anhang',
	'qa_due_date' => 'Frist',
	'qa_assigned_to' => 'Zugewiesen zu',
	'qa_assets' => 'Geräte',
	'qa_asset' => 'Gerät',
	'qa_serial_number' => 'Seriennummer',
	'qa_location' => 'Standort',
	'qa_locations' => 'Standorte',
	'qa_assigned_user' => 'Benutzer',
	'qa_notes' => 'Notizen',
	'qa_assets_history' => 'Verlauf',
	'qa_assets_management' => 'Geräteverwaltung',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'Inhaltsverwaltung',
	'qa_text' => 'Text',
	'qa_excerpt' => 'Auszug',
	'qa_featured_image' => 'Hauptbild',
	'qa_pages' => 'Seiten',
	'qa_axis' => 'Achse',
	'qa_show' => 'Zeige',
	'qa_group_by' => 'Gruppiere nach',
	'qa_chart_type' => 'Diagrammtyp',
	'qa_create_new_report' => 'Erzeuge neuen Bericht',
	'qa_no_reports_yet' => 'Keine berichte',
	'qa_created_at' => 'Erstellt am',
	'qa_updated_at' => 'Aktualisiert am',
	'qa_deleted_at' => 'Gelöscht am',
	'qa_reports_x_axis_field' => 'X-Achse - bitte wählen sie ein Datums oder Zeitfeld',
	'qa_reports_y_axis_field' => 'Y-Achse - bitte wählen sie ein Zahlenfeld',
	'qa_select_crud_placeholder' => 'Bitte wählen sie einen CRUD',
	'qa_select_dt_placeholder' => 'Bitte wählen sie ein Datums oder Zeitfeld',
	'qa_aggregate_function_use' => 'Aggregate Funktion',
	'qa_x_axis_group_by' => 'X-Achse gruppieren nach',
	'qa_x_axis_field' => 'X-Achsen Feld (Datum/Zeit)',
	'qa_y_axis_field' => 'Y-Achsen Feld',
	'qa_integer_float_placeholder' => 'Bitte wählen Sie ein Zahlen Feld',
	'qa_change_notifications_field_1_label' => 'Sende Benachrichtigung an Benutzer',
	'qa_change_notifications_field_2_label' => 'Wenn Eintrag in CRUD',
	'qa_select_users_placeholder' => 'Bitte wählen sie einen Benutzer',
	'qa_is_created' => 'ist erstellt',
	'qa_is_updated' => 'ist aktualisiert',
	'qa_is_deleted' => 'ist gelöscht',
	'qa_notifications' => 'Benachrichtigungen',
	'qa_notify_user' => 'Benachrichtige Benutzer',
	'qa_when_crud' => 'Wenn CRUDD',
	'qa_create_new_notification' => 'Erstelle Benachrichtigung',
	'qa_stripe_transactions' => 'Stripe Transaktionen',
	'qa_upgrade_to_premium' => 'Zu Premium heraufstufen',
	'qa_messages' => 'Nachrichten',
	'qa_you_have_no_messages' => 'Sie haben keine Nachrichten.',
	'qa_all_messages' => 'Alle Nachrichten',
	'qa_new_message' => 'Neue Nachricht',
	'qa_outbox' => 'Gesendet',
	'qa_inbox' => 'Posteingang',
	'qa_recipient' => 'Empfänger',
	'qa_subject' => 'Betreff',
	'qa_message' => 'Nachricht',
	'qa_send' => 'Senden',
	'qa_reply' => 'Antworten',
	'qa_calendar_sources' => 'Kalenderquellen',
	'qa_new_calendar_source' => 'Erstelle eine neue Kalenderquelle',
	'qa_crud_title' => 'Crud Titel',
	'qa_crud_date_field' => 'Crud Datumsfeld',
	'qa_prefix' => 'Prefix',
	'qa_label_field' => 'Beschreibungsfeld',
	'qa_suffix' => 'Suffix',
	'qa_no_calendar_sources' => 'Keine Kalenderquellen',
	'qa_crud_event_field' => 'Ereignis-Beschreibungsfeld',
	'qa_create_new_calendar_source' => 'Erstelle neue Kalenderquelle',
	'qa_edit_calendar_source' => 'Kalenderquelle bearbeiten',
	'qa_client_management' => 'Kundenverwaltung',
	'qa_client_management_settings' => 'Kundenverwaltung-Einstellungen',
	'qa_country' => 'Land',
	'qa_client_status' => 'Kundenstatus',
	'qa_clients' => 'Kunden',
	'qa_client_statuses' => 'Kundenstati',
	'qa_currencies' => 'Währungen',
	'qa_main_currency' => 'Hauptwährung',
	'qa_documents' => 'Dokumente',
	'qa_file' => 'Datei',
	'qa_income_source' => 'Einnahmequelle',
	'qa_income_sources' => 'Einnahmequellen',
	'qa_fee_percent' => 'Gebühren in Prozent',
	'qa_note_text' => 'Text der Notiz',
	'qa_client' => 'Kunde',
	'qa_start_date' => 'Beginnt am',
	'qa_budget' => 'Budget',
	'qa_project_status' => 'Projektstatus',
	'qa_project_statuses' => 'Projektstati',
	'qa_transactions' => 'Transaktionen',
	'qa_transaction_types' => 'Transaktionstypen',
	'qa_transaction_type' => 'Transaktionstyp',
	'qa_transaction_date' => 'Transaktionsdatum',
	'qa_currency' => 'Währung',
	'qa_current_password' => 'Aktuelles Passwort',
	'qa_new_password' => 'Neues Passwort',
	'qa_password_confirm' => 'Passwort wiederholen',
	'qa_dashboard_text' => 'Sie sind angemeldet!',
	'qa_forgot_password' => 'Passwort vergessen?',
	'qa_remember_me' => 'Anmeldedaten merken',
	'qa_login' => 'Anmelden',
	'qa_change_password' => 'Passwört ändern',
	'qa_csv' => 'CSV',
	'qa_print' => 'Drucken',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Kopieren',
	'qa_colvis' => 'Spaltensichtbarkeit',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'Passwort zurücksetzen',
	'qa_reset_password_woops' => '<strong>Uuups!</strong> Fehlerhafte Eingabe:',
	'qa_email_line1' => 'Sie erhalten diese E-Mail weil wir eine Passwort zurücksetzen Anfrage erhalten haben.',
	'qa_email_line2' => 'Wenn sie keine Passwort zurücksetzen Anfrage gesendet haben, brauchen sie nichts unternehmen.',
	'qa_email_greet' => 'Hallo',
	'qa_email_regards' => 'Grüße',
	'qa_confirm_password' => 'Passwort bestätigen',
	'qa_if_you_are_having_trouble' => 'Wenn sie Probleme mit dem drücken des',
	'qa_copy_paste_url_bellow' => 'Buttons haben, kopieren sie den Link in ihren Browser:',
	'qa_please_select' => 'Bitte auswählen',
	'qa_register' => 'Registrieren',
	'qa_registration' => 'Registrierung',
	'qa_not_approved_title' => 'Sie sind nicht freigeschaltet',
	'qa_not_approved_p' => 'Ihr Konto wurde noch nicht von einem Administrator freigeschaltet. Bitte gedulden sie sich und versuchen sie es später noch einmal.',
	'qa_there_were_problems_with_input' => 'Es gab Probleme mit der Eingabe',
	'qa_whoops' => 'Uuups!',
	'qa_file_contains_header_row' => 'Datei enthält eine Kopfzeile?',
	'qa_csvImport' => 'CSV Importieren',
	'qa_csv_file_to_import' => 'Datei für den CSV Import',
	'qa_parse_csv' => 'Lese CSV',
	'qa_import_data' => 'Daten importieren',
	'qa_imported_rows_to_table' => ':rows Zeilen in Tabelle :table importiert',
	'quickadmin_title' => 'BNGRC1',
];