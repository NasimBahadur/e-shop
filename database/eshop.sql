-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Cake', 'Fruit Cake', 150.00, './assets/products/1.png', '2022-04-30 11:08:57'), -- NOW()
(2, 'Cake', 'Dark Chocolate Cake', 900.00, './assets/products/3.png', '2022-04-30 11:08:57'),
(3, 'Cake', 'Vanilla Fantasy Cake', 1200.00, './assets/products/6.png', '2022-04-30 11:08:57'),
(4, 'Cake', 'Black Forest Cake', 1500.00, './assets/products/9.png', '2022-04-30 11:08:57'),
(5, 'Cake', 'White & Black Forest Cake', 2200.00, './assets/products/7.png', '2022-04-30 11:08:57'),
(6, 'Cake', 'Premium Chocolate Cake', 2700.00, './assets/products/8.png', '2022-04-30 11:08:57'),
(7, 'Yogurt', 'Misti Doi', 350.00, './assets/products/10.png', '2022-04-30 11:08:57'),
(8, 'Yogurt', 'Toc-Misti Doi', 390.00, './assets/products/11.png', '2022-04-30 11:08:57'),
(9, 'Sweet', 'Cream Jam', 230.00, './assets/products/21.png', '2022-04-30 11:08:57'),
(10, 'Sweet', 'Roshogolla', 150.00, './assets/products/16.png', '2022-04-30 11:08:57'),
(11, 'Sweet', 'Dry Kalojam', 190.00, './assets/products/18.png', '2022-04-30 11:08:57'),
(12, 'Sweet', 'Voghsagor', 350.00, './assets/products/19.png', '2022-04-30 11:08:57'),
(13, 'Sweet', 'Kacha Golla', 300.00, './assets/products/20.png', '2022-04-30 11:08:57'),
(14, 'Sweet', 'Hafshi Sondesh', 275.00, './assets/products/25.png', '2022-04-30 11:08:57'),
(15, 'Sweet', 'Kacha Chanar Sondesh', 250.00, './assets/products/22.png', '2022-04-30 11:08:57'),
(16, 'Sweet', 'Kheer Mohon', 375.00, './assets/products/27.png', '2022-04-30 11:08:57'),
(17, 'Laddu', 'Motichur Laddu', 220.00, './assets/products/13.png', '2022-04-30 11:08:57'),
(18, 'Laddu', 'Mihidana Laddu', 250.00, './assets/products/14.png', '2022-04-30 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `password` varchar(20) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `phone_number`, `password`, `register_date`) VALUES
(1, 'Elon', 'Musk', '01711110000', '11111', '2022-04-30 11:07:17'),
(2, 'Bill', 'Gates', '01722220000', '22222', '2022-04-30 11:07:17'),
(3, 'Warren', 'Buffet', '01733330000', '33333', '2022-04-30 11:07:17'),
(4, 'Larry', 'Page', '01744440000', '44444', '2022-04-30 11:07:17'),
(5, 'Jeff', 'Bezos', '01755550000', '55555', '2022-04-30 11:07:17'),
(6, 'Mark', 'Zuckerberg', '01766660000', '66666', '2022-04-30 11:07:17'),
(7, 'Admin', 'Admin', '01700001111', '00000', '2022-04-30 11:07:17');

-- --------------------------------------------------------

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

