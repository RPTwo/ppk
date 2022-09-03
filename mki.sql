-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 07:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mki`
--

-- --------------------------------------------------------

--
-- Table structure for table `departmenttable`
--

CREATE TABLE `departmenttable` (
  `departmentID` int(50) NOT NULL,
  `departmentName` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

--
-- Dumping data for table `departmenttable`
--

INSERT INTO `departmenttable` (`departmentID`, `departmentName`) VALUES
(1, 'Management'),
(2, 'Marketing'),
(3, 'Technical'),
(4, 'Finance'),
(5, 'Support');

-- --------------------------------------------------------

--
-- Table structure for table `financetable`
--

CREATE TABLE `financetable` (
  `financeID` int(255) NOT NULL,
  `departmentName` varchar(255) NOT NULL,
  `managerName` varchar(255) NOT NULL,
  `financeDate` varchar(50) NOT NULL,
  `financeCase` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `financetable`
--

INSERT INTO `financetable` (`financeID`, `departmentName`, `managerName`, `financeDate`, `financeCase`) VALUES
(1, 'Marketing', 'RP2', '2022-07-07', 'qweqweqweqweqweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `managertable`
--

CREATE TABLE `managertable` (
  `managerID` int(50) NOT NULL,
  `managerName` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `managerProfile` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `managerPhone` varchar(50) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `managerAddress` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `managerEDU` varchar(500) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `managerPosition` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `managerSlary` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `managerProject` varchar(5000) COLLATE utf8mb4_myanmar_ci DEFAULT NULL,
  `managerEmail` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `managerPassword` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `departmentName` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

--
-- Dumping data for table `managertable`
--

INSERT INTO `managertable` (`managerID`, `managerName`, `managerProfile`, `managerPhone`, `managerAddress`, `managerEDU`, `managerPosition`, `managerSlary`, `managerProject`, `managerEmail`, `managerPassword`, `departmentName`) VALUES
(3, 'Blessing', 'profile/_User.png', '+959254125419', 'yangon', 'ncc', 'ceo', '1000000', 'management', 'blessing2541@email.com', 'blessing2541', 'Management'),
(4, 'PPK', 'profile/_cover2.png', '+959123456789', 'yangon', 'qwer', 'qwer', '500000', 'qwer', 'qwer1@gmail.com', 'qwer123', 'Technical'),
(5, 'RP2', 'profile/__User 1.png', '09254153181', '1 mm sanchaung', 'qwer', 'Marketing Manager', '1000000', 'marketing for mki', 'rp2@email.com', 'rp2123', 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `projecttable`
--

CREATE TABLE `projecttable` (
  `projectID` int(255) NOT NULL,
  `projectName` varchar(500) NOT NULL,
  `projectDate` date NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerPhone` varchar(50) NOT NULL,
  `customerEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projecttable`
--

INSERT INTO `projecttable` (`projectID`, `projectName`, `projectDate`, `customerName`, `customerPhone`, `customerEmail`) VALUES
(2, 'RP2', '2022-07-01', 'RP2', '+123123123', 'rp23@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `staffdetail`
--

CREATE TABLE `staffdetail` (
  `staffID` int(255) NOT NULL,
  `departmentID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffreport`
--

CREATE TABLE `staffreport` (
  `departmentName` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffID` int(255) NOT NULL,
  `reportDate` date NOT NULL,
  `staffReport` text COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stafftable`
--

CREATE TABLE `stafftable` (
  `staffID` int(255) NOT NULL,
  `staffName` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffProfile` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffPhone` varchar(50) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffAddress` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffEDU` varchar(500) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffPosition` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffSlary` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffProject` varchar(5000) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffEmail` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `staffPassword` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `departmentName` varchar(50) COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

--
-- Dumping data for table `stafftable`
--

INSERT INTO `stafftable` (`staffID`, `staffName`, `staffProfile`, `staffPhone`, `staffAddress`, `staffEDU`, `staffPosition`, `staffSlary`, `staffProject`, `staffEmail`, `staffPassword`, `departmentName`) VALUES
(1, 'PHP', 'profile/_Screenshot (142).png', '+959321654987', 'yangon', 'marketing', 'Marketing Assistant', '500000', 'marketing', 'php@email.com', 'php123', 'Marketing'),
(4, 'Testing1', 'profile/_Screenshot (36).png', '09123456788', 'Testing1', 'Testing1 Testing1', 'Testing1', '999999', 'Testing1Testing1Testing1Testing1', 'testing1@email.com', 'testing1', 'Technical'),
(5, 'testing2', 'profile/_cover2.png', '09123456787', 'testing2', 'testing2testing2', 'testing2', '999999', 'testing2testing2testing2testing2', 'testing2@email.com', 'testing2', 'Finance'),
(6, 'testing3', 'profile/_Screenshot (36).png', '09123456786', 'testing3', 'testing3testing3', 'testing3', '999999', 'testing3testing3testing3testing3', 'testing3@email.com', 'testing3', 'Support');

-- --------------------------------------------------------

--
-- Table structure for table `storetable`
--

CREATE TABLE `storetable` (
  `storeID` int(255) NOT NULL,
  `storePlace` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `quantity` int(255) NOT NULL,
  `available` int(255) NOT NULL,
  `report` text COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveytable`
--

CREATE TABLE `surveytable` (
  `surveyID` int(255) NOT NULL,
  `surveyName` varchar(255) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `surveyPlace` text COLLATE utf8mb4_myanmar_ci NOT NULL,
  `surveyDate` date NOT NULL,
  `surveyDate2` date NOT NULL,
  `parimySurvey` text COLLATE utf8mb4_myanmar_ci NOT NULL,
  `secondarySurvey` text COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departmenttable`
--
ALTER TABLE `departmenttable`
  ADD PRIMARY KEY (`departmentID`);

--
-- Indexes for table `financetable`
--
ALTER TABLE `financetable`
  ADD PRIMARY KEY (`financeID`);

--
-- Indexes for table `managertable`
--
ALTER TABLE `managertable`
  ADD PRIMARY KEY (`managerID`);

--
-- Indexes for table `projecttable`
--
ALTER TABLE `projecttable`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `stafftable`
--
ALTER TABLE `stafftable`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `storetable`
--
ALTER TABLE `storetable`
  ADD PRIMARY KEY (`storeID`);

--
-- Indexes for table `surveytable`
--
ALTER TABLE `surveytable`
  ADD PRIMARY KEY (`surveyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departmenttable`
--
ALTER TABLE `departmenttable`
  MODIFY `departmentID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `financetable`
--
ALTER TABLE `financetable`
  MODIFY `financeID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managertable`
--
ALTER TABLE `managertable`
  MODIFY `managerID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projecttable`
--
ALTER TABLE `projecttable`
  MODIFY `projectID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stafftable`
--
ALTER TABLE `stafftable`
  MODIFY `staffID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `storetable`
--
ALTER TABLE `storetable`
  MODIFY `storeID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveytable`
--
ALTER TABLE `surveytable`
  MODIFY `surveyID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
