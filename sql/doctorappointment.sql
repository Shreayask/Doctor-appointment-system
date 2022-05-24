-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 09:13 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorappointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(255) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `loginid`, `password`, `address`, `adminname`, `phonenumber`, `Status`, `gender`) VALUES
(7, 'alina', '123456789', 'Bhorletar', 'Alina Manandhar', '9861533150', 'Active', 'Female'),
(11, 'laxman', '123456789', 'Bhorletar', 'Laxman Kunwar', '9861500109', 'Active', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentid` int(255) NOT NULL,
  `patientid` int(255) NOT NULL,
  `departmentid` int(50) NOT NULL,
  `doctorid` int(60) NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time(6) NOT NULL,
  `appointmentreason` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentid`, `patientid`, `departmentid`, `doctorid`, `appointmentdate`, `appointmenttime`, `appointmentreason`, `status`) VALUES
(45, 16, 1, 1, '2021-08-24', '11:13:00.000000', 'test', 'Approved'),
(47, 17, 2, 3, '2021-08-16', '11:11:00.000000', 'stomache ache', 'Approved'),
(48, 11, 2, 3, '2021-08-20', '07:17:00.000000', 'testing from admin', 'Approved'),
(49, 17, 1, 1, '2021-08-20', '13:54:00.000000', 'test by admin', 'Approved'),
(51, 16, 2, 3, '2021-08-20', '16:33:00.000000', 'test 2 by admins', 'Approved'),
(52, 17, 2, 3, '2021-08-24', '09:54:00.000000', 'tesing by shreaya', 'Pending'),
(53, 17, 2, 3, '2021-08-24', '09:30:00.000000', 'testing', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billid` int(255) NOT NULL,
  `appointmentid` int(255) NOT NULL,
  `patientid` int(100) NOT NULL,
  `totalamount` int(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billid`, `appointmentid`, `patientid`, `totalamount`, `status`) VALUES
(1, 37, 11, 4300, 'Not Paid'),
(2, 45, 16, 1700, 'Not Paid'),
(3, 45, 16, 1100, 'Not Paid'),
(4, 37, 11, 4300, 'Not Paid'),
(5, 47, 17, 2400, ' Paid'),
(6, 49, 17, 1100, ' Paid'),
(7, 51, 16, 1100, ' Paid'),
(8, 50, 16, 1200, ' Paid'),
(9, 53, 17, 1800, ' Paid');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentid` int(255) NOT NULL,
  `departmentname` varchar(50) NOT NULL,
  `dep_description` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentname`, `dep_description`, `status`) VALUES
(1, 'General medicine', 'demo', 'Active'),
(2, 'Gyno', 'Gynocologist', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorid` int(255) NOT NULL,
  `doctorname` varchar(50) NOT NULL,
  `departmentid` int(255) NOT NULL,
  `doctorphoneno` varchar(20) NOT NULL,
  `education` varchar(20) NOT NULL,
  `fees` int(20) NOT NULL,
  `experience` int(5) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `doctorname`, `departmentid`, `doctorphoneno`, `education`, `fees`, `experience`, `loginid`, `password`, `status`, `address`, `gender`) VALUES
(1, 'Shila kunwar', 1, '9800087833', 'Mbbs', 500, 5, 'shilakunwar', '1234567890', 'Active', 'Balaju              ', 'Female'),
(3, 'Suraj Mishra', 2, '2147483647', 'mbbs', 500, 5, 'suraj', '123456789', 'Active', ' Ramkot      ', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `doctortiming`
--

CREATE TABLE `doctortiming` (
  `timingid` int(255) NOT NULL,
  `doctorid` int(255) NOT NULL,
  `starttime` time(6) NOT NULL,
  `endtime` time(6) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctortiming`
--

INSERT INTO `doctortiming` (`timingid`, `doctorid`, `starttime`, `endtime`, `status`) VALUES
(4, 1, '11:04:00.000000', '23:04:00.000000', 'Active'),
(8, 3, '10:00:00.000000', '14:04:00.000000', 'Active'),
(10, 1, '12:06:00.000000', '02:08:00.000000', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientid` int(255) NOT NULL,
  `patientname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `patientphone` varchar(15) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `patientname`, `address`, `gender`, `bloodgroup`, `patientphone`, `loginid`, `password`, `status`) VALUES
(11, 'shraya', 'Bhorletar', 'female', 'A+', '9898987676', 'shreayask', '123456789', 'Active'),
(16, 'mangala kunwar', 'Bhorletar', 'female', 'O-', '9898987676', 'mangala', '123456789', 'Active'),
(17, 'mia ', 'Bhorletar', 'female', 'B+', '9898987676', 'mia', '123456789', 'Active'),
(18, 'Rima Rai', 'Hatiban', 'female', 'AB+', '9851589780', 'rima', '123456789', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `Treatmentid` int(255) NOT NULL,
  `Treatment_Type` varchar(50) NOT NULL,
  `Treatment_Cost` int(20) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Treatmentid`, `Treatment_Type`, `Treatment_Cost`, `Description`, `Status`) VALUES
(3, 'Follow up', 600, 'Follow up', 'Active'),
(4, 'First visit', 600, 'First Checkup', 'Active'),
(5, 'Corona', 700, 'Corona checkup', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `treatmentrecords`
--

CREATE TABLE `treatmentrecords` (
  `treatmentrecord_id` int(255) NOT NULL,
  `treatmentid` int(200) NOT NULL,
  `appointmentid` int(200) NOT NULL,
  `patientid` int(200) NOT NULL,
  `doctorid` int(200) NOT NULL,
  `treatmentdescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatmentrecords`
--

INSERT INTO `treatmentrecords` (`treatmentrecord_id`, `treatmentid`, `appointmentid`, `patientid`, `doctorid`, `treatmentdescription`) VALUES
(1, 3, 2, 1, 1, '  hh'),
(2, 3, 2, 1, 1, '  second follow up'),
(3, 3, 3, 1, 1, 'corona'),
(4, 0, 3, 1, 1, '  post crorna'),
(5, 3, 3, 1, 1, '  pp'),
(6, 3, 3, 1, 1, 'test2'),
(7, 3, 2, 1, 1, '  test 2  foolow up'),
(8, 3, 2, 1, 1, '  gg'),
(9, 3, 6, 2, 3, 'corona '),
(10, 3, 6, 2, 3, 'test2'),
(11, 5, 37, 11, 1, '  Corona positive for 2nd time'),
(12, 4, 37, 11, 1, '  test'),
(13, 5, 37, 11, 1, '  test 2'),
(14, 4, 45, 16, 1, 'backpain'),
(15, 3, 45, 16, 1, '  '),
(16, 3, 37, 11, 1, '  tt'),
(17, 4, 37, 11, 1, '  '),
(18, 4, 37, 11, 1, '  '),
(19, 4, 47, 17, 3, '  First visit'),
(20, 5, 47, 17, 3, 'Corona positive'),
(21, 3, 47, 17, 3, '  Follow up'),
(22, 4, 49, 17, 1, 'First visit'),
(23, 4, 51, 16, 3, 'Mild fever'),
(24, 5, 50, 16, 3, 'High dever'),
(25, 5, 53, 17, 3, 'High fever cetamol'),
(26, 4, 53, 17, 3, 'First visit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentid`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indexes for table `doctortiming`
--
ALTER TABLE `doctortiming`
  ADD PRIMARY KEY (`timingid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`Treatmentid`);

--
-- Indexes for table `treatmentrecords`
--
ALTER TABLE `treatmentrecords`
  ADD PRIMARY KEY (`treatmentrecord_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctorid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctortiming`
--
ALTER TABLE `doctortiming`
  MODIFY `timingid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `Treatmentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treatmentrecords`
--
ALTER TABLE `treatmentrecords`
  MODIFY `treatmentrecord_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
