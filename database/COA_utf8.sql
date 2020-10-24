-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2020 at 12:50 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

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
-- Table structure for table `Awards`
--

CREATE TABLE `Awards` (
  `H_ID` int(11) NOT NULL,
  `Faculty_ID` int(11) NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Description` text CHARACTER SET latin1 NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `Course_ID` int(11) NOT NULL,
  `Course_Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Active` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Courses_Fac`
--

CREATE TABLE `Courses_Fac` (
  `Course_ID` int(11) NOT NULL,
  `Faculty_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `Dept_ID` int(11) NOT NULL,
  `Dept_Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `HOD` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Vision` text CHARACTER SET latin1 NOT NULL,
  `Mission` text CHARACTER SET latin1 NOT NULL,
  `History` text CHARACTER SET latin1 NOT NULL,
  `Mandate` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`Dept_ID`, `Dept_Name`, `HOD`, `Vision`, `Mission`, `History`, `Mandate`) VALUES
(1, 'Department of Agrometeorology', 'Dr. Ajeet Singh Nain', 'To develop department of Agrometeorology as a Center of Excellence for imparting quality education and conducting cutting edge research in the field of crop-weather interaction, pests/diseases weather interaction, climate change, its impact on agriculture and mitigation measures, geospatial technologies and their uses in agriculture and sustainable natural resources management.', 'Will Add soon asap.', 'The department of Agrometeorology came in to existence in the year 2000 after the bifurcation of Soil Science Department. Until the inception of department, teaching research and extension activities in Agrometeorology were carried out within the Department of Soil Science. The M. Sc. Programme in Agrometeorology was initiated in 1995, while Ph. D. programme was started in 2000. Research thrust in Agrometeorology includes Climatic characterization of Uttarakhand, application of weather driven dynamic crop growth and yield simulation models for various crops, crop-weather relationships, weather-crop-insects/disease interactions, climate changes and its effects on crop productivity, evapotranspiration, suitability analysis using Remote Sensing and GIS etc. Department is imparting education to UG and PG students related to application of meteorology in Agriculture. Department is continuously taking up research projects related to Agrometeorology, Remote Sensing and GIS for devising the methodologies/techniques for sustainable Agriculture production and precision crop management. The main moto of the department is to encourage the weather based responsive farming in Uttarakhand state to maximize the production and to protect the environment from different Hazards.', 'Will Add'),
(2, 'Department of Entomology', 'Dr. Pramod Mall', 'The Department of Entomology strives to be a network of faculty, staff and students that creates a culture of excellence resulting in the Department being one of the pr-eminent entomological teachings, research and extension organizations in the country.', 'Will Add', 'Will Add', 'We embrace discovery, transitional, and applied entomological research from levels of ecological landscapes to biological molecules. The department provides exciting experience yet scientifically, agriculturally and environmentally relevant research and training as part of undergraduate and graduate instruction from a Faculty of nationally and internationally recognized scholars who contemplate our science from a global perspective.'),
(3, 'Department of Agronomy', 'Dr. K.S. Shekhar', 'Bringing positive changes in the lives of people through scientific intervention of Agronomy.', 'Thriving for safe and quality production of farm produce with innovative agronomic management practices.', 'Department of agronomy came into being in 1963 with Master’s Programme in agronomy. The Ph. D. Programme in agronomy was commenced from 1965. A well-knit U.G., P.G., and Ph.D. Programme with updated syllabi has been operating in the department. The research work has been programmed to cater the needs of the area. The department serves as nodal agency for various extension activities and resource management. The department shares more than 25% of course load of the under graduate teaching.', 'Teaching, research and extension education.');

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `Faculty_ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Address` text CHARACTER SET latin1 NOT NULL,
  `Office_Contact` int(11) NOT NULL,
  `Personal_Contact` int(11) NOT NULL,
  `Designation` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Specialization` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `Interest_Area` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `Professional_Info` text CHARACTER SET latin1 NOT NULL,
  `Img_Link` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Role` int(11) NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Faculty`
--

INSERT INTO `Faculty` (`Faculty_ID`, `Name`, `Email`, `Address`, `Office_Contact`, `Personal_Contact`, `Designation`, `Dept_ID`, `Specialization`, `Interest_Area`, `Professional_Info`, `Img_Link`, `Password`, `Role`, `Active`) VALUES
(1, 'Samaksh', 'abc@gmail.com', 'Somewhere but not nowhere', 123, 0, 'Head of Department', 1, NULL, NULL, 'Will not give', '', 'samaksh', 3, 1),
(2, 'Mayank', 'xyz@gmail.com', 'Haldwani mein bada ghar', 456, 789, 'Dean', 1, NULL, NULL, 'Will tell later', '', 'mayank', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Miscellaneous`
--

CREATE TABLE `Miscellaneous` (
  `M_Id` int(11) NOT NULL,
  `Faculty_ID` int(11) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Title` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Event` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Description` text CHARACTER SET latin1 NOT NULL,
  `Gallery_Link` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Programme`
--

CREATE TABLE `Programme` (
  `Prog_ID` int(11) NOT NULL,
  `Prog_Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Description` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Dept_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Publication`
--

CREATE TABLE `Publication` (
  `Pub_ID` int(11) NOT NULL,
  `Title` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Abstract` text CHARACTER SET latin1 NOT NULL,
  `Publication_Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Date` date NOT NULL,
  `Authors` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Pub_Link` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Publication`
--

INSERT INTO `Publication` (`Pub_ID`, `Title`, `Abstract`, `Publication_Name`, `Date`, `Authors`, `Pub_Link`) VALUES
(1, 'Title is unique and test1', 'Entering description for test1. Will be adding more tests.', 'Pub Name', '2018-03-06', '', ''),
(2, 'Title for test2', 'Will continue to enter details, but currently entering for test2', 'IJBAAR', '2020-05-04', '', ''),
(3, 'Title for test3', 'Will give later.', 'IJBAAR', '2020-06-18', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Pub_Fac`
--

CREATE TABLE `Pub_Fac` (
  `Pub_ID` int(11) NOT NULL,
  `Faculty_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pub_Fac`
--

INSERT INTO `Pub_Fac` (`Pub_ID`, `Faculty_ID`) VALUES
(1, 1),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `Staff_ID` int(11) NOT NULL,
  `Staff_Name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Designation` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Personal_Info` text CHARACTER SET latin1 NOT NULL,
  `Address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`Staff_ID`, `Staff_Name`, `Dept_ID`, `Designation`, `Personal_Info`, `Address`, `Phone`) VALUES
(1, 'Samaksh', 1, 'Lab Assistant', 'Will not tell', '', NULL),
(2, 'Annoo', 1, 'Lab Technician', 'Will tell later', '', NULL),
(3, 'Alien', 1, 'Developer', 'Known', 'Pithoragrah', 123456789),
(12, 'Kavita Garg', 1, 'Developer', 'Will tell later', 'Bareilly', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `S_ID` int(11) NOT NULL,
  `Stud_Roll` int(11) NOT NULL,
  `Stud_Name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Address` text CHARACTER SET latin1 NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `E_mail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Phone` varchar(15) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Awards`
--
ALTER TABLE `Awards`
  ADD PRIMARY KEY (`H_ID`),
  ADD KEY `Faculty_ID` (`Faculty_ID`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`Course_ID`),
  ADD KEY `Course_ID` (`Course_ID`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `Courses_Fac`
--
ALTER TABLE `Courses_Fac`
  ADD PRIMARY KEY (`Course_ID`,`Faculty_ID`),
  ADD KEY `Faculty_ID` (`Faculty_ID`);

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
  ADD PRIMARY KEY (`Pub_ID`);

--
-- Indexes for table `Pub_Fac`
--
ALTER TABLE `Pub_Fac`
  ADD PRIMARY KEY (`Pub_ID`,`Faculty_ID`),
  ADD KEY `Faculty_ID` (`Faculty_ID`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `Email` (`E_mail`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Awards`
--
ALTER TABLE `Awards`
  MODIFY `H_ID` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `Faculty_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Miscellaneous`
--
ALTER TABLE `Miscellaneous`
  MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Publication`
--
ALTER TABLE `Publication`
  MODIFY `Pub_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `Staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Awards`
--
ALTER TABLE `Awards`
  ADD CONSTRAINT `Awards_ibfk_1` FOREIGN KEY (`Faculty_ID`) REFERENCES `Faculty` (`Faculty_ID`),
  ADD CONSTRAINT `Awards_ibfk_2` FOREIGN KEY (`Dept_ID`) REFERENCES `Department` (`Dept_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `Course_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `Department` (`Dept_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Courses_Fac`
--
ALTER TABLE `Courses_Fac`
  ADD CONSTRAINT `Courses_Fac_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `Course` (`Course_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Courses_Fac_ibfk_2` FOREIGN KEY (`Faculty_ID`) REFERENCES `Faculty` (`Faculty_ID`) ON UPDATE CASCADE;

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
-- Constraints for table `Pub_Fac`
--
ALTER TABLE `Pub_Fac`
  ADD CONSTRAINT `Pub_Fac_ibfk_1` FOREIGN KEY (`Pub_ID`) REFERENCES `Publication` (`Pub_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Pub_Fac_ibfk_2` FOREIGN KEY (`Faculty_ID`) REFERENCES `Faculty` (`Faculty_ID`) ON UPDATE CASCADE;

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
