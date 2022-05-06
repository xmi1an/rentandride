-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 03:32 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent&ride`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `a_username` varchar(20) NOT NULL,
  `a_password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `name`, `a_username`, `a_password`) VALUES
(1, 'Lost Variables', 'tlv', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `b_id` int(5) NOT NULL,
  `u_name` varchar(25) NOT NULL,
  `v_id` int(11) NOT NULL,
  `v_fromdate` varchar(120) NOT NULL,
  `v_todate` varchar(120) CHARACTER SET latin1 NOT NULL,
  `v_licenseno` varchar(16) NOT NULL,
  `v_licenseimg` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`b_id`, `u_name`, `v_id`, `v_fromdate`, `v_todate`, `v_licenseno`, `v_licenseimg`) VALUES
(7, 'Hitesh Bhamat', 3, '5/5/2022', '5/9/2022', 'AGB69OP', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `c_id` int(11) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_subject` varchar(100) NOT NULL,
  `c_reason` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`c_id`, `c_email`, `c_name`, `c_subject`, `c_reason`) VALUES
(1, 'hitesh@gmail.com', 'Hitesh', 'Rain water flooding in.', 'Rain water flooding in. Need to take care of home.'),
(2, 'anil@gmail.com', 'Anil', 'The ultimate productivity tool', 'The ultimate productivity tool you have been waiti'),
(3, 'jaydepi@gmail.com', 'Jaydeep', 'Came across a black cat ', 'Came across a black cat when I stepped out of home.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(25) NOT NULL,
  `t_feedback` varchar(300) NOT NULL,
  `t_postingdate` date NOT NULL DEFAULT current_timestamp(),
  `t_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`t_id`, `t_name`, `t_feedback`, `t_postingdate`, `t_status`) VALUES
(2, 'Anil', 'Thanks for the great service. The service was excellent. Your company ', '2022-05-03', ''),
(3, 'Jignesh', 'After using Rent&Ride my Journy skyrocketed! I am so pleased with this service. Thank You!', '2022-05-03', ''),
(4, 'Adesh', 'Thanks for the great service. The service was excellent. Your company is truly upstanding and is behind its product 100%.Car Rent has completely surpassed our expectations. I am really satisfied with my Car Rent. Man, this thing is getting better and better as I learn more about it.', '2022-05-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(5) NOT NULL,
  `u_name` varchar(25) NOT NULL,
  `u_username` varchar(20) NOT NULL,
  `u_password` varchar(25) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_city` varchar(15) NOT NULL,
  `u_RegDate` datetime NOT NULL DEFAULT current_timestamp(),
  `u_UpdationDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `u_name`, `u_username`, `u_password`, `u_email`, `u_city`, `u_RegDate`, `u_UpdationDate`) VALUES
(27, 'Prakash Manat', 'killergopu', '1234', 'pankajwithgopu@gmail.com', 'ahemdabad', '2022-04-12 15:48:06', '2022-04-12 15:48:06'),
(28, 'Hitesh Bhamat', 'hitubha', 'Hitubha@123?', 'hakinep312@yncyjs.com', 'Himmatnagar', '2022-04-15 21:25:21', '2022-04-15 21:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE `tbl_vehicle` (
  `v_id` int(5) NOT NULL,
  `user_id` varchar(4) NOT NULL,
  `v_brand` varchar(20) NOT NULL,
  `v_name` varchar(10) NOT NULL,
  `v_city` varchar(20) NOT NULL,
  `v_overview` varchar(150) NOT NULL,
  `v_rent` int(10) NOT NULL,
  `v_fueltype` varchar(10) NOT NULL,
  `v_seatingcapacity` int(2) NOT NULL,
  `v_image1` varchar(255) NOT NULL,
  `v_image2` varchar(255) NOT NULL,
  `v_image3` varchar(255) NOT NULL,
  `v_image4` varchar(255) NOT NULL,
  `v_regdate` date NOT NULL DEFAULT current_timestamp(),
  `v_updationdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`v_id`, `user_id`, `v_brand`, `v_name`, `v_city`, `v_overview`, `v_rent`, `v_fueltype`, `v_seatingcapacity`, `v_image1`, `v_image2`, `v_image3`, `v_image4`, `v_regdate`, `v_updationdate`) VALUES
(1, '28', 'Marutii', 'Swift', 'Idar', 'Very Good Condition ', 1000, 'Gas', 4, 'images\\vehicals\\baleno.jpg', '', '', '', '2022-04-11', '2022-04-11'),
(3, '28', 'Maruti', 'WagonR', 'Idar', 'Very Good Condition ', 1000, 'Gas', 4, 'images\\vehicals\\wagonr.jpg', '', '', '', '2022-04-13', '2022-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_username` (`u_username`,`u_password`);

--
-- Indexes for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `b_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  MODIFY `v_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
