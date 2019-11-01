-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 05:27 AM
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
-- Table structure for table `a43`
--

CREATE TABLE `a43` (
  `t_id` int(10) UNSIGNED NOT NULL,
  `e_id` int(11) NOT NULL,
  `h_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a43`
--

INSERT INTO `a43` (`t_id`, `e_id`, `h_id`, `user_id`) VALUES
(1, 43, 'ss1223', 1),
(2, 43, 'ss1223', 1),
(3, 43, 'ss1223', 1),
(4, 43, 'ss1223', 1),
(5, 43, 'ss1223', 0),
(6, 43, 'ss1223', 0),
(7, 43, 'ss1223', 0),
(8, 43, 'ss1223', 0),
(9, 43, 'ss1223', 0),
(10, 43, 'ss1223', 0),
(11, 43, 'ss1223', 0),
(12, 43, 'ss1223', 0),
(13, 43, 'ss1223', 0),
(14, 43, 'ss1223', 0),
(15, 43, 'ss1223', 0),
(16, 43, 'ss1223', 0),
(17, 43, 'ss1223', 0),
(18, 43, 'ss1223', 0),
(19, 43, 'ss1223', 24),
(20, 43, 'ss1223', 0),
(21, 43, 'ss1223', 0),
(22, 43, 'ss1223', 0),
(23, 43, 'ss1223', 0),
(24, 43, 'ss1223', 0),
(25, 43, 'ss1223', 0),
(26, 43, 'ss1223', 0),
(27, 43, 'ss1223', 0),
(28, 43, 'ss1223', 0),
(29, 43, 'ss1223', 0),
(30, 43, 'ss1223', 0),
(31, 43, 'ss1223', 0),
(32, 43, 'ss1223', 0),
(33, 43, 'ss1223', 0),
(34, 43, 'ss1223', 0),
(35, 43, 'ss1223', 0),
(36, 43, 'ss1223', 0),
(37, 43, 'ss1223', 0),
(38, 43, 'ss1223', 0),
(39, 43, 'ss1223', 0),
(40, 43, 'ss1223', 0),
(41, 43, 'ss1223', 0),
(42, 43, 'ss1223', 0),
(43, 43, 'ss1223', 0),
(44, 43, 'ss1223', 0),
(45, 43, 'ss1223', 0),
(46, 43, 'ss1223', 0),
(47, 43, 'ss1223', 0),
(48, 43, 'ss1223', 0),
(49, 43, 'ss1223', 0),
(50, 43, 'ss1223', 0);

-- --------------------------------------------------------

--
-- Table structure for table `a44`
--

CREATE TABLE `a44` (
  `t_id` int(10) UNSIGNED NOT NULL,
  `e_id` int(11) NOT NULL,
  `h_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a44`
--

INSERT INTO `a44` (`t_id`, `e_id`, `h_id`, `user_id`) VALUES
(1, 44, 'ss1223', 0),
(2, 44, 'ss1223', 0),
(3, 44, 'ss1223', 24),
(4, 44, 'ss1223', 0),
(5, 44, 'ss1223', 0),
(6, 44, 'ss1223', 0),
(7, 44, 'ss1223', 0),
(8, 44, 'ss1223', 0),
(9, 44, 'ss1223', 0),
(10, 44, 'ss1223', 0);

-- --------------------------------------------------------

--
-- Table structure for table `a45`
--

CREATE TABLE `a45` (
  `t_id` int(10) UNSIGNED NOT NULL,
  `e_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a45`
--

INSERT INTO `a45` (`t_id`, `e_id`, `user_id`) VALUES
(1, 45, 26),
(2, 45, 26),
(3, 45, 26),
(4, 45, 26),
(5, 45, 26),
(6, 45, 26),
(7, 45, 0),
(8, 45, 0),
(9, 45, 0),
(10, 45, 24),
(11, 45, 0),
(12, 45, 0),
(13, 45, 0),
(14, 45, 0),
(15, 45, 0),
(16, 45, 0),
(17, 45, 0),
(18, 45, 0),
(19, 45, 0),
(20, 45, 0),
(21, 45, 0),
(22, 45, 0),
(23, 45, 0),
(24, 45, 0),
(25, 45, 0),
(26, 45, 0),
(27, 45, 0),
(28, 45, 0),
(29, 45, 0),
(30, 45, 0),
(31, 45, 0),
(32, 45, 0),
(33, 45, 0),
(34, 45, 0),
(35, 45, 0),
(36, 45, 0),
(37, 45, 0),
(38, 45, 0),
(39, 45, 0),
(40, 45, 0),
(41, 45, 0),
(42, 45, 0),
(43, 45, 0),
(44, 45, 0),
(45, 45, 0),
(46, 45, 0),
(47, 45, 0),
(48, 45, 0),
(49, 45, 0),
(50, 45, 0);

-- --------------------------------------------------------

--
-- Table structure for table `a46`
--

CREATE TABLE `a46` (
  `t_id` int(10) UNSIGNED NOT NULL,
  `e_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a46`
--

INSERT INTO `a46` (`t_id`, `e_id`, `user_id`) VALUES
(1, 46, 1),
(2, 46, 1),
(3, 46, 0),
(4, 46, 0),
(5, 46, 0),
(6, 46, 0),
(7, 46, 1),
(8, 46, 1),
(9, 46, 0),
(10, 46, 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_user_id` int(11) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_type` varchar(1) NOT NULL,
  `e_no_seat` int(11) NOT NULL,
  `e_disc` text NOT NULL,
  `e_img` text NOT NULL,
  `e_tprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_user_id`, `e_title`, `e_type`, `e_no_seat`, `e_disc`, `e_img`, `e_tprice`) VALUES
(5, 25, 'Halloween Night', '', 50, 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 'phpCourse.png', 5000),
(6, 25, 'Batch Party', '', 10, 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 'javascriptCourse.jpg', 2500),
(42, 24, 'NSBM TO KANDY', 'T', 50, 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 'javascriptCourse.jpg', 500),
(43, 1, 'Idea Go', 'E', 50, 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 'image_5.jpg', 500),
(44, 1, 'Halloween Night', 'E', 10, 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 'javascriptCourse.jpg', 5000),
(45, 24, 'Green Flames', 'E', 50, 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 'phpCourse.png', 1500),
(46, 1, 'java', 'E', 10, 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 'javaCourse.jpg', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `t_id` int(10) UNSIGNED NOT NULL,
  `e_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`t_id`, `e_id`, `user_id`) VALUES
(1, 28, 0),
(2, 28, 0),
(3, 28, 0),
(4, 28, 0),
(5, 28, 0),
(6, 28, 0),
(7, 28, 0),
(8, 28, 0),
(9, 28, 0),
(10, 28, 0);

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
(24, 'm123', '1e2a796539042ca860c3091662aa4346', 'manuja', 'mallikarachchi', 'manuja@gmail.com', 'M', 0, 'H', '2019-10-30 08:11:56'),
(25, 'sanjana', 'c5990a201e678b5ff2d3ad5091753f2f', 'sanjana', 'sulakshana', 'sanjanasulakshanawitharanage@gmail.com', 'M', 777123123, 'H', '2019-10-31 08:38:54'),
(26, 'r123', '1dc90e80c77fe245a82ea7ed30d1f849', 'roshan', 'dias', 'r@gmail.com', 'M', 713695778, 'C', '2019-10-31 08:50:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a43`
--
ALTER TABLE `a43`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `a44`
--
ALTER TABLE `a44`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `a45`
--
ALTER TABLE `a45`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `a46`
--
ALTER TABLE `a46`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a43`
--
ALTER TABLE `a43`
  MODIFY `t_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `a44`
--
ALTER TABLE `a44`
  MODIFY `t_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `a45`
--
ALTER TABLE `a45`
  MODIFY `t_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `a46`
--
ALTER TABLE `a46`
  MODIFY `t_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `t_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
