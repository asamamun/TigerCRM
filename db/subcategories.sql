-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 09:52 PM
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
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `slug`, `category_id`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'apple', 1, 'public/subcategories/YCh7qBvBBI7OLiaAvyUoYGiEqOlK5TIbbXEM2ppB.jpg', 'Apple Subcategory', '2022-08-11 04:00:00', '2022-08-12 13:50:13'),
(2, 'Asus', 'asus', 1, 'public/subcategories/hhTcGAffMjYkTisrNiTlj8FKZwwRYSTRfKaL4Q3L.jpg', 'Asus Subcategory', '2022-08-11 04:00:49', '2022-08-12 13:50:14'),
(3, 'HP', 'hp', 1, 'public/subcategories/egKVNmWAtwUmf26kjuA7lOyOx3SGoWZ5WtQSb2fx.jpg', 'HP Subcategory', '2022-08-11 04:01:45', '2022-08-12 13:50:14'),
(4, 'Lenovo', 'lenovo', 1, 'public/subcategories/35vNXOQDZRgdVcWGMCpeDeg0tcbxmjGPCno4fIKc.jpg', 'Lenovo Subcategory', '2022-08-11 04:02:17', '2022-08-12 13:50:14'),
(5, 'Walton', 'walton', 1, 'public/subcategories/JGLOAsNqgA0S85tsIfLN9Zj5Y6BkFlhA9FZ5L5xy.jpg', 'Walton Subcategory', '2022-08-11 04:02:56', '2022-08-12 13:50:14'),
(6, 'Dell', 'dell', 1, 'public/subcategories/IpZXBgfZmvQiNmyxce6cxmDraEtvmVxWiSFNYxzf.jpg', 'Dell Subcategory', '2022-08-11 04:03:25', '2022-08-12 13:50:14'),
(7, 'Acer', 'acer', 1, 'public/subcategories/gN2paiAr2MUflcUd5orzpuhCeewQPhDj1tr5CfIJ.jpg', 'Acer Subcategory', '2022-08-11 04:04:09', '2022-08-12 13:50:14'),
(8, 'Apple', 'apple-2', 2, 'public/subcategories/RzgYwe52kYMGfGTOuUUwhiYJprBeKP5MkBV8Wbta.jpg', 'Apple Subcategory', '2022-08-11 04:05:09', '2022-08-12 13:50:14'),
(9, 'Asus', 'asus-2', 2, 'public/subcategories/P03VvHY9Ktw1kLSz3VBFsV8LiiwrzUfHiADhBlgB.jpg', 'Asus Subcategory', '2022-08-11 04:05:43', '2022-08-12 13:50:14'),
(10, 'HP', 'hp-2', 2, 'public/subcategories/kIvz0z0oL51EtvUf2BwpMYVxSxmEq2pXpLph0FGh.jpg', 'HP Subcategory', '2022-08-11 04:06:39', '2022-08-12 13:50:14'),
(11, 'Lenovo', 'lenovo-2', 2, 'public/subcategories/LHeK7OSkfF1RvXoyBhIAY67tOTbzwI8G6pYXcj1k.jpg', 'Lenovo Subcategory', '2022-08-11 04:07:13', '2022-08-12 13:50:14'),
(12, 'Walton', 'walton-2', 2, 'public/subcategories/mCkOL1eAnRd9YvT2JSPhqICOpHCftgemDfLrBbCl.jpg', 'Walton Subcategory', '2022-08-11 04:07:41', '2022-08-12 13:50:14'),
(13, 'Dell', 'dell-2', 2, 'public/subcategories/CGVVRwsq0nEsPXu26RkSouYthmMVtbf0wXmRw25e.jpg', 'Dell Subcategory', '2022-08-11 04:08:15', '2022-08-12 13:50:14'),
(14, 'MSI', 'msi', 2, 'public/subcategories/pwQEKlFMYbW7nAG4IiDRveee5yeuuveei535NK7Y.jpg', 'MSI Subcategory', '2022-08-11 04:08:40', '2022-08-12 13:50:14'),
(15, 'Acer', 'acer-2', 2, 'public/subcategories/iSVV5AJJHHtQZUtEfcaSIZOVg180UwF39WcwDSXR.jpg', 'Acer Subcategory', '2022-08-11 04:09:03', '2022-08-12 13:50:14'),
(16, 'Gigabyte', 'gigabyte', 2, 'public/subcategories/JKO7vNWcTo97AjdCh8OXLQMZEfkaIh735E9O7A1E.jpg', 'Gigabyte Subcategory', '2022-08-11 04:09:40', '2022-08-12 13:50:14'),
(17, 'Huawei', 'huawei', 2, 'public/subcategories/0BtIzuKRlNzMeOJyHmWYpolwJkiUH6x1zyCuLrUU.jpg', 'Huawei Subcategory', '2022-08-11 04:10:11', '2022-08-12 13:50:14'),
(18, 'Xiaomi', 'xiaomi', 2, 'public/subcategories/XOf5UKbHpTg24jUkvZklSP1Z6ZS3Uwgjhx5Ju8ue.jpg', 'Xiaomi Subcategory', '2022-08-11 04:10:32', '2022-08-12 13:50:14'),
(19, 'Samsung', 'samsung', 2, 'public/subcategories/Vif7CULCxKnfDOhNqvEeBW1Az1g92bP0Q4xa1KKV.jpg', 'Samsung Subcategory', '2022-08-11 04:10:59', '2022-08-12 13:50:14'),
(20, 'Microsoft', 'microsoft', 2, 'public/subcategories/mdU3rtCELPT5mrHrkeYAH0CKvOPfDAYceDTJbyPi.jpg', 'Microsoft Subcategory', '2022-08-11 04:11:27', '2022-08-12 13:50:14'),
(21, 'Processor', 'processor', 3, 'public/subcategories/0aK5NU6LIbL7Aon3Pv1DfoGRWvFVLmuzrsBgyR9Z.jpg', 'Processor Subcategory', '2022-08-11 04:12:29', '2022-08-12 13:50:14'),
(22, 'Motherboard', 'motherboard', 3, 'public/subcategories/EjJ8nKLdZ5GgYW3MYO8bg2Co92W9hocs5Fmq1FEJ.jpg', 'Motherboard Subcategory', '2022-08-11 04:13:09', '2022-08-12 13:50:14'),
(23, 'Graphics Card', 'graphics-card', 3, 'public/subcategories/H6kQnsd1bPH0HHkNyRwLdbrabGMkzJbadcw16IsJ.jpg', 'Graphics Card Subcategory', '2022-08-11 04:13:32', '2022-08-12 13:50:14'),
(24, 'SSD', 'ssd', 3, 'public/subcategories/xGRjQDDFuMqE7fsZHNlXPBGFzYN6N6O9NME5Q2GG.jpg', 'SSD Subcategory', '2022-08-11 04:13:56', '2022-08-12 13:50:15'),
(25, 'HDD', 'hdd', 3, 'public/subcategories/3iD4EOS08uotsKGitMfTqKY58cX92hca6KqWuz7R.jpg', 'HDD Subcategory', '2022-08-11 04:14:24', '2022-08-12 13:50:15'),
(26, 'RAM', 'ram', 3, 'public/subcategories/XxGHrkLbRq1Bx3QfTNveDcUbtdVeiqR28byFmqaB.jpg', 'RAM Subcategory', '2022-08-11 04:14:57', '2022-08-12 13:50:15'),
(27, 'Casing', 'casing', 3, 'public/subcategories/D8qPsumUr2BOhUvo6IUOuCtqk4JkQsISphnVxC3W.jpg', 'Casing Subcategory', '2022-08-11 04:15:21', '2022-08-12 13:50:15'),
(28, 'CPU Cooler', 'cpu-cooler', 3, 'public/subcategories/p0PkHleOSlsnqQQ1mLME2QeurLsyXymAaSILYKQ5.jpg', 'CPU Cooler Subcategory', '2022-08-11 04:16:27', '2022-08-12 13:50:15'),
(29, 'Power Supply', 'power-supply', 3, 'public/subcategories/9beqrW3vKDdrmGbCh7gY9OPECO2Z4ujQP0cQCSgX.jpg', 'Power Supply Subcategory', '2022-08-11 04:17:03', '2022-08-12 13:50:15'),
(30, 'Portable HDD', 'portable-hdd', 3, 'public/subcategories/0XXUsOr2n1y81KzkltVKHVPyC3l5ajQDhpRAHIq7.jpg', 'Portable HDD Subcategory', '2022-08-11 04:18:10', '2022-08-12 13:50:15'),
(31, 'Portable SSD', 'portable-ssd', 3, 'public/subcategories/33bk116E3DXaSdT7SSaRkJEjS8VGrEgeLbXwsk7P.jpg', 'Portable SSD Subcategory', '2022-08-11 04:18:40', '2022-08-12 13:50:15'),
(32, 'Asus', 'asus-3', 4, 'public/subcategories/uxN2cOm8EsUtavY6YxYHQ5qhXLLxQK52St2uDctb.jpg', 'Asus Subcategory', '2022-08-11 04:19:21', '2022-08-12 13:50:15'),
(33, 'HP', 'hp-3', 4, 'public/subcategories/ob8wV2kSEayr4TYa2AGzKwMCLPjF6G45Jo2YH2nw.jpg', 'HP Subcategory', '2022-08-11 04:20:20', '2022-08-12 13:50:15'),
(34, 'Dell', 'dell-3', 4, 'public/subcategories/3mRpENMEJb4aZMX5Wp7BBp6fY1qC23VroRbWzpcC.jpg', 'Dell Subcategory', '2022-08-11 04:20:45', '2022-08-12 13:50:15'),
(35, 'Razer', 'razer', 4, 'public/subcategories/WPr1V0IzfdsRpaxpbsQTMQo1OpzXhtIsNRyCo71z.jpg', 'Razer Subcategory', '2022-08-11 04:21:15', '2022-08-12 13:50:15'),
(36, 'BenQ', 'benq', 4, 'public/subcategories/AoinAQtxCY8bcKKfWx9g8ziTTJ24PIzyUkxo5Tbf.jpg', 'BenQ Subcategory', '2022-08-11 04:21:40', '2022-08-12 13:50:15'),
(37, 'LG', 'lg', 4, 'public/subcategories/aXoSoIXghab36Gl45TaiHIyLvc7vGh8yWDxg7mxP.jpg', 'LG Subcategory', '2022-08-11 04:22:01', '2022-08-12 13:50:15'),
(38, 'MSI', 'msi-2', 4, 'public/subcategories/JU8tYrnLyuplfdALeEARTX6fuoSZG6snktyIApJI.jpg', 'MSI Subcategory', '2022-08-11 04:22:29', '2022-08-12 13:50:15'),
(39, 'Samsung', 'samsung-2', 4, 'public/subcategories/CFJSYpkry5JtoWsknlLqIEJtpPqwT4YWsoKvOEdm.jpg', 'Samsung Subcategory', '2022-08-11 04:22:55', '2022-08-12 13:50:15'),
(40, 'Viewsonic', 'viewsonic', 4, 'public/subcategories/AHWY80EBxIOy7ZiCxqFnrhx1f23aQx6RRBAsiWAL.jpg', 'Viewsonic Subcategory', '2022-08-11 04:23:22', '2022-08-12 13:50:15'),
(41, 'Acer', 'acer-3', 4, 'public/subcategories/h2VnzYOKaxbkeccSOLknO0JMaHqqorTYuIj3EYpE.jpg', 'Acer Subcategory', '2022-08-11 04:23:54', '2022-08-12 13:50:15'),
(42, 'Huawei', 'huawei-2', 4, 'public/subcategories/eiPwIqWmP6EeqXaZFVce7otwfDzTnUka5NCh7MUt.jpg', 'Huawei Subcategory', '2022-08-11 04:24:23', '2022-08-12 13:50:16'),
(43, 'Gigabyte', 'gigabyte-2', 4, 'public/subcategories/B12WG7aWJAepUIU36JdZugKlV6PTObkYfeKSmn5H.jpg', 'Gigabyte Subcategory', '2022-08-11 04:24:46', '2022-08-12 13:50:16'),
(44, 'Xiaomi', 'xiaomi-2', 4, 'public/subcategories/wYIPgru3QNDWmEAz5a3d0iqLwCIYeJftb2eoiWsL.jpg', 'Xiaomi Subcategory', '2022-08-11 04:25:09', '2022-08-12 13:50:16'),
(45, 'Lenovo', 'lenovo-3', 4, 'public/subcategories/qH15O6TT0DC54XL2zsxAVvbypibGwux7fVBDiaKy.jpg', 'Lenovo Subcategory', '2022-08-11 04:26:28', '2022-08-12 13:50:16'),
(46, 'Philips', 'philips', 4, 'public/subcategories/vzif5VPUjx4sGJzGJCy5fq7d0RmXt5yxpehtT600.jpg', 'Philips Subcategory', '2022-08-11 04:26:50', '2022-08-12 13:50:16'),
(47, 'Walton', 'walton-3', 4, 'public/subcategories/vr13Ia8kFYz8QqbvYxmXn7YkZtzQan7Ld4n2QAc2.jpg', 'Walton Subcategory', '2022-08-11 04:27:15', '2022-08-12 13:50:16'),
(48, 'Apple', 'apple-3', 4, 'public/subcategories/cRHmq7xC2h3rJCsWfTEWVv6t9HrEXZDuLBZWxDKH.jpg', 'Apple Subcategory', '2022-08-11 04:27:44', '2022-08-12 13:50:16'),
(49, 'MaxGreen', 'maxgreen', 5, 'public/subcategories/Kg48TT8Ntm0aJk1My8rfMOelfjweKgNIHBjoANNh.jpg', 'MaxGreen Subcategory', '2022-08-11 04:28:13', '2022-08-12 13:50:16'),
(50, 'Santak', 'santak', 5, 'public/subcategories/nWw2gt5L6lkWeTPX5fjzHKbAiL6fwuWSLr9udfzY.jpg', 'Santak Subcategory', '2022-08-11 04:28:39', '2022-08-12 13:50:16'),
(51, 'Tecnoware', 'tecnoware', 5, 'public/subcategories/AHR72WrxETbQYgIrFEh0gPTK4K53BfrPQYw8xbAQ.jpg', 'Tecnoware Subcategory', '2022-08-11 04:29:03', '2022-08-12 13:50:16'),
(52, 'ZIGOR', 'zigor', 5, 'public/subcategories/hKHTRCiZZrrzpoDoC65bHsiEPLbdg7csTmyE2zFT.jpg', 'ZIGOR Subcategory', '2022-08-11 04:29:23', '2022-08-12 13:50:16'),
(53, 'Apollo', 'apollo', 5, 'public/subcategories/CvXGdEuvQNhKGmm9zKjJoG9DSDwmKDUckWwEwL7V.jpg', 'Apollo Subcategory', '2022-08-11 04:30:28', '2022-08-12 13:50:16'),
(54, 'Apple', 'apple-4', 6, 'public/subcategories/AU4ZMh34y2s8Mn7jKfPaakeuYbD9sSQfqexCE66Z.jpg', 'Apple Subcategory', '2022-08-11 04:30:56', '2022-08-12 13:50:16'),
(55, 'Amazon', 'amazon', 6, 'public/subcategories/kbEzs8gb5YaL6lIZzrpWmjXLxwMof8pqZ2JjbJhn.jpg', 'Amazon Subcategory', '2022-08-11 04:31:20', '2022-08-12 13:50:16'),
(56, 'Lenovo', 'lenovo-4', 6, 'public/subcategories/LCrH6JjZckhreqhB8PkpfwRnVqsXsWdTHJ9KRKZa.jpg', 'Lenovo Subcategory', '2022-08-11 04:31:47', '2022-08-12 13:50:16'),
(57, 'Samsung', 'samsung-3', 6, 'public/subcategories/5YA343UrhO6MPr0nOX6WDzsCZJs0YBLOoAtQkfqA.jpg', 'Samsung Subcategory', '2022-08-11 04:32:11', '2022-08-12 13:50:16'),
(58, 'Realme', 'realme', 6, 'public/subcategories/a6VnEhZjcDfKluZmBcQErw8RYsjrUqar2OPTn4zE.jpg', 'Realme Subcategory', '2022-08-11 04:32:37', '2022-08-12 13:50:16'),
(59, 'Xiaomi', 'xiaomi-3', 6, 'public/subcategories/CGtqnDOUfPhevWFxiBUq4c305KvCWy5mW35l188B.jpg', 'Xiaomi Subcategory', '2022-08-11 04:33:06', '2022-08-12 13:50:17'),
(60, 'Walton', 'walton-4', 6, 'public/subcategories/Zk15tcS3cNOx1PsxmpqO4zRnIVye0at6wuUO5qh6.jpg', 'Walton Subcategory', '2022-08-11 04:33:36', '2022-08-12 13:50:17'),
(61, 'Huawei', 'huawei-3', 6, 'public/subcategories/KLUbOeLmtYnsFsM6gbvIrSqr7EGDx1xs7FRN51GT.jpg', 'Huawei Subcategory', '2022-08-11 04:34:00', '2022-08-12 13:50:17'),
(62, 'Binding Machine', 'binding-machine', 7, 'public/subcategories/4v1JcRlTfYHw775Xcu6LMilhQckjuEtvs24fBaqU.jpg', 'Binding Machine Subcategory', '2022-08-11 05:35:38', '2022-08-12 13:50:17'),
(63, 'Cartridge', 'cartridge', 7, 'public/subcategories/VnQnNNsk5fj6RdUaXLOUfJfMNB1rt9HEykzcyrOI.jpg', 'Cartridge Subcategory', '2022-08-11 05:36:10', '2022-08-12 13:50:17'),
(64, 'Ink Bottle', 'ink-bottle', 7, 'public/subcategories/WScWHcjaW656XmkClgFxu2RTtkYG2x6WqPGYXZQ3.jpg', 'Ink Bottle Subcategory', '2022-08-11 05:36:35', '2022-08-12 13:50:17'),
(65, 'Money Counting Machine', 'money-counting-machine', 7, 'public/subcategories/Y3hgPTRByLOM6nIy3u6u8q0FUeabBJO1jclRZDf5.jpg', 'Money Counting Machine Subcategory', '2022-08-11 05:36:55', '2022-08-12 13:50:17'),
(66, 'Printer Drum', 'printer-drum', 7, 'public/subcategories/Oe3aKAZzth1Xq1F9WlE8XqKLMFbpYRDxDrxJgAxT.jpg', 'Printer Drum Subcategory', '2022-08-11 05:37:28', '2022-08-12 13:50:17'),
(67, 'Printer', 'printer', 7, 'public/subcategories/3ptBxULxymKYh05ZRJAGk683cBmqlVlZKWm5d9xy.jpg', 'Printer Subcategory', '2022-08-11 05:37:50', '2022-08-12 13:50:17'),
(68, 'Projector', 'projector', 7, 'public/subcategories/ljRAqlFMyq3Z2DR7I9vofamWx2IJo5SKxuLBp64K.jpg', 'Projector Subcategory', '2022-08-11 05:38:12', '2022-08-12 13:50:17'),
(69, 'Ribbon', 'ribbon', 7, 'public/subcategories/faWS3TozuIW1Xdp6aIkLPT7KhCyrat2j0I15oQ77.jpg', 'Ribbon Subcategory', '2022-08-11 05:38:36', '2022-08-12 13:50:17'),
(70, 'Scanner', 'scanner', 7, 'public/subcategories/IGlfal5ri2JZxhM7X4UaQpIxiJdZ9RxHa8KcZunY.jpg', 'Scanner Subcategory', '2022-08-11 05:38:54', '2022-08-12 13:50:17'),
(71, 'Telephone Set', 'telephone-set', 7, 'public/subcategories/ZTd2VXEdln1J2VCo257qauhwVLm9Af4hhsiHZ9xG.jpg', 'Telephone Set Subcategory', '2022-08-11 05:39:22', '2022-08-12 13:50:17'),
(72, 'Toner', 'toner', 7, 'public/subcategories/nYcb81g5Bhfg2ExPsQkiBEN7Z8sgD5dReEvAsX2p.jpg', 'Toner Subcategory', '2022-08-11 05:40:02', '2022-08-12 13:50:17'),
(73, 'Action Camera', 'action-camera', 8, 'public/subcategories/MK5kgLPoTzDYAfhkUNfWHTojxuNPxZlP5sgpJX4m.jpg', 'Action Camera Subcategory', '2022-08-11 05:40:53', '2022-08-12 13:50:17'),
(74, 'Camera Accessories', 'camera-accessories', 8, 'public/subcategories/Ply3ibbbNly9ThzkpWSadjbOK44wBSzw8YRiaj6l.jpg', 'Camera Accessories Subcategory', '2022-08-11 05:41:18', '2022-08-12 13:50:17'),
(75, 'Camera Lenses', 'camera-lenses', 8, 'public/subcategories/VVwetUHGgvuzWyK9bDdvlV5qTyuZglEEpJqL1eFZ.jpg', 'Camera Lenses Subcategory', '2022-08-11 05:41:40', '2022-08-12 13:50:17'),
(76, 'Camera Tripod', 'camera-tripod', 8, 'public/subcategories/pC8NfRY0jJI77GFKJ89VraQc8rrwLCz1mh0DY70q.jpg', 'Camera Tripod Subcategory', '2022-08-11 05:42:03', '2022-08-12 13:50:17'),
(77, 'DSLR', 'dslr', 8, 'public/subcategories/gV0JkRLHD9P4Gu7CXPZ2H23R7nJrMGBUlpSY70Fv.jpg', 'DSLR Subcategory', '2022-08-11 05:42:25', '2022-08-12 13:50:17'),
(78, 'Handycam', 'handycam', 8, 'public/subcategories/FtyO20XDl83mCWVcpEiFJa1dse1yu4wlFZaMb2oR.jpg', 'Handycam Subcategory', '2022-08-11 05:42:51', '2022-08-12 13:50:17'),
(79, 'Mirorless Camera', 'mirorless-camera', 8, 'public/subcategories/wXdxB7UgE82kG2mDjQc9PLISEenTR9apWmRaB8Xv.jpg', 'Mirorless Camera Subcategory', '2022-08-11 05:43:11', '2022-08-12 13:50:17'),
(80, 'Video Camera', 'video-camera', 8, 'public/subcategories/j0cJZgX2MzkAOu9CYTj7AH4gsfut08FtWhvmPim2.jpg', 'Video Camera Subcategory', '2022-08-11 05:43:32', '2022-08-12 13:50:17'),
(81, 'Access Control', 'access-control', 9, 'public/subcategories/zwOzIZth3Xn5TwxzoB3ACzCwBIJPJzbfGrCT1iix.jpg', 'Access Control  Subcategory', '2022-08-11 05:44:05', '2022-08-12 13:50:17'),
(82, 'CC Camera', 'cc-camera', 9, 'public/subcategories/BxtSQIdEuQUFe3TIMdH6TZGqWkLLMDI7T0YjuhLm.jpg', 'CC Camera Subcategory', '2022-08-11 05:44:36', '2022-08-12 13:50:17'),
(83, 'Digital Locker', 'digital-locker', 9, 'public/subcategories/vETL8vjpS7IZ9u8Y2iq0rKsh3vcKnqHfPMvfD2Vm.jpg', 'Digital Locker Subcategory', '2022-08-11 05:45:14', '2022-08-12 13:50:17'),
(84, 'Door Lock', 'door-lock', 9, 'public/subcategories/xSRmVTrdMYCtdPlPk1MZIuhZZf6LymxnlJluRkpU.jpg', 'Door Lock Subcategory', '2022-08-11 05:45:39', '2022-08-12 13:50:18'),
(85, 'IP Camera', 'ip-camera', 9, 'public/subcategories/GNaV1IeAr9c4CvpTaubBoaNLgqrEF1CJEDs4Fu0R.jpg', 'IP Camera Subcategory', '2022-08-11 05:46:06', '2022-08-12 13:50:18'),
(86, 'Fiber Optic Cable & Accessories', 'fiber-optic-cable-accessories', 10, 'public/subcategories/gucJBNc348Cuj0ufjjmgzG8Filtn8vq22dW0wVoq.jpg', 'Fiber Optic Cable & Accessories Subcategory', '2022-08-11 05:46:45', '2022-08-12 13:50:18'),
(87, 'LAN Card', 'lan-card', 10, 'public/subcategories/KPotDTrLqAqVM46cEni8d8otsDkcmZ4Z1tzqEqGj.jpg', 'LAN Card Subcategory', '2022-08-11 05:47:07', '2022-08-12 13:50:18'),
(88, 'Network Switch', 'network-switch', 10, 'public/subcategories/4SlGxFduULM2pZsyu2bQwNgYjLc6uxj316eKrzL8.jpg', 'Network Switch Subcategory', '2022-08-11 05:47:26', '2022-08-12 13:50:18'),
(89, 'Networking Accessories', 'networking-accessories', 10, 'public/subcategories/y7fFaDBBAOFzCk3xWVGBjmebkIiZzPFZWipSe9pG.jpg', 'Networking Accessories Subcategory', '2022-08-11 05:47:42', '2022-08-12 13:50:18'),
(90, 'Networking Tools', 'networking-tools', 10, 'public/subcategories/IXKMnT8l8xf2ZZtMOMkB1yRRc4yMv6yxIQOmGWt3.jpg', 'Networking Tools Subcategory', '2022-08-11 05:47:59', '2022-08-12 13:50:18'),
(91, 'Router', 'router', 10, 'public/subcategories/nnzM7PsnDH8KzUawnjHYMcobOHj3l0cRARtRK2eG.jpg', 'Router Subcategory', '2022-08-11 05:48:16', '2022-08-12 13:50:18'),
(92, 'UTP Cable & Accessories', 'utp-cable-accessories', 10, 'public/subcategories/eUKvO2g68e9iR8zdyxLWFTTjH7F6dGYKXRxKrMSe.jpg', 'UTP Cable & Accessories Subcategory', '2022-08-11 05:48:36', '2022-08-12 13:50:18'),
(93, 'Audio Accessories', 'audio-accessories', 11, 'public/subcategories/G4YUOQx4heFMLosO7g8bKDgQmYIHBwe7fsQfWkem.jpg', 'Audio Accessories Subcategory', '2022-08-11 05:49:14', '2022-08-12 13:50:19'),
(94, 'Bluetooth Speaker', 'bluetooth-speaker', 11, 'public/subcategories/bMbDIrOsjrmyIQgzYK6q5TZjNKzzaz0SMhJs0ZoU.jpg', 'Bluetooth Speaker Subcategory', '2022-08-11 05:49:36', '2022-08-12 13:50:19'),
(95, 'Converter & Cable', 'converter-cable', 11, 'public/subcategories/hosNLlNhWMsSJobQPWe4fxYjSgtjL2prtz2vvaYf.jpg', 'Converter & Cable', '2022-08-11 05:49:54', '2022-08-12 13:50:19'),
(96, 'Headphone', 'headphone', 11, 'public/subcategories/HuSEHuqXqPRo9m9eMHpbXg7xwSu94yLEmJLpcZKW.jpg', 'Headphone Subcategory', '2022-08-11 05:50:10', '2022-08-12 13:50:19'),
(97, 'Keyboard', 'keyboard', 11, 'public/subcategories/F7akZeJq774N2PMBAYUKApGkjRAq73XbbLg8j7ju.jpg', 'Keyboard Subcategory', '2022-08-11 05:50:28', '2022-08-12 13:50:19'),
(98, 'Memory Card', 'memory-card', 11, 'public/subcategories/lpIPAFSQO7RB5go8Z4vKa8e28E4ie7MrnEiy9J1H.jpg', 'Memory Card Subcategory', '2022-08-11 05:50:47', '2022-08-12 13:50:19'),
(99, 'Microphone', 'microphone', 11, 'public/subcategories/Tj5DrPftKUo1Pu2b9MxJgX89zwVwZ3emajLynKlk.jpg', 'Microphone Subcategory', '2022-08-11 05:51:09', '2022-08-12 13:50:19'),
(100, 'Mouse Pad', 'mouse-pad', 11, 'public/subcategories/z9m96W7ZRj7NpYwhWrFGZZyfTqCV07vVIDLGlq5o.jpg', 'Mouse Pad Subcategory', '2022-08-11 05:51:37', '2022-08-12 13:50:19'),
(101, 'Mouse', 'mouse', 11, 'public/subcategories/zz7A8YLX57G7kImnzg7oYIImGVRp2wRkP2qrWxvA.jpg', 'Mouse Subcategory', '2022-08-11 05:52:06', '2022-08-12 13:50:19'),
(102, 'Pen Drive', 'pen-drive', 11, 'public/subcategories/30ODN370lEc8iVDmFuSUplSK4Er0M8JVs8F5WzeF.jpg', 'Pen Drive Subcategory', '2022-08-11 05:52:29', '2022-08-12 13:50:19'),
(103, 'Sound Card', 'sound-card', 11, 'public/subcategories/yj48j0TIjN7KzPrjELBj5xbmbDF2wDgeYsf00GB8.jpg', 'Sound Card Subcategory', '2022-08-11 05:52:49', '2022-08-12 13:50:19'),
(104, 'TV Card', 'tv-card', 11, 'public/subcategories/PLpf4jCq3PV83UbTIPFUk5x84hPQHZp67FY3uvYX.jpg', 'TV Card Subcategory', '2022-08-11 05:53:09', '2022-08-12 13:50:20'),
(105, 'Webcam', 'webcam', 11, 'public/subcategories/mdUnBRfCQ8PJztQjUkbQLwGPfW38cuZlCcsIyoch.jpg', 'Webcam Subcategory', '2022-08-11 05:53:34', '2022-08-12 13:50:20'),
(106, 'Adobe', 'adobe', 12, 'public/subcategories/qNtfOge1h2ePstk7pTDz3U07KHco3DjS81kaH3Nz.jpg', 'Adobe Subcategory', '2022-08-11 05:55:13', '2022-08-12 13:50:20'),
(107, 'Antivirus', 'antivirus', 12, 'public/subcategories/97cE6vvlMJHOkP5wLLZBOJJRkeqb8CQZAlofYRDF.jpg', 'Antivirus Subcategory', '2022-08-11 05:55:30', '2022-08-12 13:50:20'),
(108, 'Database Server Solution', 'database-server-solution', 12, 'public/subcategories/dDVAhteLqIllukQjDbzCBJzZI24YkaUiNXM9zOwe.jpg', 'Database Server Solution Subcategory', '2022-08-11 05:55:53', '2022-08-12 13:50:20'),
(109, 'Mail Server Solution', 'mail-server-solution', 12, 'public/subcategories/INn014MExdgMOTOZEO4CGDEp0Y2aWqSudWTfZDiK.jpg', 'Mail Server Solution Subcategory', '2022-08-11 05:56:15', '2022-08-12 13:50:20'),
(110, 'Office Application', 'office-application', 12, 'public/subcategories/OuozaicKdMDzMHgQlQV8jmXxfzHY7dkTsg7sbGSH.jpg', 'Office Application Subcategory', '2022-08-11 05:56:30', '2022-08-12 13:50:20'),
(111, 'Operating System', 'operating-system', 12, 'public/subcategories/aYeYydOlmhH8QDrXrBf5VJS2xPO4Bex3FlkxCJsr.jpg', 'Operating System Subcategory', '2022-08-11 05:56:48', '2022-08-12 13:50:20'),
(112, '4K TV', '4k-tv', 13, 'public/subcategories/4Ir3UgDMzxor1GHxcPACMl0RaPRMbEa23Ia0Be6M.jpg', '4K TV  Subcategory', '2022-08-11 06:29:51', '2022-08-12 13:50:20'),
(113, 'Akash Digital TV', 'akash-digital-tv', 13, 'public/subcategories/b4RWFKHnh4YwDcxhsao8FtU0pKNfWcIf71CRWC4U.jpg', 'Akash Digital TV Subcategory', '2022-08-11 06:30:11', '2022-08-12 13:50:20'),
(114, 'Android TV', 'android-tv', 13, 'public/subcategories/ydatoE8iPYidKAAxLMWppacpIaHwMvi74y7psonl.jpg', 'Android TV Subcategory', '2022-08-11 06:30:28', '2022-08-12 13:50:20'),
(115, 'LED TV', 'led-tv', 13, 'public/subcategories/9beratz84hl0UAenSfrZzvGtpOgtaxqU3zMN0a65.jpg', 'LED TV Subcategory', '2022-08-11 06:30:47', '2022-08-12 13:50:20'),
(116, 'Smart TV', 'smart-tv', 13, 'public/subcategories/x0KlKfBaO5C4d7zUnK3blt3mujWqBjM7iz8nVIFm.jpg', 'Smart TV Subcategory', '2022-08-11 06:31:08', '2022-08-12 13:50:20'),
(117, 'TV Stand & Wall Mount', 'tv-stand-wall-mount', 13, 'public/subcategories/lXv86kAnY4xtBYCCcn8EDXS3pPJB80RawAHdgbmx.jpg', 'TV Stand & Wall Mount Subcategory', '2022-08-11 06:31:28', '2022-08-12 13:50:20'),
(118, 'Elite', 'elite', 14, 'public/subcategories/g1PnSSrcemzC5kysQDMBJpqs0KnRbds1pFeL29qq.jpg', 'Elite Subcategory', '2022-08-11 06:31:53', '2022-08-12 13:50:20'),
(119, 'General', 'general', 14, 'public/subcategories/9h169TukKbvuYnn4LeiFrHFVNtF4UcLlWuMnRFSh.jpg', 'General Subcategory', '2022-08-11 06:34:49', '2022-08-12 13:50:20'),
(120, 'Gree', 'gree', 14, 'public/subcategories/PRi96qSHoFE6j27NzG6fhLOE5miXIUIxsroQtwtD.jpg', 'Gree Subcategory', '2022-08-11 06:35:07', '2022-08-12 13:50:20'),
(121, 'Midea', 'midea', 14, 'public/subcategories/1u1ekAo2rrzVsZ8ZBLAvlHjhJ5QiDYoYMnQ0dgDm.jpg', 'Midea Subcategory', '2022-08-11 06:35:28', '2022-08-12 13:50:20'),
(122, 'Xiaomi', 'xiaomi-4', 14, 'public/subcategories/7002BFQxjdX4CQn0NNxtxeaUh9nbU5HXTyzkxIIr.jpg', 'Xiaomi  Subcategory', '2022-08-11 06:37:11', '2022-08-12 13:50:20'),
(123, 'Blower', 'blower', 15, 'public/subcategories/6rYJBMzOmz0FAhJgvsmZi3AFSm4nCPflbhPxH6lA.jpg', 'Blower Subcategory', '2022-08-11 06:37:40', '2022-08-12 13:50:20'),
(124, 'Drones', 'drones', 15, 'public/subcategories/ivQeCoWDHsWRXwtd7mjZzm6wU56AzpDwmCWZCQeV.jpg', 'Drones Subcategory', '2022-08-11 06:38:05', '2022-08-12 13:50:20'),
(125, 'Ear Phone', 'ear-phone', 15, 'public/subcategories/xWDEzwjWN7rcrQIWg8rQvlaaR45bAh1FeUhKhHok.jpg', 'Ear Phone Subcategory', '2022-08-11 06:38:27', '2022-08-12 13:50:20'),
(126, 'Earbuds', 'earbuds', 15, 'public/subcategories/B2p3By5GXka7fZKreClHVEImw5CJkRCKBX7dgG3a.jpg', 'Earbuds Subcategory', '2022-08-11 06:38:53', '2022-08-12 13:50:20'),
(127, 'Gimbal', 'gimbal', 15, 'public/subcategories/sPUgwvRC8COcD5f4dI8qr2R00dr9MOMvzMUi0BC0.jpg', 'Gimbal Subcategory', '2022-08-11 06:39:11', '2022-08-12 13:50:20'),
(128, 'Mobile Phone Accessories', 'mobile-phone-accessories', 15, 'public/subcategories/4QifqcEU92yr7YFwT2yZjHw5FKwTxmxdhMBuN2ZU.jpg', 'Mobile Phone Accessories  Subcategory', '2022-08-11 06:40:26', '2022-08-12 13:50:20'),
(129, 'Neckband', 'neckband', 15, 'public/subcategories/zrq4ZX2IulQDysZVbbfkPLkgfaLgZ6fUZHMVxYwA.jpg', 'Neckband Subcategory', '2022-08-11 06:40:55', '2022-08-12 13:50:20'),
(130, 'Power Bank', 'power-bank', 15, 'public/subcategories/6IDzeG72OWIqy08khB3exuDlznItuO0qQWzvhiej.jpg', 'Power Bank Subcategory', '2022-08-11 06:41:12', '2022-08-12 13:50:20'),
(131, 'Smart Band', 'smart-band', 15, 'public/subcategories/Wlil2I2BMLWJtAQBEAmcgLbAPai1R3txBr8FYa1d.jpg', 'Smart Band Subcategory', '2022-08-11 06:41:31', '2022-08-12 13:50:20'),
(132, 'Smart Watch', 'smart-watch', 15, 'public/subcategories/jgsEWKR6F5iNupMHOS1SmYEjnarmuKQAeAU2VPen.jpg', 'Smart Watch Subcategory', '2022-08-11 06:41:49', '2022-08-12 13:50:20'),
(133, 'Studio Equipment', 'studio-equipment', 15, 'public/subcategories/27vmAq70R9S4exHvr4jnuJFSxASesRN103vPJ7ti.jpg', 'Studio Equipment Subcategory', '2022-08-11 06:42:08', '2022-08-12 13:50:21'),
(134, 'TV Box', 'tv-box', 15, 'public/subcategories/QshLI5OzBjEvblVMnF8sNK71Y2P9ztAkQIYHTcUq.jpg', 'TV Box Subcategory', '2022-08-11 06:42:40', '2022-08-12 13:50:21'),
(135, 'Gamepad', 'gamepad', 16, 'public/subcategories/zjPDCuusJ7paXnH3sumsLV2JEmGmQEoBzfufNAdT.jpg', 'Gamepad Subcategory', '2022-08-11 06:43:15', '2022-08-12 13:50:21'),
(136, 'Gaming Chair', 'gaming-chair', 16, 'public/subcategories/uMKlMMVbPdHujzQcJkBxnIXnD7GT6voVJFsxTcQo.jpg', 'Gaming Chair Subcategory', '2022-08-11 06:43:38', '2022-08-12 13:50:21'),
(137, 'Gaming Console', 'gaming-console', 16, 'public/subcategories/3uYbKqsQhI6CP48DqIsz3f3eqwTfHIxNKqWt5bvr.jpg', 'Gaming Console', '2022-08-11 06:43:55', '2022-08-12 13:50:21'),
(138, 'Gaming Desk', 'gaming-desk', 16, 'public/subcategories/SmIQuJSTBSgGhOTW06EFurn3mYolv2Hzy5ZboHWu.jpg', 'Gaming Desk Subcategory', '2022-08-11 06:44:11', '2022-08-12 13:50:21'),
(139, 'Gaming Sofa', 'gaming-sofa', 16, 'public/subcategories/UdirmaB14y8MytJls8ElXH7tWgV2pDasPXn51kAw.jpg', 'Gaming Sofa Subcategory', '2022-08-11 06:44:27', '2022-08-12 13:50:21'),
(140, 'VR', 'vr', 16, 'public/subcategories/E6H0EcVgSWrSaQbSZdOpKJNZWcw9tugIZnaABMEx.jpg', 'VR Subcategory', '2022-08-11 06:45:30', '2022-08-12 13:50:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
