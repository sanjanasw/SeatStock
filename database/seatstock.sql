-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 07:29 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seatstock`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_user_id` int(11) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_no_seat` int(11) NOT NULL,
  `e_disc` text NOT NULL,
  `e_img` text NOT NULL,
  `e_tprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_user_id`, `e_title`, `e_no_seat`, `e_disc`, `e_img`, `e_tprice`) VALUES
(1, 24, 'web', 10, 'test test test test test test test test test test ', '', 5000),
(2, 24, 'web', 10, 'test test test test test test test test test test ', 'Drck Lion HD Color.jpg', 5000),
(3, 1, 'web', 10, 'test test test test test test test test test test ', 'FormatFactorycrest_HD_h3000~1.png', 5000),
(4, 1, 'web', 10, 'test test test test test test test test test test ', 'FormatFactorycrest_HD_h3000~1.png', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_gender` varchar(1) NOT NULL,
  `user_tp` int(10) NOT NULL,
  `user_role` varchar(1) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_fname`, `user_lname`, `user_email`, `user_gender`, `user_tp`, `user_role`, `trn_date`) VALUES
(1, 'ss1223', 'bcf5f52f2b42e85f9d9da9dd3b569927', 'SANJANA', 'WITHARANAGE', 'sanjanasulakshanawitharanage@gmail.com', 'M', 771991223, 'H', '2019-10-30 07:47:54'),
(24, 'm123', '1e2a796539042ca860c3091662aa4346', 'manuja', 'mallikarachchi', 'manuja@gmail.com', 'M', 0, 'H', '2019-10-30 08:11:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
