-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2021 at 02:42 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
CREATE TABLE IF NOT EXISTS `clubs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `club_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_theme` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departments_id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clubs_departments_id_foreign` (`departments_id`),
  KEY `clubs_users_id_foreign` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `club_name`, `club_img`, `club_theme`, `departments_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '4C', '4c.jpg', '#4e535d', 1, 1, NULL, NULL),
(2, 'Tunivisions', 'tunivisions.jpg', '#984453', 5, 1, NULL, NULL),
(3, 'MCNCOM', 'mcncom.jpg', '#424141', 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `club_infos`
--

DROP TABLE IF EXISTS `club_infos`;
CREATE TABLE IF NOT EXISTS `club_infos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `about_us` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `club_infos_club_id_foreign` (`club_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `club_infos`
--

INSERT INTO `club_infos` (`id`, `about_us`, `event_description`, `club_id`, `created_at`, `updated_at`) VALUES
(1, 'le centre de carrière et de certification de compétences de l\'iset de bizerte une interface d\'accompagnement et développement de compétences', 'Check Out Our Events', 1, NULL, NULL),
(2, 'Des clubs Tunivisions implantés dans plus d\'une quarantaine d\'universités étatiques et privées dispersées sur le territoire tunisien , comme ils sont surnommés les Tunimateurs ,et qui représentent aujourd\'hui une marque d\'une notoriété assez important', 'Check Out Our latest events', 2, NULL, NULL),
(3, 'The musketeers clubs for networking and communication\r\nLe projet Musketeers est une action bénévole lancée le 20 novembre 2016 ciblant les jeunes : étudiants, demandeur d\'emploi ou même employés', 'Check Out Our latest Events', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_department` enum('Informatique','Electrique','Mecanique','Genie Procedes','Economie') COLLATE utf8mb4_unicode_ci NOT NULL,
  `clubs_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `nom_department`, `clubs_count`, `created_at`, `updated_at`) VALUES
(1, 'Informatique', 8, '2021-05-09 00:14:52', '2021-05-09 00:14:52'),
(2, 'Economie', 1, '2021-05-09 00:14:52', '2021-05-09 00:14:52'),
(3, 'Electrique', 7, '2021-05-09 00:14:52', '2021-05-09 00:14:52'),
(4, 'Mecanique', 9, '2021-05-09 00:14:52', '2021-05-09 00:14:52'),
(5, 'Genie Procedes', 7, '2021-05-09 00:15:40', '2021-05-09 00:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_date` date NOT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_club_id_foreign` (`club_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_date`, `event_image`, `club_id`, `created_at`, `updated_at`) VALUES
(1, '2021-05-05', '4c(1).jpg', 1, NULL, NULL),
(2, '2021-05-05', '4c(2).jpg', 1, NULL, NULL),
(3, '2021-05-05', '4c(3).jpg', 1, NULL, NULL),
(4, '2021-05-05', '4c(4).jpg', 1, NULL, NULL),
(5, '2021-05-05', '4c(5).jpg', 1, NULL, NULL),
(6, '2021-05-05', '4c(6).jpg', 1, NULL, NULL),
(7, '2021-05-05', 'tunivisions(1).jpg', 2, NULL, NULL),
(8, '2021-05-05', 'tunivisions(2).jpg', 2, NULL, NULL),
(9, '2021-05-05', 'tunivisions(3).jpg', 2, NULL, NULL),
(10, '2021-05-05', 'tunivisions(4).jpg', 2, NULL, NULL),
(11, '2021-05-05', 'tunivisions(5).jpg', 2, NULL, NULL),
(12, '2021-05-05', 'tunivisions(6).jpg', 2, NULL, NULL),
(13, '2021-05-05', 'mcncom(1).jpg', 3, NULL, NULL),
(14, '2021-05-05', 'mcncom(2).jpg', 3, NULL, NULL),
(15, '2021-05-05', 'mcncom(3).jpg', 3, NULL, NULL),
(16, '2021-05-05', 'mcncom(4).jpg', 3, NULL, NULL),
(17, '2021-05-05', 'mcncom(5).jpg', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_21_215525_create_user_requests_table', 1),
(5, '2021_04_22_141305_create_departments_table', 1),
(6, '2021_04_22_153519_create_clubs_table', 1),
(7, '2021_04_22_165535_create_club_infos_table', 1),
(8, '2021_04_22_170239_create_posts_table', 1),
(9, '2021_04_22_174406_create_events_table', 1),
(10, '2021_04_22_175119_create_teams_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_club_id_foreign` (`club_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_description`, `post_image`, `post_title`, `club_id`, `created_at`, `updated_at`) VALUES
(1, 'CAREER AND SKILLS CERTIFICATION CENTER (4C) ,\r\nwe seek  iset  bizerte are very pleased to announce our partnership.\r\nThis collaboration aims to increase the exchange  ideas and expertise  .\r\nWe’re looking forward to working together as a team.💛🖤', '4c_post.jpg', 'Get to know us', 1, NULL, NULL),
(2, 'Nous étions très ravis d\'assister à une formation Gestion de Stress assurée par notre chère formatrice Insaf Ayari le 19 Janvier 2021✅\r\nNous tenons à le remercier du fond du cœur pour son dévouement à nous passer l\'information en toute lucidité .', 'tunivisions_post.jpg', '#DreamBig', 2, NULL, NULL),
(3, 'In collaboration with MCNCOM ISET Bizerte ,🤜🤛🙏\r\n Alpha Tech Club organizes a photoshop session 💻 \" First Steps Into Photoshop\" 💻 managed by our dear guests \" Hedil HIBA \" and \"Alaa Eddine  ZAMOURI \" \r\nTomorrow 📅30/12/2020📅 at ⏰ 8 p.m🕗 on Google Meet', 'mcncom_post.jpg', 'Collaboration', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_insta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_club_id_foreign` (`club_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `team_img`, `team_titre`, `team_fb`, `team_insta`, `team_twitter`, `team_linkedin`, `club_id`, `created_at`, `updated_at`) VALUES
(1, 'Turner Lépicier', '4c_team(1).jpg', 'Resource Humaine', '', '', '', '', 1, NULL, NULL),
(2, 'Nelson B. Johnson', '4c_team(2).jpg', 'Resource Humaine', '', '', '', '', 1, NULL, NULL),
(3, 'Galatee Pouchard', '4c_team(3).jpg', 'Resource Humaine', '', '', '', '', 1, NULL, NULL),
(4, 'Annot Margand\r\n', '4c_team(4).jpg', 'Resource Humaine', '', '', '', '', 1, NULL, NULL),
(5, 'Yassine wenzerfi', 'tunivisions_team(1).jpg', 'President', '', '', '', '', 2, NULL, NULL),
(6, 'Anas ammar', 'tunivisions_team(2).jpg', 'Vice President Marketing', '', '', '', '', 2, NULL, NULL),
(7, 'Nezih abdallah', 'tunivisions_team(3).jpg', 'Vice President Sponsoring', '', '', '', '', 2, NULL, NULL),
(8, 'Rayen harhouri', 'tunivisions_team(4).jpg', 'Vice President Resource Humaine', '', '', '', '', 2, NULL, NULL),
(9, 'Hamza sfaxi', 'tunivisions_team(5).jpg', 'Vice President événementiel', '', '', '', '', 2, NULL, NULL),
(11, 'Hosni hazem', 'mcncom_team(1).jpg', 'President', '', '', '', '', 3, NULL, NULL),
(12, 'Feriel khamessi', 'mcncom_team(2).jpg', 'Media Manager', '', '', '', '', 3, NULL, NULL),
(13, 'Jihed Ben Kahla', 'mcncom_team(3).jpg', 'Logistics Manager', '', '', '', '', 3, NULL, NULL),
(14, 'Arij Tounsi', 'mcncom_team(4).jpg', 'Finance Manager', '', '', '', '', 3, NULL, NULL),
(15, 'Hadil Ouerghi', 'mcncom_team(5).jpg', 'Sponsoring Manager', '', '', '', '', 3, NULL, NULL),
(16, 'Hanin Ben Jemaà', 'mcncom_team(6).jpg', 'Human Resources Manager', '', '', '', '', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('admin','responsable','membre') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fedi', 'fedihamdi97@gmail.com', NULL, '$2y$10$zffLx59NsEzw.80LaBLP..gX9VIF1nHKs9RUs8ZAy9u34kianP.Zm', NULL, 'admin', NULL, '2021-05-08 23:56:14', '2021-05-08 23:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_requests`
--

DROP TABLE IF EXISTS `user_requests`;
CREATE TABLE IF NOT EXISTS `user_requests` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('admin','responsable','membre') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_requests_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `clubs_departments_id_foreign` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `clubs_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `club_infos`
--
ALTER TABLE `club_infos`
  ADD CONSTRAINT `club_infos_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
