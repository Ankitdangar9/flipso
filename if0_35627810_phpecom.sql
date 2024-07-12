-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql104.byetcluster.com
-- Generation Time: Jan 16, 2024 at 11:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35627810_phpecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(91) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(8, 'mobails', 'mobails', 'redmi note 11', 0, 1, '1702704034.jpeg', 'mobails', 'redmi note 11', 'redmi note 11', '2023-12-16 05:20:34'),
(9, 'electronic', 'electronic', 'electronic items', 0, 1, '1702704112.jpg', 'electronic', 'elcetronic items', 'electronic items', '2023-12-16 05:21:52'),
(10, 'Bag', 'Bag', 'Bag', 0, 1, '1704988396.jpeg', 'Beg', 'Beg', 'Beg', '2024-01-11 15:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(191) NOT NULL,
  `total_price` int(191) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(12, 'ankitcoder131890557384', 9, 'ankit dangar', 'ankit13@gmail.com', '7990557384', 'test address', 362001, 18000, 'COD', '', 2, NULL, '2024-01-11 11:06:33'),
(13, 'ankitcoder555590557384', 9, 'Ankit', 'ankitdangarahir111046@gmail.com', '7990557384', 'Test', 362001, 1500, 'COD', '', 0, NULL, '2024-01-11 15:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(7, 5, 10, 2, 18000, '2023-12-16 05:26:21'),
(8, 6, 10, 2, 18000, '2023-12-16 06:06:43'),
(9, 7, 10, 1, 18000, '2023-12-16 06:33:57'),
(10, 8, 11, 1, 28000, '2023-12-16 06:55:13'),
(11, 9, 10, 2, 18000, '2023-12-16 11:02:44'),
(12, 10, 10, 3, 18000, '2023-12-22 06:48:30'),
(13, 11, 10, 3, 18000, '2023-12-31 13:50:22'),
(14, 12, 10, 1, 18000, '2024-01-11 11:06:33'),
(15, 13, 12, 10, 150, '2024-01-11 15:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(10, 8, 'redmi note 11', 'redmi note 11', 'redmi note 11\r\n16 GB ram\r\nMIUI 12', 'redmi note 11\r\n16 GB ram\r\nMIUI 12', 20000, 18000, '1702704227.jpg', 6, 0, 1, 'redmi note 11', 'redmi note 11\r\n16 GB ram\r\nMIUI 12', ' redmi note 11\r\n16 GB ram\r\nMIUI 12', '2023-12-16 05:23:47'),
(11, 9, 'AC', 'AC', '2 turn AC \r\n\r\n5 star', '2 turn AC \r\n\r\n5 star', 30000, 28000, '1702704328.jpg', 14, 0, 1, 'ac', '2 turn AC \r\n\r\n5 star', ' 2 turn AC \r\n\r\n5 star', '2023-12-16 05:25:28'),
(12, 10, 'School bag', 'School bag', 'This bag is best fir student', 'This bag is best fir student', 200, 150, '1704988473.jpeg', -5, 0, 1, 'School bag', 'This bag is best fir student', ' This bag is best fir student', '2024-01-11 15:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(91) NOT NULL,
  `otp` int(5) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `otp`, `phone`, `password`, `role_as`, `status`, `created_at`) VALUES
(8, 'ankit1', 'admin@gmail.com', 0, 799055738, 'admin@123', 1, '', '2023-12-08 14:12:07'),
(10, 'ankit dangar', 'ankit1110@gmail.com', 0, 2147483647, 'ankit@123', 0, '', '2023-12-16 05:17:52'),
(17, 'Ankit', 'ankit987@gmail.com', 0, 2147483647, '1234', 0, '', '2023-12-27 15:04:04'),
(18, 'ankit', 'ankit190@gmail.com', 0, 2147483647, '123', 0, '', '2024-01-09 05:22:10'),
(23, 'ankit', 'ankitdangarahir111046@gmail.com', 58922, 2147483647, '123', 0, '', '2024-01-16 10:45:51'),
(25, 'ankit dangar', 'ankitdangarahir1110@gmail.com', 83340, 2147483647, '123', 0, '1', '2024-01-16 11:59:37'),
(29, 'ankit dangar', 'dangarankit1110@gmail.com', 0, 2147483647, '123', 0, '0', '2024-01-16 12:06:34'),
(30, 'Darshil', 'darshil6675@gmail.com', 0, 1234567890, 'dar_154', 0, '1', '2024-01-16 12:09:17'),
(31, 'ankit dangar', 'jatindangar1995@gmail.com', 0, 2147483647, '123', 0, '0', '2024-01-16 13:04:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
