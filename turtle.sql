-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 10:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turtle`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_logs`
--

CREATE TABLE `add_logs` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `transaction` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_logs`
--

INSERT INTO `add_logs` (`id`, `email`, `transaction`, `date`) VALUES
(1, 'tricore012@gmail.com', 'ACCEPTED TERMS', '2023-02-05'),
(2, 'tricore012@gmail.com', 'ACCEPTED TERMS', '2023-02-05'),
(3, 'tricore012@gmail.com', 'ACCEPTED TERMS', '2023-02-05'),
(4, 'tricore012@gmail.com', 'ACCEPTED TERMS', '2023-02-05'),
(5, 'tricore012@gmail.com', 'ACCEPTED TERMS', '2023-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `user_id` int(11) NOT NULL,
  `eid` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`user_id`, `eid`, `email`, `status`) VALUES
(1, 101213, 'tricore012@gmail.com', 'VALID'),
(2, 8532, 'gmfacistol@outlook.com', 'VALID');

-- --------------------------------------------------------

--
-- Table structure for table `admin_pass`
--

CREATE TABLE `admin_pass` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `configuration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_pass`
--

INSERT INTO `admin_pass` (`id`, `user_id`, `password`, `configuration`) VALUES
(1, 1, 'admin', 'OFFLINE'),
(2, 1, '21232f297a57a5a743894a0e4a801fc3', 'ONLINE');

-- --------------------------------------------------------

--
-- Table structure for table `api_token`
--

CREATE TABLE `api_token` (
  `id` int(11) NOT NULL,
  `token` int(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_token`
--

INSERT INTO `api_token` (`id`, `token`, `email`) VALUES
(1, 11012, 'tricore012@gmail.com'),
(2, 12732, 'tricore012@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `start` varchar(250) NOT NULL,
  `end` varchar(250) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `start`, `end`, `category`) VALUES
(1, 'Club Punta Fuego', 'Punta Fuego Beach Club', 'Open'),
(2, 'Punta Fuego Yacht Club', 'Punta Fuego Beach Club', 'Kiddie');

-- --------------------------------------------------------

--
-- Table structure for table `client_security`
--

CREATE TABLE `client_security` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_security`
--

INSERT INTO `client_security` (`id`, `email`, `code`, `status`, `date`) VALUES
(1, 'tricore012@gmail.com', 8609, 'USED', '2023-02-05'),
(2, 'tricore012@gmail.com', 7934, 'USED', '2023-02-05'),
(3, 'tricore012@gmail.com', 9465, 'USED', '2023-02-05'),
(4, 'tricore012@gmail.com', 8783, 'USED', '2023-02-05'),
(5, 'tricore012@gmail.com', 9840, 'USED', '2023-02-05'),
(6, 'tricore012@gmail.com', 8182, 'USED', '2023-02-05'),
(7, 'tricore012@gmail.com', 8888, 'USED', '2023-02-07'),
(8, 'tricore012@gmail.com', 6899, 'USED', '2023-02-07'),
(9, 'tricore012@gmail.com', 9788, 'USED', '2023-02-07'),
(10, 'tricore012@gmail.com', 8424, 'USED', '2023-02-07'),
(11, 'tricore012@gmail.com', 9406, 'USED', '2023-02-25'),
(12, 'tricore012@gmail.com', 7482, 'USED', '2023-02-25'),
(13, 'tricore012@gmail.com', 9640, 'USED', '2023-02-25'),
(14, 'tricore012@gmail.com', 8330, 'USED', '2023-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `currently_running`
--

CREATE TABLE `currently_running` (
  `id` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `category` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `date_ended` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currently_running`
--

INSERT INTO `currently_running` (`id`, `code`, `category`, `date`, `date_ended`) VALUES
(1, 7481689, 'Open', '2023-02-25 03:58:41', '2023-02-25 04:25:09'),
(2, 7481690, 'Open', '2023-02-25 03:58:41', '2023-02-25 04:58:33'),
(3, 7481691, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(4, 7481692, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(5, 7481693, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(6, 7481694, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(7, 7481695, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(8, 7481696, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(9, 7481697, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(10, 7481698, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(11, 7481699, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(12, 7481700, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(13, 7481701, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(14, 7481702, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(15, 7481703, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(16, 7481704, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(17, 7481705, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00'),
(18, 7481706, 'Open', '2023-02-25 03:58:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `err_checker`
--

CREATE TABLE `err_checker` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `err_checker`
--

INSERT INTO `err_checker` (`id`, `email`, `date`) VALUES
(1, 'tricore012@gmail.com', '2023-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `age` int(50) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref` varchar(200) NOT NULL,
  `sponmem` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `qr` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `code`, `fname`, `mname`, `lname`, `address`, `dob`, `age`, `contact`, `email`, `ref`, `sponmem`, `category`, `type`, `status`, `qr`) VALUES
(1, '7481688', 'Abegaiil', 'Salvador', 'Facistol', '10 U206 Tarraville Subdivision', '2018-10-01', 5, '916653189', 'tricore012@gmail.com', 'Association / Club Member', '', 'Kiddie', 'Mens', 'VALID', ''),
(2, '7481689', 'Gerald Mico', 'Salvador', 'Facistol', '11 U206 Tarraville Subdivision', '2018-10-02', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(3, '7481690', 'Gerald Mico', 'Salvador', 'Facistol', '12 U206 Tarraville Subdivision', '2018-10-03', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(4, '7481691', 'Gerald Mico', 'Salvador', 'Facistol', '13 U206 Tarraville Subdivision', '2018-10-04', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(5, '7481692', 'Gerald Mico', 'Salvador', 'Facistol', '14 U206 Tarraville Subdivision', '2018-10-05', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(6, '7481693', 'Gerald Mico', 'Salvador', 'Facistol', '15 U206 Tarraville Subdivision', '2018-10-06', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(7, '7481694', 'Gerald Mico', 'Salvador', 'Facistol', '16 U206 Tarraville Subdivision', '2018-10-07', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(8, '7481695', 'Gerald Mico', 'Salvador', 'Facistol', '17 U206 Tarraville Subdivision', '2018-10-08', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(9, '7481696', 'Gerald Mico', 'Salvador', 'Facistol', '18 U206 Tarraville Subdivision', '2018-10-09', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(10, '7481697', 'Gerald Mico', 'Salvador', 'Facistol', '19 U206 Tarraville Subdivision', '2018-10-10', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(11, '7481698', 'Gerald Mico', 'Salvador', 'Facistol', '20 U206 Tarraville Subdivision', '2018-10-11', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(12, '7481699', 'Gerald Mico', 'Salvador', 'Facistol', '21 U206 Tarraville Subdivision', '2018-10-12', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(13, '7481700', 'Gerald Mico', 'Salvador', 'Facistol', '22 U206 Tarraville Subdivision', '2018-10-13', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(14, '7481701', 'Gerald Mico', 'Salvador', 'Facistol', '23 U206 Tarraville Subdivision', '2018-10-14', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(15, '7481702', 'Gerald Mico', 'Salvador', 'Facistol', '24 U206 Tarraville Subdivision', '2018-10-15', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(16, '7481703', 'Gerald Mico', 'Salvador', 'Facistol', '25 U206 Tarraville Subdivision', '2018-10-16', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(17, '7481704', 'Gerald Mico', 'Salvador', 'Facistol', '26 U206 Tarraville Subdivision', '2018-10-17', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(18, '7481705', 'Gerald Mico', 'Salvador', 'Facistol', '27 U206 Tarraville Subdivision', '2018-10-18', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(19, '7481706', 'Gerald Mico', 'Salvador', 'Facistol', '28 U206 Tarraville Subdivision', '2018-10-19', 27, '916653189', 'tricore012@gmail.com', 'Sponsored', 'Gerald Mico', 'Open', 'Mens', 'VALID', ''),
(21, '9136454', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', '2023-02-28', 0, '09166513189', 'tricore012@gmail.com', 'Association / Club Member', '', 'Kiddie', 'Mens', 'VALID', ''),
(22, '7181395', '', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', 'VALID', ''),
(23, '8819681', '', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', 'VALID', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_logs`
--
ALTER TABLE `add_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `admin_pass`
--
ALTER TABLE `admin_pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_token`
--
ALTER TABLE `api_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_security`
--
ALTER TABLE `client_security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currently_running`
--
ALTER TABLE `currently_running`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `err_checker`
--
ALTER TABLE `err_checker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_logs`
--
ALTER TABLE `add_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_pass`
--
ALTER TABLE `admin_pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `api_token`
--
ALTER TABLE `api_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_security`
--
ALTER TABLE `client_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `currently_running`
--
ALTER TABLE `currently_running`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `err_checker`
--
ALTER TABLE `err_checker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
