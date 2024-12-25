-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 07:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Festive Mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_url` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_slug` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_image`, `created_at`, `updated_at`) VALUES
(14, 'No Brand', 'no-brand', 'upload/brand/1779298400205954.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_image`, `created_at`, `updated_at`) VALUES
(12, 'boy', 'boy', 'upload/category/1779254736923234.jpg', NULL, '2023-10-08 23:32:25'),
(13, 'Electric Trimmers & Razors', 'electric-trimmers-&-razors', 'upload/category/1779296466168197.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'EFR', 20, '2023-10-28', 1, '2023-10-08 10:44:25', '2023-10-08 10:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_02_09_062127_create_brands_table', 1),
(6, '2023_02_09_114842_create_categories_table', 1),
(7, '2023_02_11_091206_create_sub_categories_table', 1),
(8, '2023_02_11_105648_create_products_table', 1),
(9, '2023_02_11_114128_create_multi_imgs_table', 1),
(10, '2023_02_13_072134_create_sliders_table', 1),
(11, '2023_02_14_084618_create_banners_table', 1),
(12, '2023_02_19_094609_create_coupons_table', 2),
(13, '2023_02_20_121547_create_orders_table', 3),
(14, '2023_02_20_122242_create_order_items_table', 3),
(15, '2023_02_21_203300_create_notifications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/products/multi-image/1772835475717901.webp', '2023-07-30 13:01:00', NULL),
(2, 2, 'upload/products/multi-image/1772835618316462.webp', '2023-07-30 13:03:16', NULL),
(3, 3, 'upload/products/multi-image/1772836075242108.webp', '2023-07-30 13:10:32', NULL),
(4, 4, 'upload/products/multi-image/1772836493500173.webp', '2023-07-30 13:17:11', NULL),
(5, 5, 'upload/products/multi-image/1772836711172571.webp', '2023-07-30 13:20:38', NULL),
(6, 6, 'upload/products/multi-image/1772836751282505.webp', '2023-07-30 13:21:17', NULL),
(7, 7, 'upload/products/multi-image/1772837439402568.webp', '2023-07-30 13:32:13', NULL),
(8, 8, 'upload/products/multi-image/1772837763526649.webp', '2023-07-30 13:37:23', NULL),
(9, 9, 'upload/products/multi-image/1772838169851531.webp', '2023-07-30 13:43:50', NULL),
(10, 10, 'upload/products/multi-image/1772839069482971.webp', '2023-07-30 13:58:08', NULL),
(12, 12, 'upload/products/multi-image/1772840769313947.webp', '2023-07-30 14:25:09', NULL),
(13, 13, 'upload/products/multi-image/1772841139434692.jpg', '2023-07-30 14:31:01', NULL),
(14, 14, 'upload/products/multi-image/1772841397140558.jpeg', '2023-07-30 14:35:07', NULL),
(15, 15, 'upload/products/multi-image/1772841516660778.jpg', '2023-07-30 14:37:01', NULL),
(22, 18, 'upload/products/multi-image/1779298451306722.jpeg', '2023-10-09 11:07:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0a329d8f-1ad2-47c6-bdff-56f9e210a944', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 3, '{\"message\":\"New User Register In Shop\"}', NULL, '2023-07-27 05:57:52', '2023-07-27 05:57:52'),
('1be2d87a-7e64-4390-bd53-be428db2d08b', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-10-08 10:51:46', '2023-10-08 10:51:46'),
('23fbd007-205b-4a8a-8993-feabccaccd90', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 3, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-21 14:51:30', '2023-02-21 14:51:30'),
('52492de7-8697-4d74-a5da-720fa14fd76f', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 3, '{\"message\":\"New User Register In Shop\"}', NULL, '2023-10-08 10:50:31', '2023-10-08 10:50:31'),
('59ad872b-3db2-4188-add3-42094b627a37', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 1, '{\"message\":\"New User Register In Shop\"}', NULL, '2023-02-21 15:04:39', '2023-02-21 15:04:39'),
('743da4af-8d5c-4951-ac55-24d508d4f3f9', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 3, '{\"message\":\"New User Register In Shop\"}', NULL, '2023-02-21 15:04:39', '2023-02-21 15:04:39'),
('7658499f-1ac3-4a41-bae6-4f34435316d1', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-03-22 23:30:16', '2023-03-22 23:30:16'),
('ae494f1f-34f0-4253-92f5-0b3d0bda1d54', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 1, '{\"message\":\"New User Register In Shop\"}', NULL, '2023-07-27 05:57:52', '2023-07-27 05:57:52'),
('bc6a7654-1f27-4ef4-992f-05fc1ef6f817', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-07-28 08:45:25', '2023-07-28 08:45:25'),
('be409976-a28d-460e-acf1-071b784e8604', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 3, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-03-22 23:30:16', '2023-03-22 23:30:16'),
('c13d008f-5fc2-4e6a-9e3f-bb613aa5b945', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 3, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-07-28 08:45:25', '2023-07-28 08:45:25'),
('c66c6679-ef54-40b8-9164-bec289571f51', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-07-29 08:46:17', '2023-07-29 08:46:17'),
('c87d5811-835f-4b2a-b4c0-75960dfd54cf', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 1, '{\"message\":\"New User Register In Shop\"}', NULL, '2023-10-08 10:50:31', '2023-10-08 10:50:31'),
('d570bf3e-abed-440c-a7fc-71d22e4ea718', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-07-30 15:22:40', '2023-07-30 15:22:40'),
('db62ea57-ee62-4f87-8e8e-61de2ecf7ac9', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-21 14:51:30', '2023-02-21 14:51:30'),
('e628a70d-2c47-460f-b0b5-e58e28ef8058', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 3, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-10-08 10:51:46', '2023-10-08 10:51:46'),
('eb1676ea-4094-4590-868a-1c0dfb507bf3', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 3, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-07-30 15:22:40', '2023-07-30 15:22:40'),
('f5c9ea9d-5ac8-46b5-aaf1-0f270d9aa894', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 3, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-07-29 08:46:17', '2023-07-29 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `currency` varchar(255) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_month` varchar(255) NOT NULL,
  `order_year` varchar(255) NOT NULL,
  `confirmed_date` varchar(255) DEFAULT NULL,
  `processing_date` varchar(255) DEFAULT NULL,
  `picked_date` varchar(255) DEFAULT NULL,
  `shipped_date` varchar(255) DEFAULT NULL,
  `delivered_date` varchar(255) DEFAULT NULL,
  `cancel_date` varchar(255) DEFAULT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `return_reason` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `adress`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_reason`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'User', NULL, '+880 xxxx xxxxxx', 'Mohakali, Arjotpara, Dhaka, Bangladesh', NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 5000.00, NULL, 'EOS97137396', '30 July 2023', 'July', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'deliverd', '2023-07-30 15:22:40', '2023-07-30 15:27:03'),
(2, 11, 'zamil', NULL, '0875356677', 'easdca', NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 450.00, NULL, 'EOS25760665', '08 October 2023', 'October', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'deliverd', '2023-10-08 10:51:46', '2023-10-08 10:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '1', 5000.00, '2023-07-30 15:22:40', NULL),
(2, 2, 17, '1', 450.00, '2023-10-08 10:51:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `product_tags` varchar(255) DEFAULT NULL,
  `selling_price` varchar(255) NOT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `short_descp` text NOT NULL,
  `long_descp` text NOT NULL,
  `product_thambnail` varchar(255) NOT NULL,
  `trending` int(11) DEFAULT NULL,
  `new_arrivals` int(11) DEFAULT NULL,
  `best_sellers` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `product_name`, `product_slug`, `product_code`, `product_qty`, `product_tags`, `selling_price`, `discount_price`, `short_descp`, `long_descp`, `product_thambnail`, `trending`, `new_arrivals`, `best_sellers`, `status`, `created_at`, `updated_at`, `featured`) VALUES
(18, 14, 12, 42, 'Shirt And Pant Combo', 'shirt-and-pant-combo', 'PC1', '10', 'new product,top product', '1100', '990', 'Washable', '<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #6d6e71; line-height: 1.5; font-family: \'Open Sans\', Arial, sans-serif; font-size: 13px; background-color: #ffffff;\"><br style=\"box-sizing: border-box;\" />Colorful and comfortable&nbsp;<br style=\"box-sizing: border-box;\" />#Size_Measurement -&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #6d6e71; line-height: 1.5; font-family: \'Open Sans\', Arial, sans-serif; font-size: 13px; background-color: #ffffff;\">Shirt details:<br style=\"box-sizing: border-box;\" />M - (Chest - 38 , Length - 28)&nbsp;<br style=\"box-sizing: border-box;\" />L - (Chest - 40 , Length - 29)&nbsp;<br style=\"box-sizing: border-box;\" />XL - (Chest - 42 , Length - 30)</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #6d6e71; line-height: 1.5; font-family: \'Open Sans\', Arial, sans-serif; font-size: 13px; background-color: #ffffff;\">Pant details:<br style=\"box-sizing: border-box;\" />১০০% কটন<br style=\"box-sizing: border-box;\" />Size : 28, 30 32 34 36<br style=\"box-sizing: border-box;\" />Fabric : 100% cotton&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #6d6e71; line-height: 1.5; font-family: \'Open Sans\', Arial, sans-serif; font-size: 13px; background-color: #ffffff;\">আকর্ষণীয় ডিজাইন ও আধুনিকতার সাথে মানানসই<br style=\"box-sizing: border-box;\" />ফ্রন্ট ও ব্যাক পকেট ৪ টি।</p>', 'upload/products/thambnail/1779298451096561.jpeg', 1, NULL, NULL, 1, '2023-10-09 11:07:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `slider_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `short_title`, `slider_image`, `created_at`, `updated_at`) VALUES
(6, NULL, NULL, 'upload/slider/1779298012841156.jpg', NULL, NULL),
(7, NULL, NULL, 'upload/slider/1779298021871353.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(42, 12, 'home', 'home', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', NULL, '$2y$10$2JePbMTPGrUEn9AHgGDp1.wRNqYIXZwycsE/88ZHUTGwTz.VGaohi', '202302141232202302090610images.png', '+8801774382608', 'Jagannathpur Super Market (1st floor),Bashundhara residential area, main road gate,( Opposite of Mr. Baker),Vatara,Dhaka-1229, ঢাকা 1229', 'admin', 'active', NULL, NULL, '2023-02-14 06:32:51'),
(2, 'User', 'user', 'user@user.com', NULL, '$2y$10$vi5GPZNIqBRepoUWjHg00es5NoaTZPMD0LJV8cbj6V7FF5dmz65bm', '202302200902Avatar-Profile-Vector.png', '+880 xxxx xxxxxx', 'Mohakali, Arjotpara, Dhaka, Bangladesh', 'user', 'active', NULL, NULL, '2023-02-21 01:37:16'),
(3, 'Frederique Hessel', NULL, 'maria48@example.org', '2023-02-14 06:31:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/004455?text=dignissimos', '+1.606.883.7698', '38225 McLaughlin Plains Suite 632\nSouth Madilyn, TX 11637-5600', 'admin', 'inactive', 'ipO3OLAwUR', '2023-02-14 06:31:51', '2023-02-14 06:31:51'),
(4, 'Demo', NULL, 'demo@gmail.com', NULL, '$2y$10$aOMWXxKY.890Vesq8fDc.e0kWbsHdbEDUOKty53b/gLQftINsY/lq', '202302210555gdsf.jpeg', '017XXXXXXXX', 'Demo, Dhaka, Bangladesh', 'user', 'active', NULL, '2023-02-20 23:54:02', '2023-02-20 23:55:37'),
(5, 'Mr. Puff Man', NULL, 'puffman@hotmail.com', NULL, '$2y$10$1jBU5zcfZrlJyCyecDsqAuboJRICvzT.C7rfZRK6DGcb8hqrnAOrC', NULL, NULL, NULL, 'user', 'active', NULL, '2023-02-21 15:04:32', '2023-02-21 15:04:32'),
(8, 'Demo Name', NULL, 'adfsfs@aadfsf.com', NULL, '$2y$10$/4RucqWR6pnhj7s1z0M9TusUNjQ5Gt7mJG1YRX6fEk39QGlsEBwzW', NULL, NULL, NULL, 'user', 'active', NULL, '2023-07-27 05:54:21', '2023-07-27 05:54:21'),
(9, 'Demo Name', NULL, 'adfss@aadfsf.com', NULL, '$2y$10$A678TNdL3DRnwmXIrASvNOagCTZD.ezC0jn1EoRXH1y54CrnHVDl2', NULL, NULL, NULL, 'user', 'active', NULL, '2023-07-27 05:55:57', '2023-07-27 05:55:57'),
(10, 'Demo Name', NULL, 'adss@aadfsf.com', NULL, '$2y$10$pthmRqC/fz.J.Sk6ev/zx.dlL624UimrRo/CHXmZjUP15fgAROqri', NULL, NULL, NULL, 'user', 'active', NULL, '2023-07-27 05:57:47', '2023-07-27 05:57:47'),
(11, 'zamil', NULL, 'zamil@admin.com', NULL, '$2y$10$rfma8XewuWKV2DrqbpX3xuQIQ9EDRfzlS3Z1PK3UgNUThwX5A27D6', '202310081651pexels-pixabay-268533.jpg', '0875356677', 'easdca', 'user', 'active', NULL, '2023-10-08 10:50:20', '2023-10-08 10:51:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
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
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
