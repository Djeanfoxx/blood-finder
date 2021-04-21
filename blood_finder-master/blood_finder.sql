-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2019 at 02:12 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_types`
--

CREATE TABLE `blood_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_types`
--

INSERT INTO `blood_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'A+', '2019-05-04 17:20:59', '2019-05-04 17:20:59'),
(2, 'A-', '2019-05-04 17:20:59', '2019-05-04 17:20:59'),
(3, 'B+', '2019-05-04 17:20:59', '2019-05-04 17:20:59'),
(4, 'B-', '2019-05-04 17:20:59', '2019-05-04 17:20:59'),
(5, 'AB+', '2019-05-04 17:20:59', '2019-05-04 17:20:59'),
(6, 'AB-', '2019-05-04 17:20:59', '2019-05-04 17:20:59'),
(7, 'O+', '2019-05-04 17:20:59', '2019-05-04 17:20:59'),
(8, 'O-', '2019-05-04 17:20:59', '2019-05-04 17:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `blood_type_locations`
--

CREATE TABLE `blood_type_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `bloodtype_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_type_locations`
--

INSERT INTO `blood_type_locations` (`id`, `location_id`, `bloodtype_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(2, 1, 2, 10, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(3, 1, 3, 10, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(4, 1, 4, 10, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(5, 1, 5, 10, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(6, 1, 6, 10, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(7, 1, 7, 10, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(8, 1, 8, 10, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(9, 2, 1, 5, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(10, 2, 2, 5, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(11, 2, 3, 5, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(12, 2, 4, 5, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(13, 2, 5, 5, '2019-05-05 17:50:56', '2019-05-05 17:50:56'),
(14, 2, 6, 5, '2019-05-05 17:50:56', '2019-05-05 17:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Red Cross', 'EDSA Corner Boni Avenue, Mandaluyong City', '2019-05-05 17:47:35', '2019-05-05 17:47:35'),
(2, 'Red Cross', 'Bonifacio Drive, Port Area, Manila', '2019-05-05 17:47:35', '2019-05-05 17:47:35'),
(3, 'Red Cross', 'QC Hall Cmpd Kalayaan Diliman, QC', '2019-05-05 17:47:35', '2019-05-05 17:47:35'),
(4, 'Red Cross', 'Makati, Metro Manila', '2019-05-05 17:47:35', '2019-05-05 17:47:35');

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
(3, '2019_05_04_105100_create_locations_table', 1),
(4, '2019_05_04_105222_create_blood_types_table', 1),
(6, '2019_05_04_163727_create_blood_type_locations_table', 2),
(7, '2019_05_04_111241_create_reservations_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `bloodtype_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `bloodtype_id`, `location_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 2, NULL, NULL),
(2, 2, 5, 3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `address`, `contact_number`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan dela Cruz', 'juan@email.com', NULL, 'Pasay City', '1234567', '$2y$10$T0B.lkyEYtD3/ZMhu1EW.eMP4walKr6JA4yQefcdpzqhLmbB.RpbC', 1, NULL, '2019-05-05 09:41:31', '2019-05-05 09:41:31'),
(2, 'St. Joseph Hospital', 'stjoseph@email.com', NULL, 'Las Pinas', '1234567', '$2y$10$SXdCdXAMLGv00J8WX4MVrOHUMO65z8No9.T/YQzvcXd8E2s7X6UJa', 2, NULL, '2019-05-05 09:42:33', '2019-05-05 09:42:33'),
(3, 'Administrator', 'admin@email.com', NULL, 'Alabang', '1234567', '$2y$10$T0B.lkyEYtD3/ZMhu1EW.eMP4walKr6JA4yQefcdpzqhLmbB.RpbC', 3, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_types`
--
ALTER TABLE `blood_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_type_locations`
--
ALTER TABLE `blood_type_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
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
-- AUTO_INCREMENT for table `blood_types`
--
ALTER TABLE `blood_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blood_type_locations`
--
ALTER TABLE `blood_type_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
