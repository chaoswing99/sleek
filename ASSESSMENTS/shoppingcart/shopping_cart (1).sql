-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 01:30 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'bullshit', 'fck@gmail', '213311d0722e191141a06b0adaa37a4b', '2017-07-25 07:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `price` int(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `price`, `created_at`) VALUES
(43, 'Tera', 30, '2017-07-31 23:26:57'),
(44, 'Counter Strike: Global Offensive', 100, '2017-07-31 23:26:57'),
(45, 'Ragnarok Online', 22, '2017-07-31 23:26:57'),
(46, 'Special Force 2', 200, '2017-07-31 23:26:57'),
(50, 'Tera', 30, '2017-07-31 23:26:58'),
(51, 'Counter Strike: Global Offensive', 100, '2017-07-31 23:26:58'),
(52, 'Ragnarok Online', 22, '2017-07-31 23:26:58'),
(53, 'Special Force 2', 200, '2017-07-31 23:26:58'),
(57, 'Tera', 30, '2017-07-31 23:28:09'),
(58, 'Counter Strike: Global Offensive', 100, '2017-07-31 23:28:09'),
(59, 'Ragnarok Online', 22, '2017-07-31 23:28:09'),
(60, 'Special Force 2', 200, '2017-07-31 23:28:09'),
(64, 'Tera', 30, '2017-07-31 23:28:10'),
(65, 'Counter Strike: Global Offensive', 100, '2017-07-31 23:28:10'),
(66, 'Ragnarok Online', 22, '2017-07-31 23:28:10'),
(67, 'Special Force 2', 200, '2017-07-31 23:28:10'),
(71, 'Tera', 30, '2017-07-31 23:28:14'),
(72, 'Counter Strike: Global Offensive', 100, '2017-07-31 23:28:14'),
(73, 'Ragnarok Online', 22, '2017-07-31 23:28:14'),
(74, 'Special Force 2', 200, '2017-07-31 23:28:14'),
(78, 'Tera', 30, '2017-07-31 23:29:23'),
(79, 'Counter Strike: Global Offensive', 100, '2017-07-31 23:29:23'),
(80, 'Ragnarok Online', 22, '2017-07-31 23:29:23'),
(81, 'Special Force 2', 200, '2017-07-31 23:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`) VALUES
(1, 'MMORPG', '2017-07-24 06:08:49'),
(2, 'FPS', '2017-07-24 06:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `price`, `quantity`, `image_name`, `created_at`) VALUES
(3, 1, 'Tera', 30, 3, 'tera.jpg', '2017-07-26 07:00:32'),
(4, 2, 'Counter Strike: Global Offensive', 100, 5, 'csgo.jpg', '2017-07-26 07:05:50'),
(5, 1, 'Ragnarok Online', 22, 3123, 'ragnarok.png', '2017-07-26 07:48:31'),
(7, 2, 'Special Force 2', 200, 44, 'sf2.jpg', '2017-07-27 03:31:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
