-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 08:06 AM
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
-- Database: `bata_b`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `manuf` (IN `n` VARCHAR(50), IN `a` VARCHAR(100), IN `c` VARCHAR(50))   BEGIN
INSERT INTO manufacturer set id=null,name=n,address=a,contact_no=c;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `prod` (IN `n` VARCHAR(50), IN `p` INT(5), IN `manu_id` INT(10))   BEGIN
INSERT INTO product SET id=null,name=n,price=p,manufacturer_id=manu_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(8, 'sony', 'america', '09876543'),
(10, 'microsoft', 'america', '23456');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `tri_dlt` AFTER DELETE ON `manufacturer` FOR EACH ROW BEGIN
DELETE  FROM product  WHERE manufacturer_id=old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(7, 'blender', 234567, 8),
(9, 'monitor', 69857, 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_display`
-- (See below for the actual view)
--
CREATE TABLE `product_display` (
`serial` int(15)
,`product_name` varchar(50)
,`price` int(5)
,`manufacture_name` varchar(50)
,`center` varchar(100)
,`contact` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list`
-- (See below for the actual view)
--
CREATE TABLE `product_list` (
`serial` int(15)
,`product_name` varchar(50)
,`price` int(5)
,`manufacture_name` varchar(50)
,`center` varchar(100)
,`contact` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `product_display`
--
DROP TABLE IF EXISTS `product_display`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_display`  AS SELECT `product_list`.`serial` AS `serial`, `product_list`.`product_name` AS `product_name`, `product_list`.`price` AS `price`, `product_list`.`manufacture_name` AS `manufacture_name`, `product_list`.`center` AS `center`, `product_list`.`contact` AS `contact` FROM `product_list` WHERE `product_list`.`price` > 5000 ORDER BY `product_list`.`product_name` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `product_list`
--
DROP TABLE IF EXISTS `product_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list`  AS SELECT `product`.`id` AS `serial`, `product`.`name` AS `product_name`, `product`.`price` AS `price`, `manufacturer`.`name` AS `manufacture_name`, `manufacturer`.`address` AS `center`, `manufacturer`.`contact_no` AS `contact` FROM (`manufacturer` join `product`) WHERE `manufacturer`.`id` = `product`.`manufacturer_id` ;

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
