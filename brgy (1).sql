-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 06:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brgy`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('pending','approved','declined') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `first_name`, `last_name`, `username`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'adones', 'evangelista', 'admin', 'admin@gmail.com', '$2y$10$xxW2ekcEt.MrQgApY8cVWO0t1nEH9gIoU6drK0DYQMm9mFg/cgoFy', 'Admin', NULL, NULL, NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `area_settings`
--

CREATE TABLE `area_settings` (
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `population` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barangayimages`
--

CREATE TABLE `barangayimages` (
  `barangay_id` bigint(20) UNSIGNED NOT NULL,
  `barangay_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blotters`
--

CREATE TABLE `blotters` (
  `blotter_id` bigint(20) UNSIGNED NOT NULL,
  `incident_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_date` date DEFAULT NULL,
  `date_reported` date DEFAULT NULL,
  `time_reported` time DEFAULT NULL,
  `date_incident` date DEFAULT NULL,
  `time_incident` time DEFAULT NULL,
  `incident_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incident_narrative` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgy_officials`
--

CREATE TABLE `brgy_officials` (
  `official_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `official_committe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_service` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `certificate_id` bigint(20) UNSIGNED NOT NULL,
  `certification_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_layouts`
--

CREATE TABLE `certificate_layouts` (
  `layout_id` bigint(20) UNSIGNED NOT NULL,
  `logo_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `punongbarangay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_lists`
--

CREATE TABLE `certificate_lists` (
  `certificate_list_id` bigint(20) UNSIGNED NOT NULL,
  `content_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) UNSIGNED DEFAULT NULL,
  `certificate_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_requests`
--

CREATE TABLE `certificate_requests` (
  `request_id` bigint(20) UNSIGNED NOT NULL,
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cert_id` bigint(20) UNSIGNED NOT NULL,
  `request_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_17_231936_create_resident_infos_table', 1),
(2, '2021_02_17_232321_create_brgy_officials_table', 1),
(3, '2021_02_18_112628_create_accounts_table', 1),
(4, '2021_02_18_112643_create_sessions_table', 1),
(5, '2021_02_19_054942_create_blotters_table', 1),
(6, '2021_02_19_055700_create_person_involves_table', 1),
(7, '2021_02_19_065424_create_area_settings_table', 1),
(8, '2021_02_23_024826_create_books_table', 1),
(9, '2021_03_07_085729_create_barangayimages_table', 1),
(10, '2021_03_13_003912_create_certificates_table', 1),
(11, '2021_03_13_003938_create_certificate_lists_table', 1),
(12, '2021_03_13_005054_create_residents_table', 1),
(13, '2021_03_13_024110_create_certificate_layouts_table', 1),
(14, '2021_03_14_010425_create_certificate_requests_table', 1),
(15, '2023_05_30_215439_create_ordinances_table', 1),
(16, '2023_05_31_125619_create_news_table', 1),
(17, '2023_06_21_115852_add_status_to_accounts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordinances`
--

CREATE TABLE `ordinances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person_involves`
--

CREATE TABLE `person_involves` (
  `person_id` bigint(20) UNSIGNED NOT NULL,
  `blotter_id` bigint(20) UNSIGNED NOT NULL,
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `person_involve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `involvement_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `resident_account_id` bigint(20) UNSIGNED NOT NULL,
  `resident_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`resident_account_id`, `resident_id`, `first_name`, `last_name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_verified`) VALUES
(1, 1, 'giann', 'giann', 'giann', 'giann@gmail.com', '$2y$10$G0XnNcPaLm0rFKJJYDHuaO07gYnJP2t3uhwLmLD3yvQ3thqvkN3/.', NULL, NULL, NULL, 1),
(2, 2, 'rojhon', 'rojhon', 'rojhon', 'rojhon@gmail.com', '$2y$10$HOeQArn0IFFsEuTBCCp6iudKJ9Vg0yxl8D6eEPDq/oCRPKGj3lykS', NULL, NULL, NULL, 1),
(3, 3, 'von', 'von', 'von', 'von@gmail.com', '$2y$10$Bgrr7zd.4u6WsN5KjWcTdOr3aW1I5zMLRnGXIAsFpORTeVn3gMchG', NULL, NULL, NULL, 1),
(4, 4, 'salen', 'salen', 'salen', 'salen@gmail.com', '$2y$10$OxWUPau91wP7OwqzcuMLjuFHtR.j7Tiymg7Bh7c.dXSwvKA4pL.CC', NULL, NULL, NULL, 1),
(5, 5, 'test', 'test', 'test', 'test@gmail.com', '$2y$10$xxW2ekcEt.MrQgApY8cVWO0t1nEH9gIoU6drK0DYQMm9mFg/cgoFy', NULL, NULL, NULL, 1),
(6, 6, 'Divine', 'Cabigting', 'divinecabs', 'divscabs@gmail.com', '$2y$10$e13dHvnMGTGcMwMZN6qO9.jPn.NWCWzG8uOafd34hd13RtnWnXHRu', NULL, '2023-06-21 13:21:14', '2023-06-21 13:21:14', 1),
(7, 7, 'Divine', 'Cabigting', 'divinecabss', 'dsad@gmail.com', '$2y$10$9q/QXl22WarxHcdWh6nw3ev0D5/s0DZNSKWJoORcbftAZbsa5FAce', NULL, '2023-06-21 13:30:34', '2023-06-21 13:30:34', 1),
(8, 8, 'asw', 'sahkdhw', 'hahahha', 'hsajhdkwa@gmail.com', '$2y$10$uH4HYK4JgvyGbWIxhCCh4uJobkE3VIN1aNBYH3u968klgAUes/DFu', NULL, '2023-06-21 13:35:00', '2023-06-21 13:35:00', 1),
(9, 9, 'yui', 'yui', 'yuicabs', 'yui@gmail.com', '$2y$10$xxW2ekcEt.MrQgApY8cVWO0t1nEH9gIoU6drK0DYQMm9mFg/cgoFy', NULL, '2023-06-21 14:21:26', '2023-06-21 14:21:26', 0),
(11, 11, 'sample', 'sample', 'sample@09', 'sample@gmail.com', '$2y$10$Xe47XasMmfns51pGumkmeuy8MhWdnmtRzRdcaEeXZcRUImpKCiPai', NULL, '2023-06-26 12:53:56', '2023-06-26 12:53:56', 0),
(12, 12, 'samples', 'samples', 'samples@231', 'samples@gmail.com', '$2y$10$w3mPiRnzW8FpaH387DK9/.HLd5dhzT/sGR2I5KeFbYF/3BejKKnUi', NULL, '2023-06-26 13:07:01', '2023-06-26 13:07:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resident_infos`
--

CREATE TABLE `resident_infos` (
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` bigint(20) UNSIGNED DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civilstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voterstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_of_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAG_IBIG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHILHEALTH` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSS` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_registered` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_infos`
--

INSERT INTO `resident_infos` (`resident_id`, `lastname`, `firstname`, `middlename`, `alias`, `birthday`, `age`, `gender`, `civilstatus`, `voterstatus`, `birth_of_place`, `citizenship`, `telephone_no`, `mobile_no`, `height`, `weight`, `PAG_IBIG`, `PHILHEALTH`, `SSS`, `TIN`, `email`, `spouse`, `father`, `mother`, `area`, `address_1`, `address_2`, `image`, `date_registered`, `created_at`, `updated_at`) VALUES
(1, 'giann', 'giann', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'giann@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'rojhon', 'rojhon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rojhon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'von', 'von', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'von@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'salen', 'salen', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'salen@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Cabigting', 'Divine', NULL, NULL, NULL, NULL, 'Female', NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'divscabs@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 13:21:14', '2023-06-21 13:21:14'),
(7, 'Cabigting', 'Divine', NULL, NULL, NULL, NULL, 'Female', NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dsad@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 13:30:34', '2023-06-21 13:30:34'),
(8, 'sahkdhw', 'asw', NULL, NULL, NULL, NULL, 'Female', NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hsajhdkwa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 13:35:00', '2023-06-21 13:35:00'),
(9, 'yui', 'yui', NULL, NULL, NULL, NULL, 'Female', NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yui@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 14:21:26', '2023-06-21 14:21:26'),
(11, 'sample', 'sample', 'sample', NULL, NULL, NULL, 'Male', NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sample@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/1687784036.png', NULL, '2023-06-26 12:53:56', '2023-06-26 12:53:56'),
(12, 'samples', 'samples', NULL, NULL, NULL, NULL, 'Female', NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'samples@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'storage/images/1687784821.png', NULL, '2023-06-26 13:06:49', '2023-06-26 13:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `user_id`, `username`, `login_at`) VALUES
(1, 1, 'admin', '2023-06-21 05:55:02'),
(2, 1, 'admin', '2023-06-21 07:53:07'),
(3, 1, 'admin', '2023-06-21 13:22:50'),
(4, 1, 'admin', '2023-06-21 13:35:29'),
(5, 1, 'admin', '2023-06-26 12:31:12'),
(6, 1, 'admin', '2023-06-26 12:46:01'),
(7, 1, 'admin', '2023-06-26 12:54:10'),
(8, 1, 'admin', '2023-06-26 13:07:29'),
(9, 1, 'admin', '2023-06-26 15:40:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `accounts_username_unique` (`username`),
  ADD UNIQUE KEY `accounts_email_unique` (`email`);

--
-- Indexes for table `area_settings`
--
ALTER TABLE `area_settings`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `barangayimages`
--
ALTER TABLE `barangayimages`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `blotters`
--
ALTER TABLE `blotters`
  ADD PRIMARY KEY (`blotter_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_officials`
--
ALTER TABLE `brgy_officials`
  ADD PRIMARY KEY (`official_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indexes for table `certificate_layouts`
--
ALTER TABLE `certificate_layouts`
  ADD PRIMARY KEY (`layout_id`);

--
-- Indexes for table `certificate_lists`
--
ALTER TABLE `certificate_lists`
  ADD PRIMARY KEY (`certificate_list_id`);

--
-- Indexes for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `certificate_requests_resident_id_foreign` (`resident_id`),
  ADD KEY `certificate_requests_cert_id_foreign` (`cert_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordinances`
--
ALTER TABLE `ordinances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_involves`
--
ALTER TABLE `person_involves`
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `person_involves_resident_id_foreign` (`resident_id`),
  ADD KEY `person_involves_blotter_id_foreign` (`blotter_id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`resident_account_id`),
  ADD UNIQUE KEY `residents_resident_id_unique` (`resident_id`),
  ADD UNIQUE KEY `residents_username_unique` (`username`),
  ADD UNIQUE KEY `residents_email_unique` (`email`);

--
-- Indexes for table `resident_infos`
--
ALTER TABLE `resident_infos`
  ADD PRIMARY KEY (`resident_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area_settings`
--
ALTER TABLE `area_settings`
  MODIFY `area_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barangayimages`
--
ALTER TABLE `barangayimages`
  MODIFY `barangay_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blotters`
--
ALTER TABLE `blotters`
  MODIFY `blotter_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgy_officials`
--
ALTER TABLE `brgy_officials`
  MODIFY `official_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `certificate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_layouts`
--
ALTER TABLE `certificate_layouts`
  MODIFY `layout_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_lists`
--
ALTER TABLE `certificate_lists`
  MODIFY `certificate_list_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  MODIFY `request_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordinances`
--
ALTER TABLE `ordinances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `person_involves`
--
ALTER TABLE `person_involves`
  MODIFY `person_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `resident_account_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `resident_infos`
--
ALTER TABLE `resident_infos`
  MODIFY `resident_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  ADD CONSTRAINT `certificate_requests_cert_id_foreign` FOREIGN KEY (`cert_id`) REFERENCES `certificate_lists` (`certificate_list_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `certificate_requests_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `residents` (`resident_account_id`) ON DELETE CASCADE;

--
-- Constraints for table `person_involves`
--
ALTER TABLE `person_involves`
  ADD CONSTRAINT `person_involves_blotter_id_foreign` FOREIGN KEY (`blotter_id`) REFERENCES `blotters` (`blotter_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `person_involves_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `resident_infos` (`resident_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
