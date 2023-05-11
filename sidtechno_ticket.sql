-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2023 at 07:12 AM
-- Server version: 5.7.41-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidtechno_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_feature`
--

CREATE TABLE `admin_feature` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `feature` varchar(256) NOT NULL,
  `value` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_feature`
--

INSERT INTO `admin_feature` (`id`, `admin_id`, `feature`, `value`, `created_at`, `updated_at`) VALUES
(7, 1, 'read_user', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(8, 1, 'add_user', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(9, 1, 'delete_user', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(10, 1, 'verify_user', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(11, 1, 'edit_user', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(12, 1, 'read_admin_log', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(13, 1, 'edit_admin_features', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(14, 1, 'read_admin', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(15, 1, 'add_admin', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(16, 1, 'delete_admin', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(17, 1, 'edit_admin', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(18, 1, 'send_reply_features', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(19, 1, 'read_reply_ticket', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(20, 1, 'reply_edit_ticket', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(21, 1, 'reply_delete_ticket', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(22, 1, 'update_status_ticket', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(23, 1, 'read_ticket', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(24, 1, 'delete_ticket', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(25, 1, 'read_repair', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(26, 1, 'delete_repair', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(27, 1, 'update_repair_status', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(28, 1, 'read_repair_reply', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(29, 1, 'edit_repair', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(30, 1, 'send_repair_reply', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(31, 1, 'delete_repair_reply', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(32, 1, 'edit_repair_reply', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(33, 1, 'read_repair_notes', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(34, 1, 'send_repair_notes', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(35, 1, 'delete_repair_notes', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(36, 1, 'edit_repair_notes', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(37, 1, 'read_repair_payment', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(38, 1, 'send_repair_payment', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(39, 1, 'view_invoice', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(40, 1, 'delete_repair_payment', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(41, 1, 'edit_repair_payment', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(42, 1, 'read_bitmain', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(43, 1, 'add_bitmain', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(44, 1, 'delete_bitmain', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(45, 1, 'receive_customer_reply_mail', '1', '2023-05-06 02:41:54', '2023-05-06 02:41:54'),
(50, 1, 'read_ticket_notes', '1', '2023-05-06 10:05:19', '2023-05-06 10:05:19'),
(51, 1, 'send_ticket_notes', '1', '2023-05-06 10:05:50', '2023-05-06 10:05:50'),
(52, 1, 'delete_ticket_notes', '1', '2023-05-06 10:05:50', '2023-05-06 10:05:50'),
(53, 1, 'edit_ticket_notes', '1', '2023-05-06 10:05:50', '2023-05-06 10:05:50'),
(54, 1, 'assign_user', '1', '2023-05-06 13:46:26', '2023-05-06 13:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `admin_id`, `message`, `status`, `created_at`, `updated_at`) VALUES
(88, 1, 'Login from IP:73.77.1.141 at May 7, 2023, 8:23 pm', 0, '2023-05-08 03:23:02', '2023-05-08 03:23:02'),
(89, 1, 'Login from IP:73.77.1.141 at May 8, 2023, 4:03 am', 0, '2023-05-08 11:03:34', '2023-05-08 11:03:34'),
(90, 1, 'Login from IP:103.244.176.197 at May 8, 2023, 11:16 am', 0, '2023-05-08 18:16:43', '2023-05-08 18:16:43'),
(91, 1, 'Update User to verify \" (saad18@sidtechno.com)\" from IP:103.244.176.197 at May 8, 2023, 11:17 am', 0, '2023-05-08 18:17:10', '2023-05-08 18:17:10'),
(92, 1, 'Update User to verify \" (saad18@sidtechno.com)\" from IP:103.244.176.197 at May 8, 2023, 11:17 am', 0, '2023-05-08 18:17:15', '2023-05-08 18:17:15'),
(93, 1, 'Update User to verify \" (saad18@sidtechno.com)\" from IP:103.244.176.197 at May 8, 2023, 11:18 am', 0, '2023-05-08 18:18:36', '2023-05-08 18:18:36'),
(94, 1, 'Login from IP:103.244.176.197 at May 8, 2023, 2:53 pm', 0, '2023-05-08 21:53:07', '2023-05-08 21:53:07'),
(95, 1, 'Update User to verify \" (saad17@sidtechno.com)\" from IP:103.244.176.197 at May 8, 2023, 2:53 pm', 0, '2023-05-08 21:53:26', '2023-05-08 21:53:26'),
(96, 1, 'Login from IP:73.77.1.141 at May 8, 2023, 5:07 pm', 0, '2023-05-09 00:07:12', '2023-05-09 00:07:12'),
(97, 1, 'Login from IP:103.244.176.197 at May 9, 2023, 3:26 am', 0, '2023-05-09 10:26:05', '2023-05-09 10:26:05'),
(98, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 3:26 am', 0, '2023-05-09 10:26:16', '2023-05-09 10:26:16'),
(99, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 3:33 am', 0, '2023-05-09 10:33:30', '2023-05-09 10:33:30'),
(100, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 3:36 am', 0, '2023-05-09 10:36:46', '2023-05-09 10:36:46'),
(101, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 3:36 am', 0, '2023-05-09 10:36:51', '2023-05-09 10:36:51'),
(102, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 3:49 am', 0, '2023-05-09 10:49:04', '2023-05-09 10:49:04'),
(103, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 3:51 am', 0, '2023-05-09 10:51:34', '2023-05-09 10:51:34'),
(104, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 3:52 am', 0, '2023-05-09 10:52:30', '2023-05-09 10:52:30'),
(105, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 3:52 am', 0, '2023-05-09 10:52:50', '2023-05-09 10:52:50'),
(106, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 3:59 am', 0, '2023-05-09 10:59:07', '2023-05-09 10:59:07'),
(107, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 4:01 am', 0, '2023-05-09 11:01:36', '2023-05-09 11:01:36'),
(108, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 4:02 am', 0, '2023-05-09 11:02:16', '2023-05-09 11:02:16'),
(109, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 4:03 am', 0, '2023-05-09 11:03:21', '2023-05-09 11:03:21'),
(110, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 4:03 am', 0, '2023-05-09 11:03:24', '2023-05-09 11:03:24'),
(111, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 4:08 am', 0, '2023-05-09 11:08:57', '2023-05-09 11:08:57'),
(112, 1, 'Update User to verify \" (saad16@sidtechno.com)\" from IP:103.244.176.197 at May 9, 2023, 4:39 am', 0, '2023-05-09 11:39:12', '2023-05-09 11:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'New Bookkeeping Client', '2021-10-04 07:47:40', '2021-10-04 07:47:40'),
(2, 'New Payroll Client', '2021-10-04 07:47:40', '2021-10-04 07:47:40'),
(3, 'New Personal Tax Return Client', '2021-10-04 07:47:40', '2021-10-04 07:47:40'),
(4, 'Support', '2021-10-04 07:47:40', '2021-10-04 07:47:40'),
(5, 'taxpros911 Support', '2021-10-04 07:47:40', '2021-10-04 07:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_20_145543_create_permission_tables', 1),
(6, '2021_10_08_204608_create_tickets_table', 1),
(7, '2021_10_08_205017_create_categories_table', 1),
(8, '2021_10_09_121112_create_tickets_reply_table', 1),
(9, '2021_10_11_204459_create_ticket_status_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 63),
(2, 'App\\Models\\User', 64),
(2, 'App\\Models\\User', 65),
(2, 'App\\Models\\User', 66),
(2, 'App\\Models\\User', 67),
(2, 'App\\Models\\User', 68),
(2, 'App\\Models\\User', 69),
(2, 'App\\Models\\User', 70),
(2, 'App\\Models\\User', 71),
(2, 'App\\Models\\User', 72),
(2, 'App\\Models\\User', 73),
(2, 'App\\Models\\User', 74),
(2, 'App\\Models\\User', 75),
(2, 'App\\Models\\User', 76),
(2, 'App\\Models\\User', 77),
(2, 'App\\Models\\User', 78),
(2, 'App\\Models\\User', 79),
(2, 'App\\Models\\User', 80),
(2, 'App\\Models\\User', 81),
(2, 'App\\Models\\User', 82),
(2, 'App\\Models\\User', 83),
(2, 'App\\Models\\User', 84),
(2, 'App\\Models\\User', 85),
(2, 'App\\Models\\User', 86),
(2, 'App\\Models\\User', 87),
(2, 'App\\Models\\User', 88),
(2, 'App\\Models\\User', 89),
(2, 'App\\Models\\User', 90),
(2, 'App\\Models\\User', 91);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit', 'web', '2021-10-12 22:37:06', '2021-10-12 22:37:06'),
(2, 'delete', 'web', '2021-10-12 22:37:06', '2021-10-12 22:37:06'),
(3, 'publish', 'web', '2021-10-12 22:37:06', '2021-10-12 22:37:06'),
(4, 'unpublish', 'web', '2021-10-12 22:37:06', '2021-10-12 22:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-10-12 22:37:06', '2021-10-12 22:37:06'),
(2, 'user', 'web', '2021-10-12 22:37:06', '2021-10-12 22:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` text COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `attechment` text COLLATE utf8_unicode_ci,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `selected_lang` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `show_ticket` int(11) NOT NULL DEFAULT '2',
  `flag` int(11) NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci,
  `ischecked` int(11) NOT NULL DEFAULT '0',
  `last_admin_reply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_admin_reply` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `number`, `subject`, `category_id`, `description`, `attechment`, `user_id`, `user_email`, `selected_lang`, `status`, `show_ticket`, `flag`, `file_name`, `ischecked`, `last_admin_reply_date`, `last_admin_reply`, `created_at`, `updated_at`) VALUES
(37, 'NEW-0507202301', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 63, 'saad_sinpk@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 20:24:40', 0, '2023-05-08 03:24:40', '2023-05-08 03:24:40'),
(38, 'NEW-0507202302', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 64, 'saad_sinpk2@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 20:25:09', 0, '2023-05-08 03:25:09', '2023-05-08 03:25:09'),
(39, 'NEW-0507202303', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 65, 'saad_sinpk3@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 20:42:14', 0, '2023-05-08 03:42:14', '2023-05-08 03:42:14'),
(40, 'NEW-0507202304', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 66, 'saad_sinpk4@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 20:59:10', 0, '2023-05-08 03:59:10', '2023-05-08 03:59:10'),
(41, 'NEW-0507202305', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 67, 'saad_sinpk5@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 21:03:43', 0, '2023-05-08 04:03:43', '2023-05-08 04:03:43'),
(42, 'NEW-0507202306', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 68, 'saad_sinpk6@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 21:06:30', 0, '2023-05-08 04:06:30', '2023-05-08 04:06:30'),
(43, 'NEW-0507202307', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 69, 'saad_sinpk7@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 21:07:17', 0, '2023-05-08 04:07:17', '2023-05-08 04:07:17'),
(44, 'NEW-0507202308', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 70, 'saad_sinpk8@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 21:09:23', 0, '2023-05-08 04:09:23', '2023-05-08 04:09:23'),
(45, 'NEW-0507202309', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 71, 'saad_sinpk9@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 21:10:23', 0, '2023-05-08 04:10:23', '2023-05-08 04:10:23'),
(46, 'NEW-0507202310', 'This is testing ticket', 2, 'ok here is description\r\nand its tesitng ticket.', NULL, 72, 'saad_sinpk10@yahoo.com', 'en', 1, 2, 1, NULL, 0, '2023-05-07 21:11:08', 0, '2023-05-08 04:11:08', '2023-05-08 04:11:08'),
(47, 'NEW-0508202311', 'Testing', 2, 'Testing', NULL, 73, 'taxpros911@gmail.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 04:06:45', 0, '2023-05-08 11:06:45', '2023-05-08 11:06:45'),
(48, 'TAX-0508202312', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 74, 'saad@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 06:08:03', 0, '2023-05-08 13:08:03', '2023-05-08 13:08:03'),
(49, 'TAX-0508202313', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 75, 'saad2@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 06:12:15', 0, '2023-05-08 13:12:15', '2023-05-08 13:12:15'),
(50, 'TAX-0508202314', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 76, 'saad3@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 06:13:38', 0, '2023-05-08 13:13:38', '2023-05-08 13:13:38'),
(51, 'TAX-0508202315', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 77, 'saad4@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 06:31:25', 0, '2023-05-08 13:31:25', '2023-05-08 13:31:25'),
(52, 'TAX-0508202316', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 78, 'saad5@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 06:31:47', 0, '2023-05-08 13:31:47', '2023-05-08 13:31:47'),
(53, 'TAX-0508202317', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 79, 'saad6@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 06:32:02', 0, '2023-05-08 13:32:02', '2023-05-08 13:32:02'),
(54, 'TAX-0508202318', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 80, 'saad7@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 06:32:29', 0, '2023-05-08 13:32:29', '2023-05-08 13:32:29'),
(55, 'TAX-0508202319', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 81, 'saad8@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 07:11:09', 0, '2023-05-08 14:11:09', '2023-05-08 14:11:09'),
(56, 'TAX-0508202320', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 82, 'saad9@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 07:37:49', 0, '2023-05-08 14:37:49', '2023-05-08 14:37:49'),
(57, 'TAX-0508202321', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 83, 'saad10@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 09:28:25', 0, '2023-05-08 16:28:25', '2023-05-08 16:28:25'),
(58, 'TAX-0508202322', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 84, 'saad11@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 09:34:30', 0, '2023-05-08 16:34:30', '2023-05-08 16:34:30'),
(59, 'TAX-0508202323', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 85, 'saad12@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 09:51:25', 0, '2023-05-08 16:51:25', '2023-05-08 16:51:25'),
(60, 'TAX-0508202324', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 86, 'saad13@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 09:52:23', 0, '2023-05-08 16:52:23', '2023-05-08 16:52:23'),
(61, 'TAX-0508202325', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 87, 'saad14@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 09:54:30', 0, '2023-05-08 16:54:30', '2023-05-08 16:54:30'),
(62, 'TAX-0508202326', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 88, 'saad15@sidtechno.com', 'en', 1, 2, 1, NULL, 0, '2023-05-08 09:56:25', 0, '2023-05-08 16:56:25', '2023-05-08 16:56:25'),
(63, 'TAX-0508202327', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 89, 'saad16@sidtechno.com', 'en', 1, 1, 1, NULL, 0, '2023-05-08 09:58:57', 0, '2023-05-08 16:58:57', '2023-05-09 10:26:16'),
(64, 'TAX-0508202328', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 90, 'saad17@sidtechno.com', 'en', 1, 1, 1, NULL, 1, '2023-05-08 09:59:22', 0, '2023-05-08 16:59:22', '2023-05-09 00:09:05'),
(65, 'TAX-0508202329', 'Testing', 5, 'This is example of ticeket\r\nthis is for testing', NULL, 91, 'saad18@sidtechno.com', 'en', 1, 1, 1, NULL, 0, '2023-05-08 10:00:50', 0, '2023-05-08 17:00:50', '2023-05-08 18:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `tickets_reply`
--

CREATE TABLE `tickets_reply` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_assign`
--

CREATE TABLE `ticket_assign` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_notes`
--

CREATE TABLE `ticket_notes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `file_name` varchar(256) NOT NULL,
  `description` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_status`
--

CREATE TABLE `ticket_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_status`
--

INSERT INTO `ticket_status` (`id`, `option`, `created_at`, `updated_at`) VALUES
(1, 'new', '2021-10-04 07:47:40', '2021-10-04 07:47:40'),
(2, 'Open', '2021-10-04 07:47:40', '2021-10-04 07:47:40'),
(3, 'Reply', '2021-10-04 07:47:40', '2021-10-04 07:47:40'),
(4, 'Pending', '2021-10-04 07:47:40', '2021-10-04 07:47:40'),
(5, 'Complete', '2021-10-04 07:47:40', '2021-10-04 07:47:40'),
(6, 'Processing', '2021-10-04 07:47:40', '2021-10-04 07:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `button` varchar(256) NOT NULL,
  `description` longtext NOT NULL,
  `title` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `email`, `button`, `description`, `title`, `created_at`, `updated_at`) VALUES
(19, 'admin@taxpros911.com', '{\"title\":\"New Ticket Published\",\"description\":\" Created a new Ticket. You can view ticket by click bellow\",\"button\":\"View ticket\",\"url\":\"https:\\/\\/support.taxpros911.com\\/admin\\/ticket\\/view\\/63\"}', '', '', '2023-05-09 11:39:17', '2023-05-09 11:39:17'),
(20, 'saad16@sidtechno.com', '{\"title\":\"Your ticket has been published\",\"description\":\"Dear  your ticket with number: TAX-0508202327 has been published. Please wait for response by one of our staff members.\",\"button\":\"View ticket\",\"url\":\"https:\\/\\/support.taxpros911.com\\/user\\/ticket-v', '', '', '2023-05-09 11:39:22', '2023-05-09 11:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` text COLLATE utf8_unicode_ci,
  `last_name` text COLLATE utf8_unicode_ci,
  `company` text COLLATE utf8_unicode_ci,
  `address_line_one` text COLLATE utf8_unicode_ci,
  `address_line_two` text COLLATE utf8_unicode_ci,
  `postal` text COLLATE utf8_unicode_ci,
  `state` text COLLATE utf8_unicode_ci,
  `city` text COLLATE utf8_unicode_ci,
  `country` text COLLATE utf8_unicode_ci,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify_token` text COLLATE utf8_unicode_ci,
  `verify` int(11) NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `company`, `address_line_one`, `address_line_two`, `postal`, `state`, `city`, `country`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `verify_token`, `verify`, `created_at`, `updated_at`) VALUES
(1, 'euronetimports', 'Muhammad', 'Saad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@taxpros911.com', '2021-10-12 22:37:07', '$2a$12$0/YSZolsxV0dBkkmtYeZOexlKpZqRohHx3s7lFaFBh2dm.6RCKMBu', 'zD54bswzgRCmsvBYztSivwYI9tMkrQ8GEDgEyhn9y5wncuyqvfpkH68LJZ0h', NULL, 1, '2021-10-12 22:37:07', '2021-10-12 22:37:07'),
(63, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk@yahoo.com', NULL, '$2y$10$nssydojOwZ3WsqaQvF.CpOfpUCnDgPTvEffX4oRZFCePcvqVX/2cW', NULL, 'MDUwNzIwMjM0NzU3NA%3D%3D', 2, '2023-05-08 03:24:40', '2023-05-08 03:24:40'),
(64, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk2@yahoo.com', NULL, '$2y$10$8RytPv4aAITt.0oX7FixJeIT9tP2l6Ep67AFNjkihAVsiihtUlPge', NULL, 'MDUwNzIwMjMxNjg0OQ%3D%3D', 2, '2023-05-08 03:25:09', '2023-05-08 03:25:09'),
(65, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk3@yahoo.com', NULL, '$2y$10$uv9hi/bqsQPPu2icukE2LeM9fNnqnv6vIMClDqDcq3z5VrsPOt.sO', NULL, 'MDUwNzIwMjM1NzcxMA%3D%3D', 2, '2023-05-08 03:42:14', '2023-05-08 03:42:14'),
(66, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk4@yahoo.com', NULL, '$2y$10$b7QPIT/xfHhyVKuCOo/oreKJa.LHA0d3TUuLJOE0R2qvnRCL51RIG', NULL, 'MDUwNzIwMjM0OTA4Mw%3D%3D', 2, '2023-05-08 03:59:10', '2023-05-08 03:59:10'),
(67, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk5@yahoo.com', NULL, '$2y$10$OUxLQHpFtyWMNkyhqWJaZe5Gw33jIUnXVmusiEUclYYbVuRUZKmwa', NULL, 'MDUwNzIwMjM3NDAz', 2, '2023-05-08 04:03:43', '2023-05-08 04:03:43'),
(68, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk6@yahoo.com', NULL, '$2y$10$ZZ3t98i1RXONMrXjI13GMez8zY8uAXTljsLJe8WyTA7vc01K48RxS', NULL, 'MDUwNzIwMjM0MjE5MA%3D%3D', 2, '2023-05-08 04:06:30', '2023-05-08 04:06:30'),
(69, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk7@yahoo.com', NULL, '$2y$10$cDiLv35S1y9aFOD/QDxxyeV3NEgkZZOC6nTXRigg/sTcpgB3qGufy', NULL, 'MDUwNzIwMjMxNjE2Mg%3D%3D', 2, '2023-05-08 04:07:17', '2023-05-08 04:07:17'),
(70, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk8@yahoo.com', NULL, '$2y$10$oWX5Hytqswo/xqNXC5KqfeQKlMLOoohNT/tJybNlU8vYriNLTvMMK', NULL, 'MDUwNzIwMjM3NTE1MQ%3D%3D', 2, '2023-05-08 04:09:23', '2023-05-08 04:09:23'),
(71, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk9@yahoo.com', NULL, '$2y$10$4Ql6UK4LBYg1Wxz5Dok6w.u4piUO1CAOJVJYAw0UaMv2HPoY5U6Om', NULL, 'MDUwNzIwMjM1MjQxNw%3D%3D', 2, '2023-05-08 04:10:23', '2023-05-08 04:10:23'),
(72, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'Sindh', 'KARACHI', 'Pakistan', NULL, 'saad_sinpk10@yahoo.com', NULL, '$2y$10$J5/EYkBxWVmiTCZzkkywqeusgfFjfSytKh3a5tMxfqnQTBFSaQRcW', NULL, 'MDUwNzIwMjM1MTc4MA%3D%3D', 2, '2023-05-08 04:11:08', '2023-05-08 04:11:08'),
(73, '', 'LaShaunda', 'Colvin', 'Tax Pros 911 & Bookkeeping Services', '123 Anywhere Address', NULL, '77701', 'Texas', 'Katy', 'USA', NULL, 'taxpros911@gmail.com', NULL, '$2y$10$C6b1TJ8dfbtY7y1bopfWcedMxuYA5Xp0QzO2gfpu9qZX703u8yDyW', NULL, 'MDUwODIwMjM5MTg3Mw%3D%3D', 2, '2023-05-08 11:06:45', '2023-05-08 11:06:45'),
(74, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad@sidtechno.com', NULL, '$2y$10$bVWaYlmcyqS3WjbzeU85bua7SkxHp.ZYwy2BD9OZxiLzD7zMQD98e', NULL, 'MDUwODIwMjM4NzQ4OA%3D%3D', 2, '2023-05-08 13:08:03', '2023-05-08 13:08:03'),
(75, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad2@sidtechno.com', NULL, '$2y$10$NPvofNFb1A3pmZKnZkwes.vmayg8m413p./lDfkKcAUoNHPqIXd6e', NULL, 'MDUwODIwMjM0NTkyMw%3D%3D', 2, '2023-05-08 13:12:15', '2023-05-08 13:12:15'),
(76, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad3@sidtechno.com', NULL, '$2y$10$Q7XjdBSVf3tkgXSV/pw2JejNBTRGLZXCuKs.u1lfd/WKoXLjG0QpG', NULL, 'MDUwODIwMjM5MTQ5NQ%3D%3D', 2, '2023-05-08 13:13:38', '2023-05-08 13:13:38'),
(77, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad4@sidtechno.com', NULL, '$2y$10$Z9rBPbS56X4n/9fYfTej7uNAA6j/X/obuksLrzXzY6L9ydRQHWt6W', NULL, 'MDUwODIwMjM0MjU2MA%3D%3D', 2, '2023-05-08 13:31:25', '2023-05-08 13:31:25'),
(78, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad5@sidtechno.com', NULL, '$2y$10$dVeMROMQE7n6fjeR9MiI4OD4jvnknzfO1/KAk6745OuH1yegmBe6.', NULL, 'MDUwODIwMjM2MTI1Nw%3D%3D', 2, '2023-05-08 13:31:47', '2023-05-08 13:31:47'),
(79, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad6@sidtechno.com', NULL, '$2y$10$JexpQr2.vmZH3FbHAeV3w.0TlfvAhe8cix1tZZjP1sI/OAanu.H5u', NULL, 'MDUwODIwMjM4MTYxMw%3D%3D', 2, '2023-05-08 13:32:02', '2023-05-08 13:32:02'),
(80, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad7@sidtechno.com', NULL, '$2y$10$Gq7o3S3vyAqMwOsSFgkSB./ekxh90vh7qKARk3iPBa.k5WkHdrcSu', NULL, 'MDUwODIwMjM4NDExMQ%3D%3D', 2, '2023-05-08 13:32:29', '2023-05-08 13:32:29'),
(81, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad8@sidtechno.com', NULL, '$2y$10$IdOQPO0HhU9sgaQAt6FaTu/l71C2LF8uv1dVW..D81XsW9TZ5/rSu', NULL, 'MDUwODIwMjM1MTQ0MA%3D%3D', 2, '2023-05-08 14:11:09', '2023-05-08 14:11:09'),
(82, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad9@sidtechno.com', NULL, '$2y$10$/jhxnGHKADQ9feaD3f3Za.9N.u6FXMT8qnbkI8jhmE1KO8rbQi3I.', NULL, 'MDUwODIwMjM2MTkyNA%3D%3D', 2, '2023-05-08 14:37:49', '2023-05-08 14:37:49'),
(83, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad10@sidtechno.com', NULL, '$2y$10$QYEYF.1u8ME/2eeZKKm1reYFk6L35k3m10stDNVF0dhtZz/oi7Hle', NULL, 'MDUwODIwMjMyMjc1Mw%3D%3D', 2, '2023-05-08 16:28:25', '2023-05-08 16:28:25'),
(84, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad11@sidtechno.com', NULL, '$2y$10$mGC4YBMCjDdkuX5wjckLEutYBF6KUNTYn1uEmEU9czm8r2BRwFKgO', NULL, 'MDUwODIwMjMyMDAxMA%3D%3D', 2, '2023-05-08 16:34:30', '2023-05-08 16:34:30'),
(85, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad12@sidtechno.com', NULL, '$2y$10$GHAaT9xA.qty2T1dF5NnkO7b6/wXUu0JmKWuwtsJlsEnFbdU5XKpK', NULL, 'MDUwODIwMjM0Nzk4MA%3D%3D', 2, '2023-05-08 16:51:25', '2023-05-08 16:51:25'),
(86, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad13@sidtechno.com', NULL, '$2y$10$P3QQp7B9rRmbPTVmwr8Q8.bbKMJsWW2r2qL.2XqzRBByL8suquu96', NULL, 'MDUwODIwMjMyNjEzOQ%3D%3D', 2, '2023-05-08 16:52:23', '2023-05-08 16:52:23'),
(87, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad14@sidtechno.com', NULL, '$2y$10$fudVjSMjmgf02lFQmhIi9.bOpcj3y5/HUXI8Gug824WSi4YNYnsuG', NULL, 'MDUwODIwMjMxNTU5OA%3D%3D', 2, '2023-05-08 16:54:30', '2023-05-08 16:54:30'),
(88, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad15@sidtechno.com', NULL, '$2y$10$NJgDthbbX7eUZ5oxUditEuqfb4EGBc/rfDCmF13uJw2jGqnlxsw.2', NULL, 'MDUwODIwMjM4MDI5', 2, '2023-05-08 16:56:25', '2023-05-08 16:56:25'),
(89, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad16@sidtechno.com', NULL, '$2y$10$hUMgkXBjE1hmAlM6eZK7r.PWVAgfR9bpMkiX/TJOxtq0xrJ3h2UBK', NULL, 'MDUwODIwMjM0NDMzNw%3D%3D', 1, '2023-05-08 16:58:57', '2023-05-09 10:26:16'),
(90, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad17@sidtechno.com', NULL, '$2y$10$5DrNrm4pi8p0REnZYK/2V.ltSTMkcWbZ14XqReZB13kqE1DA8meDm', NULL, 'MDUwODIwMjM3NDcxNg%3D%3D', 1, '2023-05-08 16:59:22', '2023-05-08 21:53:26'),
(91, '', 'Muhammad', 'Saad', 'Sid Techno', 'FLAT 302, JUMANI RESIDENCY, KHARADAR', NULL, '74100', 'sINDH', 'KARACHI', 'Pakistan', NULL, 'saad18@sidtechno.com', NULL, '$2y$10$DeIte4uJ9/t6Dso8ukKMteBHqHey.BYZSXyjhgYiApKkm6XrMRcdG', NULL, 'MDUwODIwMjMxMDI0Mg%3D%3D', 1, '2023-05-08 17:00:50', '2023-05-08 18:17:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_feature`
--
ALTER TABLE `admin_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
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
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets_reply`
--
ALTER TABLE `tickets_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_assign`
--
ALTER TABLE `ticket_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_notes`
--
ALTER TABLE `ticket_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_status`
--
ALTER TABLE `ticket_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
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
-- AUTO_INCREMENT for table `admin_feature`
--
ALTER TABLE `admin_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fileupload`
--
ALTER TABLE `fileupload`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tickets_reply`
--
ALTER TABLE `tickets_reply`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ticket_assign`
--
ALTER TABLE `ticket_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ticket_notes`
--
ALTER TABLE `ticket_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket_status`
--
ALTER TABLE `ticket_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

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
