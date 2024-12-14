-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 11:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emuna`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(50) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminPhnNum` varchar(50) NOT NULL,
  `adminAddrs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicantID` varchar(50) NOT NULL,
  `applicantName` varchar(50) NOT NULL,
  `applicantDOB` date NOT NULL,
  `applicantRace` varchar(50) NOT NULL,
  `applicantCitizenship` varchar(50) NOT NULL,
  `applicantEducation` varchar(50) NOT NULL,
  `applicantJob` varchar(50) NOT NULL,
  `applicantAddrs` varchar(50) NOT NULL,
  `applicantPhnNum` varchar(50) NOT NULL,
  `applicantMaritalStatus` varchar(50) NOT NULL,
  `partnerID` varchar(50) NOT NULL,
  `partnerName` varchar(50) NOT NULL,
  `partnerDOB` date NOT NULL,
  `partnerRace` varchar(50) NOT NULL,
  `partnerCitizenship` varchar(50) NOT NULL,
  `partnerEducation` varchar(50) NOT NULL,
  `partnerJob` varchar(50) NOT NULL,
  `partnerAddrs` varchar(50) NOT NULL,
  `partnerPhnNum` varchar(50) NOT NULL,
  `partnerMaritalStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `marriageID` varchar(50) NOT NULL,
  `coupleID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultationsession`
--

CREATE TABLE `consultationsession` (
  `requestNumber` varchar(50) NOT NULL,
  `complaintReason` varchar(50) NOT NULL,
  `complainantID` varchar(50) NOT NULL,
  `partnerID` varchar(50) NOT NULL,
  `complaintDetails` varchar(50) NOT NULL,
  `complaintStatus` varchar(50) NOT NULL,
  `complaintDate` date NOT NULL,
  `coupleID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courseapplicant`
--

CREATE TABLE `courseapplicant` (
  `applicantID` varchar(50) NOT NULL,
  `applicantName` varchar(50) NOT NULL,
  `applicantAddrs` varchar(50) NOT NULL,
  `applicantState` varchar(50) NOT NULL,
  `applicantJob` varchar(50) NOT NULL,
  `applicantGender` varchar(50) NOT NULL,
  `applicantNikahDate` date NOT NULL,
  `applicantDistrict` varchar(50) NOT NULL,
  `applicantEducation` varchar(50) NOT NULL,
  `applicantPhnNum` varchar(50) NOT NULL,
  `permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courtorder`
--

CREATE TABLE `courtorder` (
  `coupleID` varchar(50) NOT NULL,
  `applicantID` varchar(50) NOT NULL,
  `partnerID` varchar(50) NOT NULL,
  `courtOrderStatus` varchar(50) NOT NULL,
  `courtOrderCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incentive`
--

CREATE TABLE `incentive` (
  `husbandID` varchar(50) NOT NULL,
  `husbandSalary` varchar(50) NOT NULL,
  `husbandPlaceOfBirth` varchar(50) NOT NULL,
  `marriageType` varchar(50) NOT NULL,
  `validity` varchar(50) NOT NULL,
  `wifePlaceOfBirth` varchar(50) NOT NULL,
  `residentDuration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invalidnikah`
--

CREATE TABLE `invalidnikah` (
  `courtOrderCode` varchar(50) NOT NULL,
  `coupleID` varchar(50) NOT NULL,
  `wali_ID` varchar(50) NOT NULL,
  `witnessID` varchar(50) NOT NULL,
  `registrationDate` date NOT NULL,
  `registrationStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `applicantID` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikahcourse`
--

CREATE TABLE `nikahcourse` (
  `courseCode` varchar(50) NOT NULL,
  `courseDate` date NOT NULL,
  `courseVenue` varchar(50) NOT NULL,
  `courseCapacity` int(50) NOT NULL,
  `courseAvailability` varchar(50) NOT NULL,
  `staffID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikahdetails`
--

CREATE TABLE `nikahdetails` (
  `coupleID` varchar(50) NOT NULL,
  `nikahDate` date NOT NULL,
  `nikahLocation` varchar(50) NOT NULL,
  `masKahwin` int(20) NOT NULL,
  `nikahType` varchar(50) NOT NULL,
  `waliName` varchar(50) NOT NULL,
  `waliAddrs` varchar(50) NOT NULL,
  `waliDOB` date NOT NULL,
  `waliAge` int(50) NOT NULL,
  `waliRelation` varchar(50) NOT NULL,
  `wali_ID` varchar(50) NOT NULL,
  `witnessName` varchar(50) NOT NULL,
  `witnessAge` int(50) NOT NULL,
  `witnessAddrs` varchar(50) NOT NULL,
  `witnessID` varchar(50) NOT NULL,
  `applicantID` varchar(50) NOT NULL,
  `partnerID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikahrequest`
--

CREATE TABLE `nikahrequest` (
  `nikahRequestNum` varchar(50) NOT NULL,
  `coupleID` varchar(50) NOT NULL,
  `applicantID` varchar(50) NOT NULL,
  `partnerID` varchar(50) NOT NULL,
  `requestStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proofofpayment`
--

CREATE TABLE `proofofpayment` (
  `paymentNum` varchar(50) NOT NULL,
  `marriageID` varchar(50) NOT NULL,
  `nikahRequestNum` varchar(50) NOT NULL,
  `courseCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `applicantID` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userGender` varchar(50) NOT NULL,
  `userPhnNum` int(20) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` varchar(50) NOT NULL,
  `staffEmail` varchar(50) NOT NULL,
  `staffPhnNum` varchar(50) NOT NULL,
  `staffAddrs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `validnikah`
--

CREATE TABLE `validnikah` (
  `nikahRequestNum` varchar(50) NOT NULL,
  `coupleID` varchar(50) NOT NULL,
  `wali_ID` varchar(50) NOT NULL,
  `witnessID` varchar(50) NOT NULL,
  `registrationStatus` varchar(50) NOT NULL,
  `registrationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voluntarynikah`
--

CREATE TABLE `voluntarynikah` (
  `copyNum` varchar(50) NOT NULL,
  `coupleID` varchar(50) NOT NULL,
  `wali_ID` varchar(50) NOT NULL,
  `witnessID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicantID`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`marriageID`),
  ADD KEY `certificate_ibfk_1` (`coupleID`);

--
-- Indexes for table `consultationsession`
--
ALTER TABLE `consultationsession`
  ADD PRIMARY KEY (`requestNumber`),
  ADD KEY `coupleID` (`coupleID`),
  ADD KEY `partnerID` (`partnerID`);

--
-- Indexes for table `courseapplicant`
--
ALTER TABLE `courseapplicant`
  ADD PRIMARY KEY (`applicantID`);

--
-- Indexes for table `courtorder`
--
ALTER TABLE `courtorder`
  ADD PRIMARY KEY (`coupleID`),
  ADD KEY `applicantID` (`applicantID`),
  ADD KEY `partnerID` (`partnerID`);

--
-- Indexes for table `incentive`
--
ALTER TABLE `incentive`
  ADD PRIMARY KEY (`husbandID`);

--
-- Indexes for table `invalidnikah`
--
ALTER TABLE `invalidnikah`
  ADD PRIMARY KEY (`courtOrderCode`),
  ADD KEY `coupleID` (`coupleID`),
  ADD KEY `wali_ID` (`wali_ID`),
  ADD KEY `witnessID` (`witnessID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`applicantID`),
  ADD KEY `password` (`password`);

--
-- Indexes for table `nikahcourse`
--
ALTER TABLE `nikahcourse`
  ADD PRIMARY KEY (`courseCode`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `nikahdetails`
--
ALTER TABLE `nikahdetails`
  ADD PRIMARY KEY (`coupleID`),
  ADD KEY `applicantID` (`applicantID`),
  ADD KEY `partnerID` (`partnerID`);

--
-- Indexes for table `nikahrequest`
--
ALTER TABLE `nikahrequest`
  ADD PRIMARY KEY (`nikahRequestNum`),
  ADD KEY `coupleID` (`coupleID`),
  ADD KEY `applicantID` (`applicantID`),
  ADD KEY `partnerID` (`partnerID`);

--
-- Indexes for table `proofofpayment`
--
ALTER TABLE `proofofpayment`
  ADD PRIMARY KEY (`paymentNum`),
  ADD KEY `marriageID` (`marriageID`),
  ADD KEY `nikahRequestNum` (`nikahRequestNum`),
  ADD KEY `courseCode` (`courseCode`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`applicantID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `validnikah`
--
ALTER TABLE `validnikah`
  ADD PRIMARY KEY (`nikahRequestNum`),
  ADD KEY `coupleID` (`coupleID`),
  ADD KEY `wali_ID` (`wali_ID`),
  ADD KEY `witnessID` (`witnessID`);

--
-- Indexes for table `voluntarynikah`
--
ALTER TABLE `voluntarynikah`
  ADD PRIMARY KEY (`copyNum`),
  ADD KEY `coupleID` (`coupleID`),
  ADD KEY `wali_ID` (`wali_ID`),
  ADD KEY `witnessID` (`witnessID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `certificate_ibfk_1` FOREIGN KEY (`coupleID`) REFERENCES `nikahdetails` (`coupleID`);

--
-- Constraints for table `consultationsession`
--
ALTER TABLE `consultationsession`
  ADD CONSTRAINT `consultationsession_ibfk_1` FOREIGN KEY (`coupleID`) REFERENCES `nikahdetails` (`coupleID`),
  ADD CONSTRAINT `consultationsession_ibfk_2` FOREIGN KEY (`partnerID`) REFERENCES `applicant` (`applicantID`);

--
-- Constraints for table `courtorder`
--
ALTER TABLE `courtorder`
  ADD CONSTRAINT `courtorder_ibfk_1` FOREIGN KEY (`applicantID`) REFERENCES `applicant` (`applicantID`),
  ADD CONSTRAINT `courtorder_ibfk_2` FOREIGN KEY (`partnerID`) REFERENCES `applicant` (`applicantID`);

--
-- Constraints for table `invalidnikah`
--
ALTER TABLE `invalidnikah`
  ADD CONSTRAINT `invalidnikah_ibfk_1` FOREIGN KEY (`coupleID`) REFERENCES `nikahdetails` (`coupleID`),
  ADD CONSTRAINT `invalidnikah_ibfk_2` FOREIGN KEY (`wali_ID`) REFERENCES `nikahdetails` (`coupleID`),
  ADD CONSTRAINT `invalidnikah_ibfk_3` FOREIGN KEY (`witnessID`) REFERENCES `nikahdetails` (`coupleID`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`password`) REFERENCES `registration` (`applicantID`);

--
-- Constraints for table `nikahcourse`
--
ALTER TABLE `nikahcourse`
  ADD CONSTRAINT `nikahcourse_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`);

--
-- Constraints for table `nikahdetails`
--
ALTER TABLE `nikahdetails`
  ADD CONSTRAINT `nikahdetails_ibfk_1` FOREIGN KEY (`applicantID`) REFERENCES `applicant` (`applicantID`),
  ADD CONSTRAINT `nikahdetails_ibfk_2` FOREIGN KEY (`partnerID`) REFERENCES `applicant` (`applicantID`);

--
-- Constraints for table `nikahrequest`
--
ALTER TABLE `nikahrequest`
  ADD CONSTRAINT `nikahrequest_ibfk_1` FOREIGN KEY (`coupleID`) REFERENCES `nikahdetails` (`coupleID`),
  ADD CONSTRAINT `nikahrequest_ibfk_2` FOREIGN KEY (`applicantID`) REFERENCES `applicant` (`applicantID`),
  ADD CONSTRAINT `nikahrequest_ibfk_3` FOREIGN KEY (`partnerID`) REFERENCES `applicant` (`applicantID`);

--
-- Constraints for table `proofofpayment`
--
ALTER TABLE `proofofpayment`
  ADD CONSTRAINT `proofofpayment_ibfk_1` FOREIGN KEY (`marriageID`) REFERENCES `certificate` (`marriageID`),
  ADD CONSTRAINT `proofofpayment_ibfk_2` FOREIGN KEY (`nikahRequestNum`) REFERENCES `nikahrequest` (`nikahRequestNum`),
  ADD CONSTRAINT `proofofpayment_ibfk_3` FOREIGN KEY (`courseCode`) REFERENCES `nikahcourse` (`courseCode`);

--
-- Constraints for table `validnikah`
--
ALTER TABLE `validnikah`
  ADD CONSTRAINT `validnikah_ibfk_1` FOREIGN KEY (`coupleID`) REFERENCES `nikahdetails` (`coupleID`),
  ADD CONSTRAINT `validnikah_ibfk_2` FOREIGN KEY (`wali_ID`) REFERENCES `nikahdetails` (`coupleID`),
  ADD CONSTRAINT `validnikah_ibfk_3` FOREIGN KEY (`witnessID`) REFERENCES `nikahdetails` (`coupleID`);

--
-- Constraints for table `voluntarynikah`
--
ALTER TABLE `voluntarynikah`
  ADD CONSTRAINT `voluntarynikah_ibfk_1` FOREIGN KEY (`coupleID`) REFERENCES `nikahdetails` (`coupleID`),
  ADD CONSTRAINT `voluntarynikah_ibfk_2` FOREIGN KEY (`wali_ID`) REFERENCES `nikahdetails` (`coupleID`),
  ADD CONSTRAINT `voluntarynikah_ibfk_3` FOREIGN KEY (`witnessID`) REFERENCES `nikahdetails` (`coupleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
