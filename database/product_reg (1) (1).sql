-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 06:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_reg`
--

CREATE TABLE `product_reg` (
  `pid` int(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pcategory` varchar(200) NOT NULL,
  `pdescription` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `pquantity` int(200) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `pstatus` varchar(200) NOT NULL,
  `quantity_sold` int(200) NOT NULL,
  `delivery_status` varchar(200) NOT NULL,
  `reviews` int(200) NOT NULL,
  `payment_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_reg`
--

INSERT INTO `product_reg` (`pid`, `pname`, `pcategory`, `pdescription`, `price`, `pquantity`, `pimage`, `pstatus`, `quantity_sold`, `delivery_status`, `reviews`, `payment_status`) VALUES
(9, 'Micro Oven', 'Electronics', '    sony', 13000, 100, '../images/460954243_506348895664615_1158044774528953219_n.jpg', 'active', 200, 'Delivered', 0, 'paid'),
(10, 'Bed sheet', 'Bedding & Bath', ' Aarong', 1800, 88, '../images/Screenshot 2024-09-21 104200.png', 'unpaid', 200, 'Pending', 0, 'unpaid\r\n'),
(11, 'Fan', 'Electronics', '    Nice', 12348, 1234, '../images/scmst-logo.png', 'Inactive', 200, 'Delivered', 0, 'Unpaid'),
(12, 'Micro Oven', 'Electronics', '    Nova', 5000, 100, '../images/Screenshot 2024-09-23 212121.png', 'paid', 200, 'Delivered', 2, 'Unpaid'),
(13, 'mobile', 'Electronics', '    Nokia', 2300, 100, '../images/Screenshot 2024-09-23 212121.png', 'active', 200, 'Delivered', 2, 'Unpaid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_reg`
--
ALTER TABLE `product_reg`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_reg`
--
ALTER TABLE `product_reg`
  MODIFY `pid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
