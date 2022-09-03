-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 04:33 PM
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
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `title`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Most Viewed Product', 'public/carousels/HfBcJ8YHa2X2RDdOSNctLK9ig3TUb0bM6C7vDiC4.png', 'This product achieved maximum reach to people.', '1', '2022-09-03 04:16:59', '2022-09-03 04:16:59'),
(3, 'Best Washing Machine', 'public/carousels/RlomvveQCiy91fJNUwmqJHPOHTiWR66TeqHzwMKr.jpg', 'we got some special product which is leading in the market right now.', '1', '2022-09-03 04:17:53', '2022-09-03 04:30:04'),
(4, 'Gadget Mall', 'public/carousels/io9m6o18sdiYItpsNPi2Uh35g9BVcKdilcfdUYcS.jpg', 'we got some special accessories which are  leading in the market.', '1', '2022-09-03 04:20:13', '2022-09-03 04:20:13'),
(5, 'Camera', 'public/carousels/kesAydgUXMpp3ZyH2oeITAm9gRiDivkDNDOFBope.jpg', 'This camera  achieved maximum reach to people.', '1', '2022-09-03 04:28:25', '2022-09-03 04:28:25'),
(6, 'Laptop', 'public/carousels/Mh1Bs3vwUaU7JmCFy9MZxCDb8usGRS1AebAgNPko.jpg', 'we have this kinds special accessories which are  leading in the market.', '1', '2022-09-03 04:29:15', '2022-09-03 04:29:15'),
(7, 'Washing Machine', 'public/carousels/uvgmQoxNV7Axsaatof7XJFYvg55bAou97KkXzKyM.jpg', 'This product is one of the most viewed product.', '1', '2022-09-03 04:32:48', '2022-09-03 04:32:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
