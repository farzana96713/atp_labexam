-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 12:57 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atplab`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `travelmedium` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `representation` varchar(50) NOT NULL,
  `poststatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `country`, `place`, `cost`, `travelmedium`, `description`, `representation`, `poststatus`) VALUES
(1, 'Bangladesh', 'lalbag', 5000, 'bus', 'a nice place.', 'sdass', 'inactive'),
(2, 'bangladesh', 'sajek', 7000, 'bus', 'a nice view.', 'sdsdb', 'active'),
(4, 'china', 'Xi\'an City Walls', 90000, 'plane', 'nice place', 'sdsdb', 'active'),
(5, 'bangladesh', 'bandarban', 8000, 'bus', 'a good place to visit', 'sdass', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(70) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `address`, `phone`, `email`, `type`) VALUES
(1, 'farzana', '12345', '1934567892', 1934567892, 'farzana@gmail.com', 'admin'),
(7, 'pranto', '77', 'Nikunja-2', 1557867913, 'pranto@gmail.com', 'scout'),
(8, 'mahmudul', '77', 'Nikunja-2', 1557867912, 'mahmudul@gmail.com', 'scout'),
(9, 'mushfiq', '12345', 'House no-2 flat no-8AB', 1620418973, 'mushfiq@gmail.com', 'generalusers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
