-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 06:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE `cates` (
  `id` int(15) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sort_oder` int(15) NOT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `sort_oder`, `link`, `type`, `created_at`, `update_at`) VALUES
(1, 'Home', 'home', 1, '#', 1, '2017-05-28 19:23:00', '2017-05-28 19:23:00'),
(2, 'About', 'about', 2, '#content1', 1, '2017-05-09 15:33:00', '2017-05-09 15:33:00'),
(3, 'Ingredients', 'ingredients', 3, '#content2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Menu', 'menu', 4, '#content3', 1, '2017-05-04 02:03:00', '2017-05-04 02:03:00'),
(8, 'Reviews', 'reviews', 5, '#content4', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Reservation', 'reservation', 6, '#content5', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `list_food`
--

CREATE TABLE `list_food` (
  `id` int(15) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `id_menu` int(11) NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sort_oder` int(15) NOT NULL,
  `special` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_food`
--

INSERT INTO `list_food` (`id`, `name`, `alias`, `price`, `id_menu`, `description`, `sort_oder`, `special`, `created_at`, `update_at`) VALUES
(1, 'Haloumi', 'haloumi', 3.99, 2, 'Refreshing traditional cucumber and garlic yoghurt dip.', 3, 0, '2017-05-29 11:10:00', '2017-05-29 11:10:00'),
(3, 'Tzatsiki', 'tzatsiki', 3.99, 1, '<p><span style=\"font-family:lato,sans-serif; font-size:14px\">Refreshing traditional cucumber and garlic yoghurt dip.</span></p>\r\n', 4, 0, '2017-05-29 11:34:00', '2017-05-29 11:34:00'),
(5, 'Aubergine Salad', 'aubergine-salad', 5.25, 1, '<p><span style=\"font-family:lato,sans-serif; font-size:14px\">Refreshing traditional cucumber and garlic yoghurt dip.</span></p>\r\n', 12, 0, '2017-05-29 13:31:00', '2017-05-29 13:31:00'),
(6, 'Spinach Pie', 'spinach-pie', 5.25, 2, '<p><span style=\"font-family:lato,sans-serif; font-size:14px\">Refreshing traditional cucumber and garlic yoghurt dip.</span></p>\r\n', 21, 0, '2017-05-29 13:32:00', '2017-05-29 13:32:00'),
(7, 'Spinach Pie', 'spinach-pie', 3.99, 2, '<p><span style=\"font-family:lato,sans-serif; font-size:14px\">Refreshing traditional cucumber and garlic yoghurt dip.</span></p>\r\n', 9, 0, '2017-05-29 13:32:00', '2017-05-29 13:32:00'),
(8, 'Olive Special', 'olive-special', 5.99, 3, '<p><span style=\"font-family:lato,sans-serif; font-size:14px\">Refreshing traditional cucumber and garlic yoghurt dip.</span></p>\r\n', 78, 0, '2017-05-29 13:34:00', '2017-05-29 13:34:00'),
(9, 'Greek Salad', 'greek-salad', 3.25, 3, '<p><span style=\"font-family:lato,sans-serif; font-size:14px\">Refreshing traditional cucumber and garlic yoghurt dip.</span></p>\r\n', 5, 1, '2017-05-29 13:34:00', '2017-05-29 13:34:00'),
(10, 'Pastitsio', 'pastitsio', 3.99, 3, '<p><span style=\"font-family:lato,sans-serif; font-size:14px\">Refreshing traditional cucumber and garlic yoghurt dip.</span></p>\r\n', 25, 0, '2017-05-29 13:35:00', '2017-05-29 13:35:00'),
(11, 'Cornish Mackerel', 'cornish-mackerel', 5.99, 4, '<p><span style=\"font-family:lato,sans-serif; font-size:14px\">Refreshing traditional cucumber and garlic yoghurt dip.</span></p>\r\n', 17, 1, '2017-05-29 13:37:00', '2017-05-30 14:23:00'),
(12, 'Roast Lamb', 'roast-lamb', 5.52, 4, '<p><span style=\"font-family:lato,sans-serif; font-size:14px\">Refreshing traditional cucumber and garlic yoghurt dip.</span></p>\r\n', 21, 0, '2017-05-29 13:37:00', '2017-05-30 17:30:00'),
(13, 'Aubergine Salad', 'aubergine-salad', 3.25, 1, 'Refreshing traditional cucumber and garlic yoghurt dip.\n', 49, 0, '2017-05-30 14:20:00', '2017-05-30 14:20:00'),
(14, 'Fried Chicken', 'fried-chicken', 5.99, 4, '<p>Refreshing traditional cucumber and garlic yoghurt dip.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 21, 0, '2017-05-30 14:22:00', '2017-05-30 14:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(15) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_parent` tinyint(4) NOT NULL,
  `sort_oder` int(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `alias`, `id_parent`, `sort_oder`, `created_at`, `update_at`) VALUES
(1, 'Appetisers', 'appetisers', 1, 12, '2017-05-29 09:30:00', '2017-05-29 09:30:00'),
(2, 'Starters', 'starters', 1, 6, '2017-05-29 09:39:00', '2017-05-29 09:39:00'),
(3, 'Salads', 'salads', 1, 2, '2017-05-29 09:39:00', '2017-05-29 09:39:00'),
(4, 'Main Dishes', 'main-dishes', 1, 8, '2017-05-29 09:41:00', '2017-05-29 09:41:00'),
(5, 'Phạm thị thảo', 'pham-thi-thao', 4, 4, '2017-05-12 02:01:00', '2017-05-12 02:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `id` int(15) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `party_number` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`id`, `name`, `email`, `date`, `party_number`, `created_at`, `update_at`) VALUES
(2, 'Nguyễn Đại Ngọc', 'ngoc23319952@gmail.com', '0000-00-00 00:00:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Phạm thị thảo', 'thaojune@yahoo.com', '2017-05-23 00:32:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Nguyễn Đại Ngọc', 'ngoc23319952@gmail.com', '2017-05-10 14:32:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '12312', '31231@gmail.com', '2017-05-11 14:03:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '1123123', '12312@gmail.com', '2017-05-09 00:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `lever` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `phone_number`, `lever`, `created_at`, `update_at`) VALUES
(7, 'Nguyễn Đại Ngọc', 'e7cca140428c85ebd0a1a5a80003b550', 'ngoc23319952@gmail.com', '01698990589', 1, '2017-05-30 10:49:00', '2017-05-30 10:49:00'),
(8, 'Phạm thị thảo', 'e7cca140428c85ebd0a1a5a80003b550', 'thaojune@yahoo.com', '0989145539', 0, '2017-05-30 11:30:00', '2017-05-30 11:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_food`
--
ALTER TABLE `list_food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_user`
--
ALTER TABLE `order_user`
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
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `list_food`
--
ALTER TABLE `list_food`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `list_food`
--
ALTER TABLE `list_food`
  ADD CONSTRAINT `FK_menu_lfist_food` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
