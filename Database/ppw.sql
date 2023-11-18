-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2023 at 07:02 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20319582_ppw`
--

-- --------------------------------------------------------

--
-- Table structure for table `qrdata`
--

CREATE TABLE `qrdata` (
  `Text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(150) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `UserName`, `Password`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$xE8mFrOITDNrgkwM.8JEju7lpct3KRbxoGS5uE2PzyVdZk8Jnzrdy', '2021-04-24 08:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbladminremarks`
--

CREATE TABLE `tbladminremarks` (
  `id` int(11) NOT NULL,
  `contactFormId` int(11) DEFAULT NULL,
  `adminRemark` mediumtext DEFAULT NULL,
  `remarkDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactdata`
--

CREATE TABLE `tblcontactdata` (
  `id` int(11) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `PhoneNumber` char(12) DEFAULT NULL,
  `EmailId` varchar(200) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `UserIp` varbinary(16) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Is_Read` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblemail`
--

CREATE TABLE `tblemail` (
  `id` int(11) NOT NULL,
  `emailId` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemail`
--

INSERT INTO `tblemail` (`id`, `emailId`, `UpdationDate`) VALUES
(1, 'pandiproject2@gmail.com', '2023-02-16 22:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `zite`
--

CREATE TABLE `zite` (
  `names` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminremarks`
--
ALTER TABLE `tbladminremarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactdata`
--
ALTER TABLE `tblcontactdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemail`
--
ALTER TABLE `tblemail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladminremarks`
--
ALTER TABLE `tbladminremarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcontactdata`
--
ALTER TABLE `tblcontactdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemail`
--
ALTER TABLE `tblemail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
