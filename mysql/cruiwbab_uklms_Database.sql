-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2022 at 04:21 PM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruiwbab_uklms_Database`
--

-- --------------------------------------------------------

--
-- Table structure for table `bespoke_forms`
--

CREATE TABLE `bespoke_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Course_Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Course_Duration` int(11) NOT NULL,
  `Course_Participant` int(11) NOT NULL,
  `Course_Venue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Start_Date` datetime NOT NULL,
  `Course_Objective` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Course_Salutation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Phone` bigint(20) NOT NULL,
  `Lead_Telephone` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Lead_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Phone` bigint(20) NOT NULL,
  `Lead_Subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `Lead_Name`, `Lead_Email`, `Lead_Phone`, `Lead_Subject`, `Lead_Message`, `created_at`, `updated_at`) VALUES
(1, 'Testing', 'testing@email.com', 11651415548, 'Testing', 'Contact Testing', '2022-07-06 03:04:26', '2022-07-06 03:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'False',
  `cate_Image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_Desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `cate_Name`, `is_Deleted`, `cate_Image`, `cate_Desc`, `created_at`, `updated_at`) VALUES
(1, 'Budgeting & Finance', 'False', '1657062594.png', 'Budgeting and Scheduling Projects', '2022-07-06 03:09:54', '2022-07-06 03:09:54'),
(2, 'Health, Safety & Environment', 'False', '1657062911.png', '___', '2022-07-06 03:15:11', '2022-07-06 03:15:11'),
(3, 'Management & Leadership', 'False', '1657191329.png', '---', '2022-07-07 14:55:29', '2022-07-07 14:55:29'),
(4, 'Executive Development', 'False', '1657191368.png', '---', '2022-07-07 14:56:08', '2022-07-07 14:56:08'),
(5, 'Human Resource Management', 'False', '1657191475.png', '---', '2022-07-07 14:57:55', '2022-07-07 14:57:55'),
(6, 'Finance, Accounting & Budgeting', 'False', '1657191529.png', '---', '2022-07-07 14:58:49', '2022-07-07 14:58:49'),
(7, 'Contracts Management', 'False', '1657191599.png', '---', '2022-07-07 14:59:59', '2022-07-07 14:59:59'),
(8, 'Information Technology', 'False', '1657191765.png', '---', '2022-07-07 15:02:45', '2022-07-07 15:02:45'),
(9, 'Purchasing & Supply Chain', 'False', '1657191796.png', '---', '2022-07-07 15:03:16', '2022-07-07 15:03:16'),
(10, 'Electrical Engineering', 'False', '1657191912.png', '---', '2022-07-07 15:05:12', '2022-07-07 15:05:12'),
(11, 'Mechanical Engineering', 'False', '1657191960.png', '---', '2022-07-07 15:06:00', '2022-07-07 15:06:00'),
(12, 'Sustainability & CSR', 'False', '1657192024.png', '---', '2022-07-07 15:07:04', '2022-07-07 15:07:04'),
(13, 'Media & Public Relations', 'False', '1657192055.png', '---', '2022-07-07 15:07:35', '2022-07-07 15:07:35'),
(14, 'Office Adminstration', 'False', '1657192092.png', '---', '2022-07-07 15:08:12', '2022-07-07 15:08:12'),
(15, 'Sales & Marketing', 'False', '1657192418.png', '---', '2022-07-07 15:13:38', '2022-07-07 15:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `course_enquiries`
--

CREATE TABLE `course_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Lead_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Phone` bigint(20) NOT NULL,
  `Lead_Company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Company_Phone` bigint(20) NOT NULL,
  `Company_Designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lead_Message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_infos`
--

CREATE TABLE `course_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Course_Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Course_Price` bigint(20) DEFAULT NULL,
  `Course_Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Course_Duration` bigint(20) NOT NULL,
  `Course_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Course_Type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_Image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_infos`
--

INSERT INTO `course_infos` (`id`, `Course_Title`, `Course_Price`, `Course_Category`, `Course_Duration`, `Course_Description`, `Course_Type`, `course_Image`, `created_at`, `updated_at`) VALUES
(1, 'Fundamentals of Waste Management', NULL, 'Health, Safety & Environment', 5, 'Please send an email to info@xcalibretraining.com or call +971564754000 for more information.', 'CTC', '1657358317.jpg', '2022-07-09 13:18:37', '2022-07-09 13:18:37'),
(2, 'Recruiting, Hiring, and Onboarding Employees', NULL, 'Executive Development', 5, 'The survival and maintenance of corporations in the market necessarily involve decision-making both in the strategic and tactical spheres. Our daily lives are full of these decisions. Having in its staff professionals capable of making decisions, from the simplest to the most complex, has become a necessity of the first order. In some situations, the modern world demands more actions and immediate reactions to unscheduled events or changes. New technologies and procedures appear all the time, making the solutions used just now obsolete in a short period of time.', 'VTC', '1657454224.jpg', '2022-07-10 15:57:04', '2022-07-10 15:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `course_venues`
--

CREATE TABLE `course_venues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venues_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'False',
  `venue_Image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_venues`
--

INSERT INTO `course_venues` (`id`, `venues_name`, `is_Deleted`, `venue_Image`, `created_at`, `updated_at`) VALUES
(1, 'Dubai-UAE', 'False', '1657062439.jpg', '2022-07-06 03:07:19', '2022-07-06 03:07:19'),
(2, 'Prague - Czech Republic', 'False', '1657358220.jpg', '2022-07-09 13:17:00', '2022-07-09 13:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_venues_infos`
--

CREATE TABLE `course_venues_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Venue_Date` date NOT NULL,
  `Venue_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Venue_Fee` bigint(20) NOT NULL,
  `CID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_venues_infos`
--

INSERT INTO `course_venues_infos` (`id`, `Venue_Date`, `Venue_Name`, `Venue_Fee`, `CID`, `created_at`, `updated_at`) VALUES
(1, '2022-07-09', 'Dubai-UAE', 4350, 1, NULL, NULL),
(2, '2022-07-30', 'Prague - Czech Republic', 5360, 1, NULL, NULL),
(3, '2022-07-10', 'Prague - Czech Republic', 5360, 2, NULL, NULL),
(4, '2022-07-29', 'Dubai-UAE', 4520, 2, NULL, NULL);

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_06_30_101211_create_course_categories_table', 1),
(18, '2022_06_30_101342_create_user_registerds_table', 1),
(19, '2022_06_30_101420_create_course_venues_table', 1),
(20, '2022_07_01_104507_create_course_infos_table', 1),
(21, '2022_07_01_110344_create_course_venues_infos_table', 1),
(22, '2022_07_04_210555_create_contact_forms_table', 1),
(23, '2022_07_04_222920_create_bespoke_forms_table', 1),
(24, '2022_07_05_003311_create_course_enquiries_table', 1);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'Laravel Password Grant Client', '66d4a0c3e4b39f55d28ba2d624cf48c7cad7287e80fea637fd7e955d463245a7', '[\"*\"]', NULL, '2022-07-05 09:20:11', '2022-07-05 09:20:11'),
(2, 'App\\Models\\User', 1, 'LoginToken', '2489aad8d67ffcb14be7f0755c0e8430b4d6ed2b6477f149228e0f66205eb6f2', '[\"*\"]', NULL, '2022-07-06 03:02:52', '2022-07-06 03:02:52'),
(3, 'App\\Models\\User', 1, 'LoginToken', '97710bb375a60510729348443e4f5139113a34e20bda9baa80ccc8b15aeef2bd', '[\"*\"]', NULL, '2022-07-06 12:19:47', '2022-07-06 12:19:47'),
(4, 'App\\Models\\User', 1, 'LoginToken', 'b2f673946433326dcdc46e79b9eeb16dbfc3db14d7df68fd2288f762da1dc52e', '[\"*\"]', NULL, '2022-07-06 12:22:42', '2022-07-06 12:22:42'),
(5, 'App\\Models\\User', 1, 'LoginToken', 'b319a20fd1eec2bd5a2ca744b526e1cab40a7836504868deaa36ed5c7acbb277', '[\"*\"]', NULL, '2022-07-06 14:54:19', '2022-07-06 14:54:19'),
(6, 'App\\Models\\User', 1, 'LoginToken', 'be10b31f7c00ffeaf66c2969721a4cb7845a80412a140820d2ce64eb71763dc3', '[\"*\"]', NULL, '2022-07-07 01:42:56', '2022-07-07 01:42:56'),
(7, 'App\\Models\\User', 1, 'LoginToken', '5b890a361863cf6471c1177e1091178765070bd31f6c478a28a9a700c84379dd', '[\"*\"]', NULL, '2022-07-07 14:53:06', '2022-07-07 14:53:06'),
(8, 'App\\Models\\User', 1, 'LoginToken', 'cf916917c53a5fef4fba55b4c6dac47bdfffd78df7311134d25a038ff1d0472c', '[\"*\"]', NULL, '2022-07-08 20:40:44', '2022-07-08 20:40:44'),
(9, 'App\\Models\\User', 1, 'LoginToken', 'b20323582abadaaa9b547fbefdaf5dd0ec4ecd7ff1150595a84a55225fb4ffad', '[\"*\"]', NULL, '2022-07-08 22:06:07', '2022-07-08 22:06:07'),
(10, 'App\\Models\\User', 1, 'LoginToken', 'ef6c61b05d24258c2051f347672c8b5b425e4afcddde6d28cd6200762994c0b2', '[\"*\"]', NULL, '2022-07-09 13:15:53', '2022-07-09 13:15:53'),
(11, 'App\\Models\\User', 1, 'LoginToken', '2a75fc79b5e8659e58748bdaefa20ab3a05b43a511d9b8fb7aec5cdd8af2636b', '[\"*\"]', NULL, '2022-07-10 15:54:11', '2022-07-10 15:54:11'),
(12, 'App\\Models\\User', 1, 'LoginToken', '3702f06aff616d1b50ba49a45dd4ace06954ae6875343d79d87e431909d0c38b', '[\"*\"]', NULL, '2022-07-12 12:06:08', '2022-07-12 12:06:08');

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
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$n6wkc/fKX.6bLaqX5RSi5OUNOSUoCe1Wo5B4HM4KUoKClaHgMckV.', NULL, '2022-07-05 09:19:47', '2022-07-05 09:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_registerds`
--

CREATE TABLE `user_registerds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bespoke_forms`
--
ALTER TABLE `bespoke_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_enquiries`
--
ALTER TABLE `course_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_infos`
--
ALTER TABLE `course_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_venues`
--
ALTER TABLE `course_venues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_venues_infos`
--
ALTER TABLE `course_venues_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_venues_infos_cid_foreign` (`CID`);

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
-- Indexes for table `user_registerds`
--
ALTER TABLE `user_registerds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bespoke_forms`
--
ALTER TABLE `bespoke_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `course_enquiries`
--
ALTER TABLE `course_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_infos`
--
ALTER TABLE `course_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_venues`
--
ALTER TABLE `course_venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_venues_infos`
--
ALTER TABLE `course_venues_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_registerds`
--
ALTER TABLE `user_registerds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_venues_infos`
--
ALTER TABLE `course_venues_infos`
  ADD CONSTRAINT `course_venues_infos_cid_foreign` FOREIGN KEY (`CID`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
