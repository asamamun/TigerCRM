-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 11:12 AM
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
-- Dumping data for table `productimages`
--

INSERT INTO `productimages` (`id`, `product_id`, `name`, `created_at`, `updated_at`) VALUES
(6, 8, 'public/products/5mBaiRhQKa0UKUajPahZSTwHjorEkJl4wNNdzvgx.jpg', '2022-08-20 13:07:28', '2022-08-20 13:07:28'),
(7, 8, 'public/products/6nY6c6X7gmPUQoHkrKUWeDkSRb1kd24fKPYmSr8k.jpg', '2022-08-20 13:07:28', '2022-08-20 13:07:28'),
(8, 8, 'public/products/IoXhTXRXTQg8KYMX7d72CBxfxJWo4XIN6uCZ54RL.jpg', '2022-08-20 13:07:28', '2022-08-20 13:07:28'),
(9, 8, 'public/products/rXDb90f52I4V8TdrQudNfMglH2XQoIcvHx63fXTH.jpg', '2022-08-20 13:07:28', '2022-08-20 13:07:28'),
(10, 9, 'public/products/jQVgPZdQBEFBSn57hb1klTo1cSjyX2sJ2S0jHywE.jpg', '2022-08-20 13:11:54', '2022-08-20 13:11:54'),
(11, 9, 'public/products/3Sma5ZWAfp034EPwkFRwQmqVGzFvduyXL6poPHQK.jpg', '2022-08-20 13:11:54', '2022-08-20 13:11:54'),
(12, 10, 'public/products/sd8gNuHqi1DFJwCk5LGFtSqMNFMin2XxBvwhp9DQ.jpg', '2022-08-20 15:12:32', '2022-08-20 15:12:32'),
(13, 11, 'public/products/Z9ekJa32ijvOFZCPkGeAZX4ugVOajbmdqYYZhzpT.jpg', '2022-08-20 15:14:57', '2022-08-20 15:14:57'),
(14, 12, 'public/products/fczWBEabHMRodhZr8bziJ9nfzM1DdA9VQS93kRc0.jpg', '2022-08-20 15:18:38', '2022-08-20 15:18:38'),
(15, 12, 'public/products/r4MxYBCFQkc6fEM3HcVgSwTIADZSm1HQWrrUBtSP.jpg', '2022-08-20 15:18:38', '2022-08-20 15:18:38'),
(16, 12, 'public/products/WZGfRaqkLw8AxM6dOnDBFF1IsS632jUql2HxFdUt.jpg', '2022-08-20 15:18:38', '2022-08-20 15:18:38'),
(17, 13, 'public/products/IUJ8JEM1VovvxxIwMGBqKxlTB9za19NGTRxkX563.jpg', '2022-08-20 15:21:19', '2022-08-20 15:21:19'),
(18, 13, 'public/products/bngfv4Wi3eruZsg92diG3Q6n0DdnnAzK5XxHyhIZ.jpg', '2022-08-20 15:21:19', '2022-08-20 15:21:19'),
(19, 13, 'public/products/2d18dexPgl3AxmmNnUi5Ss1DRqD8N1FFYY7MLxYS.jpg', '2022-08-20 15:21:19', '2022-08-20 15:21:19'),
(20, 13, 'public/products/jftHInVWQFJaW3M78pUYYfQuuw5wsCiPS0RkE6ZB.jpg', '2022-08-20 15:21:19', '2022-08-20 15:21:19'),
(21, 14, 'public/products/gHrXdahR1a91J8CyKnQUD8OhT2cnrfQtXZemdv1y.jpg', '2022-08-20 15:23:44', '2022-08-20 15:23:44'),
(22, 14, 'public/products/3qJwztPP6xu7JN8r9evICLxWnMH8ltOvDD9OsQ9R.jpg', '2022-08-20 15:23:44', '2022-08-20 15:23:44'),
(23, 15, 'public/products/AcoNYbfVeNGb57vNg8uQqyrmrHFWb90rt94SGN9p.jpg', '2022-08-20 15:26:42', '2022-08-20 15:26:42'),
(24, 15, 'public/products/epsRf4PtTayjqplhkkQaVM8RIv5kJij5DVaJdfpq.jpg', '2022-08-20 15:26:42', '2022-08-20 15:26:42'),
(25, 16, 'public/products/yRxxfsUNdcjuFWbazuBtBGzmfXgNUQRpYxbxympM.jpg', '2022-08-20 15:29:12', '2022-08-20 15:29:12'),
(26, 16, 'public/products/pIpfj5l2mlBuGQeQvLZvpAh49MEXGyH9TizEJQdP.jpg', '2022-08-20 15:29:12', '2022-08-20 15:29:12'),
(27, 16, 'public/products/MbmFhQ85gAIQFIbn7mNOEAehgYn1UE1VCzoq5Vit.jpg', '2022-08-20 15:29:12', '2022-08-20 15:29:12'),
(28, 16, 'public/products/ICwdtXbwf317dQ5ifVIRVu7wz8uv8wTkMlT8SOZL.jpg', '2022-08-20 15:29:12', '2022-08-20 15:29:12'),
(29, 16, 'public/products/V2L5jNSmFV3vcL5MPOJ82ERZ8VcmYvRXeP0FPy32.jpg', '2022-08-20 15:29:12', '2022-08-20 15:29:12'),
(30, 16, 'public/products/a8AqOh3YBhn8qWVnJ0cShd8uJcYl9HMUw4XOIykn.jpg', '2022-08-20 15:29:12', '2022-08-20 15:29:12'),
(31, 17, 'public/products/YnIrHoyiEJYPKtZ7Vm5ldaLVCiMG5tgfbIRJ5B93.jpg', '2022-08-20 15:31:14', '2022-08-20 15:31:14'),
(32, 17, 'public/products/AurE1gzAeCGxkpz1bUBr3eyu2JvFo6K64cgiyjLH.jpg', '2022-08-20 15:31:14', '2022-08-20 15:31:14'),
(33, 17, 'public/products/cY8JV1Xbl6LQrTBIONRXGiacfuxXi0v9iKdLaZw6.jpg', '2022-08-20 15:31:14', '2022-08-20 15:31:14'),
(34, 17, 'public/products/kMaBPCm8FYUiPwyXiPXLD0TH6rYM1n03EWbQV2cw.jpg', '2022-08-20 15:31:14', '2022-08-20 15:31:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
