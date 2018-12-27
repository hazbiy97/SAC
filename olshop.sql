-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2018 at 02:47 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `houseId` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `dashboardImage` text NOT NULL,
  `priceRange` text NOT NULL,
  `longit` int(11) NOT NULL,
  `latit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`houseId`, `name`, `description`, `dashboardImage`, `priceRange`, `longit`, `latit`) VALUES
(1, 'Pesona Khayangan CK 07', 'Pesona Khayangan, Depok', 'test_image_1.jpeg', 'Mulai 200 Jutaan', 123, 321),
(2, 'Pesona Khayangan CK 08', 'Pesona Khayangan, Depok', 'test_image_2.jpeg', 'Mulai 20 Jutaan', 123, 321),
(3, 'Depok Square', 'Sawangan, Depok', 'test_image_3.jpeg', 'Mulai 600 Jutaan', 120, 130),
(4, 'Depok Indah', 'Pondok Indah, Jakarta', 'test_image_4.jpeg', 'Mulai 900 Jutaan', 111, 152);

-- --------------------------------------------------------

--
-- Table structure for table `imageDetail`
--

CREATE TABLE `imageDetail` (
  `houseId` int(11) NOT NULL,
  `imageName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imageDetail`
--

INSERT INTO `imageDetail` (`houseId`, `imageName`) VALUES
(1, 'details_1.jpeg'),
(1, 'details_2.jpeg'),
(2, 'details_1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`houseId`);

--
-- Indexes for table `imageDetail`
--
ALTER TABLE `imageDetail`
  ADD PRIMARY KEY (`houseId`,`imageName`(9)),
  ADD KEY `houseId` (`houseId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imageDetail`
--
ALTER TABLE `imageDetail`
  ADD CONSTRAINT `house_imageDetails_FK` FOREIGN KEY (`houseId`) REFERENCES `house` (`houseId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
