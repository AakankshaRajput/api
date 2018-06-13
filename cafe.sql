-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2018 at 06:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'Aakanksha', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `fordrinks` varchar(255) NOT NULL,
  `forfood` varchar(255) NOT NULL,
  `forpackages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `fordrinks`, `forfood`, `forpackages`) VALUES
(1, 'Student', '10%', '10%', '10%'),
(2, 'Staff', '5%', '5%', '5%'),
(3, 'VIP', '', '', ''),
(4, 'Black', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `block` int(11) DEFAULT NULL,
  `instituteId` varchar(255) NOT NULL,
  `customer_date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `uid`, `email`, `name`, `mobile`, `balance`, `category`, `block`, `instituteId`, `customer_date`, `created_at`) VALUES
(1, '23', 'shubhamsahu707@gmail.com', 'shubham', '8585916263', '1282.1', 'student', 1, 'anavM36339', '2018-05-12', '2018-05-26 06:41:33'),
(18, '123456', 'hello@dsd.com', 'my name is name', '9876543210', '1046.6', 'student', 1, 'anavM363339', '2018-05-14', '2018-06-01 07:51:10'),
(26, '123457', 'karan@gmail.com', 'Karan Bafna', '9874563217', '914', 'Staff', NULL, 'anavM363394', '2018-06-04', '2018-06-04 12:39:12'),
(27, '78965412356', 'shubah@gmail.com', 'Karan', '9874563210', '78', 'VIP', NULL, 'hgSDcD', '2018-06-11', '2018-06-11 05:28:25'),
(28, '2313213213', 'shubah@gmail.com', 'anu', '9874563210', '78', 'Staff', NULL, 'SNCLDJZXlvjZD:Cd', '2018-06-11', '2018-06-11 06:22:28'),
(29, '78965423', 'shuba123h@gmail.com', 'sadasdasd', '2312132132', '956523', 'Staff', NULL, 'sadSNCLDJZXlvjZD:Cd', '2018-06-11', '2018-06-11 06:25:33'),
(30, '789654123', 'aakanksha.webhint@gmail.com', 'coffeecafe', '5765855889', '78', 'Black', NULL, 'hgSDcDer', '2018-06-11', '2018-06-11 06:26:45'),
(31, '78965432323', 'aakansksha.webhnt@gmail.com', 'anudd', '9873223210', '78', 'VIP', NULL, 'hgSDcDqweqwe', '2018-06-11', '2018-06-11 06:28:27'),
(32, '123456767', 'chanky@gmail.com', 'chanky', '7432589630', '78', 'Student', NULL, 'hdkhmfbvousdv', '2018-06-11', '2018-06-11 06:29:23'),
(33, '12367', 'akki@gmail.com', 'akkki', '9874563217', '88.1', 'Staff', NULL, 'hgSDcDert', '2018-06-11', '2018-06-11 07:07:15'),
(34, '785496', 'satyam@gmail.com', 'Satyam', '7854125784', '95', 'Student', NULL, 'smdcDDShiuFDVBae', '2018-06-12', '2018-06-12 10:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `food_discount`
--

CREATE TABLE `food_discount` (
  `food_id` int(11) NOT NULL,
  `food_discount` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `institute_id` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_discount`
--

INSERT INTO `food_discount` (`food_id`, `food_discount`, `food_name`, `user_id`, `institute_id`, `category_id`) VALUES
(1, '23', 'jsCc', '23', '7895515kjgihk', 'Student'),
(2, '23', 'jsCc', '23', '7895515kjgihk', 'Student'),
(3, '89', 'hgihlnlji', '78965422', 'gguygiuh7', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `ins_id` int(11) NOT NULL,
  `institute_id` varchar(255) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `min_purchase` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `current_date_inst` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`ins_id`, `institute_id`, `institute_name`, `password`, `discount`, `min_purchase`, `category`, `package`, `payment`, `current_date_inst`, `created_at`) VALUES
(3, 'anavM36339', 'Manav Rachna International University', '123456', '22%', '1458', 'Student', 'Fordrinks', '120', '2018-05-24', NULL),
(4, 'GGAWAR84541', 'AGGARWAL COLLEGE ', '', '20%', '789', 'Staff', 'Forfood', '60', '2018-05-24', NULL),
(5, 'RGWGAA/32654', 'AGGARWAL COLLEGE ', '', '20%', '1020', 'Staff', 'Forpackages', '550', '2018-05-25', NULL),
(6, 'GOVIND5b07bef7d1f20/27341', 'GOVIND UNIVERSITY', '', '20%', '1000', 'Staff', 'Fordrinks', '550', '2018-05-25', NULL),
(7, 'DAV CE5b07bf535f67e/13220', 'DAV CENTENARY COLLEGE', '', '12%', '789', 'Black', 'Other', '120', '2018-05-25', NULL),
(12, 'Manav5b166c2b2897619008', 'Manav Rachna College', '', '10', '1000', 'Student', 'Forfood', '120', '2018-06-05', NULL),
(13, 'Satyug5b1e372b6380f43195', 'Satyug Darshan', '', '10%', '789', 'VIP', 'Fordrinks', '100', '2018-06-11', NULL),
(15, 'fdsfds5b1e6a1a2ab7613671', 'fdsfds', '', '12%', '22', 'Staff', 'Forpackages', '122', '2018-06-11', NULL),
(16, 'vjbjuh5b1f6c3ff395f41784', 'vjbjuhbkj', '', '78%', '1000', 'Staff', '', '100', '1995-05-07', NULL),
(22, 'sfsfxc5b1f81ec638bf82939', 'sfsfxcddddddddddd', '', '10%', '22', 'Student', '', '100', '1995-02-04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `packages_id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fordrinks` varchar(255) NOT NULL,
  `forfood` varchar(255) NOT NULL,
  `forpackages` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`packages_id`, `uid`, `name`, `fordrinks`, `forfood`, `forpackages`, `created_at`, `updated_at`) VALUES
(3, '123456789012', '', '15', '35', '90', '1527850896675', '2018-06-01 11:46:13'),
(4, '123456789019', '', '35', '65', '120', '1527850896699', '2018-06-01 11:46:13'),
(5, '123456789012', '', '15', '35', '90', '1527850896675', '2018-06-01 11:53:13'),
(6, '123456789019', '', '35', '65', '120', '1527850896699', '2018-06-01 11:53:13'),
(7, '123456789012', '', '15', '35', '90', '1527850896675', '2018-06-01 11:53:44'),
(8, '123456789019', '', '35', '65', '120', '1527850896699', '2018-06-01 11:53:44'),
(9, '123456789012', '', '15', '35', '90', '1527850896675', '2018-06-01 11:53:59'),
(10, '123456', '', '35', '65', '120', '1527850896699', '2018-06-05 11:53:59'),
(11, '123456', '', '35', '65', '120', '1527850896699', '2018-06-05 11:53:59'),
(12, '23', '', '35', '65', '120', '1527850896699', '2018-06-05 11:53:59'),
(13, '23', '', '35', '65', '120', '1527850896699', '2018-06-05 11:53:59'),
(15, '78965412356', '', '67', '56', '56', '', '2018-06-11 05:40:21'),
(16, '123456767', '', '23', '56', '67', '', '2018-06-11 06:43:48'),
(17, '8799654123', '', '345', '56', '89', '', '2018-06-11 06:46:34'),
(18, '789654123', '', '34', '456', '67', '', '2018-06-11 06:50:38'),
(19, '78965432323', '', '234', '456', '789', '', '2018-06-11 06:54:41'),
(20, '12367', '', '34', '56', '78', '', '2018-06-11 07:07:31'),
(21, '785496', 'Satyam', '87', '89', '56', '', '2018-06-12 10:13:30'),
(22, '123457', 'Karan Bafna', '78', '89', '65', '', '2018-06-12 10:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `institute_id` varchar(255) DEFAULT NULL,
  `fordrinks` varchar(255) NOT NULL,
  `forfood` varchar(255) NOT NULL,
  `forpackages` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `institute_id`, `fordrinks`, `forfood`, `forpackages`, `created_at`, `updated_at`) VALUES
(26, 'anavM36339', '100', '120', '160', '2018-06-04 06:16:10', '2018-06-04 06:16:10'),
(27, 'anavM36339', '100', '120', '160', '2018-06-04 06:16:10', '2018-06-04 06:16:10'),
(28, 'anavM36339', '100', '120', '160', '2018-06-04 06:16:10', '2018-06-04 06:16:10'),
(29, NULL, '123', '400', '375', '2018-06-05 05:45:40', '2018-06-05 05:45:40'),
(30, NULL, '45', '67', '45', '2018-06-11 05:38:14', '2018-06-11 05:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `adhar_no` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `balance` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `cur_date_user` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `institute`, `adhar_no`, `user_name`, `password`, `mobile`, `email`, `balance`, `token`, `status`, `cur_date_user`, `ip_address`, `update_at`, `created_at`) VALUES
(32, 'anavM36339', '7898 4561 1230', 'Aakanksha', '18118', '9899588283', 'aakanksha.webhnt@gmail.com', '1403.1', 'Aakan-85225', 0, '2018-05-29', '::1', '2018-06-05 05:34:35', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `uid` (`uid`,`email`,`mobile`);

--
-- Indexes for table `food_discount`
--
ALTER TABLE `food_discount`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`packages_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `adhar_no` (`adhar_no`,`mobile`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `food_discount`
--
ALTER TABLE `food_discount`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `packages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
