-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 03:10 PM
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
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, '1STPLAYER', '1stplayer', 'public/brands/tW2AbpbnwRQD5P545CWsVhuMGG6H3gm6d0iWKvlr.jpg', '1STPLAYER  Brand', '2022-08-18 04:13:17', '2022-08-18 07:07:27'),
(2, 'A4Tech', 'a4tech', 'public/brands/3FmHvFqpGxJ4ItEEon9BSmi9k3aFwNMeADm8VWwE.jpg', 'A4Tech Brand', '2022-08-18 04:14:08', '2022-08-18 04:14:08'),
(3, 'Acer', 'acer', 'public/brands/e7e5a4A9VkWPuVpCwydB9344Q7tA47f1tE9dM41B.jpg', 'Acer  Brand', '2022-08-18 04:15:51', '2022-08-18 07:07:48'),
(4, 'Adata', 'adata', 'public/brands/z8vZ9RadpeFfU2TcnVH2vStSfrugirPrRnrBScN9.jpg', 'Adata  Brand', '2022-08-18 04:16:10', '2022-08-18 07:08:02'),
(5, 'AFOX', 'afox', 'public/brands/Ffrwxo4PxX6vj4W5qn7Z0H0WrQO7hl8NJX0pldAf.png', 'AFOX  Brand', '2022-08-18 04:16:31', '2022-08-18 04:16:31'),
(6, 'AITC', 'aitc', 'public/brands/0I7tDLWImfeKMm3NIipfSmOIGLGtSe3bpx6ObtZu.jpg', 'AITC  Brand', '2022-08-18 04:16:53', '2022-08-18 07:08:23'),
(7, 'Akash Digital TV', 'akash-digital-tv', 'public/brands/tQ9R3jWrcnY2S33v4EqlfyTjbL4y8njP1NsXRAjt.png', 'Akash Digital TV  Brand', '2022-08-18 04:17:10', '2022-08-18 04:17:10'),
(8, 'Amazon', 'amazon', 'public/brands/R8ZHyv8xRs177wBXbMb3YHsG63HrJX8F9jqEQdHu.jpg', 'Amazon  Brand', '2022-08-18 04:17:37', '2022-08-18 04:17:37'),
(9, 'AMD', 'amd', 'public/brands/xgGTHEXXGxJ2mSecQ9aAkWliuyYFaWxxr0nAcglh.jpg', 'AMD  Brand', '2022-08-18 04:18:15', '2022-08-18 04:18:15'),
(10, 'Antec', 'antec', 'public/brands/WjMsGRHs4bLCWzFTAqlWgj2NsbQBEV75ZdF0AIqZ.jpg', 'Antec  Brand', '2022-08-18 04:18:37', '2022-08-18 07:08:52'),
(11, 'AOC', 'aoc', 'public/brands/Hgewxyn5W3PKgmWOUi29mG1RKYpG3WarfYVVWrJm.jpg', 'AOC  Brand', '2022-08-18 04:18:51', '2022-08-18 07:09:24'),
(12, 'Apacer', 'apacer', 'public/brands/2zaDTLOFXzZ6Ob7z2cEltRjls0b7KYmUGrvUfiOj.jpg', 'Apacer  Brand', '2022-08-18 04:19:06', '2022-08-18 07:09:53'),
(13, 'APOLLO', 'apollo', 'public/brands/aCaPfNQVNzJZKGHOJXdeaIjkXMks8FtGkln5HqVu.jpg', 'APOLLO  Brand', '2022-08-18 04:19:21', '2022-08-18 07:10:05'),
(14, 'Apple', 'apple', 'public/brands/ngJhFo1a7jNPztgthfQjqB1uU5ugAG7vJpwrFT2L.jpg', 'Apple Brand', '2022-08-18 04:19:41', '2022-08-18 07:10:30'),
(15, 'ARMOR', 'armor', 'public/brands/eaVvzyyNq60DELq3A4KkCn8nQONDIFAaREaXCxzE.jpg', 'ARMOR  Brand', '2022-08-18 04:19:56', '2022-08-18 07:10:43'),
(16, 'ASRock', 'asrock', 'public/brands/dejrKiUjY4GfzbvB6zOVWIBZGuy0SiJzJdSekshf.jpg', 'ASRock  Brand', '2022-08-18 04:20:12', '2022-08-18 07:11:21'),
(17, 'Asus', 'asus', 'public/brands/juQJyFX8Lgsqj5Fp5O8TZlRo7rmSgjCFO5Ib4sVy.jpg', 'Asus  Brand', '2022-08-18 04:20:30', '2022-08-18 07:11:36'),
(18, 'BenQ', 'benq', 'public/brands/bdMJrvX3UOxgkpnkqayIEmne2ceNfY12Huis3AnF.jpg', 'BenQ  Brand', '2022-08-18 04:20:44', '2022-08-18 04:20:44'),
(19, 'BIOSTAR', 'biostar', 'public/brands/XvI0psH3QGGucp7dwMmawrYp4MTnPW0HeQjwPYAQ.png', 'BIOSTAR  Brand', '2022-08-18 04:21:01', '2022-08-18 04:21:01'),
(20, 'Boya', 'boya', 'public/brands/y7M9DBHSVPQK01vsBkT0kaufcKUYfU0XxNENbBpC.png', 'Boya  Brand', '2022-08-18 04:21:31', '2022-08-18 04:21:31'),
(21, 'Brother', 'brother', 'public/brands/qjcJOl8MQSJWOjofsleGdOTCorzcIkfRkJFQYfFm.png', 'Brother Brand', '2022-08-18 04:21:53', '2022-08-18 04:21:53'),
(22, 'Canon', 'canon', 'public/brands/ZFnzryxTSolSxyokYycXR6X2gWQM5efxTAeFAFVb.png', 'Canon Brand', '2022-08-18 04:22:14', '2022-08-18 07:12:22'),
(23, 'CASIO', 'casio', 'public/brands/l7JzRxm6eRADtKelEFydNJ6tptyAtQjgFnzZUkI3.jpg', 'CASIO Brand', '2022-08-18 04:22:28', '2022-08-18 04:22:28'),
(24, 'Cisco', 'cisco', 'public/brands/NMUhZ7y893eziseBKxQrP1NgevUsQLYgOnVencgc.jpg', 'Cisco Brand', '2022-08-18 04:22:41', '2022-08-18 07:12:59'),
(25, 'Colorful', 'colorful', 'public/brands/uhh7g40b4opnHtHoLucKog8p7EeNsFAtsjYo4zeE.jpg', 'Colorful Brand', '2022-08-18 04:23:04', '2022-08-18 07:13:09'),
(26, 'Cooler Master', 'cooler-master', 'public/brands/wFqqPha9ZoeYMbjQU7XdIA314ygUGoPlxhDaj5op.jpg', 'Cooler Master Brand', '2022-08-18 04:23:25', '2022-08-18 04:23:25'),
(27, 'Corsair', 'corsair', 'public/brands/CrGh6K5wMlPLel7Fg5LCOA3xUo4X87oUEwlBRZ3t.png', 'Corsair Brand', '2022-08-18 04:23:47', '2022-08-18 04:23:47'),
(28, 'Cougar', 'cougar', 'public/brands/NDKAGZPac8AnzfcFJ9H1RyLx04RTFudADfTxPJ03.jpg', 'Cougar Brand', '2022-08-18 04:24:01', '2022-08-18 07:13:36'),
(29, 'CRYORIG', 'cryorig', 'public/brands/V1TGgwDqpv1EVKO0xsYLnlDh3NmLAOHv5X5MBu1i.jpg', 'CRYORIG Brand', '2022-08-18 04:24:15', '2022-08-18 04:24:15'),
(30, 'Dahua', 'dahua', 'public/brands/mEBkIxh4yaqgVbJ9nNSvyFErpp6IxVefSIye2V1C.png', 'Dahua Brand', '2022-08-18 04:24:40', '2022-08-18 04:24:40'),
(31, 'Dell', 'deli', 'public/brands/o4VmEPkgE50DUuXlPeWgcwVEaQogsw3quCsidTDa.jpg', 'Dell Brand', '2022-08-18 04:25:06', '2022-08-28 03:07:20'),
(32, 'D-Link', 'd-link', 'public/brands/EA7ZcTXG65rJu6wDPwIXrvs27Chuzs6asNyMdk2T.jpg', 'D-Link Brand', '2022-08-18 04:25:22', '2022-08-18 07:13:53'),
(33, 'EKEN', 'eken', 'public/brands/Sk3oIlFK6K3sci8eG1cmwg4NeqeGBdF9lYEJpbad.jpg', 'EKEN Brand', '2022-08-18 04:25:39', '2022-08-18 04:25:39'),
(34, 'EKWB', 'ekwb', 'public/brands/jt7epmQ9OQ7NlSUAZRBHrkpQdRIahonnwpxwISsQ.png', 'EKWB Brand', '2022-08-18 04:26:12', '2022-08-18 04:26:12'),
(35, 'EPSON', 'epson', 'public/brands/YS6Zd6wVr5EzOByekrivtLhsK9UPV8b1VUOobp8w.jpg', 'EPSON Brand', '2022-08-18 04:26:37', '2022-08-18 07:14:30'),
(36, 'Fujifilm', 'fujifilm', 'public/brands/lbqkg1TDDLBAVujOvczAMIKkSyl0x0ZMVca6g0LV.jpg', 'Fujifilm Brand', '2022-08-18 04:26:53', '2022-08-18 07:14:36'),
(37, 'G.Skill', 'g-skill', 'public/brands/JsPcvlkUc5kPwFYYfflNoVyhp7ZCvX4pVZj3OkH1.jpg', 'G.Skill Brand', '2022-08-18 04:27:33', '2022-08-18 04:27:33'),
(38, 'Galax', 'galax', 'public/brands/PTpOSqB5Kl8AaXbCkwjodFeR1IFHbjLtTKhFRL40.jpg', 'Galax Brand', '2022-08-18 04:27:52', '2022-08-18 07:14:42'),
(39, 'Gamdias', 'gamdias', 'public/brands/t9m0aLHwZAJPB16eeVA2OoOcwStYM41hC0CHhZU5.jpg', 'Gamdias Brand', '2022-08-18 04:28:14', '2022-08-18 07:14:49'),
(40, 'GeIL', 'geil', 'public/brands/YdqwcLWk4kXC0ZaU4IrLDzsyNbkPN6cTcSaW3rqW.png', 'GeIL Brand', '2022-08-18 04:28:32', '2022-08-18 04:28:32'),
(41, 'GENERAL', 'general', 'public/brands/vlr8lOJ3wJ00sXQDkpS5cpBeCuj4Ek4aedYF3itx.jpg', 'GENERAL  Brand', '2022-08-18 04:28:48', '2022-08-18 07:15:33'),
(42, 'Gigabyte', 'gigabyte', 'public/brands/CGUQSafqknZfpCssDa2UfarmAuFYlF3ix577yBFT.jpg', 'Gigabyte Brand', '2022-08-18 04:29:14', '2022-08-18 07:15:38'),
(43, 'GoPro', 'gopro', 'public/brands/z5n9nnKBXS1vxgxTidV7mLFe2tseIlM5bpps9tym.jpg', 'GoPro Brand', '2022-08-18 04:29:33', '2022-08-18 07:15:43'),
(44, 'Gree', 'gree', 'public/brands/b5PddDaIo2Zy1UbbpYdUWqVmmMOD6rESIF5FDmDU.png', 'Gree Brand', '2022-08-18 04:29:50', '2022-08-18 07:15:50'),
(45, 'G-Technology', 'g-technology', 'public/brands/Rq7uDe1sdb8ruDRMelAXmEnwBQCUoiG3c9Zrd8yI.png', 'G-Technology Brand', '2022-08-18 04:30:03', '2022-08-18 04:30:03'),
(46, 'Hikvision', 'hikvision', 'public/brands/FeF4yMVPC2hE3LEJcFSETFv7i8Iczq2MPxQ5GMO8.png', 'Hikvision Brand', '2022-08-18 04:30:19', '2022-08-18 04:30:19'),
(47, 'HP', 'hp', 'public/brands/G9xYhdN7JNfQI0CnRdOUI3T3xVyXojy6gU5JDeUg.jpg', 'HP Brand', '2022-08-18 04:30:32', '2022-08-18 07:16:16'),
(48, 'Huawei', 'huawei', 'public/brands/tC4D475hyPxmYibL904Rq7IQTez5fCJCSNswupie.jpg', 'Huawei Brand', '2022-08-18 04:30:45', '2022-08-18 07:16:21'),
(49, 'Intel', 'intel', 'public/brands/VnVaV4s8DmN6rgbNHnOW37rX8hxOsytHyCh2dqL0.jpg', 'Intel Brand', '2022-08-18 04:30:59', '2022-08-18 07:16:26'),
(50, 'Jovision', 'jovision', 'public/brands/Tz16HNAOuphfci5FzFRzF9YL9KxbTL7vIWmnhT8Q.png', 'Jovision Brand', '2022-08-18 04:31:17', '2022-08-18 04:31:17'),
(51, 'K&F', 'k-f', 'public/brands/uwPICtezx6jgW5LRhJSycs1LMdyJsAwr56bDb0iO.png', 'K&F Brand', '2022-08-18 04:31:33', '2022-08-18 04:31:33'),
(52, 'KingFast', 'kingfast', 'public/brands/e2Jwpo5p3lFZKhSPZFteK67qvzA7I6U2uaqbiTIT.png', 'KingFast Brand', '2022-08-18 04:31:55', '2022-08-18 04:31:55'),
(53, 'Kingston', 'kingston', 'public/brands/btnclmO8Uou15UHJFxfOHwktTtssLpfSTBcDom6m.jpg', 'Kingston Brand', '2022-08-18 04:32:12', '2022-08-18 07:17:08'),
(54, 'kwg', 'kwg', 'public/brands/559mETJPFXdLqmIiSjBLTfJQzQkBCX56zVmTtltb.jpg', 'kwg Brand', '2022-08-18 04:32:37', '2022-08-18 07:17:16'),
(55, 'LaCie', 'lacie', 'public/brands/Xl7uAyvbeFLDj57g0C9JNGIPKNKfVCkjq5efamIZ.jpg', 'LaCie Brand', '2022-08-18 04:32:52', '2022-08-18 07:17:21'),
(56, 'Lenovo', 'lenovo', 'public/brands/BUWDTPff2OZBvgw7QeMAgqcvHDDvhT6EQd3XBKKB.jpg', 'Lenovo Brand', '2022-08-18 04:33:06', '2022-08-18 07:17:26'),
(57, 'Lexar', 'lexar', 'public/brands/hXdtogRBbVTgTzvplbRI7giaT1WyAgqvEXlKTHp0.png', 'Lexar Brand', '2022-08-18 04:33:22', '2022-08-18 04:33:22'),
(58, 'LG', 'lg', 'public/brands/DzZaTLRCEVDg88zDbx1I8kUToJ2wDpADfto8iEJO.jpg', 'LG Brand', '2022-08-18 04:33:50', '2022-08-18 07:17:48'),
(59, 'LIAN Li', 'lian-li', 'public/brands/ALc8Z0CsThTDA4in7WKf06RRnMppBRGJ809ED11U.jpg', 'LIAN Li Brand', '2022-08-18 04:34:14', '2022-08-18 07:17:52'),
(60, 'Logitech', 'logitech', 'public/brands/PlOC8UWbKVSf35naNOX91eSHZR05c1J80CuLCDec.png', 'Logitech Brand', '2022-08-18 04:34:31', '2022-08-18 04:34:31'),
(61, 'MaxGreen', 'maxgreen', 'public/brands/LElJloAuJhma0BVjoJ5GZb7zjpbeEeyRfA1ekX82.png', 'MaxGreen Brand', '2022-08-18 04:35:03', '2022-08-18 04:35:03'),
(62, 'Microlab', 'microlab', 'public/brands/5LdFXsZ5NWgozIlk9KymESAEFNkJvket86FX7cEA.jpg', 'Microlab Brand', '2022-08-18 04:35:42', '2022-08-18 04:35:42'),
(63, 'Microsoft', 'microsoft', 'public/brands/zqwAbeXsElPXHzqRxAZQmKDHAtnt952QSNp4cA1d.jpg', 'Microsoft Brand', '2022-08-18 04:36:26', '2022-08-18 04:36:26'),
(64, 'Midea', 'midea', 'public/brands/2h0XQ1lazLeCBZb45C9J9dst4HNMeveoHFugw5xS.png', 'Midea Brand', '2022-08-18 04:37:08', '2022-08-18 04:37:08'),
(65, 'MSI', 'msi', 'public/brands/Ohrb0gYQUqjZCLK8pLxVaQGN6m5unWI67tDwXWFZ.jpg', 'MSI Brand', '2022-08-18 04:38:50', '2022-08-18 04:38:50'),
(66, 'Nikon', 'nikon', 'public/brands/lyaquq8vacQqWtkHPAHvDP2Tg6Fl7E4lB5CISkdK.png', 'Nikon Brand', '2022-08-18 04:39:07', '2022-08-18 07:18:47'),
(67, 'Noctua', 'noctua', 'public/brands/fdlfRv2XEW1fzt0jh3fv3EoSrAMfDcW8aGU25thq.jpg', 'Noctua Brand', '2022-08-18 04:39:53', '2022-08-18 04:39:53'),
(68, 'NZXT', 'nzxt', 'public/brands/cSOLd6ZLHpOrUmpXeDnCK2QQDZTk0bIBNSzp5fbi.jpg', 'NZXT Brand', '2022-08-18 04:40:09', '2022-08-18 07:18:51'),
(69, 'Onspot', 'onspot', 'public/brands/q1kQaAS2razrAXPEm1mHUvmy0gveuFE8UoQYzum5.png', 'Onspot Brand', '2022-08-18 04:40:24', '2022-08-18 04:40:24'),
(70, 'Palit', 'palit', 'public/brands/D16EnJwTvjtvZOsJhoqSeeRBxkbqynnMIvMgr82C.jpg', 'Palit Brand', '2022-08-18 04:40:48', '2022-08-18 07:18:56'),
(71, 'Panasonic', 'panasonic', 'public/brands/VIy12zOEMTPF7WBN6JsCcg8cCVPFfJ4NMWvUVOEQ.png', 'Panasonic Brand', '2022-08-18 04:41:07', '2022-08-18 04:41:07'),
(72, 'Patriot', 'patriot', 'public/brands/XK4ruZcfoMd9ws80Fd3yLx0uOohpGefOHbTB5Lb5.jpg', 'Patriot Brand', '2022-08-18 04:41:22', '2022-08-18 07:20:13'),
(73, 'PHANTEKS', 'phanteks', 'public/brands/EjmeDUP0FQcRR72m7RuWYtC3qdh7JsPsxIKXgwly.jpg', 'PHANTEKS Brand', '2022-08-18 04:41:57', '2022-08-18 07:20:19'),
(74, 'Philips', 'philips', 'public/brands/KDUrQ98SFqjlJA9kodTvI2H1AD0UXP4EreFmOxNG.jpg', 'Philips Brand', '2022-08-18 04:42:13', '2022-08-18 07:20:27'),
(75, 'PNY', 'pny', 'public/brands/P9znSPBn1CNfo3bJ657o6NipXAOtNTPErU15dyH5.jpg', 'PNY Brand', '2022-08-18 04:42:26', '2022-08-18 04:42:26'),
(76, 'Razer', 'razer', 'public/brands/6ywWO4iiGkFXLtjMDj9VKykqdNIIm9Oi8SQGkYvs.jpg', 'Razer Brand', '2022-08-18 04:44:10', '2022-08-18 07:21:00'),
(77, 'Realme', 'realme', 'public/brands/5EgYDjIzehTgODRI6smDEWrdItJgUvp3yfvcFijT.jpg', 'Realme Brand', '2022-08-18 04:44:24', '2022-08-18 07:21:05'),
(78, 'Redragon', 'redragon', 'public/brands/dcbIBvRfEfbZwcWnIFYSK6Y7qwlXR7zEk41WPEPz.jpg', 'Redragon Brand', '2022-08-18 04:44:39', '2022-08-18 07:21:10'),
(79, 'Samsung', 'samsung', 'public/brands/PRjWzZPea8NCZ9cqkOp7nvUegl6G7WQE0n1MUuDD.jpg', 'Samsung Brand', '2022-08-18 04:44:53', '2022-08-18 07:21:35'),
(80, 'SanDisk', 'sandisk', 'public/brands/cUUBgTznuUTpTsUSvvSRFXsdf9msJMnDgjoLgcDH.png', 'SanDisk Brand', '2022-08-18 04:45:08', '2022-08-18 04:45:08'),
(81, 'Santak', 'santak', 'public/brands/HG6sXcMcS3Nrn9rNIQTj4ULPUJKhOs4GcVVFNA5X.png', 'Santak Brand', '2022-08-18 04:45:23', '2022-08-18 04:45:23'),
(82, 'Sapphire', 'sapphire', 'public/brands/hccF4nVvY2cHXeOnNqIla4gaeNniK4845e23GxEQ.jpg', 'Sapphire Brand', '2022-08-18 04:45:37', '2022-08-18 04:45:37'),
(83, 'Silicon Power', 'silicon-power', 'public/brands/IAOm1XMTQHUwLKSrxj30hoCQYFX6mF3iWyqygdU3.jpg', 'Silicon Power Brand', '2022-08-18 04:45:51', '2022-08-18 07:22:02'),
(84, 'Sony', 'sony', 'public/brands/Ph3AhwKb7GkkuTOvoBDL9nMjukf5RQHxSgrXQGhU.jpg', 'Sony Brand', '2022-08-18 04:46:03', '2022-08-18 07:22:07'),
(85, 'Team', 'team', 'public/brands/AVgqpx6qyMuq2L73UVRlT1yq615ZaRjFAO1sVQtr.jpg', 'Team Brand', '2022-08-18 04:46:18', '2022-08-18 07:24:52'),
(86, 'Tecnoware', 'tecnoware', 'public/brands/wyACVXvgHOhQcHAUk203kH9ocqGclzIcezEMUYIK.png', 'Tecnoware Brand', '2022-08-18 04:46:30', '2022-08-18 04:46:30'),
(87, 'Tenda', 'tenda', 'public/brands/B55W4AcllsQHOMvSsh3gXlCekuKzufNQxC07q3dm.png', 'Tenda Brand', '2022-08-18 04:46:42', '2022-08-18 04:46:42'),
(88, 'Teutons', 'teutons', 'public/brands/z3ZzuC9GM2tPSQSBnqMfca2X6bv1DDN8OciOenqv.jpg', 'Teutons Brand', '2022-08-18 04:46:57', '2022-08-18 07:22:52'),
(89, 'Thermaltake', 'thermaltake', 'public/brands/uvjsIJZvaasjHB3HB7bewYPnCKIYRmsrNBizspc9.png', 'Thermaltake Brand', '2022-08-18 04:47:12', '2022-08-18 04:47:12'),
(90, 'TOTOLINK', 'totolink', 'public/brands/9fnmA36xKLcXBmDKNURdYjUIP2GGYrrmyVHR1wOv.jpg', 'TOTOLINK Brand', '2022-08-18 04:47:32', '2022-08-18 04:47:32'),
(91, 'TP-Link', 'tp-link', 'public/brands/vF1IcM83guAQskTTaNrAos5fnPNqw7zh8vX3UCXM.jpg', 'TP-Link Brand', '2022-08-18 04:47:59', '2022-08-18 04:47:59'),
(92, 'Transcend', 'transcend', 'public/brands/sqHLFmBdSpKQnd0u4LytqavCA751PUJx3h3TiFCz.jpg', 'Transcend Brand', '2022-08-18 04:48:13', '2022-08-18 07:23:26'),
(93, 'TVT', 'tvt', 'public/brands/GvbYzK1WidD1LAqXjeRtoviSgEcwnfBQ1rKbcq2w.png', 'TVT Brand', '2022-08-18 04:49:07', '2022-08-18 04:49:07'),
(94, 'Twinmos', 'twinmos', 'public/brands/5dRcu14kYly7meMN101HvWcHH3LLg0zZPngtF5AG.jpg', 'Twinmos Brand', '2022-08-18 04:49:20', '2022-08-18 07:23:31'),
(95, 'Viewsonic', 'viewsonic', 'public/brands/rpVXEoE9DkRhxwCTcbcQUbtm4y9A7VZ460X3NIGj.jpg', 'Viewsonic Brand', '2022-08-18 04:49:32', '2022-08-18 04:49:32'),
(96, 'Walton', 'walton', 'public/brands/J50Nzce94hL5YKFORYULkce9Np9gCaRczp4b5V4u.png', 'Walton Brand', '2022-08-18 04:49:44', '2022-08-18 04:49:44'),
(97, 'Western Digital', 'western-digital', 'public/brands/rC5lDG10vGLe7j2ELlrjWqBRYnNYVefxYWX9fExJ.jpg', 'Western Digital Brand', '2022-08-18 04:50:07', '2022-08-18 04:50:07'),
(98, 'XFX', 'xfx', 'public/brands/MOkNx6Lbk3fXLDFLcBFsIU5E6qHWyH16KIpePWX7.jpg', 'XFX Brand', '2022-08-18 04:50:24', '2022-08-18 04:50:24'),
(99, 'Xiaomi', 'xiaomi', 'public/brands/qkRY6xBFt7nm536NvCd9ISUlcjEu9tBXScN0zkdI.png', 'Xiaomi Brand', '2022-08-18 04:50:42', '2022-08-18 04:50:42'),
(100, 'ZADAK', 'zadak', 'public/brands/2ndnRnjtUuPeFXeCs8QQxb4haCbya9O5Ta7HAoPt.png', 'ZADAK Brand', '2022-08-18 04:50:57', '2022-08-18 04:50:57'),
(101, 'ZIGOR', 'zigor', 'public/brands/5hidDNHwrCDq2PqlJu0BWsrYXSnefco79p2XyI9K.jpg', 'ZIGOR Brand', '2022-08-18 04:51:15', '2022-08-18 04:51:15'),
(102, 'ZKTeco', 'zkteco', 'public/brands/L7iponyuvrxs5IDxDeMoRmegL9muCcSKbBK8TPFu.jpg', 'ZKTeco Brand', '2022-08-18 04:51:32', '2022-08-18 07:25:08'),
(103, 'ZOTAC', 'zotac', 'public/brands/tfIeZPGW80ZKVgM6Q1gyDs3d1wqWzNdn3N8lOjBB.jpg', 'ZOTAC Brand', '2022-08-18 04:51:48', '2022-08-18 07:25:14'),
(104, 'Zyxel', 'zyxel', 'public/brands/75JnHpMgIqWJOZ5IimI8d57JYGx9I82ebR7MsebA.jpg', 'Zyxel Brand', '2022-08-18 04:52:11', '2022-08-18 07:24:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
