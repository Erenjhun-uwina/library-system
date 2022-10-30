-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 12:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `date release` varchar(250) NOT NULL,
  `genre` varchar(250) NOT NULL,
  `cover img` varchar(250) NOT NULL,
  `publisher` varchar(250) NOT NULL,
  `language` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `date release`, `genre`, `cover img`, `publisher`, `language`) VALUES
(0, 'New ENGLISH-FILIPINO DICTIONARY', 'Rosario P. Nem Singh', '2017', 'Dictionary', '', 'ISA-JECHO PUBLISHING,INC.', ''),
(0, 'BUSINESS ENGLISH Correspondence', 'Fe O. Aquino, Consuelo C. Callang, Hermina S. Bas, Crisologa B. Capili', '2000', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `Id` int(11) NOT NULL,
  `FN` varchar(255) NOT NULL,
  `LN` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`Id`, `FN`, `LN`, `Password`, `Contact_no`) VALUES
(1, 'Desiree', 'Aquiatin', 'saythenameseventeen', ''),
(2, 'Enerjhun', 'Relon', '1234567890', ''),
(4, 'Maria Angelica Violeta', 'Agustin', 'Violet123', ''),
(5, 'Kelly ', 'Cabasal', 'Kellykels', ''),
(6, 'Jay Prince', 'Mangmang', 'Jay12345', ''),
(7, 'Charley', 'Emprese', '@11211122', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FN` varchar(255) NOT NULL,
  `LN` varchar(255) NOT NULL,
  `Student_no` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Grade_sec` varchar(50) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Contact_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FN`, `LN`, `Student_no`, `Password`, `Grade_sec`, `Email`, `Contact_no`) VALUES
(1, 'Desiree', 'Aquiatin', '', 'saythenameseventeen', '', '0', ''),
(2, 'Enerjhun', 'Relon', '', '1234567890', '', '0', ''),
(4, 'Maria Angelica Violeta', 'Agustin', '', 'Violet123', '', '0', ''),
(5, 'Kelly ', 'Cabasal', '', 'Kellykels', '', '0', ''),
(6, 'Jay Prince', 'Mangmang', '', 'Jay12345', '', '0', ''),
(7, 'Charley', 'Emprese', '', '@11211122', '', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
