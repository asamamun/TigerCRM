-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 06:38 PM
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
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `slug`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Syed Zayed Hossain', 'syed-zayed-hossain', 'zayed@gmail.com', '01629999666', NULL, '$2y$10$I2d0IOZ1Af/BMbP2i6GqHe7DLcGqo0YYn3nVw6.VRk7RFkRCNTIJa', NULL, '2022-09-03 03:26:05', '2022-09-03 03:26:05'),
(2, 'Zayed', 'zayed', 'test33@gmail.com', '01911977900', NULL, '$2y$10$auqCPnE0vg6geqZ2jjaU.uQrt95jOnPNlf8WAwZUOIzJrns6qRNBa', NULL, '2022-09-03 03:43:58', '2022-09-03 03:43:58'),
(3, 'selina', 'selina', 'selina@gmail.com', '01712981834', NULL, '$2y$10$mepcnxG3CtogkDdpNChuUO78pM0LrJoPIVxu21S2n7hYE86M9Sfo2', NULL, '2022-09-04 03:35:13', '2022-09-04 03:35:13'),
(4, 'samsungs3', 'samsungs3', 'shariful@gmail.com', '01746959342', NULL, '$2y$10$Hu5DNs4M1xI7wTXVYcBxjuYu3lLQpe4J.WS24Pvra.3Q9iMvRh9PK', NULL, '2022-09-04 03:35:46', '2022-09-04 03:35:46'),
(5, 'Nahida', 'nahida', 'nahida@gmail.com', '01904672129', NULL, '$2y$10$TDZs/aheG0kfhZx/GhzNpuZxncDz8uBs/txgJMPRdrRt.vFH9kMci', NULL, '2022-09-04 03:36:32', '2022-09-04 03:36:32'),
(6, 'Zayed', 'zayed-2', 'dell@gmail.com', '01789352619', NULL, '$2y$10$IEygB92ZoGV7xbqfh2MGfO/.Mj0KC/EqLTjOM40J3QZSNNo5K96Ye', NULL, '2022-09-04 03:37:32', '2022-09-04 03:37:32'),
(7, 'Sarif', 'sarif', 'Sarifa@gmail.com', '01342617893', NULL, '$2y$10$PwSSO2VWFWSK85/b90zYLOoJQWtGSauk1EbYgwKXHpeR45GFTw4rC', NULL, '2022-09-04 03:38:14', '2022-09-04 03:38:14'),
(8, 'Tamim', 'tamim', 'Tamima@gmail.com', '01532876134', NULL, '$2y$10$nxY7OufQhccCEN9ADSciKOvIsMi8oONHf28DRpKiMBP9wIPdaB/kC', NULL, '2022-09-04 03:38:48', '2022-09-04 03:38:48'),
(9, 'Imran', 'imran', 'oran@gmail.com', '01872413672', NULL, '$2y$10$0An0OvAhAfWrePr0fOuXhe9kbGQN26oDsNramyGgk4PerTUUFgaQC', NULL, '2022-09-04 03:39:36', '2022-09-04 03:39:36'),
(10, 'Umer', 'umer', 'umer@gmail.com', '01437124536', NULL, '$2y$10$CeB1BNv4NT/GQhJkuPzkEOIJUCl7/vAf.lks19iaPN1lzpt0HBUtS', NULL, '2022-09-04 03:40:33', '2022-09-04 03:40:33'),
(11, 'Feroz', 'feroz', 'feroz@gmail.com', '01452318765', NULL, '$2y$10$KHdFpkxT56md33bUtKlLkO/LiXTTeApazoXCvQCNg0VhlTNXA/wjK', NULL, '2022-09-04 03:41:07', '2022-09-04 03:41:07'),
(12, 'Mohsin', 'mohsin', 'mohsin@gmail.com', '01894325617', NULL, '$2y$10$U4nypET92W3GDUnKY5.Ri.A3DoLYivXbskAwGTJqAGYk3dQEp0g/e', NULL, '2022-09-04 03:41:38', '2022-09-04 03:41:38'),
(13, 'Adnan', 'adnan', 'adnan@gmail.com', '01652341984', NULL, '$2y$10$/07MHI30QH2In/H8shNw9eFkQuvgcvX87/5y6HnOGp7ms3/HWUu72', NULL, '2022-09-04 03:42:12', '2022-09-04 03:42:12'),
(14, 'Ayreen', 'ayreen', 'irin@gmail.com', '01673245981', NULL, '$2y$10$O6fjAu8e4F3cMDBDF9/Gd.k46hUAw/gwXWjcthVZTijHvpnPDC5ae', NULL, '2022-09-04 03:42:51', '2022-09-04 03:42:51'),
(15, 'Tayjul', 'tayjul', 'ttaijul@gmail.com', '01432789652', NULL, '$2y$10$dT8l2dskrpCxal6Da2slHOi8ERHNXZQSfnORQpyeGxhUhQkwPboq2', NULL, '2022-09-04 03:43:51', '2022-09-04 03:43:51'),
(16, 'Ibrahim', 'ibrahim', 'Ibrahim@gmail.com', '01896532456', NULL, '$2y$10$aOULoiLfMqEQUXk5F2ZU6O.zr3PU.KT2arg12R3DMfsHDtqcfFnO.', NULL, '2022-09-04 03:44:37', '2022-09-04 03:44:37'),
(17, 'Trin', 'trin', 'tarin@gmail.com', '01764325679', NULL, '$2y$10$8Phrxc.kDc8j2mk0M0B2zen1oc3xWUzeigzCEYp1RmlE7TjZDBJq2', NULL, '2022-09-04 03:45:12', '2022-09-04 03:45:12'),
(18, 'Pinky', 'pinky', 'pink@gmail.com', '01897645326', NULL, '$2y$10$WKr6jTjFsWfZTj.rVIQKQ.gWxwI2Zk5RtsZ5SzK21hI6ohjgCdOem', NULL, '2022-09-04 03:47:31', '2022-09-04 03:47:31'),
(19, 'Prity', 'prity', 'prity@gmail.com', '01894326718', NULL, '$2y$10$E741NmFFlK.SOzwqs0628.a1e/LPRPyf2H2/SWguiSS5NOupzN6mC', NULL, '2022-09-04 03:48:05', '2022-09-04 03:48:05'),
(20, 'Asma', 'asma', 'asami@gmail.com', '01874238913', NULL, '$2y$10$PTovGo8tSm.6CJU7rm4WleYiH/6fKihtXxClJ3hOGr5Uot5jHYiOK', NULL, '2022-09-04 03:48:35', '2022-09-04 03:48:35'),
(21, 'tasin', 'tasin', 'taski@gmail.com', '01904325618', NULL, '$2y$10$8cKIKLE/8VEpt8St0GpDaumxTFArvE8URslzk39LB8ofsi90t5rpi', NULL, '2022-09-04 03:49:29', '2022-09-04 03:49:29'),
(22, 'Tanzum', 'tanzum', 'tanjum@gmail.com', '0154271892', NULL, '$2y$10$EZMh3B9oyRqvc1Q6DuHYp.TNOARJbInW5nd/vp24/46ps.RE8uD3m', NULL, '2022-09-04 04:26:24', '2022-09-04 04:26:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
