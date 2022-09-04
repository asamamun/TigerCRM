-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 06:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tigercrm`
--

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `supplier_id`, `nettotal`, `discount`, `grandtotal`, `comment`, `payment_type`, `trxId`, `created_at`, `updated_at`) VALUES
(1, 16, '3070000.00', '0.00', '3070000.00', 'purchase two products and all quantity 10', 1, NULL, '2022-09-04 03:56:56', '2022-09-04 03:56:56'),
(5, 16, '2239500.00', '2000.00', '2237500.00', 'Asus H81M-K 4th Gen Motherboard A', 1, 'wfwrfwfw', '2022-09-04 03:59:36', '2022-09-04 03:59:36'),
(6, 16, '1462000.00', '0.00', '1462000.00', 'Xiaomi Mi NoteBook Pro Core i5 11th Gen 14\"', 1, NULL, '2022-09-04 04:02:45', '2022-09-04 04:02:45'),
(7, 1, '720000.00', '0.00', '720000.00', 'Asus H81M-K 4th Gen Motherboard A', 1, NULL, '2022-09-04 04:03:27', '2022-09-04 04:03:27'),
(9, 3, '3960000.00', '0.00', '3960000.00', 'Xiaomi Mi NoteBook Pro Core i5 11th Gen 1', 1, NULL, '2022-09-04 04:04:14', '2022-09-04 04:04:14'),
(10, 9, '1540000.00', '0.00', '1540000.00', 'Xiaomi Mi NoteBook Pro Core i5 11th G', 1, NULL, '2022-09-04 04:05:06', '2022-09-04 04:05:06'),
(12, 12, '864000.00', '0.00', '864000.00', 'Microsoft Surface Pro 8 Core i7 11th Gen 1TB SSD 13\" Mult', 5, 'qwdqd', '2022-09-04 04:06:15', '2022-09-04 04:06:15'),
(13, 2, '870000.00', '0.00', '870000.00', 'Xiaomi Mi NoteBook Pro Core i5 11t', 6, 'qaxax', '2022-09-04 04:07:02', '2022-09-04 04:07:02'),
(14, 3, '1320000.00', '0.00', '1320000.00', 'Apple MacBook Air 13.3-Inch Retina Display 8-core Apple M1 chip with 8GB', 1, NULL, '2022-09-04 04:11:33', '2022-09-04 04:11:33'),
(15, 1, '620000.00', '0.00', '620000.00', 'ASUS Zen AiO 24 M5401WUAK Ryzen', 2, 'szAXSFVXX', '2022-09-04 04:17:51', '2022-09-04 04:17:51'),
(16, 5, '2498000.00', '0.00', '2498000.00', 'Xiaomi Mi NoteBook Pro Cor', 1, NULL, '2022-09-04 04:18:55', '2022-09-04 04:18:55'),
(17, 19, '1320000.00', '0.00', '1320000.00', 'Microsoft Surface Pro 8 Core i7 11th', 1, NULL, '2022-09-04 04:20:33', '2022-09-04 04:20:33'),
(18, 20, '100000.00', '520.00', '99480.00', 'HP V22v 21.5\" FHD LED Monitor', 1, NULL, '2022-09-04 04:47:45', '2022-09-04 04:47:45'),
(19, 11, '130000.00', '890.00', '129110.00', 'Acer Veriton S2680G Core I5 11th Gen 8GB Ram 1TB HDD Brand PC', 1, NULL, '2022-09-04 04:48:43', '2022-09-04 04:48:43'),
(20, 8, '125000.00', '0.00', '125000.00', 'Microsoft Surface Pro 8 Core i7 11th', 4, '586269', '2022-09-04 06:36:55', '2022-09-04 06:36:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
