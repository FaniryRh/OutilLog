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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Hora',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
		'assets-history' => [		'title' => 'Historiques',		'created_at' => 'Hora',		'fields' => [		],	],
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
		'assets-history' => [		'title' => 'Historique',		'created_at' => 'Hora',		'fields' => [			'asset' => 'Matériel',			'status' => 'Statut',			'location' => 'Location',			'assigned-user' => 'Responsable',		],	],
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
	'qa_create' => 'Crear',
	'qa_save' => 'Guardar',
	'qa_edit' => 'Editar',
	'qa_view' => 'Ver',
	'qa_update' => 'Actualizar',
	'qa_list' => 'Listar',
	'qa_no_entries_in_table' => 'Sin valores en la tabla',
	'qa_custom_controller_index' => 'Índice del controlador personalizado (index).',
	'qa_logout' => 'Salir',
	'qa_add_new' => 'Agregar',
	'qa_are_you_sure' => 'Estás seguro?',
	'qa_back_to_list' => 'Regresar a la lista?',
	'qa_dashboard' => 'Tablero de control',
	'qa_delete' => 'Eliminar',
	'qa_restore' => 'Restaurar',
	'qa_permadel' => 'Borrar permanentemente',
	'qa_all' => 'Todos',
	'qa_trash' => 'Papelera',
	'qa_delete_selected' => 'Eliminar seleccionado',
	'qa_category' => 'Categoría',
	'qa_categories' => 'Categorias',
	'qa_title' => 'Título',
	'qa_roles' => 'Roles',
	'qa_role' => 'Rol',
	'qa_user_management' => 'Administración de usuarios',
	'qa_users' => 'Usuarios',
	'qa_user' => 'Usuario',
	'qa_name' => 'Nombre',
	'qa_email' => 'Correo',
	'qa_password' => 'Contraseña',
	'qa_remember_token' => 'Recordar token',
	'qa_permissions' => 'Permisos',
	'qa_client' => 'Client',
	'qa_current_password' => 'Contraseña actual',
	'qa_new_password' => 'Contraseña nueva',
	'qa_password_confirm' => 'Confirmación de contraseña nueva',
	'qa_dashboard_text' => 'Ha iniciado sesión',
	'qa_forgot_password' => 'Olvidó su contraseña?',
	'qa_remember_me' => 'Recuerdame',
	'qa_login' => 'Iniciar sesión',
	'qa_copy' => 'Copier',
	'qa_reset_password' => 'Reiniciar contraseña',
	'qa_email_greet' => 'Hola',
	'qa_confirm_password' => 'Confirmer le mot de passe',
	'qa_please_select' => 'Por favor seleccione',
	'qa_questions' => 'Preguntas',
	'qa_question' => 'Pregunta',
	'qa_answer' => 'Respuesta',
	'qa_project' => 'Proyecto',
	'qa_expenses' => 'Gastos',
	'qa_expense' => 'Gasto',
	'qa_amount' => 'Cantidad',
	'qa_address' => 'Dirección',
	'qa_contacts' => 'Contactos',
	'qa_first_name' => 'Nombre',
	'qa_last_name' => 'Apellido',
	'qa_phone' => 'Teléfono',
	'qa_category_name' => 'Nombre de categoría',
	'qa_products' => 'Productos',
	'qa_product_name' => 'Nombre de producto',
	'qa_price' => 'Precio',
	'qa_tag' => 'Etiqueta',
	'qa_photo1' => 'Foto 1',
	'qa_photo2' => 'Foto 2',
	'qa_photo3' => 'Foto 3',
	'qa_calendar' => 'Calendario',
	'qa_tasks' => 'Tareas',
	'qa_status' => 'Estado',
	'qa_messages' => 'Mensajes',
	'qa_you_have_no_messages' => 'No tienes mensajes.',
	'qa_all_messages' => 'Todos los mensajes',
	'qa_new_message' => 'Nouveau message',
	'qa_change_password' => 'Cambiar contraseña',
	'qa_csv' => 'CSV',
	'qa_print' => 'Imprimer',
	'qa_excel' => 'Excel',
	'qa_colvis' => 'Visibilidad de columnas',
	'qa_pdf' => 'PDF',
	'qa_register' => 'Enregistrer',
	'qa_registration' => 'Enregistrement',
	'qa_not_approved_p' => 'La cuenta no ha sido aprovada por el Administrador. Por favor, sea paciente e intentelo nuevamente.',
	'qa_whoops' => 'Whoops!',
	'qa_serial_number' => 'Número de serie',
	'qa_text' => 'Texto',
	'qa_show' => 'Mostrar',
	'qa_sample_category' => 'Ejemplo Categoria',
	'qa_sample_question' => 'FAQ (Preguntas y Respuestas)',
	'qa_sample_answer' => 'Respuesta Simple',
	'qa_user_actions' => 'Acciones de Usuario (Traza)',
	'qa_action' => 'Acciones',
	'qa_description' => 'Descripcion',
	'qa_valid_from' => 'Valido Desde',
	'qa_valid_to' => 'Valido Hasta',
	'qa_discount_amount' => 'Cantidad Descuento',
	'qa_discount_percent' => 'Descuento Percentil',
	'qa_coupons_amount' => 'Cantidad de Cupones',
	'qa_coupons' => 'Cupones',
	'qa_code' => 'Codigo',
	'qa_redeem_time' => 'Tiempo Redencion',
	'qa_coupon_management' => 'Administracion de Cupones',
	'qa_time_management' => 'Administracion de Tiempo',
	'qa_projects' => 'Proyectos',
	'qa_reports' => 'Reportes',
	'qa_time_entries' => 'Registros de Tiempos',
	'qa_work_type' => 'Tipo de Trabajo',
	'qa_start_time' => 'Tiempo de Inicio',
	'qa_end_time' => 'Tiempo Finalizacion',
	'qa_expense_category' => 'Tipo de Gasto',
	'qa_expense_management' => 'Administracion de Gastos',
	'qa_entry_date' => 'Fecha de Ingreso',
	'qa_monthly_report' => 'Reporte Mensual',
	'qa_companies' => 'Compañias',
	'qa_company_name' => 'Nombre de la Compañia',
	'qa_website' => 'Sitio Web',
	'qa_contact_management' => 'Contactos Administracion',
	'qa_company' => 'Compañia',
	'qa_photo' => 'Foto(max 8mb)',
	'qa_product_management' => 'Administracion de Producto',
	'qa_tags' => 'Etiquetas',
	'qa_statuses' => 'Estatus',
	'qa_task_management' => 'Administracion de Tareas',
	'qa_attachment' => 'Archivo Adjunto',
	'qa_due_date' => 'Fecha Vencimiento',
	'qa_assigned_to' => 'Asignado A',
	'qa_assets' => 'Activos',
	'qa_asset' => 'Activo',
	'qa_location' => 'Ubicacion',
	'qa_locations' => 'Lugar',
	'qa_assigned_user' => 'Asignado(Usuario)',
	'qa_notes' => 'Notas',
	'qa_assets_history' => 'Movimientos de Inventario',
	'qa_assets_management' => 'Inventario Administracion',
	'qa_group_by' => 'Agrupar por',
	'qa_chart_type' => 'Tipo de Grafica',
	'qa_create_new_report' => 'Crear Nuevo Reporte',
	'qa_no_reports_yet' => 'Aun Sin reportes',
	'qa_created_at' => 'Creado el',
	'qa_updated_at' => 'Actualizado el',
	'qa_deleted_at' => 'Eliminado el',
	'qa_outbox' => 'Envoyés',
	'qa_inbox' => 'Réception',
	'qa_recipient' => 'Destinataire',
	'qa_subject' => 'Objet',
	'qa_message' => 'Message',
	'qa_send' => 'Envoyer',
	'qa_reply' => 'Répondre',
	'qa_country' => 'Pays',
	'qa_file' => 'Fichier',
	'qa_income_source' => 'Fuente de Ingresos',
	'qa_income_sources' => 'Fuente de Egresos',
	'qa_budget' => 'Presupuesto',
	'qa_currency' => 'Divisa',
	'qa_email_regards' => 'Saludos',
	'qa_import_data' => 'Importer des données',
	'qa_faq_management' => 'Administración de Preguntas Frecuentes',
	'qa_administrator_can_create_other_users' => 'Administrador (puede crear otros usuarios)',
	'qa_simple_user' => 'Usuario Simple',
	'qa_action_model' => 'Modelo de Acción',
	'qa_action_id' => 'ID de Acción',
	'qa_time' => 'Hora',
	'qa_campaign' => 'Campaña',
	'qa_campaigns' => 'Campañas',
	'qa_work_types' => 'Tipos de Trabajo',
	'qa_expense_categories' => 'Tipos de Gasto',
	'qa_income_categories' => 'Tipo de Ingreso',
	'qa_phone1' => 'Teléfono 1',
	'qa_phone2' => 'Teléfono 2',
	'qa_content_management' => 'Administración de Contenido',
	'qa_excerpt' => 'Extracto',
	'qa_featured_image' => 'Imagen Destacada',
	'qa_pages' => 'Paginas',
	'qa_axis' => 'Eje',
	'qa_reports_x_axis_field' => 'eje-x por favor escoja uno de los campos de fecha/hora',
	'qa_reports_y_axis_field' => 'eje-y por favor escoja uno de los campos numéricos',
	'qa_select_crud_placeholder' => 'Por favor seleccione uno de sus CRUDs',
	'qa_select_dt_placeholder' => 'Por favor seleccione uno de los campos de fecha/hora',
	'qa_aggregate_function_use' => 'Agregue función a utilizar',
	'qa_x_axis_group_by' => 'eje-x agrupar por',
	'qa_x_axis_field' => 'eje-x campo (fecha/hora)',
	'qa_y_axis_field' => 'eje-y campo',
	'qa_integer_float_placeholder' => 'Por favor seleccione uno de los campos entero/flotante',
	'qa_change_notifications_field_1_label' => 'Enviar notificación al usuario por email',
	'qa_change_notifications_field_2_label' => 'Cuando se ingrese en CRUD',
	'qa_select_users_placeholder' => 'Por favor seleccione uno de sus Usuarios',
	'qa_is_created' => 'es creado',
	'qa_is_updated' => 'es actualizado',
	'qa_is_deleted' => 'es borrado',
	'qa_notifications' => 'Notificaciones',
	'qa_notify_user' => 'Notificar Usuario',
	'qa_when_crud' => 'Cuando CRUD',
	'qa_create_new_notification' => 'crear nueva Notificacion',
	'qa_upgrade_to_premium' => 'Actualizar a Premium',
	'qa_calendar_sources' => 'Fuentes de Calendario',
	'qa_new_calendar_source' => 'Crear una nueva fuente de calendario',
	'qa_crud_title' => 'Titre CRUD',
	'qa_crud_date_field' => 'Champ date CRUD',
	'qa_prefix' => 'Prefixe',
	'qa_label_field' => 'Description du champ',
	'qa_suffix' => 'Suffixe',
	'qa_no_calendar_sources' => 'Sin fuentes de calendario aun.',
	'qa_crud_event_field' => 'Etiqueta de campo de evento',
	'qa_create_new_calendar_source' => 'Crear nueva fuente de Calendario',
	'qa_edit_calendar_source' => 'Editar fuente de Calendario',
	'qa_client_management' => 'Administración de clientes',
	'qa_client_management_settings' => 'Configuración de administración de clientes',
	'qa_client_status' => 'Estado del Cliente',
	'qa_clients' => 'Clients',
	'qa_client_statuses' => 'Estados del Cliente',
	'qa_currencies' => 'Monnaies',
	'qa_main_currency' => 'Monnaie principale',
	'qa_documents' => 'Documents',
	'qa_not_approved_title' => 'No estas aprovado',
	'qa_there_were_problems_with_input' => 'Hubo problemas con esta entrada',
	'qa_csvImport' => 'Importation CSV',
	'qa_csv_file_to_import' => 'Fichier CSV à importer',
	'qa_parse_csv' => 'Analyser CSV',
	'qa_imported_rows_to_table' => 'Importation des colonnes :rows vers la table :table',
	'qa_if_you_are_having_trouble' => 'Si estás teniendo problemas dale click a ',
	'qa_skype' => 'Skype',
	'qa_start_date' => 'Fecha inicio',
	'qa_project_status' => 'Estado del proyecto',
	'qa_transactions' => 'Operaciones',
	'qa_fee_percent' => 'Porcentaje de tarifa',
	'qa_note_text' => 'Nota de texto',
	'qa_project_statuses' => 'Estados del proyecto',
	'qa_transaction_types' => 'Tipos de operación',
	'qa_transaction_type' => 'Tipo de operación',
	'qa_transaction_date' => 'Fecha de operación',
	'qa_reset_password_woops' => '<strong>¡Ups!</strong> Hubo problemas con la entrada:',
	'qa_copy_paste_url_bellow' => 'botón, copiar y pegar la siguiente URL en tu navegador',
	'qa_file_contains_header_row' => '¿El fichero contiene fila de encabezado?',
	'qa_stripe_transactions' => 'Transacciones con Stripe',
	'quickadmin_title' => 'BNGRC1',
];