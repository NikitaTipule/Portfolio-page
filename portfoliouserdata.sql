-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 02:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliouserdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `about-me` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about-me`) VALUES
(1, 'Hello,'),
(2, ' My Name Is Nikita Sopan Tipule.'),
(3, 'I Am A Computer Engineering Student Of College Of Engineering Pune.I Know Python And C Language As Well As Little Bit Of C++. If You Have Any Project In Your Mind Then Work With Me. You Will Really Like My Work.'),
(4, 'I Am A Programmer . If You Want To Create A Software For Your Business Then I Will Make It Available As Soon As Possible.');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(255) NOT NULL,
  `edu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `edu`) VALUES
(1, 'Studies Computer Engineering Pursuring second Year'),
(2, 'Studies At Collage Of Engineering Pune, Maharashtra, India'),
(3, 'Studied At Bhausaheb Firodiya College Ahmednagar, Maharashtra, India'),
(4, 'Went To Bhausaheb Firodiya Highschool Ahmednagar, Maharashtra, India');

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(1, 'nikita', 'nikita@nikita.com', '9865329886', 'plz subsribe me'),
(2, 'tipule', 'tipule@tipule.com', '9987456123', 'thank u'),
(3, 'aradhya', 'aradhya@aradhya.com', '9876543210', '	hii					\r\n					'),
(4, 'vidya', 'vidya@vidya.com', '9658741230', '	I am vidya					\r\n					'),
(5, 'sopan', 'sopan@gmail.com', '9875461230', '		Hello			'),
(6, 'nikitatipule', 'nikita@gmail.com', '9587468123', '	hello					\r\n					'),
(7, 'niks', 'nikita@gmail.com', '9874512360', '	hello i m nikita					\r\n					'),
(8, 'nikita', 'nikita@gmal.com', '9658741230', '	hiii					\r\n					'),
(9, 'nikitatipule', 'nikita@nikita.com', '9874561230', 'this is portfolio website						\r\n					');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
