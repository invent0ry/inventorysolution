-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 08:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `cat_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` text NOT NULL,
  `emp_email` varchar(65) NOT NULL,
  `emp_phone` bigint(15) NOT NULL,
  `emp_aadhar` bigint(16) NOT NULL,
  `emp_photo` varchar(30) NOT NULL,
  `emp_pan` varchar(10) NOT NULL,
  `emp_gender` text NOT NULL,
  `manager_id` int(11) NOT NULL,
  `emp_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_phone`, `emp_aadhar`, `emp_photo`, `emp_pan`, `emp_gender`, `manager_id`, `emp_password`) VALUES
(1, 'muzz', '814ck@protonmail.com', 86787878798, 43434343434, 'Annotation 2020-01-10 000418.p', '45454543', '', 10, ''),
(2, 'kunais', 'ja8eer@protonmail.com', 6868768, 868686867878, 'Annotation 2020-01-10 000418.p', '5454534535', '', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` varchar(100) NOT NULL,
  `faq_answer` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(4, 'kjgaschj', 'ljhbcasb');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `user_role` char(10) NOT NULL,
  `login_id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `phone`, `user_role`, `login_id`, `profile_pic`, `password`) VALUES
(1, 'jabeer', 'ja8eer@protonmail.ch', 9999999999, 'admin', 0, '18322-download.jpg', 'admin123'),
(3, 'rihab', 'jabeer@protonmail.ch', 43434343, 'supervisor', 10, 'Annotation 2020-01-09 235035.png', 'Abcd123!'),
(4, 'muzz', '814ck@protonmail.com', 86787878798, 'employee', 1, 'Annotation 2020-01-10 000418.png', 'Muzz123#'),
(5, 'kunais', 'ja8eer@protonmail.com', 6868768, 'employee', 2, 'Annotation 2020-01-10 000418.png', 'Kunais1!'),
(6, 'shamsu', 'shamsu@gmail.com', 9997775563, 'supervisor', 11, 'Annotation 2020-01-10 000418.png', 'Shamsu@123');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(11) NOT NULL,
  `warehouse_id` varchar(50) NOT NULL,
  `manager_name` text NOT NULL,
  `manager_email` varchar(60) NOT NULL,
  `manager_phone` bigint(15) NOT NULL,
  `manager_photo` varchar(255) NOT NULL,
  `manager_pan` varchar(10) NOT NULL,
  `manager_aadhar` bigint(19) NOT NULL,
  `manager_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `warehouse_id`, `manager_name`, `manager_email`, `manager_phone`, `manager_photo`, `manager_pan`, `manager_aadhar`, `manager_password`) VALUES
(7, '', 'rihab', 'rizarihab@gmail.com', 42424242, 'Annotation 2020-01-10 000418.png', '5454', 12321324, ''),
(8, '', 'jabir', 'jabir@gmail.com', 9876543211, '18322-download.jpg', '4343433', 2222, ''),
(9, '6', 'rihab', 'ja8eer@protonmail.ch', 43434343, 'Annotation 2020-01-09 235035.png', '54545454', 343434343, ''),
(10, '7', 'rihab', 'ja8eer@protonmail.ch', 43434343, 'Annotation 2020-01-09 235035.png', '54545454', 343434343, ''),
(11, '', 'shamsu', 'shamsu@gmail.com', 9997775563, 'Annotation 2020-01-10 000418.png', '787g567v', 77777777777, '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `noti_id` int(11) NOT NULL,
  `noti_title` varchar(30) NOT NULL,
  `noti_message` varchar(5000) NOT NULL,
  `noti_date` date NOT NULL,
  `noti_time` time NOT NULL,
  `emp_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(30) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `warehouse_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `query_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `query_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `admin_replay` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`query_id`, `title`, `message`, `query_date`, `user_id`, `admin_replay`) VALUES
(1, 'coool ', 'THIS IS COOL MAN\r\n', '2020-03-11 07:05:31', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `retailer_id` int(11) NOT NULL,
  `retailer_name` text NOT NULL,
  `retailer_email` varchar(25) NOT NULL,
  `retailer_phone` bigint(15) NOT NULL,
  `retailer_address` varchar(100) NOT NULL,
  `retailer_shop_name` varchar(30) NOT NULL,
  `retailer_shop_address` varchar(100) NOT NULL,
  `retailer_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sale_date` date NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `sub_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_id`, `sub_name`, `sub_status`) VALUES
(0, 'samsung', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(11) NOT NULL,
  `tax_name` text NOT NULL,
  `tax_percentage` int(11) NOT NULL,
  `tax_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouse_id` int(11) NOT NULL,
  `warehouse_name` text NOT NULL,
  `manager_id` int(11) NOT NULL,
  `warehouse_address` varchar(100) NOT NULL,
  `warehouse_email` varchar(65) NOT NULL,
  `warehouse_phone` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`warehouse_id`, `warehouse_name`, `manager_id`, `warehouse_address`, `warehouse_email`, `warehouse_phone`) VALUES
(6, 'electronicsw', 0, 'klklokjfaed,fpaefgkpoggkoae', 'elec@gmail.com', 4343434343),
(7, 'fruits', 0, 'mangalore', 'fruits@gmail.com', 12345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `warehouse_id` (`manager_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`noti_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`retailer_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`warehouse_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `retailer`
--
ALTER TABLE `retailer`
  MODIFY `retailer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `warehouse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
