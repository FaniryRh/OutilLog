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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Waktu',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
		'assets-history' => [		'title' => 'Historiques',		'created_at' => 'Waktu',		'fields' => [		],	],
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
		'assets-history' => [		'title' => 'Historique',		'created_at' => 'Waktu',		'fields' => [			'asset' => 'Matériel',			'status' => 'Statut',			'location' => 'Location',			'assigned-user' => 'Responsable',		],	],
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
	'qa_create' => 'Buat',
	'qa_save' => 'Simpan',
	'qa_edit' => 'Edit',
	'qa_view' => 'Lihat',
	'qa_update' => 'Update',
	'qa_list' => 'Daftar',
	'qa_no_entries_in_table' => 'Tidak ada data di tabel',
	'qa_custom_controller_index' => 'Controller index yang sesuai kebutuhan Anda.',
	'qa_logout' => 'Keluar',
	'qa_add_new' => 'Tambahkan yang baru',
	'qa_are_you_sure' => 'Anda yakin?',
	'qa_back_to_list' => 'Kembali ke daftar',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Hapus',
	'qa_delete_selected' => 'Hapus terpilih',
	'qa_category' => 'Kategori',
	'qa_categories' => 'Kategori',
	'qa_sample_category' => 'Contoh Kategori',
	'qa_questions' => 'Pertanyaan',
	'qa_question' => 'Pertanyaan',
	'qa_answer' => 'Jawaban',
	'qa_sample_question' => 'Contoh Pertanyaan',
	'qa_sample_answer' => 'Contoh Jawaban',
	'qa_faq_management' => 'Manajemen  FAQ',
	'qa_administrator_can_create_other_users' => 'Administrator (bisa membuat account user lain)',
	'qa_simple_user' => 'Pengguna Biasa',
	'qa_title' => 'Judul',
	'qa_roles' => 'Peranan',
	'qa_role' => 'Peran',
	'qa_user_management' => 'Manajemen Pengguna',
	'qa_users' => 'Daftar Pengguna',
	'qa_user' => 'Pengguna',
	'qa_name' => 'Nama',
	'qa_email' => 'Email',
	'qa_password' => 'Kata Sandi',
	'qa_remember_token' => 'Token Pengingat',
	'qa_permissions' => 'Izin',
	'qa_user_actions' => 'Aksi Pengguna',
	'qa_action' => 'Aksi',
	'qa_action_model' => 'Model Aksi',
	'qa_action_id' => 'Id Aksi',
	'qa_time' => 'Waktu',
	'qa_campaign' => 'Kampanye',
	'qa_campaigns' => 'Daftar Kampanye',
	'qa_description' => 'Deskripsi',
	'qa_valid_from' => 'Berlaku dari',
	'qa_valid_to' => 'Berlaku sampai',
	'qa_discount_amount' => 'Jumlah Diskon',
	'qa_discount_percent' => 'Persentasi Diskon',
	'qa_coupons_amount' => 'Jumlah Kupon',
	'qa_coupons' => 'Jupon',
	'qa_code' => 'Kode',
	'qa_coupon_management' => 'manajemen Kupon',
	'qa_time_management' => 'Manajemen Waktu',
	'qa_projects' => 'Daftar Kegiatan',
	'qa_reports' => 'Laporan',
	'qa_time_entries' => 'Input Waktu',
	'qa_work_type' => 'Tipe Pekerjaan',
	'qa_work_types' => 'Tipe-tipe Pekerjaan',
	'qa_project' => 'Kegiatan',
	'qa_start_time' => 'Waktu Mulai',
	'qa_end_time' => 'Waktu Selesai',
	'qa_expense_category' => 'Kategori Pengeluaran',
	'qa_restore' => 'Mengembalikan',
	'qa_permadel' => 'Hapus Selamanya',
	'qa_all' => 'Semua',
	'qa_trash' => 'Sampah',
	'qa_redeem_time' => 'Tukarkan waktu',
	'qa_expense_categories' => 'Kategori Biaya',
	'qa_expense_management' => 'Manajemen biaya',
	'qa_expenses' => 'Beban',
	'qa_expense' => 'Biaya',
	'qa_entry_date' => 'Tanggal masuk',
	'qa_amount' => 'Jumlah',
	'qa_income_categories' => 'Kategori pendapatan',
	'qa_monthly_report' => 'Laporan bulanan',
	'qa_companies' => 'Perusahaan',
	'qa_company_name' => 'Nama Perusahaan',
	'qa_address' => 'Alamat',
	'qa_website' => 'Website',
	'qa_contact_management' => 'Manajemen kontak',
	'qa_contacts' => 'Kontak',
	'qa_company' => 'Perusahaan',
	'qa_first_name' => 'Nama Depan',
	'qa_last_name' => 'Nama Belakang',
	'qa_phone' => 'Telepon',
	'qa_phone1' => 'Telepon 1',
	'qa_phone2' => 'Telepon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Foto',
	'qa_category_name' => 'Nama kategori',
	'qa_product_management' => 'Manajemen Produk',
	'qa_products' => 'Produk',
	'qa_product_name' => 'Nama Produk',
	'qa_price' => 'Harga',
	'qa_tags' => 'Tag',
	'qa_tag' => 'Menandai',
	'qa_photo1' => 'Foto1',
	'qa_photo2' => 'Foto2',
	'qa_photo3' => 'Foto3',
	'qa_calendar' => 'Kalendar',
	'qa_statuses' => 'Status',
	'qa_task_management' => 'Manajemen Tugas',
	'qa_tasks' => 'Tugas',
	'qa_status' => 'Status',
	'qa_attachment' => 'Lampiran',
	'qa_due_date' => 'Batas Tanggal  Terahir',
	'qa_assigned_to' => 'Ditugaskan untuk',
	'qa_assets' => 'Aktiva',
	'qa_asset' => 'Aset',
	'qa_serial_number' => 'Nomor seri',
	'qa_location' => 'Lokasi',
	'qa_locations' => 'Lokasi',
	'qa_assigned_user' => 'Ditugaskan (pengguna)',
	'qa_notes' => 'Catatan',
	'qa_assets_history' => 'History aset',
	'qa_assets_management' => 'Pengelolaan aset',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'Manajemen konten',
	'qa_text' => 'Teks',
	'qa_excerpt' => 'Kutipan',
	'qa_featured_image' => 'Gambar unggulan',
	'qa_pages' => 'Halaman',
	'qa_show' => 'Tampil',
	'qa_chart_type' => 'Jenis bagan',
	'qa_create_new_report' => 'Buat laporan baru',
	'qa_no_reports_yet' => 'Belum ada laporan.',
	'qa_created_at' => 'Dibuat pada',
	'qa_updated_at' => 'Diperbarui pada',
	'qa_deleted_at' => 'Dihapus pada',
	'qa_reports_x_axis_field' => 'Sumbu X - pilih salah satu bidang tanggal / waktu',
	'qa_reports_y_axis_field' => 'Sumbu Y - pilih salah satu bidang nomor',
	'qa_select_crud_placeholder' => 'Silakan pilih salah satu CRUDs Anda',
	'qa_select_dt_placeholder' => 'Pilih salah satu field tanggal / waktu',
	'qa_aggregate_function_use' => 'Fungsi agregat untuk digunakan',
	'qa_integer_float_placeholder' => 'Silahkan pilih salah satu field integer / float',
	'qa_change_notifications_field_1_label' => 'Kirim pemberitahuan email ke User',
	'qa_change_notifications_field_2_label' => 'Saat masuk di CRUD',
	'qa_select_users_placeholder' => 'Silahkan pilih salah satu User anda',
	'qa_is_created' => 'dibuat',
	'qa_is_updated' => 'diperbarui',
	'qa_is_deleted' => 'dihapus',
	'qa_notifications' => 'Pemberitahuan',
	'qa_notify_user' => 'Beritahu Pengguna',
	'qa_when_crud' => 'Saat CRUD',
	'qa_create_new_notification' => 'Buat Pemberitahuan baru',
	'qa_stripe_transactions' => 'Transaksi Stripe',
	'qa_upgrade_to_premium' => 'Tingkatkan ke Premium',
	'qa_messages' => 'Pesan',
	'qa_you_have_no_messages' => 'Anda tidak memiliki pesan',
	'qa_all_messages' => 'Semua pesan',
	'qa_new_message' => 'Pesan baru',
	'qa_outbox' => 'Kotak keluar',
	'qa_inbox' => 'Kotak masuk',
	'qa_recipient' => 'Penerima',
	'qa_subject' => 'Subjek',
	'qa_message' => 'Pesan',
	'qa_send' => 'Kirim',
	'qa_reply' => 'Balas',
	'qa_import_data' => 'Import Data',
	'quickadmin_title' => 'BNGRC1',
];