-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2016 at 09:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alfagen', 'alfagen4@gmail.com', '$2y$10$qzosVA6izvIGZE7tZ2wPueC/ypMOsPOmlPjYae1/HkWcOO/QWWK3y', 'PfhRhP8bkDZcppQJWDV0HYRjdmXo2MaYn7tr2nlbfr9u7Ndc3QJUIAwGClmK', NULL, '2016-10-01 10:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Baki', NULL, NULL),
(2, 'Gence', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `elantypes`
--

CREATE TABLE `elantypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `elantypes`
--

INSERT INTO `elantypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'destek', NULL, NULL),
(2, 'istek', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `els`
--

CREATE TABLE `els` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `view` int(11) NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `org` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `els`
--

INSERT INTO `els` (`id`, `type_id`, `user_id`, `title`, `status`, `view`, `about`, `location`, `lat`, `lng`, `name`, `phone`, `email`, `image`, `org`, `nov`, `deadline`, `created_at`, `updated_at`) VALUES
(6, 2, 3, 'Tehsil', 1, 1, 'lorem ipsum dolar sit amit lorem ipsum dolar sit amitlorem ipsum dolar sit amitlorem ipsum dolar sit amitlorem ipsum dolar sit amit lorem ipsum dolar sit amitlorem ipsum dolar sit amitv lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit vlorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit ', 'AF Mall, Səməd Vurğun, Bakı, Azərbaycan', '40.37638579999999', '49.84114019999993', 'Lale Memmedova', 2147483647, 'lale.m@code.edu.az', '58647.jpg', 'Universitet', 'yardim', '0000-00-00', '2016-09-30 14:21:37', '2016-10-01 09:17:49'),
(7, 2, 1, 'Tehsil', 1, 4, 'lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit lorem ipsim dolar sit amit ', '28 Mall Shopping Center, Bakı, Azərbaycan', '40.3790619', '49.84685430000002', 'xsc', 645546554, 'lala@code.az', '79210.jpg', 'Universitet', 'dcd', '0000-00-00', '2016-09-30 17:44:15', '2016-10-01 13:41:04'),
(8, 2, 1, 'Mekteb', 1, 1, 'lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit ', 'Səbail, Bakı, Azərbaycan', '40.3335274', '49.82504419999998', 'Lale Memmedova', 45646, 'lala@code.az', '67385.jpg', 'Bagca', 'Tehsil', '0000-00-00', '2016-09-30 18:47:08', '2016-10-01 06:46:01'),
(9, 2, 1, 'Mekteb', 1, 0, 'lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit ', 'Səbail, Bakı, Azərbaycan', '40.3335274', '49.82504419999998', 'Lale Memmedova', 45646, 'lala@code.az', '88232.jpg', 'Bagca', 'Tehsil', '0000-00-00', '2016-09-30 18:47:08', '2016-09-30 18:47:40'),
(10, 2, 1, 'Mekteb', 1, 1, 'lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sitamit lorem ipsum dolar sit amit lorem ipsum dolarsit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolar sit amit lorem ipsum dolarsit amit lorem ipsum dolar sit amit lorem ipsum dolar sitamit lorem ipsum dolar sit amit lorem ipsum dolar sit amit ', 'AF Mall, Səməd Vurğun, Bakı, Azərbaycan', '40.37638579999999', '49.84114019999993', 'Lale Memmedova', 52485744, 'lale.m@code.az', '86349.jpg', 'Universitet', 'yardim', '0000-00-00', '2016-10-01 03:15:03', '2016-10-01 08:37:49'),
(12, 1, 1, '', 0, 0, '', '', '', '', '', 0, '', '93462.png', '', '', '0000-00-00', '2016-10-01 05:25:11', '2016-10-01 05:25:11'),
(13, 1, 1, 'Mekteb', 0, 0, 'lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit ', 'Bayil Market, Qurban Abbasov küç., Баку, Азербайджан', '40.350565', '49.83417750000001', 'Lale Memmedova', 994, 'lale.m@code.edu.az', '79229.jpg', 'Universitet', 'sdf', '0000-00-00', '2016-10-01 05:28:03', '2016-10-01 05:28:03'),
(14, 2, 1, 'Mekteb MektebMektebMekteb', 1, 6, 'lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit lorem ipsum sit dolar amit ', 'Bayil Market, Qurban Abbasov küç., Баку, Азербайджан', '40.350565', '49.83417750000001', 'Lale Memmedova', 2147483647, 'alfagen4@gmail.com', '93066.jpg', 'Universitet', 'yardim', '0000-00-00', '2016-10-01 05:29:34', '2016-10-01 12:55:16'),
(18, 2, 1, 'Mekteb', 1, 1, 'lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt lorem iosum dit sdolar smaibt ', 'Bayıl, Bakı, Azərbaycan', '40.3474053', '49.83179640000003', 'Lala', 556414545, 'lale.m@code.edu.az', '70770.png', 'Universitet', 'yardim', '0000-00-00', '2016-10-01 09:22:42', '2016-10-01 11:55:21'),
(19, 2, 1, 'qüer', 1, 3, 'The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC Latin text by Cicero, with words altered, added, and removed to make it nonsensical, improper Latin.[citation needed]\r\n\r\nA variation of the ordinary lorem ipsum text has been used in typesetting since the 1960s or earlier, when it was popularized by advertisements for Letraset transfer sheets. It was introduced to the Information Age in the mid-1980s by Aldus Corporation, which employed it in graphics and word-processing templates for its desktop publishing program', 'Qazax, Azərbaycan', '41.2243518', '45.25647490000006', 'Lala', 556414545, 'lale.m@code.edu.az', '57242.jpg', 'asddf', 'sdf', '0000-00-00', '2016-10-01 10:46:02', '2016-10-01 11:55:17'),
(20, 2, 1, 'we', 0, 61, 'The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC Latin text by Cicero, with words altered, added, and removed to make it nonsensical, improper Latin.[citation needed]\r\n\r\nA variation of the ordinary lorem ipsum text has been used in typesetting since the 1960s or earlier, when it was popularized by advertisements for Letraset transfer sheets. It was introduced to the Information Age in the mid-1980s by Aldus Corporation, which employed it in graphics and word-processing templates for its desktop publishing program', 'Ganja, Azerbaijan', '40.6878581', '46.37233130000004', 'Lala', 556414545, 'lale.m@code.edu.az', '97957.png', 'sef', 'dsf', '2016-10-01', '2016-10-01 10:49:54', '2016-10-01 14:55:23'),
(21, 2, 1, 'Tehsil', 1, 23, 'The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC Latin text by Cicero, with words altered, added, and removed to make it nonsensical, improper Latin.[citation needed]\r\n\r\nA variation of the ordinary lorem ipsum text has been used in typesetting since the 1960s or earlier, when it was popularized by advertisements for Letraset transfer sheets. It was introduced to the Information Age in the mid-1980s by Aldus Corporation, which employed it in graphics and word-processing templates for its desktop publishing program', 'Nizami, Baku, Azerbaijan', '40.4106955', '49.92777760000001', 'Lala', 556414545, 'lale.m@code.edu.az', '12228.jpg', 'lorem', 'efefeeffefe', '2016-10-12', '2016-10-01 12:12:54', '2016-10-01 14:32:47'),
(22, 2, 1, 'Mekteb', 0, 7, '$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;$single = Elan::find($id);\r\n        $single->view = $single->view+1;', 'Shamkir, Azerbaijan', '40.88123969999999', '46.01790089999997', 'Lala', 556414545, 'lale.m@code.edu.az', '83086.png', 'Universitet', 'yardim', '2016-10-01', '2016-10-01 05:42:52', '2016-10-01 14:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_24_134059_create_regions_table', 1),
('2016_09_24_134119_create_cities_table', 1),
('2016_09_24_134526_create_users_table', 1),
('2016_09_24_142233_create_elantypes_table', 1),
('2016_09_24_151138_create_els_table', 1),
('2016_09_24_170403_create_qarsiliqs_table', 1),
('2016_09_30_034453_create_admins_table', 2),
('2016_09_30_092312_create_admins_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lale.m@code.edu.az', '3da2df387208ecc1d1d448ff6d84773850a01c646813d1aafd80c0e83df2da33', '2016-09-29 22:56:55');

-- --------------------------------------------------------

--
-- Table structure for table `qarsiliqs`
--

CREATE TABLE `qarsiliqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `elan_id` int(10) UNSIGNED NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `city_id`, `city`, `username`, `phone`, `name`, `email`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'Füzuli', 'Lala.M', 758585, 'Lala', 'lale.m@code.edu.az', '$2y$10$MJJqB0HoP2YPMuNh5J3pb.8uXhMPV3Je0RKR5WCOHtaPkoFwv1L6C', '82036.jpg', '4t4As20fayjifNPu9floyZg83cqHpEoW8y0wnpSEPpNSQ2IXab2cmlHUU0s3', '2016-09-28 16:38:05', '2016-10-01 14:29:51'),
(2, 0, '', 'trinus', 2147483647, 'samir', 'samir@code.edu.az', '$2y$10$lFIhrCZlPY8mg2EWEURW4u5EQtyI/914S/jbon9o2c1O44fJisnLW', '53089.jpeg', '0YOYe3NUrwyHBCUZ87ZUHgluYWExiy3gNMaEEeQOWqRheV8uuInZZN9RPy1W', '2016-09-29 08:08:28', '2016-09-29 10:18:07'),
(3, 0, '', 'm.murad2002(mr.kasib)', 994, 'Murad Mikayilzade', 'm.murad@code.edu.az', '$2y$10$uBvIsZl3DA2iBaxhfD8/ZeUqyi9o3It1bBaX6C8QqRByp6Uj5wom.', '', 'S4si0pETqaBGn7GozzVX6YucTkY2S5GyQW45K3cdR9apKlNbeBTufztV22wS', '2016-09-30 12:50:17', '2016-09-30 14:26:33'),
(4, 0, 'Baki', 'Gungun', 2147483647, 'Gunel Ismayilova', 'gunel555@yahoo.com', '$2y$10$GVKazX9A5xPtQqmsbgdRiupsEQcF8cTuX24NpOsRNeUDcO28Tl.8W', '', '9SZlPKq3ucw8nhPY4K6IXiEGgl2JISU7CR3nTQkHkNvDcu7xkeI0zzPLSMhN', '2016-10-01 05:20:41', '2016-10-01 05:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elantypes`
--
ALTER TABLE `elantypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `els`
--
ALTER TABLE `els`
  ADD PRIMARY KEY (`id`),
  ADD KEY `els_type_id_foreign` (`type_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `qarsiliqs`
--
ALTER TABLE `qarsiliqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qarsiliqs_elan_id_foreign` (`elan_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_city_id_index` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `elantypes`
--
ALTER TABLE `elantypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `els`
--
ALTER TABLE `els`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `qarsiliqs`
--
ALTER TABLE `qarsiliqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `els`
--
ALTER TABLE `els`
  ADD CONSTRAINT `els_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `elantypes` (`id`);

--
-- Constraints for table `qarsiliqs`
--
ALTER TABLE `qarsiliqs`
  ADD CONSTRAINT `qarsiliqs_elan_id_foreign` FOREIGN KEY (`elan_id`) REFERENCES `els` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
