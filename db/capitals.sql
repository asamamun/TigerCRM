-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 06:39 PM
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
-- Dumping data for table `capitals`
--

INSERT INTO `capitals` (`id`, `name`, `amount`, `payment_type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Cash in hand', '10000000.00', 1, 'cash in hand 1 crore tk', '2022-09-04 03:38:24', '2022-09-04 03:38:24'),
(2, 'Bank balance', '1000000.00', 5, 'dbbl account 10 lac tk', '2022-09-04 03:38:59', '2022-09-04 03:38:59'),
(3, 'Bank balance', '1000000.00', 6, 'city bank account balance 10 lac tk', '2022-09-04 03:39:21', '2022-09-04 03:39:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
