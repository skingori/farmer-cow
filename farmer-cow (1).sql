-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2017 at 09:20 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer-cow`
--

-- --------------------------------------------------------

--
-- Table structure for table `Animal_feeds_table`
--

CREATE TABLE `Animal_feeds_table` (
  `Animal_feeds_Id` int(20) NOT NULL,
  `Animal_feeds_Feed_Id` int(20) DEFAULT NULL,
  `Animal_feeds_Animal_Id` int(20) DEFAULT NULL,
  `Animal_feeds_quantity` int(20) DEFAULT NULL,
  `Animal_feeds_cost` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Animal_feeds_table`
--

INSERT INTO `Animal_feeds_table` (`Animal_feeds_Id`, `Animal_feeds_Feed_Id`, `Animal_feeds_Animal_Id`, `Animal_feeds_quantity`, `Animal_feeds_cost`) VALUES
(1, 7786, 0, 0, 0),
(2, 7786, 0, 0, 0),
(3, 4, 0, 0, 0),
(4, 4, 0, 0, 0),
(5, 4, 0, 0, 0),
(6, 53, 0, 434, 3434),
(7, 2, 0, 45, 44),
(8, 323, 232323, 232, 23);

-- --------------------------------------------------------

--
-- Table structure for table `Animal_milk_table`
--

CREATE TABLE `Animal_milk_table` (
  `Animal_milk_Id` int(20) NOT NULL,
  `Animal_milk_Milk_Id` int(20) DEFAULT NULL,
  `Animal_milk_Animal_Id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Animal_milk_table`
--

INSERT INTO `Animal_milk_table` (`Animal_milk_Id`, `Animal_milk_Milk_Id`, `Animal_milk_Animal_Id`) VALUES
(1, 23, 0),
(2, 45445, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Animal_table`
--

CREATE TABLE `Animal_table` (
  `Animal_Id` int(20) NOT NULL,
  `Animal_Name` varchar(20) DEFAULT NULL,
  `Animal_Breed` varchar(20) DEFAULT NULL,
  `Animal_Lactation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Animal_table`
--

INSERT INTO `Animal_table` (`Animal_Id`, `Animal_Name`, `Animal_Breed`, `Animal_Lactation`) VALUES
(1, 'Animal_Name_', 'Animal_Breed_', 'Animal_Lactation_'),
(232323, 'eweqe', 'ewewe', 'wewewe'),
(232324, '2wewe', 'wewewe', 'wewewe'),
(232325, '2wewe', 'wewew', ''),
(232326, '2wewe', 'wewew', 'wewewe'),
(232327, '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `Farmer_animals_table`
--

CREATE TABLE `Farmer_animals_table` (
  `Farmer_animal_Id` int(20) NOT NULL,
  `Farmer_animal_Farmer_Id` int(20) DEFAULT NULL,
  `Farmer_animal_Animal_Id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Farmer_animals_table`
--

INSERT INTO `Farmer_animals_table` (`Farmer_animal_Id`, `Farmer_animal_Farmer_Id`, `Farmer_animal_Animal_Id`) VALUES
(2, 768, 232323),
(3, 3434334, 232323),
(4, 343434, 232323),
(5, 34343434, 232323),
(6, 3424234, 1),
(7, 23423423, 1),
(8, 323434, 1),
(2001, 2001, 4654999);

-- --------------------------------------------------------

--
-- Table structure for table `Farmer_table`
--

CREATE TABLE `Farmer_table` (
  `Farmer_Id` int(20) NOT NULL DEFAULT '0',
  `Farmer_Name` varchar(20) DEFAULT NULL,
  `Farmer_Age` int(20) DEFAULT NULL,
  `Farmer_Phone` int(10) DEFAULT NULL,
  `Farmer_Address` varchar(20) DEFAULT NULL,
  `Farmer_Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Farmer_table`
--

INSERT INTO `Farmer_table` (`Farmer_Id`, `Farmer_Name`, `Farmer_Age`, `Farmer_Phone`, `Farmer_Address`, `Farmer_Email`) VALUES
(21212, 'James Maina', 34, 6474776, '34 NYERI', 'info.johnmaina@hmail'),
(23232, 'James Maina', 21, 2147483647, '23 NAIROBI', 'info.sam@hmail.com'),
(1211212, 'samson', 34, 989089, '23 NAIROBI', 'info.sam@hmail.com'),
(1234567, 'maina', 22, 4334, '4434', 'd@mm.com');

-- --------------------------------------------------------

--
-- Table structure for table `Feeds_table`
--

CREATE TABLE `Feeds_table` (
  `Feeds_Id` int(20) NOT NULL,
  `Feeds_Type` varchar(50) NOT NULL,
  `Feeds_Quantity` varchar(20) NOT NULL,
  `Feeds_Cost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Feeds_table`
--

INSERT INTO `Feeds_table` (`Feeds_Id`, `Feeds_Type`, `Feeds_Quantity`, `Feeds_Cost`) VALUES
(1, 'we', 'we', 0),
(2, 'we', 'we', 0),
(3, '7686', '755756', 65765),
(4, '67', '67', 56);

-- --------------------------------------------------------

--
-- Table structure for table `Login_table`
--

CREATE TABLE `Login_table` (
  `Login_Id` int(20) NOT NULL DEFAULT '0',
  `Login_Username` varchar(100) DEFAULT NULL,
  `Login_Password` varchar(100) DEFAULT NULL,
  `Login_Rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login_table`
--

INSERT INTO `Login_table` (`Login_Id`, `Login_Username`, `Login_Password`, `Login_Rank`) VALUES
(0, 'MAINA JAMES', '25d55ad283aa400af464c76d713c07ad', '1'),
(21212, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2'),
(23232, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(1211212, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', '1'),
(1234567, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', '2');

-- --------------------------------------------------------

--
-- Table structure for table `Milk_table`
--

CREATE TABLE `Milk_table` (
  `Milk_Id` int(20) NOT NULL,
  `Milk_Quantity` varchar(20) DEFAULT NULL,
  `Milk_Description` varchar(100) DEFAULT NULL,
  `Milk_Date` varchar(20) DEFAULT NULL,
  `Milk_Time` varchar(20) DEFAULT NULL,
  `Milk_Schedule` varchar(20) DEFAULT NULL,
  `Milk_Price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Milk_table`
--

INSERT INTO `Milk_table` (`Milk_Id`, `Milk_Quantity`, `Milk_Description`, `Milk_Date`, `Milk_Time`, `Milk_Schedule`, `Milk_Price`) VALUES
(1, '232', 'ytuyt', NULL, '23:01', '2017-07-28T00:00', 40),
(2, '343', 'eesre', NULL, '00:00', '2017-07-28T01:00', 3434),
(3, '6786', '687', '0087-07-08', '08:07', '0687-08-07T07:08', 678),
(4, '332', '233', '0033-03-03', '03:03', '', 0),
(5, '332', '233', '0033-03-03', '03:03', '', 0),
(6, '323', 'wdsdds', '0022-03-03', '02:02', '', 23),
(7, '21', 'wewqe', '2017-02-02', '02:02', 'on', 3),
(8, '23', 'wsdadds', '0002-03-03', '02:32', 'Morning', 2),
(9, '4', 'fdfdfd', '2222-03-03', '02:02', 'Afternoon', 2),
(10, '33', 'ewe', '2017-07-12 21:41:32', '2017-07-12 21:41:32', 'Morning', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Animal_feeds_table`
--
ALTER TABLE `Animal_feeds_table`
  ADD PRIMARY KEY (`Animal_feeds_Id`);

--
-- Indexes for table `Animal_milk_table`
--
ALTER TABLE `Animal_milk_table`
  ADD PRIMARY KEY (`Animal_milk_Id`);

--
-- Indexes for table `Animal_table`
--
ALTER TABLE `Animal_table`
  ADD PRIMARY KEY (`Animal_Id`);

--
-- Indexes for table `Farmer_animals_table`
--
ALTER TABLE `Farmer_animals_table`
  ADD PRIMARY KEY (`Farmer_animal_Id`);

--
-- Indexes for table `Farmer_table`
--
ALTER TABLE `Farmer_table`
  ADD PRIMARY KEY (`Farmer_Id`);

--
-- Indexes for table `Feeds_table`
--
ALTER TABLE `Feeds_table`
  ADD PRIMARY KEY (`Feeds_Id`);

--
-- Indexes for table `Login_table`
--
ALTER TABLE `Login_table`
  ADD PRIMARY KEY (`Login_Id`),
  ADD KEY `Login_Id` (`Login_Id`);

--
-- Indexes for table `Milk_table`
--
ALTER TABLE `Milk_table`
  ADD PRIMARY KEY (`Milk_Id`),
  ADD KEY `Milk_Id` (`Milk_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Animal_feeds_table`
--
ALTER TABLE `Animal_feeds_table`
  MODIFY `Animal_feeds_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Animal_milk_table`
--
ALTER TABLE `Animal_milk_table`
  MODIFY `Animal_milk_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Animal_table`
--
ALTER TABLE `Animal_table`
  MODIFY `Animal_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232328;
--
-- AUTO_INCREMENT for table `Farmer_animals_table`
--
ALTER TABLE `Farmer_animals_table`
  MODIFY `Farmer_animal_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;
--
-- AUTO_INCREMENT for table `Feeds_table`
--
ALTER TABLE `Feeds_table`
  MODIFY `Feeds_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Milk_table`
--
ALTER TABLE `Milk_table`
  MODIFY `Milk_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
