-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 06:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_from_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcat`
--

CREATE TABLE `addcat` (
  `c_id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcat`
--

INSERT INTO `addcat` (`c_id`, `cname`) VALUES
(1, 'Electronics'),
(2, 'Vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `addorderdetail`
--

CREATE TABLE `addorderdetail` (
  `ao_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL,
  `shipcom` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `status` varchar(800) NOT NULL,
  `u_id` int(100) NOT NULL,
  `or_id` int(100) NOT NULL,
  `paymode` varchar(100) NOT NULL,
  `tamount` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addsellerproduct`
--

CREATE TABLE `addsellerproduct` (
  `p_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `mdat` varchar(100) NOT NULL,
  `edat` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `description` varchar(800) NOT NULL,
  `cs_id` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsellerproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminfeedback`
--

CREATE TABLE `adminfeedback` (
  `af_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `u_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cancelseller`
--

CREATE TABLE `cancelseller` (
  `cs_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `pdf` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `pd_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `cs_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordercheckout`
--

CREATE TABLE `ordercheckout` (
  `or_id` int(11) NOT NULL,
  `u_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL,
  `paymode` varchar(100) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `cardno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `tamount` int(100) NOT NULL,
  `expm` varchar(100) NOT NULL,
  `expy` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderedproduct`
--

CREATE TABLE `orderedproduct` (
  `ob_id` int(11) NOT NULL,
  `u_id` int(100) NOT NULL,
  `or_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `p_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cs_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `feed` varchar(1000) NOT NULL,
  `p_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `s_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `pdf` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sendpayment`
--

CREATE TABLE `sendpayment` (
  `pay_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cs_id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `or_id` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cnumber` varchar(100) NOT NULL,
  `expm` int(100) NOT NULL,
  `expy` int(100) NOT NULL,
  `cvv` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `address` varchar(800) NOT NULL,
  `tid` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcat`
--
ALTER TABLE `addcat`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `addorderdetail`
--
ALTER TABLE `addorderdetail`
  ADD PRIMARY KEY (`ao_id`);

--
-- Indexes for table `addsellerproduct`
--
ALTER TABLE `addsellerproduct`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `adminfeedback`
--
ALTER TABLE `adminfeedback`
  ADD PRIMARY KEY (`af_id`);

--
-- Indexes for table `cancelseller`
--
ALTER TABLE `cancelseller`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `ordercheckout`
--
ALTER TABLE `ordercheckout`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `orderedproduct`
--
ALTER TABLE `orderedproduct`
  ADD PRIMARY KEY (`ob_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `sendpayment`
--
ALTER TABLE `sendpayment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcat`
--
ALTER TABLE `addcat`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addorderdetail`
--
ALTER TABLE `addorderdetail`
  MODIFY `ao_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addsellerproduct`
--
ALTER TABLE `addsellerproduct`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminfeedback`
--
ALTER TABLE `adminfeedback`
  MODIFY `af_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cancelseller`
--
ALTER TABLE `cancelseller`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordercheckout`
--
ALTER TABLE `ordercheckout`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderedproduct`
--
ALTER TABLE `orderedproduct`
  MODIFY `ob_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sendpayment`
--
ALTER TABLE `sendpayment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
