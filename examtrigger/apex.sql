-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 08:03 AM
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
-- Database: `apex_p`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addm` (IN `n` VARCHAR(100), IN `a` VARCHAR(100), IN `c` VARCHAR(100))   BEGIN
INSERT INTO manufacturer SET id=null,manufacture_name=n,address=a,contact_no=c;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addp` (IN `n` VARCHAR(100), IN `p` INT(5), IN `mid` INT(15))   BEGIN
INSERT INTO product SET id=null,product_name=n,price=p,manufacture_id=mid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_display`
-- (See below for the actual view)
--
CREATE TABLE `data_display` (
`serial` int(15)
,`product_name` varchar(100)
,`price` int(5)
,`manufacture_name` varchar(100)
,`address` varchar(100)
,`contact_no` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(15) NOT NULL,
  `manufacture_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacture_name`, `address`, `contact_no`) VALUES
(1, 'hp', 'huweii', '09876'),
(7, 'asus', 'huweii', '09876');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `dlt_a` AFTER DELETE ON `manufacturer` FOR EACH ROW BEGIN
DELETE from product WHERE manufacture_id=old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(15) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacture_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `manufacture_id`) VALUES
(1, 'monitor', 300, 1),
(8, 'monitor', 7985, 7);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_show`
-- (See below for the actual view)
--
CREATE TABLE `product_show` (
`serial` int(15)
,`product_name` varchar(100)
,`price` int(5)
,`manufacture_name` varchar(100)
,`address` varchar(100)
,`contact_no` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `data_display`
--
DROP TABLE IF EXISTS `data_display`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_display`  AS SELECT `product_show`.`serial` AS `serial`, `product_show`.`product_name` AS `product_name`, `product_show`.`price` AS `price`, `product_show`.`manufacture_name` AS `manufacture_name`, `product_show`.`address` AS `address`, `product_show`.`contact_no` AS `contact_no` FROM `product_show` WHERE `product_show`.`price` > 5000 ;

-- --------------------------------------------------------

--
-- Structure for view `product_show`
--
DROP TABLE IF EXISTS `product_show`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_show`  AS SELECT `manufacturer`.`id` AS `serial`, `product`.`product_name` AS `product_name`, `product`.`price` AS `price`, `manufacturer`.`manufacture_name` AS `manufacture_name`, `manufacturer`.`address` AS `address`, `manufacturer`.`contact_no` AS `contact_no` FROM (`manufacturer` join `product`) WHERE `manufacturer`.`id` = `product`.`manufacture_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
