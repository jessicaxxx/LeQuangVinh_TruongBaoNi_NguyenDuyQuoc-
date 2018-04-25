-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 04:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoponline`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name_categogy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name_categogy`, `status`, `created`, `modified`) VALUES
(1, 'Branded Foods', 1, '2018-04-01 00:00:00', '2018-04-11 00:00:00'),
(2, 'Households', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(3, 'Veggies & Fruits', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(4, 'Kitchen', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(5, 'Short Codes', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(6, 'Beverages', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(7, 'Pet Food', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00'),
(8, 'Frozen Foods', 1, '2018-04-01 00:00:00', '2018-04-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `name`, `price`, `detail`, `image`, `created`, `modified`) VALUES
(1, 1, 'Fortune Sunflower Oil', '7.99', '$10.00', '\\1.png', '2018-04-10 00:00:00', '2018-04-12 00:00:00'),
(2, 1, 'demo', '9.00', '10.00', '\\16.png', '2018-04-11 00:00:00', '2018-04-13 00:00:00'),
(16, 3, 'demop8m', '56.00', '85', '275_iphone_6_16gb_5.jpg', '2018-03-29 00:00:00', '2018-04-08 00:00:00'),
(17, 4, 'demop8mgh', '56.00', '85', 'Capture1.PNG', '2018-03-29 00:00:00', '2018-04-08 00:00:00'),
(18, 8, 'dsfsd', '12.00', '36', 'anh-anime-chibi-cute.jpg', '2018-04-15 00:00:00', '2018-04-15 00:00:00'),
(19, 4, 'rtr', '56.00', '12', '12-2-218x150.jpg', '2018-04-06 00:00:00', '2018-04-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
ALTER TABLE `product` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
