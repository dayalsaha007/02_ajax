-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 04:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `02_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `created_at`, `updated_at`) VALUES
(1, 'Baby', '2023-09-24 01:51:54', '2023-09-24 01:51:54'),
(2, 'T-shirt', '2023-09-24 01:55:16', '2023-09-24 01:55:16'),
(3, 'Sunglass', '2023-09-24 01:55:47', '2023-09-24 01:55:47'),
(4, 'Electronics', '2023-09-24 01:55:57', '2023-09-24 01:55:57'),
(5, 'Gadgets', '2023-09-24 01:56:08', '2023-09-24 01:56:08'),
(6, 'Cloths', '2023-09-24 01:57:12', '2023-09-24 01:57:12'),
(7, 'movies', '2023-09-24 01:57:58', '2023-09-24 01:57:58'),
(8, 'Books', '2023-09-24 01:58:08', '2023-09-24 01:58:08'),
(9, 'Food and beverage', '2023-09-24 01:58:22', '2023-09-24 01:58:22'),
(10, 'Beauty', '2023-09-24 01:58:43', '2023-09-24 01:58:43'),
(11, 'Furniture and decor', '2023-09-24 02:03:26', '2023-09-24 02:03:26');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_21_090255_create_students_table', 1),
(6, '2023_09_24_055614_create_products_table', 2),
(7, '2023_09_24_055936_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `price`, `description`, `c_id`, `created_at`, `updated_at`) VALUES
(1, 'Hilda Carrillo', '119', 'Irure possimus modi', 6, '2023-09-24 02:12:56', '2023-09-24 02:12:56'),
(2, 'Ian Hansen', '566', 'Possimus officia in', 5, '2023-09-24 02:13:03', '2023-09-24 02:13:03'),
(3, 'Sloane Alexander', '634', 'Itaque ducimus ut s', 5, '2023-09-24 02:13:08', '2023-09-24 02:13:08'),
(4, 'Amal Melendez', '727', 'Et dolor et inventor', 3, '2023-09-24 02:13:13', '2023-09-24 02:13:13'),
(5, 'Keegan Fletcher', '855', 'Anim molestias delec', 5, '2023-09-24 02:13:18', '2023-09-24 02:13:18'),
(6, 'Bianca Benton', '727', 'Dolores ipsa conseq', 2, '2023-09-24 02:13:23', '2023-09-24 02:13:23'),
(7, 'Amir Ellis', '944', 'Autem hic dolor nobi', 4, '2023-09-24 02:13:28', '2023-09-24 02:13:28'),
(8, 'Cynthia Mckinney', '737', 'Veritatis est quo a', 3, '2023-09-24 02:13:33', '2023-09-24 02:13:33'),
(9, 'Zoe Velasquez', '889', 'Voluptatum qui vel v', 3, '2023-09-24 02:13:38', '2023-09-24 02:13:38'),
(10, 'Jerome Rodgers', '125', 'Harum reprehenderit', 2, '2023-09-24 02:13:43', '2023-09-24 02:13:43'),
(11, 'Amena Briggs', '142', 'Doloribus voluptate', 9, '2023-09-24 02:13:48', '2023-09-24 02:13:48'),
(12, 'Rafael Kidd', '692', 'Quod dolore velit vi', 2, '2023-09-24 02:13:53', '2023-09-24 02:13:53'),
(13, 'Maryam Washington', '653', 'Vel reprehenderit p', 10, '2023-09-24 02:13:58', '2023-09-24 02:13:58'),
(14, 'Lacy Ferrell', '809', 'Velit cumque rerum e', 11, '2023-09-24 02:14:03', '2023-09-24 02:14:03'),
(15, 'Hall Baldwin', '858', 'Harum in unde evenie', 2, '2023-09-24 02:14:09', '2023-09-24 02:14:09'),
(16, 'Barbara Sampson', '421', 'Tempor esse qui ius', 11, '2023-09-24 02:14:52', '2023-09-24 02:14:52'),
(17, 'Barbara Sampson', '421', 'Tempor esse qui ius', 11, '2023-09-24 02:15:01', '2023-09-24 02:15:01'),
(18, 'Samson Hobbs', '861', 'Sapiente mollit exce', 4, '2023-09-24 02:15:28', '2023-09-24 02:15:28'),
(19, 'Kessie Higgins', '429', 'Nisi quas maiores it', 10, '2023-09-24 02:15:35', '2023-09-24 02:15:35'),
(20, 'Colby Jacobson', '533', 'Voluptatem voluptat', 3, '2023-09-24 02:16:57', '2023-09-24 02:16:57'),
(21, 'Berk Cabrera', '144', 'Consequat Laboriosa', 11, '2023-09-24 02:17:04', '2023-09-24 02:17:04'),
(22, 'Knox Hancock', '290', 'Qui soluta consequat', 10, '2023-09-24 02:17:11', '2023-09-24 02:17:11'),
(23, 'Tatyana Bray', '96', 'Ut iure voluptatem', 9, '2023-09-24 02:17:18', '2023-09-24 02:17:18'),
(24, 'Declan Reyes', '547', 'Quam sed enim dolore', 8, '2023-09-24 02:17:24', '2023-09-24 02:17:24'),
(25, 'Debra Parrish', '224', 'Consequuntur id nost', 7, '2023-09-24 02:17:30', '2023-09-24 02:17:30'),
(26, 'Blythe Berry', '134', 'Eaque et perspiciati', 6, '2023-09-24 02:17:36', '2023-09-24 02:17:36'),
(27, 'Amela Day', '116', 'Fuga Excepteur repr', 5, '2023-09-24 02:17:41', '2023-09-24 02:17:41'),
(28, 'MacKensie Noel', '243', 'Architecto cum recus', 4, '2023-09-24 02:17:45', '2023-09-24 02:17:45'),
(29, 'Destiny Woodward', '12', 'Praesentium incididu', 3, '2023-09-24 02:17:50', '2023-09-24 02:17:50'),
(30, 'Zephr Cooke', '48', 'Dolor optio ullamco', 2, '2023-09-24 02:17:55', '2023-09-24 02:17:55'),
(31, 'Bianca Mason', '593', 'Asperiores quas modi', 4, '2023-09-24 02:18:25', '2023-09-24 02:18:25'),
(32, 'Alisa Crane', '747', 'Alias officia dolore', 1, '2023-09-24 02:18:49', '2023-09-24 02:18:49'),
(33, 'Chester Perry', '929', 'Saepe dolor eiusmod', 10, '2023-09-24 10:27:10', '2023-09-24 10:27:10'),
(34, 'Oprah Humphrey', '315', 'Commodi doloribus co', 1, '2023-09-24 10:44:56', '2023-09-24 10:44:56'),
(35, 'Kermit Anthony', '132', 'Odit dolorem libero', 8, '2023-09-24 11:46:58', '2023-09-24 11:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Beau Lawson', 'lapo@mailinator.com', 'images/1695318337_MG_0262 copy.jpg', '2023-09-21 11:45:37', '2023-09-21 11:45:37'),
(2, 'Patrick Mcdonald', 'besafif@mailinator.com', 'images/1695318368_MG_0264 copy.jpg', '2023-09-21 11:46:09', '2023-09-21 11:46:09'),
(5, 'Buffy Tillman', 'falurud@mailinatod.com', 'images/1695453208pexels-karolina-grabowska-5202925.jpg', '2023-09-22 01:14:35', '2023-09-23 01:13:28'),
(6, 'Ora Carver 008', 'fuho@mailinato008.com', 'images/1695455399pexels-cottonbro-studio-4009402.jpg', '2023-09-22 23:03:16', '2023-09-23 01:49:59'),
(8, 'Wyatt Noel', 'dinafypid@mailinator.com', 'images/1695459655pexels-rene-asmussen-333984.jpg', '2023-09-23 03:00:56', '2023-09-23 03:00:56'),
(9, 'Ulla Ferrell', 'lamu@mailinator.com', 'images/1695459671pexels-karolina-grabowska-5202925.jpg', '2023-09-23 03:01:11', '2023-09-23 03:01:11'),
(10, 'Natalie Britt', 'tenoraty@mailinator.com', 'images/1695459682pexels-cottonbro-studio-4009402.jpg', '2023-09-23 03:01:23', '2023-09-23 03:01:23'),
(11, 'Walker Barrera', 'wycy@mailinator.com', 'images/1695459707dayal_saha .jpg', '2023-09-23 03:01:47', '2023-09-23 03:01:47');

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
-- Indexes for dumped tables
--

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
