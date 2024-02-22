-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 03:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hvti`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE `studentregistration` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `otherNames` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `uceIndex` varchar(20) NOT NULL,
  `totalAggregates` int(11) NOT NULL,
  `bestSubjects` varchar(255) NOT NULL,
  `currentAddress` varchar(255) NOT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `secondarySchool` varchar(255) NOT NULL,
  `schoolName` varchar(255) DEFAULT NULL,
  `passSlipPath` varchar(255) DEFAULT NULL,
  `parentName` varchar(255) NOT NULL,
  `parentTel` varchar(15) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `source` varchar(50) NOT NULL,
  `otherSource` varchar(255) DEFAULT NULL,
  `cvPath` varchar(255) NOT NULL,
  `mentorLetterPath` varchar(255) NOT NULL,
  `agreeTerms` tinyint(1) NOT NULL,
  `submissionDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`id`, `fullName`, `phone`, `otherNames`, `dob`, `uceIndex`, `totalAggregates`, `bestSubjects`, `currentAddress`, `mobileNumber`, `email`, `secondarySchool`, `schoolName`, `passSlipPath`, `parentName`, `parentTel`, `courses`, `rating`, `source`, `otherSource`, `cvPath`, `mentorLetterPath`, `agreeTerms`, `submissionDate`) VALUES
(1, 'Dovin Smart', '0777512529', 'fdsf', '2024-02-23', '45433', 50, 'Mathematics, Physics, Foods and Nutrition, Biology, Fine Art', 'Suubi Home', '0777512529', 'dovinsmart@gmail.com', 'Other', 'fgdgdg', 'uploads/e5d68010-aaa2-4cbc-adbd-a03ef4311e95-BASIC-HTML-WEB-PROGRAMM-ING-NCIT121-APRIL-2021 S.pdf', 'fgd', '0777512529', 'National Certificate in Automotive Mechanics (NCAM), National Certificate in Journalism and Media Studies (NCJM), National Certificate in Fashion and Design (NCFD), National Certificate in Cosmetology and Beauty (NCCB), National Certificate in Information', 3, 'Church', '', 'uploads/e5d68010-aaa2-4cbc-adbd-a03ef4311e95-BASIC-HTML-WEB-PROGRAMM-ING-NCIT121-APRIL-2021 S.pdf', 'uploads/GRACE SHAMIM (1).docx', 0, '2024-02-22 13:58:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentregistration`
--
ALTER TABLE `studentregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentregistration`
--
ALTER TABLE `studentregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
