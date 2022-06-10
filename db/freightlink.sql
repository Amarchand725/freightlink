-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 05:52 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freightlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_09_105851_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `created_by`, `title`, `slug`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Home', 'home', NULL, NULL, NULL, NULL, 1, NULL, '2022-06-10 08:54:31', '2022-06-10 08:54:31'),
(2, 1, 'Header', 'header', NULL, NULL, NULL, NULL, 1, NULL, '2022-06-10 08:54:44', '2022-06-10 08:54:44'),
(3, 1, 'Footer', 'footer', NULL, NULL, NULL, NULL, 1, NULL, '2022-06-10 08:54:57', '2022-06-10 08:54:57'),
(4, 1, 'Terms', 'terms', NULL, NULL, NULL, NULL, 1, NULL, '2022-06-10 08:55:17', '2022-06-10 08:55:17'),
(5, 1, 'About', 'about', NULL, NULL, NULL, NULL, 1, NULL, '2022-06-10 08:55:37', '2022-06-10 08:55:37'),
(6, 1, 'Contact', 'contact', NULL, NULL, NULL, NULL, 1, NULL, '2022-06-10 08:55:44', '2022-06-10 08:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `page_settings`
--

CREATE TABLE `page_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_settings`
--

INSERT INTO `page_settings` (`id`, `parent_slug`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'home', '_token', 'K98b7ctipEgwsJxPu3NcIwLjov5K9uXsMZgqUIhr', '2022-06-10 09:10:25', '2022-06-10 09:10:25'),
(2, 'home', 'parent_slug', 'home', '2022-06-10 09:10:25', '2022-06-10 09:10:25'),
(3, 'home', 'home_title', 'Meet. Connect. Ship.', '2022-06-10 09:10:25', '2022-06-10 09:10:25'),
(4, 'home', 'description', 'Freightlink Networks is a community where freight forwarders\r\nconnect, grow and prosper. We are all about building a strong\r\nnetwork for forwarders through connection, opportunity and\r\ncommunity.', '2022-06-10 09:10:25', '2022-06-10 09:10:25'),
(5, 'home', 'home_section', '1', '2022-06-10 09:10:25', '2022-06-10 09:10:25'),
(6, 'home', 'form_home_blog', NULL, '2022-06-10 09:10:25', '2022-06-10 09:10:25'),
(7, 'home', 'home_background_image', '10062022141025.png', '2022-06-10 09:10:25', '2022-06-10 09:10:25'),
(8, 'header', '_token', 'K98b7ctipEgwsJxPu3NcIwLjov5K9uXsMZgqUIhr', '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(9, 'header', 'parent_slug', 'header', '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(10, 'header', 'header_currency', 'Dollar', '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(11, 'header', 'header_currency_symbol', '$', '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(12, 'header', 'header_email', 'freightlink@gmail.com', '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(13, 'header', 'header_phone', '12345678', '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(14, 'header', 'from_time', '08:00', '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(15, 'header', 'to_time', '20:00', '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(16, 'header', 'form_blog', NULL, '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(17, 'header', 'header_logo', '10062022142259.png', '2022-06-10 09:20:50', '2022-06-10 09:22:59'),
(18, 'header', 'header_favicon', '10062022142050.png', '2022-06-10 09:20:50', '2022-06-10 09:20:50'),
(19, 'footer', '_token', 'K98b7ctipEgwsJxPu3NcIwLjov5K9uXsMZgqUIhr', '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(20, 'footer', 'parent_slug', 'footer', '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(21, 'footer', 'footer_email', 'footer@mail.com', '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(22, 'footer', 'footer_copy_right', 'Designed by © 2022 Freightlink', '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(23, 'footer', 'footer_phone', '12345678', '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(24, 'footer', 'footer_twitter', NULL, '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(25, 'footer', 'footer_facebook', NULL, '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(26, 'footer', 'footer_youtube', NULL, '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(27, 'footer', 'footer_instagram', NULL, '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(28, 'footer', 'footer_skype', NULL, '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(29, 'footer', 'footer_linkedin', NULL, '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(30, 'footer', 'footer_address', NULL, '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(31, 'footer', 'footer_description', NULL, '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(32, 'footer', 'form_blog', NULL, '2022-06-10 09:26:16', '2022-06-10 09:26:16'),
(33, 'contact', '_token', 'K98b7ctipEgwsJxPu3NcIwLjov5K9uXsMZgqUIhr', '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(34, 'contact', 'parent_slug', 'contact', '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(35, 'contact', 'contact_heading', 'Contact us 7/24', '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(36, 'contact', 'contact_address', 'lorem ipsum', '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(37, 'contact', 'contact_email', 'contact@mail.com', '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(38, 'contact', 'contact_phone', '123455555', '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(39, 'contact', 'contact_map', NULL, '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(40, 'contact', 'form_contact', NULL, '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(41, 'header', 'header_alert_message', 'Join our Affiliate Program and earn up to $500 per referral.', '2022-06-10 09:40:55', '2022-06-10 09:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-06-09 06:04:33', '2022-06-09 06:04:33'),
(2, 'role-create', 'web', '2022-06-09 06:04:33', '2022-06-09 06:04:33'),
(3, 'role-edit', 'web', '2022-06-09 06:04:33', '2022-06-09 06:04:33'),
(4, 'role-delete', 'web', '2022-06-09 06:04:33', '2022-06-09 06:04:33'),
(5, 'product-list', 'web', '2022-06-09 06:04:33', '2022-06-09 06:04:33'),
(6, 'product-create', 'web', '2022-06-09 06:04:33', '2022-06-09 06:04:33'),
(7, 'product-edit', 'web', '2022-06-09 06:04:33', '2022-06-09 06:04:33'),
(8, 'product-delete', 'web', '2022-06-09 06:04:33', '2022-06-09 06:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-06-09 06:05:13', '2022-06-09 06:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temprary_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `verify_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `referral_code`, `name`, `last_name`, `phone`, `promo_code`, `email`, `temprary_email`, `email_verified_at`, `password`, `remember_token`, `status`, `verify_token`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '4046', 'BG7kf4qV', 'Hardik', '', '', '', 'admin@gmail.com', NULL, NULL, '$2y$10$TrSMTkdqZ4CkZe8zLOz/AuMG5CYt3vVpO4dHwUN.ecPMsAorlD416', NULL, 1, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_settings`
--
ALTER TABLE `page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_settings`
--
ALTER TABLE `page_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
