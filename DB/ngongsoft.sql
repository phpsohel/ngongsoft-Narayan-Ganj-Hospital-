-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2023 at 01:56 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngongsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `garments`
--

CREATE TABLE `garments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licence_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1' COMMENT '1. Active 2. Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `garments`
--

INSERT INTO `garments` (`id`, `name`, `email`, `phone`, `address`, `licence_no`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fakir Knight Wears Ltd', 'engrsohel123@gmail.com', '+8801686247464', 'Demra', '12844883373', NULL, '1', '2023-01-09 06:00:11', '2023-01-28 01:30:12'),
(7, 'Adamji EPZ, Siddirganj, Narayanganj', 'adamzi@gmail.com', '01686247464', 'Dhaka Gazipor', '12844883373', NULL, '1', '2023-01-09 06:00:11', '2023-01-28 01:29:32'),
(8, '\r\nNR Garments Ltd.', 'adamzi@gmail.com', '01515607893', 'Dhaka Gazipor', '12844883373', NULL, '1', '2023-01-09 06:00:11', '2023-01-14 23:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `generalsettings`
--

CREATE TABLE `generalsettings` (
  `id` bigint UNSIGNED NOT NULL,
  `site_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `site_title`, `address`, `phone`, `email`, `site_logo`, `created_at`, `updated_at`) VALUES
(1, 'Narayan Ganj Health', 'Narayan Ganj', '01686247464', 'admin@gmail.com', '2023-02-12 nrb-e1672919570541-300x273.png', '2023-01-03 00:47:00', '2023-02-12 01:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint UNSIGNED NOT NULL,
  `cbc_sl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `education` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cbc_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '2' COMMENT '1.Paid 2.Unpaid',
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '2' COMMENT '1.Approve 2.pending 3.Reject',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `cbc_sl`, `member_name`, `father_name`, `mother_name`, `address`, `permanent_address`, `birth`, `education`, `company_name`, `designation`, `company_address`, `phone`, `email`, `blood`, `nid`, `cbc_type`, `photo`, `payment_status`, `note`, `application_status`, `created_at`, `updated_at`) VALUES
(1, 'CBC-1001', 'qujas@mailinator.com', 'rebup@mailinator.com', 'nyfuwenabu@mailinator.com', 'dynywot@mailinator.com', 'veno@mailinator.com', '1982-09-09', 'lyvy@mailinator.com', 'miruhi@mailinator.com', 'dytykekoq@mailinator.com', 'dyfonad@mailinator.com', 'pocaja@mailinator.com', 'xaqahoquba@mailinator.com', 'nywipif@mailinator.com', '23', '2', '2023-01-03 login-bg.jpg', '2', NULL, '1', '2023-01-03 00:47:48', '2023-01-03 05:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(101, '2014_10_12_000000_create_users_table', 1),
(102, '2014_10_12_100000_create_password_resets_table', 1),
(103, '2019_08_19_000000_create_failed_jobs_table', 1),
(104, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(105, '2022_10_27_042237_create_customers_table', 1),
(106, '2022_10_27_055057_create_domain__hostings_table', 1),
(107, '2022_12_06_042651_create_containers_table', 1),
(108, '2022_12_15_103651_create_members_table', 1),
(109, '2022_12_26_065005_create_permission_tables', 1),
(110, '2022_12_26_120327_create_generalsettings_table', 1),
(111, '2023_01_09_061808_create_garments_table', 2),
(112, '2023_01_15_063941_create_workers_table', 3),
(113, '2023_01_16_054304_create_services_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `id` int NOT NULL,
  `garment_id` bit(1) NOT NULL,
  `worker_id` int NOT NULL,
  `name` varchar(26) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `designation` varchar(26) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `nid_no` varchar(19) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `blood_group` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD14` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD15` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD16` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD17` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD18` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD19` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD20` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD21` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD22` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD23` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD24` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD25` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FIELD26` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`id`, `garment_id`, `worker_id`, `name`, `email`, `designation`, `phone`, `nid_no`, `blood_group`, `gender`, `department`, `created_at`, `updated_at`, `FIELD14`, `FIELD15`, `FIELD16`, `FIELD17`, `FIELD18`, `FIELD19`, `FIELD20`, `FIELD21`, `FIELD22`, `FIELD23`, `FIELD24`, `FIELD25`, `FIELD26`) VALUES
(1, b'1', 1001743, 'Sumon Kante Singha', NULL, 'GM (HR & Compliance)', '1612282535', '\'7305395738', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, b'1', 103, 'Nasima Begum', NULL, 'Senior Manager', '1613368019', '\'689 965 9814', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, b'1', 105, 'Md. Nurujjaman', NULL, 'Deputy Manager', '1613368084', '\'2817984616', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, b'1', 107, 'Mahmuda Rahman', NULL, 'Asst. Manager', '1881069865', '\'6725811302154', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, b'1', 106, 'Hawa Akter', NULL, 'Senior H.R. Officer', '1991316460', '\'19882612935470218', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, b'1', 199, 'Md. Abdul Mabud', NULL, 'Senior H.R. Officer', '1922486970', '\'1935762383', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, b'1', 329, 'Rimo Akter', NULL, 'Senior H.R. Officer', '1835213403', '\'6715837432761', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, b'1', 425, 'Shahidul Islam', NULL, 'Senior H.R. Officer', '1613368050', '\'2611038774749', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, b'1', 545, 'Md. Miron Molla', NULL, 'Senior H.R. Officer', '1920993108', '\'6715837438594', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, b'1', 1117331, 'Md Habibur Rahman', NULL, 'Senior H.R. Officer', '1609694076', '\'5962771357', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, b'1', 1018, 'Mustari Jahan (Sumi)', NULL, 'H R Officer', '1818457887', '\'6716822706476', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, b'1', 1503, 'Md. Mamunur Rashid', NULL, 'H R Officer', '1620128619', '\'9103893351', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, b'1', 1665, 'Md. Al Amin', NULL, 'H R Officer', '1610396521', '\'19943911558000159', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, b'1', 1117786, 'Rifah Mashura Islam', NULL, 'H R Officer', '1627107746', '\'9550085519', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, b'1', 1325, 'Nafisa Tabassum', NULL, 'Junior H R Officer', '1535510117', '\'3297893798', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, b'1', 1495, 'Silvi Afendi', NULL, 'Junior H R Officer', '1914715358', '\'7788358484', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, b'1', 1566, 'Md. Raju Ahmed', NULL, 'Junior H R Officer', '1673998137', '\'7326071805', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, b'1', 1001725, 'Rahima Akter', NULL, 'Junior H R Officer', '1686246102', '\'4629180789', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, b'1', 1351, 'Md. Saiful Islam', NULL, 'Medical Officer', '1715861912', '\'198826929865747140', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, b'1', 1654, 'Avishek Roy Antu', NULL, 'Medical Officer', '1721385358', '\'3300182015', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, b'1', 424, 'Hasina Akter', NULL, 'Floor Representative (H.R)', '1928767549', '\'7914747758509', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, b'1', 581, 'Md. Alamgir Khan', NULL, 'Floor Representative (H.R)', '1676057547', '\'6715837433609', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, b'1', 787, 'S. M. Sadekul Islam Uzzal', NULL, 'Floor Representative (H.R)', '1949384873', '\'19786418584000005', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, b'1', 788, 'Md. Mofizul Islam', NULL, 'Floor Representative (H.R)', '1311409205', '\'8917086663841', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, b'1', 820, 'Mahmudul Hasan', NULL, 'Floor Representative (H.R)', '1775256495', '\'8913715842478', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, b'1', 866, 'Md. Mahiuddin', NULL, 'Floor Representative (H.R)', '1760096993', '\'2800405173', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, b'1', 916, 'Md. Razo Ahamed', NULL, 'Floor Representative (H.R)', '1611778092', '\'19938918811000006', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, b'1', 932, 'Zahid Hasan', NULL, 'Floor Representative (H.R)', '1765166047', '\'19928913715000111', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, b'1', 936, 'Masud Rana', NULL, 'Floor Representative (H.R)', '1913267978', '\'8917075601452', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, b'1', 1218, 'Md. Tanzilur Rahman', NULL, 'Floor Representative (H.R)', '1703275520', '\'1955223589', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, b'1', 1246, 'Muhammad Mubarak Hossain', NULL, 'Floor Representative (H.R)', '1725423523', '\'6815240341065', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, b'1', 1247, 'Md. Torikul Islam', NULL, 'Floor Representative (H.R)', '1922623647', '\'4199734379', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, b'1', 1316, 'Md. Safiqul Islam', NULL, 'Floor Representative (H.R)', '1303082080', '\'7339547015', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, b'1', 1437, 'Enayet Mohammad (Nizum)', NULL, 'Floor Representative (H.R)', '1855339900', '\'5968910850', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, b'1', 1456, 'Md. Mostafizur Rahman', NULL, 'Floor Representative (H.R)', '016188-77777', '\'4155390885', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, b'1', 1530, 'Afsana Akter', NULL, 'Floor Representative (H.R)', '1710450752', '\'6406145794', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, b'1', 1565, 'Sharif Ahmed', NULL, 'Floor Representative (H.R)', '1912881190', '\'6007992867', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, b'1', 1583, 'Mir. Risalat Hossain Rifat', NULL, 'Floor Representative (H.R)', '1762643057', '\'4205077672', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, b'1', 1584, 'Tirtha Pratim Sarker', NULL, 'Floor Representative (H.R)', '1515626369', '\'6861582838', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, b'1', 1585, 'Md. Rahat Hossain', NULL, 'Floor Representative (H.R)', '1628385929', '\'1009614700', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, b'1', 1586, 'A. S. M. Shamsul Arefin', NULL, 'Floor Representative (H.R)', '1989458904', '\'9156142235', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, b'1', 1645, 'Raisul Islam', NULL, 'Floor Representative (H.R)', '1792590306', '\'2402830265', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, b'1', 1684, 'Md. Harun Molla', NULL, 'Floor Representative (H.R)', '1644700488', '\'19902921807000004', NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, b'1', 50400, 'Mrs. Amena', NULL, 'Floor Representative (H.R)', '1677238905', '\'6117215198749', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, b'1', 61030, 'Ali Ahmed', NULL, 'Floor Representative (H.R)', '1815585961', NULL, NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, b'1', 1117791, 'Samiul Basir', NULL, 'Floor Representative (H.R)', '1309981968', NULL, NULL, 'Male', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, b'1', 250527, 'Sumiya Akter', NULL, 'Floor Representative (H.R)', '1990489490', '\'7802777388', NULL, 'Female', 'HRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, b'1', 2000108, 'Md. Mozammel Hossain', NULL, 'H R Officer', '*01516171796', '5998810575', NULL, 'Male', 'Corporate (HRD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, b'1', 2000137, 'Md. Omar Faruq', NULL, 'H R Officer', '*01876426000', '1.93E+12', NULL, 'Male', 'Corporate (HRD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, b'1', 2000156, 'Zinnia Sharmin Smita', NULL, 'Medical Officer', '*01643322043', '4652534993', NULL, 'Female', 'Corporate (HRD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, b'1', 2000157, 'Mst. Armim Akter', NULL, 'Junior H R Officer', '*01753391649', '2.00E+16', NULL, 'Female', 'Corporate (HRD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, b'1', 2000114, 'Jakir Ahmed', NULL, 'Floor Representative (H.R)', '*01911282070', '6892203669', NULL, 'Male', 'Corporate (HRD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, b'1', 2000134, 'Md. Masud  Parvez', NULL, 'Floor Representative (H.R)', '*01741243890', '1.99E+16', NULL, 'Male', 'Corporate (HRD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, b'1', 2000143, 'Md. Ehsanul Haque', NULL, 'Floor Representative (H.R)', '*01921419855', '2852070776', NULL, 'Male', 'Corporate (HRD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, b'1', 2000144, 'Rejanul Masum', NULL, 'Floor Representative (H.R)', '*01732732820', '7797293680', NULL, 'Male', 'Corporate (HRD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, b'1', 807, 'Mamunur Rahman Shohag', NULL, 'Asst. Manager', '1613368085', '\'6725803917647', NULL, 'Male', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, b'1', 459, 'Nazmonnahar', NULL, 'Asst. Manager', '1616668807', '\'6725813621529', NULL, 'Female', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, b'1', 460, 'Selina Nasrin', NULL, 'Sr. Welfare Officer', '1719993157', '\'2807808676', NULL, 'Female', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, b'1', 598, 'Kamrunnahar', NULL, 'Sr. Welfare Officer', '1681860984', '\'3913689248951', NULL, 'Female', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, b'1', 955, 'Sayad Shahriar Hossain', NULL, 'Compliance Officer', '1616668806', '\'6710486868176', NULL, 'Male', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, b'1', 1000, 'Chadny Akter', NULL, 'Welfare Officer', '1677154838', '7347188380', NULL, 'Female', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, b'1', 1311, 'Md Rezaul Karim', NULL, 'Officer', '01752-338588', '\'9553989717', NULL, 'Male', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, b'1', 1330, 'Nupur Akter', NULL, 'Welfare Officer', '1622613344', '\'4607998723', NULL, 'Female', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, b'1', 1482, 'Arjuda Akter', NULL, 'Jr. Welfare Officer', '1747212008', '\'3700914421', NULL, 'Female', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, b'1', 1483, 'Mowrin Akter', NULL, 'Jr. Welfare Officer', '1516776733', '\'6911559126628', NULL, 'Female', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, b'1', 1694, 'Md. Al Amin', NULL, 'Compliance Officer', '1672715094', '\'5080377988', NULL, 'Male', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, b'1', 2000119, 'Salma Khatun', NULL, 'Welfare Officer', '*01708803834', '7314548236', NULL, 'Female', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, b'1', 2000129, 'Aisa Akter', NULL, 'Jr. Welfare Officer', '*01872607111', '4604447971', NULL, 'Female', 'Compliance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit member', 'web', '2023-01-03 00:46:04', '2023-01-03 00:46:04'),
(2, 'update member', 'web', '2023-01-03 00:46:04', '2023-01-03 00:46:04'),
(3, 'view member', 'web', '2023-01-03 00:46:04', '2023-01-03 00:46:04'),
(4, 'delete member', 'web', '2023-01-03 00:46:04', '2023-01-03 00:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'editor', 'company multi product edit', 'web', '2023-01-03 00:46:04', '2023-01-08 05:49:38'),
(2, 'admin', 'all access admin', 'web', '2023-01-03 00:46:04', '2023-01-08 05:49:52'),
(3, 'Super-Admin', 'Full Software Access', 'web', '2023-01-03 00:46:04', '2023-01-08 05:50:09'),
(4, 'staff', 'company staff', 'web', '2023-01-08 05:49:14', '2023-01-08 05:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2023-01-03 00:46:04', '$2y$10$oPZCUy6fw7Keb0l5cqPjwuK8kpGGgJwTuPfkvvOJbVZsZHw1HdZsO', '2', 'QuE8Ye7LC1QrAj9PPDW7w3AKiajD9DQ5WypA2igRIvF90AD5IekR9wsZ5M60', '2023-01-03 00:46:04', '2023-01-08 05:35:27'),
(2, 'super admin', 'superadmin@gmail.com', '2023-01-03 00:46:04', '$2y$10$CUeiUidFgORb0yQ6RAmraetHr3lxU.xBuRHKWMNmd2VoNZgZlJgkW', '3', 'dhbsgJJeUn', '2023-01-03 00:46:04', '2023-01-03 00:46:04'),
(3, 'editor', 'editor@gmail.com', '2023-01-03 00:46:04', '$2y$10$MrUTgkYKoHGD1kHTsS9l8e5AqZJosOfqZilOEjcvjAUCd6As0Mlxm', '1', '5KVvFh8R5i', '2023-01-03 00:46:04', '2023-01-03 00:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int NOT NULL,
  `garment_id` int DEFAULT NULL,
  `worker_id` int DEFAULT NULL,
  `name` varchar(26) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `designation` varchar(26) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `nid_no` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `blood_group` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `department` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `garment_id`, `worker_id`, `name`, `email`, `designation`, `phone`, `nid_no`, `blood_group`, `gender`, `department`, `created_at`, `updated_at`) VALUES
(1, 1, 1001743, 'Sumon Kante Singha', 'sumon@gmail.com', 'GM (HR & Compliance)', '01612282535', '7305395738', NULL, '1', 'HRD', NULL, '2023-03-11 10:21:31'),
(2, 1, 103, 'Nasima Begum', 'nsaima@gmail.com', 'Senior Manager', '01613368019', '689 965 9814', NULL, '2', 'HRD', NULL, '2023-03-11 10:21:51'),
(3, 1, 105, 'Md. Nurujjaman', 'nurujjaman@gmail.com', 'Deputy Manager', '01613368084', '2817984616', NULL, '1', 'HRD', NULL, '2023-03-11 10:22:19'),
(4, 1, 107, 'Mahmuda Rahman', NULL, 'Asst. Manager', '01881069865', '6725811302154', NULL, '2', 'HRD', NULL, NULL),
(5, 1, 106, 'Hawa Akter', NULL, 'Senior H.R. Officer', '01991316460', '19882612935470218', NULL, '2', 'HRD', NULL, NULL),
(6, 1, 199, 'Md. Abdul Mabud', NULL, 'Senior H.R. Officer', '01922486970', '1935762383', NULL, '1', 'HRD', NULL, NULL),
(7, 1, 329, 'Rimo Akter', NULL, 'Senior H.R. Officer', '01835213403', '6715837432761', NULL, '2', 'HRD', NULL, NULL),
(8, 1, 425, 'Shahidul Islam', NULL, 'Senior H.R. Officer', '01613368050', '2611038774749', NULL, '1', 'HRD', NULL, NULL),
(9, 1, 545, 'Md. Miron Molla', NULL, 'Senior H.R. Officer', '01920993108', '06715837438594', NULL, '1', 'HRD', NULL, NULL),
(10, 1, 1117331, 'Md Habibur Rahman', NULL, 'Senior H.R. Officer', '01609694076', '5962771357', NULL, '1', 'HRD', NULL, NULL),
(11, 1, 1018, 'Mustari Jahan (Sumi)', NULL, 'H R Officer', '01818457887', '6716822706476', NULL, '2', 'HRD', NULL, NULL),
(12, 1, 1503, 'Md. Mamunur Rashid', NULL, 'H R Officer', '01620128619', '9103893351', NULL, '1', 'HRD', NULL, NULL),
(13, 1, 1665, 'Md. Al Amin', NULL, 'H R Officer', '01610396521', '19943911558000159', NULL, '1', 'HRD', NULL, NULL),
(14, 1, 1117786, 'Rifah Mashura Islam', NULL, 'H R Officer', '01627107746', '9550085519', NULL, '2', 'HRD', NULL, NULL),
(15, 1, 1325, 'Nafisa Tabassum', NULL, 'Junior H R Officer', '01535510117', '03297893798', NULL, '2', 'HRD', NULL, NULL),
(16, 1, 1495, 'Silvi Afendi', NULL, 'Junior H R Officer', '01914715358', '7788358484', NULL, '2', 'HRD', NULL, NULL),
(17, 1, 1566, 'Md. Raju Ahmed', NULL, 'Junior H R Officer', '01673998137', '7326071805', NULL, '1', 'HRD', NULL, NULL),
(18, 1, 1001725, 'Rahima Akter', NULL, 'Junior H R Officer', '01686246102', '4629180789', NULL, '2', 'HRD', NULL, NULL),
(19, 1, 1351, 'Md. Saiful Islam', NULL, 'Medical Officer', '01715861912', '198826929865747140', NULL, '1', 'HRD', NULL, NULL),
(20, 1, 1654, 'Avishek Roy Antu', NULL, 'Medical Officer', '01721385358', '3300182015', NULL, '1', 'HRD', NULL, NULL),
(21, 1, 424, 'Hasina Akter', NULL, 'Floor Representative (H.R)', '01928767549', '7914747758509', NULL, '2', 'HRD', NULL, NULL),
(22, 1, 581, 'Md. Alamgir Khan', NULL, 'Floor Representative (H.R)', '01676057547', '6715837433609', NULL, '1', 'HRD', NULL, NULL),
(23, 1, 787, 'S. M. Sadekul Islam Uzzal', NULL, 'Floor Representative (H.R)', '01949384873', '19786418584000005', NULL, '1', 'HRD', NULL, NULL),
(24, 1, 788, 'Md. Mofizul Islam', NULL, 'Floor Representative (H.R)', '01311409205', '8917086663841', NULL, '1', 'HRD', NULL, NULL),
(25, 1, 820, 'Mahmudul Hasan', NULL, 'Floor Representative (H.R)', '01775256495', '8913715842478', NULL, '1', 'HRD', NULL, NULL),
(26, 1, 866, 'Md. Mahiuddin', NULL, 'Floor Representative (H.R)', '01760096993', '2800405173', NULL, '1', 'HRD', NULL, NULL),
(27, 1, 916, 'Md. Razo Ahamed', NULL, 'Floor Representative (H.R)', '01611778092', '19938918811000006', NULL, '1', 'HRD', NULL, NULL),
(28, 1, 932, 'Zahid Hasan', NULL, 'Floor Representative (H.R)', '01765166047', '19928913715000111', NULL, '1', 'HRD', NULL, NULL),
(29, 1, 936, 'Masud Rana', NULL, 'Floor Representative (H.R)', '01913267978', '8917075601452', NULL, '1', 'HRD', NULL, NULL),
(30, 1, 1218, 'Md. Tanzilur Rahman', NULL, 'Floor Representative (H.R)', '01703275520', '1955223589', NULL, '1', 'HRD', NULL, NULL),
(31, 1, 1246, 'Muhammad Mubarak Hossain', NULL, 'Floor Representative (H.R)', '01725423523', '6815240341065', NULL, '1', 'HRD', NULL, NULL),
(32, 1, 1247, 'Md. Torikul Islam', NULL, 'Floor Representative (H.R)', '01922623647', '4199734379', NULL, '1', 'HRD', NULL, NULL),
(33, 1, 1316, 'Md. Safiqul Islam', NULL, 'Floor Representative (H.R)', '01303082080', '7339547015', NULL, '1', 'HRD', NULL, NULL),
(34, 1, 1437, 'Enayet Mohammad (Nizum)', NULL, 'Floor Representative (H.R)', '01855339900', '5968910850', NULL, '1', 'HRD', NULL, NULL),
(35, 1, 1456, 'Md. Mostafizur Rahman', 'mostafijur@gmail.com', 'Floor Representative (H.R)', '01618877777', '4155390885', NULL, '1', 'HRD', NULL, '2023-03-11 10:30:45'),
(36, 1, 1530, 'Afsana Akter', NULL, 'Floor Representative (H.R)', '01710450752', '6406145794', NULL, '2', 'HRD', NULL, NULL),
(37, 1, 1565, 'Sharif Ahmed', NULL, 'Floor Representative (H.R)', '01912881190', '6007992867', NULL, '1', 'HRD', NULL, NULL),
(38, 1, 1583, 'Mir. Risalat Hossain Rifat', NULL, 'Floor Representative (H.R)', '01762643057', '4205077672', NULL, '1', 'HRD', NULL, NULL),
(39, 1, 1584, 'Tirtha Pratim Sarker', NULL, 'Floor Representative (H.R)', '01515626369', '6861582838', NULL, '1', 'HRD', NULL, NULL),
(40, 1, 1585, 'Md. Rahat Hossain', NULL, 'Floor Representative (H.R)', '01628385929', '1009614700', NULL, '1', 'HRD', NULL, NULL),
(41, 1, 1586, 'A. S. M. Shamsul Arefin', NULL, 'Floor Representative (H.R)', '01989458904', '9156142235', NULL, '1', 'HRD', NULL, NULL),
(42, 1, 1645, 'Raisul Islam', NULL, 'Floor Representative (H.R)', '01792590306', '2402830265', NULL, '1', 'HRD', NULL, NULL),
(43, 1, 1684, 'Md. Harun Molla', NULL, 'Floor Representative (H.R)', '01644700488', '19902921807000004', NULL, '1', 'HRD', NULL, NULL),
(44, 1, 50400, 'Mrs. Amena', NULL, 'Floor Representative (H.R)', '01677238905', '6117215198749', NULL, '2', 'HRD', NULL, NULL),
(45, 1, 61030, 'Ali Ahmed', NULL, 'Floor Representative (H.R)', '01815585961', '6892203669', NULL, '1', 'HRD', NULL, NULL),
(46, 1, 1117791, 'Samiul Basir', NULL, 'Floor Representative (H.R)', '01309981968', '6892203669', NULL, '1', 'HRD', NULL, NULL),
(47, 1, 250527, 'Sumiya Akter', NULL, 'Floor Representative (H.R)', '01990489490', '\'7802777388', NULL, '2', 'HRD', NULL, NULL),
(48, 1, 2000108, 'Md. Mozammel Hossain', NULL, 'H R Officer', '01516171796', '5998810575', NULL, '1', 'Corporate (HRD)', NULL, NULL),
(49, 1, 2000137, 'Md. Omar Faruq', NULL, 'H R Officer', '01876426000', '6892203669', NULL, '1', 'Corporate (HRD)', NULL, NULL),
(50, 1, 2000156, 'Zinnia Sharmin Smita', NULL, 'Medical Officer', '01643322043', '4652534993', NULL, '2', 'Corporate (HRD)', NULL, NULL),
(51, 1, 2000157, 'Mst. Armim Akter', NULL, 'Junior H R Officer', '01753391649', '6892203669', NULL, '2', 'Corporate (HRD)', NULL, NULL),
(52, 1, 2000114, 'Jakir Ahmed', NULL, 'Floor Representative (H.R)', '01911282070', '6892203669', NULL, '1', 'Corporate (HRD)', NULL, NULL),
(53, 1, 2000134, 'Md. Masud  Parvez', NULL, 'Floor Representative (H.R)', '01741243890', '6892203669', NULL, '1', 'Corporate (HRD)', NULL, NULL),
(54, 1, 2000143, 'Md. Ehsanul Haque', NULL, 'Floor Representative (H.R)', '01921419855', '2852070776', NULL, '1', 'Corporate (HRD)', NULL, NULL),
(55, 1, 2000144, 'Rejanul Masum', NULL, 'Floor Representative (H.R)', '01732732820', '7797293680', NULL, '1', 'Corporate (HRD)', NULL, NULL),
(56, 1, 807, 'Mamunur Rahman Shohag', NULL, 'Asst. Manager', '01613368085', '6725803917647', NULL, '1', 'Compliance', NULL, NULL),
(57, 1, 459, 'Nazmonnahar', NULL, 'Asst. Manager', '01616668807', '6725813621529', NULL, '2', 'Compliance', NULL, NULL),
(58, 1, 460, 'Selina Nasrin', 'selina@gmail.com', 'Sr. Welfare Officer', '01719993157', '2807808676', NULL, '2', 'Compliance', NULL, '2023-03-11 10:21:06'),
(59, 1, 598, 'Kamrunnahar', 'kamrun@gmail.com', 'Sr. Welfare Officer', '01681860984', '3913689248951', NULL, '2', 'Compliance', NULL, '2023-03-11 10:20:38'),
(60, 1, 955, 'Sayad Shahriar Hossain', 'hossain@gmail.com', 'Compliance Officer', '01616668806', '6710486868176', NULL, '1', 'Compliance', NULL, '2023-03-11 10:20:13'),
(61, 1, 1000, 'Chadny Akter', 'chadny@gmail.com', 'Welfare Officer', '01677154838', '7347188380', NULL, '2', 'Compliance', NULL, '2023-03-11 10:19:48'),
(62, 1, 1311, 'Md Rezaul Karim', 'rejaul@gmail.com', 'Officer', '01752338588', '9553989717', NULL, '1', 'Compliance', NULL, '2023-03-11 10:19:29'),
(63, 1, 1330, 'Nupur Akter', 'nupur@gmail.com', 'Welfare Officer', '01622613344', '4607998723', NULL, '2', 'Compliance', NULL, '2023-03-11 10:19:10'),
(64, 1, 1482, 'Arjuda Akter', 'arjuda@gmail.com', 'Jr. Welfare Officer', '01747212008', '3700914421', NULL, '2', 'Compliance', NULL, '2023-03-11 10:18:45'),
(65, 1, 1483, 'Mowrin Akter', 'mowrin@gmail.com', 'Jr. Welfare Officer', '01516776733', '6911559126628', NULL, '2', 'Compliance', NULL, '2023-03-11 10:18:26'),
(66, 1, 1694, 'Md. Al Amin', 'alamin@gmail.com', 'Compliance Officer', '01672715094', '\'5080377988', NULL, '1', 'Compliance', NULL, '2023-03-11 10:18:04'),
(67, 1, 2000119, 'Salma Khatun', 'salma@gmail.com', 'Welfare Officer', '01708803834', '7314548236', NULL, '2', 'Compliance', NULL, '2023-03-11 10:17:48'),
(68, 1, 2000129, 'Aisa Akter', 'aisa@gmail.com', 'Jr. Welfare Officer', '01872607111', '4604447971', NULL, '2', 'Compliance', NULL, '2023-03-11 10:17:24');

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
-- Indexes for table `garments`
--
ALTER TABLE `garments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalsettings`
--
ALTER TABLE `generalsettings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `generalsettings_email_unique` (`email`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garments`
--
ALTER TABLE `garments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `generalsettings`
--
ALTER TABLE `generalsettings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

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
