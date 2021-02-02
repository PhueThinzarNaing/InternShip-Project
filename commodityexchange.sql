-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 04:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commodityexchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `weight` double NOT NULL,
  `total_price` double NOT NULL,
  `commodity_exchanges_id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`id`, `customer_id`, `item_id`, `description`, `price`, `weight`, `total_price`, `commodity_exchanges_id`, `categories_id`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 'dssssssscdxcfvbgv vv', 900, 300, 270000, 2, 1, '2021-01-28 20:48:39', '2021-01-28 20:48:39'),
(2, 4, 1, 'dsfadffaf', 800, 200, 160000, 1, 2, '2021-01-29 09:37:38', '2021-01-29 09:37:38'),
(3, 4, 3, 'gjkghkjnkj', 400, 90, 36000, 1, 1, '2021-02-02 05:54:03', '2021-02-02 05:54:03'),
(4, 5, 3, 'dfadffdfcxc', 400, 200, 60000, 1, 1, '2021-02-02 07:15:23', '2021-02-02 07:15:23'),
(5, 6, 2, 'wadsxc', 900, 300, 270000, 2, 1, '2021-02-02 07:24:34', '2021-02-02 07:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'စားသောက်ကုန်', 'စားသောက်ကုန်သည်', '2021-01-28 01:12:29', '2021-01-28 01:15:53'),
(2, 'သဘာ၀ထွက်ကုန်', 'သဘာ၀ထွက်ကုန်သည်', '2021-01-28 01:16:58', '2021-01-28 01:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `commodity_exchanges`
--

CREATE TABLE `commodity_exchanges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photopath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commodity_exchanges`
--

INSERT INTO `commodity_exchanges` (`id`, `name`, `email`, `address`, `phno1`, `phno2`, `photopath`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Hsu Zaw War', 'hsuzawwar@gmail.com', 'No(11),Thar Yar Kone Village,LaungLone TownShip', '09258534367', '09253161423', '1611820286_36ythgvbbvg.jpg', 2, '2021-01-28 01:21:27', '2021-01-28 01:21:27'),
(2, 'La Min Thar', 'laminthar@gmail.com', 'N0(10),KaMyawKin  Road,Dawei', '09234567897', '09923456774', '1611848719_18-181725_new-wallpaper-hd-nature-love-beautiful-images-of.jpg', 3, '2021-01-28 09:15:19', '2021-01-28 09:15:19'),
(3, 'Shwe Lin Yoe', 'shwelinyoe@gmail.com', 'N0(18),Ye Road,Dawei', '09422213456', '09258978906', '1612268263_images.jpg6.jpg', 5, '2021-02-02 05:46:43', '2021-02-02 05:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photopath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` bigint(20) NOT NULL,
  `ce_Id` bigint(20) UNSIGNED NOT NULL,
  `cat_Id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `photopath`, `Status`, `ce_Id`, `cat_Id`, `created_at`, `updated_at`) VALUES
(1, 'ရာဘာ', 'ရာဘာသည်', '1611820788_yabar.jpg', 1, 1, 2, '2021-01-28 01:29:48', '2021-01-28 01:29:48'),
(2, 'coconut', 'sdgfvcc', '1611848891_coconut.jpg', 1, 2, 1, '2021-01-28 09:18:11', '2021-01-28 09:18:11'),
(3, 'chilli', '့ုငြညုူာ,.ာ,ာူ,', '1612268497_chilli1.jpg', 1, 1, 1, '2021-02-02 05:51:37', '2021-02-02 05:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `item_prices`
--

CREATE TABLE `item_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `ce_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_prices`
--

INSERT INTO `item_prices` (`id`, `price`, `item_id`, `ce_id`, `created_at`, `updated_at`) VALUES
(1, 750, 1, 1, '2021-01-28 01:30:07', '2021-01-28 01:30:07'),
(2, 900, 2, 2, '2021-01-28 09:19:30', '2021-01-28 09:19:30'),
(3, 300, 3, 1, '2021-02-02 05:52:09', '2021-02-02 05:52:09'),
(4, 400, 3, 1, '2021-02-02 05:52:41', '2021-02-02 05:52:41');

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
(4, '2020_10_29_050150_add_gender_to_users_table', 1),
(5, '2020_10_29_050224_add_phone_to_users_table', 1),
(6, '2020_10_29_050259_add_address_to_users_table', 1),
(7, '2020_10_29_065032_add_role_to_users_table', 1),
(8, '2020_11_03_082708_create_commodity_exchanges_table', 1),
(9, '2020_11_04_083315_create_categories_table', 1),
(10, '2020_11_04_132943_create_items_table', 1),
(11, '2020_11_12_052651_create_item_prices_table', 1),
(13, '2021_01_28_143757_create_byus_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('phuethinzarnaing28@gmail.com', '$2y$10$OSEHLQJMbvA1j/OfWaF15uczVEgQTGjosFSKoQ4IdLnTrAYoyhCqC', '2021-02-02 03:17:22');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','manager','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `gender`, `phone`, `address`, `role`) VALUES
(1, 'Phue Thinzar Naing', 'phuethinzarnaing28@gmail.com', NULL, '$2y$10$SLhOJct9FSyA8raXI2t3AOuIoJr4hrBg/0ul1proq4j5qsRMsScni', NULL, '2021-01-28 01:09:13', '2021-01-28 01:09:13', 'female', '09422214618', 'No(11),Min Yap Village,LaungLone TownShip', 'admin'),
(2, 'thinzar', 'thinzar@gmail.com', NULL, '$2y$10$VyDGxmXySW7ilceCNgdRv.LnftY2nWHFY/dgGuL2qRrGr7BCcc/U6', NULL, '2021-01-28 01:10:32', '2021-01-28 01:11:13', 'female', '09422214618', 'No(14),Min Yap Village,LaungLone TownShip', 'manager'),
(3, 'phoo', 'phoo@gmail.com', NULL, '$2y$10$JPOPnBN1kLiannNl0.EyKOslHRzTmUDmF1pZG76hLLiI5CSUXAkSW', NULL, '2021-01-28 09:13:40', '2021-01-28 09:14:25', 'female', '09422214613', 'N0(15),RZarNi Road,Dawei', 'manager'),
(4, 'phyu phyu', 'phyu@gmail.com', NULL, '$2y$10$HbLSNisIQBAikVvn6U4BeewnbXvgsfIc4Xj8ppRAMqD9iCSSgw3yq', NULL, '2021-01-28 09:26:04', '2021-01-28 09:26:04', 'female', '09422224618', 'N0(5),RZarNi Road,Dawei', 'user'),
(5, 'Zin Zin', 'zin22@gmail.com', NULL, '$2y$10$Cq3MkKhxJbLGp7L9NhPCOeBtKvhDhTjfoltQuvYJHv3rKk6MjuO5S', NULL, '2021-02-02 03:26:42', '2021-02-02 05:44:52', 'female', '09422212618', 'N0(8),RZarNi Road,Dawei', 'manager'),
(6, 'Soe Soe', 'soe12@gmail.com', NULL, '$2y$10$1xobeDvdYZSzxWrt13NekepuDsURjA4r9Fm6NzZzkdA0WCdYEoqta', NULL, '2021-02-02 07:22:59', '2021-02-02 07:22:59', 'male', '09422214634', 'N0(7),RZarNi Road,Dawei', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buys_customer_id_foreign` (`customer_id`),
  ADD KEY `buys_item_id_foreign` (`item_id`),
  ADD KEY `buys_commodity_exchanges_id_foreign` (`commodity_exchanges_id`),
  ADD KEY `buys_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commodity_exchanges`
--
ALTER TABLE `commodity_exchanges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commodity_exchanges_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_ce_id_foreign` (`ce_Id`),
  ADD KEY `items_cat_id_foreign` (`cat_Id`);

--
-- Indexes for table `item_prices`
--
ALTER TABLE `item_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_prices_item_id_foreign` (`item_id`),
  ADD KEY `item_prices_ce_id_foreign` (`ce_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buys`
--
ALTER TABLE `buys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commodity_exchanges`
--
ALTER TABLE `commodity_exchanges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_prices`
--
ALTER TABLE `item_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buys`
--
ALTER TABLE `buys`
  ADD CONSTRAINT `buys_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `buys_commodity_exchanges_id_foreign` FOREIGN KEY (`commodity_exchanges_id`) REFERENCES `commodity_exchanges` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `buys_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `buys_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `commodity_exchanges`
--
ALTER TABLE `commodity_exchanges`
  ADD CONSTRAINT `commodity_exchanges_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_cat_id_foreign` FOREIGN KEY (`cat_Id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `items_ce_id_foreign` FOREIGN KEY (`ce_Id`) REFERENCES `commodity_exchanges` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `item_prices`
--
ALTER TABLE `item_prices`
  ADD CONSTRAINT `item_prices_ce_id_foreign` FOREIGN KEY (`ce_id`) REFERENCES `commodity_exchanges` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `item_prices_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
