-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 07:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodmania`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_number` int(6) NOT NULL,
  `amount` int(4) NOT NULL,
  `time_of_order` date NOT NULL,
  `recieve_time` date NOT NULL,
  `Courier_id` int(4) NOT NULL,
  `User_id` int(4) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_number`, `amount`, `time_of_order`, `recieve_time`, `Courier_id`, `User_id`, `address`) VALUES
(2, 500, '2018-10-09', '2018-12-06', 1, 2, 'REHMANI GARDEN FLAT NO 70004'),
(3, 800, '2018-10-23', '2018-12-06', 2, 2, 'al azhar garden 8053'),
(4, 1200, '2018-06-18', '2018-12-06', 3, 2, 'sana towers 202 flat no sector 35/b'),
(5, 300, '2018-12-09', '2018-12-06', 4, 2, 'bhens colony flat no 2031 fast'),
(6, 2000, '2018-12-10', '2018-12-06', 3, 3, 'karimabad f-11'),
(7, 1300, '2018-08-13', '2018-12-06', 6, 3, 'rahimabad 567-f'),
(8, 600, '2018-08-13', '2018-12-06', 3, 3, 'sohrab goth flatno 123'),
(9, 1200, '2018-12-10', '2018-12-06', 4, 4, 'manzilpump flat no 3435'),
(10, 550, '2018-07-24', '2018-12-06', 5, 4, 'mina bazaar flat no 34'),
(11, 600, '2018-09-10', '2018-12-06', 7, 4, 'saddar atrium mall'),
(19, 750, '2018-12-07', '0000-00-00', 1, 2, 'al azhar garden karachi'),
(20, 610, '2018-12-07', '0000-00-00', 1, 2, 'rahimabad federal b area '),
(21, 280, '2018-12-07', '0000-00-00', 1, 2, 'ali square, ayesha manzil ,karachi'),
(22, 450, '2018-12-07', '0000-00-00', 1, 2, 'al azhar garden karachi');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `chef_id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cnic` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`chef_id`, `name`, `cnic`) VALUES
(1, 'johncarter', '4210167891011'),
(2, 'elizabethswan', '4210167891012'),
(3, 'chrismorris', '4210167891013'),
(4, 'simonrichards', '4210167891014'),
(5, 'christopherlee', '4210167891015'),
(6, 'ibraheemasaeed', '4210167891016'),
(7, 'gordan', '4210167891017'),
(8, 'ramsey', '4210167891018'),
(9, 'akshaykumar', '4210167891019'),
(10, 'naqib', '4210167891037'),
(11, 'xyz', '4210167891038'),
(12, 'yaseen', '4210167891046');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courier_id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bike_number` varchar(11) NOT NULL,
  `cnic` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courier_id`, `name`, `bike_number`, `cnic`) VALUES
(1, 'Christianbale', 'ABC-123H', '4210167891016'),
(2, 'VinDiesel', 'DEF-123H', '4210167891021'),
(3, 'JasonStatham', 'GHI-123H', '4210167891022'),
(4, 'Dwaneyjhonson', 'JKL-123H', '4210167891023'),
(5, 'Salimshaddy', 'MNO-123H', '4210167891024'),
(6, 'Ludacris', 'PQR-123H', '4210167891025'),
(7, 'paul', 'stu-123h', '4210167891026'),
(8, 'usamabinladen', 'vwx-123h', '4210167891027');

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE `employee_history` (
  `name` varchar(100) NOT NULL,
  `dateofhiring` date NOT NULL,
  `position` varchar(10) NOT NULL,
  `dateofleaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_history`
--

INSERT INTO `employee_history` (`name`, `dateofhiring`, `position`, `dateofleaving`) VALUES
('Akber', '2018-10-12', 'chef', '2018-12-08'),
('Alizain', '2018-10-09', 'chef', '2018-12-15'),
('Sanif Momin', '2018-10-19', 'chef', '2019-12-15'),
('Sanif Naushad', '2017-11-19', 'chef', '2018-12-15'),
('Naqib', '2017-11-20', 'chef', '2020-12-15'),
('Hasnain', '2016-11-18', 'courier', '2020-12-25'),
('Rohan', '2013-11-18', 'courier', '2018-11-25'),
('Mubariz', '2014-11-12', 'courier', '2016-11-25'),
('Shameer', '2015-11-11', 'courier', '2017-12-25'),
('Deepak', '2016-11-11', 'courier', '2016-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` varchar(5) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `cost` int(4) NOT NULL,
  `category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `name`, `cost`, `category`) VALUES
('d1', 'gulab jamun', 150, 'desert'),
('d2', 'rabri kheer', 150, 'desert'),
('d3', 'ice cream', 150, 'desert'),
('d4', 'falooda', 100, 'desert'),
('d5', 'halwa', 100, 'desert'),
('m1', 'chicken biryani', 100, 'main'),
('m10', 'malai boti', 180, 'main'),
('m2', 'mutton biryani', 100, 'main'),
('m3', 'chicken karahi', 150, 'main'),
('m4', 'chicken special karahi', 180, 'main'),
('m5', 'mutton karahi', 180, 'main'),
('m6', 'chicken tandoori', 180, 'main'),
('m7', 'chicken 65', 200, 'main'),
('m8', 'chicken bbq', 200, 'main'),
('m9', 'mutton bbq', 220, 'main'),
('s1', 'salad', 30, 'starter'),
('s2', 'potato salad', 50, 'starter'),
('s3', 'chicken corn soupe', 50, 'starter'),
('s4', 'chicken hotnsour soupe', 50, 'starter'),
('s5', 'cheese balls', 70, 'starter');

-- --------------------------------------------------------

--
-- Table structure for table `food_chef`
--

CREATE TABLE `food_chef` (
  `Chef_id` int(4) NOT NULL,
  `category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_types`
--

CREATE TABLE `food_types` (
  `category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_types`
--

INSERT INTO `food_types` (`category`) VALUES
('desert'),
('main'),
('starter');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderdate` date NOT NULL,
  `bill_number` int(6) NOT NULL,
  `Food_id` varchar(5) NOT NULL,
  `User_id` int(4) NOT NULL,
  `Chef_id` int(4) NOT NULL,
  `amount` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoper`
--

CREATE TABLE `shoper` (
  `item` varchar(30) NOT NULL,
  `price` int(4) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `tprice` int(4) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(10) DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'user', 'user', 'User'),
(3, 'kenny', 'kenny', 'User'),
(4, 'levi', 'levi', 'User'),
(5, 'sanif', 'sanif', 'User'),
(6, 'hasnain', 'hasnain', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_number`),
  ADD KEY `Bill_Courier_FK` (`Courier_id`),
  ADD KEY `Bill_User_FK` (`User_id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`chef_id`),
  ADD UNIQUE KEY `Chef_cnic_UN` (`cnic`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courier_id`),
  ADD UNIQUE KEY `Courier_bike_number_UN` (`bike_number`),
  ADD UNIQUE KEY `Courier_cnic_UN` (`cnic`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `Food_Category_FK` (`category`);

--
-- Indexes for table `food_chef`
--
ALTER TABLE `food_chef`
  ADD KEY `Food_Chef_Chef_FK` (`Chef_id`),
  ADD KEY `Food_Chef_Category_FK` (`category`);

--
-- Indexes for table `food_types`
--
ALTER TABLE `food_types`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `Order_Chef_FK` (`Chef_id`),
  ADD KEY `Order_Food_FK` (`Food_id`),
  ADD KEY `Order_User_FK` (`User_id`),
  ADD KEY `Order_Bill_number_FK` (`bill_number`);

--
-- Indexes for table `shoper`
--
ALTER TABLE `shoper`
  ADD PRIMARY KEY (`item`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_number` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `chef_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `courier_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `Bill_Courier_FK` FOREIGN KEY (`Courier_id`) REFERENCES `courier` (`courier_id`),
  ADD CONSTRAINT `Bill_User_FK` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `Food_Category_FK` FOREIGN KEY (`category`) REFERENCES `food_types` (`category`);

--
-- Constraints for table `food_chef`
--
ALTER TABLE `food_chef`
  ADD CONSTRAINT `Food_Chef_Category_FK` FOREIGN KEY (`category`) REFERENCES `food_types` (`category`),
  ADD CONSTRAINT `Food_Chef_Chef_FK` FOREIGN KEY (`Chef_id`) REFERENCES `chef` (`chef_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Order_Bill_number_FK` FOREIGN KEY (`bill_number`) REFERENCES `bill` (`bill_number`),
  ADD CONSTRAINT `Order_Chef_FK` FOREIGN KEY (`Chef_id`) REFERENCES `chef` (`chef_id`),
  ADD CONSTRAINT `Order_Food_FK` FOREIGN KEY (`Food_id`) REFERENCES `food` (`food_id`),
  ADD CONSTRAINT `Order_User_FK` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
