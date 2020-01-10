-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 05:25 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nmn`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `cus_email` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `cus_address` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `cus_phone` int(11) NOT NULL,
  `cus_note` varchar(255) COLLATE utf32_vietnamese_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cus_name`, `cus_email`, `cus_address`, `cus_phone`, `cus_note`, `created_at`, `updated_at`) VALUES
(1, 'Lê Quỳnh Nhi', 'chanchanb2@gmail.com', 'Thanh Hóa', 982087671, NULL, '2019-08-17 13:29:38', '2019-08-17 13:29:38'),
(2, 'Lê Quỳnh Nhi', 'chanchanb2@gmail.com', 'Thanh Hóa', 982087671, NULL, '2019-08-17 13:30:23', '2019-08-17 13:30:23'),
(3, 'Lê Quỳnh Nhi', 'chanchanb2@gmail.com', 'Thanh Hóa', 982087671, NULL, '2019-08-17 13:31:06', '2019-08-17 13:31:06'),
(4, 'Lê Quỳnh Nhi', 'chanchanb2@gmail.com', 'Thanh Hóa', 982087671, NULL, '2019-08-17 13:31:42', '2019-08-17 13:31:42'),
(5, 'Lê Quỳnh Nhi', 'chanchanb2@gmail.com', 'Thanh Hóa', 982087671, NULL, '2019-08-17 13:32:00', '2019-08-17 13:32:00'),
(6, 'Lê Quỳnh Nhi', 'chanchanb2@gmail.com', 'Thanh Hóa', 982087671, NULL, '2019-08-17 13:32:12', '2019-08-17 13:32:12'),
(7, 'Nhi 2', 'november0124@gmail.com', 'Thanh Hóa', 1231515, NULL, '2019-08-17 13:34:00', '2019-08-17 13:34:00'),
(8, 'Lê Quỳnh Nhi', 'november0124@gmail.com', 'Thanh Hóa', 982087671, NULL, '2019-08-18 11:32:02', '2019-08-18 11:32:02'),
(9, 'Lê Quỳnh Nhi', 'november0124@gmail.com', 'Thanh Hóa', 982087671, NULL, '2019-08-18 18:46:31', '2019-08-18 18:46:31'),
(10, 'Lê Quỳnh Nhi', 'november0124@gmail.com', 'Thanh Hóa', 982087671, NULL, '2019-08-18 20:12:40', '2019-08-18 20:12:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
