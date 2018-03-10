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
	'qa_create' => 'Создать',
	'qa_save' => 'Сохранить',
	'qa_edit' => 'Редактировать',
	'qa_restore' => 'Восстановить',
	'qa_permadel' => 'Удалить безвозвратно',
	'qa_all' => 'Все',
	'qa_trash' => 'Удаленные',
	'qa_view' => 'Просмотр',
	'qa_update' => 'Обновить',
	'qa_list' => 'Список',
	'qa_no_entries_in_table' => 'Нет данных в таблице',
	'qa_logout' => 'Выйти',
	'qa_add_new' => 'Добавить новый',
	'qa_are_you_sure' => 'Вы уверенны?',
	'qa_back_to_list' => 'Вернутся к списку',
	'qa_dashboard' => 'Панель управления',
	'qa_delete' => 'Удалить',
	'qa_delete_selected' => 'Удалить выбранные',
	'qa_category' => 'Категория',
	'qa_categories' => 'Категории',
	'qa_sample_category' => 'Пример категории',
	'qa_questions' => 'Вопросы',
	'qa_question' => 'Вопрос',
	'qa_answer' => 'Ответ',
	'qa_sample_question' => 'Пример вопроса',
	'qa_sample_answer' => 'Пример ответа',
	'qa_faq_management' => 'Управление ЧАВО',
	'qa_administrator_can_create_other_users' => 'Администратор (может создавать других пользователей)',
	'qa_simple_user' => 'Обычный пользователь',
	'qa_title' => 'Заголовок',
	'qa_roles' => 'Роли',
	'qa_role' => 'Роль',
	'qa_user_management' => 'Управление пользователями',
	'qa_users' => 'Пользователи',
	'qa_user' => 'Пользователь',
	'qa_name' => 'Имя',
	'qa_email' => 'Электронная почта',
	'qa_password' => 'Пароль',
	'qa_remember_token' => 'Remember token',
	'qa_permissions' => 'Доступы',
	'qa_user_actions' => 'Активности пользователя',
	'qa_action' => 'Активности',
	'qa_action_model' => 'Модель/Сущность Активности',
	'qa_action_id' => 'ID Активности',
	'qa_time' => 'Время',
	'qa_campaign' => 'Кампания',
	'qa_campaigns' => 'Кампании',
	'qa_description' => 'Описание',
	'qa_valid_from' => 'Valid from',
	'qa_valid_to' => 'Valid to',
	'qa_discount_amount' => 'Сумма скидки',
	'qa_discount_percent' => 'Процент скидки',
	'qa_coupons_amount' => 'Сумма купонов',
	'qa_coupons' => 'Купоны',
	'qa_code' => 'Код',
	'qa_redeem_time' => 'Время выкупа',
	'qa_coupon_management' => 'Управление купонами',
	'qa_time_management' => 'Тайм менеджмент',
	'qa_projects' => 'Проекты',
	'qa_reports' => 'Отчеты',
	'qa_time_entries' => 'Записи времени',
	'qa_work_type' => 'Тип работы',
	'qa_work_types' => 'Тип работ',
	'qa_project' => 'Проект',
	'qa_start_time' => 'Время начала',
	'qa_end_time' => 'Время окончания',
	'qa_expense_category' => 'Категория расходов',
	'qa_expense_categories' => 'Категории расходов',
	'qa_expense_management' => 'Управление расходами',
	'qa_expenses' => 'Расходы',
	'qa_expense' => 'Расход',
	'qa_entry_date' => 'Дата ввода',
	'qa_amount' => 'Количество',
	'qa_income_categories' => 'Категории доходов',
	'qa_monthly_report' => 'Месячный отчет',
	'qa_companies' => 'Компании',
	'qa_company_name' => 'Имя компании',
	'qa_address' => 'Адресс',
	'qa_website' => 'Веб сайт',
	'qa_contact_management' => 'Управление контактами',
	'qa_contacts' => 'Контакты',
	'qa_company' => 'Компания',
	'qa_first_name' => 'Имя',
	'qa_last_name' => 'Фамилия',
	'qa_phone' => 'Телефон',
	'qa_phone1' => 'Телефон 1',
	'qa_phone2' => 'Телефон 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Фото (макс. 8 Мб)',
	'qa_category_name' => 'Имя категории',
	'qa_product_management' => 'Управление продуктами',
	'qa_products' => 'Продукты',
	'qa_product_name' => 'Имя продукта',
	'qa_price' => 'Цена',
	'qa_tags' => 'Тэги',
	'qa_tag' => 'Тэг',
	'qa_photo1' => 'Фото1',
	'qa_photo2' => 'Фото2',
	'qa_photo3' => 'Фото3',
	'qa_calendar' => 'Календарь',
	'qa_statuses' => 'Статусы',
	'qa_task_management' => 'Управление задачами',
	'qa_tasks' => 'Задачи',
	'qa_status' => 'Статус',
	'qa_attachment' => 'Вложение',
	'qa_due_date' => 'Срок',
	'qa_assigned_to' => 'Принадлежит к',
	'qa_assets' => 'Активы',
	'qa_asset' => 'Актив',
	'qa_serial_number' => 'Серийный номер',
	'qa_location' => 'Местонахождение',
	'qa_locations' => 'Местонахождения',
	'qa_assigned_user' => 'Принадлежность пользователю',
	'qa_notes' => 'Записки',
	'qa_assets_history' => 'История активов',
	'qa_assets_management' => 'Управление активами',
	'qa_slug' => 'Slug (ЧПУ)',
	'qa_content_management' => 'Управление контентом',
	'qa_text' => 'Текст',
	'qa_excerpt' => 'Эксперт',
	'qa_featured_image' => 'Популярные изображения',
	'qa_pages' => 'Страницы',
	'qa_axis' => 'Оси',
	'qa_show' => 'Показать',
	'qa_group_by' => 'Сортировать по',
	'qa_chart_type' => 'Тип диаграммы',
	'qa_create_new_report' => 'Создать новый отчет',
	'qa_no_reports_yet' => 'Пока нет ни одного отчета',
	'qa_created_at' => 'Время создания',
	'qa_updated_at' => 'Время последнего обновления',
	'qa_deleted_at' => 'Время удаления',
	'qa_reports_x_axis_field' => 'Ось-Х - пожалуйста выберете одно из полей даты/времени',
	'qa_reports_y_axis_field' => 'Ось-У - пожалуйста выберете одно из полей даты/времени',
	'qa_select_crud_placeholder' => 'Пожалуйста, выберете один из своих CRUD',
	'qa_select_dt_placeholder' => 'Пожалуйста, выберете одно из полей даты/времени',
	'qa_aggregate_function_use' => 'Какую агрегатную функцию использовать?',
	'qa_x_axis_group_by' => 'Ось-Х группировать по',
	'qa_x_axis_field' => 'Поле Оси Х (дата/время)',
	'qa_y_axis_field' => 'Поле оси У',
	'qa_integer_float_placeholder' => 'Пожалуйста выберете одно из числовых полей',
	'qa_change_notifications_field_1_label' => 'Отправить уведомление пользователю по электронной почте',
	'qa_select_users_placeholder' => 'Пожалуйста выберете одного из своих пользователей',
	'qa_is_created' => 'создано',
	'qa_is_updated' => 'обновлено',
	'qa_is_deleted' => 'удалено',
	'qa_notifications' => 'Уведомления',
	'qa_notify_user' => 'Уведомить Пользователя',
	'qa_create_new_notification' => 'Создать новое уведомление',
	'qa_stripe_transactions' => 'Stripe Транзакции',
	'qa_upgrade_to_premium' => 'Обновить пакет услуг до Премиум',
	'qa_messages' => 'Сообщения',
	'qa_you_have_no_messages' => 'У вас нет сообщений',
	'qa_all_messages' => 'Все сообщения',
	'qa_new_message' => 'Новое сообщение',
	'qa_outbox' => 'Отправленные',
	'qa_inbox' => 'Входящие',
	'qa_recipient' => 'Получатель',
	'qa_subject' => 'Тема сообщения',
	'qa_message' => 'Сообщение',
	'qa_send' => 'Отправить',
	'qa_reply' => 'Ответить',
	'qa_crud_title' => 'Заголовок CRUD',
	'qa_crud_date_field' => 'Поле с типом \"дата\" выбранного CRUD',
	'qa_prefix' => 'Префикс',
	'qa_suffix' => 'Суффикс',
	'qa_client_management' => 'Управление клиентами',
	'qa_client_management_settings' => 'Управление клиентами,  настройки',
	'qa_country' => 'Страна',
	'qa_client_status' => 'Статус клиента',
	'qa_clients' => 'Клиенты',
	'qa_client_statuses' => 'Клиентские статусы',
	'qa_currencies' => 'Валюты',
	'qa_main_currency' => 'Основная валюта',
	'qa_documents' => 'Документы',
	'qa_file' => 'Файл',
	'qa_income_source' => 'Источник дохода',
	'qa_income_sources' => 'Источники дохода',
	'qa_fee_percent' => 'Коэффициент вознаграждения',
	'qa_note_text' => 'Текст примечания',
	'qa_client' => 'Клиент',
	'qa_start_date' => 'Дата начала',
	'qa_budget' => 'Бюджет',
	'qa_project_status' => 'Статус проекта',
	'qa_project_statuses' => 'Статусы проекта',
	'qa_transactions' => 'Транзакции',
	'qa_transaction_types' => 'Типа транзакций',
	'qa_transaction_type' => 'Тип транзакции',
	'qa_transaction_date' => 'Дата транзакции',
	'qa_currency' => 'Валюта',
	'qa_current_password' => 'Текущий пароль',
	'qa_new_password' => 'Новый пароль',
	'qa_password_confirm' => 'Новый пароль еще раз',
	'qa_dashboard_text' => 'Вы вошли в систему !',
	'qa_forgot_password' => 'Забыли пароль?',
	'qa_remember_me' => 'Запомнить меня',
	'qa_login' => 'Войти',
	'qa_change_password' => 'Сменить пароль',
	'qa_csv' => 'CSV',
	'qa_print' => 'Печать',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Скопировать',
	'qa_colvis' => 'Видимость колонок',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'Сброс пароля',
	'qa_reset_password_woops' => '<strong>Ой!</strong> Возникли проблемы со следующими подробностями:',
	'qa_email_line1' => 'Вы получили это письмо так как поступила заявка на смену пароля для вашего аккаунта',
	'qa_email_line2' => 'Если вы не запрашивали смену пароля, просто проигнорируйте это письмо. Ничего делать не нужно.',
	'qa_email_greet' => 'Здравствуйте!',
	'qa_email_regards' => 'С уважением',
	'qa_confirm_password' => 'Подтвердите пароль',
	'qa_if_you_are_having_trouble' => 'Если вы испытываете трудности, нажмите',
	'qa_copy_paste_url_bellow' => 'кнопку, скопируйте ссылку и вставьте а адресную строку браузера',
	'qa_please_select' => 'Пожалуйста, сделайте выбор',
	'qa_when_crud' => 'Когда CRUD',
	'qa_calendar_sources' => 'Источники календаря',
	'qa_new_calendar_source' => 'Создать новый источник календаря',
	'qa_label_field' => 'Поле для заголовка',
	'qa_no_calendar_sources' => 'Еще нет источников календаря',
	'qa_crud_event_field' => 'Поле заголовка мероприятия',
	'qa_create_new_calendar_source' => 'Создать новый источник календаря',
	'qa_edit_calendar_source' => 'Редактировать источник календаря',
	'qa_custom_controller_index' => 'Индивидуальный контроллер',
	'qa_registration' => 'Регистрация',
	'qa_not_approved_title' => 'Вы не подтвержены',
	'qa_not_approved_p' => 'Ваш аккаунт не подтвержден администратором. Пожалуйста, попробуйте войти позже.',
	'qa_whoops' => 'Упс!',
	'qa_register' => 'Регистрация',
	'qa_file_contains_header_row' => 'Файл содержит строку с заголовками столбцов?',
	'qa_csvImport' => 'Импорт CSV',
	'qa_csv_file_to_import' => 'CSV файл для импорта',
	'qa_parse_csv' => 'Спарсить CSV',
	'qa_import_data' => 'Импорт данных',
	'quickadmin_title' => 'BNGRC1',
];