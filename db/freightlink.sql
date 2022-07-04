-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 05:11 PM
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
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `announcement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `created_by`, `announcement`, `date`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 1, '<h2>Why do we use it? -900</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2022-06-30', 1, NULL, '2022-06-30 09:55:37', '2022-06-30 09:58:26'),
(4, 1, '<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2022-06-30', 0, NULL, '2022-06-30 09:57:16', '2022-06-30 10:04:21'),
(5, 1, '<p>testeddd asdf</p>', '2022-07-01', 1, NULL, '2022-07-01 10:34:54', '2022-07-01 10:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`id`, `created_by`, `title`, `slug`, `description`, `icon`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 1, 'Financial Protection Plan', 'financial-protection-plan', '<p>All paying members of Freghtlink are eligible for our Financial Protection Plan. These members can work with fellow partners confidently and with peace of mind knowing that they are shielded from financial loss.</p>', '14-06-2022-075853.png', 1, NULL, '2022-06-14 02:58:53', '2022-06-14 02:58:53'),
(4, 1, 'Affiliate Program', 'affiliate-program', '<p>Through our affiliate program our members are able to be part of the development of the network by recommending trusted and professional partners. In so doing, members are able to earn a recurring commission based on the number of successful referrals.</p>', '14-06-2022-080200.png', 1, NULL, '2022-06-14 03:02:00', '2022-06-14 03:02:00'),
(5, 1, 'Annual Conference', 'annual-conference', '<p>Our conferences are strategically located to enable maximum attendance by our members. The event hosts forwarders from all over the world offering them the chance to meet, greet and strengthen relationships through an agenda full of 1on1 meetings, workshops and social events.</p>', '14-06-2022-080227.png', 1, NULL, '2022-06-14 03:02:27', '2022-06-14 03:02:27'),
(6, 1, 'Marketing', 'marketing', '<p>Through our strategic partnership we are able to maximise lead generation opportunities by providing online advertising, user-friendly landing pages, reporting tools and integrations with popular CRMs to our members at a competitive rate.</p>', '14-06-2022-080257.png', 1, NULL, '2022-06-14 03:02:57', '2022-06-14 03:02:57'),
(7, 1, 'Strategic Partnerships', 'strategic-partnerships', '<p>All our members have access to our partners who offer Cargo Insurance, Automated Rate Management and Container Buying and Leasing opportunities. These partners have been carefully selected to aid our members in preparing themselves for a digital future.</p>', '14-06-2022-080316.png', 1, NULL, '2022-06-14 03:03:16', '2022-06-14 03:03:16'),
(8, 1, 'Mobile App', 'mobile-app', '<p>Network from your phone and connect with members from all over the world with just one click. Designed to improve and streamline all member-to-member communication.<br /><strong>COMING SOON!</strong></p>', '14-06-2022-080340.png', 1, NULL, '2022-06-14 03:03:40', '2022-06-14 03:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_member` tinyint(1) NOT NULL DEFAULT 0,
  `suspended` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `on_website` tinyint(1) NOT NULL DEFAULT 0,
  `enrollment_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `created_by`, `name`, `slug`, `new_member`, `suspended`, `status`, `on_website`, `enrollment_date`, `expire_date`, `country`, `city`, `address`, `website`, `profile`, `logo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Beard Decker Plc', 'beard-decker-plc', 1, 1, 1, 0, '1990-11-18', '1972-10-11', 'Ut a Nam quia aut eu', 'Accusamus est est se', 'Address 1, Address 2, Address 3', 'https://www.fozajigo.ca', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>', '17-06-2022-094930.png', '2022-06-17 04:49:30', '2022-06-17 06:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `company_networks`
--

CREATE TABLE `company_networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `network_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_networks`
--

INSERT INTO `company_networks` (`id`, `company_id`, `network_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, '2022-06-17 06:54:09', '2022-06-17 06:54:09'),
(3, 1, 2, 1, '2022-06-17 06:54:09', '2022-06-17 06:54:09'),
(4, 1, 3, 1, '2022-06-17 06:54:09', '2022-06-17 06:54:09'),
(5, 1, 4, 1, '2022-06-17 06:54:09', '2022-06-17 06:54:09'),
(6, 1, 5, 1, '2022-06-17 06:54:09', '2022-06-17 06:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `connect_expands_possibilities`
--

CREATE TABLE `connect_expands_possibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `connect_expands_possibilities`
--

INSERT INTO `connect_expands_possibilities` (`id`, `created_by`, `title`, `slug`, `description`, `logo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'Financial Protection Plan', 'financial-protection-plan', '<p>All paying members of Freghtlink are eligible for our Financial Protection Plan. These members can work with fellow partners confidently and with peace of mind knowing that they are shielded from f...</p>', '14-06-2022-100238.png', 1, NULL, '2022-06-14 04:37:22', '2022-06-14 05:02:38'),
(3, 1, 'Affiliate Program', 'affiliate-program', '<p>Freightlink Network is a network made up of the most professional and trusted forwarders in the industry. The platform allows for relationship building, global opportunities, enhanced advertising strategies and streamlined communications</p>', '14-06-2022-100226.png', 1, NULL, '2022-06-14 04:38:05', '2022-06-14 06:33:05'),
(4, 1, 'Annual Conference', 'annual-conference', '<p>Our conferences are strategically located to enable maximum attendance by our members. The event hosts forwarders from all over the world offering them the chance to meet, greet and strengthen rela...</p>', '14-06-2022-100216.png', 1, NULL, '2022-06-14 04:39:18', '2022-06-14 05:02:16'),
(5, 1, 'Marketing', 'marketing', '<p>Through our strategic partnership we are able to maximise lead generation opportunities by providing online advertising, user-friendly landing pages, reporting tools and integrations with popular C...</p>', '14-06-2022-100157.png', 1, NULL, '2022-06-14 04:39:49', '2022-06-14 05:01:57'),
(6, 1, 'Strategic Partnerships', 'strategic-partnerships', '<p>All our members have access to our partners who offer Cargo Insurance, Automated Rate Management and Container Buying and Leasing opportunities. These partners have been carefully selected to aid o...</p>', '14-06-2022-100145.png', 1, NULL, '2022-06-14 04:40:11', '2022-06-14 05:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `company`, `email`, `description`, `status`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, 'Jesse', 'Yates', 'Delgado Bradford Co', 'lemowyvifi@mailinator.com', 'Neque aute ut invent', 1, NULL, '2022-06-14 07:59:25', '2022-06-14 07:59:25'),
(2, 'Anika', 'Michael', 'Talley Kennedy Inc', 'kotypuvyha@mailinator.com', 'Velit aperiam ex fug', 1, NULL, '2022-06-14 08:00:03', '2022-06-14 08:00:03'),
(3, 'Dana', 'Odonnell', 'Hess and Mccoy Co', 'nesahe@mailinator.com', 'Quaerat dolorem quae', 1, NULL, '2022-06-14 08:01:35', '2022-06-14 08:01:35'),
(4, 'Hadley', 'Banks', 'Bowers Stein Traders', 'xovoxuto@mailinator.com', 'Quo voluptas dolore', 1, NULL, '2022-06-14 08:05:13', '2022-06-14 08:05:13'),
(5, 'Uriah', 'Noble', 'Mcbride Levy Co', 'tobum@mailinator.com', 'Ex et aliquam itaque', 1, NULL, '2022-06-14 08:09:09', '2022-06-14 08:09:09'),
(6, 'Sloane', 'Wooten', 'Bradshaw and Stein Trading', 'xilyha@mailinator.com', 'Similique rerum sint', 1, NULL, '2022-06-14 08:12:13', '2022-06-14 08:12:13'),
(7, 'Solomon', 'Sykes', 'Velazquez and Burgess Co', 'rologoqy@mailinator.com', 'Architecto voluptate', 1, NULL, '2022-06-14 08:16:55', '2022-06-14 08:16:55'),
(8, 'Sage', 'Bernard', 'Steele Giles Co', 'mygy@mailinator.com', 'Dolor ea autem lorem', 1, NULL, '2022-06-14 08:40:37', '2022-06-14 08:40:37'),
(9, 'Erasmus', 'Vargas', 'Harrington Oneal LLC', 'vufiviti@mailinator.com', 'Aliqua Temporibus d', 1, NULL, '2022-06-14 08:42:17', '2022-06-14 08:42:17'),
(10, 'Keefe', 'Adams', 'Tucker Vang Inc', 'wixari@mailinator.com', 'In quo totam volupta', 1, NULL, '2022-06-14 08:44:07', '2022-06-14 08:44:07'),
(11, 'Jennifer', 'Acevedo', 'Golden Anthony Trading', 'qafepeci@mailinator.com', 'Totam sunt ea commod', 1, NULL, '2022-06-14 08:46:39', '2022-06-14 08:46:39'),
(12, 'Beatrice', 'Riddle', 'Waller and Kramer Associates', 'xuvyf@mailinator.com', 'Et adipisicing vel c', 1, NULL, '2022-06-14 08:49:51', '2022-06-14 08:49:51'),
(13, 'Quon', 'Mercer', 'Baldwin Macias Inc', 'zaxahy@mailinator.com', 'Id ea in quis praes', 1, NULL, '2022-06-14 08:57:04', '2022-06-14 08:57:04'),
(14, 'Shaeleigh', 'Saunders', 'Burns and Cochran Traders', 'ruwetebun@mailinator.com', 'Consectetur similiq', 1, NULL, '2022-06-14 08:58:31', '2022-06-14 08:58:31'),
(15, 'Mira', 'Hall', 'Britt and Jefferson Traders', 'bozacoc@mailinator.com', 'Qui fugiat modi fugi', 1, NULL, '2022-06-14 09:00:51', '2022-06-14 09:00:51'),
(16, 'Daryl', 'Mcgowan', 'Joyner and Fields Plc', 'qajem@mailinator.com', 'Aut dolor sed laudan', 1, NULL, '2022-06-14 09:12:06', '2022-06-14 09:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `created_by`, `question`, `answer`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'Non consectetur a erat nam at lectus urna duis?', '<p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>', 1, NULL, '2022-06-14 09:49:49', '2022-06-14 09:49:49'),
(3, 1, 'Feugiat scelerisque varius morbi enim nunc?', '<p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>', 1, NULL, '2022-06-14 09:50:09', '2022-06-14 09:50:09'),
(4, 1, 'Dolor sit amet consectetur adipiscing elit?', '<p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>', 1, NULL, '2022-06-14 09:50:29', '2022-06-14 09:50:29'),
(5, 1, 'Tempus quam pellentesque nec nam aliquam sem et tortor consequat?', '<p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.</p>', 1, NULL, '2022-06-14 09:50:45', '2022-06-14 09:50:45'),
(6, 1, 'Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?', '<p>Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.</p>', 1, NULL, '2022-06-14 09:51:02', '2022-06-14 09:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `login_histories`
--

CREATE TABLE `login_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login_id` bigint(20) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_histories`
--

INSERT INTO `login_histories` (`id`, `login_id`, `login_time`, `logout_time`, `created_at`, `updated_at`) VALUES
(1, 13, '2022-07-04 12:45:29', NULL, '2022-07-04 07:45:29', '2022-07-04 07:45:29'),
(2, 13, '2022-07-04 12:45:42', NULL, '2022-07-04 07:45:42', '2022-07-04 07:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `mail_settings`
--

CREATE TABLE `mail_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_mailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_port` int(10) UNSIGNED NOT NULL,
  `mail_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_encryption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_from_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_settings`
--

INSERT INTO `mail_settings` (`id`, `mail_mailer`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `mail_from_address`, `mail_from_name`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'smtp.gmail.com', 587, 'softwaredeveloper992@gmail.com', 'fttfhtuaxmtjvhqa', 'tls', NULL, NULL, '2022-06-09 03:35:15', '2022-06-13 04:13:14');

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
(5, '2022_06_09_105851_create_permission_tables', 1),
(9, '2022_06_13_120719_create_partners_table', 2),
(10, '2022_06_13_154022_create_benefits_table', 3),
(12, '2022_06_14_082205_create_connect_expands_possibilities_table', 4),
(13, '2022_02_03_080357_create_settings_table', 5),
(14, '2022_02_03_082221_create_sliders_table', 5),
(15, '2022_02_03_082236_create_testimonials_table', 5),
(16, '2022_02_03_082316_create_services_table', 5),
(17, '2022_03_09_150411_create_teams_table', 5),
(18, '2022_03_09_150554_create_packages_table', 5),
(19, '2022_06_14_124755_create_contact_us_table', 6),
(22, '2022_06_14_141838_create_faqs_table', 7),
(23, '2022_06_08_150214_create_subscribers_table', 8),
(25, '2022_06_16_084329_create_downloads_table', 9),
(27, '2022_06_16_111500_create_company_networks_table', 11),
(28, '2022_06_16_105328_create_companies_table', 12),
(29, '2022_06_16_130804_create_networks_table', 13),
(30, '2022_06_30_134013_create_announcements_table', 14),
(31, '2022_06_30_134858_create_suggestions_table', 15),
(34, '2022_07_04_123448_create_login_histories_table', 16);

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
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14);

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

CREATE TABLE `networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `black_bg_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `white_bg_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `networks`
--

INSERT INTO `networks` (`id`, `created_by`, `title`, `slug`, `color`, `description`, `black_bg_logo`, `white_bg_logo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Strategic Partnerships', 'strategic-partnerships', '#046c1e', '<p>All our members have access to our partners who offer Cargo Insurance, Automated Rate Management and Container Buying and Leasing opportunities. These partners have been carefully selected to aid o...</p>', '16-06-2022-14223562ab3cab4abea.png', '16-06-2022-14223562ab3cab4a6a6.png', 1, NULL, '2022-06-16 09:22:35', '2022-06-16 09:35:21'),
(2, 1, 'Marketing', 'marketing', '#9011d4', '<p>Through our strategic partnership we are able to maximise lead generation opportunities by providing online advertising, user-friendly landing pages, reporting tools and integrations with popular C...</p>', '16-06-2022-14395862ab40be133ab.png', '16-06-2022-14395862ab40be11f9c.png', 1, NULL, '2022-06-16 09:39:58', '2022-06-16 09:39:58'),
(3, 1, 'Annual Conference', 'annual-conference', '#da0101', '<p>Our conferences are strategically located to enable maximum attendance by our members. The event hosts forwarders from all over the world offering them the chance to meet, greet and strengthen rela...</p>', '16-06-2022-14405062ab40f27a542.png', '16-06-2022-14405062ab40f27a08b.png', 1, NULL, '2022-06-16 09:40:50', '2022-06-16 09:40:50'),
(4, 1, 'Affiliate Program', 'affiliate-program', '#0fbbe6', '<p>Freightlink Network is a network made up of the most professional and trusted forwarders in the industry. The platform allows for relationship building, global opportunities, enhanced advertising strategies and streamlined communications</p>', '16-06-2022-14413762ab4121e5f43.png', '16-06-2022-14413762ab4121e5b78.png', 1, NULL, '2022-06-16 09:41:37', '2022-06-16 09:41:37'),
(5, 1, 'Financial Protection Plan', 'financial-protection-plan', '#e4c00c', '<p>All paying members of Freghtlink are eligible for our Financial Protection Plan. These members can work with fellow partners confidently and with peace of mind knowing that they are shielded from f...</p>', '16-06-2022-14421962ab414b933a8.png', '16-06-2022-14421962ab414b92f7c.png', 1, NULL, '2022-06-16 09:42:19', '2022-06-16 09:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, 1, 'Contact', 'contact', NULL, NULL, NULL, NULL, 1, NULL, '2022-06-10 08:55:44', '2022-06-10 08:55:44'),
(7, 1, 'Network', 'network', NULL, NULL, NULL, NULL, 1, NULL, '2022-06-14 06:37:51', '2022-06-14 06:37:51');

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
(8, 'header', '_token', 'nkJiQRdGRqNI9ZJVGcAaHJT9I6IKfCzi7E2uNG3C', '2022-06-10 09:20:50', '2022-06-14 07:05:39'),
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
(33, 'contact', '_token', 'nkJiQRdGRqNI9ZJVGcAaHJT9I6IKfCzi7E2uNG3C', '2022-06-10 09:27:25', '2022-06-14 07:30:02'),
(34, 'contact', 'parent_slug', 'contact', '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(35, 'contact', 'contact_heading', 'How can we help you?', '2022-06-10 09:27:25', '2022-06-14 07:38:37'),
(36, 'contact', 'contact_address', 'lorem ipsum', '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(37, 'contact', 'contact_email', 'info@freightlinknetworks.com', '2022-06-10 09:27:25', '2022-06-14 07:40:39'),
(38, 'contact', 'contact_phone', '123455555', '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(39, 'contact', 'contact_map', NULL, '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(40, 'contact', 'form_contact', NULL, '2022-06-10 09:27:25', '2022-06-10 09:27:25'),
(41, 'header', 'header_alert_message', 'Join our Affiliate Program and earn up to $500 per referral.', '2022-06-10 09:40:55', '2022-06-14 07:16:29'),
(42, 'about', '_token', 'N0b337FiWxOAdDpVPGeydG980kD20NgrAQehh9xR', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(43, 'about', 'parent_slug', 'about', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(44, 'about', 'about_heading', 'GLOBAL NETWORK', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(45, 'about', 'about_title', 'Join, Link and Ship in Just a Few Clicks.', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(46, 'about', 'about_content', '<p class=\"aos-init aos-animate\" data-aos=\"fade-up\">Freightlink is an all-in-one-network with all-encompassing benefits which meet the keystone needs of its members. Through our platform all members are better placed to improve their marketing and advertising, international reputation, service offerings and bottom-line.</p>\r\n<p class=\"aos-init aos-animate\" data-aos=\"fade-up\">Our members are of the highest quality and must meet all of our criteria before they are introduced to our community. We pride ourselves on selecting those members who are trusted in their field of expertise and who can bring the most to the network to ensure mutually beneficial partnerships for all members.</p>\r\n<p class=\"aos-init aos-animate\" data-aos=\"fade-up\">Unlike any other network, our members are able to be part of the development of the network by recommending trusted and professional partners. In so doing, members are able to earn a recurring commission based on the number of successful referrals.</p>', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(47, 'about', 'about_total_members', '100', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(48, 'about', 'about_total_countries', '100', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(49, 'about', 'about_total_cities', '100', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(50, 'about', 'about_total_offices', '100', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(51, 'about', 'about_status', '1', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(52, 'about', 'form_about', NULL, '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(53, 'about', 'about_side_image', '1306202215302362a7580fa9013.png', '2022-06-13 10:30:23', '2022-06-13 10:30:23'),
(54, 'about', 'about_bellow_label', 'Why The Best Companies Choose Freightlink.', '2022-06-13 10:37:24', '2022-06-13 10:37:24'),
(55, 'network', '_token', 'nkJiQRdGRqNI9ZJVGcAaHJT9I6IKfCzi7E2uNG3C', '2022-06-14 06:43:55', '2022-06-14 06:43:55'),
(56, 'network', 'parent_slug', 'network', '2022-06-14 06:43:55', '2022-06-14 06:43:55'),
(57, 'network', 'network_heading', 'BENEFITS', '2022-06-14 06:43:55', '2022-06-14 06:43:55'),
(58, 'network', 'network_title', 'Connecting Expands Possibilities.', '2022-06-14 06:43:55', '2022-06-14 06:43:55'),
(59, 'network', 'network_description', '<p class=\"aos-init aos-animate text-white\" data-aos=\"fade-up\">Freightlink Networks brings together trusted and respected logistics specialists from all over the world by offering an environment for freight forwarders to exchange business and find reliable partners in various different niche markets.</p>\r\n<p class=\"aos-init aos-animate text-white\" data-aos=\"fade-up\">By joining Freighlink you will have access to all members across the 5 networks, allowing you to strengthen your service offerings while still be financially protected under the Financial Protection Plan.</p>', '2022-06-14 06:43:55', '2022-06-14 06:43:55'),
(60, 'network', 'network_status', '1', '2022-06-14 06:43:55', '2022-06-14 06:43:55'),
(61, 'network', 'form_about', NULL, '2022-06-14 06:43:55', '2022-06-14 06:43:55'),
(62, 'header', 'header_white_logo', '14062022120539.png', '2022-06-14 07:05:39', '2022-06-14 07:05:39'),
(63, 'contact', 'contact_home_page_label', 'Dates to the next Freightlink Meeting in <br > 2023 are to be announced soon.', '2022-06-14 07:30:02', '2022-06-14 07:32:04'),
(64, 'contact', 'contact_description', 'Need to get in touch with us? Either fill out the form with your <br />\r\ninquiry or email us directly at', '2022-06-14 07:30:02', '2022-06-14 07:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `created_by`, `name`, `slug`, `description`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 1, 'FDRS', 'fdrs', '<p>FDRS Limited</p>', '13-06-2022-145703.png', 1, NULL, '2022-06-13 09:47:54', '2022-06-13 09:57:03'),
(5, 1, 'Freightrise', 'freightrise', '<p>Freightrise Limited</p>', '13-06-2022-144817.png', 1, NULL, '2022-06-13 09:48:17', '2022-06-13 09:48:17'),
(6, 1, 'Marsh', 'marsh', '<p>Marsh Limited</p>', '13-06-2022-144836.jfif', 1, NULL, '2022-06-13 09:48:36', '2022-06-13 09:48:36'),
(7, 1, 'Cargo', 'cargo', '<p>Cargo cover</p>', '13-06-2022-144902.png', 1, NULL, '2022-06-13 09:49:02', '2022-06-13 09:49:02'),
(8, 1, 'Freightify', 'freightify', '<p>Freightify</p>', '13-06-2022-145017.png', 1, NULL, '2022-06-13 09:50:17', '2022-06-13 09:50:17'),
(9, 1, 'Change', 'change', '<p>Change</p>', '13-06-2022-145621.png', 1, NULL, '2022-06-13 09:56:21', '2022-06-13 09:56:21');

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
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', NULL, '2022-06-09 06:05:13', '2022-06-09 06:05:13'),
(2, 'Company', 'web', 'Lorem ipsum', '2022-06-15 04:52:53', '2022-06-15 04:52:53'),
(3, 'User', 'web', 'Lorem ipsum', '2022-06-15 04:55:51', '2022-06-15 04:55:51');

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
(1, 3),
(2, 1),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_bar_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_bar_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_col1_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_col2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_col3_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_col4_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_copyright` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_recent_news_item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_recent_portfolio_item` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_button_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_button_url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_background_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_email_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_email_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_total_recent_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_news_heading_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_news_heading_recent_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_total_upcoming_event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_total_past_event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_event_heading_upcoming` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_event_heading_past` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_service_heading_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_service_heading_quick_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_portfolio_heading_project_detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_portfolio_heading_quick_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_end_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'test@user.com', 1, NULL, '2022-06-14 10:37:11', '2022-06-14 10:37:11'),
(2, NULL, 'teste22@gmail.com', 1, NULL, '2022-06-14 10:37:41', '2022-06-14 10:37:41'),
(3, NULL, 'chandamar725@gmail.com', 1, NULL, '2022-06-14 10:43:05', '2022-06-14 10:43:05'),
(4, NULL, 'superadmin@example.com', 1, NULL, '2022-06-15 03:13:41', '2022-06-15 03:13:41'),
(5, NULL, 'cibuxuzef@mailinator.com', 1, NULL, '2022-06-30 04:43:59', '2022-06-30 04:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `suggestion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temprary_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `verify_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offices` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `parent_id`, `user_id`, `title`, `name`, `last_name`, `phone`, `email`, `temprary_email`, `email_verified_at`, `password`, `remember_token`, `status`, `verify_token`, `image`, `company_name`, `website`, `country`, `city`, `offices`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, '4046', NULL, 'Admin', '', '123456789', 'admin@gmail.com', NULL, NULL, '$2y$10$RquT5D0lIvBFuG0MrsL6G.OifRI.sSmAKqJ3M8qwByYm2DgxFXaBO', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 07:06:07', '2022-06-30 08:06:24'),
(11, NULL, '3639', NULL, 'Kirby Terrell', NULL, NULL, 'chandamar725@gmail.com', NULL, NULL, '$2y$10$m00ha7bfzEd1m3QzouMGueU4HLeBIJ5PWFr1sacQnbF6.LZ/6dlF.', NULL, 1, '62ac6dfe33127', NULL, 'Castro Mccormick Plc', 'https://www.rudepusiba.com.au', 'Enim rerum eligendi', 'Ut debitis illo quam', NULL, NULL, '2022-06-15 07:57:04', '2022-06-17 07:05:18'),
(12, NULL, '3135', NULL, 'John Doe', NULL, NULL, 'johndoe@brothers.com', NULL, NULL, '$2y$10$1H7vPGCc8i61YxON3..Jc.X.9zwvU.AfepuuP3BoGUYnkmaVsMBZa', NULL, 1, NULL, NULL, 'John Doe & brothers', 'www.johndoebrothers.com', 'USA', 'Toronto', NULL, NULL, '2022-06-29 10:35:38', '2022-06-29 10:35:38'),
(13, NULL, '9173', NULL, 'Amar', NULL, NULL, 'softwaredeveloper992@gmail.com', NULL, NULL, '$2y$10$vS9le6.9UxXTRJFWN8YghutMoHH.n6tj10u.ItRe7V/s3vdNLf/06', NULL, 1, NULL, NULL, 'Amar Geo Tag', 'www.amargeotag.com', 'Pakistan', 'Karachi', NULL, NULL, '2022-06-29 10:37:31', '2022-06-29 10:37:31'),
(14, NULL, '1603', NULL, 'Rhona Nixon', NULL, NULL, 'zowawecyly@mailinator.com', NULL, NULL, '$2y$10$k7ohYMCDzv0NXoRA1wN9Ju1TeMM0unJfJRdwn7VoTXS5lMe4543cm', NULL, 1, NULL, NULL, 'Rosario Boyle Trading', 'https://www.galubohyhyviduz.me', 'Sit commodo ut nihi', 'Deserunt voluptatibu', NULL, NULL, '2022-06-30 04:44:13', '2022-06-30 04:44:13'),
(15, 1, '1078', 'redanydyqe', 'zaxihi Lore ipsum', 'sytugebi', '34343', 'quno@mailinator.com', NULL, NULL, '$2y$10$t/dAgcK3zuWA772UsLI/A.Uvo6nGl2x6odKzGsW6i2ibwtaomqCOC', NULL, 1, NULL, '01-07-2022-100636.png', NULL, NULL, NULL, NULL, '[null,null,\"Voluptate vel possim\"]', NULL, '2022-07-01 05:06:36', '2022-07-01 05:49:56'),
(16, 1, '2116', 'runuvokym', 'mevyhy', 'nemotyquca', NULL, 'qyjivon@mailinator.com', NULL, NULL, '$2y$10$cCks0qw/M7vl5zM5hhJzmOlnhGVm8YYJhz0FgzR71VL5YLNvcDYxq', NULL, 1, NULL, '01-07-2022-105019.png', NULL, NULL, NULL, NULL, '[\"Hic labore omnis et\"]', NULL, '2022-07-01 05:50:19', '2022-07-01 05:50:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_networks`
--
ALTER TABLE `company_networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connect_expands_possibilities`
--
ALTER TABLE `connect_expands_possibilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_histories`
--
ALTER TABLE `login_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_settings`
--
ALTER TABLE `mail_settings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `partners`
--
ALTER TABLE `partners`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_networks`
--
ALTER TABLE `company_networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `connect_expands_possibilities`
--
ALTER TABLE `connect_expands_possibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_histories`
--
ALTER TABLE `login_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mail_settings`
--
ALTER TABLE `mail_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `networks`
--
ALTER TABLE `networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `page_settings`
--
ALTER TABLE `page_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
