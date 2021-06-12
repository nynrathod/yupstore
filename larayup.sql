-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 08:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larayup`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbu`
--

CREATE TABLE `dbu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dbu`
--

INSERT INTO `dbu` (`id`, `user_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(41, 'VenusuprxY765u', NULL, 'Venus Hart', 'xedinak@mailinator.com', NULL, '$2y$10$FOJn3VUPdYVmAEU1/LEPEOsjKO/XtfXiEPdmUbkoq3HJmv.niHNR6', NULL, '2021-04-20 03:03:43', '2021-04-20 03:03:43'),
(42, 'CecilDzd5RQsJf', NULL, 'Cecilia Saunders', 'zaso@mailinator.com', NULL, '$2y$10$p.wCi/AEVqyVieRk/y0zbO6Azt/j0kYIVN3dc0GpB7vFqtCe8W6Fe', NULL, '2021-04-20 03:04:16', '2021-04-20 03:04:16');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_no` int(10) NOT NULL,
  `order_status` char(30) NOT NULL,
  `order_date` varchar(30) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_f_name` char(50) NOT NULL,
  `customer_l_name` char(50) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_mobile` varchar(20) NOT NULL,
  `product_sku` varchar(20) NOT NULL,
  `product_name` varchar(500) DEFAULT NULL,
  `product_slug` varchar(200) DEFAULT NULL,
  `product_category` varchar(250) NOT NULL,
  `product_weight` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `unit_price` int(10) NOT NULL,
  `unit_sale_price` int(10) DEFAULT NULL,
  `coupon_discount` int(10) DEFAULT NULL,
  `shipping_charge` int(10) DEFAULT NULL,
  `order_quantity` int(10) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_info` varchar(50) DEFAULT NULL,
  `shipping_address` varchar(5000) DEFAULT NULL,
  `seller_id` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `order_status`, `order_date`, `customer_id`, `customer_f_name`, `customer_l_name`, `customer_email`, `customer_mobile`, `product_sku`, `product_name`, `product_slug`, `product_category`, `product_weight`, `product_quantity`, `unit_price`, `unit_sale_price`, `coupon_discount`, `shipping_charge`, `order_quantity`, `payment_status`, `payment_info`, `shipping_address`, `seller_id`, `created_at`, `updated_at`) VALUES
(23, 1254, 'processing', '2021-04-20 08:38:39', '35498', 'Sachin', 'Tendulkar', 'sachin@mail.com', '5467987432', '6749', 'Syngonium White Butterfly Plant', 'illana-carney', 'Category 1,Category 2', 1627, 970, 942, 780, 20, 10, 1, 'Paid', 'Credit Card', 'Asperiores plac.fgwer', 'CecilDzd5RQsJf', '2021-04-20 03:08:39', '2021-04-20 03:08:39'),
(24, 1256, 'complete', '2021-04-20 09:02:54', '87876', 'Virat', 'Kohli', 'virat@mail.com', '4587954658', '6539', 'Money Plant Variegated', 'money-plant-variegated', 'Category 4,Category 2,Category 1', 352, 921, 998, 900, 93, 10, 2, 'Unpaid', 'UPI', 'Non quae ad vol. asd', 'CecilDzd5RQsJf', '2021-04-20 03:32:54', '2021-06-01 02:26:03'),
(25, 2310, 'shipped', '2021-04-21 09:14:55', '68741', 'Rohit', 'Sharma', 'rohit@mail.com', '5656676546', '1628', 'Merrill Hughes hd', 'merrill-hughes-hd', 'Category 1,Category 4', 1314, 651, 275, 175, 10, 10, 1, 'Unpaid', 'Debit Card', 'Ex molestiae ob. afds&nbsp;', 'CecilDzd5RQsJf', '2021-04-21 03:44:55', '2021-05-31 06:04:51'),
(26, 5470, 'cancelled', '2021-04-21 09:23:35', '98657', 'Akash', 'Chopra', 'akash@mail.com', '7645365656', '1628', 'Merrill Hughes hd', 'merrill-hughes-hd', 'Category 1,Category 4', 1314, 651, 275, 200, 10, 10, 4, 'Paid', 'Debit Card', 'Ex molestiae ob. afds&nbsp;', 'CecilDzd5RQsJf', '2021-04-21 03:53:35', '2021-05-31 06:04:51');

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
(1, 'App\\Models\\User', 69, 'bigStore', 'df05c35c62ac8c6c1071e895a71fb89b0bfd5cf6e0d03f9fd2cf598fd30c05ef', '[\"*\"]', NULL, '2021-06-08 11:39:37', '2021-06-08 11:39:37'),
(2, 'App\\Models\\User', 69, 'my-app-token', '1957d1e7a2c2d42a7b69ba368c20646447912d3f48d91a35fe2c6a938b09c424', '[\"*\"]', NULL, '2021-06-08 11:47:30', '2021-06-08 11:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(20) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `category` varchar(250) NOT NULL,
  `tag` varchar(200) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `onsale` int(10) DEFAULT NULL,
  `discount` int(10) DEFAULT NULL,
  `stock_status` varchar(50) NOT NULL,
  `product_weight` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `description` text DEFAULT NULL,
  `product_info` varchar(5000) DEFAULT NULL,
  `return_info` varchar(5000) DEFAULT NULL,
  `shipping_info` varchar(5000) DEFAULT NULL,
  `seller_id` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `slug`, `category`, `tag`, `price`, `onsale`, `discount`, `stock_status`, `product_weight`, `product_quantity`, `description`, `product_info`, `return_info`, `shipping_info`, `seller_id`, `created_at`, `updated_at`) VALUES
(23, '6749', 'Syngonium White Butterfly Plants ss', 'syngonium-white-butterfly-plants-ss', 'Category 1,Category 3', 'Veniam eos rep', 942, 1, 770, 'Out of Stock', 1627, 970, 'Corrupti, sed p. asd', 'Voluptatem, sit.fdg&nbsp;', 'Asperiores plac.fgwer', 'Sed hic tempore.qwe', 'CecilDzd5RQsJf', '2021-04-20 03:08:39', '2021-06-11 05:40:52'),
(24, '6539', 'Money Plant Variegated', 'money-plant-variegated', 'Category 4,Category 2,Category 1', 'Quod velit volu', 998, 1, 93, 'In Stock', 352, 921, '&nbsp;eo;dqwe&nbsp;', 'In qui velit sa. dfsa', 'Non quae ad vol. asd', 'Elit, harum mag. sfdf', 'CecilDzd5RQsJf', '2021-04-20 03:32:54', '2021-06-01 02:26:03'),
(25, '1628', 'Merrill Hughes hd', 'merrill-hughes-hd', 'Category 1,Category 4', 'Sed nemo reicie', 275, 1, 10, 'In Stock', 1314, 651, 'Sed voluptas ad. sdf', 'Pariatur? Aperi. adf', 'Ex molestiae ob. afds&nbsp;', 'Consectetur, te.sdef', 'CecilDzd5RQsJf', '2021-04-21 03:44:55', '2021-05-31 06:04:51'),
(26, '1628', 'Merrill Hughes hd', 'merrill-hughes-hd', 'Category 1,Category 4', 'Sed nemo reicie', 275, 1, 10, 'In Stock', 1314, 651, 'Sed voluptas ad. sdf', 'Pariatur? Aperi. adf', 'Ex molestiae ob. afds&nbsp;', 'Consectetur, te.sdef', 'CecilDzd5RQsJf', '2021-04-21 03:53:35', '2021-05-31 06:04:51'),
(27, '3010', 'Xavier Schmidt', 'xavier-schmidt', 'Category 5', 'Alias rerum off', 830, 1, 512, 'In Stock', 1870, 466, 'Fugiat qui cill. dsd', 'Quia tempora vo. adf', 'Quia libero nob. afds', 'Asperiores omni. afs', 'CecilDzd5RQsJf', '2021-04-21 04:36:02', '2021-04-21 04:36:02'),
(28, '5283', 'Uriel Woodward', 'uriel-woodward', 'Category 0,Category 4', 'Nesciunt tempo', 267, 1, 505, 'Out of Stock', 1022, 886, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-04-21 04:37:23', '2021-04-21 04:37:23'),
(29, '5922', 'Ifeoma Vaughan', 'ifeoma-vaughan', 'Category 5', 'Aperiam dolorem', 973, 1, 325, 'In Stock', 1835, 54, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-04-21 04:38:32', '2021-04-21 04:38:32'),
(30, '1556', 'Nasim Lindsay', 'nasim-lindsay', 'Category 0,Category 2', 'Ipsum dolores', 809, 1, 758, 'In Stock', 674, 159, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-04-21 04:41:14', '2021-04-21 04:41:14'),
(31, '2155', 'Forrest Ferrell', 'forrest-ferrell', 'Category 0', 'Voluptas ullam', 467, 1, 992, 'Out of Stock', 1187, 502, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-04-21 04:58:40', '2021-04-21 04:58:40'),
(32, '5608', 'Rahim Watson', 'rahim-watson', 'Category 1,Category 5', 'Harum dolor et', 525, 1, 891, 'In Stock', 505, 165, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-04-21 04:59:41', '2021-04-21 04:59:41'),
(33, '4124', 'Roary Herman', 'roary-herman', 'Category 6,Category 4', 'Quae iure sequi', 258, 1, 31, 'Out of Stock', 867, 80, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-04-21 05:00:54', '2021-04-21 05:00:54'),
(34, '8879', 'Megan Carpenter', 'megan-carpenter', 'Category 5,Category 4', 'Molestiae est', 824, 1, 545, 'In Stock', 1493, 45, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-04-21 05:02:09', '2021-04-21 05:02:09'),
(35, '9204', 'Jesse Mckinney', 'jesse-mckinney', 'Category 2,Category 1', 'Voluptas et har', 840, 1, 284, 'In Stock', 1022, 298, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-04-21 05:02:50', '2021-04-21 05:02:50'),
(36, '2632', 'Lysandra Haney', 'lysandra-haney', 'Category 0,Category 1', 'Quis maiores in', 852, 1, 634, 'In Stock', 265, 529, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-04-21 05:03:32', '2021-04-21 05:03:32'),
(37, '8301', 'Ignatius Lucas', 'ignatius-lucas', 'Category 2,Category 4', 'Nobis sed dolor', 448, 1, 634, 'In Stock', 1589, 566, 'Omnis dolores s. wades', 'Dolor quos illu. er', 'Assumenda ipsa.ew r', 'Adipisicing est.tert', 'CecilDzd5RQsJf', '2021-04-25 23:47:26', '2021-04-25 23:47:26'),
(38, '5380', 'Fulton Blackburn', 'fulton-blackburn', 'Category 9,Category 7', 'Distinctio Bea', 74, 1, 15, 'In Stock', 315, 182, 'Praesentium id. ads', 'Omnis esse, eiu. rer3t', 'Rerum nobis eni.54trt', 'Aliqua. Perspic.yuy', 'CecilDzd5RQsJf', '2021-06-01 01:14:13', '2021-06-01 01:14:13'),
(39, '8209', 'Flynn Spears', 'flynn-spears', 'Category 10,Category 7', 'Sint nihil fug', 715, 1, 615, 'In Stock', 1705, 580, NULL, NULL, NULL, NULL, 'CecilDzd5RQsJf', '2021-06-01 02:19:30', '2021-06-01 02:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `image_id` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` char(10) NOT NULL,
  `product_sku` int(10) NOT NULL,
  `seller_id` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_id`, `image`, `type`, `product_sku`, `seller_id`, `created_at`, `updated_at`) VALUES
(284, 1, '20210611101013.banner9new.jpg', 'gallery', 6749, 'CecilDzd5RQsJf', '2021-06-11 04:40:13', '2021-06-11 05:32:34'),
(289, 1, '20210611101232.banner4new - Copy.jpg', 'main', 6749, 'CecilDzd5RQsJf', '2021-06-11 04:42:32', '2021-06-11 04:42:32'),
(291, 2, '20210611103625.banner9new.jpg', 'gallery', 6749, 'CecilDzd5RQsJf', '2021-06-11 05:06:25', '2021-06-11 05:32:34'),
(296, 3, '20210611105718.banner8new.jpg', 'gallery', 6749, 'CecilDzd5RQsJf', '2021-06-11 05:27:18', '2021-06-11 05:32:34'),
(298, 4, '20210611110209.banner6new.jpg', 'gallery', 6749, 'CecilDzd5RQsJf', '2021-06-11 05:32:09', '2021-06-11 05:32:34'),
(300, 5, '20210611110210.banner8new.jpg', 'gallery', 6749, 'CecilDzd5RQsJf', '2021-06-11 05:32:10', '2021-06-11 05:32:34'),
(301, 6, '20210611110210.banner9new.jpg', 'gallery', 6749, 'CecilDzd5RQsJf', '2021-06-11 05:32:10', '2021-06-11 05:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` int(11) NOT NULL,
  `webid` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `status` char(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `webid`, `url`, `seller`, `status`, `created_at`, `updated_at`) VALUES
(1, '311s44da4s6d', 'http://localhost:8080/#/atttrect', 'CecilDzd5RQsJf', 'true', NULL, '2021-06-09 00:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `seller_id` char(50) DEFAULT NULL,
  `seller_fname` char(50) DEFAULT NULL,
  `seller_mname` char(50) DEFAULT NULL,
  `seller_lname` char(50) DEFAULT NULL,
  `seller_bname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `seller_mobile` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `seller_website` varchar(50) NOT NULL,
  `seller_birthdate` varchar(50) DEFAULT NULL,
  `seller_reg_date` varchar(50) DEFAULT NULL,
  `seller_city` varchar(50) DEFAULT NULL,
  `seller_pincode` int(10) DEFAULT NULL,
  `seller_address` varchar(1000) DEFAULT NULL,
  `remember_token` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `seller_id`, `seller_fname`, `seller_mname`, `seller_lname`, `seller_bname`, `email`, `seller_mobile`, `password`, `seller_website`, `seller_birthdate`, `seller_reg_date`, `seller_city`, `seller_pincode`, `seller_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(68, 'VenusuprxY765u', NULL, NULL, NULL, 'Venus Hart', 'xedinak@mailinator.com', NULL, '$2y$10$J4ArMPX4snTlBYCXWjpBa.V8se6qA77lqwDFiMR0uXGV1mB.Rgeoi', 'flexaui', NULL, NULL, NULL, NULL, NULL, '', '2021-04-20 03:03:43', '2021-04-20 03:03:43'),
(69, 'CecilDzd5RQsJf', NULL, NULL, NULL, 'Cecilia Saunders', 'zaso@mailinator.com', NULL, '$2y$10$vSJtLqFWecu8ZEOwRRk0h.h/4oOdknnP5j3KcqjhJqtBLaOFKFCo.', 'atttrect', NULL, NULL, NULL, NULL, NULL, '5exqWnfj54rxgTBIU7IvTeI0oTkBHQsnV3aLdHcD1iCcPuK0LlBwGFvJ8YrE', '2021-04-20 03:04:16', '2021-04-20 03:04:16'),
(70, 'dfseraurW9z6NB', NULL, NULL, NULL, 'dfserf', 'zasso@mailinator.com', NULL, '$2y$10$cNUP.k8odPP.YMsPsXWMtusCIj8E3Gdkul/ks1OaQmlgTVQ3CjdLi', 'mynewsite', NULL, NULL, NULL, NULL, NULL, '', '2021-05-31 00:42:02', '2021-05-31 00:42:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbu`
--
ALTER TABLE `dbu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbu`
--
ALTER TABLE `dbu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
