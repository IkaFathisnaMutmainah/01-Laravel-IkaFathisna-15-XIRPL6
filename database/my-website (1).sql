-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 02:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Ika Fathisna Mutmainah_TS', 'mutmainahika183@gmail.com', 'Pesan 1 OK', '2022-02-08 01:28:01', '2022-03-04 21:38:49'),
(3, 'IkaFMutmainah', '3103120110@student.smktelkom-pwt.sch.id', 'Pesan tertulis dihalaman ini', '2022-02-08 01:31:48', '2022-05-29 22:48:45'),
(4, 'Ika Fathisna Mutmainah_XI RPL 6', 'mutmainahika183@gmail.com', 'Hallo', '2022-02-13 00:26:13', '2022-02-13 00:26:13'),
(5, 'Ika Fathisna Mutmainah_XI RPL 6_15', 'mutmainahika183@gmail.com', 'Hallo bu', '2022-02-13 01:03:21', '2022-02-13 01:03:21'),
(7, 'Ika Fathisnaaaa', 'ikafathisnaa@gmail.com', 'Bismillah', NULL, NULL),
(8, 'Ukhti siap', 'ukhti@gmail.com', 'Assalamu\'alaikum', NULL, '2022-05-29 22:02:39'),
(9, 'Member PKL', 'ikaaaajaa@gmail.com', 'Semangatt PKL nyaa!!! everything will be fine', NULL, NULL),
(10, 'hero', 'hero@gmail.com', 'Selamat berjuang, semoga sampai pada titik yang diharapkan!!', NULL, '2022-04-13 20:28:39'),
(11, 'Hallo Ika', 'ikafm@gmail.com', 'Selamat Pagi', '2022-04-16 23:20:34', '2022-04-16 23:20:34'),
(13, 'jumat day', 'jumatday@gmail.com', 'semangatt', '2022-05-12 20:36:31', '2022-05-12 20:36:31');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(32, 'stematel keren oye', '<p>smk telkom pwt bmy oke siap</p>', 'ecCzyFyNgkkaH7c5yUWvgpPawoJcYQ2t2DD6MjQj.jpg', '2022-05-14 22:13:43', '2022-05-29 22:59:09'),
(36, 'uasbk stematel 2022', '<p>30 juni 2022</p>', 'PQbuVi1fPtZtuhpwoH3WhJIQ89BCjDSabTQoafGN.png', '2022-05-28 06:52:20', '2022-05-29 22:43:25'),
(39, 'Stematel the best', '<p>Mau kuliah mudah, Mau kerja tidak susah</p>', 'G1XHgbqNdJyaKVZ7HuXeDOYSjobS7wz5NldwX3aX.png', '2022-05-29 20:17:09', '2022-05-29 20:17:09');

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
(5, '2022_02_08_070004_create_contacts_table', 1),
(6, '2022_04_20_061521_create_galleries_table', 2),
(7, '2022_04_20_140642_create_galleries_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ika Fathisna Mutmainah', '3103120110@student.smktelkom-pwt.sch.id', NULL, '$2y$10$hla406DVoX0OKLwscV9oEecgXKn6U6GDqSgO9Q9MaMJHutwobC6uG', NULL, '2022-02-22 22:38:05', '2022-02-22 22:38:05'),
(2, 'Ika Fathisna Mutmainah', 'mutmainahika183@gmail.com', NULL, '$2y$10$xbFXyyO6sWBmt0o9GHklq.nLTENtKfvnpa1FTeuEeJg1/VhZ0d3wC', NULL, '2022-02-26 19:02:09', '2022-02-26 19:02:09'),
(3, 'COOL AJA', 'coolaja@gmail.com', NULL, '$2y$10$LjAR1N1wx4xxZUixcq6G8uDYkDs5mTuDiXjD1dRSxRhbDaVd/7lJS', NULL, '2022-02-28 06:27:28', '2022-02-28 06:27:28'),
(4, 'Ika Fathisna Mutmainah', 'oke@gmail.com', NULL, '$2y$10$MppvelgWCqdv7ZlKJ.cPweAncSI6E0dW1tpl.6af9CBEEkSgbm8qC', NULL, '2022-04-13 17:33:01', '2022-04-13 17:33:01'),
(5, 'Ikaaa FM', 'ikafm@gmail.com', NULL, '$2y$10$d8oCznoLSzRHliFLnYViie5YZQ/KZV3lylKrrHemEsA3cAKZ6hxrm', NULL, '2022-04-16 21:18:21', '2022-04-16 21:18:21'),
(6, 'ika123', 'ika123@gmail.com', NULL, '$2y$10$KS9MEKqvDDd3CKRSVbdmoeLq1u44tTOZMZtasIekCsB6YQa4Cx3ly', NULL, '2022-04-16 21:34:10', '2022-04-16 21:34:10'),
(7, 'Ika FathisnaM', 'ikafathisnam@gmail.com', NULL, '$2y$10$gFd96Fa/n1Ig12QpBD3/GODXbpFEp66pIM6Ves5F86qvMbkj1t5wi', NULL, '2022-04-18 03:15:43', '2022-04-18 03:15:43'),
(8, 'Ikaaa yaa', 'ika702@gmail.com', NULL, '$2y$10$wFauFrLgMzz86VdWcr5IV.HsIPsAx0WTPgBOJsoN54VWm2OA19Cuy', NULL, '2022-04-19 21:52:14', '2022-04-19 21:52:14'),
(9, 'Ika Fathisna Mutmainah', 'ikaye@gmail.com', NULL, '$2y$10$wvj5oy1sIUn6V3lE.3T/oO.diTbk5cmhin0WIqWVOsl6rMK9rGYcu', NULL, '2022-04-20 01:00:53', '2022-04-20 01:00:53'),
(10, 'ikaoyeee', 'ikaoye@gmail.com', NULL, '$2y$10$L7oQrX3/.Rt8kDV0Vh/IzedJCM6VfacGhfgLfI08TteeDh0IR5QJu', NULL, '2022-04-20 04:55:28', '2022-04-20 04:55:28'),
(11, 'Ika Fathisna Mutmainah', 'ika111@gmail.com', NULL, '$2y$10$g4GQ4NnVZ5LMFoezp9MpEeLqTMRzlg2BIWe/ytkmU4yhAP7D0fnqK', NULL, '2022-04-20 22:28:42', '2022-04-20 22:28:42'),
(12, 'Ika Fathisna Mutmainah', 'ramadan@gmail.com', NULL, '$2y$10$WuAT310OdYsSlTfNBXM3teNj5sCNHVISltKMdDwMMNqm4a/aA36SS', NULL, '2022-04-26 15:48:43', '2022-04-26 15:48:43'),
(13, 'Ika Fathisna Mutmainah', 'rabu@gmail.com', NULL, '$2y$10$TNi0jNIQRxfhpKXPUSioU.gZ.PiggH1sfFhMgNsGnP7vycBluwHIO', NULL, '2022-04-26 21:35:15', '2022-04-26 21:35:15'),
(14, 'Ika Fathisna Mutmainah', 'ika725@gmail.com', NULL, '$2y$10$oHMrBdDwVvYBlGttS6dYMe2fQxPohYq/PRfOKsR7Gd7FGjxHmuxpW', NULL, '2022-05-08 23:41:14', '2022-05-08 23:41:14'),
(15, 'Ika Fathisna Mutmainah', 'ikafm123@gmail.com', NULL, '$2y$10$1LKP4h2rEO93FVCWgicELeqInbxCTGssAzvs9/k4jYnyp6uxbm.Wa', NULL, '2022-05-09 04:18:07', '2022-05-09 04:18:07'),
(16, 'Ika Fathisna Mutmainah', 'ika051022@gmail.com', NULL, '$2y$10$0UWuTtl2nrAkGngIIyPZ6.LtzKIVp2TukmfKgOysegkoYmVhPpEFy', NULL, '2022-05-09 20:32:07', '2022-05-09 20:32:07'),
(17, 'Ika Fathisna Mutmainah', 'ikaa070205@gmail.com', NULL, '$2y$10$OnTdQo.0kH/0anQySqkhRuLk.vI7ivJW.PBqD8pwDHoTxrTh8ZxMG', NULL, '2022-05-11 01:03:24', '2022-05-11 01:03:24'),
(18, 'Ika Fathisna Mutmainah', 'admin@gmail.com', NULL, '$2y$10$C4dMn2fVnWplkpLAZHLrhOGMjj2Bfo2l.dFmAK26FYTQHtWfGz04y', NULL, '2022-05-18 21:03:24', '2022-05-18 21:03:24'),
(19, 'Ika Fathisna Mutmainah', 'ikafathisnam183@gmail.com', NULL, '$2y$10$TUjAG.pEeagrdKaB24cPOOIH4nKd8DyCp7VwgnJ0lM1MLMUTSyH/i', NULL, '2022-05-29 23:40:21', '2022-05-29 23:40:21'),
(20, 'Ika Fathisna Mutmainah', 'ikafathisnam248@gmail.com', NULL, '$2y$10$/MuaLEVVKTuQCtUB.6I4T.kS9azVXGkzvx24R.2TweQNPf58qA8Oy', NULL, '2022-05-29 23:54:02', '2022-05-29 23:54:02'),
(21, 'Ika Fathisna Mutmainah', 'ikafathisnamm24814@gmail.com', NULL, '$2y$10$kjBOcR6sU.d53.qfi8Vug.FNU0ns/wyhDRxBzdnlLXUC3h4ZhxwYa', NULL, '2022-05-30 00:09:40', '2022-05-30 00:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
