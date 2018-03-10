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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Zaman',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
		'assets-history' => [		'title' => 'Historiques',		'created_at' => 'Zaman',		'fields' => [		],	],
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
		'assets-history' => [		'title' => 'Historique',		'created_at' => 'Zaman',		'fields' => [			'asset' => 'Matériel',			'status' => 'Statut',			'location' => 'Location',			'assigned-user' => 'Responsable',		],	],
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
	'qa_create' => 'Oluştur',
	'qa_save' => 'Kaydet',
	'qa_edit' => 'Düzenle',
	'qa_view' => 'Görüntüle',
	'qa_update' => 'Güncelle',
	'qa_list' => 'Listele',
	'qa_no_entries_in_table' => 'Tabloda kayıt bulunamadı',
	'qa_custom_controller_index' => 'Özel denetçi dizini.',
	'qa_logout' => 'Çıkış yap',
	'qa_add_new' => 'Yeni ekle',
	'qa_are_you_sure' => 'Emin misiniz?',
	'qa_back_to_list' => 'Listeye dön',
	'qa_dashboard' => 'Kontrol Paneli',
	'qa_delete' => 'Sil',
	'qa_delete_selected' => 'Seçileni Sil',
	'qa_category' => 'Kategori',
	'qa_categories' => 'Kategoriler',
	'qa_sample_category' => 'Örnek Kategori',
	'qa_questions' => 'Sorular',
	'qa_question' => 'Soru',
	'qa_answer' => 'Cevap',
	'qa_sample_question' => 'Örnek Soru',
	'qa_sample_answer' => 'Örnek Cevap',
	'qa_faq_management' => 'SSS Yönetimi',
	'qa_administrator_can_create_other_users' => 'Yönetici (diğer kullanıcıları oluşturabilir)',
	'qa_simple_user' => 'Basit Kullanıcı',
	'qa_title' => 'Başlık',
	'qa_roles' => 'Roller',
	'qa_role' => 'Rol',
	'qa_user_management' => 'Kullanıcı Yönetimi',
	'qa_users' => 'Kullanıcılar',
	'qa_user' => 'Kullanıcı',
	'qa_name' => 'Ad',
	'qa_email' => 'E-posta',
	'qa_password' => 'Şifre',
	'qa_remember_token' => 'Beni Hatırla',
	'qa_subject' => 'Konu',
	'qa_message' => 'Mesaj',
	'qa_send' => 'Gönder',
	'qa_reply' => 'Cevapla',
	'qa_calendar_sources' => 'Takvim kaynağı',
	'qa_new_calendar_source' => 'Yeni takvim kaynağı oluştur',
	'qa_crud_title' => 'Crud başlığı',
	'qa_crud_date_field' => 'Crud tarih alanı',
	'qa_prefix' => 'Önek',
	'qa_label_field' => 'Etiket alanı',
	'qa_suffix' => 'Sonek',
	'qa_no_calendar_sources' => 'Henüz takvim kaynağı oluşturulmadı',
	'qa_crud_event_field' => 'Olay etiket alanı',
	'qa_create_new_calendar_source' => 'Takvim Kaynağı Oluştur',
	'qa_edit_calendar_source' => 'Takvim Kaynağını Düzenle',
	'qa_client_management' => 'Müşteri yönetimi',
	'qa_client_management_settings' => 'Müşteri yönetim ayarları',
	'qa_country' => 'Ülke',
	'qa_client_status' => 'Müşteri Durumu',
	'qa_clients' => 'Müşteriler',
	'qa_client_statuses' => 'Müşteri durumları',
	'qa_currencies' => 'Kurlar',
	'qa_main_currency' => 'Ana kur',
	'qa_documents' => 'Döküman',
	'qa_file' => 'Dosya',
	'qa_income_source' => 'Gelir kaynağı',
	'qa_income_sources' => 'Gelir kaynakları',
	'qa_fee_percent' => 'Ücret oranı',
	'qa_note_text' => 'Not yazısı',
	'qa_client' => 'Müşteri',
	'qa_start_date' => 'Başlangıç Tarihi',
	'qa_budget' => 'Bütçe',
	'qa_project_status' => 'Proje durumu',
	'qa_project_statuses' => 'Proje durumları',
	'qa_transactions' => 'İşlemler',
	'qa_transaction_types' => 'İşlem Türleri',
	'qa_transaction_type' => 'İşlem türü',
	'qa_transaction_date' => 'İşlem tarihi',
	'qa_currency' => 'Kur',
	'qa_current_password' => 'Geçerli şifreniz',
	'qa_new_password' => 'Yeni şifre',
	'qa_password_confirm' => 'Yeni şifreyi onayla',
	'qa_dashboard_text' => 'Giriş Yaptınız!',
	'qa_forgot_password' => 'Şifrenizi mi unuttunuz?',
	'qa_remember_me' => 'Beni Hatırla',
	'qa_login' => 'Giriş',
	'qa_change_password' => 'Şifreyi değiştir',
	'qa_csv' => 'CSV',
	'qa_print' => 'Yazdır',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Kopyala',
	'qa_colvis' => 'Sütun görünürlüğü',
	'qa_pdf' => 'PDF',
	'qa_email_greet' => 'Merhaba',
	'qa_email_regards' => 'Saygılar',
	'qa_confirm_password' => 'Şifreyi onayla',
	'qa_if_you_are_having_trouble' => 'tıklamakta sorun yaşıyorsanız',
	'qa_please_select' => 'Lütfen seçiniz',
	'qa_register' => 'Kaydol',
	'qa_registration' => 'Kayıt',
	'qa_not_approved_title' => 'Onaylandmadınız',
	'qa_not_approved_p' => 'Hesabınız yönetici tarafından henüz onaylanmadı. Lütfen daha sonra tekrar deneyiniz.',
	'qa_restore' => 'Geri yükle',
	'qa_permadel' => 'Tamamen Sil',
	'qa_all' => 'Hepsi',
	'qa_trash' => 'Çöp',
	'qa_permissions' => 'İzinler',
	'qa_user_actions' => 'Kullanıcı hareketleri',
	'qa_action' => 'Hareket',
	'qa_action_model' => 'Hareket Modeli',
	'qa_action_id' => 'Hareket id',
	'qa_time' => 'Zaman',
	'qa_campaign' => 'Kampanya',
	'qa_campaigns' => 'Kampanyalar',
	'qa_description' => 'Açıklama',
	'qa_valid_from' => 'Zamanından itibaren',
	'qa_valid_to' => 'Zamanına kadar',
	'qa_discount_amount' => 'İndirim tutarı',
	'qa_discount_percent' => 'İndirim yüzdesi',
	'qa_coupons_amount' => 'Kupon tutarı',
	'qa_coupons' => 'Kuponlar',
	'qa_code' => 'Kod',
	'qa_redeem_time' => 'Ödeme zamanı',
	'qa_coupon_management' => 'Kupon yönetimi',
	'qa_time_management' => 'Tarih yönetimi',
	'qa_projects' => 'Projeler',
	'qa_reports' => 'Raporlar',
	'qa_time_entries' => 'Tarih girdileri',
	'qa_work_type' => 'Çalışma türü',
	'qa_work_types' => 'Çalışma türleri',
	'qa_project' => 'Proje',
	'qa_start_time' => 'Başlangıç zamanı',
	'qa_end_time' => 'Bitiş zamanı',
	'qa_expense_category' => 'Gider Kategorisi',
	'qa_expense_categories' => 'Gider Kategorileri',
	'qa_expense_management' => 'Gider Yönetimi',
	'qa_expenses' => 'Giderler',
	'qa_expense' => 'Gider',
	'qa_entry_date' => 'Giriş tarihi',
	'qa_amount' => 'Tutar',
	'qa_income_categories' => 'Gelir kategorileri',
	'qa_monthly_report' => 'Aylık rapor',
	'qa_companies' => 'Şirketler',
	'qa_company_name' => 'Şirket adı',
	'qa_address' => 'Adres',
	'qa_website' => 'Website',
	'qa_contact_management' => 'İletişim yönetimi',
	'qa_contacts' => 'İrtibatlar',
	'qa_company' => 'Şirket',
	'qa_first_name' => 'Ad',
	'qa_last_name' => 'Soyad',
	'qa_phone' => 'Telefon',
	'qa_phone1' => 'Telefon 1',
	'qa_phone2' => 'Telefon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Fotoğraf (max 8mb)',
	'qa_category_name' => 'Kategori adı',
	'qa_product_management' => 'Ürün yönetimi',
	'qa_products' => 'Ürünler',
	'qa_product_name' => 'Ürün adı',
	'qa_price' => 'Fiyat',
	'qa_tags' => 'Etiketler',
	'qa_tag' => 'Etiket',
	'qa_photo1' => 'Fotoğraf 1',
	'qa_photo2' => 'Fotoğraf 2',
	'qa_photo3' => 'Fotoğraf 3',
	'qa_calendar' => 'Takvim',
	'qa_statuses' => 'Durumlar',
	'qa_task_management' => 'Görev Yönetimi',
	'qa_tasks' => 'Görevler',
	'qa_status' => 'Durum',
	'qa_attachment' => 'Ek',
	'qa_due_date' => 'Vade tarihi',
	'qa_assigned_to' => 'Atanmış',
	'qa_assets' => 'Varlıklar',
	'qa_asset' => 'Varlık',
	'qa_serial_number' => 'Seri numarası',
	'qa_location' => 'Yer',
	'qa_locations' => 'Yerler',
	'qa_assigned_user' => 'Atanmış (kullanıcı)',
	'qa_notes' => 'Notlar',
	'qa_assets_history' => 'Varlık geçmişi',
	'qa_assets_management' => 'Varlık yönetimi',
	'qa_slug' => 'Kısa İsim',
	'qa_content_management' => 'İçerik Yönetimi',
	'qa_text' => 'Yazı',
	'qa_excerpt' => 'Alıntı',
	'qa_featured_image' => 'Öne çıkan fotoğraf',
	'qa_pages' => 'Sayfalar',
	'qa_axis' => 'Eksen',
	'qa_show' => 'Göster',
	'qa_group_by' => 'Grupla',
	'qa_chart_type' => 'Çizelge türü',
	'qa_create_new_report' => 'Yeni rapor oluştur',
	'qa_no_reports_yet' => 'Henüz rapor yok.',
	'qa_created_at' => 'tarihinde oluşturuldu',
	'qa_updated_at' => 'tarihinde güncellendi',
	'qa_deleted_at' => 'tarihinde silindi',
	'qa_reports_x_axis_field' => 'X-ekseni - lütfen tarih/zaman seçimi yapınız',
	'qa_reports_y_axis_field' => 'Y-ekseni - lütfen tarih/zaman seçimi yapınız',
	'qa_select_crud_placeholder' => 'Lütfen üretilecek rapor alanını seçiniz',
	'qa_select_dt_placeholder' => 'Lütfen tarih/zamandan birini seçiniz.',
	'qa_aggregate_function_use' => 'Kullanmak için fnoksiyonları toplayınız',
	'qa_x_axis_group_by' => 'X-eksenini grupla',
	'qa_x_axis_field' => 'X-eksen alanı (tarih/zaman)',
	'qa_y_axis_field' => 'Y-eksen alanı',
	'qa_integer_float_placeholder' => 'Lütfen alanlardan birini seçiniz',
	'qa_change_notifications_field_1_label' => 'Kullanıcılara uyarı mesajı gönder',
	'qa_select_users_placeholder' => 'Lütfen kullanıcılarınızdan birini seçiniz',
	'qa_is_created' => 'oluşturuldu',
	'qa_is_updated' => 'güncellendi',
	'qa_is_deleted' => 'silindi',
	'qa_notifications' => 'Bildiriler',
	'qa_notify_user' => 'Kullanıcıya Bildir',
	'qa_create_new_notification' => 'Yeni bildiri oluştur',
	'qa_messages' => 'Mesajlar',
	'qa_you_have_no_messages' => 'Mesajınız yok',
	'qa_all_messages' => 'Tüm mesajlar',
	'qa_new_message' => 'Yeni Mesaj',
	'qa_outbox' => 'Giden kutusu',
	'qa_inbox' => 'Gelen kutusu',
	'qa_recipient' => 'Alıcı',
	'qa_reset_password' => 'Şifreyi yenile',
	'qa_reset_password_woops' => '<strong>Tüh!</strong> input: ile ilgili sorunlar var',
	'qa_email_line1' => 'Hesabınızla ilgili şifre yenileme talebi aldık. ',
	'qa_email_line2' => 'Şifre yenileme talebinden bulunmadıysanız bu mesajı görmezden geliniz.',
	'qa_copy_paste_url_bellow' => 'lütfen üstteki URLyi yeni bir sayfada açınız.',
	'qa_stripe_transactions' => 'Stripe Alışverişleri',
	'qa_upgrade_to_premium' => 'Premiuma Geçin',
	'qa_there_were_problems_with_input' => 'Girdide sorunlar var',
	'qa_whoops' => 'Tüh!',
	'qa_csvImport' => 'CSV Yükleme',
	'qa_csv_file_to_import' => 'Yüklenecek CSV dosyası',
	'qa_change_notifications_field_2_label' => 'Kayıt Eklendiğinde',
	'qa_when_crud' => 'CRUD Oluşturulurken',
	'qa_file_contains_header_row' => 'Dosyada başlık sütunu mevcut mu?',
	'qa_parse_csv' => 'Yükle',
	'qa_import_data' => 'Veriyi İçeri Al',
	'qa_imported_rows_to_table' => ':rows sütunları :table tablosuna eklenmiştir',
	'quickadmin_title' => 'BNGRC1',
];