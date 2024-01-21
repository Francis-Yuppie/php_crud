-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2024 at 09:05 AM
-- Server version: 10.11.6-MariaDB-1
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `phone`, `address`, `created_at`) VALUES
(1, 'Francis Ogolla', 'francis@gmail.com', '+254742306250', 'MSA-BM', '2023-10-27 20:57:48'),
(2, 'Bazil Majiwa', 'bazil@gmail.com', '+254789306980', 'MLN', '2023-10-27 20:57:48'),
(4, 'Kiptoo Caterpiller', 'kipto@yahoo.com', '+254789689780', 'MSA-cty', '2023-10-27 20:57:48'),
(5, 'John muli', 'john@gmail.com', '078624538', 'Kilifi', '2023-10-28 20:42:58'),
(6, 'Sharon', 'shaz@gmail.com', '0754637564', 'Msa', '2023-10-28 20:43:50'),
(7, 'Pheona Mary', 'pheona@gmail.com', '0114584647', 'Voi', '2023-10-28 20:46:14'),
(9, 'luxy Betty', 'lucy@gmail.com', '0736663563', 'Tvt', '2023-10-28 20:54:11'),
(10, 'francis peter', 'francisyuppie@gmail.com', '0764758576', 'Eld', '2023-10-28 20:57:01'),
(14, 'Peter ogola', 'francisOgola@gmail.com', '+254789534868', 'Voi-Mzs', '2023-10-28 20:59:53'),
(16, 'Theur joseph', 'theu@gmail.com', '0114788647', 'Msa', '2023-11-01 17:49:10'),
(21, 'Faith mwingi', 'fay@gmail.com', '+254764546545', 'machakos', '2023-11-01 18:03:55'),
(22, 'Ashlay Katama', 'kata@gmail.com', '+25478696974', 'Shanzu', '2023-11-02 13:51:49'),
(23, 'Hafsa Abd', 'hafsa@gmail.com', '+25476865908', 'Tudor', '2023-11-02 13:56:52'),
(24, 'John Doe', 'j@gmail.com', '0766554433', 'Uk', '2023-11-03 01:24:39'),
(25, 'zeyda', 'zey@gmail.com', '074534232', 'msa', '2023-11-06 01:29:43'),
(26, 'Jacinta', 'jac@gmail.com', '076543557', 'Mombasa', '2023-11-14 02:15:08'),
(27, 'Ummu', 'umu@gmail.com', '0757567562', 'Msa', '2023-12-04 21:23:15'),
(28, 'suzan', 'susy@gmail.com', '079956500', 'Nys-h', '2023-12-06 19:41:09'),
(30, 'christine', 'sw@gmail.com', '076542545', 'Kisumu', '2023-12-11 19:20:45'),
(31, 'Rolex Rolex', 'rolex@gmail.com', '0764546545', 'Msa-NY3456', '2024-01-19 12:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
