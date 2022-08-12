-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 09:51 PM
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
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Desktop', 'desktop', 'public/categories/IxP5k7JRvzMnFzDjdQSofT8Hc43iRKqjA7m4Dprr.jpg', 'Desktop Category', '2022-08-11 03:30:00', '2022-08-12 13:49:51'),
(2, 'Laptop', 'laptop', 'public/categories/7vrorphKkUwtQILRSKa3QqGK3Q6ezdDXv23jLxWu.jpg', 'Laptop Category', '2022-08-11 03:30:52', '2022-08-12 13:49:51'),
(3, 'Component', 'component', 'public/categories/xtQpUCBOUs7CNVIN8BWdwtAhJKaqnK38Ls92EmZt.jpg', 'Component Category', '2022-08-11 03:31:48', '2022-08-12 13:49:51'),
(4, 'Monitor', 'monitor', 'public/categories/QgTzPCWabj9udBaI2Swpj0at9TZm9XczkU70QnRs.jpg', 'Monitor Category', '2022-08-11 03:32:41', '2022-08-12 13:49:51'),
(5, 'UPS', 'ups', 'public/categories/0TT3nQgtaM9qlwWZ3FUfm6Y0cxGFSGBrlaFBuPa0.jpg', 'UPS Category', '2022-08-11 03:35:18', '2022-08-12 13:49:51'),
(6, 'Tablet', 'tablet', 'public/categories/havnRK2miraKBtccqWUg3OHoClSld3YiBDYY32Mz.jpg', 'Tablet Category', '2022-08-11 03:36:22', '2022-08-12 13:49:51'),
(7, 'Office Equipment', 'office-equipment', 'public/categories/dtoqf78awlWYh79L7uEwt8mTgsotiHe4yck0aBsp.jpg', 'Office Equipment Category', '2022-08-11 03:37:23', '2022-08-12 13:49:51'),
(8, 'Camera', 'camera', 'public/categories/O2tYJUAUXNcaFZm5IiVz7MDqwOLy0lfIumCB5h5J.jpg', 'Camera Category', '2022-08-11 03:38:24', '2022-08-12 13:49:51'),
(9, 'Security', 'security', 'public/categories/KVFMqjOMCVfvH0jrCyZix3syq1qARjf4flDe7XWK.jpg', 'Security Category', '2022-08-11 03:38:56', '2022-08-12 13:49:51'),
(10, 'Networking', 'networking', 'public/categories/7aCvRAjjCBMGEhvg8B1zcS5YDcyFMFym6HamVKAI.jpg', 'Networking Category', '2022-08-11 03:39:38', '2022-08-12 13:49:52'),
(11, 'Accessories', 'accessories', 'public/categories/eAe13Tlgzhl3zCZSjzBxoxKJOZtcew1xE4hCOwAZ.jpg', 'Accessories Category', '2022-08-11 03:40:12', '2022-08-12 13:49:52'),
(12, 'Software', 'software', 'public/categories/hv2C533uK8ZKC6rQU0QIGFRvjTFuF3uHNwLZtZNe.jpg', 'Software Category', '2022-08-11 03:41:17', '2022-08-12 13:49:52'),
(13, 'TV', 'tv', 'public/categories/Aih6k4ZmqE8xPPYIGAAzhtqmHsxPF87sQNXSaUWp.jpg', 'TV Category', '2022-08-11 03:41:44', '2022-08-12 13:49:52'),
(14, 'AC', 'ac', 'public/categories/xB496yJyXuKDs3ylVVd6Mocho1M7pqK3fbdNtyIR.jpg', 'AC Category', '2022-08-11 03:42:08', '2022-08-12 13:49:52'),
(15, 'Gadget', 'gadget', 'public/categories/KOusUtzrgmiCC0yS6ksax6WpJzF6Y0Gi04etu1an.jpg', 'Gadget Category', '2022-08-11 03:42:51', '2022-08-12 13:49:52'),
(16, 'Gaming', 'gaming', 'public/categories/avdtIWTsaR2XhNuBU3WmkUzlARBP62rn4Q8AweoN.jpg', 'Gaming Category', '2022-08-11 03:43:34', '2022-08-12 13:49:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
