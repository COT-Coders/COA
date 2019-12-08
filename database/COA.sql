-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2019 at 01:57 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `COA`
--

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `Dept_ID` int(11) NOT NULL,
  `Dept_Name` varchar(100) NOT NULL,
  `HOD` varchar(50) NOT NULL,
  `Vision` text NOT NULL,
  `Mission` text NOT NULL,
  `History` text NOT NULL,
  `Mandate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`Dept_ID`, `Dept_Name`, `HOD`, `Vision`, `Mission`, `History`, `Mandate`) VALUES
(1, 'Department of Agrometrology', 'Dr. A. S. Nain', 'Will Add', 'Will Add', '\r\n\r\nThe department of Agrometeorology came in to existence in the year 2000 after the bifurcation of Soil Science Department. Until the inception of department, teaching research and extension activities in Agrometeorology were carried out within the Department of Soil Science. The M. Sc. Programme in Agrometeorology was initiated in 1995, while Ph. D. programme was started in 2000. Research thrust in Agrometeorology includes Climatic characterization of Uttarakhand, application of weather driven dynamic crop growth and yield simulation models for various crops, crop-weather relationships, weather-crop-insects/disease interactions, climate changes and its effects on crop productivity, evapotranspiration, suitability analysis using Remote Sensing and GIS etc. Department is imparting education to UG and PG students related to application of meteorology in Agriculture. Department is continuously taking up research projects related to Agrometeorology, Remote Sensing and GIS for devising the methodologies/techniques for sustainable Agriculture production and precision crop management. The main moto of the department is to encourage the weather based responsive farming in Uttarakhand state to maximize the production and to protect the environment from different Hazards.\r\n', 'Will Add');

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `FID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Contact` int(11) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Professional_Info` text NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`FID`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Faculty`
--
ALTER TABLE `Faculty`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD CONSTRAINT `Faculty_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `Department` (`Dept_ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
