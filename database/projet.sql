-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 10 mars 2018 à 01:54
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `motif` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `personnel_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `absences`
--

INSERT INTO `absences` (`id`, `date`, `date_fin`, `motif`, `created_at`, `updated_at`, `personnel_id`) VALUES
(1, '2017-12-02 00:00:00', '2017-12-15 00:00:00', 'Congé', '2017-12-11 20:54:15', '2017-12-11 20:54:15', 59),
(2, '2018-02-14 00:00:00', '2018-02-16 11:00:00', 'congee', '2018-02-01 20:56:08', '2018-02-01 20:56:08', 36);

-- --------------------------------------------------------

--
-- Structure de la table `assets`
--

CREATE TABLE `assets` (
  `id` int(10) UNSIGNED NOT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT NULL,
  `location_id` int(10) UNSIGNED DEFAULT NULL,
  `peronnel_id` int(10) UNSIGNED DEFAULT NULL,
  `assigned_user_id` int(10) UNSIGNED DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_acquisition` datetime DEFAULT NULL,
  `quantite_stock` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assets`
--

INSERT INTO `assets` (`id`, `serial_number`, `title`, `photo1`, `photo2`, `photo3`, `notes`, `created_at`, `updated_at`, `deleted_at`, `category_id`, `status_id`, `location_id`, `peronnel_id`, `assigned_user_id`, `latitude`, `longitude`, `date_acquisition`, `quantite_stock`) VALUES
(2, '4564564', 'ROG 454', '1512158040-06096548-photo-hp-envy-15.jpg', '1512158040-fg05.png', NULL, 'TEST', '2017-12-01 18:54:00', '2017-12-11 23:49:23', NULL, 1, 2, 1, NULL, 59, '-19.413762767392214', '44.68394868749999', '2017-12-02 00:00:00', 2),
(3, '54652132', 'ACER Prédator', '1512521945-index.jpg', '1512521986-a.jpg', NULL, 'multimedia', '2017-12-05 23:59:05', '2017-12-05 23:59:46', NULL, 1, 1, 1, NULL, 59, '-18.894859644427218', '47.49644868749999', '2017-12-06 00:00:00', 1),
(4, '1234 TAV', 'Camion de pompier 01', '1512609469-1.jpg', '1512609470-2.jpg', NULL, 'test note', '2017-12-07 00:17:50', '2017-12-07 00:18:23', NULL, 2, 1, 2, NULL, 57, '-22.12534340988903', '48.00181978124999', '2017-12-06 00:00:00', 1),
(5, '4687 FC', 'Voiture 001', '1512609622-image-voiture-du-mois.jpg', '1512609654-5.jpg', NULL, 'test', '2017-12-07 00:20:22', '2017-12-07 00:20:54', NULL, 6, 2, 2, NULL, 59, '-16.466647781621507', '44.68394868749999', '2017-12-14 00:00:00', 1),
(6, '4687 SDJ', 'Ambulance 002', '1512609746-images.jpg', '1512609746-images2.jpg', NULL, 'TEST', '2017-12-07 00:22:26', '2017-12-07 00:22:26', NULL, 5, 1, 2, NULL, 37, '-23.32107746242388', '43.71715181249999', '2017-12-01 00:00:00', 4);

-- --------------------------------------------------------

--
-- Structure de la table `assets_categories`
--

CREATE TABLE `assets_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assets_categories`
--

INSERT INTO `assets_categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pc', '2017-12-01 18:50:28', '2017-12-01 20:57:52', NULL),
(2, 'Camion de pompier', '2017-12-01 18:50:35', '2017-12-07 00:05:22', NULL),
(3, 'Imprimante', '2017-12-01 18:50:55', '2017-12-06 22:39:58', NULL),
(4, 'Batiment', '2017-12-06 22:40:21', '2017-12-06 22:40:21', NULL),
(5, 'Ambulance', '2017-12-06 22:40:30', '2017-12-06 22:40:30', NULL),
(6, 'Voiture de transport', '2017-12-07 00:06:29', '2017-12-07 00:06:29', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `assets_histories`
--

CREATE TABLE `assets_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `assigned_user_id` int(11) DEFAULT NULL,
  `asset_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `assets_locations`
--

CREATE TABLE `assets_locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assets_locations`
--

INSERT INTO `assets_locations` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'BNGRC Tana', '2017-12-01 18:52:11', '2017-12-01 18:52:11', NULL),
(2, 'Autre', '2017-12-01 19:00:23', '2017-12-01 19:00:23', NULL),
(3, 'BNGRC Fianarantsoa', '2017-12-06 20:02:23', '2017-12-06 20:02:23', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `assets_statuses`
--

CREATE TABLE `assets_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assets_statuses`
--

INSERT INTO `assets_statuses` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Disponible', '2017-11-29 21:28:01', '2017-11-30 18:09:48', NULL),
(2, 'Occupé', '2017-11-29 21:28:01', '2017-11-30 18:09:59', NULL),
(3, 'En panne', '2017-11-29 21:28:01', '2017-11-30 18:10:18', NULL),
(4, 'Irreparable', '2017-11-29 21:28:01', '2017-11-30 18:10:28', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `asset_inventaire`
--

CREATE TABLE `asset_inventaire` (
  `asset_id` int(10) UNSIGNED DEFAULT NULL,
  `inventaire_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `asset_inventaire`
--

INSERT INTO `asset_inventaire` (`asset_id`, `inventaire_id`) VALUES
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `capacites`
--

CREATE TABLE `capacites` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `capacites`
--

INSERT INTO `capacites` (`id`, `titre`, `description`, `piece_jointe`, `created_at`, `updated_at`) VALUES
(1, 'Cap 1', '<p>test</p>', NULL, '2017-12-11 20:45:08', '2017-12-11 20:45:08'),
(2, 'Cap 2', '<p>desc</p>', NULL, '2018-02-04 08:44:50', '2018-02-04 08:44:50'),
(3, 'Cap 3', '<p>desc</p>', NULL, '2018-02-04 08:44:59', '2018-02-04 08:44:59');

-- --------------------------------------------------------

--
-- Structure de la table `capacite_personnel_du_bngrc`
--

CREATE TABLE `capacite_personnel_du_bngrc` (
  `capacite_id` int(10) UNSIGNED DEFAULT NULL,
  `personnel_du_bngrc_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `capacite_personnel_du_bngrc`
--

INSERT INTO `capacite_personnel_du_bngrc` (`capacite_id`, `personnel_du_bngrc_id`) VALUES
(2, 1),
(1, 59),
(3, 59);

-- --------------------------------------------------------

--
-- Structure de la table `chef_de_regions`
--

CREATE TABLE `chef_de_regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `province_id` int(10) UNSIGNED DEFAULT NULL,
  `region_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `chef_de_regions`
--

INSERT INTO `chef_de_regions` (`id`, `nom_prenom`, `tel`, `tel2`, `email`, `created_at`, `updated_at`, `deleted_at`, `province_id`, `region_id`) VALUES
(1, 'Rahajanirainy Faniry', '012356789', '0123456789', 'rhjfah@gmail.com', '2017-12-06 23:19:19', '2017-12-06 23:19:19', NULL, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `chef_districts`
--

CREATE TABLE `chef_districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `region_id` int(10) UNSIGNED DEFAULT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `competance_formations`
--

CREATE TABLE `competance_formations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competance_formations`
--

INSERT INTO `competance_formations` (`id`, `titre`, `description`, `piece_jointe`, `created_at`, `updated_at`) VALUES
(1, 'Formation 01', '<p>test</p>', NULL, '2017-12-11 20:36:19', '2017-12-11 20:36:19'),
(2, 'Formation 02', '<p>description</p>', NULL, '2018-02-04 08:44:02', '2018-02-04 08:44:02'),
(3, 'Formation 03', '<p>description</p>', NULL, '2018-02-04 08:44:15', '2018-02-04 08:44:15'),
(4, 'Formation 04', '<p>description</p>', NULL, '2018-02-04 08:44:34', '2018-02-04 08:44:34');

-- --------------------------------------------------------

--
-- Structure de la table `competance_formation_personnel_du_bngrc`
--

CREATE TABLE `competance_formation_personnel_du_bngrc` (
  `competance_formation_id` int(10) UNSIGNED DEFAULT NULL,
  `personnel_du_bngrc_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competance_formation_personnel_du_bngrc`
--

INSERT INTO `competance_formation_personnel_du_bngrc` (`competance_formation_id`, `personnel_du_bngrc_id`) VALUES
(1, 1),
(4, 1),
(1, 59),
(2, 59),
(3, 59);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `fonction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `phone1`, `phone2`, `email`, `address`, `created_at`, `updated_at`, `company_id`, `deleted_at`, `fonction`) VALUES
(1, 'Faniry Rahajanirainy', '123456', '123456', 'user@user.com', 'Ampefiloha', '2017-12-11 19:11:20', '2017-12-11 19:11:20', 1, NULL, 'dir');

-- --------------------------------------------------------

--
-- Structure de la table `contacts_regions`
--

CREATE TABLE `contacts_regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `region_id` int(10) UNSIGNED DEFAULT NULL,
  `organisme_id` int(10) UNSIGNED DEFAULT NULL,
  `fonction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact_companies`
--

CREATE TABLE `contact_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact_companies`
--

INSERT INTO `contact_companies` (`id`, `name`, `address`, `website`, `email`, `created_at`, `updated_at`, `deleted_at`, `tel`, `logo`) VALUES
(1, 'BNGRC - MADAGASCAR', 'Antanimora - Antananarivo', 'http://www.bngrc-mid.mg/', NULL, '2017-10-12 18:25:52', '2017-10-12 18:25:52', NULL, '+261 20 22 594 50  / +261 34 05 480 68/69', '1507839952-bng.PNG'),
(2, 'Ministère des Affaires Etrangères', 'B.P 836, Rue Andriamifidy, Anosy 101 Antananarivo - Madagascar', 'http://www.diplomatie.gov.mg', 'info-web@diplomatie.gov.mg', '2017-10-12 18:29:26', '2017-10-12 18:30:53', NULL, NULL, '1507840253-min.jpg'),
(3, 'Ministère Des Finances et du Budget', NULL, 'http://www.mefb.gov.mg/', NULL, '2017-10-12 18:33:55', '2017-10-12 18:33:55', NULL, NULL, '1507840435-logo_officiel.jpg'),
(4, 'Ministère de l\'intérieur et de la décentralisation', NULL, 'http://www.mid.gov.mg', NULL, '2017-10-12 18:36:19', '2017-10-12 18:36:19', NULL, NULL, '1507840579-min.jpg'),
(5, 'Ministère de l\'Economie et du Plan', NULL, 'http://www.mei.gov.mg/', NULL, '2017-10-12 18:38:44', '2017-10-12 18:38:55', NULL, NULL, '1507840735-min.jpg'),
(6, 'Ministère de la Santé Publique', 'Ambohidahy, Madagascar Antananarivo 101', 'http://www.sante.gov.mg', NULL, '2017-10-12 18:41:02', '2017-10-12 18:41:02', NULL, '22 236 97', '1507840862-favicon.jpg'),
(7, 'Ministère de l\'Education Nationale', NULL, 'http://www.education.gov.mg/', NULL, '2017-10-12 18:45:29', '2017-10-12 18:45:29', NULL, NULL, '1507841129-logo.png'),
(8, 'Ministre de la fonction publique et de la réforme de l’administration', NULL, 'http://www.mfptls.gov.mg/', 'avimex10@yahoo.fr', '2017-10-12 18:49:03', '2017-10-12 18:49:03', NULL, NULL, '1507841342-Capture11.PNG'),
(9, 'Ministre de l’enseignement supérieur et de la recherche scientifique', NULL, 'http://www.mesupres.gov.mg/', NULL, '2017-10-12 18:53:58', '2017-10-12 18:53:58', NULL, NULL, '1507841638-min.jpg'),
(10, 'Ministre des postes, des télécommunications et du développement numérique', 'Place Philibert TSIRANANA Antaninarenina ANTANANARIVO 101 – MADAGASCAR 261', 'http://www.mptdn.gov.mg/', NULL, '2017-10-12 18:56:51', '2017-10-12 18:56:51', NULL, NULL, '1507841811-Capture12.PNG'),
(11, 'Ministre de la communication et de la relation avec les institutions', 'Ex-Ambassade de Chine - Nanisana - Antananarivo - Madagascar', 'http://www.mcri.gov.mg/', NULL, '2017-10-12 18:59:04', '2017-10-12 18:59:04', NULL, NULL, '1507841944-Capture13.PNG'),
(12, 'Ministre de la jeunesse et des sports', 'Ambohijatovo - Antananarivo 101', 'http://www.mjs.gov.mg/', NULL, '2017-10-12 19:26:50', '2017-10-12 19:26:50', NULL, NULL, '1507843610-min.jpg'),
(13, 'Ministre de la population, de la protection sociale et de la promotion de la femme', '23 Rue, RAZANAKOMBANA - Ambohijatovo - Antananarivo - Madagascar', 'http://www.population.gov.mg/', NULL, '2017-10-12 19:28:53', '2017-10-12 19:28:53', NULL, NULL, '1507843733-Capture14.PNG'),
(14, 'Secrétaire d’état auprès du ministère de la Défense nationalee chargé de la gendarmerie nationale', 'Gendarmerie Nationale Toby Ratsimandrava', 'http://www.gendarmerie.gov.mg/', NULL, '2017-10-12 19:30:58', '2017-10-12 19:31:36', NULL, NULL, '1507843896-Capture15.PNG'),
(15, 'PARLEMENTAIRE', NULL, NULL, NULL, '2017-10-13 20:55:24', '2017-10-13 20:55:24', NULL, NULL, NULL),
(16, 'DISTRICT/REGION', NULL, NULL, NULL, '2017-10-13 20:55:55', '2017-10-13 20:55:55', NULL, NULL, NULL),
(17, 'MAIRE', NULL, NULL, NULL, '2017-10-13 20:56:26', '2017-10-13 20:56:26', NULL, NULL, NULL),
(18, 'CAA', NULL, NULL, NULL, '2017-10-13 20:56:38', '2017-10-13 20:56:38', NULL, NULL, NULL),
(19, 'DIRECTION REGIONALE', NULL, NULL, NULL, '2017-10-13 20:56:59', '2017-10-13 20:56:59', NULL, NULL, NULL),
(20, 'AUTRE', NULL, NULL, NULL, '2017-10-13 20:57:08', '2017-10-13 20:57:08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contact_company_om`
--

CREATE TABLE `contact_company_om` (
  `contact_company_id` int(10) UNSIGNED DEFAULT NULL,
  `om_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact_company_om`
--

INSERT INTO `contact_company_om` (`contact_company_id`, `om_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `contact_company_task`
--

CREATE TABLE `contact_company_task` (
  `contact_company_id` int(10) UNSIGNED DEFAULT NULL,
  `task_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact_company_task`
--

INSERT INTO `contact_company_task` (`contact_company_id`, `task_id`) VALUES
(1, 3),
(17, 3),
(3, 6),
(5, 6),
(4, 7),
(5, 7),
(6, 7),
(19, 7),
(1, 8),
(1, 9),
(1, 10),
(11, 10),
(1, 2),
(1, 11),
(1, 12),
(4, 12),
(1, 13),
(4, 13),
(13, 13),
(17, 13),
(1, 14),
(3, 14),
(4, 14);

-- --------------------------------------------------------

--
-- Structure de la table `contact_districts`
--

CREATE TABLE `contact_districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `organisme_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `current_dat`
--

CREATE TABLE `current_dat` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `region_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `region_id`) VALUES
(1, 'Antsiranana I', '2017-10-11 20:28:07', '2017-10-11 20:28:07', NULL, 1),
(2, 'Antsiranana II', '2017-10-11 20:28:07', '2017-10-11 20:28:07', NULL, 1),
(3, 'Ambilobe', '2017-10-11 20:28:07', '2017-10-11 20:28:07', NULL, 1),
(4, 'Ambanja', '2017-10-11 20:28:07', '2017-10-11 20:28:07', NULL, 1),
(5, 'Nosy Be', '2017-10-11 20:28:07', '2017-10-11 20:28:07', NULL, 1),
(6, 'Andapa', '2017-10-11 20:31:21', '2017-10-11 20:31:21', NULL, 2),
(7, 'Antalaha', '2017-10-11 20:31:21', '2017-10-11 20:31:21', NULL, 2),
(8, 'Sambava', '2017-10-11 20:31:22', '2017-10-11 20:31:22', NULL, 2),
(9, 'Vohemar', '2017-10-11 20:31:22', '2017-10-11 20:31:22', NULL, 2),
(10, 'Arivonimamo', '2017-10-11 20:31:59', '2017-10-11 20:31:59', NULL, 3),
(11, 'Miarinarivo', '2017-10-11 20:31:59', '2017-10-11 20:31:59', NULL, 3),
(12, 'Soavinandriana', '2017-10-11 20:31:59', '2017-10-11 20:31:59', NULL, 3),
(13, 'Ambohidratrimo', '2017-10-11 20:33:34', '2017-10-11 20:33:34', NULL, 4),
(14, 'Andramasina', '2017-10-11 20:33:34', '2017-10-11 20:33:34', NULL, 4),
(15, 'Anjozorobe', '2017-10-11 20:33:34', '2017-10-11 20:33:34', NULL, 4),
(16, 'Ankazobe', '2017-10-11 20:33:34', '2017-10-11 20:33:34', NULL, 4),
(17, 'Antananarivo-Atsimondrano', '2017-10-11 20:33:34', '2017-10-11 20:33:34', NULL, 4),
(18, 'Antananarivo-Avaradrano', '2017-10-11 20:33:34', '2017-10-11 20:33:34', NULL, 4),
(19, 'Antananarivo-Renivohitra', '2017-10-11 20:33:34', '2017-10-11 20:33:34', NULL, 4),
(20, 'Manjakandriana', '2017-10-11 20:33:34', '2017-10-11 20:33:34', NULL, 4),
(21, 'Ambatolampy', '2017-10-11 20:34:51', '2017-10-11 20:34:51', NULL, 5),
(22, 'Antanifotsy', '2017-10-11 20:34:51', '2017-10-11 20:34:51', NULL, 5),
(23, 'Antsirabe I', '2017-10-11 20:34:51', '2017-10-11 20:34:51', NULL, 5),
(24, 'Antsirabe II', '2017-10-11 20:34:51', '2017-10-11 20:34:51', NULL, 5),
(25, 'Betafo', '2017-10-11 20:34:51', '2017-10-11 20:34:51', NULL, 5),
(26, 'Faratsiho', '2017-10-11 20:34:51', '2017-10-11 20:34:51', NULL, 5),
(27, 'Mandoto', '2017-10-11 20:34:51', '2017-10-11 20:34:51', NULL, 5),
(28, 'Fenoarivobe', '2017-10-11 20:35:18', '2017-10-11 20:35:18', NULL, 6),
(29, 'Tsiroanomandidy', '2017-10-11 20:35:18', '2017-10-11 20:35:18', NULL, 6),
(30, 'Analalava', '2017-10-11 20:36:35', '2017-10-11 20:36:35', NULL, 7),
(31, 'Antsohihy', '2017-10-11 20:36:35', '2017-10-11 20:36:35', NULL, 7),
(32, 'Bealanana', '2017-10-11 20:36:35', '2017-10-11 20:36:35', NULL, 7),
(33, 'Befandriana Avaratra', '2017-10-11 20:36:35', '2017-10-11 20:36:35', NULL, 7),
(34, 'Boriziny', '2017-10-11 20:36:35', '2017-10-11 20:36:35', NULL, 7),
(35, 'Mampikony', '2017-10-11 20:36:35', '2017-10-11 20:36:35', NULL, 7),
(36, 'Mandritsara', '2017-10-11 20:36:35', '2017-10-11 20:36:35', NULL, 7),
(37, 'Ambato-Boeny', '2017-10-11 20:37:36', '2017-10-11 20:37:36', NULL, 8),
(38, 'Mahajanga I', '2017-10-11 20:37:36', '2017-10-11 20:37:36', NULL, 8),
(39, 'Mahajanga II', '2017-10-11 20:37:36', '2017-10-11 20:37:36', NULL, 8),
(40, 'Marovoay', '2017-10-11 20:37:36', '2017-10-11 20:37:36', NULL, 8),
(41, 'Mitsinjo', '2017-10-11 20:37:36', '2017-10-11 20:37:36', NULL, 8),
(42, 'Soalala', '2017-10-11 20:37:36', '2017-10-11 20:37:36', NULL, 8),
(43, 'Kandreho', '2017-10-11 20:38:15', '2017-10-11 20:38:15', NULL, 9),
(44, 'Maevantanana', '2017-10-11 20:38:15', '2017-10-11 20:38:15', NULL, 9),
(45, 'Tsaratanana', '2017-10-11 20:38:15', '2017-10-11 20:38:15', NULL, 9),
(46, 'Ambatomainty', '2017-10-11 20:39:08', '2017-10-11 20:39:08', NULL, 10),
(47, 'Antsalova', '2017-10-11 20:39:08', '2017-10-11 20:39:08', NULL, 10),
(48, 'Besalampy', '2017-10-11 20:39:08', '2017-10-11 20:39:08', NULL, 10),
(49, 'Maintirano', '2017-10-11 20:39:09', '2017-10-11 20:39:09', NULL, 10),
(50, 'Morafenobe', '2017-10-11 20:39:09', '2017-10-11 20:39:09', NULL, 10),
(51, 'Ambatondrazaka', '2017-10-11 20:39:55', '2017-10-11 20:39:55', NULL, 11),
(52, 'Amparafaravola', '2017-10-11 20:39:55', '2017-10-11 20:39:55', NULL, 11),
(53, 'Andilamena', '2017-10-11 20:39:55', '2017-10-11 20:39:55', NULL, 11),
(54, 'Anosibe An\'ala', '2017-10-11 20:39:55', '2017-10-11 20:39:55', NULL, 11),
(55, 'Moramanga', '2017-10-11 20:39:55', '2017-10-11 20:39:55', NULL, 11),
(56, 'Antanambao Manampotsy', '2017-10-11 20:41:06', '2017-10-11 20:41:06', NULL, 12),
(57, 'Brickaville', '2017-10-11 20:41:06', '2017-10-11 20:41:06', NULL, 12),
(58, 'Mahanoro', '2017-10-11 20:41:06', '2017-10-11 20:41:06', NULL, 12),
(59, 'Marolambo', '2017-10-11 20:41:06', '2017-10-11 20:41:06', NULL, 12),
(60, 'Tamatave I', '2017-10-11 20:41:06', '2017-10-11 20:41:06', NULL, 12),
(61, 'Tamatave II', '2017-10-11 20:41:06', '2017-10-11 20:41:06', NULL, 12),
(62, 'Vatomandry', '2017-10-11 20:41:06', '2017-10-11 20:41:06', NULL, 12),
(63, 'Fénérive-Est', '2017-10-11 20:42:16', '2017-10-11 20:42:16', NULL, 13),
(64, 'Mananara-Nord', '2017-10-11 20:42:16', '2017-10-11 20:42:16', NULL, 13),
(65, 'Maroantsetra', '2017-10-11 20:42:16', '2017-10-11 20:42:16', NULL, 13),
(66, 'Nosy Boraha', '2017-10-11 20:42:16', '2017-10-11 20:42:16', NULL, 13),
(67, 'Soanierana Ivongo', '2017-10-11 20:42:16', '2017-10-11 20:42:16', NULL, 13),
(68, 'Vavantenina', '2017-10-11 20:42:16', '2017-10-11 20:42:16', NULL, 13),
(69, 'Ambatofinandrahana', '2017-10-11 20:43:05', '2017-10-11 20:43:05', NULL, 14),
(70, 'Ambositra', '2017-10-11 20:43:05', '2017-10-11 20:43:05', NULL, 14),
(71, 'Fandriana', '2017-10-11 20:43:05', '2017-10-11 20:43:05', NULL, 14),
(72, 'Manandriana', '2017-10-11 20:43:05', '2017-10-11 20:43:05', NULL, 14),
(73, 'Ambalavao', '2017-10-11 20:44:06', '2017-10-11 20:44:06', NULL, 15),
(74, 'Ambohimahasoa', '2017-10-11 20:44:06', '2017-10-11 20:44:06', NULL, 15),
(75, 'Fianarantsoa', '2017-10-11 20:44:06', '2017-10-11 20:44:06', NULL, 15),
(76, 'Ikalamavony', '2017-10-11 20:44:06', '2017-10-11 20:44:06', NULL, 15),
(77, 'Isandra', '2017-10-11 20:44:07', '2017-10-11 20:44:07', NULL, 15),
(78, 'Lalangina', '2017-10-11 20:44:07', '2017-10-11 20:44:07', NULL, 15),
(79, 'Vohibato', '2017-10-11 20:44:07', '2017-10-13 17:10:14', NULL, 15),
(80, 'Ifanadiana', '2017-10-11 20:44:59', '2017-10-11 20:44:59', NULL, 16),
(81, 'Ikongo', '2017-10-11 20:44:59', '2017-10-11 20:44:59', NULL, 16),
(82, 'Manakara', '2017-10-11 20:44:59', '2017-10-11 20:44:59', NULL, 16),
(83, 'Mananjary', '2017-10-11 20:44:59', '2017-10-11 20:44:59', NULL, 16),
(84, 'Nosy Varika', '2017-10-11 20:44:59', '2017-10-11 20:44:59', NULL, 16),
(85, 'Vohipeno', '2017-10-11 20:44:59', '2017-10-11 20:44:59', NULL, 16),
(86, 'Befotaka', '2017-10-11 20:45:53', '2017-10-11 20:45:53', NULL, 17),
(87, 'Farafangana', '2017-10-11 20:45:53', '2017-10-11 20:45:53', NULL, 17),
(88, 'Midongy', '2017-10-11 20:45:53', '2017-10-11 20:45:53', NULL, 17),
(89, 'Vangaindrano', '2017-10-11 20:45:53', '2017-10-11 20:45:53', NULL, 17),
(90, 'Vondrozo', '2017-10-11 20:45:53', '2017-10-11 20:45:53', NULL, 17),
(91, 'Iakora', '2017-10-11 20:46:20', '2017-10-11 20:46:20', NULL, 18),
(92, 'Ihosy', '2017-10-11 20:46:20', '2017-10-11 20:46:20', NULL, 18),
(93, 'Ivohibe', '2017-10-11 20:46:20', '2017-10-11 20:46:20', NULL, 18),
(94, 'Belo-sur-Tsiribihina', '2017-10-11 20:47:09', '2017-10-11 20:47:09', NULL, 19),
(95, 'Mahabo', '2017-10-11 20:47:09', '2017-10-11 20:47:09', NULL, 19),
(96, 'Manja', '2017-10-11 20:47:09', '2017-10-11 20:47:09', NULL, 19),
(97, 'Miandrivazo', '2017-10-11 20:47:09', '2017-10-11 20:47:09', NULL, 19),
(98, 'Morondava', '2017-10-11 20:47:09', '2017-10-11 20:47:09', NULL, 19),
(99, 'Ampanihy', '2017-10-11 20:48:41', '2017-10-11 20:48:41', NULL, 20),
(100, 'Ankazoabo', '2017-10-11 20:48:41', '2017-10-11 20:48:41', NULL, 20),
(101, 'Benenitra', '2017-10-11 20:48:41', '2017-10-11 20:48:41', NULL, 20),
(102, 'Betioky-Sud', '2017-10-11 20:48:41', '2017-10-11 20:48:41', NULL, 20),
(103, 'Beroroha', '2017-10-11 20:48:41', '2017-10-11 20:48:41', NULL, 20),
(104, 'Morombe', '2017-10-11 20:48:41', '2017-10-11 20:48:41', NULL, 20),
(105, 'Sakaraha', '2017-10-11 20:48:41', '2017-10-11 20:48:41', NULL, 20),
(106, 'Tuléar I', '2017-10-11 20:48:41', '2017-10-11 20:48:41', NULL, 20),
(107, 'Tuléar II', '2017-10-11 20:48:41', '2017-10-11 20:48:41', NULL, 20),
(108, 'Ambovombe', '2017-10-11 20:49:34', '2017-10-11 20:49:34', NULL, 21),
(109, 'Bekily', '2017-10-11 20:49:34', '2017-10-11 20:49:34', NULL, 21),
(110, 'Beloha', '2017-10-11 20:49:34', '2017-10-11 20:49:34', NULL, 21),
(111, 'Tsihombe', '2017-10-11 20:49:34', '2017-10-12 15:20:28', NULL, 21),
(112, 'Amboasary-Sud', '2017-10-11 20:50:09', '2017-10-11 20:50:09', NULL, 22),
(113, 'Betroka', '2017-10-11 20:50:09', '2017-10-11 20:50:09', NULL, 22),
(114, 'Taolanaro', '2017-10-11 20:50:09', '2017-10-11 20:50:09', NULL, 22),
(115, 'Antananarivo I', '2017-10-12 14:43:16', '2017-10-12 14:43:16', NULL, 4),
(116, 'Antananarivo II', '2017-10-12 14:43:16', '2017-10-12 14:43:16', NULL, 4),
(117, 'Antananarivo III', '2017-10-12 14:43:16', '2017-10-12 14:43:16', NULL, 4),
(118, 'Antananarivo IV', '2017-10-12 14:43:16', '2017-10-12 14:43:16', NULL, 4),
(119, 'Antananarivo V', '2017-10-12 14:43:16', '2017-10-12 14:43:16', NULL, 4),
(120, 'Antananarivo VI', '2017-10-12 14:43:16', '2017-10-12 14:43:16', NULL, 4),
(121, 'Sainte Marie', '2017-10-12 15:14:58', '2017-10-12 15:14:58', NULL, 13),
(122, 'Port Bergé', '2017-10-13 17:29:36', '2017-10-13 17:29:36', NULL, 7);

-- --------------------------------------------------------

--
-- Structure de la table `entrees`
--

CREATE TABLE `entrees` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantite` double(15,2) DEFAULT NULL,
  `motif` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stock_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `unite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entrees`
--

INSERT INTO `entrees` (`id`, `quantite`, `motif`, `created_at`, `updated_at`, `stock_id`, `deleted_at`, `unite`, `date`) VALUES
(5, 50.00, 'Aide', '2017-11-30 17:25:26', '2018-02-04 09:33:59', 1, NULL, 'Kg', '2017-11-30 15:00:00'),
(6, 20.00, 'Aide', '2017-11-30 17:26:50', '2018-02-04 09:34:04', 1, NULL, 'Kg', '2017-11-30 13:00:00'),
(7, 300.00, 'Aide', '2017-11-30 17:31:52', '2018-02-04 09:34:10', 1, NULL, 'Kg', '2017-11-30 19:00:00'),
(8, 2.00, 'Mission', '2017-12-19 18:31:23', '2018-02-04 09:34:18', 3, NULL, 'Pièces', '2017-12-19 08:00:00'),
(9, 10.00, 'Aide', '2018-01-16 22:44:43', '2018-02-04 09:34:28', 4, NULL, 'Sac', '2018-01-16 00:00:00'),
(10, 1000.00, 'Aide', '2018-01-16 23:10:33', '2018-02-04 09:34:36', 2, NULL, 'Litre', '2018-01-15 00:00:00'),
(11, 6000.00, 'Aide', '2018-02-01 19:59:43', '2018-02-04 09:34:44', 4, NULL, 'Sac', '2018-02-01 00:00:00'),
(12, 1000000.00, 'Aide', '2018-02-02 21:42:15', '2018-02-04 09:34:50', 1, NULL, 'Kg', '2018-02-02 00:00:00'),
(13, 50.00, 'Aide', '2018-02-02 22:08:52', '2018-02-04 09:34:56', 2, NULL, 'Litre', '2018-02-02 11:00:00'),
(14, 30000000.00, NULL, '2018-02-04 18:24:34', '2018-02-04 18:24:34', 1, NULL, 'Kg', '2018-02-04 00:00:00'),
(15, 10.00, NULL, '2018-02-08 06:27:36', '2018-02-08 06:27:36', 1, NULL, 'Kg', '2018-02-08 00:00:00');

--
-- Déclencheurs `entrees`
--
DELIMITER $$
CREATE TRIGGER `entrees_after_insert` AFTER INSERT ON `entrees` FOR EACH ROW BEGIN

DECLARE unite_id INT;
DECLARE unite VARCHAR(50);

SELECT unite_id INTO unite_id FROM liste_stocks WHERE id = NEW.stock_id;
SELECT nom INTO unite FROM unites WHERE id = unite_id;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `entrees_before_delete` BEFORE DELETE ON `entrees` FOR EACH ROW BEGIN

UPDATE liste_stocks SET quantite = quantite - OLD.quantite WHERE id = OLD.stock_id;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `entrees_before_insert` BEFORE INSERT ON `entrees` FOR EACH ROW BEGIN

DECLARE unites_id INT;
DECLARE unite VARCHAR(50);

SELECT unite_id INTO unites_id FROM liste_stocks WHERE id = NEW.stock_id;
SELECT nom INTO unite FROM unites WHERE id = unites_id;

UPDATE liste_stocks SET quantite = quantite + NEW.quantite WHERE id = NEW.stock_id;
SET NEW.unite = unite;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `entrees_before_update` BEFORE UPDATE ON `entrees` FOR EACH ROW BEGIN

DECLARE unites_id INT;
DECLARE unite VARCHAR(50);

SELECT unite_id INTO unites_id FROM liste_stocks WHERE id = NEW.stock_id;
SELECT nom INTO unite FROM unites WHERE id = unites_id;
SET NEW.unite = unite;

UPDATE liste_stocks SET quantite = (quantite - OLD.quantite) + NEW.quantite WHERE id = OLD.stock_id;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `etat_impressions`
--

CREATE TABLE `etat_impressions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etat_oms`
--

CREATE TABLE `etat_oms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etat_oms`
--

INSERT INTO `etat_oms` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Valide', '2018-02-02 10:58:24', '2018-02-02 10:58:24'),
(2, 'En attente', '2018-02-02 10:58:34', '2018-02-02 10:58:34');

-- --------------------------------------------------------

--
-- Structure de la table `etat_rapport_oms`
--

CREATE TABLE `etat_rapport_oms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etat_rapport_oms`
--

INSERT INTO `etat_rapport_oms` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Valide', '2018-02-01 20:53:42', '2018-02-01 20:53:42'),
(2, 'Invalide', '2018-02-01 20:53:50', '2018-02-01 20:53:50');

-- --------------------------------------------------------

--
-- Structure de la table `groupe_sectoriels`
--

CREATE TABLE `groupe_sectoriels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `internal_notifications`
--

CREATE TABLE `internal_notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `internal_notification_user`
--

CREATE TABLE `internal_notification_user` (
  `internal_notification_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inventaires`
--

CREATE TABLE `inventaires` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantite` double(15,2) DEFAULT NULL,
  `unite` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mission_id` int(10) UNSIGNED DEFAULT NULL,
  `stock_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inventaires`
--

INSERT INTO `inventaires` (`id`, `quantite`, `unite`, `destination`, `latitude`, `longitude`, `created_at`, `updated_at`, `mission_id`, `stock_id`, `deleted_at`, `date`) VALUES
(1, 20.00, 'Kg', 'Fianarantsoa', '-20.137445307307335', '45.89244478124999', '2017-11-30 17:52:41', '2017-12-07 00:38:40', 1, 1, NULL, '2017-11-25 00:00:00'),
(2, 10.00, 'Kg', 'Fianar', '-21.472501563795536', '47.10094087499999', '2017-12-05 21:49:17', '2017-12-05 21:49:17', 2, 1, NULL, '2017-12-15 00:00:00');

--
-- Déclencheurs `inventaires`
--
DELIMITER $$
CREATE TRIGGER `inventaires_before_insert` BEFORE INSERT ON `inventaires` FOR EACH ROW BEGIN

DECLARE unites_id INT;
DECLARE unite VARCHAR(50);

SELECT unite_id INTO unites_id FROM liste_stocks WHERE id = NEW.stock_id;
SELECT nom INTO unite FROM unites WHERE id = unites_id;

SET NEW.unite = unite;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inventaires_before_update` BEFORE UPDATE ON `inventaires` FOR EACH ROW BEGIN

DECLARE unites_id INT;
DECLARE unite VARCHAR(50);

SELECT unite_id INTO unites_id FROM liste_stocks WHERE id = NEW.stock_id;
SELECT nom INTO unite FROM unites WHERE id = unites_id;

SET NEW.unite = unite;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `inventaire_personnel_du_bngrc`
--

CREATE TABLE `inventaire_personnel_du_bngrc` (
  `inventaire_id` int(10) UNSIGNED DEFAULT NULL,
  `personnel_du_bngrc_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inventaire_personnel_du_bngrc`
--

INSERT INTO `inventaire_personnel_du_bngrc` (`inventaire_id`, `personnel_du_bngrc_id`) VALUES
(1, 58),
(1, 59),
(2, 59);

-- --------------------------------------------------------

--
-- Structure de la table `liste_des_prefets`
--

CREATE TABLE `liste_des_prefets` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `province_id` int(10) UNSIGNED DEFAULT NULL,
  `region_id` int(10) UNSIGNED DEFAULT NULL,
  `prefecture_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `liste_groupe_sectoriels`
--

CREATE TABLE `liste_groupe_sectoriels` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `groupe_sectoriel_id` int(10) UNSIGNED DEFAULT NULL,
  `organisme_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `liste_stocks`
--

CREATE TABLE `liste_stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `quantite` double(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unite_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `liste_stocks`
--

INSERT INTO `liste_stocks` (`id`, `designation`, `description`, `quantite`, `created_at`, `updated_at`, `unite_id`, `deleted_at`, `photo`) VALUES
(1, 'Sucre', 'sucre blanc', 20.00, '2017-11-29 22:46:49', '2018-02-04 18:52:53', 1, NULL, '1517575925-sugar.jpg'),
(2, 'Insecticide', 'insecticide', 1150.00, '2017-12-06 19:58:59', '2018-02-02 11:52:50', 6, NULL, '1517575970-bio-kill-800ml.jpg'),
(3, 'Ordinateur portable asus', 'ROG', 51.00, '2017-12-06 20:00:27', '2018-02-04 09:38:33', 7, NULL, '1517740712-asus-rog-notebook-original-imaehsgggrdhu2c7.jpeg'),
(4, 'Savon', 'Savon', 6052.00, '2017-12-06 20:01:13', '2018-02-04 09:39:37', 3, NULL, '1517740777-produit1.png'),
(5, 'Riz', 'Riz blanc', 500.00, '2017-12-07 00:23:54', '2018-02-04 09:40:28', 1, NULL, '1517740828-sac-de-riz.jpg'),
(6, 'Huile', 'huile', 60.00, '2017-12-07 00:25:48', '2018-02-04 09:40:57', 6, NULL, '1517740857-g_156058_huile-de-nouveau-colza-riche-en-acides-gras-omega-3-pour-assaisonnement.jpg'),
(7, 'Tente sanitaire', 'Tente sanitaire pour les sinistres', 600.00, '2018-02-04 09:37:33', '2018-02-04 09:37:33', 7, NULL, '1517740653-origin-00000322527.jpg');

--
-- Déclencheurs `liste_stocks`
--
DELIMITER $$
CREATE TRIGGER `liste_stocks_before_update` BEFORE UPDATE ON `liste_stocks` FOR EACH ROW BEGIN




END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED DEFAULT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `manipulations` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_10_10_094944_create_1508741384_assets_categories_table', 1),
(3, '2017_10_10_094948_create_1508741388_assets_statuses_table', 1),
(4, '2017_10_10_094952_create_1508741392_assets_locations_table', 1),
(5, '2017_10_10_094957_create_1508741396_assets_table', 1),
(6, '2017_10_10_095007_create_1508741406_assets_histories_table', 1),
(7, '2017_10_10_160656_create_1507640816_roles_table', 1),
(8, '2017_10_10_160658_create_1507640817_users_table', 1),
(9, '2017_10_10_160659_add_59dcc5f3dec83_relationships_to_user_table', 1),
(10, '2017_10_10_160724_create_1507640844_contact_companies_table', 1),
(11, '2017_10_10_160727_create_1507640846_contacts_table', 1),
(12, '2017_10_10_160728_add_59dcc6103bab1_relationships_to_contact_table', 1),
(13, '2017_10_10_161046_create_1507641046_regions_table', 1),
(14, '2017_10_10_161247_create_1507641167_provinces_table', 1),
(15, '2017_10_10_161450_add_59dcc7ca8c2de_relationships_to_region_table', 1),
(16, '2017_10_10_161654_create_1507641413_districts_table', 1),
(17, '2017_10_10_161655_add_59dcc8482caee_relationships_to_district_table', 1),
(18, '2017_10_10_162047_create_1507641646_chef_de_regions_table', 1),
(19, '2017_10_10_162048_add_59dcc930ac186_relationships_to_chefderegion_table', 1),
(20, '2017_10_10_162531_create_1507641930_prefectures_table', 1),
(21, '2017_10_10_162532_add_59dcca4c46ca7_relationships_to_prefecture_table', 1),
(22, '2017_10_10_162602_add_59dcca6a7ae27_relationships_to_prefecture_table', 1),
(23, '2017_10_10_163120_create_1507642279_liste_des_prefets_table', 1),
(24, '2017_10_10_163121_add_59dccba96a383_relationships_to_listedesprefet_table', 1),
(25, '2017_10_10_163439_create_1507642478_chef_districts_table', 1),
(26, '2017_10_10_163440_add_59dccc7088e1f_relationships_to_chefdistrict_table', 1),
(27, '2017_10_10_163708_update_1507642628_contact_companies_table', 1),
(28, '2017_10_10_163741_add_59dccd24cf956_relationships_to_chefdistrict_table', 1),
(29, '2017_10_10_163834_add_59dccd5a4f1d0_relationships_to_chefdistrict_table', 1),
(30, '2017_10_10_164024_update_1507642824_contacts_table', 1),
(31, '2017_10_10_164025_add_59dccdc9e6cb8_relationships_to_contact_table', 1),
(32, '2017_10_10_214032_update_1507660832_contact_companies_table', 1),
(33, '2017_10_10_214111_update_1507660871_contacts_table', 1),
(34, '2017_10_10_214112_add_59dd1448e9ce2_relationships_to_contact_table', 1),
(35, '2017_10_10_214137_add_59dd14618d8f1_relationships_to_chefderegion_table', 1),
(36, '2017_10_10_214202_add_59dd147a27489_relationships_to_listedesprefet_table', 1),
(37, '2017_10_10_214231_add_59dd14971ef50_relationships_to_chefdistrict_table', 1),
(38, '2017_10_11_133415_update_1507718055_contact_companies_table', 1),
(39, '2017_10_11_133613_add_59ddf41d684ca_relationships_to_region_table', 1),
(40, '2017_10_11_133700_add_59ddf44ce922f_relationships_to_district_table', 1),
(41, '2017_10_11_133753_add_59ddf4816d3d3_relationships_to_prefecture_table', 1),
(42, '2017_10_11_133924_add_59ddf4dbef755_relationships_to_chefderegion_table', 1),
(43, '2017_10_11_134409_create_1507718649_personnel_du_bngrcs_table', 1),
(44, '2017_10_11_134455_add_59ddf627cd424_relationships_to_chefderegion_table', 1),
(45, '2017_10_11_134652_update_1507718812_contact_companies_table', 1),
(46, '2017_10_12_095127_create_1507791087_etat_impressions_table', 1),
(47, '2017_10_17_105313_create_1508226792_contacts_regions_table', 1),
(48, '2017_10_17_105314_add_59e5b6eb109aa_relationships_to_contactsregion_table', 1),
(49, '2017_10_17_114226_create_1508229746_internal_notifications_table', 1),
(50, '2017_10_17_140327_update_1508238207_contacts_regions_table', 1),
(51, '2017_10_17_140330_add_59e5e3821b068_relationships_to_contactsregion_table', 1),
(52, '2017_10_17_150949_create_1508242188_contact_districts_table', 1),
(53, '2017_10_17_150950_add_59e5f30f1b008_relationships_to_contactdistrict_table', 1),
(54, '2017_10_17_151108_add_59e5f35cbd0c1_relationships_to_contactdistrict_table', 1),
(55, '2017_10_17_152444_create_1508243084_groupe_sectoriels_table', 1),
(56, '2017_10_17_153220_create_1508243539_liste_groupe_sectoriels_table', 1),
(57, '2017_10_17_153221_add_59e5f856c3817_relationships_to_listegroupesectoriel_table', 1),
(58, '2017_10_17_155037_create_1508244636_reunions_table', 1),
(59, '2017_10_17_155038_add_59e5fca095d05_relationships_to_reunion_table', 1),
(60, '2017_10_17_160055_add_59e5ff07cc0d3_relationships_to_reunion_table', 1),
(61, '2017_10_17_160217_add_59e5ff598da2f_relationships_to_reunion_table', 1),
(62, '2017_10_17_192011_create_59e5c2750b4cf_internal_notification_user_table', 1),
(63, '2017_10_17_232858_create_59e5fca0928e2_contact_company_reunion_table', 1),
(64, '2017_10_17_232859_create_59e5fca0948c4_personnel_du_bngrc_reunion_table', 1),
(65, '2017_10_18_124415_create_1508319854_user_actions_table', 1),
(66, '2017_10_18_124416_add_59e722707fb63_relationships_to_useraction_table', 1),
(67, '2017_10_18_124854_create_1508320134_task_statuses_table', 1),
(68, '2017_10_18_124858_create_1508320138_task_tags_table', 1),
(69, '2017_10_18_124902_create_1508320141_tasks_table', 1),
(70, '2017_10_18_124903_add_59e72390efd0d_relationships_to_task_table', 1),
(71, '2017_10_18_142713_update_1508326033_tasks_table', 1),
(72, '2017_10_18_142717_add_59e73a941f9f0_relationships_to_task_table', 1),
(73, '2017_10_18_142831_update_1508326111_tasks_table', 1),
(74, '2017_10_18_142832_add_59e73ae0df22b_relationships_to_task_table', 1),
(75, '2017_10_18_143039_update_1508326239_task_statuses_table', 1),
(76, '2017_10_18_143611_update_1508326571_assets_table', 1),
(77, '2017_10_18_143612_add_59e73caca01e8_relationships_to_asset_table', 1),
(78, '2017_10_18_144009_update_1508326809_assets_categories_table', 1),
(79, '2017_10_18_145552_update_1508327752_assets_table', 1),
(80, '2017_10_18_145553_add_59e741493b363_relationships_to_asset_table', 1),
(81, '2017_10_18_145714_update_1508327834_assets_statuses_table', 1),
(82, '2017_10_18_150032_update_1508328032_assets_histories_table', 1),
(83, '2017_10_18_150044_add_59e74267065b1_relationships_to_assetshistory_table', 1),
(84, '2017_10_18_150137_update_1508328097_assets_histories_table', 1),
(85, '2017_10_18_150138_add_59e742a2d863b_relationships_to_assetshistory_table', 1),
(86, '2017_10_18_152009_update_1508329209_assets_locations_table', 1),
(87, '2017_10_18_202935_create_59e72390eddab_task_task_tag_table', 1),
(88, '2017_10_19_102656_create_1508398016_type_risques_table', 1),
(89, '2017_10_19_103640_create_1508398599_risque_catastrophes_table', 1),
(90, '2017_10_19_103641_add_59e8560a8c666_relationships_to_risquecatastrophe_table', 1),
(91, '2017_10_19_103642_create_media_table', 1),
(92, '2017_10_19_110021_create_1508400020_missions_table', 1),
(93, '2017_10_19_110022_add_59e85b988b8c7_relationships_to_mission_table', 1),
(94, '2017_10_19_110601_create_1508400361_multiple_files_table', 1),
(95, '2017_10_19_111622_update_1508400982_risque_catastrophes_table', 1),
(96, '2017_10_19_111623_add_59e85f57be9d0_relationships_to_risquecatastrophe_table', 1),
(97, '2017_10_19_111726_update_1508401046_risque_catastrophes_table', 1),
(98, '2017_10_19_111727_add_59e85f9771369_relationships_to_risquecatastrophe_table', 1),
(99, '2017_10_19_154058_update_1508416858_assets_table', 1),
(100, '2017_10_19_154107_add_59e89d5faa0ba_relationships_to_asset_table', 1),
(101, '2017_10_19_154210_update_1508416930_assets_table', 1),
(102, '2017_10_19_154211_add_59e89da3dd2a5_relationships_to_asset_table', 1),
(103, '2017_10_19_184326_create_59e85b98868bc_mission_personnel_du_bngrc_table', 1),
(104, '2017_10_19_184327_create_59e85b9889651_asset_mission_table', 1),
(105, '2017_10_23_094958_add_59ed91178d0f4_relationships_to_asset_table', 1),
(106, '2017_10_23_095008_add_59ed9120dc43d_relationships_to_assetshistory_table', 1),
(107, '2017_10_23_095628_update_1508741788_assets_table', 1),
(108, '2017_10_23_095636_add_59ed92a0a6b0f_relationships_to_asset_table', 1),
(109, '2017_10_23_095759_update_1508741879_assets_table', 1),
(110, '2017_10_23_095801_add_59ed92f8f40ca_relationships_to_asset_table', 1),
(111, '2017_10_23_100009_update_1508742009_assets_categories_table', 1),
(112, '2017_10_23_100350_update_1508742230_assets_locations_table', 1),
(113, '2017_10_23_100653_update_1508742413_assets_statuses_table', 1),
(114, '2017_10_23_100731_update_1508742451_assets_locations_table', 1),
(115, '2017_10_23_101117_update_1508742677_assets_statuses_table', 1),
(116, '2017_10_23_102021_update_1508743221_assets_locations_table', 1),
(117, '2017_10_23_102505_update_1508743505_assets_histories_table', 1),
(118, '2017_10_23_102517_add_59ed99579f26d_relationships_to_assetshistory_table', 1),
(119, '2017_10_23_102616_update_1508743576_assets_histories_table', 1),
(120, '2017_10_23_102617_add_59ed9999d49f2_relationships_to_assetshistory_table', 1),
(121, '2017_10_23_120353_drop_59edb079cf5a059edb079cd7e6_asset_mission_table', 1),
(122, '2017_10_23_120358_add_59edb07d5406e_relationships_to_mission_table', 1),
(123, '2017_10_23_120453_drop_59edb0b5969ec59edb0b594ff1_asset_mission_table', 1),
(124, '2017_10_23_120455_add_59edb0b7c8a5d_relationships_to_mission_table', 1),
(125, '2017_10_23_195446_create_59edb07b005ce_asset_mission_table', 1),
(126, '2017_10_23_195546_create_59edb0b6bd322_asset_mission_table', 1),
(127, '2017_11_02_135523_update_1509623723_missions_table', 1),
(128, '2017_11_02_135933_drop_59fb08a57f45a_risque_catastrophes_table', 1),
(129, '2017_11_02_141054_create_1509624653_main_courantes_table', 1),
(130, '2017_11_02_141055_add_59fb0b506ada4_relationships_to_maincourante_table', 1),
(131, '2017_11_02_141546_add_59fb0c7180f3d_relationships_to_maincourante_table', 1),
(132, '2017_11_02_141652_add_59fb0cb47a911_relationships_to_maincourante_table', 1),
(133, '2017_11_02_142050_update_1509625250_main_courantes_table', 1),
(134, '2017_11_02_142051_add_59fb0da3b8f95_relationships_to_maincourante_table', 1),
(135, '2017_11_02_142211_drop_59fb0df38d308_multiple_files_table', 1),
(136, '2017_11_02_142611_add_59fb0ee317e3d_relationships_to_maincourante_table', 1),
(137, '2017_11_02_150800_update_1509628080_assets_table', 1),
(138, '2017_11_02_150811_add_59fb18b7065c0_relationships_to_asset_table', 1),
(139, '2017_11_02_150912_update_1509628152_assets_table', 1),
(140, '2017_11_02_150914_add_59fb18fa23505_relationships_to_asset_table', 1),
(141, '2017_11_16_124349_update_1510829029_personnel_du_bngrcs_table', 1),
(142, '2017_11_17_084342_add_5a0e851e1d846_relationships_to_region_table', 1),
(143, '2017_11_17_084818_create_1510901298_competance_formations_table', 1),
(144, '2017_11_17_085224_drop_5a0e8728120ea5a0e87280f249_competance_formation_personnel_du_bngrc_table', 1),
(145, '2017_11_17_174739_create_5a0e86e794fd0_competance_formation_personnel_du_bngrc_table', 1),
(146, '2017_11_17_174845_create_5a0e8729845e6_competance_formation_personnel_du_bngrc_table', 1),
(147, '2017_11_21_131733_create_1511263053_statut_missions_table', 1),
(148, '2017_11_21_132305_add_5a140c9910978_relationships_to_mission_table', 1),
(149, '2017_11_27_112337_update_1511774617_tasks_table', 1),
(150, '2017_11_27_112338_drop_5a1bd99aa5da25a1bd99aa3ff9_task_task_tag_table', 1),
(151, '2017_11_27_112347_add_5a1bd9a181c4c_relationships_to_task_table', 1),
(152, '2017_11_27_112445_update_1511774685_tasks_table', 1),
(153, '2017_11_27_112447_drop_5a1bd9e00055a5a1bd9dff17fb_personnel_du_bngrc_task_table', 1),
(154, '2017_11_27_112448_drop_5a1bd9e005b0b5a1bd9dff17fb_contact_company_task_table', 1),
(155, '2017_11_27_112452_add_5a1bd9e48e7aa_relationships_to_task_table', 1),
(156, '2017_11_27_141808_update_1511785088_tasks_table', 1),
(157, '2017_11_27_141809_add_5a1c02818fdb4_relationships_to_task_table', 1),
(158, '2017_11_27_204621_create_5a1bd99d8e14f_personnel_du_bngrc_task_table', 1),
(159, '2017_11_27_204622_create_5a1bd99d91c2e_contact_company_task_table', 1),
(160, '2017_11_27_204731_create_5a1bd9e309723_personnel_du_bngrc_task_table', 1),
(161, '2017_11_27_204732_create_5a1bd9e30e0d1_contact_company_task_table', 1),
(162, '2017_11_28_145320_update_1511873600_assets_table', 1),
(163, '2017_11_28_145329_add_5a1d5c45d567b_relationships_to_asset_table', 1),
(164, '2017_11_28_145422_update_1511873662_assets_table', 1),
(165, '2017_11_28_145424_add_5a1d5c801c368_relationships_to_asset_table', 1),
(166, '2017_11_28_152851_update_1511875731_personnel_du_bngrcs_table', 1),
(167, '2017_11_28_153027_update_1511875827_personnel_du_bngrcs_table', 1),
(168, '2017_11_29_091638_create_1511939798_unites_table', 1),
(169, '2017_11_29_092215_create_1511940134_liste_stocks_table', 1),
(170, '2017_11_29_092216_add_5a1e602953b65_relationships_to_listestock_table', 1),
(171, '2017_11_29_092902_create_1511940541_entrees_table', 1),
(172, '2017_11_29_092903_add_5a1e61c09da56_relationships_to_entree_table', 1),
(173, '2017_11_29_093536_create_1511940935_sorties_table', 1),
(174, '2017_11_29_093537_add_5a1e6349e36ae_relationships_to_sortie_table', 1),
(175, '2017_11_29_093717_update_1511941037_entrees_table', 1),
(176, '2017_11_29_093718_add_5a1e63ae55694_relationships_to_entree_table', 1),
(177, '2017_11_29_095236_create_1511941955_inventaires_table', 1),
(178, '2017_11_29_095237_add_5a1e67483a92c_relationships_to_inventaire_table', 1),
(179, '2017_11_29_095841_update_1511942321_assets_table', 1),
(180, '2017_11_29_095853_add_5a1e68b86b251_relationships_to_asset_table', 1),
(181, '2017_11_29_100324_update_1511942604_assets_table', 1),
(182, '2017_11_29_100336_add_5a1e69d376e25_relationships_to_asset_table', 1),
(183, '2017_11_29_100422_update_1511942662_assets_table', 1),
(184, '2017_11_29_100424_add_5a1e6a0863ee7_relationships_to_asset_table', 1),
(185, '2017_11_29_100657_update_1511942817_inventaires_table', 1),
(186, '2017_11_29_100709_add_5a1e6aa8594fb_relationships_to_inventaire_table', 1),
(187, '2017_11_29_100821_update_1511942901_inventaires_table', 1),
(188, '2017_11_29_100822_add_5a1e6af6d3c0e_relationships_to_inventaire_table', 1),
(189, '2017_11_29_101350_create_1511943230_type_taches_table', 1),
(190, '2017_11_29_101500_drop_5a1e6c840236c_main_courantes_table', 1),
(191, '2017_11_29_101531_drop_5a1e6ca3db56b_fichiers_table', 1),
(192, '2017_11_29_101556_drop_5a1e6cbc72368_impressions_table', 1),
(193, '2017_11_29_112107_update_1511947267_entrees_table', 1),
(194, '2017_11_29_112109_add_5a1e7c055e614_relationships_to_entree_table', 1),
(195, '2017_11_29_112157_update_1511947317_sorties_table', 1),
(196, '2017_11_29_112158_add_5a1e7c367cfa0_relationships_to_sortie_table', 1),
(197, '2017_11_29_112409_update_1511947449_inventaires_table', 1),
(198, '2017_11_29_112410_add_5a1e7cba6cdcb_relationships_to_inventaire_table', 1),
(199, '2017_11_29_125457_update_1511952897_tasks_table', 1),
(200, '2017_11_29_125508_add_5a1e920775c0c_relationships_to_task_table', 1),
(201, '2017_11_29_125952_update_1511953192_tasks_table', 1),
(202, '2017_11_29_130003_add_5a1e932e968fe_relationships_to_task_table', 1),
(203, '2017_11_29_130339_update_1511953419_tasks_table', 1),
(204, '2017_11_29_130350_add_5a1e94123cdf4_relationships_to_task_table', 1),
(205, '2017_11_29_130910_update_1511953750_tasks_table', 1),
(206, '2017_11_29_130912_add_5a1e9558385da_relationships_to_task_table', 1),
(207, '2017_11_29_191953_create_5a1e6748388c5_inventaire_personnel_du_bngrc_table', 1),
(208, '2017_10_19_162201_drop_59e8a6f9138ab_assets_histories_table', 2),
(209, '2017_10_23_094944_create_1508741384_assets_categories_table', 3),
(210, '2017_10_23_094948_create_1508741388_assets_statuses_table', 3),
(211, '2017_10_23_094952_create_1508741392_assets_locations_table', 3),
(212, '2017_10_23_094957_create_1508741396_assets_table', 3),
(213, '2017_10_23_095007_create_1508741406_assets_histories_table', 3),
(214, '2017_11_29_140918_update_1511957358_missions_table', 3),
(215, '2017_11_29_140920_add_5a1ea370375ac_relationships_to_mission_table', 3),
(216, '2017_12_08_094318_create_1512718998_etat_oms_table', 3),
(217, '2017_12_08_094625_create_1512719185_etat_rapport_oms_table', 3),
(218, '2017_12_08_100047_create_1512720046_oms_table', 3),
(219, '2017_12_08_100048_add_5a2a46b210e9a_relationships_to_om_table', 3),
(220, '2017_12_08_100433_drop_5a2a4791c89a45a2a4791c6eb7_contact_company_reunion_table', 3),
(221, '2017_12_08_100433_drop_5a2a4791ccf575a2a4791c6eb7_personnel_du_bngrc_reunion_table', 3),
(222, '2017_12_08_100434_drop_5a2a4792ed0be_reunions_table', 3),
(223, '2017_12_08_101408_create_1512720848_capacites_table', 3),
(224, '2017_12_08_103607_create_1512722166_absences_table', 3),
(225, '2017_12_08_103608_add_5a2a4ef921bc6_relationships_to_absence_table', 3),
(226, '2017_12_08_135338_update_1512734018_inventaires_table', 3),
(227, '2017_12_08_135348_add_5a2a7d48dbe91_relationships_to_inventaire_table', 3),
(228, '2017_12_08_135437_update_1512734077_inventaires_table', 3),
(229, '2017_12_08_135439_drop_5a2a7d7f18b8a5a2a7d7f16f79_asset_inventaire_table', 3),
(230, '2017_12_08_135441_add_5a2a7d816aa2e_relationships_to_inventaire_table', 3),
(231, '2017_12_08_194812_create_5a2a46b20e746_contact_company_om_table', 3),
(232, '2017_12_08_200435_create_5a2a4a83e09e4_capacite_personnel_du_bngrc_table', 3),
(233, '2017_12_08_234136_create_5a2a7d44185ef_asset_inventaire_table', 3),
(234, '2017_12_08_234236_create_5a2a7d80445f9_asset_inventaire_table', 3),
(235, '2017_12_11_081430_create_1512972870_statut_personnels_table', 4),
(236, '2017_12_11_081540_add_5a2e228c9ee78_relationships_to_personneldubngrc_table', 4),
(237, '2017_12_18_124142_create_1513593702_status_sorties_table', 5),
(238, '2017_12_18_131124_update_1513595484_sorties_table', 6),
(239, '2017_12_18_131146_add_5a37a268ee611_relationships_to_sortie_table', 6),
(240, '2017_12_18_131240_update_1513595560_sorties_table', 6),
(241, '2017_12_18_131242_add_5a37a2aa279d3_relationships_to_sortie_table', 6),
(242, '2017_12_18_134335_update_1513597415_liste_stocks_table', 7),
(243, '2017_12_18_134336_add_5a37a9e8a2a20_relationships_to_listestock_table', 7),
(244, '2017_12_19_084734_update_1513666054_sorties_table', 8),
(245, '2017_12_19_084755_add_5a38b611c7198_relationships_to_sortie_table', 8),
(246, '2017_12_19_085127_update_1513666287_sorties_table', 8),
(247, '2017_12_19_085147_add_5a38b6f9e0d58_relationships_to_sortie_table', 8),
(248, '2017_12_19_085231_update_1513666351_sorties_table', 8),
(249, '2017_12_19_085233_add_5a38b7310787d_relationships_to_sortie_table', 8),
(250, '2017_12_19_115214_update_1513677134_missions_table', 9),
(251, '2017_12_19_115216_drop_5a38e1504fa885a38e1504dd36_asset_mission_table', 9),
(252, '2017_12_19_115217_add_5a38e151994f5_relationships_to_mission_table', 9);

-- --------------------------------------------------------

--
-- Structure de la table `missions`
--

CREATE TABLE `missions` (
  `id` int(10) UNSIGNED NOT NULL,
  `objet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_deb` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `itineraire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-18.915647',
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '47.540394',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `stat_id` int(10) UNSIGNED DEFAULT NULL,
  `progression` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `missions`
--

INSERT INTO `missions` (`id`, `objet`, `location`, `date_deb`, `date_fin`, `piece_jointe`, `description`, `itineraire`, `latitude`, `longitude`, `created_at`, `updated_at`, `deleted_at`, `stat_id`, `progression`) VALUES
(1, 'Mission 01', 'Antananarivo', '2017-11-30 00:00:00', '2017-12-05 00:00:00', NULL, '<p>test</p>', NULL, '-21.79233569340442', '43.50413593124995', '2017-11-30 17:49:16', '2018-01-15 22:05:23', NULL, 3, '99'),
(2, 'Mise à jour PCR Antananarivo', 'Antananarivo', '2018-02-01 06:00:00', '2018-02-02 00:00:00', '1517738137-Annexe 4a. TDRs Evaluations conjointes - 2011.doc', '<p style=\"margin-left:14.2pt\"><strong><span style=\"font-family:trebuchet ms,helvetica,sans-serif\">Conform&eacute;ment &agrave; la convention &eacute;tablie entre BNGRC et PAM, d&eacute;crit dans le budget additionnel BFIDII-MOU BNGRC/PAM&nbsp;;</span></strong></p>\r\n\r\n<p style=\"margin-left:14.2pt\"><strong><span class=\"marker\"><u>Le compte de la rubrique logistique</u></span> pr&eacute;sent&eacute; dans le budget initial de &laquo;&nbsp;Mise &agrave; jour PCR Antananarivo &raquo; suivant convention suscit&eacute;e connaisse des &eacute;carts plus ou moins capricieux pour des raisons ci-apr&egrave;s&nbsp;:</strong></p>\r\n\r\n<p style=\"margin-left:14.2pt\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; La somme correspondante &agrave; la restauration a progress&eacute; de 06% par rapport au budget initial gr&acirc;ce &agrave; l&rsquo;augmentation extravagante des nombres des Participants (lire 75 au lieu de 50 personnes) &agrave; l&rsquo;atelier. Ceci est d&ucirc; &agrave; la mauvaise compr&eacute;hension des Responsables de la R&eacute;gion concern&eacute;e lors du partage des Invitations. Donc, il y a un &eacute;cart sup&eacute;rieur de <span style=\"font-family:trebuchet ms,helvetica,sans-serif\"><span class=\"marker\">490.500.Ar </span></span>par rapport au budget initial.</p>\r\n\r\n<p style=\"margin-left:14.2pt\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; La provision constitu&eacute;e par les autres rubriques, &agrave; part de l&rsquo;alourdissement des indemnit&eacute;s par les Maires du District d&#39;Antananarivo I,&nbsp;&nbsp; reste inchang&eacute;e et ne devrait plus faire l&rsquo;objet d&rsquo;ajustement ult&eacute;rieur.</p>', '1517738137-Capture.PNG', '-18.874069707149456', '47.51842134374999', '2017-12-05 20:24:06', '2018-02-04 09:12:04', NULL, 3, '100'),
(3, 'Mission 03', 'Tulear', '2017-12-08 00:00:00', '2017-12-16 00:00:00', NULL, '<p>desc</p>', NULL, '-25.283450586292645', '45.36510103124999', '2017-12-06 17:36:33', '2017-12-11 22:55:33', NULL, 1, '0'),
(4, 'Mission 04', 'Antananarivo', '2017-12-12 00:00:00', '2017-12-15 00:00:00', NULL, '<p>desc</p>', NULL, '-18.603566689360093', '47.16685884374999', '2017-12-06 17:55:00', '2017-12-06 17:55:52', NULL, 1, '0'),
(9, 'Montage site d\'hébergement à Toamasina I', 'Toamasina', '2018-01-17 00:00:00', '2018-01-18 00:00:00', NULL, '<p>test</p>', NULL, '-18.165693079574876', '49.32017915624999', '2018-01-17 00:43:11', '2018-02-02 21:05:50', NULL, 1, '0'),
(10, 'TEST', 'TEST', '2018-02-02 00:00:00', '2018-02-03 00:00:00', NULL, '<p>TEST</p>', NULL, '-18.915647', '47.540394', '2018-02-01 12:21:52', '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1, '0'),
(11, 'TEST', 'TEST', '2018-02-02 00:00:00', '2018-02-03 00:00:00', NULL, '<p>TEST</p>', NULL, '-18.915647', '47.540394', '2018-02-01 12:24:23', '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1, '0'),
(12, 'TEST', 'TEST', '2018-02-13 00:00:00', '2018-02-13 00:00:00', NULL, '<p>test</p>', NULL, '-18.019489462028545', '46.22203462499999', '2018-02-01 12:30:49', '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1, '0'),
(13, 'TEST', 'TEST', '2018-02-13 00:00:00', '2018-02-13 00:00:00', NULL, '<p>test</p>', NULL, '-18.019489462028545', '46.22203462499999', '2018-02-01 12:31:36', '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1, '0'),
(14, 'TEST', 'TEST', '2018-02-13 00:00:00', '2018-02-12 00:00:00', NULL, '<p>test</p>', NULL, '-18.915647', '47.540394', '2018-02-01 12:34:42', '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1, '0'),
(15, 'TEST', 'TEST', '2018-02-13 00:00:00', '2018-02-12 00:00:00', NULL, '<p>test</p>', NULL, '-18.915647', '47.540394', '2018-02-01 12:42:37', '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1, '0'),
(16, 'Survole Fianarantsoa', 'Fianarantsoa', '2018-02-03 00:00:00', '2018-02-08 00:00:00', NULL, '<p>description</p>', NULL, '-21.472501563795536', '47.07896821874999', '2018-02-02 15:17:22', '2018-02-02 15:17:22', NULL, 3, '100');

--
-- Déclencheurs `missions`
--
DELIMITER $$
CREATE TRIGGER `missions_before_insert` BEFORE INSERT ON `missions` FOR EACH ROW BEGIN


IF (NEW.latitude = null) 
THEN

SET NEW.latitude = -18.915647;
SET NEW.longitude = 47.540394;

END IF;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `missions_before_update` BEFORE UPDATE ON `missions` FOR EACH ROW BEGIN

IF (OLD.latitude = NULL) 
THEN

SET NEW.latitude = -18.915647;
SET NEW.longitude = 47.540394;

END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `mission_personnel_du_bngrc`
--

CREATE TABLE `mission_personnel_du_bngrc` (
  `mission_id` int(10) UNSIGNED DEFAULT NULL,
  `personnel_du_bngrc_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mission_personnel_du_bngrc`
--

INSERT INTO `mission_personnel_du_bngrc` (`mission_id`, `personnel_du_bngrc_id`) VALUES
(1, 2),
(1, 3),
(1, 59),
(2, 5),
(2, 7),
(3, 32),
(3, 51),
(3, 52),
(3, 56),
(3, 58),
(3, 59),
(4, 38),
(4, 57),
(4, 58),
(9, 59),
(10, 3),
(10, 22),
(11, 3),
(11, 22),
(12, 19),
(12, 40),
(13, 19),
(13, 40),
(14, 7),
(14, 9),
(15, 7),
(15, 9),
(16, 5),
(16, 17),
(16, 25),
(2, 59),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `oms`
--

CREATE TABLE `oms` (
  `id` int(10) UNSIGNED NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itineraire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depart` datetime DEFAULT NULL,
  `duree` int(10) UNSIGNED DEFAULT NULL,
  `fichier_om` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rapport_de_mission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remise_rapport` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mission_id` int(10) UNSIGNED DEFAULT NULL,
  `ordonnee_a_id` int(10) UNSIGNED DEFAULT NULL,
  `etat_id` int(10) UNSIGNED DEFAULT NULL,
  `etat_rapport_de_mission_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oms`
--

INSERT INTO `oms` (`id`, `destination`, `itineraire`, `depart`, `duree`, `fichier_om`, `rapport_de_mission`, `remise_rapport`, `created_at`, `updated_at`, `mission_id`, `ordonnee_a_id`, `etat_id`, `etat_rapport_de_mission_id`) VALUES
(1, 'Antananarivo', 'Antananarivo', '2018-02-01 00:00:00', 1, '1517591674-REQUETE MISSION  DECEMBRE_2017 OK.docx', '1517738490-fpIRMA.xlsx', '2018-02-02 09:00:00', '2017-12-11 22:20:25', '2018-02-04 09:01:30', 2, 59, 1, 1),
(2, 'Antananarivo', 'Antananarivo', '2018-02-02 00:00:00', 1, '1517738835-Draft 1 TDRs Lecons apprises Boeny et National (Pour METHODOLOGIE ATELIER).docx', '1517738835-CIN PARTICIPANTS ATELIER AMBOVOMBE.docx', '2018-02-03 00:00:00', '2018-02-04 09:07:15', '2018-02-04 09:07:15', 2, 5, 1, 1),
(3, 'Antananarivo', 'Antananarivo', '2018-02-01 08:00:00', 2, '1517739052-BAD 2017.xlsx', '1517739052-Copie de Budget revisé+ PAM(TAMATAVE).xlsx', '2018-02-05 00:00:00', '2018-02-04 09:10:52', '2018-02-04 09:10:52', 2, 7, 1, 1),
(4, 'Antananarivo', 'Antananarivo', '2018-02-02 00:00:00', 1, '1517739460-Dans le cadre de l.docx', '1517739460-Draft 1 TDRs Lecons apprises Boeny et National (Pour METHODOLOGIE ATELIER).docx', '2018-02-06 00:00:00', '2018-02-04 09:17:40', '2018-02-04 09:17:40', 2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnel_du_bngrcs`
--

CREATE TABLE `personnel_du_bngrcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_embauche` date DEFAULT NULL,
  `statut_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnel_du_bngrcs`
--

INSERT INTO `personnel_du_bngrcs` (`id`, `photo`, `fonction`, `nom_prenom`, `tel`, `tel2`, `email`, `adresse`, `created_at`, `updated_at`, `deleted_at`, `latitude`, `longitude`, `date_embauche`, `statut_id`) VALUES
(1, '1517577028-images.jpg', 'Secrétaire Exécutif', 'VENTY Thierry', '034 11 000 22', '032 00 111 66', NULL, NULL, '2017-10-12 16:54:56', '2018-02-04 08:45:48', NULL, '-22.430331009463643', '45.34312837499999', '2018-01-01', 2),
(2, NULL, 'Secrétaire Exécutif Adjoint', 'RAMBOLARSON Charles', '034 08 098 94', NULL, NULL, NULL, '2017-10-12 16:56:02', '2017-12-19 18:16:23', NULL, '-16.971696821898128', '44.50816743749999', NULL, 2),
(3, NULL, 'Conseiller Technique SE', 'Philippe RISSER', '032 07 254 28', NULL, NULL, NULL, '2017-10-12 16:56:59', '2017-12-19 18:16:30', NULL, '-18.915647', '47.540394', NULL, 3),
(4, NULL, 'Directeur de la Réponse aux urgences', 'RAZAFIARISON Jean Jugus', '034 13 921 69', NULL, NULL, NULL, '2017-10-12 16:58:00', '2017-12-19 18:16:41', NULL, '-18.915647000000007', '47.51842134374999', NULL, 4),
(5, NULL, 'Directeur (CERVO)', 'RAZAFIMANDIMBY John Heriniandry', '034 05 480 76', NULL, NULL, NULL, '2017-10-12 16:59:02', '2017-12-19 18:17:29', NULL, '-18.915647', '47.540394', NULL, 5),
(6, NULL, 'Directeur de la Réduction des Risques', 'RANDRIANJAFY Solange Mamy', '034 05 480 67', NULL, NULL, NULL, '2017-10-12 17:00:20', '2018-01-15 18:45:40', NULL, '-18.915647', '47.540394', NULL, 5),
(7, NULL, 'Coordonnateur des Projets', 'Faly Aritiana Fabien', '034 05 480 67', NULL, NULL, NULL, '2017-10-12 17:01:17', '2017-12-01 20:45:24', NULL, '-17.139747134430515', '47.65025728124999', NULL, NULL),
(8, NULL, 'Coordonnateur des Projets Adjoint', 'RAVELOJAONA Roméo Joseph', '034 61 789 51', NULL, NULL, NULL, '2017-10-12 17:02:25', '2017-10-12 17:02:25', NULL, '-18.915647', '47.540394', NULL, NULL),
(9, NULL, 'Chef de service de la Gestion Financière', 'RAMANANTSOA Gabriel', '034 05 480 82', NULL, NULL, NULL, '2017-10-12 17:03:31', '2017-12-01 20:45:35', NULL, '-12.875005662755456', '49.38609712499999', NULL, NULL),
(10, NULL, 'Chef comptable', 'RANDRIAMAHAFEHY Christine', '034 05 215 25', NULL, NULL, NULL, '2017-10-12 17:04:52', '2017-11-28 17:06:37', NULL, '-18.915647', '47.540394', NULL, NULL),
(11, NULL, 'Comptable', 'RAJAONERA Nirina Francis', '034 05 481 05', NULL, NULL, NULL, '2017-10-12 17:05:40', '2017-10-12 17:05:40', NULL, '-18.915647', '47.540394', NULL, NULL),
(12, NULL, 'Assistante SE', 'RANJATO RANARIVELO Irma', '034 01 479 21', NULL, NULL, NULL, '2017-10-12 17:06:28', '2017-10-12 17:06:28', NULL, '-18.915647', '47.540394', NULL, NULL),
(13, NULL, 'Standardiste', 'ANDRIATSIMISETRA Vololona Nirina', '034 05 480 80', NULL, NULL, NULL, '2017-10-12 17:14:38', '2017-10-12 17:14:38', NULL, '-18.915647', '47.540394', NULL, NULL),
(14, NULL, 'Secrétaire', 'RAHARIJAONANDRIANARILALA Domoina', '034 31 378 83', NULL, NULL, NULL, '2017-10-12 17:14:57', '2017-10-12 17:14:57', NULL, '-18.915647', '47.540394', NULL, NULL),
(15, NULL, 'Responsable Communication', 'VENANCE Melisa', '034 05 480 87', NULL, NULL, NULL, '2017-10-12 17:15:22', '2017-12-01 20:45:45', NULL, '-20.28178463632199', '48.44127290624999', NULL, NULL),
(16, NULL, 'Chargé d’Etudes', 'ATALLAH  Patrick Michael', '034 05 481 09', NULL, NULL, NULL, '2017-10-12 17:15:46', '2017-10-12 17:15:46', NULL, '-18.915647', '47.540394', NULL, NULL),
(17, NULL, 'Chargée d’Etudes', 'RAKOTOARIMANANA Harioelina Oniseheno', '034 05 407 06', NULL, NULL, NULL, '2017-10-12 17:16:03', '2017-10-12 17:16:03', NULL, '-18.915647', '47.540394', NULL, NULL),
(18, NULL, 'Assistante du Coordonnateur des Projets', 'RASOLONDRAIBE Carine Yvette Meng/Thue', '034 60 948 92', NULL, NULL, NULL, '2017-10-12 17:16:18', '2017-12-01 20:50:46', NULL, '-22.572430153923058', '47.69420259374999', NULL, NULL),
(19, NULL, 'Assistante du Coordonnateur des Projets', 'RAZAFINJANAHARY Laingo', '034 25 842 46', NULL, NULL, NULL, '2017-10-12 17:17:36', '2017-11-28 17:06:46', NULL, '-18.915647', '47.540394', NULL, NULL),
(20, NULL, 'Assistant du Coordonnateur des Projets', 'MAROHAO Thierry', '034 07 412 25', NULL, NULL, NULL, '2017-10-12 17:17:54', '2017-10-12 17:17:54', NULL, '-18.915647', '47.540394', NULL, NULL),
(21, NULL, 'Chef de service du Personnel', 'RANDRIANARISON Suzanne Zo Hanitriniony', '034 05 481 03', NULL, NULL, NULL, '2017-10-12 17:18:13', '2017-10-12 17:18:13', NULL, '-18.915647', '47.540394', NULL, NULL),
(22, NULL, 'Chef de Service de l’Information Education Communication', 'RAHOLINARIVO Solonavalona Paolo', '034 05 480 83', NULL, NULL, NULL, '2017-10-12 17:18:28', '2017-10-12 17:18:28', NULL, '-18.915647', '47.540394', NULL, NULL),
(23, NULL, 'Chef de Service de la Gestion des Stocks', 'BEMAHEFA Gervais', '034 07 412 27', NULL, NULL, NULL, '2017-10-12 17:18:43', '2017-10-12 17:18:43', NULL, '-18.915647', '47.540394', NULL, NULL),
(24, NULL, 'Chef de Service de Pré positionnement', 'RAKOTOMANGA Taciano', '034 05 480 85', NULL, NULL, NULL, '2017-10-12 17:18:59', '2017-10-12 17:18:59', NULL, '-18.915647', '47.540394', NULL, NULL),
(25, NULL, 'Chef de Service Logistique', 'RAMBOLAMANANA Eugène', '034 01 897 53', NULL, NULL, NULL, '2017-10-12 17:19:15', '2017-11-28 17:07:51', NULL, '-18.915647', '47.540394', NULL, NULL),
(26, NULL, 'Médecin', 'RAMIARAMANANA Vololomboahangy Hanitra', '034 18 701 19', NULL, NULL, NULL, '2017-10-12 17:19:29', '2017-10-12 17:19:29', NULL, '-18.915647', '47.540394', NULL, NULL),
(27, NULL, 'Chef de service de Relèvement précoce', 'RAHAJASON Hermane Jean Verdit', '034 05 481 04', NULL, NULL, NULL, '2017-10-12 17:19:55', '2017-10-12 17:19:55', NULL, '-18.915647', '47.540394', NULL, NULL),
(28, NULL, 'Chef de Service de Réflexion et Orientation', 'RAONIVELO Andrianianja', '034 05 480 15', NULL, NULL, NULL, '2017-10-12 17:20:15', '2017-10-12 17:20:15', NULL, '-18.915647', '47.540394', NULL, NULL),
(29, NULL, 'Chef de Service des Etudes et de Veille', 'ANDRIAMIRADO Lalah Christian', '034 05 480 06', NULL, NULL, NULL, '2017-10-12 17:20:33', '2017-10-12 17:20:33', NULL, '-18.915647', '47.540394', NULL, NULL),
(30, NULL, 'Chef de Service des Interventions et des Réponses aux Urgences', 'ANDRIAMASINORO Samuel Mamy', '034 05 480 71', NULL, NULL, NULL, '2017-10-12 17:20:51', '2017-10-12 17:20:51', NULL, '-18.915647', '47.540394', NULL, NULL),
(31, NULL, 'Chef de Service de la Prévention des Risques et Catastrophes', 'ROVA NAIVOMANANA Lucia Aimé', '034 99 704 77', NULL, NULL, NULL, '2017-10-12 17:21:11', '2017-10-12 17:21:11', NULL, '-18.915647', '47.540394', NULL, NULL),
(32, NULL, 'Chef de Centre Radio BLU', 'RALAIVAO Etienne', '034 17 899 69', NULL, NULL, NULL, '2017-10-12 17:21:29', '2017-10-12 17:21:29', NULL, '-18.915647', '47.540394', NULL, NULL),
(33, NULL, 'Chef de Division Transit', 'ANDRIANOELINA Hary Manda', '034 04 321 08', NULL, NULL, NULL, '2017-10-12 17:21:44', '2017-10-12 17:21:44', NULL, '-18.915647', '47.540394', NULL, NULL),
(34, NULL, 'Responsable  Parc auto', 'RAKOTONARIVO Hajamanana Arnaud', '034 05 480 71', NULL, NULL, NULL, '2017-10-12 17:22:06', '2017-10-12 17:22:06', NULL, '-18.915647', '47.540394', NULL, NULL),
(35, NULL, 'Gestionnaire de stocks', 'RANDRIANTAHIANA Serge Bienvenu', '034 86476 60', NULL, NULL, NULL, '2017-10-12 17:22:24', '2017-11-28 17:07:40', NULL, '-18.915647', '47.540394', NULL, NULL),
(36, NULL, 'Comptable des matières', 'LOMOTSY Giraldot', '034 05 293 26', NULL, NULL, NULL, '2017-10-12 17:22:38', '2017-10-12 17:22:38', NULL, '-18.915647', '47.540394', NULL, NULL),
(37, NULL, 'Gestionnaire des bases des données et multimédia', 'RAKOTOASIMBOLA Nasandratriniaina', '034 05 481 06', NULL, NULL, NULL, '2017-10-12 17:22:54', '2017-10-12 17:22:54', NULL, '-18.915647', '47.540394', NULL, NULL),
(38, NULL, 'Chef de Division Documentation Etudes et Veille', 'RAKOTOMANDRINDRA Pascal Fetra Nirina', '034 05 480 45', NULL, NULL, NULL, '2017-10-12 17:23:09', '2017-11-28 17:07:12', NULL, '-18.915647', '47.540394', NULL, NULL),
(39, NULL, 'Assistant technique en analyse des données spatiales', 'RANOELIARIVAO Tsirihasina Sitraka', '034 60 737 59', NULL, NULL, NULL, '2017-10-12 17:23:27', '2017-11-28 17:06:55', NULL, '-18.915647', '47.540394', NULL, NULL),
(40, NULL, 'Assistant technique Informatique', 'RANDRIANANTENAINA Fanomezantsoa Hajaniaina', '034 12 589 92', NULL, NULL, NULL, '2017-10-12 17:23:43', '2017-10-12 17:23:43', NULL, '-18.915647', '47.540394', NULL, NULL),
(41, NULL, 'Assistant du Directeur de la Réduction des Risques', 'RASOLOARINJAKA Haja', '034 07 412 15', NULL, NULL, NULL, '2017-10-12 17:24:00', '2017-10-12 17:24:00', NULL, '-18.915647', '47.540394', NULL, NULL),
(42, NULL, 'Administrateur  Systèmes et Réseaux', '42	LAHIMANJAKA Miora Thomas Juprinçica', '034 49 556 04', NULL, NULL, NULL, '2017-10-12 17:24:17', '2017-10-12 17:24:17', NULL, '-18.915647', '47.540394', NULL, NULL),
(43, NULL, 'Réceptionniste', 'RAJAONARIVELO Natacha', '034 61 473 13', NULL, NULL, NULL, '2017-10-12 17:24:33', '2017-12-01 20:51:04', NULL, '-20.549486618576548', '44.26646821874999', NULL, NULL),
(44, NULL, 'Sécurité', 'TSILIVANDRAINY Joseph', '034 05 480 52', NULL, NULL, NULL, '2017-10-12 17:24:53', '2017-10-12 17:24:53', NULL, '-18.915647', '47.540394', NULL, NULL),
(45, NULL, 'Sécurité', 'RAKOTOMALALA  Hasindrazana Tofotra', '032 53 941 77', NULL, NULL, NULL, '2017-10-12 17:25:09', '2017-10-12 17:25:09', NULL, '-18.915647', '47.540394', NULL, NULL),
(46, NULL, 'Sécurité', 'NIRINANDRASANA Hajalalaina Roberto', '034 58 757 68', NULL, NULL, NULL, '2017-10-12 17:25:23', '2017-10-12 17:25:23', NULL, '-18.915647', '47.540394', NULL, NULL),
(47, NULL, 'Magasinier', 'RANDRIANANTENAINA Delphin', '034 61 835 49', NULL, NULL, NULL, '2017-10-12 17:25:39', '2017-10-12 17:25:39', NULL, '-18.915647', '47.540394', NULL, NULL),
(48, NULL, 'Femme de ménage', 'RAZAFINDRATSARA Lucie', '034 05 480 49', NULL, NULL, NULL, '2017-10-12 17:25:55', '2017-10-12 17:25:55', NULL, '-18.915647', '47.540394', NULL, NULL),
(49, NULL, 'Technicien de surface', 'RANDRIANASOLO Jocelyn', '034 60 707 47', NULL, NULL, NULL, '2017-10-12 17:26:15', '2017-11-28 17:07:19', NULL, '-18.915647', '47.540394', NULL, NULL),
(50, NULL, 'Cuisinière', 'RAHAINGOARISOA Yvonne', '034 05 293 25', NULL, NULL, NULL, '2017-10-12 17:26:34', '2017-10-12 17:26:34', NULL, '-18.915647', '47.540394', NULL, NULL),
(51, NULL, 'Cuisinière', 'RAZAFINDRATSARA Marie Gorette', '034 05 480 51', NULL, NULL, NULL, '2017-10-12 17:26:50', '2017-10-12 17:26:50', NULL, '-18.915647', '47.540394', NULL, NULL),
(52, NULL, 'Vaguemestre', 'RANDRIATSOHAVINA Ratovelo', '034 05 481 01', NULL, NULL, NULL, '2017-10-12 17:27:11', '2017-10-12 17:27:11', NULL, '-18.915647', '47.540394', NULL, NULL),
(53, NULL, 'Chauffeur', 'RAZANADRAKOTO Célestin', '034 05 480 62', NULL, NULL, NULL, '2017-10-12 17:27:25', '2017-10-12 17:27:25', NULL, '-18.915647', '47.540394', NULL, NULL),
(54, NULL, 'Chauffeur', 'RANDRIANJAFY Bruno', '034 52 751 61', NULL, NULL, NULL, '2017-10-12 17:27:43', '2017-10-12 17:27:43', NULL, '-18.915647', '47.540394', NULL, NULL),
(55, NULL, 'Chauffeur', 'RAKOTONANDRASANA Jean Fidèle', '034 05 480 48', NULL, NULL, NULL, '2017-10-12 17:28:10', '2017-10-12 17:28:10', NULL, '-18.915647', '47.540394', NULL, NULL),
(56, NULL, 'Chauffeur', 'VERA BRILLANT Jean Claude', '034 05 480 35', NULL, NULL, NULL, '2017-10-12 17:28:28', '2017-11-28 17:07:31', NULL, '-18.915647', '47.540394', NULL, NULL),
(57, NULL, 'Chauffeur', 'LAHESAMBETSARA Clément', '034 52 857 78', NULL, NULL, NULL, '2017-10-12 17:28:43', '2017-10-12 17:28:43', NULL, '-18.915647', '47.540394', NULL, NULL),
(58, NULL, 'Chauffeur', 'RAKOTONDRAIBE Haja Haritoky', '034 10 336 89', NULL, NULL, NULL, '2017-10-12 17:29:00', '2017-10-12 17:29:00', NULL, '-18.915647', '47.540394', NULL, NULL),
(59, '1508374180-fa.jpg', 'Stagiaire en informatique', 'Rahajanirainy Faniry', '0342862700', NULL, 'rhjfah@gmail.com', 'Ampefiloha', '2017-10-18 22:49:40', '2018-02-04 09:28:19', NULL, '-18.832482097148507', '47.56236665624999', '2018-02-04', 4);

-- --------------------------------------------------------

--
-- Structure de la table `personnel_du_bngrc_task`
--

CREATE TABLE `personnel_du_bngrc_task` (
  `personnel_du_bngrc_id` int(10) UNSIGNED DEFAULT NULL,
  `task_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnel_du_bngrc_task`
--

INSERT INTO `personnel_du_bngrc_task` (`personnel_du_bngrc_id`, `task_id`) VALUES
(3, 3),
(4, 3),
(6, 3),
(5, 6),
(27, 6),
(28, 6),
(5, 7),
(26, 7),
(35, 8),
(39, 8),
(57, 8),
(59, 8),
(4, 9),
(26, 9),
(27, 9),
(29, 9),
(37, 10),
(1, 2),
(3, 2),
(6, 2),
(59, 2),
(1, 11),
(2, 11),
(3, 11),
(4, 11),
(5, 11),
(6, 11),
(22, 11),
(34, 11),
(32, 12),
(34, 12),
(54, 12),
(55, 12),
(58, 12),
(22, 13),
(47, 13),
(57, 13),
(4, 14),
(28, 14),
(30, 14),
(31, 14);

-- --------------------------------------------------------

--
-- Structure de la table `prefectures`
--

CREATE TABLE `prefectures` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `region_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Antananarivo', '2017-10-11 20:17:40', '2017-10-11 20:17:40', NULL),
(2, 'Antsiranana', '2017-10-11 20:17:52', '2017-10-11 20:17:52', NULL),
(3, 'Fianarantsoa', '2017-10-11 20:18:02', '2017-10-11 20:18:02', NULL),
(4, 'Mahajanga', '2017-10-11 20:18:16', '2017-10-11 20:18:16', NULL),
(5, 'Tamatave', '2017-10-11 20:18:26', '2017-10-11 20:18:26', NULL),
(6, 'Tuléar', '2017-10-11 20:18:40', '2017-10-11 20:18:40', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `province_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `province_id`) VALUES
(1, 'Diana', '2017-10-11 20:22:10', '2017-10-11 20:22:10', NULL, 2),
(2, 'Savaa', '2017-10-11 20:22:10', '2017-10-11 20:22:10', NULL, 2),
(3, 'Itasy', '2017-10-11 20:23:01', '2017-10-11 20:23:01', NULL, 1),
(4, 'Analamanga', '2017-10-11 20:23:01', '2017-10-11 20:23:01', NULL, 1),
(5, 'Vakinankaratra', '2017-10-11 20:23:01', '2017-10-11 20:23:01', NULL, 1),
(6, 'Bongolava', '2017-10-11 20:23:02', '2017-10-11 20:23:02', NULL, 1),
(7, 'Sofia', '2017-10-11 20:23:39', '2017-10-11 20:23:39', NULL, 4),
(8, 'Boeny', '2017-10-11 20:23:39', '2017-10-11 20:23:39', NULL, 4),
(9, 'Betsiboka', '2017-10-11 20:23:39', '2017-10-11 20:23:39', NULL, 4),
(10, 'Melaky', '2017-10-11 20:23:39', '2017-10-11 20:23:39', NULL, 4),
(11, 'Alaotra-Mangoro', '2017-10-11 20:24:21', '2017-10-11 20:24:21', NULL, 5),
(12, 'Atsinanana', '2017-10-11 20:24:21', '2017-10-11 20:24:21', NULL, 5),
(13, 'Analanjirofo', '2017-10-11 20:24:21', '2017-10-11 20:24:21', NULL, 5),
(14, 'Amoron\'i Mania', '2017-10-11 20:25:19', '2017-10-11 20:25:19', NULL, 3),
(15, 'Haute Matsiatra', '2017-10-11 20:25:19', '2017-10-11 20:25:19', NULL, 3),
(16, 'Vatovavy-Fitovinany', '2017-10-11 20:25:19', '2017-10-11 20:25:19', NULL, 3),
(17, 'Atsimo-Atsinanana', '2017-10-11 20:25:19', '2017-10-11 20:25:19', NULL, 3),
(18, 'Ihorombe', '2017-10-11 20:25:19', '2017-10-11 20:25:19', NULL, 3),
(19, 'Menabe', '2017-10-11 20:26:04', '2017-10-11 20:26:04', NULL, 6),
(20, 'Atsimo-Andrefana', '2017-10-11 20:26:04', '2017-10-11 20:26:04', NULL, 6),
(21, 'Androy', '2017-10-11 20:26:04', '2017-10-11 20:26:04', NULL, 6),
(22, 'Anôsy', '2017-10-11 20:26:04', '2017-10-11 20:26:04', NULL, 6);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrator (can create other users)', '2017-11-29 21:28:01', '2017-11-29 21:28:01'),
(2, 'Simple user', '2017-11-29 21:28:01', '2017-11-29 21:28:01'),
(3, 'visiteur', '2017-11-29 21:28:01', '2017-11-29 21:28:01'),
(4, 'Main courante', '2017-11-29 21:28:01', '2017-11-29 21:28:01');

-- --------------------------------------------------------

--
-- Structure de la table `sorties`
--

CREATE TABLE `sorties` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantite` double(15,2) DEFAULT NULL,
  `unite` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motif` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stock_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `dateheurfin` date DEFAULT NULL,
  `reponsable_sortie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parsonnel_id` int(10) UNSIGNED DEFAULT NULL,
  `mission_id` int(10) UNSIGNED DEFAULT NULL,
  `statut_id` int(10) UNSIGNED DEFAULT NULL,
  `location_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_latitude` double NOT NULL,
  `location_longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sorties`
--

INSERT INTO `sorties` (`id`, `quantite`, `unite`, `motif`, `created_at`, `updated_at`, `stock_id`, `deleted_at`, `date`, `dateheurfin`, `reponsable_sortie`, `parsonnel_id`, `mission_id`, `statut_id`, `location_address`, `location_latitude`, `location_longitude`) VALUES
(2, 200.00, 'Kgs', 'test', '2017-11-30 17:40:46', '2018-02-04 09:25:55', 1, NULL, '2017-11-30 16:00:00', NULL, 'Mr', 59, 2, 5, 'Ihosy, Fianarantsoa Province, Madagascar', -22.4008873, 46.12790199999995),
(3, 1.00, 'Pièces', 'test 02', '2017-12-19 18:29:23', '2018-02-04 09:26:07', 3, NULL, '2017-12-12 00:00:00', NULL, 'Resp 1', 41, 2, 1, 'Antananarivo, Antananarivo Province, Madagascar', -18.8791902, 47.50790549999999);

--
-- Déclencheurs `sorties`
--
DELIMITER $$
CREATE TRIGGER `sorties_before_delete` BEFORE DELETE ON `sorties` FOR EACH ROW BEGIN

UPDATE liste_stocks SET quantite = quantite + OLD.quantite WHERE id = OLD.stock_id;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `sorties_before_insert` BEFORE INSERT ON `sorties` FOR EACH ROW BEGIN

DECLARE unites_id INT;
DECLARE unite VARCHAR(50);

SELECT unite_id INTO unites_id FROM liste_stocks WHERE id = NEW.stock_id;
SELECT nom INTO unite FROM unites WHERE id = unites_id;
SET NEW.unite = unite;

UPDATE liste_stocks SET quantite = quantite - NEW.quantite WHERE id = NEW.stock_id;



END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `sorties_before_update` BEFORE UPDATE ON `sorties` FOR EACH ROW BEGIN

DECLARE unites_id INT;
DECLARE unite VARCHAR(50);

SELECT unite_id INTO unites_id FROM liste_stocks WHERE id = NEW.stock_id;
SELECT nom INTO unite FROM unites WHERE id = unites_id;
SET NEW.unite = unite;

UPDATE liste_stocks SET quantite = (quantite + OLD.quantite) - NEW.quantite WHERE id = OLD.stock_id;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `status_sorties`
--

CREATE TABLE `status_sorties` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `status_sorties`
--

INSERT INTO `status_sorties` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'En attente', '2017-12-18 20:59:53', '2017-12-18 20:59:53'),
(2, 'Rendu', '2017-12-18 21:00:00', '2017-12-18 21:00:00'),
(3, 'Irréparable', '2017-12-18 21:00:28', '2017-12-18 21:00:28'),
(4, 'En panne', '2017-12-18 21:00:36', '2017-12-18 21:00:36'),
(5, 'Définitive', '2017-12-18 21:35:09', '2017-12-19 17:17:01');

-- --------------------------------------------------------

--
-- Structure de la table `statut_missions`
--

CREATE TABLE `statut_missions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statut_missions`
--

INSERT INTO `statut_missions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'En attente', '2017-11-29 22:39:48', '2017-11-29 22:39:48'),
(2, 'En cours', '2017-11-29 22:39:56', '2017-11-29 22:39:56'),
(3, 'Terminée', '2017-11-29 22:40:18', '2017-11-29 22:40:18'),
(4, 'Annulée', '2017-11-29 22:40:28', '2017-11-29 22:40:28');

-- --------------------------------------------------------

--
-- Structure de la table `statut_personnels`
--

CREATE TABLE `statut_personnels` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statut_personnels`
--

INSERT INTO `statut_personnels` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Disponible', '2017-12-11 19:20:24', '2017-12-11 19:20:24'),
(2, 'En mission', '2017-12-11 19:20:31', '2017-12-11 19:20:31'),
(3, 'Absent', '2017-12-11 19:20:43', '2017-12-11 19:20:43'),
(4, 'Au bureau', '2017-12-11 19:21:05', '2017-12-11 19:21:05'),
(5, 'Occupé', '2017-12-19 18:17:18', '2017-12-19 18:17:18');

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `heur` time NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `mission_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `attachment`, `due_date`, `created_at`, `updated_at`, `status_id`, `user_id`, `deleted_at`, `heur`, `type_id`, `mission_id`) VALUES
(2, 'Transport du personnel', 'Description de la tache transport du personnel', '1512603166-favicon.jpg', '2017-12-05', '2017-11-30 17:57:17', '2018-02-03 09:24:23', 3, 59, NULL, '13:00:00', 1, 1),
(3, 'Remise des produits', 'test', NULL, '2017-12-12', '2017-12-01 16:59:11', '2017-12-11 18:31:17', 3, 59, NULL, '08:00:00', 1, 1),
(4, 'Installation materiels', 'install', NULL, '2018-02-28', '2017-12-01 17:00:56', '2018-02-02 11:47:47', 3, 59, NULL, '02:00:00', 1, 1),
(6, 'Installation site hebergement', 'descrip', NULL, '2018-02-01', '2017-12-05 20:35:06', '2018-02-04 08:49:56', 3, 59, NULL, '09:00:00', 1, 2),
(7, 'objet 1', 'desc', NULL, '2018-02-02', '2017-12-05 20:37:34', '2018-02-04 08:50:38', 3, 3, NULL, '09:00:00', 1, 2),
(8, 'PCN', 'DESC', NULL, '2017-12-11', '2017-12-11 23:13:20', '2017-12-11 23:13:48', 3, 59, NULL, '11:00:00', 2, NULL),
(9, 'Sortie personnel', 'test', NULL, '2018-02-08', '2018-02-02 12:02:26', '2018-02-02 12:02:26', 3, 1, NULL, '12:00:00', 3, NULL),
(10, 'Voyage vers Fianarantsoa', 'Transport personnel et materiels vers Fianaratsoa', NULL, '2018-02-01', '2018-02-02 15:19:11', '2018-02-02 15:23:11', 3, 59, NULL, '09:00:00', 1, 16),
(11, 'Formation en risques chimiques', 'Formation en risques chimiques a Toamasina', NULL, '2018-02-02', '2018-02-04 08:25:39', '2018-02-04 08:41:08', 3, 19, NULL, '09:00:00', 3, NULL),
(12, 'Conférence/ Cours sur la GRC', NULL, NULL, '2018-02-07', '2018-02-04 08:29:15', '2018-02-04 08:29:15', 3, 39, NULL, '10:00:00', 2, NULL),
(13, 'Information et de plaidoyers sur la situation de la peste à Madagascar', 'Reunion d\'information et de plaidoyers sur la situation de la peste à Madagascar.', NULL, '2018-02-10', '2018-02-04 08:32:16', '2018-02-04 08:32:16', 3, 20, NULL, '14:00:00', 2, NULL),
(14, 'Atelier de renforcement de capacités en Changement Climatique et Planification Territoriale', NULL, NULL, '2018-02-18', '2018-02-04 08:34:59', '2018-02-04 08:34:59', 3, 59, NULL, '08:00:00', 2, NULL);

--
-- Déclencheurs `tasks`
--
DELIMITER $$
CREATE TRIGGER `tasks_after_delete` AFTER DELETE ON `tasks` FOR EACH ROW BEGIN



DECLARE nbr_task INT;
DECLARE nbr_task_term INT;
DECLARE nbr_task_cours INT;
DECLARE pourcentage_par_tache INT;

DECLARE pourcentage_par_tache_term INT;
DECLARE pourcentage_par_tache_cours INT;
DECLARE statu_tache VARCHAR(50);

IF (OLD.type_id = 1) 
THEN

SELECT count(*) INTO nbr_task FROM tasks WHERE mission_id = OLD.mission_id;
SET pourcentage_par_tache = 100 / nbr_task;

SELECT count(*) INTO nbr_task_term FROM tasks WHERE mission_id = OLD.mission_id && status_id = 3 ;
SET pourcentage_par_tache_term = pourcentage_par_tache * nbr_task_term;

SELECT count(*) INTO nbr_task_cours FROM tasks WHERE mission_id = OLD.mission_id && status_id = 2 ;
SET pourcentage_par_tache_cours = (pourcentage_par_tache / 2) * nbr_task_cours ;

UPDATE missions SET progression = pourcentage_par_tache_term + pourcentage_par_tache_cours WHERE id = OLD.mission_id ;

END IF;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tasks_after_insert` AFTER INSERT ON `tasks` FOR EACH ROW BEGIN
DECLARE nbr_task INT;
DECLARE nbr_task_term INT;
DECLARE nbr_task_cours INT;
DECLARE pourcentage_par_tache INT;

DECLARE pourcentage_par_tache_term INT;
DECLARE pourcentage_par_tache_cours INT;
DECLARE statu_tache VARCHAR(50);

IF (NEW.type_id = 1) 
THEN

SELECT count(*) INTO nbr_task FROM tasks WHERE mission_id = NEW.mission_id;
SET pourcentage_par_tache = 100 / nbr_task;

SELECT count(*) INTO nbr_task_term FROM tasks WHERE mission_id = NEW.mission_id && status_id = 3 ;
SET pourcentage_par_tache_term = pourcentage_par_tache * nbr_task_term;

SELECT count(*) INTO nbr_task_cours FROM tasks WHERE mission_id = NEW.mission_id && status_id = 2 ;
SET pourcentage_par_tache_cours = (pourcentage_par_tache / 2) * nbr_task_cours ;

UPDATE missions SET progression = pourcentage_par_tache_term + pourcentage_par_tache_cours WHERE id = NEW.mission_id  ;

END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tasks_after_update` AFTER UPDATE ON `tasks` FOR EACH ROW BEGIN
DECLARE nbr_task INT;
DECLARE nbr_task_term INT;
DECLARE nbr_task_cours INT;
DECLARE pourcentage_par_tache INT;

DECLARE pourcentage_par_tache_term INT;
DECLARE pourcentage_par_tache_cours INT;
DECLARE statu_tache VARCHAR(50);

IF (NEW.type_id = 1) 
THEN

SELECT count(*) INTO nbr_task FROM tasks WHERE mission_id = NEW.mission_id;
SET pourcentage_par_tache = 100 / nbr_task;

SELECT count(*) INTO nbr_task_term FROM tasks WHERE mission_id = NEW.mission_id && status_id = 3 ;
SET pourcentage_par_tache_term = pourcentage_par_tache * nbr_task_term;

SELECT count(*) INTO nbr_task_cours FROM tasks WHERE mission_id = NEW.mission_id && status_id = 2 ;
SET pourcentage_par_tache_cours = (pourcentage_par_tache / 2) * nbr_task_cours ;

UPDATE missions SET progression = pourcentage_par_tache_term + pourcentage_par_tache_cours WHERE id = NEW.mission_id ;

END IF;


END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tasks_before_insert` BEFORE INSERT ON `tasks` FOR EACH ROW BEGIN



END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tasks_before_update` BEFORE UPDATE ON `tasks` FOR EACH ROW BEGIN



END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `task_statuses`
--

CREATE TABLE `task_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `task_statuses`
--

INSERT INTO `task_statuses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'En attente', '2017-11-29 21:28:01', '2017-11-30 18:07:36', NULL),
(2, 'En cours', '2017-11-29 21:28:01', '2017-11-30 18:07:44', NULL),
(3, 'Terminée', '2017-11-29 21:28:01', '2017-11-30 18:07:55', NULL),
(4, 'Annulé', '2017-11-30 18:08:02', '2017-11-30 18:08:08', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `task_tags`
--

CREATE TABLE `task_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `task_tags`
--

INSERT INTO `task_tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'faniry', '2017-12-05 18:56:32', '2017-12-05 18:56:32'),
(654, 'faniry', '2018-02-04 08:38:26', '2018-02-04 08:38:26'),
(655, 'faniry', '2018-02-04 08:41:31', '2018-02-04 08:41:31'),
(656, 'faniry', '2018-02-04 08:42:43', '2018-02-04 08:42:43'),
(657, 'faniry', '2018-02-04 08:46:43', '2018-02-04 08:46:43'),
(658, 'faniry', '2018-02-04 08:47:11', '2018-02-04 08:47:11'),
(659, 'faniry', '2018-02-04 08:48:18', '2018-02-04 08:48:18'),
(660, 'faniry', '2018-02-04 08:48:57', '2018-02-04 08:48:57'),
(661, 'faniry', '2018-02-04 08:51:17', '2018-02-04 08:51:17'),
(662, 'faniry', '2018-02-04 08:52:02', '2018-02-04 08:52:02'),
(663, 'faniry', '2018-02-04 08:52:37', '2018-02-04 08:52:37'),
(664, 'faniry', '2018-02-04 08:53:56', '2018-02-04 08:53:56'),
(665, 'faniry', '2018-02-04 08:55:38', '2018-02-04 08:55:38'),
(666, 'faniry', '2018-02-04 08:57:38', '2018-02-04 08:57:38'),
(667, 'faniry', '2018-02-04 08:58:30', '2018-02-04 08:58:30'),
(668, 'faniry', '2018-02-04 09:01:34', '2018-02-04 09:01:34'),
(669, 'faniry', '2018-02-04 09:12:04', '2018-02-04 09:12:04'),
(670, 'faniry', '2018-02-04 09:13:32', '2018-02-04 09:13:32'),
(671, 'faniry', '2018-02-04 09:17:55', '2018-02-04 09:17:55'),
(672, 'faniry', '2018-02-04 09:18:35', '2018-02-04 09:18:35'),
(673, 'faniry', '2018-02-04 09:21:11', '2018-02-04 09:21:11'),
(674, 'faniry', '2018-02-04 09:22:00', '2018-02-04 09:22:00'),
(675, 'faniry', '2018-02-04 09:23:30', '2018-02-04 09:23:30'),
(676, 'faniry', '2018-02-04 09:24:35', '2018-02-04 09:24:35'),
(677, 'faniry', '2018-02-04 09:25:19', '2018-02-04 09:25:19'),
(678, 'faniry', '2018-02-04 09:26:11', '2018-02-04 09:26:11'),
(679, 'faniry', '2018-02-04 09:27:16', '2018-02-04 09:27:16'),
(680, 'faniry', '2018-02-04 09:28:57', '2018-02-04 09:28:57'),
(681, 'faniry', '2018-02-04 09:44:08', '2018-02-04 09:44:08'),
(682, 'faniry', '2018-02-04 09:46:29', '2018-02-04 09:46:29'),
(683, 'faniry', '2018-02-04 09:49:34', '2018-02-04 09:49:34'),
(684, 'faniry', '2018-02-04 09:50:02', '2018-02-04 09:50:02'),
(685, 'faniry', '2018-02-04 09:53:48', '2018-02-04 09:53:48'),
(686, 'faniry', '2018-02-04 09:54:27', '2018-02-04 09:54:27'),
(687, 'faniry', '2018-02-04 09:56:22', '2018-02-04 09:56:22'),
(688, 'faniry', '2018-02-04 09:58:47', '2018-02-04 09:58:47'),
(689, 'faniry', '2018-02-04 09:59:17', '2018-02-04 09:59:17'),
(690, 'faniry', '2018-02-04 10:03:58', '2018-02-04 10:03:58'),
(691, 'faniry', '2018-02-04 10:08:12', '2018-02-04 10:08:12'),
(692, 'faniry', '2018-02-04 10:11:12', '2018-02-04 10:11:12'),
(693, 'faniry', '2018-02-04 10:14:58', '2018-02-04 10:14:58'),
(694, 'faniry', '2018-02-04 10:43:00', '2018-02-04 10:43:00'),
(695, 'faniry', '2018-02-04 10:44:31', '2018-02-04 10:44:31'),
(696, 'faniry', '2018-02-04 15:50:24', '2018-02-04 15:50:24'),
(697, 'faniry', '2018-02-04 16:02:38', '2018-02-04 16:02:38'),
(698, 'faniry', '2018-02-04 16:03:02', '2018-02-04 16:03:02'),
(699, 'faniry', '2018-02-04 16:03:50', '2018-02-04 16:03:50'),
(700, 'faniry', '2018-02-04 16:05:06', '2018-02-04 16:05:06'),
(701, 'faniry', '2018-02-04 16:05:59', '2018-02-04 16:05:59'),
(702, 'faniry', '2018-02-04 16:09:22', '2018-02-04 16:09:22'),
(703, 'faniry', '2018-02-04 16:09:37', '2018-02-04 16:09:37'),
(704, 'faniry', '2018-02-04 16:10:30', '2018-02-04 16:10:30'),
(705, 'faniry', '2018-02-04 16:43:03', '2018-02-04 16:43:03'),
(706, 'faniry', '2018-02-04 16:43:50', '2018-02-04 16:43:50'),
(707, 'faniry', '2018-02-04 16:46:11', '2018-02-04 16:46:11'),
(708, 'faniry', '2018-02-04 16:46:40', '2018-02-04 16:46:40'),
(709, 'faniry', '2018-02-04 18:19:24', '2018-02-04 18:19:24'),
(710, 'faniry', '2018-02-04 18:22:23', '2018-02-04 18:22:23'),
(711, 'faniry', '2018-02-04 18:27:27', '2018-02-04 18:27:27'),
(712, 'faniry', '2018-02-04 18:39:44', '2018-02-04 18:39:44'),
(713, 'faniry', '2018-02-04 18:43:03', '2018-02-04 18:43:03'),
(714, 'faniry', '2018-02-05 15:30:33', '2018-02-05 15:30:33'),
(715, 'faniry', '2018-02-05 15:33:40', '2018-02-05 15:33:40'),
(716, 'faniry', '2018-02-05 15:52:53', '2018-02-05 15:52:53'),
(717, 'faniry', '2018-02-05 15:55:46', '2018-02-05 15:55:46'),
(718, 'faniry', '2018-02-05 15:59:42', '2018-02-05 15:59:42'),
(719, 'faniry', '2018-02-05 18:45:52', '2018-02-05 18:45:52'),
(720, 'faniry', '2018-02-05 18:48:39', '2018-02-05 18:48:39'),
(721, 'faniry', '2018-02-06 09:34:02', '2018-02-06 09:34:02'),
(722, 'faniry', '2018-02-06 09:36:22', '2018-02-06 09:36:22'),
(723, 'faniry', '2018-02-06 09:44:35', '2018-02-06 09:44:35'),
(724, 'faniry', '2018-02-06 09:44:55', '2018-02-06 09:44:55'),
(725, 'faniry', '2018-02-06 09:46:47', '2018-02-06 09:46:47'),
(726, 'faniry', '2018-02-06 09:48:27', '2018-02-06 09:48:27'),
(727, 'faniry', '2018-02-06 09:52:35', '2018-02-06 09:52:35'),
(728, 'faniry', '2018-02-06 09:53:39', '2018-02-06 09:53:39'),
(729, 'faniry', '2018-02-06 09:55:41', '2018-02-06 09:55:41'),
(730, 'faniry', '2018-02-06 09:57:18', '2018-02-06 09:57:18'),
(731, 'faniry', '2018-02-06 10:12:41', '2018-02-06 10:12:41'),
(732, 'faniry', '2018-02-07 13:49:30', '2018-02-07 13:49:30'),
(733, 'faniry', '2018-02-07 13:50:30', '2018-02-07 13:50:30'),
(734, 'faniry', '2018-02-07 13:50:53', '2018-02-07 13:50:53'),
(735, 'faniry', '2018-02-07 13:51:03', '2018-02-07 13:51:03'),
(736, 'faniry', '2018-02-08 05:25:31', '2018-02-08 05:25:31'),
(737, 'faniry', '2018-02-08 05:38:19', '2018-02-08 05:38:19'),
(738, 'faniry', '2018-02-08 05:42:50', '2018-02-08 05:42:50'),
(739, 'faniry', '2018-02-08 05:52:23', '2018-02-08 05:52:23'),
(740, 'faniry', '2018-02-08 06:06:32', '2018-02-08 06:06:32'),
(741, 'faniry', '2018-02-08 06:07:04', '2018-02-08 06:07:04'),
(742, 'faniry', '2018-02-08 06:07:30', '2018-02-08 06:07:30'),
(743, 'faniry', '2018-02-08 06:08:07', '2018-02-08 06:08:07'),
(744, 'faniry', '2018-02-08 06:08:49', '2018-02-08 06:08:49'),
(745, 'faniry', '2018-02-08 06:09:21', '2018-02-08 06:09:21'),
(746, 'faniry', '2018-02-08 06:10:21', '2018-02-08 06:10:21'),
(747, 'faniry', '2018-02-08 06:10:55', '2018-02-08 06:10:55'),
(748, 'faniry', '2018-02-08 06:11:53', '2018-02-08 06:11:53'),
(749, 'faniry', '2018-02-08 06:23:14', '2018-02-08 06:23:14'),
(750, 'faniry', '2018-02-08 06:26:07', '2018-02-08 06:26:07'),
(751, 'faniry', '2018-02-08 06:36:57', '2018-02-08 06:36:57'),
(752, 'faniry', '2018-03-06 21:37:39', '2018-03-06 21:37:39'),
(753, 'faniry', '2018-03-06 21:37:57', '2018-03-06 21:37:57'),
(754, 'faniry', '2018-03-06 21:38:00', '2018-03-06 21:38:00');

--
-- Déclencheurs `task_tags`
--
DELIMITER $$
CREATE TRIGGER `task_tags_before_insert` BEFORE INSERT ON `task_tags` FOR EACH ROW BEGIN

UPDATE tasks SET status_id = 1 WHERE due_date > CURDATE();
UPDATE tasks SET status_id = 2 WHERE due_date = CURDATE() ;
UPDATE tasks SET status_id = 3 WHERE due_date < CURDATE() ;

UPDATE missions SET stat_id = 2 WHERE progression > 0 && progression < 98;

UPDATE missions SET stat_id = 3 WHERE progression > 98;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `type_risques`
--

CREATE TABLE `type_risques` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_taches`
--

CREATE TABLE `type_taches` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_taches`
--

INSERT INTO `type_taches` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Mission', '2017-11-30 17:46:36', '2017-11-30 17:46:36'),
(2, 'Réunion', '2017-12-11 23:08:26', '2017-12-11 23:08:26'),
(3, 'Autre', '2017-11-30 17:47:00', '2017-11-30 17:47:00');

-- --------------------------------------------------------

--
-- Structure de la table `unites`
--

CREATE TABLE `unites` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `unites`
--

INSERT INTO `unites` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Kg', '2017-11-29 22:46:22', '2018-02-04 09:32:41'),
(2, 'Mètres', '2017-12-01 21:57:06', '2018-02-04 09:42:43'),
(3, 'Sacs', '2017-12-01 21:57:16', '2018-02-04 09:42:25'),
(4, 'Cartons', '2017-12-01 21:57:33', '2018-02-04 09:42:07'),
(5, 'Bouteille de 1L', '2017-12-06 19:58:10', '2017-12-06 19:58:10'),
(6, 'Litres', '2017-12-06 19:58:30', '2018-02-04 09:42:02'),
(7, 'Pièces', '2017-12-06 19:59:52', '2018-01-16 22:36:36');

--
-- Déclencheurs `unites`
--
DELIMITER $$
CREATE TRIGGER `unites_before_update` BEFORE UPDATE ON `unites` FOR EACH ROW BEGIN

UPDATE entrees SET unite = NEW.nom WHERE unite = OLD.nom;

UPDATE sorties SET unite = NEW.nom WHERE unite = OLD.nom;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Admin', 'admin@bngrc.com', '$2y$10$ZoPA5MBWRSFYyYcbwer93.hlsTfl6OWbWi4vZeRef4W65.mNWY3eW', '680DhlmIbHmOslk6JLiVVoyvjZLtBFp8ngvFaAYl0ayuc7HQvipFkanPXm29', '2017-11-29 21:28:02', '2018-02-01 10:14:37', 1),
(2, 'User 1', 'user@bngrc.com', '$2y$10$j3AJUFOnHsNcBrtwGcuDW.0sy./VRkvTpB57/JsNyattrmBvICbm6', 'Dr80w1nmSvBjUXZfxot1NJOVps6MnmAJCjLZsmDhJqO0KF8f7VCJOFS6kj4E', '2017-11-29 21:28:02', '2018-02-01 10:15:05', 2),
(3, 'Faniry', 'visiteur@bngrc.com', '$2y$10$WMygdRAxpO07UZD/vQL1z.ZuRm7mC7I7Y.SO0c/HFSgAztVTpV9fG', 'eh1aTvgx6U7RaU30UFRLqI9UQqMbsUJeGjknN1Lsd4722NZBzSNJU4UvT2QE', '2017-12-06 19:42:17', '2018-02-01 10:15:51', 3),
(4, 'faniry', 'rhjfah@gmail.com', '$2y$10$WsGm2pOKMT6yjyNmhnOJW.DKGXbrBgOj15pepfzBqDuYD9naRIRiq', NULL, '2018-02-01 12:20:25', '2018-02-01 12:20:25', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_actions`
--

CREATE TABLE `user_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_actions`
--

INSERT INTO `user_actions` (`id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`, `user_id`) VALUES
(454, 'created', 'contacts', 1, '2017-12-11 19:11:20', '2017-12-11 19:11:20', 1),
(455, 'created', 'statut_personnels', 1, '2017-12-11 19:20:24', '2017-12-11 19:20:24', 1),
(456, 'created', 'statut_personnels', 2, '2017-12-11 19:20:31', '2017-12-11 19:20:31', 1),
(457, 'created', 'statut_personnels', 3, '2017-12-11 19:20:43', '2017-12-11 19:20:43', 1),
(458, 'created', 'statut_personnels', 4, '2017-12-11 19:21:05', '2017-12-11 19:21:05', 1),
(459, 'updated', 'personnel_du_bngrcs', 1, '2017-12-11 20:03:48', '2017-12-11 20:03:48', 1),
(460, 'created', 'task_tags', 254, '2017-12-11 20:34:05', '2017-12-11 20:34:05', 1),
(461, 'created', 'task_tags', 255, '2017-12-11 20:34:11', '2017-12-11 20:34:11', 1),
(462, 'created', 'competance_formations', 1, '2017-12-11 20:36:19', '2017-12-11 20:36:19', 1),
(463, 'created', 'capacites', 1, '2017-12-11 20:45:09', '2017-12-11 20:45:09', 1),
(464, 'created', 'absences', 1, '2017-12-11 20:54:15', '2017-12-11 20:54:15', 1),
(465, 'updated', 'missions', 1, '2017-12-11 21:25:26', '2017-12-11 21:25:26', 1),
(466, 'updated', 'missions', 2, '2017-12-11 21:51:43', '2017-12-11 21:51:43', 1),
(467, 'updated', 'inventaires', 1, '2017-12-11 22:05:10', '2017-12-11 22:05:10', 1),
(468, 'updated', 'inventaires', 1, '2017-12-11 22:07:01', '2017-12-11 22:07:01', 1),
(469, 'created', 'oms', 1, '2017-12-11 22:20:26', '2017-12-11 22:20:26', 1),
(470, 'created', 'task_tags', 256, '2017-12-11 22:34:22', '2017-12-11 22:34:22', 1),
(471, 'created', 'task_tags', 257, '2017-12-11 22:34:26', '2017-12-11 22:34:26', 1),
(472, 'created', 'task_tags', 258, '2017-12-11 22:35:19', '2017-12-11 22:35:19', 1),
(473, 'created', 'task_tags', 259, '2017-12-11 22:35:22', '2017-12-11 22:35:22', 1),
(474, 'created', 'task_tags', 260, '2017-12-11 22:35:42', '2017-12-11 22:35:42', 1),
(475, 'created', 'task_tags', 261, '2017-12-11 22:35:45', '2017-12-11 22:35:45', 1),
(476, 'created', 'task_tags', 262, '2017-12-11 22:35:46', '2017-12-11 22:35:46', 1),
(477, 'created', 'task_tags', 263, '2017-12-11 22:35:49', '2017-12-11 22:35:49', 1),
(478, 'created', 'task_tags', 264, '2017-12-11 22:36:42', '2017-12-11 22:36:42', 1),
(479, 'created', 'task_tags', 265, '2017-12-11 22:36:45', '2017-12-11 22:36:45', 1),
(480, 'created', 'task_tags', 266, '2017-12-11 22:37:36', '2017-12-11 22:37:36', 1),
(481, 'created', 'task_tags', 267, '2017-12-11 22:37:38', '2017-12-11 22:37:38', 1),
(482, 'created', 'task_tags', 268, '2017-12-11 22:38:15', '2017-12-11 22:38:15', 1),
(483, 'created', 'task_tags', 269, '2017-12-11 22:38:18', '2017-12-11 22:38:18', 1),
(484, 'created', 'task_tags', 270, '2017-12-11 22:38:56', '2017-12-11 22:38:56', 1),
(485, 'created', 'task_tags', 271, '2017-12-11 22:38:59', '2017-12-11 22:38:59', 1),
(486, 'created', 'task_tags', 272, '2017-12-11 22:40:41', '2017-12-11 22:40:41', 1),
(487, 'created', 'task_tags', 273, '2017-12-11 22:40:43', '2017-12-11 22:40:43', 1),
(488, 'created', 'task_tags', 274, '2017-12-11 22:40:58', '2017-12-11 22:40:58', 1),
(489, 'created', 'task_tags', 275, '2017-12-11 22:41:00', '2017-12-11 22:41:00', 1),
(490, 'created', 'task_tags', 276, '2017-12-11 22:42:35', '2017-12-11 22:42:35', 1),
(491, 'created', 'task_tags', 277, '2017-12-11 22:42:37', '2017-12-11 22:42:37', 1),
(492, 'created', 'task_tags', 278, '2017-12-11 22:43:29', '2017-12-11 22:43:29', 1),
(493, 'created', 'task_tags', 279, '2017-12-11 22:43:31', '2017-12-11 22:43:31', 1),
(494, 'created', 'task_tags', 280, '2017-12-11 22:44:22', '2017-12-11 22:44:22', 1),
(495, 'created', 'task_tags', 281, '2017-12-11 22:44:24', '2017-12-11 22:44:24', 1),
(496, 'created', 'task_tags', 282, '2017-12-11 22:44:39', '2017-12-11 22:44:39', 1),
(497, 'created', 'task_tags', 283, '2017-12-11 22:44:42', '2017-12-11 22:44:42', 1),
(498, 'created', 'task_tags', 284, '2017-12-11 22:48:31', '2017-12-11 22:48:31', 1),
(499, 'created', 'task_tags', 285, '2017-12-11 22:48:34', '2017-12-11 22:48:34', 1),
(500, 'created', 'task_tags', 286, '2017-12-11 22:49:14', '2017-12-11 22:49:14', 1),
(501, 'created', 'task_tags', 287, '2017-12-11 22:49:16', '2017-12-11 22:49:16', 1),
(502, 'created', 'task_tags', 288, '2017-12-11 22:49:36', '2017-12-11 22:49:36', 1),
(503, 'created', 'task_tags', 289, '2017-12-11 22:49:38', '2017-12-11 22:49:38', 1),
(504, 'created', 'task_tags', 290, '2017-12-11 22:49:55', '2017-12-11 22:49:55', 1),
(505, 'created', 'task_tags', 291, '2017-12-11 22:49:57', '2017-12-11 22:49:57', 1),
(506, 'created', 'task_tags', 292, '2017-12-11 22:51:04', '2017-12-11 22:51:04', 1),
(507, 'created', 'task_tags', 293, '2017-12-11 22:51:07', '2017-12-11 22:51:07', 1),
(508, 'created', 'task_tags', 294, '2017-12-11 22:51:29', '2017-12-11 22:51:29', 1),
(509, 'created', 'task_tags', 295, '2017-12-11 22:51:31', '2017-12-11 22:51:31', 1),
(510, 'created', 'task_tags', 296, '2017-12-11 22:51:40', '2017-12-11 22:51:40', 1),
(511, 'created', 'task_tags', 297, '2017-12-11 22:51:43', '2017-12-11 22:51:43', 1),
(512, 'updated', 'missions', 3, '2017-12-11 22:53:02', '2017-12-11 22:53:02', 1),
(513, 'updated', 'missions', 3, '2017-12-11 22:53:30', '2017-12-11 22:53:30', 1),
(514, 'updated', 'missions', 3, '2017-12-11 22:55:33', '2017-12-11 22:55:33', 1),
(515, 'deleted', 'type_taches', 2, '2017-12-11 23:08:20', '2017-12-11 23:08:20', 1),
(516, 'created', 'type_taches', 4, '2017-12-11 23:08:27', '2017-12-11 23:08:27', 1),
(517, 'created', 'tasks', 8, '2017-12-11 23:13:20', '2017-12-11 23:13:20', 1),
(518, 'created', 'task_tags', 298, '2017-12-11 23:13:29', '2017-12-11 23:13:29', 1),
(519, 'created', 'task_tags', 299, '2017-12-11 23:13:32', '2017-12-11 23:13:32', 1),
(520, 'updated', 'tasks', 8, '2017-12-11 23:13:48', '2017-12-11 23:13:48', 1),
(521, 'created', 'task_tags', 300, '2017-12-11 23:14:04', '2017-12-11 23:14:04', 1),
(522, 'created', 'task_tags', 301, '2017-12-11 23:14:06', '2017-12-11 23:14:06', 1),
(523, 'updated', 'assets', 2, '2017-12-11 23:28:47', '2017-12-11 23:28:47', 1),
(524, 'updated', 'assets', 2, '2017-12-11 23:50:17', '2017-12-11 23:50:17', 1),
(525, 'created', 'task_tags', 302, '2017-12-12 00:03:15', '2017-12-12 00:03:15', 1),
(526, 'created', 'task_tags', 303, '2017-12-12 00:03:17', '2017-12-12 00:03:17', 1),
(527, 'created', 'task_tags', 304, '2017-12-12 00:09:33', '2017-12-12 00:09:33', 1),
(528, 'created', 'task_tags', 305, '2017-12-12 00:09:36', '2017-12-12 00:09:36', 1),
(529, 'created', 'task_tags', 306, '2017-12-12 00:09:52', '2017-12-12 00:09:52', 1),
(530, 'created', 'task_tags', 307, '2017-12-12 00:09:54', '2017-12-12 00:09:54', 1),
(531, 'created', 'task_tags', 308, '2017-12-12 00:10:52', '2017-12-12 00:10:52', 1),
(532, 'created', 'task_tags', 309, '2017-12-12 00:10:55', '2017-12-12 00:10:55', 1),
(533, 'created', 'task_tags', 310, '2017-12-12 00:19:52', '2017-12-12 00:19:52', 1),
(534, 'created', 'task_tags', 311, '2017-12-12 00:19:55', '2017-12-12 00:19:55', 1),
(535, 'created', 'task_tags', 312, '2017-12-12 00:23:30', '2017-12-12 00:23:30', 1),
(536, 'created', 'task_tags', 313, '2017-12-13 22:45:36', '2017-12-13 22:45:36', 1),
(537, 'created', 'task_tags', 314, '2017-12-13 22:45:48', '2017-12-13 22:45:48', 1),
(538, 'created', 'task_tags', 315, '2017-12-18 20:59:09', '2017-12-18 20:59:09', 1),
(539, 'created', 'status_sorties', 1, '2017-12-18 20:59:53', '2017-12-18 20:59:53', 1),
(540, 'created', 'status_sorties', 2, '2017-12-18 21:00:00', '2017-12-18 21:00:00', 1),
(541, 'created', 'status_sorties', 3, '2017-12-18 21:00:28', '2017-12-18 21:00:28', 1),
(542, 'created', 'status_sorties', 4, '2017-12-18 21:00:36', '2017-12-18 21:00:36', 1),
(543, 'created', 'task_tags', 316, '2017-12-18 21:27:31', '2017-12-18 21:27:31', 1),
(544, 'created', 'task_tags', 317, '2017-12-18 21:27:38', '2017-12-18 21:27:38', 1),
(545, 'created', 'task_tags', 318, '2017-12-18 21:31:49', '2017-12-18 21:31:49', 1),
(546, 'created', 'task_tags', 319, '2017-12-18 21:31:52', '2017-12-18 21:31:52', 1),
(547, 'created', 'status_sorties', 5, '2017-12-18 21:35:09', '2017-12-18 21:35:09', 1),
(548, 'created', 'task_tags', 320, '2017-12-18 21:35:19', '2017-12-18 21:35:19', 1),
(549, 'created', 'task_tags', 321, '2017-12-18 21:35:22', '2017-12-18 21:35:22', 1),
(550, 'created', 'task_tags', 322, '2017-12-18 21:35:41', '2017-12-18 21:35:41', 1),
(551, 'created', 'task_tags', 323, '2017-12-18 21:35:45', '2017-12-18 21:35:45', 1),
(552, 'created', 'task_tags', 324, '2017-12-18 21:44:43', '2017-12-18 21:44:43', 1),
(553, 'created', 'task_tags', 325, '2017-12-18 21:44:46', '2017-12-18 21:44:46', 1),
(554, 'created', 'task_tags', 326, '2017-12-18 21:47:18', '2017-12-18 21:47:18', 1),
(555, 'created', 'task_tags', 327, '2017-12-18 21:47:23', '2017-12-18 21:47:23', 1),
(556, 'created', 'task_tags', 328, '2017-12-18 21:51:49', '2017-12-18 21:51:49', 1),
(557, 'created', 'task_tags', 329, '2017-12-18 21:51:53', '2017-12-18 21:51:53', 1),
(558, 'created', 'task_tags', 330, '2017-12-19 17:04:31', '2017-12-19 17:04:31', 1),
(559, 'created', 'task_tags', 331, '2017-12-19 17:04:55', '2017-12-19 17:04:55', 1),
(560, 'updated', 'sorties', 2, '2017-12-19 17:12:16', '2017-12-19 17:12:16', 1),
(561, 'updated', 'status_sorties', 5, '2017-12-19 17:17:02', '2017-12-19 17:17:02', 1),
(562, 'created', 'task_tags', 332, '2017-12-19 18:09:26', '2017-12-19 18:09:26', 1),
(563, 'created', 'task_tags', 333, '2017-12-19 18:09:28', '2017-12-19 18:09:28', 1),
(564, 'created', 'task_tags', 334, '2017-12-19 18:13:34', '2017-12-19 18:13:34', 1),
(565, 'created', 'task_tags', 335, '2017-12-19 18:13:37', '2017-12-19 18:13:37', 1),
(566, 'updated', 'personnel_du_bngrcs', 1, '2017-12-19 18:16:14', '2017-12-19 18:16:14', 1),
(567, 'updated', 'personnel_du_bngrcs', 2, '2017-12-19 18:16:23', '2017-12-19 18:16:23', 1),
(568, 'updated', 'personnel_du_bngrcs', 3, '2017-12-19 18:16:30', '2017-12-19 18:16:30', 1),
(569, 'updated', 'personnel_du_bngrcs', 4, '2017-12-19 18:16:41', '2017-12-19 18:16:41', 1),
(570, 'created', 'statut_personnels', 5, '2017-12-19 18:17:18', '2017-12-19 18:17:18', 1),
(571, 'updated', 'personnel_du_bngrcs', 5, '2017-12-19 18:17:29', '2017-12-19 18:17:29', 1),
(572, 'created', 'task_tags', 336, '2017-12-19 18:19:19', '2017-12-19 18:19:19', 1),
(573, 'created', 'task_tags', 337, '2017-12-19 18:19:23', '2017-12-19 18:19:23', 1),
(574, 'created', 'task_tags', 338, '2017-12-19 18:21:00', '2017-12-19 18:21:00', 1),
(575, 'created', 'task_tags', 339, '2017-12-19 18:21:03', '2017-12-19 18:21:03', 1),
(576, 'created', 'task_tags', 340, '2017-12-19 18:21:42', '2017-12-19 18:21:42', 1),
(577, 'created', 'task_tags', 341, '2017-12-19 18:21:44', '2017-12-19 18:21:44', 1),
(578, 'created', 'task_tags', 342, '2017-12-19 18:22:39', '2017-12-19 18:22:39', 1),
(579, 'created', 'task_tags', 343, '2017-12-19 18:22:41', '2017-12-19 18:22:41', 1),
(580, 'created', 'task_tags', 344, '2017-12-19 18:25:11', '2017-12-19 18:25:11', 1),
(581, 'created', 'task_tags', 345, '2017-12-19 18:25:16', '2017-12-19 18:25:16', 1),
(582, 'updated', 'tasks', 6, '2017-12-19 18:26:31', '2017-12-19 18:26:31', 1),
(583, 'updated', 'tasks', 6, '2017-12-19 18:26:56', '2017-12-19 18:26:56', 1),
(584, 'created', 'sorties', 3, '2017-12-19 18:29:23', '2017-12-19 18:29:23', 1),
(585, 'updated', 'sorties', 3, '2017-12-19 18:30:03', '2017-12-19 18:30:03', 1),
(586, 'created', 'entrees', 8, '2017-12-19 18:31:23', '2017-12-19 18:31:23', 1),
(587, 'updated', 'entrees', 8, '2017-12-19 18:32:41', '2017-12-19 18:32:41', 1),
(588, 'updated', 'tasks', 8, '2017-12-19 18:34:02', '2017-12-19 18:34:02', 1),
(589, 'created', 'task_tags', 346, '2017-12-19 18:57:44', '2017-12-19 18:57:44', 1),
(590, 'created', 'task_tags', 347, '2017-12-19 18:57:48', '2017-12-19 18:57:48', 1),
(591, 'created', 'task_tags', 348, '2017-12-19 18:59:04', '2017-12-19 18:59:04', 1),
(592, 'created', 'task_tags', 349, '2017-12-19 18:59:06', '2017-12-19 18:59:06', 1),
(593, 'created', 'task_tags', 350, '2017-12-19 19:00:25', '2017-12-19 19:00:25', 1),
(594, 'created', 'task_tags', 351, '2017-12-19 19:00:27', '2017-12-19 19:00:27', 1),
(595, 'created', 'task_tags', 352, '2017-12-19 19:02:05', '2017-12-19 19:02:05', 1),
(596, 'created', 'task_tags', 353, '2017-12-19 19:02:08', '2017-12-19 19:02:08', 1),
(597, 'created', 'task_tags', 354, '2017-12-19 19:03:08', '2017-12-19 19:03:08', 1),
(598, 'created', 'task_tags', 355, '2017-12-19 19:03:10', '2017-12-19 19:03:10', 1),
(599, 'created', 'task_tags', 356, '2017-12-19 20:03:24', '2017-12-19 20:03:24', 1),
(600, 'created', 'task_tags', 357, '2017-12-19 20:03:29', '2017-12-19 20:03:29', 1),
(601, 'created', 'task_tags', 358, '2017-12-19 20:08:51', '2017-12-19 20:08:51', 1),
(602, 'created', 'task_tags', 359, '2017-12-19 20:08:53', '2017-12-19 20:08:53', 1),
(603, 'created', 'task_tags', 360, '2017-12-19 20:23:39', '2017-12-19 20:23:39', 1),
(604, 'created', 'task_tags', 361, '2017-12-19 20:23:42', '2017-12-19 20:23:42', 1),
(605, 'created', 'task_tags', 362, '2017-12-19 20:23:47', '2017-12-19 20:23:47', 1),
(606, 'created', 'task_tags', 363, '2017-12-19 20:23:49', '2017-12-19 20:23:49', 1),
(607, 'created', 'task_tags', 364, '2017-12-19 20:24:19', '2017-12-19 20:24:19', 1),
(608, 'created', 'task_tags', 365, '2017-12-19 20:24:21', '2017-12-19 20:24:21', 1),
(609, 'created', 'task_tags', 366, '2017-12-19 20:24:23', '2017-12-19 20:24:23', 1),
(610, 'created', 'task_tags', 367, '2017-12-19 20:24:26', '2017-12-19 20:24:26', 1),
(611, 'created', 'task_tags', 368, '2017-12-20 20:06:23', '2017-12-20 20:06:23', 1),
(612, 'created', 'task_tags', 369, '2017-12-20 20:06:40', '2017-12-20 20:06:40', 1),
(613, 'updated', 'users', 1, '2017-12-20 20:11:23', '2017-12-20 20:11:23', 1),
(614, 'created', 'task_tags', 370, '2017-12-20 20:11:29', '2017-12-20 20:11:29', 1),
(615, 'created', 'task_tags', 371, '2017-12-20 20:11:33', '2017-12-20 20:11:33', 1),
(616, 'created', 'task_tags', 372, '2018-01-15 16:53:40', '2018-01-15 16:53:40', 1),
(617, 'created', 'task_tags', 373, '2018-01-15 16:53:54', '2018-01-15 16:53:54', 1),
(618, 'created', 'task_tags', 374, '2018-01-15 16:55:38', '2018-01-15 16:55:38', 1),
(619, 'created', 'task_tags', 375, '2018-01-15 16:55:40', '2018-01-15 16:55:40', 1),
(620, 'created', 'task_tags', 376, '2018-01-15 16:56:18', '2018-01-15 16:56:18', 1),
(621, 'created', 'task_tags', 377, '2018-01-15 16:56:20', '2018-01-15 16:56:20', 1),
(622, 'created', 'task_tags', 378, '2018-01-15 17:18:05', '2018-01-15 17:18:05', 1),
(623, 'created', 'task_tags', 379, '2018-01-15 17:18:08', '2018-01-15 17:18:08', 1),
(624, 'updated', 'personnel_du_bngrcs', 1, '2018-01-15 18:34:26', '2018-01-15 18:34:26', 1),
(625, 'updated', 'personnel_du_bngrcs', 1, '2018-01-15 18:38:09', '2018-01-15 18:38:09', 1),
(626, 'updated', 'personnel_du_bngrcs', 1, '2018-01-15 18:38:52', '2018-01-15 18:38:52', 1),
(627, 'updated', 'personnel_du_bngrcs', 6, '2018-01-15 18:45:40', '2018-01-15 18:45:40', 1),
(628, 'updated', 'personnel_du_bngrcs', 1, '2018-01-15 19:05:14', '2018-01-15 19:05:14', 1),
(629, 'updated', 'contacts', 1, '2018-01-15 19:48:50', '2018-01-15 19:48:50', 1),
(630, 'created', 'task_tags', 380, '2018-01-15 20:40:00', '2018-01-15 20:40:00', 1),
(631, 'created', 'task_tags', 381, '2018-01-15 20:40:03', '2018-01-15 20:40:03', 1),
(632, 'updated', 'missions', 1, '2018-01-15 22:05:23', '2018-01-15 22:05:23', 1),
(633, 'updated', 'sorties', 3, '2018-01-15 22:05:23', '2018-01-15 22:05:23', 1),
(634, 'updated', 'oms', 1, '2018-01-15 22:49:35', '2018-01-15 22:49:35', 1),
(635, 'updated', 'personnel_du_bngrcs', 59, '2018-01-15 23:23:49', '2018-01-15 23:23:49', 1),
(636, 'created', 'task_tags', 382, '2018-01-16 01:08:46', '2018-01-16 01:08:46', 1),
(637, 'created', 'task_tags', 383, '2018-01-16 01:08:50', '2018-01-16 01:08:50', 1),
(638, 'created', 'task_tags', 384, '2018-01-16 01:12:53', '2018-01-16 01:12:53', 1),
(639, 'created', 'task_tags', 385, '2018-01-16 01:12:56', '2018-01-16 01:12:56', 1),
(640, 'created', 'task_tags', 386, '2018-01-16 19:52:35', '2018-01-16 19:52:35', 1),
(641, 'created', 'task_tags', 387, '2018-01-16 19:52:48', '2018-01-16 19:52:48', 1),
(642, 'created', 'task_tags', 388, '2018-01-16 21:35:42', '2018-01-16 21:35:42', 1),
(643, 'created', 'task_tags', 389, '2018-01-16 21:58:52', '2018-01-16 21:58:52', 1),
(644, 'created', 'task_tags', 390, '2018-01-16 21:59:10', '2018-01-16 21:59:10', 1),
(645, 'updated', 'entrees', 7, '2018-01-16 22:11:27', '2018-01-16 22:11:27', 1),
(646, 'updated', 'unites', 7, '2018-01-16 22:24:43', '2018-01-16 22:24:43', 1),
(647, 'updated', 'unites', 7, '2018-01-16 22:30:24', '2018-01-16 22:30:24', 1),
(648, 'updated', 'unites', 7, '2018-01-16 22:30:30', '2018-01-16 22:30:30', 1),
(649, 'updated', 'entrees', 8, '2018-01-16 22:35:40', '2018-01-16 22:35:40', 1),
(650, 'updated', 'entrees', 8, '2018-01-16 22:36:00', '2018-01-16 22:36:00', 1),
(651, 'updated', 'unites', 7, '2018-01-16 22:36:11', '2018-01-16 22:36:11', 1),
(652, 'updated', 'entrees', 8, '2018-01-16 22:36:27', '2018-01-16 22:36:27', 1),
(653, 'updated', 'unites', 7, '2018-01-16 22:36:36', '2018-01-16 22:36:36', 1),
(654, 'created', 'entrees', 9, '2018-01-16 22:44:43', '2018-01-16 22:44:43', 1),
(655, 'updated', 'unites', 1, '2018-01-16 22:46:08', '2018-01-16 22:46:08', 1),
(656, 'updated', 'liste_stocks', 4, '2018-01-16 22:54:14', '2018-01-16 22:54:14', 1),
(657, 'updated', 'entrees', 8, '2018-01-16 23:07:30', '2018-01-16 23:07:30', 1),
(658, 'updated', 'entrees', 8, '2018-01-16 23:07:44', '2018-01-16 23:07:44', 1),
(659, 'updated', 'entrees', 9, '2018-01-16 23:08:36', '2018-01-16 23:08:36', 1),
(660, 'updated', 'entrees', 9, '2018-01-16 23:08:55', '2018-01-16 23:08:55', 1),
(661, 'created', 'entrees', 10, '2018-01-16 23:10:33', '2018-01-16 23:10:33', 1),
(662, 'created', 'task_tags', 391, '2018-01-16 23:15:21', '2018-01-16 23:15:21', 1),
(663, 'created', 'task_tags', 392, '2018-01-16 23:15:26', '2018-01-16 23:15:26', 1),
(664, 'created', 'task_tags', 393, '2018-01-16 23:31:18', '2018-01-16 23:31:18', 1),
(665, 'created', 'task_tags', 394, '2018-01-16 23:31:30', '2018-01-16 23:31:30', 1),
(666, 'created', 'task_tags', 395, '2018-01-16 23:31:52', '2018-01-16 23:31:52', 1),
(667, 'created', 'task_tags', 396, '2018-01-16 23:33:28', '2018-01-16 23:33:28', 1),
(668, 'created', 'task_tags', 397, '2018-01-16 23:33:30', '2018-01-16 23:33:30', 1),
(669, 'created', 'task_tags', 398, '2018-01-16 23:35:19', '2018-01-16 23:35:19', 1),
(670, 'created', 'task_tags', 399, '2018-01-16 23:35:21', '2018-01-16 23:35:21', 1),
(671, 'created', 'task_tags', 400, '2018-01-16 23:36:42', '2018-01-16 23:36:42', 1),
(672, 'created', 'task_tags', 401, '2018-01-16 23:36:44', '2018-01-16 23:36:44', 1),
(673, 'created', 'task_tags', 402, '2018-01-16 23:39:33', '2018-01-16 23:39:33', 1),
(674, 'created', 'task_tags', 403, '2018-01-16 23:39:36', '2018-01-16 23:39:36', 1),
(675, 'created', 'task_tags', 404, '2018-01-16 23:41:24', '2018-01-16 23:41:24', 1),
(676, 'created', 'task_tags', 405, '2018-01-16 23:41:27', '2018-01-16 23:41:27', 1),
(677, 'created', 'task_tags', 406, '2018-01-16 23:43:45', '2018-01-16 23:43:45', 1),
(678, 'created', 'task_tags', 407, '2018-01-16 23:43:48', '2018-01-16 23:43:48', 1),
(679, 'created', 'task_tags', 408, '2018-01-16 23:43:50', '2018-01-16 23:43:50', 1),
(680, 'created', 'task_tags', 409, '2018-01-16 23:43:53', '2018-01-16 23:43:53', 1),
(681, 'created', 'task_tags', 410, '2018-01-16 23:46:44', '2018-01-16 23:46:44', 1),
(682, 'created', 'task_tags', 411, '2018-01-16 23:46:51', '2018-01-16 23:46:51', 1),
(683, 'created', 'task_tags', 412, '2018-01-16 23:48:22', '2018-01-16 23:48:22', 1),
(684, 'created', 'task_tags', 413, '2018-01-16 23:48:24', '2018-01-16 23:48:24', 1),
(685, 'created', 'task_tags', 414, '2018-01-16 23:49:02', '2018-01-16 23:49:02', 1),
(686, 'created', 'task_tags', 415, '2018-01-16 23:49:04', '2018-01-16 23:49:04', 1),
(687, 'created', 'task_tags', 416, '2018-01-16 23:49:11', '2018-01-16 23:49:11', 1),
(688, 'created', 'task_tags', 417, '2018-01-16 23:49:14', '2018-01-16 23:49:14', 1),
(689, 'created', 'task_tags', 418, '2018-01-16 23:50:13', '2018-01-16 23:50:13', 1),
(690, 'created', 'task_tags', 419, '2018-01-16 23:50:16', '2018-01-16 23:50:16', 1),
(691, 'created', 'task_tags', 420, '2018-01-16 23:50:44', '2018-01-16 23:50:44', 1),
(692, 'created', 'task_tags', 421, '2018-01-16 23:50:47', '2018-01-16 23:50:47', 1),
(693, 'created', 'missions', 5, '2018-01-16 23:52:47', '2018-01-16 23:52:47', 1),
(694, 'created', 'task_tags', 422, '2018-01-16 23:52:54', '2018-01-16 23:52:54', 1),
(695, 'created', 'task_tags', 423, '2018-01-16 23:52:57', '2018-01-16 23:52:57', 1),
(696, 'created', 'task_tags', 424, '2018-01-16 23:53:53', '2018-01-16 23:53:53', 1),
(697, 'created', 'task_tags', 425, '2018-01-16 23:53:58', '2018-01-16 23:53:58', 1),
(698, 'created', 'task_tags', 426, '2018-01-16 23:54:00', '2018-01-16 23:54:00', 1),
(699, 'created', 'task_tags', 427, '2018-01-16 23:55:01', '2018-01-16 23:55:01', 1),
(700, 'created', 'task_tags', 428, '2018-01-16 23:55:03', '2018-01-16 23:55:03', 1),
(701, 'created', 'task_tags', 429, '2018-01-16 23:55:05', '2018-01-16 23:55:05', 1),
(702, 'created', 'task_tags', 430, '2018-01-16 23:55:06', '2018-01-16 23:55:06', 1),
(703, 'deleted', 'missions', 5, '2018-01-16 23:56:04', '2018-01-16 23:56:04', 1),
(704, 'created', 'task_tags', 431, '2018-01-16 23:57:22', '2018-01-16 23:57:22', 1),
(705, 'created', 'task_tags', 432, '2018-01-16 23:57:24', '2018-01-16 23:57:24', 1),
(706, 'updated', 'missions', 5, '2018-01-16 23:58:46', '2018-01-16 23:58:46', 1),
(707, 'deleted', 'missions', 5, '2018-01-16 23:58:57', '2018-01-16 23:58:57', 1),
(708, 'deleted', 'missions', 5, '2018-01-16 23:59:07', '2018-01-16 23:59:07', 1),
(709, 'created', 'missions', 6, '2018-01-17 00:00:04', '2018-01-17 00:00:04', 1),
(710, 'updated', 'missions', 2, '2018-01-17 00:02:58', '2018-01-17 00:02:58', 1),
(711, 'updated', 'missions', 6, '2018-01-17 00:09:57', '2018-01-17 00:09:57', 1),
(712, 'updated', 'missions', 6, '2018-01-17 00:10:30', '2018-01-17 00:10:30', 1),
(713, 'updated', 'missions', 6, '2018-01-17 00:12:31', '2018-01-17 00:12:31', 1),
(714, 'updated', 'missions', 6, '2018-01-17 00:13:01', '2018-01-17 00:13:01', 1),
(715, 'updated', 'missions', 6, '2018-01-17 00:16:42', '2018-01-17 00:16:42', 1),
(716, 'deleted', 'missions', 6, '2018-01-17 00:22:29', '2018-01-17 00:22:29', 1),
(717, 'deleted', 'missions', 6, '2018-01-17 00:22:38', '2018-01-17 00:22:38', 1),
(718, 'created', 'missions', 8, '2018-01-17 00:33:35', '2018-01-17 00:33:35', 1),
(719, 'deleted', 'missions', 8, '2018-01-17 00:42:42', '2018-01-17 00:42:42', 1),
(720, 'deleted', 'missions', 8, '2018-01-17 00:42:47', '2018-01-17 00:42:47', 1),
(721, 'created', 'missions', 9, '2018-01-17 00:43:11', '2018-01-17 00:43:11', 1),
(722, 'created', 'task_tags', 433, '2018-01-31 15:54:06', '2018-01-31 15:54:06', 1),
(723, 'created', 'task_tags', 434, '2018-01-31 17:09:18', '2018-01-31 17:09:18', 1),
(724, 'created', 'task_tags', 435, '2018-01-31 17:09:43', '2018-01-31 17:09:43', 1),
(725, 'created', 'task_tags', 436, '2018-02-01 09:51:14', '2018-02-01 09:51:14', 1),
(726, 'created', 'task_tags', 437, '2018-02-01 09:53:56', '2018-02-01 09:53:56', 1),
(727, 'created', 'task_tags', 438, '2018-02-01 09:59:50', '2018-02-01 09:59:50', 1),
(728, 'created', 'task_tags', 439, '2018-02-01 09:59:57', '2018-02-01 09:59:57', 1),
(729, 'created', 'task_tags', 440, '2018-02-01 10:03:23', '2018-02-01 10:03:23', 1),
(730, 'created', 'task_tags', 441, '2018-02-01 10:08:39', '2018-02-01 10:08:39', 1),
(731, 'updated', 'users', 1, '2018-02-01 10:14:37', '2018-02-01 10:14:37', 1),
(732, 'updated', 'users', 2, '2018-02-01 10:15:05', '2018-02-01 10:15:05', 1),
(733, 'updated', 'users', 3, '2018-02-01 10:15:51', '2018-02-01 10:15:51', 1),
(734, 'deleted', 'users', 4, '2018-02-01 10:16:39', '2018-02-01 10:16:39', 1),
(735, 'updated', 'users', 1, '2018-02-01 10:18:38', '2018-02-01 10:18:38', 1),
(736, 'created', 'task_tags', 442, '2018-02-01 10:18:50', '2018-02-01 10:18:50', 1),
(737, 'created', 'task_tags', 443, '2018-02-01 10:19:35', '2018-02-01 10:19:35', 1),
(738, 'created', 'task_tags', 444, '2018-02-01 10:20:22', '2018-02-01 10:20:22', 1),
(739, 'created', 'task_tags', 445, '2018-02-01 10:30:10', '2018-02-01 10:30:10', 1),
(740, 'created', 'task_tags', 446, '2018-02-01 10:30:17', '2018-02-01 10:30:17', 1),
(741, 'created', 'task_tags', 447, '2018-02-01 10:34:42', '2018-02-01 10:34:42', 1),
(742, 'created', 'task_tags', 448, '2018-02-01 10:47:59', '2018-02-01 10:47:59', 1),
(743, 'created', 'task_tags', 449, '2018-02-01 10:48:08', '2018-02-01 10:48:08', 1),
(744, 'created', 'task_tags', 450, '2018-02-01 10:55:29', '2018-02-01 10:55:29', 1),
(745, 'created', 'task_tags', 451, '2018-02-01 11:08:05', '2018-02-01 11:08:05', 1),
(746, 'created', 'task_tags', 452, '2018-02-01 11:11:12', '2018-02-01 11:11:12', 1),
(747, 'created', 'task_tags', 453, '2018-02-01 11:33:53', '2018-02-01 11:33:53', 1),
(748, 'updated', 'users', 1, '2018-02-01 11:34:05', '2018-02-01 11:34:05', 1),
(749, 'created', 'task_tags', 454, '2018-02-01 11:34:20', '2018-02-01 11:34:20', 1),
(750, 'created', 'task_tags', 455, '2018-02-01 11:34:32', '2018-02-01 11:34:32', 1),
(751, 'created', 'task_tags', 456, '2018-02-01 11:42:54', '2018-02-01 11:42:54', 1),
(752, 'created', 'task_tags', 457, '2018-02-01 11:43:59', '2018-02-01 11:43:59', 1),
(753, 'created', 'users', 4, '2018-02-01 12:20:25', '2018-02-01 12:20:25', 1),
(754, 'created', 'task_tags', 458, '2018-02-01 12:21:05', '2018-02-01 12:21:05', 1),
(755, 'created', 'missions', 10, '2018-02-01 12:21:52', '2018-02-01 12:21:52', 1),
(756, 'created', 'missions', 11, '2018-02-01 12:24:23', '2018-02-01 12:24:23', 1),
(757, 'created', 'task_tags', 459, '2018-02-01 12:29:34', '2018-02-01 12:29:34', 1),
(758, 'created', 'task_tags', 460, '2018-02-01 12:29:43', '2018-02-01 12:29:43', 1),
(759, 'created', 'missions', 12, '2018-02-01 12:30:49', '2018-02-01 12:30:49', 1),
(760, 'created', 'missions', 13, '2018-02-01 12:31:36', '2018-02-01 12:31:36', 1),
(761, 'created', 'task_tags', 461, '2018-02-01 12:34:06', '2018-02-01 12:34:06', 1),
(762, 'created', 'task_tags', 462, '2018-02-01 12:34:12', '2018-02-01 12:34:12', 1),
(763, 'created', 'missions', 14, '2018-02-01 12:34:42', '2018-02-01 12:34:42', 1),
(764, 'created', 'missions', 15, '2018-02-01 12:42:37', '2018-02-01 12:42:37', 1),
(765, 'created', 'task_tags', 463, '2018-02-01 12:42:38', '2018-02-01 12:42:38', 1),
(766, 'deleted', 'missions', 10, '2018-02-01 12:42:48', '2018-02-01 12:42:48', 1),
(767, 'deleted', 'missions', 11, '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1),
(768, 'deleted', 'missions', 12, '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1),
(769, 'deleted', 'missions', 13, '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1),
(770, 'deleted', 'missions', 14, '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1),
(771, 'deleted', 'missions', 15, '2018-02-01 12:42:49', '2018-02-01 12:42:49', 1),
(772, 'created', 'task_tags', 464, '2018-02-01 12:42:50', '2018-02-01 12:42:50', 1),
(773, 'updated', 'tasks', 2, '2018-02-01 12:43:54', '2018-02-01 12:43:54', 1),
(774, 'created', 'task_tags', 465, '2018-02-01 15:16:15', '2018-02-01 15:16:15', 1),
(775, 'updated', 'users', 1, '2018-02-01 16:02:35', '2018-02-01 16:02:35', 1),
(776, 'created', 'task_tags', 466, '2018-02-01 16:03:06', '2018-02-01 16:03:06', 1),
(777, 'updated', 'users', 1, '2018-02-01 16:17:26', '2018-02-01 16:17:26', 1),
(778, 'created', 'task_tags', 467, '2018-02-01 16:17:46', '2018-02-01 16:17:46', 1),
(779, 'created', 'task_tags', 468, '2018-02-01 16:20:57', '2018-02-01 16:20:57', 1),
(780, 'created', 'task_tags', 469, '2018-02-01 19:47:40', '2018-02-01 19:47:40', 1),
(781, 'created', 'task_tags', 470, '2018-02-01 19:47:51', '2018-02-01 19:47:51', 1),
(782, 'created', 'task_tags', 471, '2018-02-01 19:47:57', '2018-02-01 19:47:57', 1),
(783, 'created', 'task_tags', 472, '2018-02-01 19:48:18', '2018-02-01 19:48:18', 1),
(784, 'created', 'task_tags', 473, '2018-02-01 19:49:01', '2018-02-01 19:49:01', 1),
(785, 'created', 'task_tags', 474, '2018-02-01 19:50:28', '2018-02-01 19:50:28', 1),
(786, 'created', 'task_tags', 475, '2018-02-01 19:51:21', '2018-02-01 19:51:21', 1),
(787, 'updated', 'personnel_du_bngrcs', 59, '2018-02-01 19:51:51', '2018-02-01 19:51:51', 1),
(788, 'created', 'task_tags', 476, '2018-02-01 19:53:24', '2018-02-01 19:53:24', 1),
(789, 'created', 'task_tags', 477, '2018-02-01 19:53:56', '2018-02-01 19:53:56', 1),
(790, 'created', 'task_tags', 478, '2018-02-01 19:56:38', '2018-02-01 19:56:38', 1),
(791, 'updated', 'users', 1, '2018-02-01 19:56:53', '2018-02-01 19:56:53', 1),
(792, 'created', 'task_tags', 479, '2018-02-01 19:57:02', '2018-02-01 19:57:02', 3),
(793, 'created', 'task_tags', 480, '2018-02-01 19:57:33', '2018-02-01 19:57:33', 3),
(794, 'updated', 'users', 3, '2018-02-01 19:58:03', '2018-02-01 19:58:03', 3),
(795, 'created', 'task_tags', 481, '2018-02-01 19:58:11', '2018-02-01 19:58:11', 2),
(796, 'created', 'task_tags', 482, '2018-02-01 19:58:25', '2018-02-01 19:58:25', 2),
(797, 'created', 'entrees', 11, '2018-02-01 19:59:43', '2018-02-01 19:59:43', 2),
(798, 'created', 'task_tags', 483, '2018-02-01 20:00:17', '2018-02-01 20:00:17', 2),
(799, 'created', 'task_tags', 484, '2018-02-01 20:01:23', '2018-02-01 20:01:23', 2),
(800, 'created', 'task_tags', 485, '2018-02-01 20:02:36', '2018-02-01 20:02:36', 2),
(801, 'updated', 'users', 2, '2018-02-01 20:04:00', '2018-02-01 20:04:00', 2),
(802, 'created', 'task_tags', 486, '2018-02-01 20:04:08', '2018-02-01 20:04:08', 2),
(803, 'created', 'task_tags', 487, '2018-02-01 20:04:21', '2018-02-01 20:04:21', 2),
(804, 'updated', 'entrees', 11, '2018-02-01 20:05:46', '2018-02-01 20:05:46', 2),
(805, 'created', 'task_tags', 488, '2018-02-01 20:06:57', '2018-02-01 20:06:57', 2),
(806, 'created', 'task_tags', 489, '2018-02-01 20:07:02', '2018-02-01 20:07:02', 2),
(807, 'created', 'task_tags', 490, '2018-02-01 20:46:43', '2018-02-01 20:46:43', 2),
(808, 'updated', 'users', 2, '2018-02-01 20:47:33', '2018-02-01 20:47:33', 2),
(809, 'created', 'task_tags', 491, '2018-02-01 20:47:40', '2018-02-01 20:47:40', 1),
(810, 'created', 'task_tags', 492, '2018-02-01 20:47:57', '2018-02-01 20:47:57', 1),
(811, 'created', 'task_tags', 493, '2018-02-01 20:49:32', '2018-02-01 20:49:32', 1),
(812, 'created', 'task_tags', 494, '2018-02-01 20:51:18', '2018-02-01 20:51:18', 1),
(813, 'updated', 'liste_stocks', 1, '2018-02-01 20:52:08', '2018-02-01 20:52:08', 1),
(814, 'deleted', 'entrees', 4, '2018-02-01 20:52:23', '2018-02-01 20:52:23', 1),
(815, 'created', 'task_tags', 495, '2018-02-01 20:52:36', '2018-02-01 20:52:36', 1),
(816, 'created', 'etat_rapport_oms', 1, '2018-02-01 20:53:42', '2018-02-01 20:53:42', 1),
(817, 'created', 'etat_rapport_oms', 2, '2018-02-01 20:53:50', '2018-02-01 20:53:50', 1),
(818, 'created', 'absences', 2, '2018-02-01 20:56:08', '2018-02-01 20:56:08', 1),
(819, 'updated', 'missions', 2, '2018-02-01 20:57:03', '2018-02-01 20:57:03', 1),
(820, 'created', 'task_tags', 496, '2018-02-01 20:57:04', '2018-02-01 20:57:04', 1),
(821, 'created', 'task_tags', 497, '2018-02-01 20:57:21', '2018-02-01 20:57:21', 1),
(822, 'created', 'task_tags', 498, '2018-02-02 10:39:51', '2018-02-02 10:39:51', 1),
(823, 'created', 'task_tags', 499, '2018-02-02 10:40:03', '2018-02-02 10:40:03', 1),
(824, 'created', 'task_tags', 500, '2018-02-02 10:46:02', '2018-02-02 10:46:02', 1),
(825, 'created', 'task_tags', 501, '2018-02-02 10:47:05', '2018-02-02 10:47:05', 1),
(826, 'created', 'task_tags', 502, '2018-02-02 10:50:20', '2018-02-02 10:50:20', 1),
(827, 'created', 'task_tags', 503, '2018-02-02 10:50:28', '2018-02-02 10:50:28', 1),
(828, 'created', 'task_tags', 504, '2018-02-02 10:51:04', '2018-02-02 10:51:04', 1),
(829, 'created', 'task_tags', 505, '2018-02-02 10:53:59', '2018-02-02 10:53:59', 1),
(830, 'created', 'etat_oms', 1, '2018-02-02 10:58:24', '2018-02-02 10:58:24', 1),
(831, 'created', 'etat_oms', 2, '2018-02-02 10:58:34', '2018-02-02 10:58:34', 1),
(832, 'created', 'task_tags', 506, '2018-02-02 11:09:55', '2018-02-02 11:09:55', 1),
(833, 'updated', 'users', 1, '2018-02-02 11:10:17', '2018-02-02 11:10:17', 1),
(834, 'created', 'task_tags', 507, '2018-02-02 11:10:22', '2018-02-02 11:10:22', 3),
(835, 'created', 'task_tags', 508, '2018-02-02 11:10:27', '2018-02-02 11:10:27', 3),
(836, 'created', 'task_tags', 509, '2018-02-02 11:10:31', '2018-02-02 11:10:31', 3),
(837, 'created', 'task_tags', 510, '2018-02-02 11:11:52', '2018-02-02 11:11:52', 3),
(838, 'created', 'task_tags', 511, '2018-02-02 11:12:47', '2018-02-02 11:12:47', 3),
(839, 'created', 'task_tags', 512, '2018-02-02 11:13:23', '2018-02-02 11:13:23', 3),
(840, 'created', 'task_tags', 513, '2018-02-02 11:14:30', '2018-02-02 11:14:30', 3),
(841, 'created', 'task_tags', 514, '2018-02-02 11:15:31', '2018-02-02 11:15:31', 3),
(842, 'created', 'task_tags', 515, '2018-02-02 11:17:54', '2018-02-02 11:17:54', 3),
(843, 'created', 'task_tags', 516, '2018-02-02 11:18:26', '2018-02-02 11:18:26', 3),
(844, 'created', 'task_tags', 517, '2018-02-02 11:18:59', '2018-02-02 11:18:59', 3),
(845, 'created', 'task_tags', 518, '2018-02-02 11:20:15', '2018-02-02 11:20:15', 3),
(846, 'updated', 'users', 3, '2018-02-02 11:21:05', '2018-02-02 11:21:05', 3),
(847, 'created', 'task_tags', 519, '2018-02-02 11:21:11', '2018-02-02 11:21:11', 1),
(848, 'created', 'task_tags', 520, '2018-02-02 11:21:16', '2018-02-02 11:21:16', 1),
(849, 'updated', 'users', 1, '2018-02-02 11:21:24', '2018-02-02 11:21:24', 1),
(850, 'created', 'task_tags', 521, '2018-02-02 11:21:30', '2018-02-02 11:21:30', 3),
(851, 'created', 'task_tags', 522, '2018-02-02 11:21:35', '2018-02-02 11:21:35', 3),
(852, 'created', 'task_tags', 523, '2018-02-02 11:22:01', '2018-02-02 11:22:01', 3),
(853, 'created', 'task_tags', 524, '2018-02-02 11:23:10', '2018-02-02 11:23:10', 3),
(854, 'created', 'task_tags', 525, '2018-02-02 11:23:43', '2018-02-02 11:23:43', 3),
(855, 'updated', 'users', 3, '2018-02-02 11:24:00', '2018-02-02 11:24:00', 3),
(856, 'created', 'task_tags', 526, '2018-02-02 11:24:06', '2018-02-02 11:24:06', 1),
(857, 'created', 'task_tags', 527, '2018-02-02 11:24:09', '2018-02-02 11:24:09', 1),
(858, 'created', 'task_tags', 528, '2018-02-02 11:24:24', '2018-02-02 11:24:24', 1),
(859, 'updated', 'users', 1, '2018-02-02 11:24:51', '2018-02-02 11:24:51', 1),
(860, 'created', 'task_tags', 529, '2018-02-02 11:24:57', '2018-02-02 11:24:57', 3),
(861, 'created', 'task_tags', 530, '2018-02-02 11:25:01', '2018-02-02 11:25:01', 3),
(862, 'created', 'task_tags', 531, '2018-02-02 11:25:23', '2018-02-02 11:25:23', 3),
(863, 'updated', 'users', 3, '2018-02-02 11:25:36', '2018-02-02 11:25:36', 3),
(864, 'created', 'task_tags', 532, '2018-02-02 11:25:41', '2018-02-02 11:25:41', 1),
(865, 'created', 'task_tags', 533, '2018-02-02 11:25:45', '2018-02-02 11:25:45', 1),
(866, 'created', 'task_tags', 534, '2018-02-02 11:26:17', '2018-02-02 11:26:17', 1),
(867, 'created', 'task_tags', 535, '2018-02-02 11:26:50', '2018-02-02 11:26:50', 1),
(868, 'updated', 'users', 1, '2018-02-02 11:26:59', '2018-02-02 11:26:59', 1),
(869, 'created', 'task_tags', 536, '2018-02-02 11:27:04', '2018-02-02 11:27:04', 3),
(870, 'created', 'task_tags', 537, '2018-02-02 11:27:09', '2018-02-02 11:27:09', 3),
(871, 'created', 'task_tags', 538, '2018-02-02 11:29:57', '2018-02-02 11:29:57', 3),
(872, 'created', 'task_tags', 539, '2018-02-02 11:30:21', '2018-02-02 11:30:21', 3),
(873, 'created', 'task_tags', 540, '2018-02-02 11:30:26', '2018-02-02 11:30:26', 3),
(874, 'created', 'task_tags', 541, '2018-02-02 11:30:30', '2018-02-02 11:30:30', 3),
(875, 'created', 'task_tags', 542, '2018-02-02 11:30:53', '2018-02-02 11:30:53', 3),
(876, 'created', 'task_tags', 543, '2018-02-02 11:31:06', '2018-02-02 11:31:06', 3),
(877, 'created', 'task_tags', 544, '2018-02-02 11:31:23', '2018-02-02 11:31:23', 3),
(878, 'updated', 'users', 3, '2018-02-02 11:31:31', '2018-02-02 11:31:31', 3),
(879, 'created', 'task_tags', 545, '2018-02-02 11:31:38', '2018-02-02 11:31:38', 1),
(880, 'created', 'task_tags', 546, '2018-02-02 11:31:42', '2018-02-02 11:31:42', 1),
(881, 'created', 'task_tags', 547, '2018-02-02 11:32:40', '2018-02-02 11:32:40', 1),
(882, 'created', 'task_tags', 548, '2018-02-02 11:33:57', '2018-02-02 11:33:57', 1),
(883, 'created', 'task_tags', 549, '2018-02-02 11:35:17', '2018-02-02 11:35:17', 1),
(884, 'created', 'task_tags', 550, '2018-02-02 11:35:37', '2018-02-02 11:35:37', 1),
(885, 'updated', 'users', 1, '2018-02-02 11:35:40', '2018-02-02 11:35:40', 1),
(886, 'created', 'task_tags', 551, '2018-02-02 11:35:45', '2018-02-02 11:35:45', 3),
(887, 'created', 'task_tags', 552, '2018-02-02 11:35:49', '2018-02-02 11:35:49', 3),
(888, 'created', 'task_tags', 553, '2018-02-02 11:36:29', '2018-02-02 11:36:29', 3),
(889, 'created', 'task_tags', 554, '2018-02-02 11:37:00', '2018-02-02 11:37:00', 3),
(890, 'created', 'task_tags', 555, '2018-02-02 11:37:13', '2018-02-02 11:37:13', 3),
(891, 'created', 'task_tags', 556, '2018-02-02 11:39:02', '2018-02-02 11:39:02', 3),
(892, 'updated', 'users', 3, '2018-02-02 11:39:07', '2018-02-02 11:39:07', 3),
(893, 'created', 'task_tags', 557, '2018-02-02 11:39:13', '2018-02-02 11:39:13', 1),
(894, 'created', 'task_tags', 558, '2018-02-02 11:39:16', '2018-02-02 11:39:16', 1),
(895, 'created', 'task_tags', 559, '2018-02-02 11:39:44', '2018-02-02 11:39:44', 1),
(896, 'updated', 'users', 1, '2018-02-02 11:39:47', '2018-02-02 11:39:47', 1),
(897, 'created', 'task_tags', 560, '2018-02-02 11:39:53', '2018-02-02 11:39:53', 3),
(898, 'created', 'task_tags', 561, '2018-02-02 11:39:57', '2018-02-02 11:39:57', 3),
(899, 'created', 'task_tags', 562, '2018-02-02 11:40:10', '2018-02-02 11:40:10', 3),
(900, 'created', 'task_tags', 563, '2018-02-02 11:45:36', '2018-02-02 11:45:36', 3),
(901, 'updated', 'users', 3, '2018-02-02 11:46:56', '2018-02-02 11:46:56', 3),
(902, 'created', 'task_tags', 564, '2018-02-02 11:47:03', '2018-02-02 11:47:03', 1),
(903, 'updated', 'tasks', 6, '2018-02-02 11:47:18', '2018-02-02 11:47:18', 1),
(904, 'created', 'task_tags', 565, '2018-02-02 11:47:23', '2018-02-02 11:47:23', 1),
(905, 'updated', 'tasks', 4, '2018-02-02 11:47:47', '2018-02-02 11:47:47', 1),
(906, 'created', 'task_tags', 566, '2018-02-02 11:47:51', '2018-02-02 11:47:51', 1),
(907, 'created', 'task_tags', 567, '2018-02-02 11:48:08', '2018-02-02 11:48:08', 1),
(908, 'updated', 'users', 1, '2018-02-02 11:48:29', '2018-02-02 11:48:29', 1),
(909, 'created', 'task_tags', 568, '2018-02-02 11:48:35', '2018-02-02 11:48:35', 3),
(910, 'updated', 'users', 3, '2018-02-02 11:51:44', '2018-02-02 11:51:44', 3),
(911, 'created', 'task_tags', 569, '2018-02-02 11:51:50', '2018-02-02 11:51:50', 1),
(912, 'updated', 'liste_stocks', 1, '2018-02-02 11:52:06', '2018-02-02 11:52:06', 1),
(913, 'updated', 'liste_stocks', 2, '2018-02-02 11:52:50', '2018-02-02 11:52:50', 1),
(914, 'created', 'task_tags', 570, '2018-02-02 11:54:53', '2018-02-02 11:54:53', 1),
(915, 'created', 'task_tags', 571, '2018-02-02 11:57:04', '2018-02-02 11:57:04', 1),
(916, 'created', 'task_tags', 572, '2018-02-02 11:57:41', '2018-02-02 11:57:41', 1),
(917, 'created', 'tasks', 9, '2018-02-02 12:02:26', '2018-02-02 12:02:26', 1),
(918, 'updated', 'personnel_du_bngrcs', 1, '2018-02-02 12:10:28', '2018-02-02 12:10:28', 1),
(919, 'created', 'task_tags', 573, '2018-02-02 12:10:39', '2018-02-02 12:10:39', 1),
(920, 'created', 'task_tags', 574, '2018-02-02 12:10:51', '2018-02-02 12:10:51', 1),
(921, 'created', 'task_tags', 575, '2018-02-02 14:54:33', '2018-02-02 14:54:33', 1),
(922, 'created', 'task_tags', 576, '2018-02-02 14:55:59', '2018-02-02 14:55:59', 1),
(923, 'created', 'task_tags', 577, '2018-02-02 14:56:37', '2018-02-02 14:56:37', 1),
(924, 'created', 'task_tags', 578, '2018-02-02 14:58:06', '2018-02-02 14:58:06', 1),
(925, 'updated', 'personnel_du_bngrcs', 1, '2018-02-02 14:58:53', '2018-02-02 14:58:53', 1),
(926, 'created', 'task_tags', 579, '2018-02-02 14:58:57', '2018-02-02 14:58:57', 1),
(927, 'created', 'task_tags', 580, '2018-02-02 14:59:22', '2018-02-02 14:59:22', 1),
(928, 'created', 'task_tags', 581, '2018-02-02 15:02:18', '2018-02-02 15:02:18', 1),
(929, 'created', 'missions', 16, '2018-02-02 15:17:22', '2018-02-02 15:17:22', 1),
(930, 'created', 'task_tags', 582, '2018-02-02 15:17:23', '2018-02-02 15:17:23', 1),
(931, 'created', 'tasks', 10, '2018-02-02 15:19:12', '2018-02-02 15:19:12', 1),
(932, 'updated', 'tasks', 10, '2018-02-02 15:20:13', '2018-02-02 15:20:13', 1),
(933, 'updated', 'tasks', 10, '2018-02-02 15:22:05', '2018-02-02 15:22:05', 1),
(934, 'created', 'task_tags', 583, '2018-02-02 15:22:14', '2018-02-02 15:22:14', 1),
(935, 'created', 'task_tags', 584, '2018-02-02 15:22:32', '2018-02-02 15:22:32', 1),
(936, 'updated', 'tasks', 10, '2018-02-02 15:23:11', '2018-02-02 15:23:11', 1),
(937, 'created', 'task_tags', 585, '2018-02-02 15:23:21', '2018-02-02 15:23:21', 1),
(938, 'created', 'task_tags', 586, '2018-02-02 15:24:26', '2018-02-02 15:24:26', 1),
(939, 'created', 'task_tags', 587, '2018-02-02 15:32:28', '2018-02-02 15:32:28', 1),
(940, 'created', 'task_tags', 588, '2018-02-02 15:38:02', '2018-02-02 15:38:02', 1),
(941, 'created', 'task_tags', 589, '2018-02-02 15:38:38', '2018-02-02 15:38:38', 1),
(942, 'created', 'task_tags', 590, '2018-02-02 15:39:11', '2018-02-02 15:39:11', 1),
(943, 'created', 'task_tags', 591, '2018-02-02 15:53:12', '2018-02-02 15:53:12', 1),
(944, 'created', 'task_tags', 592, '2018-02-02 15:57:33', '2018-02-02 15:57:33', 1),
(945, 'created', 'task_tags', 593, '2018-02-02 15:59:07', '2018-02-02 15:59:07', 1),
(946, 'created', 'task_tags', 594, '2018-02-02 15:59:42', '2018-02-02 15:59:42', 1),
(947, 'created', 'task_tags', 595, '2018-02-02 15:59:51', '2018-02-02 15:59:51', 1),
(948, 'created', 'task_tags', 596, '2018-02-02 16:00:23', '2018-02-02 16:00:23', 1),
(949, 'created', 'task_tags', 597, '2018-02-02 16:00:30', '2018-02-02 16:00:30', 1),
(950, 'updated', 'users', 1, '2018-02-02 16:00:45', '2018-02-02 16:00:45', 1),
(951, 'created', 'task_tags', 598, '2018-02-02 16:01:14', '2018-02-02 16:01:14', 1),
(952, 'updated', 'personnel_du_bngrcs', 1, '2018-02-02 16:06:31', '2018-02-02 16:06:31', 1),
(953, 'updated', 'oms', 1, '2018-02-02 16:14:34', '2018-02-02 16:14:34', 1),
(954, 'created', 'task_tags', 599, '2018-02-02 21:00:41', '2018-02-02 21:00:41', 1),
(955, 'created', 'task_tags', 600, '2018-02-02 21:00:57', '2018-02-02 21:00:57', 1),
(956, 'created', 'task_tags', 601, '2018-02-02 21:01:39', '2018-02-02 21:01:39', 1),
(957, 'updated', 'users', 1, '2018-02-02 21:03:41', '2018-02-02 21:03:41', 1),
(958, 'created', 'task_tags', 602, '2018-02-02 21:04:09', '2018-02-02 21:04:09', 1),
(959, 'updated', 'missions', 9, '2018-02-02 21:05:50', '2018-02-02 21:05:50', 1),
(960, 'created', 'task_tags', 603, '2018-02-02 21:05:51', '2018-02-02 21:05:51', 1),
(961, 'created', 'task_tags', 604, '2018-02-02 21:05:59', '2018-02-02 21:05:59', 1),
(962, 'created', 'task_tags', 605, '2018-02-02 21:07:04', '2018-02-02 21:07:04', 1),
(963, 'created', 'task_tags', 606, '2018-02-02 21:07:31', '2018-02-02 21:07:31', 1),
(964, 'created', 'task_tags', 607, '2018-02-02 21:07:51', '2018-02-02 21:07:51', 1),
(965, 'updated', 'users', 1, '2018-02-02 21:11:23', '2018-02-02 21:11:23', 1),
(966, 'created', 'task_tags', 608, '2018-02-02 21:11:28', '2018-02-02 21:11:28', 1),
(967, 'created', 'task_tags', 609, '2018-02-02 21:13:31', '2018-02-02 21:13:31', 1),
(968, 'created', 'task_tags', 610, '2018-02-02 21:13:40', '2018-02-02 21:13:40', 1),
(969, 'updated', 'users', 1, '2018-02-02 21:13:45', '2018-02-02 21:13:45', 1),
(970, 'created', 'task_tags', 611, '2018-02-02 21:13:52', '2018-02-02 21:13:52', 1),
(971, 'created', 'task_tags', 612, '2018-02-02 21:14:09', '2018-02-02 21:14:09', 1),
(972, 'created', 'task_tags', 613, '2018-02-02 21:16:51', '2018-02-02 21:16:51', 1),
(973, 'created', 'task_tags', 614, '2018-02-02 21:17:33', '2018-02-02 21:17:33', 1),
(974, 'created', 'task_tags', 615, '2018-02-02 21:19:22', '2018-02-02 21:19:22', 1),
(975, 'updated', 'users', 1, '2018-02-02 21:19:57', '2018-02-02 21:19:57', 1),
(976, 'created', 'task_tags', 616, '2018-02-02 21:20:04', '2018-02-02 21:20:04', 1),
(977, 'created', 'task_tags', 617, '2018-02-02 21:20:43', '2018-02-02 21:20:43', 1),
(978, 'created', 'task_tags', 618, '2018-02-02 21:21:45', '2018-02-02 21:21:45', 1),
(979, 'updated', 'users', 1, '2018-02-02 21:21:59', '2018-02-02 21:21:59', 1),
(980, 'created', 'task_tags', 619, '2018-02-02 21:34:59', '2018-02-02 21:34:59', 1),
(981, 'updated', 'personnel_du_bngrcs', 1, '2018-02-02 21:38:36', '2018-02-02 21:38:36', 1),
(982, 'created', 'task_tags', 620, '2018-02-02 21:38:56', '2018-02-02 21:38:56', 1),
(983, 'created', 'entrees', 12, '2018-02-02 21:42:15', '2018-02-02 21:42:15', 1),
(984, 'created', 'task_tags', 621, '2018-02-02 21:43:04', '2018-02-02 21:43:04', 1),
(985, 'updated', 'users', 1, '2018-02-02 21:43:11', '2018-02-02 21:43:11', 1),
(986, 'created', 'task_tags', 622, '2018-02-02 21:43:37', '2018-02-02 21:43:37', 1),
(987, 'updated', 'users', 1, '2018-02-02 21:44:10', '2018-02-02 21:44:10', 1),
(988, 'created', 'task_tags', 623, '2018-02-02 21:44:30', '2018-02-02 21:44:30', 1),
(989, 'updated', 'users', 1, '2018-02-02 21:45:02', '2018-02-02 21:45:02', 1),
(990, 'created', 'task_tags', 624, '2018-02-02 21:45:52', '2018-02-02 21:45:52', 1),
(991, 'updated', 'users', 1, '2018-02-02 21:49:26', '2018-02-02 21:49:26', 1),
(992, 'created', 'task_tags', 625, '2018-02-02 21:49:44', '2018-02-02 21:49:44', 1),
(993, 'updated', 'users', 1, '2018-02-02 21:50:27', '2018-02-02 21:50:27', 1),
(994, 'created', 'task_tags', 626, '2018-02-02 21:50:48', '2018-02-02 21:50:48', 1),
(995, 'created', 'task_tags', 627, '2018-02-02 21:55:49', '2018-02-02 21:55:49', 1),
(996, 'created', 'task_tags', 628, '2018-02-02 21:57:15', '2018-02-02 21:57:15', 1),
(997, 'updated', 'users', 1, '2018-02-02 21:58:23', '2018-02-02 21:58:23', 1),
(998, 'created', 'task_tags', 629, '2018-02-02 21:58:40', '2018-02-02 21:58:40', 1),
(999, 'created', 'task_tags', 630, '2018-02-02 22:01:00', '2018-02-02 22:01:00', 1),
(1000, 'updated', 'users', 1, '2018-02-02 22:01:27', '2018-02-02 22:01:27', 1),
(1001, 'created', 'task_tags', 631, '2018-02-02 22:01:35', '2018-02-02 22:01:35', 1),
(1002, 'updated', 'users', 1, '2018-02-02 22:02:25', '2018-02-02 22:02:25', 1),
(1003, 'created', 'task_tags', 632, '2018-02-02 22:02:46', '2018-02-02 22:02:46', 1),
(1004, 'created', 'task_tags', 633, '2018-02-02 22:06:44', '2018-02-02 22:06:44', 1),
(1005, 'created', 'entrees', 13, '2018-02-02 22:08:52', '2018-02-02 22:08:52', 1),
(1006, 'created', 'task_tags', 634, '2018-02-02 22:09:17', '2018-02-02 22:09:17', 1),
(1007, 'created', 'task_tags', 635, '2018-02-02 22:09:24', '2018-02-02 22:09:24', 1),
(1008, 'created', 'task_tags', 636, '2018-02-03 09:18:17', '2018-02-03 09:18:17', 1),
(1009, 'updated', 'personnel_du_bngrcs', 1, '2018-02-03 09:20:01', '2018-02-03 09:20:01', 1),
(1010, 'created', 'task_tags', 637, '2018-02-03 09:21:21', '2018-02-03 09:21:21', 1),
(1011, 'created', 'task_tags', 638, '2018-02-03 09:22:47', '2018-02-03 09:22:47', 1),
(1012, 'updated', 'tasks', 2, '2018-02-03 09:24:23', '2018-02-03 09:24:23', 1),
(1013, 'created', 'task_tags', 639, '2018-02-03 09:24:52', '2018-02-03 09:24:52', 1),
(1014, 'created', 'task_tags', 640, '2018-02-03 09:28:52', '2018-02-03 09:28:52', 1),
(1015, 'created', 'task_tags', 641, '2018-02-03 20:50:37', '2018-02-03 20:50:37', 1),
(1016, 'created', 'task_tags', 642, '2018-02-03 20:57:49', '2018-02-03 20:57:49', 1),
(1017, 'created', 'task_tags', 643, '2018-02-03 21:10:06', '2018-02-03 21:10:06', 1),
(1018, 'created', 'task_tags', 644, '2018-02-03 21:10:59', '2018-02-03 21:10:59', 1),
(1019, 'created', 'task_tags', 645, '2018-02-03 21:11:16', '2018-02-03 21:11:16', 1),
(1020, 'created', 'task_tags', 646, '2018-02-03 21:12:45', '2018-02-03 21:12:45', 1),
(1021, 'updated', 'users', 1, '2018-02-03 21:17:35', '2018-02-03 21:17:35', 1),
(1022, 'created', 'task_tags', 647, '2018-02-03 21:18:45', '2018-02-03 21:18:45', 1),
(1023, 'created', 'task_tags', 648, '2018-02-03 21:35:20', '2018-02-03 21:35:20', 1),
(1024, 'created', 'task_tags', 649, '2018-02-03 21:44:02', '2018-02-03 21:44:02', 1),
(1025, 'created', 'task_tags', 650, '2018-02-04 08:13:52', '2018-02-04 08:13:52', 1),
(1026, 'created', 'tasks', 11, '2018-02-04 08:25:39', '2018-02-04 08:25:39', 1),
(1027, 'created', 'tasks', 12, '2018-02-04 08:29:15', '2018-02-04 08:29:15', 1),
(1028, 'created', 'tasks', 13, '2018-02-04 08:32:17', '2018-02-04 08:32:17', 1),
(1029, 'created', 'task_tags', 651, '2018-02-04 08:33:34', '2018-02-04 08:33:34', 1),
(1030, 'created', 'tasks', 14, '2018-02-04 08:34:59', '2018-02-04 08:34:59', 1),
(1031, 'created', 'task_tags', 652, '2018-02-04 08:35:16', '2018-02-04 08:35:16', 1),
(1032, 'created', 'task_tags', 653, '2018-02-04 08:36:19', '2018-02-04 08:36:19', 1),
(1033, 'created', 'task_tags', 654, '2018-02-04 08:38:26', '2018-02-04 08:38:26', 1),
(1034, 'updated', 'tasks', 11, '2018-02-04 08:41:09', '2018-02-04 08:41:09', 1),
(1035, 'created', 'task_tags', 655, '2018-02-04 08:41:31', '2018-02-04 08:41:31', 1),
(1036, 'created', 'task_tags', 656, '2018-02-04 08:42:43', '2018-02-04 08:42:43', 1),
(1037, 'created', 'competance_formations', 2, '2018-02-04 08:44:02', '2018-02-04 08:44:02', 1),
(1038, 'created', 'competance_formations', 3, '2018-02-04 08:44:15', '2018-02-04 08:44:15', 1),
(1039, 'created', 'competance_formations', 4, '2018-02-04 08:44:34', '2018-02-04 08:44:34', 1),
(1040, 'created', 'capacites', 2, '2018-02-04 08:44:50', '2018-02-04 08:44:50', 1),
(1041, 'created', 'capacites', 3, '2018-02-04 08:44:59', '2018-02-04 08:44:59', 1),
(1042, 'updated', 'personnel_du_bngrcs', 1, '2018-02-04 08:45:48', '2018-02-04 08:45:48', 1),
(1043, 'created', 'task_tags', 657, '2018-02-04 08:46:43', '2018-02-04 08:46:43', 1),
(1044, 'updated', 'missions', 2, '2018-02-04 08:47:10', '2018-02-04 08:47:10', 1),
(1045, 'created', 'task_tags', 658, '2018-02-04 08:47:11', '2018-02-04 08:47:11', 1),
(1046, 'created', 'task_tags', 659, '2018-02-04 08:48:18', '2018-02-04 08:48:18', 1),
(1047, 'updated', 'missions', 2, '2018-02-04 08:48:57', '2018-02-04 08:48:57', 1),
(1048, 'created', 'task_tags', 660, '2018-02-04 08:48:57', '2018-02-04 08:48:57', 1),
(1049, 'updated', 'tasks', 6, '2018-02-04 08:49:56', '2018-02-04 08:49:56', 1),
(1050, 'updated', 'tasks', 7, '2018-02-04 08:50:38', '2018-02-04 08:50:38', 1),
(1051, 'updated', 'missions', 2, '2018-02-04 08:51:16', '2018-02-04 08:51:16', 1),
(1052, 'created', 'task_tags', 661, '2018-02-04 08:51:17', '2018-02-04 08:51:17', 1),
(1053, 'updated', 'missions', 2, '2018-02-04 08:52:02', '2018-02-04 08:52:02', 1),
(1054, 'created', 'task_tags', 662, '2018-02-04 08:52:03', '2018-02-04 08:52:03', 1),
(1055, 'updated', 'missions', 2, '2018-02-04 08:52:36', '2018-02-04 08:52:36', 1),
(1056, 'created', 'task_tags', 663, '2018-02-04 08:52:37', '2018-02-04 08:52:37', 1),
(1057, 'created', 'task_tags', 664, '2018-02-04 08:53:56', '2018-02-04 08:53:56', 1),
(1058, 'updated', 'missions', 2, '2018-02-04 08:55:37', '2018-02-04 08:55:37', 1);
INSERT INTO `user_actions` (`id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1059, 'created', 'task_tags', 665, '2018-02-04 08:55:38', '2018-02-04 08:55:38', 1),
(1060, 'updated', 'missions', 2, '2018-02-04 08:57:38', '2018-02-04 08:57:38', 1),
(1061, 'created', 'task_tags', 666, '2018-02-04 08:57:38', '2018-02-04 08:57:38', 1),
(1062, 'updated', 'missions', 2, '2018-02-04 08:58:30', '2018-02-04 08:58:30', 1),
(1063, 'created', 'task_tags', 667, '2018-02-04 08:58:30', '2018-02-04 08:58:30', 1),
(1064, 'updated', 'oms', 1, '2018-02-04 09:01:30', '2018-02-04 09:01:30', 1),
(1065, 'created', 'task_tags', 668, '2018-02-04 09:01:34', '2018-02-04 09:01:34', 1),
(1066, 'created', 'oms', 2, '2018-02-04 09:07:15', '2018-02-04 09:07:15', 1),
(1067, 'updated', 'oms', 2, '2018-02-04 09:07:58', '2018-02-04 09:07:58', 1),
(1068, 'created', 'oms', 3, '2018-02-04 09:10:52', '2018-02-04 09:10:52', 1),
(1069, 'updated', 'missions', 2, '2018-02-04 09:12:04', '2018-02-04 09:12:04', 1),
(1070, 'created', 'task_tags', 669, '2018-02-04 09:12:04', '2018-02-04 09:12:04', 1),
(1071, 'updated', 'missions', 2, '2018-02-04 09:13:32', '2018-02-04 09:13:32', 1),
(1072, 'created', 'task_tags', 670, '2018-02-04 09:13:32', '2018-02-04 09:13:32', 1),
(1073, 'created', 'oms', 4, '2018-02-04 09:17:40', '2018-02-04 09:17:40', 1),
(1074, 'created', 'task_tags', 671, '2018-02-04 09:17:55', '2018-02-04 09:17:55', 1),
(1075, 'created', 'task_tags', 672, '2018-02-04 09:18:35', '2018-02-04 09:18:35', 1),
(1076, 'created', 'task_tags', 673, '2018-02-04 09:21:11', '2018-02-04 09:21:11', 1),
(1077, 'created', 'task_tags', 674, '2018-02-04 09:22:00', '2018-02-04 09:22:00', 1),
(1078, 'updated', 'personnel_du_bngrcs', 59, '2018-02-04 09:23:10', '2018-02-04 09:23:10', 1),
(1079, 'created', 'task_tags', 675, '2018-02-04 09:23:30', '2018-02-04 09:23:30', 1),
(1080, 'created', 'task_tags', 676, '2018-02-04 09:24:36', '2018-02-04 09:24:36', 1),
(1081, 'created', 'task_tags', 677, '2018-02-04 09:25:20', '2018-02-04 09:25:20', 1),
(1082, 'updated', 'sorties', 2, '2018-02-04 09:25:55', '2018-02-04 09:25:55', 1),
(1083, 'updated', 'sorties', 3, '2018-02-04 09:26:07', '2018-02-04 09:26:07', 1),
(1084, 'created', 'task_tags', 678, '2018-02-04 09:26:11', '2018-02-04 09:26:11', 1),
(1085, 'created', 'task_tags', 679, '2018-02-04 09:27:16', '2018-02-04 09:27:16', 1),
(1086, 'updated', 'personnel_du_bngrcs', 59, '2018-02-04 09:28:19', '2018-02-04 09:28:19', 1),
(1087, 'created', 'task_tags', 680, '2018-02-04 09:28:57', '2018-02-04 09:28:57', 1),
(1088, 'updated', 'liste_stocks', 1, '2018-02-04 09:32:29', '2018-02-04 09:32:29', 1),
(1089, 'updated', 'unites', 1, '2018-02-04 09:32:41', '2018-02-04 09:32:41', 1),
(1090, 'updated', 'entrees', 12, '2018-02-04 09:33:04', '2018-02-04 09:33:04', 1),
(1091, 'updated', 'entrees', 12, '2018-02-04 09:33:12', '2018-02-04 09:33:12', 1),
(1092, 'updated', 'entrees', 5, '2018-02-04 09:33:59', '2018-02-04 09:33:59', 1),
(1093, 'updated', 'entrees', 6, '2018-02-04 09:34:04', '2018-02-04 09:34:04', 1),
(1094, 'updated', 'entrees', 7, '2018-02-04 09:34:10', '2018-02-04 09:34:10', 1),
(1095, 'updated', 'entrees', 8, '2018-02-04 09:34:18', '2018-02-04 09:34:18', 1),
(1096, 'updated', 'entrees', 9, '2018-02-04 09:34:28', '2018-02-04 09:34:28', 1),
(1097, 'updated', 'entrees', 10, '2018-02-04 09:34:37', '2018-02-04 09:34:37', 1),
(1098, 'updated', 'entrees', 11, '2018-02-04 09:34:44', '2018-02-04 09:34:44', 1),
(1099, 'updated', 'entrees', 12, '2018-02-04 09:34:50', '2018-02-04 09:34:50', 1),
(1100, 'updated', 'entrees', 13, '2018-02-04 09:34:56', '2018-02-04 09:34:56', 1),
(1101, 'created', 'liste_stocks', 7, '2018-02-04 09:37:33', '2018-02-04 09:37:33', 1),
(1102, 'updated', 'liste_stocks', 3, '2018-02-04 09:38:33', '2018-02-04 09:38:33', 1),
(1103, 'updated', 'liste_stocks', 4, '2018-02-04 09:39:37', '2018-02-04 09:39:37', 1),
(1104, 'updated', 'liste_stocks', 5, '2018-02-04 09:40:28', '2018-02-04 09:40:28', 1),
(1105, 'updated', 'liste_stocks', 6, '2018-02-04 09:40:57', '2018-02-04 09:40:57', 1),
(1106, 'updated', 'unites', 6, '2018-02-04 09:41:29', '2018-02-04 09:41:29', 1),
(1107, 'updated', 'unites', 6, '2018-02-04 09:41:37', '2018-02-04 09:41:37', 1),
(1108, 'updated', 'unites', 6, '2018-02-04 09:42:02', '2018-02-04 09:42:02', 1),
(1109, 'updated', 'unites', 4, '2018-02-04 09:42:08', '2018-02-04 09:42:08', 1),
(1110, 'updated', 'unites', 3, '2018-02-04 09:42:25', '2018-02-04 09:42:25', 1),
(1111, 'updated', 'unites', 2, '2018-02-04 09:42:43', '2018-02-04 09:42:43', 1),
(1112, 'created', 'task_tags', 681, '2018-02-04 09:44:08', '2018-02-04 09:44:08', 1),
(1113, 'created', 'task_tags', 682, '2018-02-04 09:46:29', '2018-02-04 09:46:29', 1),
(1114, 'created', 'task_tags', 683, '2018-02-04 09:49:34', '2018-02-04 09:49:34', 1),
(1115, 'updated', 'users', 1, '2018-02-04 09:49:48', '2018-02-04 09:49:48', 1),
(1116, 'created', 'task_tags', 684, '2018-02-04 09:50:02', '2018-02-04 09:50:02', 1),
(1117, 'created', 'task_tags', 685, '2018-02-04 09:53:49', '2018-02-04 09:53:49', 1),
(1118, 'created', 'task_tags', 686, '2018-02-04 09:54:27', '2018-02-04 09:54:27', 1),
(1119, 'created', 'task_tags', 687, '2018-02-04 09:56:22', '2018-02-04 09:56:22', 1),
(1120, 'updated', 'users', 1, '2018-02-04 09:57:18', '2018-02-04 09:57:18', 1),
(1121, 'created', 'task_tags', 688, '2018-02-04 09:58:47', '2018-02-04 09:58:47', 1),
(1122, 'updated', 'users', 1, '2018-02-04 09:59:00', '2018-02-04 09:59:00', 1),
(1123, 'created', 'task_tags', 689, '2018-02-04 09:59:17', '2018-02-04 09:59:17', 1),
(1124, 'updated', 'users', 1, '2018-02-04 10:03:33', '2018-02-04 10:03:33', 1),
(1125, 'created', 'task_tags', 690, '2018-02-04 10:03:58', '2018-02-04 10:03:58', 1),
(1126, 'updated', 'users', 1, '2018-02-04 10:07:03', '2018-02-04 10:07:03', 1),
(1127, 'created', 'task_tags', 691, '2018-02-04 10:08:12', '2018-02-04 10:08:12', 1),
(1128, 'updated', 'users', 1, '2018-02-04 10:10:44', '2018-02-04 10:10:44', 1),
(1129, 'created', 'task_tags', 692, '2018-02-04 10:11:12', '2018-02-04 10:11:12', 1),
(1130, 'created', 'task_tags', 693, '2018-02-04 10:14:58', '2018-02-04 10:14:58', 1),
(1131, 'updated', 'users', 1, '2018-02-04 10:17:29', '2018-02-04 10:17:29', 1),
(1132, 'created', 'task_tags', 694, '2018-02-04 10:43:00', '2018-02-04 10:43:00', 1),
(1133, 'created', 'task_tags', 695, '2018-02-04 10:44:31', '2018-02-04 10:44:31', 1),
(1134, 'created', 'task_tags', 696, '2018-02-04 15:50:24', '2018-02-04 15:50:24', 1),
(1135, 'updated', 'users', 1, '2018-02-04 15:51:01', '2018-02-04 15:51:01', 1),
(1136, 'created', 'task_tags', 697, '2018-02-04 16:02:38', '2018-02-04 16:02:38', 1),
(1137, 'created', 'task_tags', 698, '2018-02-04 16:03:02', '2018-02-04 16:03:02', 1),
(1138, 'created', 'task_tags', 699, '2018-02-04 16:03:50', '2018-02-04 16:03:50', 1),
(1139, 'created', 'task_tags', 700, '2018-02-04 16:05:06', '2018-02-04 16:05:06', 1),
(1140, 'created', 'task_tags', 701, '2018-02-04 16:05:59', '2018-02-04 16:05:59', 1),
(1141, 'created', 'task_tags', 702, '2018-02-04 16:09:22', '2018-02-04 16:09:22', 1),
(1142, 'created', 'task_tags', 703, '2018-02-04 16:09:37', '2018-02-04 16:09:37', 1),
(1143, 'created', 'task_tags', 704, '2018-02-04 16:10:30', '2018-02-04 16:10:30', 1),
(1144, 'created', 'task_tags', 705, '2018-02-04 16:43:03', '2018-02-04 16:43:03', 1),
(1145, 'updated', 'users', 1, '2018-02-04 16:43:32', '2018-02-04 16:43:32', 1),
(1146, 'created', 'task_tags', 706, '2018-02-04 16:43:50', '2018-02-04 16:43:50', 1),
(1147, 'created', 'task_tags', 707, '2018-02-04 16:46:11', '2018-02-04 16:46:11', 1),
(1148, 'created', 'task_tags', 708, '2018-02-04 16:46:40', '2018-02-04 16:46:40', 1),
(1149, 'updated', 'users', 1, '2018-02-04 16:46:59', '2018-02-04 16:46:59', 1),
(1150, 'created', 'task_tags', 709, '2018-02-04 18:19:24', '2018-02-04 18:19:24', 1),
(1151, 'created', 'task_tags', 710, '2018-02-04 18:22:23', '2018-02-04 18:22:23', 1),
(1152, 'created', 'entrees', 14, '2018-02-04 18:24:34', '2018-02-04 18:24:34', 1),
(1153, 'created', 'task_tags', 711, '2018-02-04 18:27:27', '2018-02-04 18:27:27', 1),
(1154, 'updated', 'users', 1, '2018-02-04 18:27:45', '2018-02-04 18:27:45', 1),
(1155, 'created', 'task_tags', 712, '2018-02-04 18:39:44', '2018-02-04 18:39:44', 1),
(1156, 'created', 'task_tags', 713, '2018-02-04 18:43:03', '2018-02-04 18:43:03', 1),
(1157, 'updated', 'liste_stocks', 1, '2018-02-04 18:52:54', '2018-02-04 18:52:54', 1),
(1158, 'updated', 'users', 1, '2018-02-04 18:53:35', '2018-02-04 18:53:35', 1),
(1159, 'created', 'task_tags', 714, '2018-02-05 15:30:33', '2018-02-05 15:30:33', 1),
(1160, 'created', 'task_tags', 715, '2018-02-05 15:33:40', '2018-02-05 15:33:40', 1),
(1161, 'updated', 'users', 1, '2018-02-05 15:39:01', '2018-02-05 15:39:01', 1),
(1162, 'created', 'task_tags', 716, '2018-02-05 15:52:53', '2018-02-05 15:52:53', 1),
(1163, 'created', 'task_tags', 717, '2018-02-05 15:55:46', '2018-02-05 15:55:46', 1),
(1164, 'created', 'task_tags', 718, '2018-02-05 15:59:42', '2018-02-05 15:59:42', 1),
(1165, 'updated', 'users', 1, '2018-02-05 15:59:47', '2018-02-05 15:59:47', 1),
(1166, 'created', 'task_tags', 719, '2018-02-05 18:45:52', '2018-02-05 18:45:52', 1),
(1167, 'created', 'task_tags', 720, '2018-02-05 18:48:39', '2018-02-05 18:48:39', 1),
(1168, 'updated', 'users', 1, '2018-02-05 20:11:14', '2018-02-05 20:11:14', 1),
(1169, 'created', 'task_tags', 721, '2018-02-06 09:34:02', '2018-02-06 09:34:02', 1),
(1170, 'created', 'task_tags', 722, '2018-02-06 09:36:22', '2018-02-06 09:36:22', 1),
(1171, 'created', 'task_tags', 723, '2018-02-06 09:44:35', '2018-02-06 09:44:35', 1),
(1172, 'created', 'task_tags', 724, '2018-02-06 09:44:55', '2018-02-06 09:44:55', 1),
(1173, 'created', 'task_tags', 725, '2018-02-06 09:46:47', '2018-02-06 09:46:47', 1),
(1174, 'created', 'task_tags', 726, '2018-02-06 09:48:27', '2018-02-06 09:48:27', 1),
(1175, 'created', 'task_tags', 727, '2018-02-06 09:52:36', '2018-02-06 09:52:36', 1),
(1176, 'created', 'task_tags', 728, '2018-02-06 09:53:39', '2018-02-06 09:53:39', 1),
(1177, 'created', 'task_tags', 729, '2018-02-06 09:55:41', '2018-02-06 09:55:41', 1),
(1178, 'updated', 'users', 1, '2018-02-06 09:56:55', '2018-02-06 09:56:55', 1),
(1179, 'created', 'task_tags', 730, '2018-02-06 09:57:18', '2018-02-06 09:57:18', 3),
(1180, 'updated', 'users', 3, '2018-02-06 09:58:15', '2018-02-06 09:58:15', 3),
(1181, 'created', 'task_tags', 731, '2018-02-06 10:12:41', '2018-02-06 10:12:41', 1),
(1182, 'created', 'task_tags', 732, '2018-02-07 13:49:30', '2018-02-07 13:49:30', 1),
(1183, 'created', 'task_tags', 733, '2018-02-07 13:50:30', '2018-02-07 13:50:30', 1),
(1184, 'created', 'task_tags', 734, '2018-02-07 13:50:54', '2018-02-07 13:50:54', 1),
(1185, 'created', 'task_tags', 735, '2018-02-07 13:51:03', '2018-02-07 13:51:03', 1),
(1186, 'updated', 'users', 1, '2018-02-07 14:17:15', '2018-02-07 14:17:15', 1),
(1187, 'created', 'task_tags', 736, '2018-02-08 05:25:32', '2018-02-08 05:25:32', 1),
(1188, 'updated', 'users', 1, '2018-02-08 05:25:54', '2018-02-08 05:25:54', 1),
(1189, 'created', 'task_tags', 737, '2018-02-08 05:38:19', '2018-02-08 05:38:19', 1),
(1190, 'updated', 'users', 1, '2018-02-08 05:38:34', '2018-02-08 05:38:34', 1),
(1191, 'created', 'task_tags', 738, '2018-02-08 05:42:50', '2018-02-08 05:42:50', 1),
(1192, 'updated', 'users', 1, '2018-02-08 05:43:14', '2018-02-08 05:43:14', 1),
(1193, 'created', 'task_tags', 739, '2018-02-08 05:52:24', '2018-02-08 05:52:24', 1),
(1194, 'updated', 'users', 1, '2018-02-08 05:52:45', '2018-02-08 05:52:45', 1),
(1195, 'created', 'task_tags', 740, '2018-02-08 06:06:32', '2018-02-08 06:06:32', 1),
(1196, 'updated', 'users', 1, '2018-02-08 06:07:00', '2018-02-08 06:07:00', 1),
(1197, 'created', 'task_tags', 741, '2018-02-08 06:07:04', '2018-02-08 06:07:04', 1),
(1198, 'created', 'task_tags', 742, '2018-02-08 06:07:30', '2018-02-08 06:07:30', 1),
(1199, 'created', 'task_tags', 743, '2018-02-08 06:08:07', '2018-02-08 06:08:07', 1),
(1200, 'updated', 'users', 1, '2018-02-08 06:08:42', '2018-02-08 06:08:42', 1),
(1201, 'created', 'task_tags', 744, '2018-02-08 06:08:49', '2018-02-08 06:08:49', 1),
(1202, 'created', 'task_tags', 745, '2018-02-08 06:09:21', '2018-02-08 06:09:21', 1),
(1203, 'updated', 'users', 1, '2018-02-08 06:10:16', '2018-02-08 06:10:16', 1),
(1204, 'created', 'task_tags', 746, '2018-02-08 06:10:21', '2018-02-08 06:10:21', 1),
(1205, 'created', 'task_tags', 747, '2018-02-08 06:10:55', '2018-02-08 06:10:55', 1),
(1206, 'created', 'task_tags', 748, '2018-02-08 06:11:54', '2018-02-08 06:11:54', 1),
(1207, 'updated', 'users', 1, '2018-02-08 06:12:24', '2018-02-08 06:12:24', 1),
(1208, 'created', 'task_tags', 749, '2018-02-08 06:23:14', '2018-02-08 06:23:14', 1),
(1209, 'created', 'task_tags', 750, '2018-02-08 06:26:07', '2018-02-08 06:26:07', 1),
(1210, 'created', 'entrees', 15, '2018-02-08 06:27:36', '2018-02-08 06:27:36', 1),
(1211, 'created', 'task_tags', 751, '2018-02-08 06:36:57', '2018-02-08 06:36:57', 1),
(1212, 'created', 'task_tags', 752, '2018-03-06 21:37:41', '2018-03-06 21:37:41', 1),
(1213, 'created', 'task_tags', 753, '2018-03-06 21:37:57', '2018-03-06 21:37:57', 1),
(1214, 'created', 'task_tags', 754, '2018-03-06 21:38:00', '2018-03-06 21:38:00', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `96645_5a2a4ef7a35fd` (`personnel_id`);

--
-- Index pour la table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `82954_59e723e82c85c` (`category_id`),
  ADD KEY `82954_59e723e83428f` (`status_id`),
  ADD KEY `82954_59e723e83bec5` (`location_id`),
  ADD KEY `82954_59e89d5e7f873` (`peronnel_id`),
  ADD KEY `83910_59ed91165e575` (`assigned_user_id`);

--
-- Index pour la table `assets_categories`
--
ALTER TABLE `assets_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `assets_histories`
--
ALTER TABLE `assets_histories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `assets_locations`
--
ALTER TABLE `assets_locations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `assets_statuses`
--
ALTER TABLE `assets_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `asset_inventaire`
--
ALTER TABLE `asset_inventaire`
  ADD KEY `fk_p_83910_93575_inventai_5a2a7d441873f` (`asset_id`),
  ADD KEY `fk_p_93575_83910_asset_in_5a2a7d4418807` (`inventaire_id`);

--
-- Index pour la table `capacites`
--
ALTER TABLE `capacites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `capacite_personnel_du_bngrc`
--
ALTER TABLE `capacite_personnel_du_bngrc`
  ADD KEY `fk_p_96644_80794_personne_5a2a4a83e0ae8` (`capacite_id`),
  ADD KEY `fk_p_80794_96644_capacite_5a2a4a83e0ba8` (`personnel_du_bngrc_id`);

--
-- Index pour la table `chef_de_regions`
--
ALTER TABLE `chef_de_regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chef_de_regions_deleted_at_index` (`deleted_at`),
  ADD KEY `80502_59dcc92f9df5c` (`province_id`),
  ADD KEY `80502_59dcc92fa6f14` (`region_id`);

--
-- Index pour la table `chef_districts`
--
ALTER TABLE `chef_districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chef_districts_deleted_at_index` (`deleted_at`),
  ADD KEY `80508_59dccc6f94b9a` (`region_id`),
  ADD KEY `80508_59dccc6f9ac15` (`district_id`);

--
-- Index pour la table `competance_formations`
--
ALTER TABLE `competance_formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competance_formation_personnel_du_bngrc`
--
ALTER TABLE `competance_formation_personnel_du_bngrc`
  ADD KEY `fk_p_90459_80794_personne_5a0e86e795165` (`competance_formation_id`),
  ADD KEY `fk_p_80794_90459_competan_5a0e86e795241` (`personnel_du_bngrc_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `80494_59dcc60f55ef6` (`company_id`);

--
-- Index pour la table `contacts_regions`
--
ALTER TABLE `contacts_regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_regions_deleted_at_index` (`deleted_at`),
  ADD KEY `82590_59e5b6e9dec2f` (`region_id`),
  ADD KEY `82590_59e5b6e9e83db` (`organisme_id`);

--
-- Index pour la table `contact_companies`
--
ALTER TABLE `contact_companies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_company_om`
--
ALTER TABLE `contact_company_om`
  ADD KEY `fk_p_80493_96639_om_conta_5a2a46b20e973` (`contact_company_id`),
  ADD KEY `fk_p_96639_80493_contactc_5a2a46b20ea34` (`om_id`);

--
-- Index pour la table `contact_company_task`
--
ALTER TABLE `contact_company_task`
  ADD KEY `fk_p_80493_82948_task_con_5a1bd99d91d6f` (`contact_company_id`),
  ADD KEY `fk_p_82948_80493_contactc_5a1bd99d91e30` (`task_id`);

--
-- Index pour la table `contact_districts`
--
ALTER TABLE `contact_districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_districts_deleted_at_index` (`deleted_at`),
  ADD KEY `82670_59e5f30de858d` (`district_id`),
  ADD KEY `82670_59e5f30deeab0` (`organisme_id`);

--
-- Index pour la table `current_dat`
--
ALTER TABLE `current_dat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_deleted_at_index` (`deleted_at`),
  ADD KEY `80498_59dcc847281c5` (`region_id`);

--
-- Index pour la table `entrees`
--
ALTER TABLE `entrees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `93573_5a1e61bf4ace9` (`stock_id`);

--
-- Index pour la table `etat_impressions`
--
ALTER TABLE `etat_impressions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etat_impressions_deleted_at_index` (`deleted_at`);

--
-- Index pour la table `etat_oms`
--
ALTER TABLE `etat_oms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etat_rapport_oms`
--
ALTER TABLE `etat_rapport_oms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe_sectoriels`
--
ALTER TABLE `groupe_sectoriels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupe_sectoriels_deleted_at_index` (`deleted_at`);

--
-- Index pour la table `internal_notifications`
--
ALTER TABLE `internal_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `internal_notification_user`
--
ALTER TABLE `internal_notification_user`
  ADD KEY `fk_p_82598_80491_user_int_59e5c2750b5b5` (`internal_notification_id`),
  ADD KEY `fk_p_80491_82598_internal_59e5c2750b639` (`user_id`);

--
-- Index pour la table `inventaires`
--
ALTER TABLE `inventaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `93575_5a1e6746ad2c6` (`mission_id`),
  ADD KEY `93575_5a1e6746b952d` (`stock_id`);

--
-- Index pour la table `inventaire_personnel_du_bngrc`
--
ALTER TABLE `inventaire_personnel_du_bngrc`
  ADD KEY `fk_p_93575_80794_personne_5a1e6748389aa` (`inventaire_id`),
  ADD KEY `fk_p_80794_93575_inventai_5a1e674838a46` (`personnel_du_bngrc_id`);

--
-- Index pour la table `liste_des_prefets`
--
ALTER TABLE `liste_des_prefets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liste_des_prefets_deleted_at_index` (`deleted_at`),
  ADD KEY `80504_59dccba84c331` (`province_id`),
  ADD KEY `80504_59dccba8536da` (`region_id`),
  ADD KEY `80504_59dccba85a95e` (`prefecture_id`);

--
-- Index pour la table `liste_groupe_sectoriels`
--
ALTER TABLE `liste_groupe_sectoriels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liste_groupe_sectoriels_deleted_at_index` (`deleted_at`),
  ADD KEY `82677_59e5f855a3c36` (`groupe_sectoriel_id`),
  ADD KEY `82677_59e5f855abee8` (`organisme_id`);

--
-- Index pour la table `liste_stocks`
--
ALTER TABLE `liste_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `93572_5a1e60280cc68` (`unite_id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `missions_deleted_at_index` (`deleted_at`),
  ADD KEY `83146_5a140c97a473a` (`stat_id`);

--
-- Index pour la table `mission_personnel_du_bngrc`
--
ALTER TABLE `mission_personnel_du_bngrc`
  ADD KEY `fk_p_83146_80794_personne_59e85b98869c3` (`mission_id`),
  ADD KEY `fk_p_80794_83146_mission__59e85b9886a51` (`personnel_du_bngrc_id`);

--
-- Index pour la table `oms`
--
ALTER TABLE `oms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `96639_5a2a46b08a63d` (`mission_id`),
  ADD KEY `96639_5a2a46b097189` (`ordonnee_a_id`),
  ADD KEY `96639_5a2a46b0a2268` (`etat_id`),
  ADD KEY `96639_5a2a46b0ac185` (`etat_rapport_de_mission_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personnel_du_bngrcs`
--
ALTER TABLE `personnel_du_bngrcs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personnel_du_bngrcs_deleted_at_index` (`deleted_at`);

--
-- Index pour la table `personnel_du_bngrc_task`
--
ALTER TABLE `personnel_du_bngrc_task`
  ADD KEY `fk_p_80794_82948_task_per_5a1bd99d8e24a` (`personnel_du_bngrc_id`),
  ADD KEY `fk_p_82948_80794_personne_5a1bd99d8e2d2` (`task_id`);

--
-- Index pour la table `prefectures`
--
ALTER TABLE `prefectures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prefectures_deleted_at_index` (`deleted_at`),
  ADD KEY `80503_59dcca4b4c152` (`region_id`);

--
-- Index pour la table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provinces_deleted_at_index` (`deleted_at`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_deleted_at_index` (`deleted_at`),
  ADD KEY `80496_59dcc7c98cfa3` (`province_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sorties`
--
ALTER TABLE `sorties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `93574_5a1e6348a3fb4` (`stock_id`),
  ADD KEY `93574_5a37a260a04d7` (`parsonnel_id`),
  ADD KEY `93574_5a37a26562a65` (`mission_id`),
  ADD KEY `93574_5a37a267acf6d` (`statut_id`);

--
-- Index pour la table `status_sorties`
--
ALTER TABLE `status_sorties`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statut_missions`
--
ALTER TABLE `statut_missions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statut_personnels`
--
ALTER TABLE `statut_personnels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `82948_59e7238fbc227` (`status_id`),
  ADD KEY `82948_59e7238fc4237` (`user_id`),
  ADD KEY `82948_5a1e9202a3f08` (`type_id`),
  ADD KEY `82948_5a1e9203b484b` (`mission_id`);

--
-- Index pour la table `task_statuses`
--
ALTER TABLE `task_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `task_tags`
--
ALTER TABLE `task_tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_risques`
--
ALTER TABLE `type_risques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_risques_deleted_at_index` (`deleted_at`);

--
-- Index pour la table `type_taches`
--
ALTER TABLE `type_taches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `unites`
--
ALTER TABLE `unites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `80491_59dcc5f2ea6d3` (`role_id`);

--
-- Index pour la table `user_actions`
--
ALTER TABLE `user_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `82944_59e7226f7acfa` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absences`
--
ALTER TABLE `absences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `assets_categories`
--
ALTER TABLE `assets_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `assets_histories`
--
ALTER TABLE `assets_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `assets_locations`
--
ALTER TABLE `assets_locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `assets_statuses`
--
ALTER TABLE `assets_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `capacites`
--
ALTER TABLE `capacites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `chef_de_regions`
--
ALTER TABLE `chef_de_regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `chef_districts`
--
ALTER TABLE `chef_districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `competance_formations`
--
ALTER TABLE `competance_formations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contacts_regions`
--
ALTER TABLE `contacts_regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact_companies`
--
ALTER TABLE `contact_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `contact_districts`
--
ALTER TABLE `contact_districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `current_dat`
--
ALTER TABLE `current_dat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT pour la table `entrees`
--
ALTER TABLE `entrees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `etat_impressions`
--
ALTER TABLE `etat_impressions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etat_oms`
--
ALTER TABLE `etat_oms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `etat_rapport_oms`
--
ALTER TABLE `etat_rapport_oms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `groupe_sectoriels`
--
ALTER TABLE `groupe_sectoriels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `internal_notifications`
--
ALTER TABLE `internal_notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inventaires`
--
ALTER TABLE `inventaires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `liste_des_prefets`
--
ALTER TABLE `liste_des_prefets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `liste_groupe_sectoriels`
--
ALTER TABLE `liste_groupe_sectoriels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `liste_stocks`
--
ALTER TABLE `liste_stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT pour la table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `oms`
--
ALTER TABLE `oms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personnel_du_bngrcs`
--
ALTER TABLE `personnel_du_bngrcs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `prefectures`
--
ALTER TABLE `prefectures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sorties`
--
ALTER TABLE `sorties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `status_sorties`
--
ALTER TABLE `status_sorties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `statut_missions`
--
ALTER TABLE `statut_missions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `statut_personnels`
--
ALTER TABLE `statut_personnels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `task_statuses`
--
ALTER TABLE `task_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `task_tags`
--
ALTER TABLE `task_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=755;

--
-- AUTO_INCREMENT pour la table `type_risques`
--
ALTER TABLE `type_risques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_taches`
--
ALTER TABLE `type_taches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `unites`
--
ALTER TABLE `unites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user_actions`
--
ALTER TABLE `user_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1215;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absences`
--
ALTER TABLE `absences`
  ADD CONSTRAINT `96645_5a2a4ef7a35fd` FOREIGN KEY (`personnel_id`) REFERENCES `personnel_du_bngrcs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `82954_59e723e82c85c` FOREIGN KEY (`category_id`) REFERENCES `assets_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `82954_59e723e83428f` FOREIGN KEY (`status_id`) REFERENCES `assets_statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `82954_59e723e83bec5` FOREIGN KEY (`location_id`) REFERENCES `assets_locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `82954_59e89d5e7f873` FOREIGN KEY (`peronnel_id`) REFERENCES `personnel_du_bngrcs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `asset_inventaire`
--
ALTER TABLE `asset_inventaire`
  ADD CONSTRAINT `fk_p_83910_93575_inventai_5a2a7d441873f` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_93575_83910_asset_in_5a2a7d4418807` FOREIGN KEY (`inventaire_id`) REFERENCES `inventaires` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `capacite_personnel_du_bngrc`
--
ALTER TABLE `capacite_personnel_du_bngrc`
  ADD CONSTRAINT `fk_p_80794_96644_capacite_5a2a4a83e0ba8` FOREIGN KEY (`personnel_du_bngrc_id`) REFERENCES `personnel_du_bngrcs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_96644_80794_personne_5a2a4a83e0ae8` FOREIGN KEY (`capacite_id`) REFERENCES `capacites` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `chef_de_regions`
--
ALTER TABLE `chef_de_regions`
  ADD CONSTRAINT `80502_59dcc92f9df5c` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `80502_59dcc92fa6f14` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `chef_districts`
--
ALTER TABLE `chef_districts`
  ADD CONSTRAINT `80508_59dccc6f94b9a` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `80508_59dccc6f9ac15` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `competance_formation_personnel_du_bngrc`
--
ALTER TABLE `competance_formation_personnel_du_bngrc`
  ADD CONSTRAINT `fk_p_80794_90459_competan_5a0e86e795241` FOREIGN KEY (`personnel_du_bngrc_id`) REFERENCES `personnel_du_bngrcs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_90459_80794_personne_5a0e86e795165` FOREIGN KEY (`competance_formation_id`) REFERENCES `competance_formations` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `80494_59dcc60f55ef6` FOREIGN KEY (`company_id`) REFERENCES `contact_companies` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `contacts_regions`
--
ALTER TABLE `contacts_regions`
  ADD CONSTRAINT `82590_59e5b6e9dec2f` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `82590_59e5b6e9e83db` FOREIGN KEY (`organisme_id`) REFERENCES `contact_companies` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `contact_company_om`
--
ALTER TABLE `contact_company_om`
  ADD CONSTRAINT `fk_p_80493_96639_om_conta_5a2a46b20e973` FOREIGN KEY (`contact_company_id`) REFERENCES `contact_companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_96639_80493_contactc_5a2a46b20ea34` FOREIGN KEY (`om_id`) REFERENCES `oms` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `contact_company_task`
--
ALTER TABLE `contact_company_task`
  ADD CONSTRAINT `fk_p_80493_82948_task_con_5a1bd99d91d6f` FOREIGN KEY (`contact_company_id`) REFERENCES `contact_companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_82948_80493_contactc_5a1bd99d91e30` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `contact_districts`
--
ALTER TABLE `contact_districts`
  ADD CONSTRAINT `82670_59e5f30de858d` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `82670_59e5f30deeab0` FOREIGN KEY (`organisme_id`) REFERENCES `contact_companies` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `80498_59dcc847281c5` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `entrees`
--
ALTER TABLE `entrees`
  ADD CONSTRAINT `93573_5a1e61bf4ace9` FOREIGN KEY (`stock_id`) REFERENCES `liste_stocks` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `internal_notification_user`
--
ALTER TABLE `internal_notification_user`
  ADD CONSTRAINT `fk_p_80491_82598_internal_59e5c2750b639` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_82598_80491_user_int_59e5c2750b5b5` FOREIGN KEY (`internal_notification_id`) REFERENCES `internal_notifications` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inventaires`
--
ALTER TABLE `inventaires`
  ADD CONSTRAINT `93575_5a1e6746ad2c6` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `93575_5a1e6746b952d` FOREIGN KEY (`stock_id`) REFERENCES `liste_stocks` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inventaire_personnel_du_bngrc`
--
ALTER TABLE `inventaire_personnel_du_bngrc`
  ADD CONSTRAINT `fk_p_80794_93575_inventai_5a1e674838a46` FOREIGN KEY (`personnel_du_bngrc_id`) REFERENCES `personnel_du_bngrcs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_93575_80794_personne_5a1e6748389aa` FOREIGN KEY (`inventaire_id`) REFERENCES `inventaires` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `liste_des_prefets`
--
ALTER TABLE `liste_des_prefets`
  ADD CONSTRAINT `80504_59dccba84c331` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `80504_59dccba8536da` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `80504_59dccba85a95e` FOREIGN KEY (`prefecture_id`) REFERENCES `prefectures` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `liste_groupe_sectoriels`
--
ALTER TABLE `liste_groupe_sectoriels`
  ADD CONSTRAINT `82677_59e5f855a3c36` FOREIGN KEY (`groupe_sectoriel_id`) REFERENCES `groupe_sectoriels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `82677_59e5f855abee8` FOREIGN KEY (`organisme_id`) REFERENCES `contact_companies` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `liste_stocks`
--
ALTER TABLE `liste_stocks`
  ADD CONSTRAINT `93572_5a1e60280cc68` FOREIGN KEY (`unite_id`) REFERENCES `unites` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `missions`
--
ALTER TABLE `missions`
  ADD CONSTRAINT `83146_5a140c97a473a` FOREIGN KEY (`stat_id`) REFERENCES `statut_missions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `mission_personnel_du_bngrc`
--
ALTER TABLE `mission_personnel_du_bngrc`
  ADD CONSTRAINT `fk_p_80794_83146_mission__59e85b9886a51` FOREIGN KEY (`personnel_du_bngrc_id`) REFERENCES `personnel_du_bngrcs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_83146_80794_personne_59e85b98869c3` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `oms`
--
ALTER TABLE `oms`
  ADD CONSTRAINT `96639_5a2a46b08a63d` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `96639_5a2a46b097189` FOREIGN KEY (`ordonnee_a_id`) REFERENCES `personnel_du_bngrcs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `96639_5a2a46b0a2268` FOREIGN KEY (`etat_id`) REFERENCES `etat_oms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `96639_5a2a46b0ac185` FOREIGN KEY (`etat_rapport_de_mission_id`) REFERENCES `etat_rapport_oms` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `personnel_du_bngrc_task`
--
ALTER TABLE `personnel_du_bngrc_task`
  ADD CONSTRAINT `fk_p_80794_82948_task_per_5a1bd99d8e24a` FOREIGN KEY (`personnel_du_bngrc_id`) REFERENCES `personnel_du_bngrcs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_82948_80794_personne_5a1bd99d8e2d2` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `prefectures`
--
ALTER TABLE `prefectures`
  ADD CONSTRAINT `80503_59dcca4b4c152` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `80496_59dcc7c98cfa3` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sorties`
--
ALTER TABLE `sorties`
  ADD CONSTRAINT `93574_5a1e6348a3fb4` FOREIGN KEY (`stock_id`) REFERENCES `liste_stocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `93574_5a37a260a04d7` FOREIGN KEY (`parsonnel_id`) REFERENCES `personnel_du_bngrcs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `93574_5a37a26562a65` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `93574_5a37a267acf6d` FOREIGN KEY (`statut_id`) REFERENCES `status_sorties` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `82948_59e7238fbc227` FOREIGN KEY (`status_id`) REFERENCES `task_statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `82948_5a1e9202a3f08` FOREIGN KEY (`type_id`) REFERENCES `type_taches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `82948_5a1e9203b484b` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `80491_59dcc5f2ea6d3` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_actions`
--
ALTER TABLE `user_actions`
  ADD CONSTRAINT `82944_59e7226f7acfa` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
