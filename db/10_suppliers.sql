-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 07:00 PM
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
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `slug`, `mobile`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Akib Hossain', 'akib-hossain', '01670270002', 'akib@gmail.com', 'Gazipur, Dhaka', '2022-08-24 03:20:19', '2022-08-24 03:20:19'),
(2, 'Feroze Alam', 'feroze-alam', '01684783197', 'feroze@gmail.com', 'Mirpur, Dhaka-1204', '2022-08-25 03:24:51', '2022-08-25 03:24:51'),
(3, 'Adnan Hossain', 'adnan-hossain', '01684783198', 'adnan@gmail.com', 'Kalsi, Dhaka-1205', '2022-08-25 03:25:45', '2022-08-25 03:25:45'),
(4, 'L. Taijul', 'l-taijul', '01984783197', 'l.taijul@gmail.com', 'Manikdi, Dhaka-1200', '2022-08-25 03:26:46', '2022-08-25 03:26:46'),
(5, 'Mohsin Adnan', 'mohsin-adnan', '01588783198', 'mohsinadnan@gmail.com', '186 Nazrul Avenue, Comilla', '2022-08-25 03:29:53', '2022-08-25 03:29:53'),
(6, 'Umer Al Kholifa', 'umer-al-kholifa', '01384783197', 'umeralkholifa@gmail.com', 'Mirpur10, Dhaka-1204', '2022-08-25 03:31:28', '2022-08-25 03:31:28'),
(7, 'Jannatul Taslima', 'jannatul-taslima', '01984773197', 'taslima@gmail.com', '186 Nazrul Avenue, Comilla', '2022-08-25 03:34:45', '2022-08-25 03:34:45'),
(8, 'Tania Salma', 'tania-salma', '01588793198', 'salma@gmail.com', '186 Nazrul Avenue, Comilla', '2022-08-25 03:35:28', '2022-08-25 03:35:28'),
(9, 'Muhammad Syed', 'muhammad-syed', '01684787894', 'Syed@gmail.com', 'Manikdi, Dhaka', '2022-08-25 03:36:18', '2022-08-25 03:36:18'),
(10, 'Halima Aklima', 'halima-aklima', '01784787456', 'halima@gmail.com', 'Chittagong University, Chittagong-4331.', '2022-08-25 03:37:44', '2022-08-25 03:37:44'),
(11, 'Israt Sumi', 'israt-sumi', '017588783152', 'sumi@gmail.com', 'C.D.A, Road # 01, Agrabad, Chittagong', '2022-08-25 03:46:11', '2022-08-25 03:46:11'),
(12, 'Nasima Jesmin', 'nasima-jesmin', '01588783198', 'jesmin@gmail.com', '119/2, Mahima Mahal, Jail Road, Jessore', '2022-08-25 03:48:54', '2022-08-25 03:48:54'),
(13, 'Golam Ali', 'golam-ali', '01984773198', 'Golam@gmail.com', '186 Nazrul Avenue, Comilla', '2022-08-25 03:49:26', '2022-08-25 03:49:26'),
(14, 'Rasel Ariful', 'rasel-ariful', '01984787865', 'ariful@gmail.com', 'Manikdi, Dhaka', '2022-08-25 03:50:07', '2022-08-25 03:50:07'),
(15, 'Monira Amina', 'monira-amina', '01984783197', 'amina@gmail.com', 'Kalsi, Dhaka-1205', '2022-08-25 03:50:40', '2022-08-25 03:50:40'),
(16, 'Bibi Ki Vine', 'bibi-ki-vine', '01995423197', 'bibi@gmail.com', '9/2, Mahima Mahal, Jail Road, Jessore', '2022-08-25 03:51:56', '2022-08-25 03:51:56'),
(17, 'Fahmida Aysha', 'fahmida-aysha', '01384783197', 'aysha@gmail.com', 'Mirpur, Dhaka-1204', '2022-08-25 03:52:31', '2022-08-25 03:52:31'),
(18, 'Rakibul Mizanur', 'rakibul-mizanur', '01684783198', 'Mizanur@gmail.com', '186 Nazrul Avenue, Comilla', '2022-08-25 03:53:29', '2022-08-25 03:53:29'),
(19, 'Masum Omar', 'masum-omar', '01684728394', 'omar@gmail.com', '2236, Nobogram Road, Hatem Ali Chowrasta, Barisal.', '2022-08-25 03:55:32', '2022-08-25 03:55:32'),
(20, 'Sabrina Nargis', 'sabrina-nargis', '01384798465', 'nargis@gmail.com', 'Hatem Ali Chowrasta, Barisal', '2022-08-25 03:56:40', '2022-08-25 03:56:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
