-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 10:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

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
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_05_09_105925_create_notes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `is_done` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `name`, `content`, `due_date`, `is_done`, `created_at`, `updated_at`) VALUES
(1, 'abc', '[\"xyz\",\"abc\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(2, 'abc', '[\"xyz\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(3, 'abc', '[\"abc\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(4, 'abc', '[\"cdf\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(7, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'thy', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(8, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(9, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(10, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(11, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(12, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(13, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(14, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(15, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(16, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(17, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(18, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(19, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(20, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(21, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-11', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(22, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-09', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(23, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-08', 'no', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(24, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-07', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(25, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-06', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(26, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-05', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(27, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-04', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(28, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-03', 'yes', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(29, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-02', 'no', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(30, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', '2022-05-01', 'no', '2022-05-07 22:00:00', '2022-05-07 22:00:00'),
(31, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', NULL, 'yes', '2022-05-09 14:16:24', '2022-05-09 14:16:24'),
(32, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', NULL, 'yes', '2022-05-09 14:16:43', '2022-05-09 14:16:43'),
(33, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', NULL, 'yes', '2022-05-09 14:17:17', '2022-05-09 14:17:17'),
(34, 'abc', '[\"first\",\"second\",\"third\",\"fourth\"]', 'check content', NULL, 'yes', '2022-05-09 14:17:27', '2022-05-09 14:17:27');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
