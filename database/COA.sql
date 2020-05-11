-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2020 at 12:39 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

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
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `Course_ID` int(11) NOT NULL,
  `Course_Name` varchar(100) NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Active` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Department of Agrometeorology', 'Dr. Ajeet Singh Nain', 'To develop department of Agrometeorology as a Center of Excellence for imparting quality education and conducting cutting edge research in the field of crop-weather interaction, pests/diseases weather interaction, climate change, its impact on agriculture and mitigation measures, geospatial technologies and their uses in agriculture and sustainable natural resources management.', 'Will Add', 'The department of Agrometeorology came in to existence in the year 2000 after the bifurcation of Soil Science Department. Until the inception of department, teaching research and extension activities in Agrometeorology were carried out within the Department of Soil Science. The M. Sc. Programme in Agrometeorology was initiated in 1995, while Ph. D. programme was started in 2000. Research thrust in Agrometeorology includes Climatic characterization of Uttarakhand, application of weather driven dynamic crop growth and yield simulation models for various crops, crop-weather relationships, weather-crop-insects/disease interactions, climate changes and its effects on crop productivity, evapotranspiration, suitability analysis using Remote Sensing and GIS etc. Department is imparting education to UG and PG students related to application of meteorology in Agriculture. Department is continuously taking up research projects related to Agrometeorology, Remote Sensing and GIS for devising the methodologies/techniques for sustainable Agriculture production and precision crop management. The main moto of the department is to encourage the weather based responsive farming in Uttarakhand state to maximize the production and to protect the environment from different Hazards.', 'Will Add'),
(2, 'Department of Entomology', 'Dr. Pramod Mall', 'The Department of Entomology strives to be a network of faculty, staff and students that creates a culture of excellence resulting in the Department being one of the pr-eminent entomological teachings, research and extension organizations in the country.', 'Will Add', 'Will Add', 'We embrace discovery, transitional, and applied entomological research from levels of ecological landscapes to biological molecules. The department provides exciting experience yet scientifically, agriculturally and environmentally relevant research and training as part of undergraduate and graduate instruction from a Faculty of nationally and internationally recognized scholars who contemplate our science from a global perspective.'),
(3, 'Department of Agronomy', 'Dr. K.S. Shekhar', 'Bringing positive changes in the lives of people through scientific intervention of Agronomy.', 'Thriving for safe and quality production of farm produce with innovative agronomic management practices.', 'Department of agronomy came into being in 1963 with Master’s Programme in agronomy. The Ph. D. Programme in agronomy was commenced from 1965. A well-knit U.G., P.G., and Ph.D. Programme with updated syllabi has been operating in the department. The research work has been programmed to cater the needs of the area. The department serves as nodal agency for various extension activities and resource management. The department shares more than 25% of course load of the under graduate teaching.', 'Teaching, research and extension education.');

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `Faculty_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Office_Contact` int(11) NOT NULL,
  `Personal_Contact` int(11) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Professional_Info` text NOT NULL,
  `Img_Link` varchar(100) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Role` int(11) NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Faculty`
--

INSERT INTO `Faculty` (`Faculty_ID`, `Name`, `Email`, `Address`, `Office_Contact`, `Personal_Contact`, `Designation`, `Dept_ID`, `Professional_Info`, `Img_Link`, `Password`, `Role`, `Active`) VALUES
(1, 'Samaksh', 'abc@gmail.com', 'Somewhere but not nowhere', 123, 0, 'Student', 1, 'Will not give', '', 'samaksh', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Miscellaneous`
--

CREATE TABLE `Miscellaneous` (
  `M_Id` int(11) NOT NULL,
  `Faculty_ID` int(11) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Event` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Gallery_Link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Programme`
--

CREATE TABLE `Programme` (
  `Prog_ID` int(11) NOT NULL,
  `Prog_Name` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Dept_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Publication`
--

CREATE TABLE `Publication` (
  `Pub_ID` int(11) NOT NULL,
  `Faculty_ID` int(11) NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `Publication_Name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Pub_Link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `Staff_ID` int(11) NOT NULL,
  `Staff_Name` varchar(50) NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Personal_Info` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`Staff_ID`, `Staff_Name`, `Dept_ID`, `Designation`, `Personal_Info`, `Address`, `Phone`) VALUES
(1, 'Samaksh', 1, 'Lab Assistant', 'Will not tell', '', NULL),
(2, 'Annoo', 1, 'Lab Technician', 'Will tell later', '', NULL),
(3, 'Alien', 1, 'Developer', 'Known', 'Pithoragrah', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `S_ID` int(11) NOT NULL,
  `Stud_Roll` int(11) NOT NULL,
  `Stud_Name` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`Course_ID`),
  ADD KEY `Course_ID` (`Course_ID`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`Faculty_ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Personal_Contact` (`Personal_Contact`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `Miscellaneous`
--
ALTER TABLE `Miscellaneous`
  ADD PRIMARY KEY (`M_Id`);

--
-- Indexes for table `Programme`
--
ALTER TABLE `Programme`
  ADD PRIMARY KEY (`Prog_ID`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `Publication`
--
ALTER TABLE `Publication`
  ADD PRIMARY KEY (`Pub_ID`),
  ADD KEY `Faculty_ID` (`Faculty_ID`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD UNIQUE KEY `Staff_Phone` (`Phone`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `Email` (`E-mail`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Course`
--
ALTER TABLE `Course`
  MODIFY `Course_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Faculty`
--
ALTER TABLE `Faculty`
  MODIFY `Faculty_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Miscellaneous`
--
ALTER TABLE `Miscellaneous`
  MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `Staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `Course_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `Department` (`Dept_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD CONSTRAINT `Faculty_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `Department` (`Dept_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Programme`
--
ALTER TABLE `Programme`
  ADD CONSTRAINT `Programme_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `Department` (`Dept_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Publication`
--
ALTER TABLE `Publication`
  ADD CONSTRAINT `Publication_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `Department` (`Dept_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Staff`
--
ALTER TABLE `Staff`
  ADD CONSTRAINT `Staff_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `Department` (`Dept_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `Student_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `Department` (`Dept_ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
