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
	'qa_forgot_password' => 'Забули пароль?',
	'qa_login' => 'Увійти',
	'qa_change_password' => 'Змінити пароль',
	'qa_print' => 'Друк',
	'qa_copy' => 'Скопіювати',
	'qa_pdf' => 'PDF',
	'qa_email_greet' => 'Вітаємо',
	'qa_email_regards' => 'С повагою',
	'qa_confirm_password' => 'Підтвердіть пароль',
	'qa_please_select' => 'Будь-ласка, веберіть',
	'qa_create' => 'Створити',
	'qa_save' => 'Зберегти',
	'qa_edit' => 'Редагувати',
	'qa_all' => 'Усі',
	'qa_trash' => 'Кошик',
	'qa_view' => 'Перегляд',
	'qa_update' => 'Оновити',
	'qa_list' => 'Список',
	'qa_no_entries_in_table' => 'Немає даних',
	'qa_logout' => 'Вихід',
	'qa_add_new' => 'Додати',
	'qa_are_you_sure' => 'Ви впевнені?',
	'qa_back_to_list' => 'Назад до списку',
	'qa_dashboard' => 'Панель управління',
	'qa_delete' => 'Видалити',
	'qa_delete_selected' => 'Видалити помічені',
	'qa_category' => 'Категорія',
	'qa_categories' => 'Категорії',
	'qa_sample_category' => 'Приклад категорії',
	'qa_questions' => 'Запитання',
	'qa_question' => 'Запитання',
	'qa_answer' => 'Відповідь',
	'qa_sample_question' => 'Приклад запитання',
	'qa_sample_answer' => 'Приклад відповіді',
	'qa_faq_management' => 'Менеджер FAQ',
	'qa_users' => 'Користувачі',
	'qa_user' => 'Користувач',
	'qa_name' => 'Ім\'я',
	'qa_email' => 'Email',
	'qa_password' => 'Пароль',
	'qa_remember_token' => 'Запамятати токен',
	'qa_permissions' => 'Дозволи',
	'qa_action' => 'Дії',
	'qa_time' => 'Час',
	'qa_coupons' => 'Купони',
	'qa_code' => 'Код',
	'qa_client' => 'Клі',
	'qa_start_date' => 'Дата початку',
	'qa_budget' => 'Бюджет',
	'qa_project_status' => 'Статус проекта',
	'qa_project_statuses' => 'Статуси проектів',
	'qa_transactions' => 'Транзакції',
	'qa_transaction_types' => 'Тип транзакцій',
	'qa_transaction_type' => 'Тип транзакції',
	'qa_transaction_date' => 'Дата транзакції',
	'qa_currency' => 'Валюта',
	'qa_current_password' => 'Діючий пароль',
	'qa_new_password' => 'Новий пароль',
	'qa_password_confirm' => 'Новий пароль підтвердження',
	'qa_dashboard_text' => 'Ви ввійшли в систему!',
	'qa_remember_me' => 'Запам\'ятати мене',
	'qa_csv' => 'CSV',
	'qa_excel' => 'Excel',
	'qa_colvis' => 'Видимість колонок',
	'qa_reset_password' => 'Відновити пароль',
	'qa_if_you_are_having_trouble' => 'Якщо виникли труднощі, натисніть',
	'qa_copy_paste_url_bellow' => 'кнопку, скопіюйте посилання та вставте в адресний рядок браузера',
	'qa_register' => 'Реєстрація',
	'qa_registration' => 'Реєстрація',
	'qa_not_approved_title' => 'Ви не затверджені',
	'qa_not_approved_p' => 'Ваш обліковий запис все ще не схвалений адміністратором. Будь ласка, будьте терплячі та спробуйте зайти пізніше.',
	'qa_restore' => 'Відновити',
	'qa_permadel' => 'Видалити назавжди',
	'qa_administrator_can_create_other_users' => 'Адмін (може створювати користувачів)',
	'qa_simple_user' => 'Користувач',
	'qa_user_management' => 'Менеджер користувачів',
	'qa_projects' => 'Проекти',
	'qa_reports' => 'Звіти',
	'qa_project' => 'Проект',
	'qa_end_time' => 'Час закінчення',
	'qa_amount' => 'Ціна',
	'qa_monthly_report' => 'Місячний звіт',
	'qa_companies' => 'Компанії',
	'qa_company_name' => 'Назва компанії',
	'qa_address' => 'Адреса',
	'qa_website' => 'Веб-сайт',
	'qa_company' => 'Компанія',
	'qa_first_name' => 'Ім\'я',
	'qa_last_name' => 'Прізвище',
	'qa_phone' => 'Телефон',
	'qa_phone1' => 'Телефон 1',
	'qa_phone2' => 'Телефон 2',
	'qa_skype' => 'Скайп',
	'qa_photo' => 'Фото (макс. 8мб)',
	'qa_category_name' => 'Назва категорії',
	'qa_products' => 'Товари',
	'qa_product_name' => 'Назва товару',
	'qa_price' => 'Ціна',
	'qa_tags' => 'Теги',
	'qa_tag' => 'Тег',
	'qa_photo1' => 'Фото 1',
	'qa_photo2' => 'Фото 2',
	'qa_photo3' => 'Фото 3',
	'qa_calendar' => 'Календар',
	'qa_statuses' => 'Стутус',
	'qa_task_management' => 'Менеджер завдань',
	'qa_tasks' => 'Завдання',
	'qa_status' => 'Статус',
	'qa_attachment' => 'Вкладення',
	'qa_text' => 'Текст',
	'qa_pages' => 'Сторінки',
	'qa_create_new_report' => 'Створити новий звіт',
	'qa_created_at' => 'Створено',
	'qa_updated_at' => 'Оновлено',
	'qa_deleted_at' => 'Видалено',
	'qa_upgrade_to_premium' => 'Оновити до Преміум',
	'qa_messages' => 'Повідомлення',
	'qa_you_have_no_messages' => 'У Вас немає повідомлень.',
	'qa_all_messages' => 'Всі повідомлення',
	'qa_new_message' => 'Нове повідомлення',
	'qa_outbox' => 'Відправлені',
	'qa_inbox' => 'Отримані',
	'qa_recipient' => 'Одержувач',
	'qa_subject' => 'Тема',
	'qa_message' => 'Повідомлення',
	'qa_send' => 'Відправити',
	'qa_reply' => 'Відповідь',
	'qa_client_management' => 'Управління клієнтами',
	'qa_client_management_settings' => 'Налаштування клієнта',
	'qa_country' => 'Країна',
	'qa_client_status' => 'Статус клієнта',
	'qa_clients' => 'Клієнти',
	'qa_client_statuses' => 'Статуси клієнтів',
	'qa_currencies' => 'Валюти',
	'qa_main_currency' => 'Основна валюта',
	'qa_documents' => 'Документи',
	'qa_file' => 'Файл',
	'qa_income_source' => 'Джерело доходу',
	'qa_income_sources' => 'Джерела доходів',
	'qa_fee_percent' => 'Комісійні відсотки',
	'qa_note_text' => 'Текст примітки',
	'qa_reset_password_woops' => '<strong>Оце ти видав!</strong> Є проблеми з введенням:',
	'qa_email_line1' => 'Ви отримуєте цей електронний лист, оскільки ми отримали запит на відновлення пароля для вашого облікового запису.',
	'qa_email_line2' => 'Якщо ви не надіслали запит на відновлення пароля, подальші Ваші дії не потрібні.',
	'qa_title' => 'Назва',
	'qa_roles' => 'Ролі',
	'qa_role' => 'Роль',
	'qa_user_actions' => 'Дії користувача',
	'qa_action_model' => 'Модель / Сутність Активності',
	'qa_action_id' => 'ID Активності',
	'qa_campaign' => 'Кампанія',
	'qa_campaigns' => 'Кампанії',
	'qa_description' => 'Опис',
	'qa_valid_from' => 'Діє з',
	'qa_valid_to' => 'Діє до',
	'qa_discount_amount' => 'Сума знижки',
	'qa_discount_percent' => 'Відсоток знижки',
	'qa_coupons_amount' => 'Суми купонів',
	'qa_redeem_time' => 'Час викупу',
	'qa_coupon_management' => 'Управління купонами',
	'qa_time_management' => 'Тайм менеджмент',
	'qa_time_entries' => 'Записи часу',
	'qa_work_type' => 'Тип роботи',
	'qa_work_types' => 'Види робіт',
	'qa_start_time' => 'Час початку',
	'qa_expense_category' => 'Категорія витрат',
	'qa_expense_categories' => 'Категорії витрат',
	'qa_expense_management' => 'Управління витратами',
	'qa_expenses' => 'Витрати',
	'qa_expense' => 'Витрата',
	'qa_entry_date' => 'Дата вводу',
	'qa_income_categories' => 'Категорії доходів',
	'qa_contact_management' => 'Управління контактами',
	'qa_contacts' => 'Контакты',
	'qa_product_management' => 'Управління товарами',
	'qa_due_date' => 'Термін сплати',
	'qa_assigned_to' => 'Присвоєно',
	'qa_assets' => 'Активи',
	'qa_asset' => 'Актив',
	'qa_serial_number' => 'Серійний номер',
	'qa_location' => 'Місцезнаходження',
	'qa_locations' => 'Місцезнаходження',
	'qa_assigned_user' => 'Призначено (користувач)',
	'qa_notes' => 'Примітки',
	'qa_assets_history' => 'Історія активів',
	'qa_assets_management' => 'Управління активами',
	'qa_slug' => 'URL (ЧПУ)',
	'qa_content_management' => 'Управління контентом',
	'qa_excerpt' => 'Експерт',
	'qa_featured_image' => 'Популярні зображення',
	'qa_axis' => 'Вісь',
	'qa_show' => 'Показати',
	'qa_group_by' => 'Групувати за',
	'qa_chart_type' => 'Тип діаграми',
	'qa_no_reports_yet' => 'Поки немає жодного звіту',
	'qa_integer_float_placeholder' => 'Будь ласка виберіть одне з числових полів',
	'qa_change_notifications_field_1_label' => 'Надсилати електронне сповіщення Користувачеві',
	'qa_change_notifications_field_2_label' => 'При вступі на CRUD',
	'qa_select_users_placeholder' => 'Будь ласка, виберіть одного з ваших користувачів',
	'qa_is_created' => 'створено',
	'qa_is_updated' => 'оновлено',
	'qa_is_deleted' => 'видалено',
	'qa_notifications' => 'Сповіщення',
	'qa_notify_user' => 'Сповістити користувача',
	'qa_when_crud' => 'Коли CRUD',
	'qa_create_new_notification' => 'Створити нове сповіщення',
	'qa_stripe_transactions' => 'Stripe Транзакції',
	'qa_calendar_sources' => 'Джерела календаря',
	'qa_new_calendar_source' => 'Створення нового джерела для календаря',
	'qa_crud_title' => 'Назва CRUD',
	'qa_crud_date_field' => 'Поле з типом \"дата\" CRUD',
	'qa_prefix' => 'Префікс',
	'qa_label_field' => 'Мітка поля',
	'qa_suffix' => 'Суфікс',
	'qa_no_calendar_sources' => 'Ще немає інформації для календаря.',
	'qa_crud_event_field' => 'Мітка поля події',
	'qa_create_new_calendar_source' => 'Створити нове джерело календаря',
	'qa_edit_calendar_source' => 'Редагувати джерело календаря',
	'qa_custom_controller_index' => 'Індивідуальний  контролер.',
	'qa_reports_x_axis_field' => 'Ось-Х - будь-ласка виберіть одне з полів дати/часу',
	'qa_reports_y_axis_field' => 'Ось-Y - будь-ласка виберіть одне з полів дати/часу',
	'qa_select_crud_placeholder' => 'Будь-ласка, виберіть один зі своїх CRUD',
	'qa_select_dt_placeholder' => 'Будь-ласка, виберіть одне з полів дати/часу',
	'qa_aggregate_function_use' => 'Яку агрегатну функцію використовувати?',
	'qa_x_axis_group_by' => 'Ось-Х групувати по',
	'qa_x_axis_field' => 'Поле Осі-Х (дата/час)',
	'qa_y_axis_field' => 'Поле осі-Y',
	'quickadmin_title' => 'BNGRC1',
];