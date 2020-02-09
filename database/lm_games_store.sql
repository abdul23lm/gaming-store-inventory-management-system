-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 07:55 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lm_games_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `lgs_produk`
--

CREATE TABLE `lgs_produk` (
  `item_id` int(11) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_type` varchar(10) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lgs_produk`
--

INSERT INTO `lgs_produk` (`item_id`, `item_code`, `item_name`, `item_type`, `item_quantity`, `item_price`) VALUES
(25, 'LMGS-PC-001', 'Call of Duty: WWII World War 2', 'PC', 38, 759000),
(26, 'LMGS-PC-002', 'FIFA 18 Standard Edition', 'PC', 25, 849000),
(27, 'LMGS-PC-003', 'PC Game â€“ Overwatch GOTY Game Of The Year Edition', 'PC', 40, 749000),
(28, 'LMGS-PC-004', 'Pro Evolution Soccer PES 2018: Premium Edition', 'PC', 69, 639000),
(29, 'LMGS-PC-005', 'Total War: Warhammer II', 'PC', 12, 549000),
(30, 'LMGS-Xbox-001', 'Far Cry 5 Standard Edition', 'Xbox One', 43, 699000),
(31, 'LMGS-Xbox-002', 'A Way Out', 'Xbox One', 22, 499000),
(32, 'LMGS-Xbox-003', 'Sea of Thieves', 'Xbox One', 56, 649000),
(33, 'LMGS-Xbox-004', 'Monster Hunter World', 'Xbox One', 65, 769000),
(34, 'LMGS-Xbox-005', 'Assassinâ€™s Creed Origins Standard Edition', 'Xbox One', 77, 679000),
(35, 'LMGS-PS4-001', 'Detroit Become Human', 'PS 4', 42, 769000),
(36, 'LMGS-PS4-002', 'Super Robot Wars SRW X', 'PS 4', 12, 769000),
(37, 'LMGS-PS4-003', 'God of War', 'PS 4', 55, 789000),
(38, 'LMGS-PS4-004', 'Yakuza 6: The Song of Life (Standard Edition)', 'PS 4', 59, 749000);

-- --------------------------------------------------------

--
-- Table structure for table `user_lgs`
--

CREATE TABLE `user_lgs` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_lgs`
--

INSERT INTO `user_lgs` (`email`, `password`) VALUES
('admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lgs_produk`
--
ALTER TABLE `lgs_produk`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user_lgs`
--
ALTER TABLE `user_lgs`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lgs_produk`
--
ALTER TABLE `lgs_produk`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
