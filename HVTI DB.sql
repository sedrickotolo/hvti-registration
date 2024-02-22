-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 01:00 PM
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
CREATE DATABASE IF NOT EXISTS `hvti` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hvti`;

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE `studentregistration` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `otherNames` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `uceIndex` varchar(20) NOT NULL,
  `totalAggregates` int(11) NOT NULL,
  `bestSubjects` varchar(255) NOT NULL,
  `currentAddress` varchar(255) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `secondarySchool` varchar(255) NOT NULL,
  `parentName` varchar(255) NOT NULL,
  `parentTel` varchar(20) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `otherSource` varchar(255) DEFAULT NULL,
  `cvPath` varchar(255) NOT NULL,
  `mentorLetterPath` varchar(255) NOT NULL,
  `agreeTerms` tinyint(1) NOT NULL,
  `submissionDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`id`, `fullName`, `phone`, `otherNames`, `dob`, `uceIndex`, `totalAggregates`, `bestSubjects`, `currentAddress`, `mobileNumber`, `email`, `secondarySchool`, `parentName`, `parentTel`, `courses`, `rating`, `source`, `otherSource`, `cvPath`, `mentorLetterPath`, `agreeTerms`, `submissionDate`) VALUES
(4, 'Dovin Smart', '0777512529', 'fdsf', '2024-02-15', '45433', 20, 'English, Mathematics, Physics, Foods and Nutrition, ICT', 'Bbira Home', '0777512529', 'dovinsmart@gmail.com', 'Hope Senior School Bbira', 'fgd', '0777512529', 'National Certificate in Electrical Installation Systems & Maintenance (NCES), National Certificate in Building Construction (NCBC), National Certificate in Automotive Mechanics (NCAM)', 3, 'Internet', '', 'uploads/dovin (3).pdf', 'uploads/dovin (1).pdf', 0, '2024-02-22 10:48:38'),
(5, 'Dovin Smart', '0777512529', 'fdsf', '2024-02-19', '45433', 24, 'English, Mathematics, Physics, Foods and Nutrition, ICT', 'Suubi Home', '0777512529', 'dovinsmart@gmail.com', 'Hope Senior School Bbira', 'fgd', '0777512529', 'National Certificate in Electrical Installation Systems & Maintenance (NCES), National Certificate in Building Construction (NCBC), National Certificate in Automotive Mechanics (NCAM)', 2, 'High School', '', 'uploads/dovin (3).pdf', 'uploads/dovin (2).pdf', 0, '2024-02-22 10:50:10'),
(6, 'Dovin Smart', '0777512529', 'fdsf', '2024-02-19', '45433', 24, 'English, Mathematics, Physics, Foods and Nutrition, ICT', 'Suubi Home', '0777512529', 'dovinsmart@gmail.com', 'Hope Senior School Bbira', 'fgd', '0777512529', 'National Certificate in Electrical Installation Systems & Maintenance (NCES), National Certificate in Building Construction (NCBC), National Certificate in Automotive Mechanics (NCAM)', 2, 'High School', '', 'uploads/dovin (3).pdf', 'uploads/dovin (2).pdf', 0, '2024-02-22 10:51:41'),
(7, 'Dovin Smart', '0777512529', 'fdsf', '2024-02-19', '45433', 24, 'English, Mathematics, Physics, Foods and Nutrition, ICT', 'Suubi Home', '0777512529', 'dovinsmart@gmail.com', 'Hope Senior School Bbira', 'fgd', '0777512529', 'National Certificate in Electrical Installation Systems & Maintenance (NCES), National Certificate in Building Construction (NCBC), National Certificate in Automotive Mechanics (NCAM)', 2, 'High School', '', 'uploads/dovin (3).pdf', 'uploads/dovin (2).pdf', 0, '2024-02-22 10:55:43'),
(8, 'Dovin Smart', '0777512529', '', '2024-02-24', '546565', 26, 'English, Mathematics, Physics, ICT, Biology', 'Suubi Home', '0777512529', 'dovinsmart@gmail.com', 'Hope Senior School Suubi', 'fgd', '0777512529', 'National Certificate in Electrical Installation Systems & Maintenance (NCES), National Certificate in Building Construction (NCBC), National Certificate in Automotive Mechanics (NCAM)', 5, 'High School', '', 'uploads/GRACE SHAMIM (1).docx', 'uploads/dovin.pdf', 0, '2024-02-22 10:57:36'),
(9, 'Dovin Smart', '0777512529', 'fdsf', '2024-02-23', '45433', 24, 'English, Mathematics, Physics, Foods and Nutrition, ICT', 'Bbira Home', '0777512529', 'dovinsmart@gmail.com', 'Hope Senior School Bbira', 'fgd', '0777512529', 'National Certificate in Electrical Installation Systems & Maintenance (NCES), National Certificate in Building Construction (NCBC), National Certificate in Automotive Mechanics (NCAM)', 4, 'Church', '', 'uploads/Divine Handbook.pdf', 'uploads/e5d68010-aaa2-4cbc-adbd-a03ef4311e95-BASIC-HTML-WEB-PROGRAMM-ING-NCIT121-APRIL-2021 S.pdf', 0, '2024-02-22 11:01:46'),
(10, 'Dovin Smart', '0777512529', 'fdsf', '2024-02-23', '45433', 24, 'English, Mathematics, Physics, Foods and Nutrition, ICT', 'Bbira Home', '0777512529', 'dovinsmart@gmail.com', 'Hope Senior School Bbira', 'fgd', '0777512529', 'National Certificate in Electrical Installation Systems & Maintenance (NCES), National Certificate in Building Construction (NCBC), National Certificate in Automotive Mechanics (NCAM)', 4, 'Church', '', 'uploads/Divine Handbook.pdf', 'uploads/e5d68010-aaa2-4cbc-adbd-a03ef4311e95-BASIC-HTML-WEB-PROGRAMM-ING-NCIT121-APRIL-2021 S.pdf', 0, '2024-02-22 11:06:39'),
(11, 'Dovin Smart', '0777512529', 'fdsf', '2024-02-23', '45433', 24, 'English, Mathematics, Physics, Foods and Nutrition, ICT', 'Bbira Home', '0777512529', 'dovinsmart@gmail.com', 'Hope Senior School Bbira', 'fgd', '0777512529', 'National Certificate in Electrical Installation Systems & Maintenance (NCES), National Certificate in Building Construction (NCBC), National Certificate in Automotive Mechanics (NCAM)', 4, 'Church', '', 'uploads/Divine Handbook.pdf', 'uploads/e5d68010-aaa2-4cbc-adbd-a03ef4311e95-BASIC-HTML-WEB-PROGRAMM-ING-NCIT121-APRIL-2021 S.pdf', 0, '2024-02-22 11:25:39');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
