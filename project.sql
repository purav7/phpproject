-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 03:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pas` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `pas`, `phone`, `email`) VALUES
(13, '111', '111', 111, '11@11'),
(14, '1', '', 645546, 'gf!ggfc@gfg'),
(15, '111', '1111', 5545456, 'gg@fgh'),
(17, 'purav', '', 3487, 'dnb@fjefn'),
(18, 'Puravsidhu', '11', 232323, 'mar@sh'),
(20, '11', '22', 24232, 'cdc@ffe'),
(21, 'purav', 'sidhu', 2323323, 'denjn@enjfn'),
(22, 'kin', 'sin', 775544537, 'kin@gmail.com'),
(24, 'er', 'erfe', 424, 'egfe@tgrtg');

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pas` varchar(100) NOT NULL,
  `image` blob NOT NULL,
  `image-description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`id`, `name`, `pas`, `image`, `image-description`, `price`, `email`) VALUES
(1, '1', '2', 0x75706c6f6164732f352e77656270, 'err', 221, ''),
(2, 'purav', 'sidhu', 0x75706c6f6164732f372e6a706567, 'watch', 222, ''),
(3, 'Puravsidhu', '11', 0x75706c6f6164732f31342e77656270, 'watche', 444, ''),
(4, 'Puravsidhu', '11', 0x75706c6f6164732f31362e6a7067, 'watches', 4441, ''),
(5, 'Kin', 'sin', 0x75706c6f6164732f362e6a706567, 'ww', 4444, ''),
(6, 'King', 'King', 0x75706c6f6164732f31332e6a7067, 'king', 9999, ''),
(7, 'rock', 'rock', 0x75706c6f6164732f31382e6a706567, 'rock', 9999, 'rock@rock'),
(8, 'kin', 'sin', 0x75706c6f6164732f32302e6a706567, 'email to buy', 99999, 'bsuh@jdhjb'),
(9, 'kin', '', 0x75706c6f6164732f322e77656270, 'effeef', 99999, ''),
(10, 'a', '', 0x75706c6f6164732f342e6a706567, 'dwed', 23, ''),
(11, 'purav', '', 0x75706c6f6164732f31392e6a706567, 'wwen', 332, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
