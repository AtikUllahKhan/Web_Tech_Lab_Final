-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 01:35 PM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `LId` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `LPass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`LId`, `LName`, `LPass`) VALUES
('1', 'Abid', 'aa'),
('2', 'Hasan', 'bb'),
('3', 'Kalam', 'dd'),
('4', 'Rafi', 'ss'),
('5', 'Alnafi', 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `bookID` varchar(50) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`bookID`, `bookName`, `genre`, `available`) VALUES
('1', 'Learning C++ for beginners', 'academic', 25),
('2', 'Ami fasi cai', 'historical', 120),
('3', 'HTML for a better future', 'academic', 37),
('4', 'Pother pachali', 'novel', 5),
('5', 'Chokher bali', 'child novel', 22),
('6', 'paradoxical sajid', 'religion', 30);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sId` varchar(50) NOT NULL,
  `sName` varchar(50) NOT NULL,
  `sPass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sId`, `sName`, `sPass`) VALUES
('1', 'Habib', 'aaa'),
('2', 'Wahid', 'vvv'),
('3', 'Nahid', 'ooo'),
('4', 'Ovi', 'ppp'),
('5', 'Emon', 'eee');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
