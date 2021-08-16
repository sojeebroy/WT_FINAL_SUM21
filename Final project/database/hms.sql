-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 11:25 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `NID` int(20) NOT NULL,
  `DOB` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Username`, `Email`, `Password`, `Phone`, `Gender`, `Address`, `NID`, `DOB`) VALUES
(1, 'Sojeeb Roy Partho', 'sojeebroy', 'sojeebroy217@gmail.com', '123456', '01717041693', 'Male', 'Basundhara R/A, Dhaka', 2147483647, '9 January 2000');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `NID` int(20) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `Bio` varchar(70) NOT NULL,
  `Feedback` varchar(50) DEFAULT NULL,
  `Request` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Name`, `Username`, `Email`, `Password`, `Phone`, `Gender`, `Department`, `Address`, `NID`, `DOB`, `Bio`, `Feedback`, `Request`) VALUES
(2, 'Dr. Shams Munwar', 'shamsmunwar', 'shamsmunwar@gmail.com', '12345678', '017171717171', 'Male', 'Cardiology', 'basundhara r/a', 2147483647, '30December1960', 'MBBS, MRCP (UK), D.Card (London) Senior Consultant', 'No Feedback', 'Change Bulb in my cabin asap'),
(17, ' Prof. (Dr.) Md. Sha', 'shahabuddin', 'shahabuddin@gmail.com', '12345678', '01717041693', 'Male', 'Cardiology', 'Mirpur 10', 2147483647, '30August1986', 'MBBS, D.Card. (DU), FCPS (Medicine)\r\n Senior Consultant', 'No Feedback', 'No Requests'),
(18, 'Prof. Dr. A.H.M.Wali', 'waliul', 'waliul@gmail.com', '12345678', '0174542424', 'Male', 'Cardiology', 'Dhanmondi', 2147483647, '17May1967', 'MBBS, PhD. Card. (Osaka University), FRCP (Glasgow)\r\n Associate Consul', 'No Feedback', 'Chair is broken.'),
(20, 'Dr. Khandker Mahbuba', 'KhandkerMahbubar', 'khandkermahbubarrahman@gmail.c', '12345678', '01717041693', 'Male', 'Neurology', 'basundhara R/A', 2147483647, '14July1978', 'MBBS, MD (Neurology)Coordinator & Senior Consultant', 'No Feedback', 'No Requests'),
(21, 'Dr. S.M. Hasan Shahr', 'hassanshariar', 'hassanshariar@gmail.com', '12345678', '01717173323', 'Male', 'Neurology', 'basundhara R/A', 2147483647, '20April1983', 'MBBS, MRCP (UK)\r\nConsultant', 'No Feedback', 'AC is not working properly'),
(24, 'Dr. Khandker Mahbuba', 'mahabubur', 'mahabubur@gmail.com', '12345678', '01717173323', 'Male', 'Neurology', 'basundhara R/A', 2147483645, '18Jaunary1957', 'MBBS, MD (Neurology)\r\nCoordinator &amp; Senior Consultant', 'No Feedback', 'AC is not working properly'),
(26, 'Dr. Md. Golam Rubby', 'golamrubby', 'golamrubby@gmail.com', '12345678', '01717173323', 'Male', 'Endrocrine', 'basundhara R/A', 2147483647, '6March1985', 'MBBS, MRCP (UK), D.Card (London) Senior Consultant', 'No Feedback', 'No Requests');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `NID` int(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Duty` varchar(30) NOT NULL,
  `Feedback` varchar(50) DEFAULT NULL,
  `Request` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`Id`, `Name`, `Username`, `Email`, `Password`, `Phone`, `Address`, `Gender`, `NID`, `DOB`, `Duty`, `Feedback`, `Request`) VALUES
(7, 'Fatema Khatun', 'fatemakhatun', 'fatema998@gmail.com', '12345678', '017171717171', 'Mirpur 1', 'Female', 2147483647, '3March1966', 'MRI', 'No Feedback', 'want to change my duty.'),
(8, 'Rumana Begum', 'rumanabegum', 'rumana@gmail.com', '12345678', '12345678', 'Mirpur 10', 'Female', 2147483645, '5May1989', 'Nuclear Medicine', 'No Feedback', 'No Requests'),
(9, 'Kaniz Fatema', 'kanizfatema', 'kaniz69@gmail.com', '12345678', '01717173323', 'Mirpur 10', 'Female', 2147483647, '9April1964', 'CT scan', 'No Feedback', 'No Requests'),
(10, 'Dipu Ram Roy', 'dipuram', 'dipuram@hmail.com', '12345678', '1717041693', 'Dhanmondi', 'Male', 2147483647, '5August1991', 'Vaccination', 'No Feedback', 'No Requests'),
(12, 'Arrona Roy', 'arronaroy', 'arronrroy@gmail.com', '12345678', '01717171717', 'Mirpur 10', 'Female', 2147483645, '7May1993', 'MRI', 'No Feedback', 'No Requests'),
(13, 'Salma Begum', 'salmabegum', 'salmabegum@gmail.com', '12345678', '01717171717', 'Dhanmondi', 'Male', 2147483647, '8August1990', 'X-ray', 'No Feedback', 'Electricity fault at room no.302'),
(14, 'Shihab Rahman', 'shihsbrahman', 'shihsbrahman@gmail.com', '12345678', '01717173323', 'Mirpur 10', 'Male', 2147483645, '24April1977', 'Vaccination', 'No Feedback', 'No Requests');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `NID` int(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Report` varchar(50) DEFAULT NULL,
  `Feedback` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `Name`, `Username`, `Email`, `Password`, `Phone`, `Address`, `Gender`, `NID`, `DOB`, `Report`, `Feedback`) VALUES
(2, 'Rumana Begum', 'rumanabegum', 'rumana@gmail.com', '12345678', '01717173323', 'basundhara R/A', 'Female', 2147483647, '5April1991', 'reportOfRumanaBegum.zip', 'No Feedback'),
(4, 'Sazid Hassan', 'sazidhasan', 'sazidhasan@gmail.com', '12345678', '01717173323', 'New Polton', 'Male', 2147483647, '7December1981', 'reportOfSazidHassan', 'No Feedback'),
(5, 'waliullah ahmed', 'waliul', 'waliul@gmail.com', '12345678', '01717171717', 'Mirpur 1', 'Male', 2147483645, '9April1947', 'reportOfWaliullah.zip', 'No Feedback'),
(6, 'Partho Roy', 'partho', 'partho@gmail.com', '12345678', '01717041693', 'basundhara R/A', 'Male', 2147483647, '9Jaunary1999', 'Not uploaded yet', 'No Feedback'),
(7, 'Abul Kader', 'abulkader', 'abulkader@gmail.com', '12345678', '01717173322', 'Dhanmondi', 'Male', 2147483647, '5May1975', 'Not uploaded yet', 'No Feedback'),
(9, 'Sojeeb Roy', 'sojeebroy', 'sojeebroy@gmail.com', 'sojeeeb1111', '01717041693', 'basundhara R/A', 'Male', 2147483645, '3March1943', 'reportOfSojeeb.zip', 'No Feedback'),
(10, 'Sujon Chandra Roy', 'sujanchandraroy', 'sujanchandra@gmail.com', '12345678', '12345678', 'Dhanmondi', 'Male', 2147483647, '8August1971', 'Not uploaded yet', 'No Feedback');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
