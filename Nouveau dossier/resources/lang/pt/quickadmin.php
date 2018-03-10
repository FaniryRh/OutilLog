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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Tempo',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
		'assets-history' => [		'title' => 'Historiques',		'created_at' => 'Tempo',		'fields' => [		],	],
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
		'assets-history' => [		'title' => 'Historique',		'created_at' => 'Tempo',		'fields' => [			'asset' => 'Matériel',			'status' => 'Statut',			'location' => 'Location',			'assigned-user' => 'Responsable',		],	],
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
	'qa_create' => 'Criar',
	'qa_save' => 'Salvar',
	'qa_edit' => 'Editar',
	'qa_view' => 'Visualizar',
	'qa_update' => 'Atualizar',
	'qa_list' => 'Listar',
	'qa_no_entries_in_table' => 'Sem entradas na tabela',
	'qa_custom_controller_index' => 'Índice de Controller personalizado.',
	'qa_logout' => 'Sair',
	'qa_add_new' => 'Novo',
	'qa_are_you_sure' => 'Tem certeza?',
	'qa_back_to_list' => 'Voltar',
	'qa_dashboard' => 'Painel',
	'qa_delete' => 'Excluir',
	'qa_restore' => 'Restaurar',
	'qa_permadel' => 'Excluir',
	'qa_all' => 'Todos',
	'qa_trash' => 'Lixo',
	'qa_delete_selected' => 'Excluir Selecionados',
	'qa_category' => 'Categoria',
	'qa_categories' => 'Categorias',
	'qa_sample_category' => 'Categoria Exemplo',
	'qa_questions' => 'Questões',
	'qa_question' => 'Questão',
	'qa_answer' => 'Resposta',
	'qa_administrator_can_create_other_users' => 'Administrador',
	'qa_simple_user' => 'Usuário simples',
	'qa_title' => 'Título',
	'qa_roles' => 'Funções',
	'qa_role' => 'Função',
	'qa_name' => 'Nome',
	'qa_password' => 'Senha',
	'qa_remember_token' => 'Lembrar Senha',
	'qa_permissions' => 'Permissões',
	'qa_action' => 'Ação',
	'qa_forgot_password' => 'Esqueceu sua senha?',
	'qa_remember_me' => 'Lembrar-me',
	'qa_change_password' => 'Alterar senha',
	'qa_print' => 'Imprimir',
	'qa_copy' => 'Copiar',
	'qa_colvis' => 'Colunas Visíveis',
	'qa_reset_password' => 'Redefinir senha',
	'qa_email_greet' => 'Olá',
	'qa_confirm_password' => 'Confirmação da senha',
	'qa_please_select' => 'Selecione por favor',
	'qa_sample_question' => 'Questão Exemplo',
	'qa_sample_answer' => 'Resposta Exemplo',
	'qa_faq_management' => 'Gerenciamento de FAQ',
	'qa_user_management' => 'Gerenciamento de usuários',
	'qa_users' => 'Usuários',
	'qa_user' => 'Usuário',
	'qa_email' => 'E-mail',
	'qa_user_actions' => 'Ações do usuário',
	'qa_action_model' => 'Modelo de ação',
	'qa_action_id' => 'ID de ação',
	'qa_time' => 'Tempo',
	'qa_campaign' => 'Campanha',
	'qa_campaigns' => 'Campanhas',
	'qa_description' => 'Descrição',
	'qa_valid_from' => 'Válido de',
	'qa_valid_to' => 'Válido até',
	'qa_discount_amount' => 'Quantia de desconto',
	'qa_discount_percent' => 'Percentual de desconto',
	'qa_coupons_amount' => 'Quantia de cupons',
	'qa_coupons' => 'Cupons',
	'qa_code' => 'Código',
	'qa_redeem_time' => 'Tempo de resgate',
	'qa_coupon_management' => 'Gerenciamento de cupons',
	'qa_time_management' => 'Gerenciamento de tempo',
	'qa_projects' => 'Projetos',
	'qa_reports' => 'Relatórios',
	'qa_time_entries' => 'Entradas de tempo',
	'qa_work_type' => 'Tipo de trabalho',
	'qa_work_types' => 'Tipos de trabalho',
	'qa_project' => 'Projeto',
	'qa_start_time' => 'Tempo de início',
	'qa_end_time' => 'Tempo de final',
	'qa_expense_category' => 'Categoria de Despesa',
	'qa_expense_categories' => 'Categorias de Despesa',
	'qa_expense_management' => 'Gerenciamento de Despesa',
	'qa_expenses' => 'Despesas',
	'qa_expense' => 'Despesa',
	'qa_entry_date' => 'Data de entrada',
	'qa_amount' => 'Quantidade',
	'qa_income_categories' => 'Categorias de entrada',
	'qa_monthly_report' => 'Relatório mensal',
	'qa_companies' => 'Empresas',
	'qa_company_name' => 'Nome da empresa',
	'qa_address' => 'Endereço',
	'qa_website' => 'Website',
	'qa_contact_management' => 'Gerenciamento de contato',
	'qa_contacts' => 'Contatos',
	'qa_company' => 'Empresa',
	'qa_first_name' => 'Primeiro nome',
	'qa_last_name' => 'Último nome',
	'qa_phone' => 'Telefone',
	'qa_phone1' => 'Telefone 1',
	'qa_phone2' => 'Telefone 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Foto (máx. 8 MB)',
	'qa_category_name' => 'Nome da categoria',
	'qa_product_management' => 'Gerenciamento de produtos',
	'qa_products' => 'Produtos',
	'qa_product_name' => 'Nome do produto',
	'qa_price' => 'Preço',
	'qa_tags' => 'Tags',
	'qa_tag' => 'Tag',
	'qa_photo1' => 'Foto1',
	'qa_photo2' => 'Foto2',
	'qa_photo3' => 'Foto3',
	'qa_calendar' => 'Calendário',
	'qa_statuses' => 'Status',
	'qa_task_management' => 'Gerenciamento de tarefas',
	'qa_tasks' => 'Tarefas',
	'qa_status' => 'Status',
	'qa_attachment' => 'Anexo',
	'qa_due_date' => 'Data de vencimento',
	'qa_assigned_to' => 'Atribuído',
	'qa_assets' => 'Ativos',
	'qa_asset' => 'Ativo',
	'qa_serial_number' => 'Número de série',
	'qa_location' => 'Local',
	'qa_locations' => 'Locais',
	'qa_assigned_user' => 'Atribuído (usuário)',
	'qa_notes' => 'Notas',
	'qa_assets_history' => 'Histórico de ativos',
	'qa_assets_management' => 'Gerenciamento de ativos',
	'qa_content_management' => 'Gerenciamento de conteúdo',
	'qa_text' => 'Texto',
	'qa_pages' => 'Páginas',
	'qa_axis' => 'Eixo',
	'qa_show' => 'Exibir',
	'qa_group_by' => 'Agrupar por',
	'qa_chart_type' => 'Tipo de gráfico',
	'qa_create_new_report' => 'Criar novo relatório',
	'qa_no_reports_yet' => 'Nenhum relatório ainda.',
	'qa_created_at' => 'Criado em',
	'qa_updated_at' => 'Atualizado em',
	'qa_deleted_at' => 'Excluído em',
	'qa_reports_x_axis_field' => 'Eixo X - por favor escolha um dos campos de data/hora',
	'qa_reports_y_axis_field' => 'Eixo Y - por favor escolha um dos campos numéricos',
	'qa_select_crud_placeholder' => 'Por favor selecione um de seus CRUDs',
	'qa_select_dt_placeholder' => 'Por favor selecione um dos campos de data/hora',
	'qa_aggregate_function_use' => 'Agregar função a utilizar',
	'qa_x_axis_group_by' => 'Eixo X agrupar por',
	'qa_x_axis_field' => 'Campo do eixo X (data/hora)',
	'qa_y_axis_field' => 'Campo do eixo Y',
	'qa_integer_float_placeholder' => 'Por favor selecione um dos campos inteiros/float',
	'qa_change_notifications_field_1_label' => 'Enviar notificação por e-mail ao Usuário',
	'qa_select_users_placeholder' => 'Por favor selecione um de seus Usuários',
	'qa_is_created' => 'foi criado',
	'qa_is_updated' => 'foi atualizado',
	'qa_is_deleted' => 'foi excluído',
	'qa_notifications' => 'Notificações',
	'qa_notify_user' => 'Notificar Usuário',
	'qa_when_crud' => 'Quando CRUD',
	'qa_create_new_notification' => 'Criar nova Notificação',
	'qa_stripe_transactions' => 'Transações Stripe',
	'qa_upgrade_to_premium' => 'Atualizar para Premium',
	'qa_messages' => 'Mensagens',
	'qa_you_have_no_messages' => 'Você não possui nenhuma mensagem.',
	'qa_all_messages' => 'Todas as mensagens',
	'qa_new_message' => 'Nova mensagem',
	'qa_outbox' => 'Caixa de saída',
	'qa_inbox' => 'Caixa de entrada',
	'qa_recipient' => 'Destinatário',
	'qa_subject' => 'Assunto',
	'qa_message' => 'Mensagem',
	'qa_send' => 'Enviar',
	'qa_reply' => 'Responder',
	'qa_calendar_sources' => 'Fontes de calendário',
	'qa_new_calendar_source' => 'Criar nova fonte de calendário',
	'qa_crud_title' => 'Título do CRUD',
	'qa_crud_date_field' => 'Campo de data CRUD',
	'qa_prefix' => 'Prefixo',
	'qa_label_field' => 'Campo de rótulo',
	'qa_suffix' => 'Sufixo',
	'qa_no_calendar_sources' => 'Nenhuma fonte de calendário ainda.',
	'qa_crud_event_field' => 'Campo de rótulo do evento',
	'qa_create_new_calendar_source' => 'Criar nova Fonte de Calendário',
	'qa_edit_calendar_source' => 'Editar Fonte de Calendário',
	'qa_client_management' => 'Gerenciamento de clientes',
	'qa_client_management_settings' => 'Configurações de gerenciamento de clientes',
	'qa_country' => 'País',
	'qa_client_status' => 'Status do cliente',
	'qa_clients' => 'Clientes',
	'qa_client_statuses' => 'Status do cliente',
	'qa_currencies' => 'Moedas',
	'qa_main_currency' => 'Moeda principal',
	'qa_documents' => 'Documentos',
	'qa_file' => 'Arquivo',
	'qa_income_source' => 'Fonte de entrada',
	'qa_income_sources' => 'Fontes de entrada',
	'qa_fee_percent' => 'Percentual de taxa',
	'qa_note_text' => 'Texto da nota',
	'qa_client' => 'Cliente',
	'qa_start_date' => 'Data de início',
	'qa_budget' => 'Orçamento',
	'qa_project_status' => 'Status do projeto',
	'qa_project_statuses' => 'Status do projeto',
	'qa_transactions' => 'Transações',
	'qa_transaction_types' => 'Tipos de transação',
	'qa_transaction_type' => 'Tipo de transação',
	'qa_transaction_date' => 'Data da transação',
	'qa_currency' => 'Moeda',
	'qa_current_password' => 'Senha atual',
	'qa_new_password' => 'Nova senha',
	'qa_password_confirm' => 'Confirmação da nova senha',
	'qa_dashboard_text' => 'Você entrou!',
	'qa_login' => 'Entrar',
	'qa_reset_password_woops' => '<strong> Ops! </strong> Há problemas com a entrada:',
	'qa_email_line1' => 'Você está recebendo este e-mail porque nós recebemos uma solicitação de redefinição de senha para a sua conta.',
	'qa_email_line2' => 'Se você não solicitou redefinição de senha, nenhuma ação é necessária.',
	'qa_if_you_are_having_trouble' => 'Se você está tendo problemas para clicar no',
	'qa_copy_paste_url_bellow' => 'botão, copie e cole a URL abaixo no seu navegador web:',
	'qa_excerpt' => 'Resumo',
	'qa_featured_image' => 'Imagem em destaque',
	'qa_change_notifications_field_2_label' => 'Quando entrar no CRUD',
	'qa_email_regards' => 'Saudações',
	'qa_register' => 'Registrar',
	'qa_registration' => 'Registro',
	'qa_not_approved_title' => 'Você não está aprovado',
	'qa_not_approved_p' => 'Sua conta não foi liberada ainda pelo administrador, por favor, aguarde e tente mais tarde.',
	'qa_there_were_problems_with_input' => 'Há problemas com a entrada',
	'qa_whoops' => 'Ops!',
	'qa_slug' => 'Slug',
	'qa_csv' => 'CSV',
	'qa_excel' => 'Excel',
	'qa_pdf' => 'PDF',
	'qa_file_contains_header_row' => 'O arquivo contém cabeçalho?',
	'qa_csvImport' => 'Importação CSV',
	'qa_csv_file_to_import' => 'Arquivo CSV para importar',
	'qa_parse_csv' => 'Analisar CSV',
	'qa_import_data' => 'Importar data',
	'qa_imported_rows_to_table' => 'Importado :rows linhas para tabela :table',
	'quickadmin_title' => 'BNGRC1',
];