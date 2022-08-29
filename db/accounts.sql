-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 08:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `accountnumber`, `balance`, `created_at`, `updated_at`) VALUES
(1, 'Cash', NULL, '0.00', '2022-08-29 12:21:55', '2022-08-29 12:30:48'),
(2, 'Bkash', '01629999666', '0.00', '2022-08-29 12:22:07', '2022-08-29 12:30:59'),
(3, 'Nagad', '01629999666', '0.00', '2022-08-29 12:22:29', '2022-08-29 12:22:29'),
(4, 'Rocket', '016299996662', '0.00', '2022-08-29 12:22:39', '2022-08-29 12:22:39'),
(5, 'DBBL', '2161030284757', '0.00', '2022-08-29 12:22:48', '2022-08-29 12:22:48'),
(6, 'City Bank Ltd', '2302923013001', '0.00', '2022-08-29 12:30:09', '2022-08-29 12:30:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
