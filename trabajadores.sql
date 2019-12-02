-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 03:48 PM
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
-- Database: `trabajadores`
--

-- --------------------------------------------------------

--
-- Table structure for table `caregiver`
--

CREATE TABLE `caregiver` (
  `caregiver_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `social` int(9) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `title` varchar(5) NOT NULL,
  `professional` varchar(10) NOT NULL,
  `professionalexp` date NOT NULL,
  `cpr` date NOT NULL,
  `driverlicense` date NOT NULL,
  `autoinsurance` date NOT NULL,
  `liability` date NOT NULL,
  `physical` date NOT NULL,
  `tbt` date NOT NULL,
  `background` date NOT NULL,
  `annualcredit` date NOT NULL,
  `biannualcredit` date NOT NULL,
  `passport_work` date NOT NULL,
  `90days` date NOT NULL,
  `annualdays` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caregiver`
--
ALTER TABLE `caregiver`
  ADD PRIMARY KEY (`caregiver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caregiver`
--
ALTER TABLE `caregiver`
  MODIFY `caregiver_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
