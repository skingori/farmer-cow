-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2017 at 06:08 PM
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
  `Animal_feeds_Animal_Id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Animal_milk_table`
--

CREATE TABLE `Animal_milk_table` (
  `Animal_milk_Id` int(20) NOT NULL,
  `Animal_milk_Milk_Id` int(20) DEFAULT NULL,
  `Animal_milk_Animal_Id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(232326, '2wewe', 'wewew', 'wewewe');

-- --------------------------------------------------------

--
-- Table structure for table `Farmer_animals_table`
--

CREATE TABLE `Farmer_animals_table` (
  `Farmer_animal_Id` int(20) NOT NULL DEFAULT '0',
  `Farmer_animal_Farmer_Id` int(20) DEFAULT NULL,
  `Farmer_animal_Animal_Id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'we', 'we', 0);

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
(2323, 'sssss', '', '1'),
(5465, 'admin1', '25d55ad283aa400af464c76d713c07ad', '1'),
(23232, 'admin', '1844156d4166d94387f1a4ad031ca5fa', '1'),
(23232323, 'wewewew', 'f795e34c94384805f4e8da7d98effc81', '1'),
(78786786, 'colo', '96ed1498ec94cb6ed3e47fda0c6f84da', '1');

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
(6, '323', 'wdsdds', '0022-03-03', '02:02', '', 23);

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
  MODIFY `Animal_feeds_Id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Animal_milk_table`
--
ALTER TABLE `Animal_milk_table`
  MODIFY `Animal_milk_Id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Animal_table`
--
ALTER TABLE `Animal_table`
  MODIFY `Animal_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232327;
--
-- AUTO_INCREMENT for table `Feeds_table`
--
ALTER TABLE `Feeds_table`
  MODIFY `Feeds_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Milk_table`
--
ALTER TABLE `Milk_table`
  MODIFY `Milk_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
