-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 11:54 AM
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

INSERT INTO `employee_basic_details` (`Id`, `employeeID`, `firstName`, `middleName`, `lastName`, `userName`, `email`, `mobileNum`, `cnicNumber`, `dob`, `address`, `emergencyContactName`, `emergencyContactNumber`, `bloodGroup`, `father_husbandName`, `hireDate`, `profilePic`, `resume`, `cnicScannedImage`) VALUES
(16, 1004, 'Sufian', '', 'Qayyum', 'qs02', 'qsufian@gmail.com', '03455895007', '33105-1244965-7', '1992-02-28', '6/3-d cat # IV, Sector I-8/1, Islamabad', 'Sheraz Hashmi', '03135446302', 'B-', 'Abdul Qayyum', '2017-09-02', '1004_profile_pic.jpeg', '1004_resume.pdf', '1004_cnic.jpeg');

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
(9, 1004, 'Technical', 'Engineer', 'Permanent', 109);

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
(9, 1004, 'Permanent', 30000);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_basic_details`
--
ALTER TABLE `employee_basic_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee_department_details`
--
ALTER TABLE `employee_department_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee_education_history`
--
ALTER TABLE `employee_education_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee_job_history`
--
ALTER TABLE `employee_job_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee_salary_details`
--
ALTER TABLE `employee_salary_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee_trainings_history`
--
ALTER TABLE `employee_trainings_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
