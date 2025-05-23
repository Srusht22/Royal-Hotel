-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2025 at 06:50 PM
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
-- Database: `royal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`) VALUES
(1, 'hama', '12345678', 'hama@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fname`, `lname`, `email`, `roomtype`, `gender`) VALUES
(8, 'muhammad', 'amjad', 'hama@gmail.com', 'Standard', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `F_Name` varchar(255) NOT NULL,
  `L_Name` varchar(255) NOT NULL,
  `link` varchar(2083) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `P_Number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `F_Name`, `L_Name`, `link`, `photo`, `P_Number`) VALUES
(1, 'Muhammed ', 'Awat', 'https://www.facebook.com/share/18CAfaWVWe/', 'hama.jpg', '0770 678 6875       '),
(2, 'Sivan', 'Jabar', 'https://www.facebook.com/share/18CAfaWVWe/', 'sivan.png', ''),
(6, 'muhammad', 'amjad', 'https://www.facebook.com/share/1VCc4qAgce/', '366704157.png', '07770 777 77 77'),
(7, 'muhammad', 'amjad', 'https://www.facebook.com/share/1VCc4qAgce/', '384290685.jpg', '07770 777 77 77'),
(8, 'muhammad', 'amjad', 'https://www.facebook.com/share/1VCc4qAgce/', '433580898.png', '07770 777 77 77'),
(9, 'muhammad', 'amjad', 'https://www.facebook.com/share/1VCc4qAgce/', '1871406968.png', '07770 777 77 77'),
(10, 'muhammad', 'amjad', 'https://www.facebook.com/share/1VCc4qAgce/', '1410537477.png', '07770 777 77 77');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `ranges` varchar(255) NOT NULL,
  `roomtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `floor`, `price`, `ranges`, `roomtype`) VALUES
(1, 'A1', 'First', '$500', '1-20', 'Deluxe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
