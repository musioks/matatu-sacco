-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2019 at 11:15 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_matatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hz9rl7BG8Z2rf8aKc6lMqYUlLlt4VicW', 1, '2019-11-02 06:27:42', '2019-11-02 06:27:41', '2019-11-02 06:27:42'),
(2, 2, 'pNH0wZ4LyOJIhn4Gajpaicdc1f7LzEmV', 1, '2019-11-02 06:30:01', '2019-11-02 06:30:01', '2019-11-02 06:30:01'),
(4, 4, 'hREAlcP0RIPDxRq9Vws0CT3ojG4OVuaa', 1, '2019-11-02 07:35:33', '2019-11-02 07:35:33', '2019-11-02 07:35:33'),
(5, 5, '8RkMSj1aMABx2qeNaXpouyjKZLDRHUZ4', 1, '2019-11-03 07:13:48', '2019-11-03 07:13:48', '2019-11-03 07:13:48'),
(6, 6, 'sXnibAQpqxc8IUYnsSxhGON9ZZH313Bv', 1, '2019-11-03 07:19:42', '2019-11-03 07:19:42', '2019-11-03 07:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number_plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(10) UNSIGNED DEFAULT NULL,
  `bus_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_amount` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `number_plate`, `model`, `capacity`, `bus_photo`, `booking_amount`, `description`, `created_at`, `updated_at`) VALUES
(1, 'KCA 789 U', 'ISUZU', 40, '1572687183.jpg', 12000.00, 'Bus can be booked', '2019-11-02 06:33:03', '2019-11-02 06:33:03'),
(2, 'KCT 221Y', 'ISUZU', 30, '1572687270.jpg', 8000.00, 'Bus can be booked', '2019-11-02 06:34:29', '2019-11-02 06:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `bus_bookings`
--

CREATE TABLE `bus_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `purpose` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_bookings`
--

INSERT INTO `bus_bookings` (`id`, `bus_id`, `customer_id`, `purpose`, `from_date`, `to_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Church Trip', '2019-11-04', '2019-11-05', 0, '2019-11-03 07:56:33', '2019-11-03 07:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `name`, `phone`, `email`, `nid`, `created_at`, `updated_at`) VALUES
(1, 6, 'Daniel  Katimbi', '0701541900', 'daniel@app.io', '20002000', '2019-11-03 07:19:42', '2019-11-03 07:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `date_added` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `member_id`, `amount`, `date_added`, `created_at`, `updated_at`) VALUES
(1, 1, 5000.00, '2019-11-03 09:20:04', '2019-11-03 06:20:09', '2019-11-03 06:20:09'),
(2, 1, 2000.00, '2019-11-03 09:21:41', '2019-11-03 06:21:47', '2019-11-03 06:21:47'),
(3, 1, 700.00, '2019-11-03', '2019-11-03 06:37:15', '2019-11-03 06:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_application_id` bigint(20) UNSIGNED NOT NULL,
  `amount_paid` double(8,2) NOT NULL,
  `repayment_date` date NOT NULL,
  `next_repayment_date` date NOT NULL,
  `loan_status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_applications`
--

CREATE TABLE `loan_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `loan_type_id` bigint(20) UNSIGNED NOT NULL,
  `principal_amount` double(15,2) NOT NULL,
  `interest_period` int(10) UNSIGNED NOT NULL,
  `monthly_installment` double(15,2) DEFAULT NULL,
  `interest_amount` double(8,2) NOT NULL,
  `no_of_repayments` int(10) UNSIGNED DEFAULT NULL,
  `guarantor_id` bigint(20) UNSIGNED NOT NULL,
  `guarantor_accepted` tinyint(1) NOT NULL DEFAULT '0',
  `loan_status_id` bigint(20) UNSIGNED NOT NULL,
  `date_approved` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_statuses`
--

CREATE TABLE `loan_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_statuses`
--

INSERT INTO `loan_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Initiated', '2019-11-02 06:27:41', '2019-11-02 06:27:41'),
(2, 'Approved', '2019-11-02 06:27:41', '2019-11-02 06:27:41'),
(3, 'Pending', '2019-11-02 06:27:41', '2019-11-02 06:27:41'),
(4, 'Rejected', '2019-11-02 06:27:41', '2019-11-02 06:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `loan_types`
--

CREATE TABLE `loan_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_rate` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_types`
--

INSERT INTO `loan_types` (`id`, `name`, `interest_rate`, `created_at`, `updated_at`) VALUES
(1, 'Asset Financing', 0.06, '2019-11-02 06:27:41', '2019-11-02 06:27:41'),
(2, 'Personal Loan', 0.08, '2019-11-02 06:27:41', '2019-11-02 06:27:41'),
(3, 'Business Loan', 0.05, '2019-11-02 06:27:41', '2019-11-02 06:27:41'),
(4, 'Mwalimu Loan', 0.04, '2019-11-02 06:27:41', '2019-11-02 06:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `nok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logbook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `member_status_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user_id`, `fname`, `lname`, `residence`, `relationship`, `dob`, `nok`, `nid`, `phone`, `email`, `vehicle_image`, `logbook`, `created_at`, `updated_at`, `member_status_id`) VALUES
(1, 4, 'David', 'Musyoka', 'Nairobi', 'Wife', '1989-06-13', 'David Musyoka', '23457977', '0701541677', 'davidmucioca@gmail.com', '1572769846.jpg', '1572770354.jpg', '2019-11-02 07:35:33', '2019-11-03 05:40:37', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member_statuses`
--

CREATE TABLE `member_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_statuses`
--

INSERT INTO `member_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'pending', '2019-11-02 07:05:29', '2019-11-02 07:05:29'),
(2, 'approved', '2019-11-02 07:05:29', '2019-11-02 07:05:29'),
(3, 'rejected', '2019-11-02 07:05:29', '2019-11-02 07:05:29');

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
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_22_071828_create_members_table', 1),
(4, '2017_10_22_072044_create_shares_table', 1),
(5, '2017_10_22_072108_create_insurances_table', 1),
(6, '2017_10_22_072246_create_complains_table', 1),
(7, '2017_10_22_072310_create_products_table', 1),
(8, '2019_09_16_105207_create_loan_statuses_table', 1),
(9, '2019_09_16_105303_create_loan_types_table', 1),
(10, '2019_09_16_122435_create_loan_applications_table', 1),
(11, '2019_09_16_123118_create_loans_table', 1),
(12, '2019_09_18_232542_update_loan_applications_table', 1),
(13, '2019_09_18_234301_modify_loan_applications_table', 1),
(14, '2019_10_01_065030_update_members_table', 1),
(15, '2019_10_23_071923_create_buses_table', 1),
(16, '2019_10_23_125647_create_bus_bookings_table', 1),
(17, '2019_11_02_075434_create_customers_table', 1),
(18, '2019_11_02_082455_add_columns_to_members_table', 1),
(19, '2019_11_02_084853_update_bus_bookings_table', 1),
(20, '2019_11_02_094404_create_member_statuses_table', 2),
(21, '2019_11_02_095012_add_status_members_table', 2),
(22, '2019_11_03_101510_add_user_id_to_customers_table', 3);

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
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'Z4nh5bobPTmts8ED7pm30pPfevUyT28R', '2019-11-02 06:28:36', '2019-11-02 06:28:36'),
(2, 1, 'hif7cWk7yHZpK4hcSAuz28m8RmmheQeg', '2019-11-02 06:29:05', '2019-11-02 06:29:05'),
(4, 4, 'HvsPmq27KLGT0T2qNGU1s2VbLLsRJpLL', '2019-11-02 07:44:12', '2019-11-02 07:44:12'),
(5, 4, 'qCBwIc1ct4rBTYueOILdtmqLTGj02bET', '2019-11-02 07:44:49', '2019-11-02 07:44:49'),
(6, 4, 'BuboMhiC7S9KDcbA5JhzH40SRUli3uVH', '2019-11-02 07:45:12', '2019-11-02 07:45:12'),
(7, 4, 'ir7xaorEZHCaaif8GmkDnBwkzbxYSeYA', '2019-11-02 07:45:43', '2019-11-02 07:45:43'),
(8, 4, 'dsSac6JBWOqeDmjlVrvXyYwmd0ovOP3M', '2019-11-02 07:46:13', '2019-11-02 07:46:13'),
(9, 4, 'D0euesR4TOA0BxgUvPzFK07mLSbhAX7q', '2019-11-02 07:47:20', '2019-11-02 07:47:20'),
(10, 4, '5sCMjrZPqEpJrXr470g2fq0Yl5X03ve7', '2019-11-02 07:47:48', '2019-11-02 07:47:48'),
(11, 4, '1KJoKxLVys0l21CcCXoaaLgJNc4WwyU4', '2019-11-02 07:48:31', '2019-11-02 07:48:31'),
(12, 4, 'MJjKthSMDt07RW0iBqpTUr9FwCuj8co0', '2019-11-02 07:48:42', '2019-11-02 07:48:42'),
(13, 4, 'IQdyNvoeRK4GtCs4u7Xk3ldsVt4BwIZy', '2019-11-02 07:50:05', '2019-11-02 07:50:05'),
(14, 2, 'CHwE6mqKwTxJzK2oHeGL9zShPWB3bht9', '2019-11-02 07:50:23', '2019-11-02 07:50:23'),
(16, 4, 'LOQJhgg3mg9loxIcklNq9IpAKSyVJxLh', '2019-11-02 07:50:58', '2019-11-02 07:50:58'),
(17, 4, 'l6l0hJhbfr2H8DhO7Hau4YzcdC7ldgy9', '2019-11-02 07:51:23', '2019-11-02 07:51:23'),
(18, 4, 'n7cCMbHe7rbIfuWo8KpKuGr4FhnBkPvJ', '2019-11-02 07:53:02', '2019-11-02 07:53:02'),
(20, 4, 'Uqn7W2uPD2W66wbNVLefTLzM8u4HkITS', '2019-11-02 07:54:36', '2019-11-02 07:54:36'),
(21, 4, 'KlAeUYONgUwC8sqVNJ8X7JHGYQ3NXoDu', '2019-11-03 02:48:37', '2019-11-03 02:48:37'),
(25, 6, '1vEoji11aNKn39M8bv6y4PNZbx2fawoz', '2019-11-03 07:20:12', '2019-11-03 07:20:12'),
(30, 6, 'uZo5IhSYKsIcIUk8HK9QrKyTqnhQtRLt', '2019-11-03 08:07:59', '2019-11-03 08:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, '2019-11-02 07:06:56', '2019-11-02 07:06:56'),
(2, 'member', 'member', NULL, '2019-11-02 07:06:56', '2019-11-02 07:06:56'),
(3, 'customer', 'customer', NULL, '2019-11-02 07:06:56', '2019-11-02 07:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-11-02 06:27:42', '2019-11-02 06:27:42'),
(2, 1, '2019-11-02 06:30:01', '2019-11-02 06:30:01'),
(4, 2, '2019-11-02 07:35:33', '2019-11-02 07:35:33'),
(6, 3, '2019-11-03 07:19:42', '2019-11-03 07:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `date_added` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `member_id`, `amount`, `date_added`, `created_at`, `updated_at`) VALUES
(1, 1, 6800.00, '2019-11-03 09:24:41', '2019-11-03 06:24:49', '2019-11-03 06:24:49'),
(2, 1, 800.00, '2019-11-03 09:24:49', '2019-11-03 06:24:59', '2019-11-03 06:24:59'),
(3, 1, 1100.00, '2019-11-03 09:24:59', '2019-11-03 06:25:05', '2019-11-03 06:25:05'),
(5, 1, 900.00, '2019-11-03', '2019-11-03 06:32:07', '2019-11-03 06:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2019-11-03 02:48:55', '2019-11-03 02:48:55'),
(2, NULL, 'ip', '127.0.0.1', '2019-11-03 02:48:55', '2019-11-03 02:48:55'),
(3, 2, 'user', NULL, '2019-11-03 02:48:55', '2019-11-03 02:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `permissions`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', 'user.png', 'system@admin.com', '$2y$10$nsvp74e0xwjErHl2H9hcO.ZfEszB1sB2/xEsiLqXAhL24iVVjp1Hy', NULL, '2019-11-02 06:29:16', '2019-11-02 06:27:41', '2019-11-02 06:29:16'),
(2, 'Test User', 'user.png', 'admin@admin.com', '$2y$10$DIbfhX7b4TF72tCQqIixQuBCtd/JK2.bZzHG3ilN4hWpZLIZxhFw6', NULL, '2019-11-03 08:04:33', '2019-11-02 06:29:59', '2019-11-03 08:04:33'),
(4, 'David Musyoka', 'user.png', 'davidmucioca@gmail.com', '$2y$10$zCXk2nN3BoerU4oe2HkVUOXa3fS1AuqxZe0qU6Vrm7L2r8toYrbIC', NULL, '2019-11-03 05:40:57', '2019-11-02 07:35:33', '2019-11-03 05:40:57'),
(6, 'Daniel  Katimbi', 'user.png', 'daniel@app.io', '$2y$10$WFaDbGEbfqGfwx6A43Xr/utGpe.u220OXkUQF8k4loe0vnmbZ8aam', NULL, '2019-11-03 08:07:59', '2019-11-03 07:19:42', '2019-11-03 08:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buses_number_plate_unique` (`number_plate`);

--
-- Indexes for table `bus_bookings`
--
ALTER TABLE `bus_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `insurances_member_id_foreign` (`member_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_applications`
--
ALTER TABLE `loan_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_statuses`
--
ALTER TABLE `loan_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_types`
--
ALTER TABLE `loan_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_nid_unique` (`nid`),
  ADD UNIQUE KEY `members_phone_unique` (`phone`),
  ADD UNIQUE KEY `members_email_unique` (`email`),
  ADD KEY `members_user_id_foreign` (`user_id`);

--
-- Indexes for table `member_statuses`
--
ALTER TABLE `member_statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_statuses_name_unique` (`name`);

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
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shares_member_id_foreign` (`member_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus_bookings`
--
ALTER TABLE `bus_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_applications`
--
ALTER TABLE `loan_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_statuses`
--
ALTER TABLE `loan_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loan_types`
--
ALTER TABLE `loan_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_statuses`
--
ALTER TABLE `member_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `insurances`
--
ALTER TABLE `insurances`
  ADD CONSTRAINT `insurances_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `shares`
--
ALTER TABLE `shares`
  ADD CONSTRAINT `shares_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
