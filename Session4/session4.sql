-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 01:27 PM
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
-- Database: `session4`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FullName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Gender` text NOT NULL,
  `Birthday` date NOT NULL,
  `Avatar` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FullName`, `Email`, `Phone`, `Gender`, `Birthday`, `Avatar`) VALUES
(21, 'Susu', 'susu@gmail.com', '0147852147', 'Female', '2019-06-18', '5cfe70fe6109f_004_6.jpg'),
(22, 'Ribi', 'ribi@gmail.com', '013654412', 'Female', '2010-07-16', '5cfe72af57c73_ribi.jpg'),
(23, 'Mia', 'mia@gmail.com', '0321321753', 'Other', '2019-06-07', '5cfe72dd05f7d_codegirl.jpg'),
(25, 'Pu', 'pupu@gmail.com', '0326017852', 'Female', '2019-06-20', '5cfe73a7e87e5_lh.jpg'),
(26, 'Tony', 'tony@gmail.com', '0147628563', 'Other', '2019-01-19', '5cfe73d8e7d80_005_6.jpg'),
(27, 'Clock', 'clock@gmail.com', '0123654123', 'Other', '2019-06-21', '5cff2e2393364_photo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
