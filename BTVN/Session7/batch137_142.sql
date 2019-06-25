-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 01:08 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batch137_142`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `gender`, `city`, `avatar`) VALUES
(4, 'admin', '213123123', 'male', 'quangtri', 'a.jpg'),
(5, 'thu chen', 'ok27349234', 'female', 'hue', 'a.jpg'),
(7, 'Lương Hoài Cảnh', '213123123', 'female', 'quangtri', 'a.jpg'),
(8, 'Hung', '202cb962ac59075b964b07152d234b70', 'male', 'hue', 'default.png'),
(9, 'huy', '81dc9bdb52d04dc20036dbd8313ed055', 'male', 'quangtri', 'default.png'),
(10, 'hong', '202cb962ac59075b964b07152d234b70', 'female', 'quangtri', 'default.png'),
(11, 'vy', '202cb962ac59075b964b07152d234b70', 'female', 'quangtri', '5d10fce628bd3_009_6.jpg'),
(12, 'hai', '202cb962ac59075b964b07152d234b70', 'male', 'quangtri', '5d10fc544feb9_002_6.jpg'),
(14, 'ky', '202cb962ac59075b964b07152d234b70', 'male', 'hue', '5d10fcd80e838_007_6.jpg'),
(24, 'trung', '202cb962ac59075b964b07152d234b70', 'male', 'hue', '5d10fbbf7fec0_003_6.jpg'),
(26, 'tr', '202cb962ac59075b964b07152d234b70', 'male', 'hue', '5d10ffcf04e73_001_6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
