-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 01:21 PM
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
-- Table structure for table `review_details`
--

CREATE TABLE `review_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `cby` int(10) NOT NULL,
  `cstatus` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_details`
--

INSERT INTO `review_details` (`id`, `product_id`, `email`, `name`, `comment`, `cby`, `cstatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'mandeep@gmail.com', 'mandeep walia', 'If you’ve got the munchies, we recommend staying for this Nuts.com review. In this commentary, we’ll take a closer look at the brand, its products,', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'mninder@gmail.com', 'Maninder singh', 'It was a humble beginning for Sol, as his business started off selling nuts and dried fruit at the Mulberry Street open-air market in New York City.', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 'Sakshi@vcanaglobal.com', 'Sakshi Thakur', 'Today, with its headquarters located in New Jersey, Nuts.com continues to produce dried fruits, nuts, and other delectables for customers to try out.', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'Amit@Pathania.com', 'Amit Pathania', 'As a final note, the brand states that they’ll carry on their family-centric business approach for years to come. \r\n“We do it the “Old Fashioned Way.” One taste and you will know the difference', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review_details`
--
ALTER TABLE `review_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_details`
--
ALTER TABLE `review_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
