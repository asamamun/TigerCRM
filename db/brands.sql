-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 04:58 PM
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
(1, '1STPLAYER', '1stplayer', 'public/brands/UKCPRRQ9frRAPBvpDJnut1oMx7BFm7UVVTiQCQD5.png', '1STPLAYER  Brand', '2022-08-18 04:13:17', '2022-08-18 04:13:45'),
(2, 'A4Tech', 'a4tech', 'public/brands/3FmHvFqpGxJ4ItEEon9BSmi9k3aFwNMeADm8VWwE.jpg', 'A4Tech Brand', '2022-08-18 04:14:08', '2022-08-18 04:14:08'),
(3, 'Acer', 'acer', 'public/brands/TfzgvI60CEC0X8Vt6iYfaIrGXmnb1CCJorThWX8J.png', 'Acer  Brand', '2022-08-18 04:15:51', '2022-08-18 04:15:51'),
(4, 'Adata', 'adata', 'public/brands/pRfwoKjCrhJJoookEbuwGQCg87ghRJ3PeuVlnhp4.png', 'Adata  Brand', '2022-08-18 04:16:10', '2022-08-18 04:16:10'),
(5, 'AFOX', 'afox', 'public/brands/Ffrwxo4PxX6vj4W5qn7Z0H0WrQO7hl8NJX0pldAf.png', 'AFOX  Brand', '2022-08-18 04:16:31', '2022-08-18 04:16:31'),
(6, 'AITC', 'aitc', 'public/brands/WIueswqLGGih2N2r8ZAPKF5oK25dRc3mLPReBfiF.png', 'AITC  Brand', '2022-08-18 04:16:53', '2022-08-18 04:16:53'),
(7, 'Akash Digital TV', 'akash-digital-tv', 'public/brands/tQ9R3jWrcnY2S33v4EqlfyTjbL4y8njP1NsXRAjt.png', 'Akash Digital TV  Brand', '2022-08-18 04:17:10', '2022-08-18 04:17:10'),
(8, 'Amazon', 'amazon', 'public/brands/R8ZHyv8xRs177wBXbMb3YHsG63HrJX8F9jqEQdHu.jpg', 'Amazon  Brand', '2022-08-18 04:17:37', '2022-08-18 04:17:37'),
(9, 'AMD', 'amd', 'public/brands/xgGTHEXXGxJ2mSecQ9aAkWliuyYFaWxxr0nAcglh.jpg', 'AMD  Brand', '2022-08-18 04:18:15', '2022-08-18 04:18:15'),
(10, 'Antec', 'antec', 'public/brands/77eHqCyo3SKKkoSrXzzACHjaSgAq42y9fcl49bah.png', 'Antec  Brand', '2022-08-18 04:18:37', '2022-08-18 04:18:37'),
(11, 'AOC', 'aoc', 'public/brands/na6bAUxrXjFCBpTgr86es9nqdLWUbD2MhEQWDLBV.png', 'AOC  Brand', '2022-08-18 04:18:51', '2022-08-18 04:18:51'),
(12, 'Apacer', 'apacer', 'public/brands/Z31aBmqvUg8Bjv2srtlpw7xPnF1v2Uv46ynJNJLU.png', 'Apacer  Brand', '2022-08-18 04:19:06', '2022-08-18 04:19:06'),
(13, 'APOLLO', 'apollo', 'public/brands/aYTgp3PstNvcTpkIYNNi7WVrf5w9jjmLMSrcykR2.png', 'APOLLO  Brand', '2022-08-18 04:19:21', '2022-08-18 04:19:21'),
(14, 'Apple', 'apple', 'public/brands/TngG5UTUKg1AlL7zV7rpO3zm3exn5UmqJ2HxJKc2.png', 'Apple Brand', '2022-08-18 04:19:41', '2022-08-18 04:19:41'),
(15, 'ARMOR', 'armor', 'public/brands/IAQnRsx7c9pz3M9kNUagAEhgxuV3erQeyqY3jHku.png', 'ARMOR  Brand', '2022-08-18 04:19:56', '2022-08-18 04:19:56'),
(16, 'ASRock', 'asrock', 'public/brands/5kQaMkZJ4H4q2z6VPtausqWq2O2fQmAtdRlL2QOf.png', 'ASRock  Brand', '2022-08-18 04:20:12', '2022-08-18 04:20:12'),
(17, 'Asus', 'asus', 'public/brands/K0mj2eR27GlmU1UTEu1CoP61OSpui7B1mgnXLboR.png', 'Asus  Brand', '2022-08-18 04:20:30', '2022-08-18 04:20:30'),
(18, 'BenQ', 'benq', 'public/brands/bdMJrvX3UOxgkpnkqayIEmne2ceNfY12Huis3AnF.jpg', 'BenQ  Brand', '2022-08-18 04:20:44', '2022-08-18 04:20:44'),
(19, 'BIOSTAR', 'biostar', 'public/brands/XvI0psH3QGGucp7dwMmawrYp4MTnPW0HeQjwPYAQ.png', 'BIOSTAR  Brand', '2022-08-18 04:21:01', '2022-08-18 04:21:01'),
(20, 'Boya', 'boya', 'public/brands/y7M9DBHSVPQK01vsBkT0kaufcKUYfU0XxNENbBpC.png', 'Boya  Brand', '2022-08-18 04:21:31', '2022-08-18 04:21:31'),
(21, 'Brother', 'brother', 'public/brands/qjcJOl8MQSJWOjofsleGdOTCorzcIkfRkJFQYfFm.png', 'Brother Brand', '2022-08-18 04:21:53', '2022-08-18 04:21:53'),
(22, 'Canon', 'canon', 'public/brands/QliCcQU05l7zFOLEprXbC9jrXeQQ7B58cLBZft9Z.png', 'Canon Brand', '2022-08-18 04:22:14', '2022-08-18 04:22:14'),
(23, 'CASIO', 'casio', 'public/brands/l7JzRxm6eRADtKelEFydNJ6tptyAtQjgFnzZUkI3.jpg', 'CASIO Brand', '2022-08-18 04:22:28', '2022-08-18 04:22:28'),
(24, 'Cisco', 'cisco', 'public/brands/03Kvm8JNpQDv4uDsEPDBx6WTYy7oCWAGOjESGSc3.png', 'Cisco Brand', '2022-08-18 04:22:41', '2022-08-18 04:22:41'),
(25, 'Colorful', 'colorful', 'public/brands/4kU5XptxaUYyz42iQJFDwdslEm21eRSTVrtmvFSu.png', 'Colorful Brand', '2022-08-18 04:23:04', '2022-08-18 04:23:04'),
(26, 'Cooler Master', 'cooler-master', 'public/brands/wFqqPha9ZoeYMbjQU7XdIA314ygUGoPlxhDaj5op.jpg', 'Cooler Master Brand', '2022-08-18 04:23:25', '2022-08-18 04:23:25'),
(27, 'Corsair', 'corsair', 'public/brands/CrGh6K5wMlPLel7Fg5LCOA3xUo4X87oUEwlBRZ3t.png', 'Corsair Brand', '2022-08-18 04:23:47', '2022-08-18 04:23:47'),
(28, 'Cougar', 'cougar', 'public/brands/wehkEIwhuOftsngcLXCkdffxFFEGEZefwf0mXr2e.png', 'Cougar Brand', '2022-08-18 04:24:01', '2022-08-18 04:24:01'),
(29, 'CRYORIG', 'cryorig', 'public/brands/V1TGgwDqpv1EVKO0xsYLnlDh3NmLAOHv5X5MBu1i.jpg', 'CRYORIG Brand', '2022-08-18 04:24:15', '2022-08-18 04:24:15'),
(30, 'Dahua', 'dahua', 'public/brands/mEBkIxh4yaqgVbJ9nNSvyFErpp6IxVefSIye2V1C.png', 'Dahua Brand', '2022-08-18 04:24:40', '2022-08-18 04:24:40'),
(31, 'Deli', 'deli', 'public/brands/VwazKAgoWN4ASl1Nhl7osWO6kv4mSwczUaa3gopY.png', 'Deli Brand', '2022-08-18 04:25:06', '2022-08-18 04:25:06'),
(32, 'D-Link', 'd-link', 'public/brands/Y4z3Q4dSTaSV4w5S7YIwwcyO5DKTk3luXt4Qw0yC.png', 'D-Link Brand', '2022-08-18 04:25:22', '2022-08-18 04:25:22'),
(33, 'EKEN', 'eken', 'public/brands/Sk3oIlFK6K3sci8eG1cmwg4NeqeGBdF9lYEJpbad.jpg', 'EKEN Brand', '2022-08-18 04:25:39', '2022-08-18 04:25:39'),
(34, 'EKWB', 'ekwb', 'public/brands/jt7epmQ9OQ7NlSUAZRBHrkpQdRIahonnwpxwISsQ.png', 'EKWB Brand', '2022-08-18 04:26:12', '2022-08-18 04:26:12'),
(35, 'EPSON', 'epson', 'public/brands/nPBEYjO3NbdVGmuOduPP3DVgmDkeQ3TXP3bNTSWc.png', 'EPSON Brand', '2022-08-18 04:26:37', '2022-08-18 04:26:37'),
(36, 'Fujifilm', 'fujifilm', 'public/brands/82m86he2JkiYpy04yxnjilSlXUx8kBs0F3LPPXNu.png', 'Fujifilm Brand', '2022-08-18 04:26:53', '2022-08-18 04:26:53'),
(37, 'G.Skill', 'g-skill', 'public/brands/JsPcvlkUc5kPwFYYfflNoVyhp7ZCvX4pVZj3OkH1.jpg', 'G.Skill Brand', '2022-08-18 04:27:33', '2022-08-18 04:27:33'),
(38, 'Galax', 'galax', 'public/brands/noY8K4fuZKoh4wcUL6RruJYoWF0Pcco2QFyazal0.png', 'Galax Brand', '2022-08-18 04:27:52', '2022-08-18 04:27:52'),
(39, 'Gamdias', 'gamdias', 'public/brands/pQbsk9nrMCqmW2rD5l1CLtvZFaYlUsx5TbqV3Lbt.png', 'Gamdias Brand', '2022-08-18 04:28:14', '2022-08-18 04:28:14'),
(40, 'GeIL', 'geil', 'public/brands/YdqwcLWk4kXC0ZaU4IrLDzsyNbkPN6cTcSaW3rqW.png', 'GeIL Brand', '2022-08-18 04:28:32', '2022-08-18 04:28:32'),
(41, 'GENERAL', 'general', 'public/brands/zE58wUavOjdzMbRbXDfXwySswabH4EXHIkYDplXx.png', 'GENERAL  Brand', '2022-08-18 04:28:48', '2022-08-18 04:28:48'),
(42, 'Gigabyte', 'gigabyte', 'public/brands/z84VaoTexCQIfaNmBaj1ZyFDKfDCybgQlL0culwX.png', 'Gigabyte Brand', '2022-08-18 04:29:14', '2022-08-18 04:29:14'),
(43, 'GoPro', 'gopro', 'public/brands/hkC7pPcHDnZFHmAQ86225gjjuewq5I2vHR2ok0wN.png', 'GoPro Brand', '2022-08-18 04:29:33', '2022-08-18 04:29:33'),
(44, 'Gree', 'gree', 'public/brands/2a51JWZwp88w1cSrZkP1zW4ktKK0DX77j1KwcEs9.png', 'Gree Brand', '2022-08-18 04:29:50', '2022-08-18 04:29:50'),
(45, 'G-Technology', 'g-technology', 'public/brands/Rq7uDe1sdb8ruDRMelAXmEnwBQCUoiG3c9Zrd8yI.png', 'G-Technology Brand', '2022-08-18 04:30:03', '2022-08-18 04:30:03'),
(46, 'Hikvision', 'hikvision', 'public/brands/FeF4yMVPC2hE3LEJcFSETFv7i8Iczq2MPxQ5GMO8.png', 'Hikvision Brand', '2022-08-18 04:30:19', '2022-08-18 04:30:19'),
(47, 'HP', 'hp', 'public/brands/cWXG02BIA8qARd15DeTsGVRlEiNMT2z5waB4juWJ.png', 'HP Brand', '2022-08-18 04:30:32', '2022-08-18 04:30:32'),
(48, 'Huawei', 'huawei', 'public/brands/GSGC0o9DaP6YbIbcO0lHq70CFLkSKqeoIjXC06MO.png', 'Huawei Brand', '2022-08-18 04:30:45', '2022-08-18 04:30:45'),
(49, 'Intel', 'intel', 'public/brands/TOTLOqBLGBT0XzlOWGbwvHQyuF3r5l362W8taPta.png', 'Intel Brand', '2022-08-18 04:30:59', '2022-08-18 04:30:59'),
(50, 'Jovision', 'jovision', 'public/brands/Tz16HNAOuphfci5FzFRzF9YL9KxbTL7vIWmnhT8Q.png', 'Jovision Brand', '2022-08-18 04:31:17', '2022-08-18 04:31:17'),
(51, 'K&F', 'k-f', 'public/brands/uwPICtezx6jgW5LRhJSycs1LMdyJsAwr56bDb0iO.png', 'K&F Brand', '2022-08-18 04:31:33', '2022-08-18 04:31:33'),
(52, 'KingFast', 'kingfast', 'public/brands/e2Jwpo5p3lFZKhSPZFteK67qvzA7I6U2uaqbiTIT.png', 'KingFast Brand', '2022-08-18 04:31:55', '2022-08-18 04:31:55'),
(53, 'Kingston', 'kingston', 'public/brands/evD35IfzDCeBmzgC0qIXqUBjOp71S9RvERwhvugm.png', 'Kingston Brand', '2022-08-18 04:32:12', '2022-08-18 04:32:12'),
(54, 'kwg', 'kwg', 'public/brands/75MumSRHlo43g94LDKMSwzpyNaNOalTWm4O5AS06.png', 'kwg Brand', '2022-08-18 04:32:37', '2022-08-18 04:32:37'),
(55, 'LaCie', 'lacie', 'public/brands/7bFYi6Jdvi5vEwAfWxjrgT023TNbCeVBDqReFtJQ.png', 'LaCie Brand', '2022-08-18 04:32:52', '2022-08-18 04:32:52'),
(56, 'Lenovo', 'lenovo', 'public/brands/G3aRa2nV8N1Le9z3xt15qPqIU5NnJxSEzbtUuNbY.png', 'Lenovo Brand', '2022-08-18 04:33:06', '2022-08-18 04:33:06'),
(57, 'Lexar', 'lexar', 'public/brands/hXdtogRBbVTgTzvplbRI7giaT1WyAgqvEXlKTHp0.png', 'Lexar Brand', '2022-08-18 04:33:22', '2022-08-18 04:33:22'),
(58, 'LG', 'lg', 'public/brands/myTVxCHAcrjsSDcl7jv0bt68nYkNew47rL67DPXc.png', 'LG Brand', '2022-08-18 04:33:50', '2022-08-18 04:33:50'),
(59, 'LIAN Li', 'lian-li', 'public/brands/1lcKZLZWS0zdOUXzKxW3gflXEeJtBKMa3MbRAdJK.jpg', 'LIAN Li Brand', '2022-08-18 04:34:14', '2022-08-18 04:34:14'),
(60, 'Logitech', 'logitech', 'public/brands/PlOC8UWbKVSf35naNOX91eSHZR05c1J80CuLCDec.png', 'Logitech Brand', '2022-08-18 04:34:31', '2022-08-18 04:34:31'),
(61, 'MaxGreen', 'maxgreen', 'public/brands/LElJloAuJhma0BVjoJ5GZb7zjpbeEeyRfA1ekX82.png', 'MaxGreen Brand', '2022-08-18 04:35:03', '2022-08-18 04:35:03'),
(62, 'Microlab', 'microlab', 'public/brands/5LdFXsZ5NWgozIlk9KymESAEFNkJvket86FX7cEA.jpg', 'Microlab Brand', '2022-08-18 04:35:42', '2022-08-18 04:35:42'),
(63, 'Microsoft', 'microsoft', 'public/brands/zqwAbeXsElPXHzqRxAZQmKDHAtnt952QSNp4cA1d.jpg', 'Microsoft Brand', '2022-08-18 04:36:26', '2022-08-18 04:36:26'),
(64, 'Midea', 'midea', 'public/brands/2h0XQ1lazLeCBZb45C9J9dst4HNMeveoHFugw5xS.png', 'Midea Brand', '2022-08-18 04:37:08', '2022-08-18 04:37:08'),
(65, 'MSI', 'msi', 'public/brands/Ohrb0gYQUqjZCLK8pLxVaQGN6m5unWI67tDwXWFZ.jpg', 'MSI Brand', '2022-08-18 04:38:50', '2022-08-18 04:38:50'),
(66, 'Nikon', 'nikon', 'public/brands/QQ5t33I8ruRXnmURIGeWdPdg9YNtHMaSjVRDntPX.png', 'Nikon Brand', '2022-08-18 04:39:07', '2022-08-18 04:39:07'),
(67, 'Noctua', 'noctua', 'public/brands/fdlfRv2XEW1fzt0jh3fv3EoSrAMfDcW8aGU25thq.jpg', 'Noctua Brand', '2022-08-18 04:39:53', '2022-08-18 04:39:53'),
(68, 'NZXT', 'nzxt', 'public/brands/IH0WT2MzRvUdrKJUjZcAEJVv49toSgaUPf42hbQj.png', 'NZXT Brand', '2022-08-18 04:40:09', '2022-08-18 04:40:09'),
(69, 'Onspot', 'onspot', 'public/brands/q1kQaAS2razrAXPEm1mHUvmy0gveuFE8UoQYzum5.png', 'Onspot Brand', '2022-08-18 04:40:24', '2022-08-18 04:40:24'),
(70, 'Palit', 'palit', 'public/brands/9wqqYRc5wNd0cmC4rB7qpcLlyT6Dblj9Z4Adxgkr.png', 'Palit Brand', '2022-08-18 04:40:48', '2022-08-18 04:40:48'),
(71, 'Panasonic', 'panasonic', 'public/brands/VIy12zOEMTPF7WBN6JsCcg8cCVPFfJ4NMWvUVOEQ.png', 'Panasonic Brand', '2022-08-18 04:41:07', '2022-08-18 04:41:07'),
(72, 'Patriot', 'patriot', 'public/brands/FZZmqRhYZS2Vo1QIpkScTQFhy9sumifPLL397QJd.png', 'Patriot Brand', '2022-08-18 04:41:22', '2022-08-18 04:41:22'),
(73, 'PHANTEKS', 'phanteks', 'public/brands/6HZPi8we5zC1V1n7yDYEenD9n9tJkrLju8vxLl2c.png', 'PHANTEKS Brand', '2022-08-18 04:41:57', '2022-08-18 04:41:57'),
(74, 'Philips', 'philips', 'public/brands/xbRItdQbenfHRK0qjTOxtdy3fluAnPB7YZ34Wi7H.png', 'Philips Brand', '2022-08-18 04:42:13', '2022-08-18 04:42:13'),
(75, 'PNY', 'pny', 'public/brands/P9znSPBn1CNfo3bJ657o6NipXAOtNTPErU15dyH5.jpg', 'PNY Brand', '2022-08-18 04:42:26', '2022-08-18 04:42:26'),
(76, 'Razer', 'razer', 'public/brands/XJUnlaq6A4jQAtxmkwiSrRC4ZVZzQ56cmDdffaZM.png', 'Razer Brand', '2022-08-18 04:44:10', '2022-08-18 04:44:10'),
(77, 'Realme', 'realme', 'public/brands/UHaL1FF3YtsEAa67dNYHefzfRdmFWP7nZpaeh5An.png', 'Realme Brand', '2022-08-18 04:44:24', '2022-08-18 04:44:24'),
(78, 'Redragon', 'redragon', 'public/brands/9YuoaxlpVfAdEoEFlL8moNMfs0Doo63c5b2UzPTN.png', 'Redragon Brand', '2022-08-18 04:44:39', '2022-08-18 04:44:39'),
(79, 'Samsung', 'samsung', 'public/brands/esZVc8dfFZepU0TpVz8SvFOfxIfSZntxk5oMcbBg.png', 'Samsung Brand', '2022-08-18 04:44:53', '2022-08-18 04:44:53'),
(80, 'SanDisk', 'sandisk', 'public/brands/cUUBgTznuUTpTsUSvvSRFXsdf9msJMnDgjoLgcDH.png', 'SanDisk Brand', '2022-08-18 04:45:08', '2022-08-18 04:45:08'),
(81, 'Santak', 'santak', 'public/brands/HG6sXcMcS3Nrn9rNIQTj4ULPUJKhOs4GcVVFNA5X.png', 'Santak Brand', '2022-08-18 04:45:23', '2022-08-18 04:45:23'),
(82, 'Sapphire', 'sapphire', 'public/brands/hccF4nVvY2cHXeOnNqIla4gaeNniK4845e23GxEQ.jpg', 'Sapphire Brand', '2022-08-18 04:45:37', '2022-08-18 04:45:37'),
(83, 'Silicon Power', 'silicon-power', 'public/brands/UNRwJqfhFyQuRErFBoSz5Iuyp8J4c9DFyubYO6IB.png', 'Silicon Power Brand', '2022-08-18 04:45:51', '2022-08-18 04:45:51'),
(84, 'Sony', 'sony', 'public/brands/QOicsQ9aYQkLgVMTRtw1hVQmzx6wRIMO1RjrjEyS.jpg', 'Sony Brand', '2022-08-18 04:46:03', '2022-08-18 04:46:03'),
(85, 'Team', 'team', 'public/brands/unrge2eTYb6J39fvhacnPmkHGxaOj0FCBWfA8S3J.png', 'Team Brand', '2022-08-18 04:46:18', '2022-08-18 04:46:18'),
(86, 'Tecnoware', 'tecnoware', 'public/brands/wyACVXvgHOhQcHAUk203kH9ocqGclzIcezEMUYIK.png', 'Tecnoware Brand', '2022-08-18 04:46:30', '2022-08-18 04:46:30'),
(87, 'Tenda', 'tenda', 'public/brands/B55W4AcllsQHOMvSsh3gXlCekuKzufNQxC07q3dm.png', 'Tenda Brand', '2022-08-18 04:46:42', '2022-08-18 04:46:42'),
(88, 'Teutons', 'teutons', 'public/brands/tMP4WNdmRcJcXq2hPBflIr79fd4YT7q5h3kAGtqq.png', 'Teutons Brand', '2022-08-18 04:46:57', '2022-08-18 04:46:57'),
(89, 'Thermaltake', 'thermaltake', 'public/brands/uvjsIJZvaasjHB3HB7bewYPnCKIYRmsrNBizspc9.png', 'Thermaltake Brand', '2022-08-18 04:47:12', '2022-08-18 04:47:12'),
(90, 'TOTOLINK', 'totolink', 'public/brands/9fnmA36xKLcXBmDKNURdYjUIP2GGYrrmyVHR1wOv.jpg', 'TOTOLINK Brand', '2022-08-18 04:47:32', '2022-08-18 04:47:32'),
(91, 'TP-Link', 'tp-link', 'public/brands/vF1IcM83guAQskTTaNrAos5fnPNqw7zh8vX3UCXM.jpg', 'TP-Link Brand', '2022-08-18 04:47:59', '2022-08-18 04:47:59'),
(92, 'Transcend', 'transcend', 'public/brands/ipHugvIJh7nyZW4htlImtEqOvCZxNMoTNAMVhXgi.png', 'Transcend Brand', '2022-08-18 04:48:13', '2022-08-18 04:48:13'),
(93, 'TVT', 'tvt', 'public/brands/GvbYzK1WidD1LAqXjeRtoviSgEcwnfBQ1rKbcq2w.png', 'TVT Brand', '2022-08-18 04:49:07', '2022-08-18 04:49:07'),
(94, 'Twinmos', 'twinmos', 'public/brands/2ohmHVlkzKJwmZQsFSXUc0Dpm5c0qFULCUhRjw5F.png', 'Twinmos Brand', '2022-08-18 04:49:20', '2022-08-18 04:49:20'),
(95, 'Viewsonic', 'viewsonic', 'public/brands/rpVXEoE9DkRhxwCTcbcQUbtm4y9A7VZ460X3NIGj.jpg', 'Viewsonic Brand', '2022-08-18 04:49:32', '2022-08-18 04:49:32'),
(96, 'Walton', 'walton', 'public/brands/J50Nzce94hL5YKFORYULkce9Np9gCaRczp4b5V4u.png', 'Walton Brand', '2022-08-18 04:49:44', '2022-08-18 04:49:44'),
(97, 'Western Digital', 'western-digital', 'public/brands/rC5lDG10vGLe7j2ELlrjWqBRYnNYVefxYWX9fExJ.jpg', 'Western Digital Brand', '2022-08-18 04:50:07', '2022-08-18 04:50:07'),
(98, 'XFX', 'xfx', 'public/brands/MOkNx6Lbk3fXLDFLcBFsIU5E6qHWyH16KIpePWX7.jpg', 'XFX Brand', '2022-08-18 04:50:24', '2022-08-18 04:50:24'),
(99, 'Xiaomi', 'xiaomi', 'public/brands/qkRY6xBFt7nm536NvCd9ISUlcjEu9tBXScN0zkdI.png', 'Xiaomi Brand', '2022-08-18 04:50:42', '2022-08-18 04:50:42'),
(100, 'ZADAK', 'zadak', 'public/brands/2ndnRnjtUuPeFXeCs8QQxb4haCbya9O5Ta7HAoPt.png', 'ZADAK Brand', '2022-08-18 04:50:57', '2022-08-18 04:50:57'),
(101, 'ZIGOR', 'zigor', 'public/brands/5hidDNHwrCDq2PqlJu0BWsrYXSnefco79p2XyI9K.jpg', 'ZIGOR Brand', '2022-08-18 04:51:15', '2022-08-18 04:51:15'),
(102, 'ZKTeco', 'zkteco', 'public/brands/QzvasMUB3PdiqzjFWxAdxHaFkbiI156ie5KhrwSp.png', 'ZKTeco Brand', '2022-08-18 04:51:32', '2022-08-18 04:51:32'),
(103, 'ZOTAC', 'zotac', 'public/brands/i7ce0lyyreWosW2apml2Vl2dbBLrVRoesCqm7gbY.png', 'ZOTAC Brand', '2022-08-18 04:51:48', '2022-08-18 04:51:48'),
(104, 'Zyxel', 'zyxel', 'public/brands/AGzGmy3DLWCY2YS8jmnaPmOxVk9fZryK4YP2xR6Y.png', 'Zyxel Brand', '2022-08-18 04:52:11', '2022-08-18 04:52:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
