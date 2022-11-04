-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 07:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `address` varchar(25) NOT NULL,
  `mobile` int(10) NOT NULL,
  `role` enum('admin','employee','customer') NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `gender`, `address`, `mobile`, `role`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'm', 'Jaffna', 123546778, 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'jhon peter', 'cus@gmail.com', 'm', 'jaffna', 345353, 'customer', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'jhon marsh', 'cus2@gmail.com', 'm', 'jaffna', 31263216, 'customer', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'jhon', 'emp@gmail.com', 'm', 'jaffna', 2322333, 'employee', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'abi', 'abcz@gmail.com', 'f', 'Jaffna', 23124, 'customer', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
