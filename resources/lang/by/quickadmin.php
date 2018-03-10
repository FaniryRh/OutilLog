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
	'qa_create' => 'Стварыць',
	'qa_save' => 'Захаваць',
	'qa_edit' => 'Рэдагаваць',
	'qa_restore' => 'Аднавіць',
	'qa_permadel' => 'Выдаліць назаўсёды',
	'qa_all' => 'Усё',
	'qa_trash' => 'Смецце',
	'qa_list' => 'Спіс',
	'qa_logout' => 'Выйсці',
	'qa_add_new' => 'Дадаць новы',
	'qa_are_you_sure' => 'Вы ўпэўнены?',
	'qa_back_to_list' => 'Назад да спісу',
	'qa_delete' => 'Выдаліць',
	'qa_category' => 'Катэгорыя',
	'qa_categories' => 'Катэгорыі',
	'qa_sample_category' => 'Прыклад катэгорыі',
	'qa_questions' => 'Пытанні',
	'qa_question' => 'Пытанне',
	'qa_answer' => 'Адказ',
	'qa_sample_question' => 'Прыклад пытання',
	'qa_sample_answer' => 'Прыклад адказу',
	'qa_title' => 'Загаловак',
	'qa_roles' => 'Ролі',
	'qa_role' => 'Роля',
	'qa_users' => 'Карыстальнікі',
	'qa_user' => 'Карыстальнік',
	'qa_name' => 'Імя',
	'qa_email' => 'Імэйл',
	'qa_password' => 'Пароль',
	'qa_price' => 'Кошт',
	'qa_email_greet' => 'Вітаем',
	'qa_register' => 'Рэгістраваць',
	'qa_registration' => 'Рэгістрацыя',
	'qa_view' => 'Прагляд',
	'qa_update' => 'Абнавіць',
	'qa_no_entries_in_table' => 'Няма запісаў у табліцы',
	'qa_dashboard' => 'Панель',
	'qa_delete_selected' => 'Выдаліць абранае',
	'qa_user_management' => 'Кіраванне карыстальнікамі',
	'qa_address' => 'Адрэса',
	'qa_first_name' => 'Імя',
	'qa_last_name' => 'Прозвішча',
	'qa_phone' => 'Тэлефон',
	'qa_created_at' => 'Створана',
	'qa_updated_at' => 'Абноўлена',
	'qa_deleted_at' => 'Выдалена',
	'qa_please_select' => 'Калі ласка, абярыце',
	'qa_category_name' => 'Назва катэгорыі',
	'qa_product_management' => 'Кіраванне таварамі',
	'qa_products' => 'Тавары',
	'qa_product_name' => 'Назва тавара',
	'qa_content_management' => 'Кіраванне старонкамі',
	'qa_text' => 'Тэкст',
	'qa_dashboard_text' => 'Вы ўвайшлі ў сістэму!',
	'qa_forgot_password' => 'Забылі пароль?',
	'qa_remember_me' => 'Памятаць мяне',
	'qa_login' => 'Увайсці',
	'qa_change_password' => 'Змяніць пароль',
	'qa_print' => 'Раздрукаваць',
	'qa_description' => 'Апісаннне',
	'qa_phone1' => 'Тэлефон 1',
	'qa_phone2' => 'Тэлефон 2',
	'qa_photo1' => 'Фота1',
	'qa_photo2' => 'Фота2',
	'qa_photo3' => 'Фота3',
	'qa_calendar' => 'Каляндар',
	'qa_notes' => 'Зацемки',
	'qa_pages' => 'Старонки',
	'qa_show' => 'Паказаць',
	'qa_group_by' => 'Групаваць па',
	'qa_faq_management' => 'Кіраванне FAQ',
	'qa_administrator_can_create_other_users' => 'Адміністратар (можа ствараць карыстальнікаў)',
	'qa_simple_user' => 'Звычайны карыстальнік',
	'qa_remember_token' => 'Запомніць',
	'qa_permissions' => 'Дазволы',
	'qa_user_actions' => 'Дзеянні карыстальніка',
	'qa_action' => 'Дзеянне',
	'qa_time' => 'Час',
	'qa_campaign' => 'Кампанія',
	'qa_campaigns' => 'Кампаніі',
	'qa_valid_from' => 'Дата пачатку',
	'qa_valid_to' => 'Дата заканчэння',
	'qa_discount_amount' => 'Сума зніжкі',
	'qa_discount_percent' => 'Працэнт зніжкі',
	'qa_redeem_time' => 'Час выкупу',
	'qa_website' => 'Сайт',
	'qa_contact_management' => 'Кіраванне кантактамі',
	'qa_contacts' => 'Кантакты',
	'qa_company' => 'Кампанія',
	'qa_tags' => 'Цэтлікі',
	'qa_tag' => 'Цэтлік',
	'qa_statuses' => 'Статусы',
	'qa_status' => 'Статус',
	'qa_attachment' => 'Далучанае',
	'qa_assigned_to' => 'Прызначана',
	'qa_axis' => 'Вось',
	'qa_is_created' => 'створана',
	'qa_is_updated' => 'абноўлена',
	'qa_is_deleted' => 'выдалена',
	'qa_notifications' => 'Авесткі',
	'qa_notify_user' => 'Абвясціць карыстальніка',
	'qa_create_new_notification' => 'Стварыць абвестку',
	'qa_messages' => 'Паведамленні',
	'qa_you_have_no_messages' => 'Вы не маеце паведамленняў',
	'qa_all_messages' => 'Усе паведамленні',
	'qa_new_message' => 'Новае паведамленне',
	'qa_outbox' => 'Зыходныя',
	'qa_inbox' => 'Уваходныя',
	'qa_recipient' => 'Атрымальнік',
	'qa_subject' => 'Тэма',
	'qa_message' => 'Паведамленне',
	'qa_send' => 'Даслаць',
	'qa_reply' => 'Адказаць',
	'qa_calendar_sources' => 'Крыніцы каляндара',
	'qa_country' => 'Краіна',
	'qa_client_status' => 'Статус кліента',
	'qa_clients' => 'Кліенты',
	'qa_currencies' => 'Валюты',
	'qa_main_currency' => 'Галоўная валюта',
	'qa_documents' => 'Дакументы',
	'qa_file' => 'Файл',
	'qa_client' => 'Кліент',
	'qa_start_date' => 'Дата пачатку',
	'qa_currency' => 'Валюта',
	'qa_current_password' => 'Бягучы пароль',
	'qa_new_password' => 'Новы пароль',
	'qa_password_confirm' => 'Падцверджанне пароля',
	'qa_copy' => 'Капіяваць',
	'qa_colvis' => 'Бачнасць калонак',
	'qa_reset_password' => 'Скінуць пароль',
	'qa_email_regards' => 'З павагаю',
	'qa_confirm_password' => 'Падцвердзіце пароль',
	'qa_custom_controller_index' => 'Карыстацкі індэкс кантролера.',
	'qa_action_model' => 'Мадэль дзеяння',
	'qa_action_id' => 'Id дзеяння',
	'qa_coupons_amount' => 'Сума купонаў',
	'qa_coupons' => 'Купоны',
	'qa_code' => 'Код',
	'qa_coupon_management' => 'Кіраванне куупонамі',
	'qa_time_management' => 'Кіраванне часам',
	'qa_projects' => 'Праекты',
	'qa_reports' => 'Справаздачы',
	'qa_companies' => 'Кампаніі',
	'qa_company_name' => 'Назва кампаніі',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Фота (макс 8мб)',
	'qa_task_management' => 'Кіраванне задачамі',
	'qa_tasks' => 'Задачы',
	'qa_due_date' => 'Тэрмін',
	'qa_slug' => 'Псеўданім',
	'qa_excerpt' => 'Вытрымка',
	'qa_featured_image' => 'Спадарожны малюнак',
	'qa_chart_type' => 'Тып дыяграмы',
	'qa_select_users_placeholder' => 'Калі ласка, абярыце аднаго карыстальніка',
	'qa_csv' => 'CSV',
	'qa_excel' => 'Excel',
	'qa_pdf' => 'PDF',
	'qa_if_you_are_having_trouble' => 'Калі ў вас узніклі праблемы, націснуўшы на',
	'qa_copy_paste_url_bellow' => 'кнопку, скапіруйце і ўстаўце URL ніжэй у ваш вэб-браўзэр:',
	'qa_not_approved_title' => 'Ваш акаўнт не падцверджаны',
	'quickadmin_title' => 'BNGRC1',
];