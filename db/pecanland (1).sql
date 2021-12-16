-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 09:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pecanland`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_details`
--

CREATE TABLE `address_details` (
  `id` int(100) NOT NULL,
  `first_nm` varchar(100) NOT NULL,
  `last_nm` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `userid` int(100) NOT NULL,
  `insert_dt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_details`
--

INSERT INTO `address_details` (`id`, `first_nm`, `last_nm`, `country`, `state`, `city`, `address`, `pincode`, `phone`, `email`, `status`, `type`, `userid`, `insert_dt`) VALUES
(1, 'sakshi', 'thakur', 'India', 'himachal pradesh', 'kangra', 'mohali 6', '177106', '998765422', 'admin@gmail.com', 'Shipping', 'Active', 15, '0000-00-00 00:00:00'),
(2, 'sakshi', 'thakur', 'India', 'himachal pradesh', 'kangra', 'mohali 6', '177106', '998765422', 'admin@gmail.com', 'Shipping', 'Active', 15, '0000-00-00 00:00:00'),
(3, 'sakshi', 'thakur', 'India', 'himachal pradesh', 'kangra', 'mohali 6', '177106', '998765422', 'admin@gmail.com', 'Shipping', 'Active', 15, '0000-00-00 00:00:00'),
(4, 'sakshi', 'Thakur', 'India', 'himachal pradesh', 'kangra', 'mohali 6', '177106', '7732675367', 'admin@gmail.com', 'Shipping', 'Active', 10, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_nm` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `add_dt` datetime NOT NULL,
  `user` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `totalprice` double NOT NULL,
  `status` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`id`, `product_id`, `product_nm`, `price`, `add_dt`, `user`, `quantity`, `totalprice`, `status`, `img`) VALUES
(1, 1, 'realme C21 (Cross Blue, 64 GB)  (4 GB RAM)', 9999, '2021-11-28 00:00:00', 17, 1, 9999, '', ''),
(2, 5, 'realme Narzo 50A (Oxygen Blue, 64 GB)  (4 GB RAM)', 12000, '2021-11-28 00:00:00', 17, 1, 12000, '', ''),
(3, 5, 'realme Narzo 50A (Oxygen Blue, 64 GB)  (4 GB RAM)', 12000, '2021-11-28 00:00:00', 17, 1, 12000, '', ''),
(4, 1, 'Oil', 15, '2021-11-30 00:00:00', 15, 1, 15, 'Booked', ''),
(7, 1, 'APPLE iPhone 12 (Red, 64 GB)', 7000, '2021-11-30 00:00:00', 15, 1, 7000, 'Booked', ''),
(15, 1, 'APPLE iPhone 12 (Red, 64 GB)', 7000, '2021-11-30 00:00:00', 15, 1, 7000, 'Booked', ''),
(16, 2, 'APPLE iPhone 12 (Blue, 128 GB)', 90000, '2021-11-30 00:00:00', 15, 1, 90000, '', ''),
(17, 1, 'APPLE iPhone 12 (Red, 64 GB)', 7000, '2021-11-30 00:00:00', 15, 1, 7000, '', ''),
(18, 1, 'APPLE iPhone 12 (Red, 64 GB)', 7000, '2021-11-30 00:00:00', 15, 1, 7000, '', ''),
(19, 2, 'APPLE iPhone 12 (Blue, 128 GB)', 90000, '2021-11-30 00:00:00', 15, 1, 90000, '', ''),
(22, 1, 'APPLE iPhone 12 (Red, 64 GB)', 7000, '2021-12-01 00:00:00', 1, 1, 7000, '', ''),
(23, 2, 'APPLE iPhone 12 (Blue, 128 GB)', 90000, '2021-12-01 00:00:00', 1, 1, 90000, '', ''),
(25, 2, 'APPLE iPhone 12 (Blue, 128 GB)', 90000, '2021-12-01 00:00:00', 1, 1, 90000, '', ''),
(26, 3, 'lilly', 80, '2021-12-02 00:00:00', 10, 1, 80, 'Booked', ''),
(27, 3, 'lilly', 80, '2021-12-02 00:00:00', 10, 1, 80, 'Booked', ''),
(28, 4, 'Dining chair', 1300, '2021-12-02 00:00:00', 10, 1, 1300, 'Booked', ''),
(29, 1, 'APPLE iPhone 12 (Red, 64 GB)', 7000, '2021-12-06 00:00:00', 1, 1, 7000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` varchar(50) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `description`, `image`, `status`, `cip`, `cby`, `cdate`) VALUES
(1, 'oils', 'THC and CBD content in cannabis may vary among lots', '30068-.jfif', 'Active', '::1', '1', '2021-11-23 15:28:17'),
(2, 'flower', 'THC and CBD content in cannabis may vary among lots', '80750-.jfif', 'Active', '::1', '1', '2021-11-23 15:28:34'),
(3, 'Concantrat', 'THC and CBD content in cannabis may vary among lots', '89756-.jfif', 'Active', '::1', '1', '2021-11-23 15:28:39'),
(4, 'Edible', 'THC and CBD content in cannabis may vary among lots', '59725-.jfif', 'Active', '::1', '1', '2021-11-23 15:29:22'),
(7, 'furniture', 'THC and CBD content in cannabis may vary among lots', '80398-.jpg', 'Active', '::1', '1', '2021-12-01 10:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(100) NOT NULL,
  `orderno` varchar(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `order_dt` date NOT NULL,
  `pmode` varchar(100) NOT NULL,
  `payid` varchar(100) DEFAULT NULL,
  `pay_status` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `message` varchar(220) NOT NULL,
  `receving_payment` varchar(100) DEFAULT NULL,
  `extra_payment` varchar(100) DEFAULT NULL,
  `status_update_dt` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `orderno`, `userid`, `order_dt`, `pmode`, `payid`, `pay_status`, `status`, `comment`, `message`, `receving_payment`, `extra_payment`, `status_update_dt`, `created_at`) VALUES
(1, 'ord100212260', 10, '2021-12-02', 'Cash On Delivery', '', 'Not Paid', 'Shipped', '', '', NULL, NULL, '0000-00-00', '2021-12-03 06:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `stock_id` varchar(11) NOT NULL,
  `category_id` varchar(11) NOT NULL,
  `subcategory_id` varchar(11) NOT NULL,
  `product_type` varchar(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `short_description` mediumtext NOT NULL,
  `long_description` longtext NOT NULL,
  `brand` varchar(100) NOT NULL,
  `features` varchar(200) NOT NULL,
  `mrp` varchar(200) NOT NULL,
  `sell_price` varchar(200) NOT NULL,
  `total_quantity` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` varchar(11) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `stock_id`, `category_id`, `subcategory_id`, `product_type`, `product_name`, `short_description`, `long_description`, `brand`, `features`, `mrp`, `sell_price`, `total_quantity`, `status`, `cip`, `cby`, `cdate`) VALUES
(1, '', '1', '1', '1', 'Oil', '\r\nEmerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Blend', 'they float on water but are not soluble in it; they are greasy to the touch, and have lubricating properties; they are not readily volatile; and may be burned without leaving any residue,', '20.00', '15.00', '1', 'Active', '', '', '2021-11-24 15:27:44'),
(2, '', '2', '1', '1', 'Flowers', '\r\nEmerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Indica Dominat', 'they float on water but are not soluble in it; they are greasy to the touch, and have lubricating properties; they are not readily volatile; and may be burned without leaving any residue,', '30.00', '25.00', '1', 'Active', '', '', '2021-11-24 15:27:44'),
(3, '', '3', '1', '1', 'Concentrate', '\r\nEmerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Dominant', 'they float on water but are not soluble in it; they are greasy to the touch, and have lubricating properties; they are not readily volatile; and may be burned without leaving any residue,', '17.0', '15.0', '1', 'Active', '', '', '2021-11-24 15:27:44'),
(4, '', '4', '1', '1', 'Edibles', '\r\nEmerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Blend', 'they float on water but are not soluble in it; they are greasy to the touch, and have lubricating properties; they are not readily volatile; and may be burned without leaving any residue,', '30.00', '25.00', '1', 'Active', '', '', '2021-11-24 15:27:44'),
(10, '', '1', '1', '1', 'Oil', '\r\nEmerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Blend', 'they float on water but are not soluble in it; they are greasy to the touch, and have lubricating properties; they are not readily volatile; and may be burned without leaving any residue,', '20.00', '15.00', '1', 'Active', '', '', '2021-11-24 15:27:44'),
(11, '', '2', '1', '1', 'Flowers', '\r\nEmerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Indica Dominat', 'they float on water but are not soluble in it; they are greasy to the touch, and have lubricating properties; they are not readily volatile; and may be burned without leaving any residue,', '30.00', '25.00', '1', 'Active', '', '', '2021-11-24 15:27:44'),
(12, '', '3', '1', '1', 'Concentrate', '\r\nEmerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Dominant', 'they float on water but are not soluble in it; they are greasy to the touch, and have lubricating properties; they are not readily volatile; and may be burned without leaving any residue,', '17.0', '15.0', '1', 'Active', '', '', '2021-11-24 15:27:44'),
(13, '', '4', '1', '1', 'Edibles', '\r\nEmerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.Emerald Springs shouldn’t be costly, inconsistent, or difficult to access.', 'Blend', 'they float on water but are not soluble in it; they are greasy to the touch, and have lubricating properties; they are not readily volatile; and may be burned without leaving any residue,', '30.00', '25.00', '1', 'Active', '', '', '2021-11-24 15:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(100) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `productid` int(100) NOT NULL,
  `product_nm` varchar(100) NOT NULL,
  `price` double(18,2) NOT NULL,
  `quantity` int(100) NOT NULL,
  `totalprice` double(18,2) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `orderid`, `productid`, `product_nm`, `price`, `quantity`, `totalprice`, `status`) VALUES
(1, 'ord100212260', 3, 'lilly', 0.00, 1, 80.00, ''),
(2, 'ord100212260', 3, 'lilly', 0.00, 1, 80.00, ''),
(3, 'ord100212260', 4, 'Dining chair', 0.00, 1, 1300.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `id` int(11) NOT NULL,
  `category_id` varchar(11) NOT NULL,
  `subcategory_id` varchar(11) NOT NULL,
  `product_type` varchar(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `short_description` mediumtext NOT NULL,
  `long_description` longtext NOT NULL,
  `brand` varchar(100) NOT NULL,
  `features` longtext NOT NULL,
  `mrp` varchar(200) NOT NULL,
  `sell_price` varchar(200) NOT NULL,
  `total_quantity` varchar(200) NOT NULL,
  `unit` varchar(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` varchar(11) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `category_id`, `subcategory_id`, `product_type`, `product_name`, `short_description`, `long_description`, `brand`, `features`, `mrp`, `sell_price`, `total_quantity`, `unit`, `color`, `image`, `status`, `cip`, `cby`, `cdate`) VALUES
(1, '1', '1', '1', 'APPLE iPhone 12 (Red, 64 GB)', '<p>kjhkhkh</p>', '<p>hnkjhkhk</p>', '', '<p>kjhkhkhkjhkjhk</p>', '6000', '7000', '160', '1', 'Red', '7497-.jpeg', 'Active', '::1', '1', '2021-11-26 18:51:31'),
(2, '1', '1', '1', 'APPLE iPhone 12 (Blue, 128 GB)', '<p>khkhkjh</p>', '<p>jkhh</p>', '', '<p>hhkjhkk</p>', '8000', '90000', '3020', '1', 'Green', '43786-.jpeg', 'Active', '::1', '1', '2021-11-26 19:16:41'),
(3, '4', '2', '1', 'lilly', '<p>qwwert</p>', '<p>qwert</p>', '', '<p>ssdfdfg</p>', '100', '80', '10', '5', 'Blue', '30068-.jfif', 'Active', '::1', '', '2021-11-30 18:10:49'),
(4, '7', '7', '1', 'Dining chair', '<p><span style=\"color: rgb(241, 243, 244); font-family: Roboto, Arial, sans-serif; font-size: 12px; letter-spacing: 0.3px; background-color: rgb(20, 21, 24);\">Do we really need chairs? Well, if we don’t want to stand, sit or lay on the floor, the answer is a resounding “yes!” Do they need us? Nope, not one .</span><span style=\"background-color: rgb(20, 21, 24); color: rgb(241, 243, 244); font-family: Roboto, Arial, sans-serif; font-size: 12px; letter-spacing: 0.3px;\">Do we really need chairs? Well, if we don’t want to stand, sit or lay on the floor, the answer is a resounding “yes!” Do they need us? Nope, not one .</span><br></p>', '<p><span style=\"color: rgb(241, 243, 244); font-family: Roboto, Arial, sans-serif; font-size: 12px; letter-spacing: 0.3px; background-color: rgb(20, 21, 24);\">Do we really need chairs? Well, if we don’t want to stand, sit or lay on the floor, the answer is a resounding “yes!” Do they need us? Nope, not one .</span><br></p>', '', '<p><span style=\"color: rgb(241, 243, 244); font-family: Roboto, Arial, sans-serif; font-size: 12px; letter-spacing: 0.3px; background-color: rgb(20, 21, 24);\">Do we really need chairs? Well, if we don’t want to stand, sit or lay on the floor, the answer is a resounding “yes!” Do they need us? Nope, not one .</span><span style=\"background-color: rgb(20, 21, 24); color: rgb(241, 243, 244); font-family: Roboto, Arial, sans-serif; font-size: 12px; letter-spacing: 0.3px;\">Do we really need chairs? Well, if we don’t want to stand, sit or lay on the floor, the answer is a resounding “yes!” Do they need us? Nope, not one .</span><br></p>', '1500', '1300', '1', '5', 'Red', '68823-.jfif', 'Active', '::1', '1', '2021-12-01 10:51:59'),
(5, '4', '4', '1', 'cookies', '<p><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">A&nbsp;</span><b style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">cookie</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;is a&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Baked_goods\" class=\"mw-redirect\" title=\"Baked goods\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">baked</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;or cooked snack or&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Dessert\" title=\"Dessert\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">dessert</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;that is typically small, flat and sweet. It usually contains&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Flour\" title=\"Flour\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">flour</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">,&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Sugar\" title=\"Sugar\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">sugar</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">, egg, and some type of&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Cooking_oil\" title=\"Cooking oil\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">oil</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">,&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Fat\" title=\"Fat\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">fat</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">, or&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Butter\" title=\"Butter\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">butter</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">. It may include other ingredients such as&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Raisin\" title=\"Raisin\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">raisins</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">,&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Oat\" title=\"Oat\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">oats</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">,&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Chocolate_chip\" title=\"Chocolate chip\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">chocolate chips</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">, nuts</span><br></p>', '<p><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Biscuit or cookie variants include&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Sandwich_cookie\" title=\"Sandwich cookie\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">sandwich biscuits</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">, such as&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Custard_cream\" title=\"Custard cream\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">custard creams</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">,&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Jammie_Dodgers\" title=\"Jammie Dodgers\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">Jammie Dodgers</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">,&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Bourbon_biscuit\" title=\"Bourbon biscuit\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">Bourbons</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;and&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Oreo\" title=\"Oreo\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">Oreos</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">, with marshmallow or jam filling and sometimes dipped in chocolate or another sweet coating. Cookies are often served with beverages such as&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Milk\" title=\"Milk\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">milk</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">,&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Coffee\" title=\"Coffee\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">coffee</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;or&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Tea\" title=\"Tea\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">tea</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;and sometimes&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Dunking_(biscuit)\" title=\"Dunking (biscuit)\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">\"dunked\"</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">, an approach which releases more flavour from confections by dissolving the sugars,</span><sup id=\"cite_ref-4\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://en.wikipedia.org/wiki/Cookie#cite_note-4\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[4]</a></sup><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;while also softening their texture</span><br></p>', '', '<div><i style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Bar cookies</i><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;consist of batter or other ingredients that are poured or pressed into a pan (sometimes in multiple layers) and cut into cookie-sized pieces after baking. In&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/British_English\" title=\"British English\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">British English</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">, bar cookies are known as \"tray bakes</span><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\"><i><br></i></span></font></div>', '1000', '800', '2', '6', 'White', '86969-.jfif', 'Active', '::1', '1', '2021-12-01 11:27:01'),
(6, '1', '5', '1', 'refinde', '<p>erfe</p>', '<p>fgdg</p>', '', '<p>reefe</p>', '200', '180', '1', '6', '', '30068-.jfif', 'Active', '::1', '1', '2021-12-01 12:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` varchar(12) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` varchar(200) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `cstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `image`, `cip`, `cby`, `cdate`, `cstatus`) VALUES
(1, '1', 'admin', '', '::1', '1', '2021-11-30 18:08:07', 'Active'),
(2, '3', 'rose', '', '::1', '', '2021-11-30 18:08:34', 'Active'),
(3, '2', 'Amita', '', '::1', '', '2021-11-30 18:08:51', 'Active'),
(4, '4', 'cookies', '', '::1', '', '2021-11-30 18:09:18', 'Active'),
(5, '1', 'sunflower', '89861-.jfif', '::1', '1', '2021-12-01 10:42:34', 'Active'),
(6, '1', 'cookies', '', '::1', '1', '2021-12-01 10:44:08', 'Active'),
(7, '1', 'sunflower', '51110-.jfif', '::1', '1', '2021-12-01 10:44:24', 'Active'),
(8, '1', 'sunflower', '', '::1', '1', '2021-12-01 10:44:39', 'Active'),
(9, '1', 'Admind', '', '::1', '1', '2021-12-01 10:44:54', 'Active'),
(10, '7', 'chair', '7106-.jfif', '::1', '1', '2021-12-01 10:47:34', 'Active'),
(11, '2', 'rose', '26231-.jfif', '::1', '1', '2021-12-01 12:03:02', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `state` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `type` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `fname`, `lname`, `email`, `password`, `phone`, `gender`, `address`, `city`, `zipcode`, `country`, `otp`, `state`, `status`, `type`, `created_at`) VALUES
(1, 'maninder', 'singh', 'admin1@gmail.com', '202cb962ac59075b964b07152d234b70', '7009660018', '', '', '', '', '', '', '', 'Active', 'admin', '2021-09-08 17:33:41'),
(10, 'sakshi', 'thakur', 'admin@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', '8521526062', '', 'mohali 6', 'kangra', '177106', 'India', '67690', 'himachal pradesh', 'Active', 'user', '2021-10-05 15:31:18'),
(11, 'Raj', 'Roushan', 'roushan@vcanaglobal.com', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', 'Active', '', '2021-10-28 05:27:22'),
(12, 'Anup', 'Dubey', 'j@gmail.com', '202cb962ac59075b964b07152d234b70', '8521526062', '', '', '', '', '', '', '', 'Active', 'user', '2021-11-03 12:35:57'),
(13, 'sunnydd', 'singh', 'sdd@gmail.com', '202cb962ac59075b964b07152d234b70', '8521526062', '', '', '', '', '', '', '', 'Active', '', '2021-11-09 10:59:54'),
(15, 'sa', 'asa', 'Sakshi@vcanaglobal.com', '202cb962ac59075b964b07152d234b70', '56789777777', 'Female', 'mohali 8', 'kangra', '177106', 'india', '13345', 'himachal', 'Active', 'user', '2021-11-25 17:29:12'),
(16, 'sa', '11111111', 'admin1234@gmail.com', '4297f44b13955235245b2497399d7a93', '234242', '', '', '', '', '', '', '', 'Active', 'user', '2021-11-25 18:06:08'),
(17, 'sa', 'asa', '', '93279e3308bdbbeed946fc965017f67a', '1111111111', '', '', '', '', '', '', '', 'Active', 'user', '2021-11-25 18:14:21'),
(18, '', '', '', '123456', '', '', '', '', '', '', '', '', 'Active', '', '2021-11-29 17:50:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_details`
--
ALTER TABLE `address_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_details`
--
ALTER TABLE `address_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
