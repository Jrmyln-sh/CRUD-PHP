-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2025 at 05:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile_phones`
--

CREATE TABLE `mobile_phones` (
  `id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` int(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile_phones`
--

INSERT INTO `mobile_phones` (`id`, `model_name`, `price`, `quantity`, `created`, `updated`) VALUES
(1, 'iPhone 15 Pro Max', 'PHP 85,990', 10, '2025-03-19 10:34:32', '2025-03-19 15:37:22'),
(2, 'Xiaomi 14', 'PHP 12,995', 12, '2025-03-19 14:33:37', '2025-03-19 15:37:28'),
(3, 'Redmi Note 12', 'PHP 6,995', 18, '2025-03-19 14:42:56', '2025-03-19 15:37:34'),
(4, 'Samsung Galaxy S23 Ultra', 'PHP 53,020', 18, '2025-03-19 15:31:36', '2025-03-19 15:31:36'),
(5, 'Vivo X90 Pro', 'PHP 30,580', 40, '2025-03-19 15:37:10', '2025-03-19 15:37:10'),
(6, 'Infinix Hot 50 4G', 'PHP 7,260', 53, '2025-03-19 15:37:59', '2025-03-19 15:37:59'),
(7, 'Oppo Find N3 Flip', 'PHP 40,700', 35, '2025-03-19 15:38:25', '2025-03-19 15:38:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile_phones`
--
ALTER TABLE `mobile_phones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobile_phones`
--
ALTER TABLE `mobile_phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
