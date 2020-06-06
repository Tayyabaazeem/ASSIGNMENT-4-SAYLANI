-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 06:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `contect_no` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street_no` varchar(225) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `first_name`, `last_name`, `email`, `contect_no`, `country`, `city`, `street_no`, `house_no`, `description`) VALUES
(1, 'jj', 'jklj', 'kljlk', 'jlk', 'jlkj', 'lkj', 'kjl', 'kjlj', 'kjlk'),
(2, '$first_name', '$last_name', '$email', ' $contect', '$country', '$city', '$street', '$house', '$description'),
(3, 'hkj', 'jlhljhj', 'shargil_gr8@live.com', '', 'kjljkh', '', 'lhlj', 'lkhjkl', 'lkjh'),
(4, 'hkj', 'jlhljhj', 'shargil_gr8@live.com', '342432', 'kjljkh', '', 'lhlj', 'lkhjkl', 'lkjh'),
(5, 'hkj', 'jlhljhj', 'shargil_gr8@live.com', '342432', 'kjljkh', 'ljkh', 'lhlj', 'lkhjkl', 'lkjh'),
(6, 'hgjg', 'hgj', 'mubeen.shargil@gmail.com', '76786868', 'pakistan', 'jhgjgbvcn', 'hjkh', '768', 'jhvmv'),
(7, 'hgjg', 'hgj', 'mubeen.shargil@gmail.com', '76786868', 'pakistan', 'jhgjgbvcn', 'hjkh', '768', 'jhvmv'),
(8, '', '', '', '', '', '', '', '', ''),
(9, 'sad', 'sf', 'sdfnad@gmail.ccom', 'sf', 'dsf', 'sf', 'sd', 'df', 'ssd'),
(10, 'hhh', 'lhlhlh', 'hkhk@gaim', 'lhl', 'h', 'hlhl', 'hlhh', 'h', 'lhlhl'),
(11, 'usama', 'ahmed', 'u.s.khan7396@gmail.com', 'fwef', 'ahmed', 'eefwef', 'efef', 'fef', 'ewefwegfweg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'mubeen', 'pakistan'),
(2, 'uakhan', 'uakhan007'),
(3, 'uakhan', 'uakhan007');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `heading`, `image`, `link`) VALUES
(1, 'Home', 'header.jpg', 'Home.com'),
(2, 'Home style', 'project3.jpg', 'style.com'),
(3, 'Home working', 'service1.jpg', 'working');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
