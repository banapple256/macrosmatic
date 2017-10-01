-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 06:53 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_basic_details`
--

CREATE TABLE `employee_basic_details` (
  `Id` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `firstName` varchar(35) NOT NULL,
  `middleName` varchar(35) DEFAULT NULL,
  `lastName` varchar(35) DEFAULT NULL,
  `userName` varchar(35) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileNum` varchar(35) NOT NULL,
  `homePhone` varchar(100) NOT NULL,
  `cnicNumber` varchar(35) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `emergencyContactName` varchar(70) NOT NULL,
  `emergencyContactNumber` varchar(35) NOT NULL,
  `bloodGroup` varchar(5) NOT NULL,
  `father_husbandName` varchar(70) NOT NULL,
  `hireDate` varchar(25) NOT NULL,
  `profilePic` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `cnicScannedImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_basic_details`
--

INSERT INTO `employee_basic_details` (`Id`, `employeeID`, `firstName`, `middleName`, `lastName`, `userName`, `email`, `mobileNum`, `homePhone`, `cnicNumber`, `dob`, `address`, `emergencyContactName`, `emergencyContactNumber`, `bloodGroup`, `father_husbandName`, `hireDate`, `profilePic`, `resume`, `cnicScannedImage`) VALUES
(16, 1004, 'Sufian', '', 'Qayyum', 'qs02', 'qsufian@gmail.com', '03455895007', '', '33105-1244965-7', '1992-02-28', '6/3-d cat # IV, Sector I-8/1, Islamabad', 'Sheraz Hashmi', '03135446302', 'B-', 'Abdul Qayyum', '2017-09-02', '1004_profile_pic.jpeg', '1004_resume.pdf', '1004_cnic.jpeg'),
(19, 1005, 'Hamza', 'Tariq', 'Chintoo', 'th01', 'hamza@gmail.com', '03335901673', '', '33092-6711987-3', '17-7-1992', '1/2-D, CAT #4,Sector I-8/1 Islamabad', 'Sufian Qayyum', '03455895007', 'AB+', 'Tariq Mehmood', '02-09-2017', 'C:/xampp/htdocs/macrosmatic/uploads/1005/1005_profilePic8.jpg', 'C:/xampp/htdocs/macrosmatic/uploads/1005/1005_profilePic4.pdf', 'C:/xampp/htdocs/macrosmatic/uploads/1005/1005_profilePic9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_department_details`
--

CREATE TABLE `employee_department_details` (
  `id` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `department` varchar(1250) NOT NULL,
  `designation` varchar(1000) NOT NULL,
  `employeeType` varchar(255) NOT NULL,
  `supervisorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_department_details`
--

INSERT INTO `employee_department_details` (`id`, `employeeID`, `department`, `designation`, `employeeType`, `supervisorID`) VALUES
(9, 1004, 'Technical', 'Engineer', 'Permanent', 109),
(12, 1005, 'Finanace', 'Investment Consultant', 'Contractual', 131);

-- --------------------------------------------------------

--
-- Table structure for table `employee_education_history`
--

CREATE TABLE `employee_education_history` (
  `id` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `instituteName` varchar(1000) NOT NULL,
  `admissionDate` varchar(25) NOT NULL,
  `graduationDate` varchar(25) NOT NULL,
  `qualification` varchar(1250) NOT NULL,
  `degreeScannedImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_job_history`
--

CREATE TABLE `employee_job_history` (
  `id` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `company` varchar(125) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `employmentStartDate` varchar(25) NOT NULL,
  `employmentEndDate` varchar(25) NOT NULL,
  `JobDescription` varchar(10000) NOT NULL,
  `experienceLetterScannedImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_details`
--

CREATE TABLE `employee_salary_details` (
  `id` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `employeeType` varchar(255) NOT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_salary_details`
--

INSERT INTO `employee_salary_details` (`id`, `employeeID`, `employeeType`, `Salary`) VALUES
(9, 1004, 'Permanent', 30000),
(12, 1005, 'Contractual', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `employee_trainings_history`
--

CREATE TABLE `employee_trainings_history` (
  `id` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `trainingInstituteName` varchar(255) NOT NULL,
  `trainingStartDate` varchar(25) NOT NULL,
  `trainingEndDate` varchar(25) NOT NULL,
  `ExamDate` varchar(25) DEFAULT NULL,
  `certificationName` varchar(1250) NOT NULL,
  `certificateScannedImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `id_of_last_employee_added`
--

CREATE TABLE `id_of_last_employee_added` (
  `id` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `versionBit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_of_last_employee_added`
--

INSERT INTO `id_of_last_employee_added` (`id`, `employeeID`, `versionBit`) VALUES
(1, 1005, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_basic_details`
--
ALTER TABLE `employee_basic_details`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `employeeID` (`employeeID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `cnicNumber` (`cnicNumber`);

--
-- Indexes for table `employee_department_details`
--
ALTER TABLE `employee_department_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_education_history`
--
ALTER TABLE `employee_education_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_job_history`
--
ALTER TABLE `employee_job_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_salary_details`
--
ALTER TABLE `employee_salary_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_trainings_history`
--
ALTER TABLE `employee_trainings_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_of_last_employee_added`
--
ALTER TABLE `id_of_last_employee_added`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_basic_details`
--
ALTER TABLE `employee_basic_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employee_department_details`
--
ALTER TABLE `employee_department_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee_education_history`
--
ALTER TABLE `employee_education_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_job_history`
--
ALTER TABLE `employee_job_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_salary_details`
--
ALTER TABLE `employee_salary_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee_trainings_history`
--
ALTER TABLE `employee_trainings_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_of_last_employee_added`
--
ALTER TABLE `id_of_last_employee_added`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
