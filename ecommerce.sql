-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 01:32 PM
-- Server version: 5.7.18-log
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `b_id` int(20) NOT NULL,
  `b_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`b_id`, `b_title`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Sony'),
(4, 'LG'),
(5, 'Batterfly'),
(6, 'Nokia');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sl_no` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sl_no`, `p_id`, `u_id`, `qty`) VALUES
(35, 3, 1, 1),
(36, 4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `cat_id` int(20) NOT NULL,
  `cat_title` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Electronics Gadgets'),
(3, 'Home Appliances');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `p_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `trnx_id` varchar(20) NOT NULL,
  `p_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `u_id`, `p_id`, `qty`, `trnx_id`, `p_status`) VALUES
(1, 2, 2, 2, 'fzcjhbuye4546xvqxvy', 'Competed'),
(2, 2, 2, 2, 'fzcjhbuye4546xvqxvy', 'Competed');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(30) NOT NULL,
  `Uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Pname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `Uname`, `password`, `Pname`) VALUES
(7, 'regon', '1234', 'uploads/lg-uh600t_1.jpg'),
(8, 'regain', '1234', 'uploads/pho2.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_cat` varchar(30) NOT NULL,
  `p_brand` varchar(30) NOT NULL,
  `p_title` varchar(30) NOT NULL,
  `p_price` double NOT NULL,
  `p_img` varchar(40) NOT NULL,
  `p_qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_cat`, `p_brand`, `p_title`, `p_price`, `p_img`, `p_qty`) VALUES
(3, '1', '1', 'iphone 5S', 60000, 'uploads/language tree.jpeg', 3),
(4, '1', '1', 'iphone 7S', 90000, 'uploads/iphone7S.jpg', 4),
(5, '1', '3', 'Sony', 50000, 'uploads/iphone5S.png', 3),
(6, '1', '2', 'S 25', 40000, 'uploads/pho2.PNG', 2),
(7, '1', '2', 'abc', 30000, 'uploads/Capture22.PNG', 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cgpa` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `cgpa`, `dept`) VALUES
(1, 'abc', '4', 'cs'),
(2, 'abc', '4', 'cs'),
(3, 'abc', '4', 'cs'),
(4, 'abc', '4', 'cs'),
(8, 'def', '3.5', 'cs'),
(9, 'abcx', '3.9', 'CS'),
(10, 'mina', '3.8', 'CS'),
(11, 'regain', '3.9', 'CS'),
(12, 'reson', '4', 'CS'),
(13, 'abir', '4', 'CS'),
(14, 'regain', '3.9', 'CS'),
(15, 'reson', '4', 'CS'),
(16, 'abir', '4', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zip` int(40) NOT NULL,
  `country` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`u_id`, `fname`, `lname`, `uname`, `email`, `password`, `address`, `mobile`, `state`, `zip`, `country`) VALUES
(1, 'md', 'regain', 'regain', 'holysa2urn@gmail.com', '12345678', 'Mohakhali,Dhaka', '01554540265', 'Dhaka', 1234, 'Bangladesh'),
(2, 'md', 'regon', 'regon', 'false9@gmail.com', '12345678', 'Mohakhali,Dhaka', '01554540265', 'Dhaka', 1234, 'Bangladesh'),
(4, 'ab', 'shaikh', 'shaikh', 'you@gmail.com', '12345678', '1234 dha bd', '01554540265', 'California', 1234, 'United States'),
(5, 'abc', 'shaikh', 'abc', 'you@gmail.com', '12345678', '1234 dha bd', '01554540265', 'California', 1234, 'United States'),
(6, 'Saleque', 'Ahmed', 'saleque', 'salequeahmed96@gmail.com', '123456', 'Mirpur DOHS', '01727218545', 'California', 1216, 'United States'),
(7, 'a', 'b', 'admin', 'ad@gmail.com', 'admin', 'Dha 1234', '01554540265', 'DHAKA', 1213, 'BD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
