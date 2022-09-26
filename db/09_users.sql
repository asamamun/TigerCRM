-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 06:34 PM
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tasnim', 'al-rahman', 'tas@gmail.com', NULL, '$2y$10$qH570HrYl.WArg8lZAQMG.tSy6uJh6Ne5040CB.eUhRabFZE3BFNq', '3', NULL, '2022-08-31 03:39:40', '2022-08-31 03:39:40'),
(2, 'tasnim', 'rahman', 'tasni@gmail.com', NULL, '$2y$10$.yJAqMQsFT..Y8eApX33jufwTzR36wvok.1zSvTUQXRP0vsAK73y2', '1', NULL, '2022-08-31 04:25:48', '2022-08-31 04:25:48'),
(3, 'Shariful', 'islam', 'shariful@gmail.com', NULL, '$2y$10$lD/dswAWbSYZwvrevNtLQeWZIEq6Iy7HoC1uji4VXCPjbtY3giZRm', '1', NULL, '2022-09-03 04:11:32', '2022-09-03 04:11:32'),
(4, 'Syed', 'Zayed Hossain', 'zayed@gmail.com', NULL, '$2y$10$ZwUMLShTTfIlG4IkPxzrsuc9TRBfu/kPXOwqTIrRfrtNvHH42JkMO', '1', NULL, '2022-09-04 03:28:43', '2022-09-04 03:28:43'),
(5, 'tasin', 'rahman', 'tasi@gmail.com', NULL, '$2y$10$adEP7am85vg5xqeq9EnUc.edPKnJvN972HSrf63sSavMjWoCpgCpK', '1', NULL, '2022-09-04 03:51:25', '2022-09-04 03:51:25'),
(6, 'feroze', 'alam', 'feroze@gmail.com', NULL, '$2y$10$zKn/Pr8ZduHLtFSl/KrmiuxlBIi/.m4FPkN7/6y1bEXjBVUbQQuIC', '1', NULL, '2022-09-04 03:51:50', '2022-09-04 03:51:50'),
(7, 'tamim', 'islam', 'tamim@gmail.com', NULL, '$2y$10$2VpaQlDsWzE/RYql7HBAL.iqXaPDWI5dRtSxD0qBUbqDCYNmtSMBS', '1', NULL, '2022-09-04 03:51:56', '2022-09-04 03:51:56'),
(8, 'joni', 'da', 'jonida@gmail.com', NULL, '$2y$10$zObXsgz0pQzD9MxvFVMHJe3XFpsOT1w3BgTc.2WsWuwvdajYkO..6', '1', NULL, '2022-09-04 04:02:25', '2022-09-04 04:02:25'),
(9, 'uttom', 'devnath', 'uttom@gmail.com', NULL, '$2y$10$B2VnLmDBaemHSjB1xl3tSeIbgc.FCTg1GtJBUyAkJgHCyipLq3VQK', '1', NULL, '2022-09-04 04:12:14', '2022-09-04 04:12:14'),
(10, 'Adnan', 'Hosen', 'adnan@gmail.com', NULL, '$2y$10$a.P857hIttZ/pCZavztYc.kSizi4y0z3U.qnfMAu4cRPY3N7AhJHG', '1', NULL, '2022-09-04 04:13:22', '2022-09-04 04:13:22'),
(11, 'faria', 'rahman', 'farin@gmail.com', NULL, '$2y$10$glScMrIPvXPk9H1/HlM4VendEIjw4ihoDcd1jioOI6DeeFMtMSDYW', '1', NULL, '2022-09-04 04:13:23', '2022-09-04 04:13:23'),
(12, 'nazia', 'sarif', 'naziasarif@gmail.com', NULL, '$2y$10$pwbOf0VZmlECdpBiWuJu2OMtiilijDfhil1KmbYIzB/OYR1bevbse', '1', NULL, '2022-09-04 04:20:32', '2022-09-04 04:20:32'),
(13, 'kazol', 'gunda', 'gundakazol@gmail.com', NULL, '$2y$10$/ta8T8eRXByTqYEQJAwapeAFof6/cRmxnccYRwvwatwqXIjZYLsrq', '1', NULL, '2022-09-04 04:28:18', '2022-09-04 04:28:18'),
(14, 'umme', 'sadia', 'sadia@gmail.com', NULL, '$2y$10$pLyABKCqUt7FBsAMTj5kx.SnrcPQUeqFYw80uLG4miXDMe6KhrIxu', '1', NULL, '2022-09-04 04:37:28', '2022-09-04 04:37:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
