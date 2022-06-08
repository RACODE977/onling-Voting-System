-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 05:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `image`) VALUES
(6, 'admin123', 'admin123', 'Natsume-gakuen-alice-20827908-600-450 (1).jpg'),
(7, 'admin321', 'admin321', 'original-25020-1453944978-3.jpg'),
(34, '', '', ''),
(35, 'admin', 'admin', 'Natsume-ans-Mikan-Sakura-natsume-hyuuga-13321757-400-250.jpg'),
(36, '123456', '123456', '92-920036_nature-top-whatsapp-dp.jpg'),
(37, 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `comtable`
--

CREATE TABLE `comtable` (
  `ID` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `party` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comtable`
--

INSERT INTO `comtable` (`ID`, `firstName`, `lastName`, `nic`, `email`, `party`) VALUES
(16, 'sadaru', ' kuruppu', ' 1234868909V', '  sadaru@gmail.com', ' CRC'),
(21, 'sadaru', ' kuruppu', ' 1234868909V', '  sadaru@gmail.com', ' CRC'),
(22, 'sadaru', ' kuruppu', ' 1234868909V', '  sadaru@gmail.com', ' CRC');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Msg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(3, '', '', 'admin'),
(4, 'admin', 'admin', 'admin'),
(5, '123456', '123456', 'admin'),
(6, 'admin', 'admin', ''),
(7, 'user', 'user', 'user'),
(8, 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Phone` int(10) NOT NULL,
  `NICNumber` varchar(45) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `JobTitle` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `singers`
--

CREATE TABLE `singers` (
  `name` varchar(100) NOT NULL,
  `votes` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singers`
--

INSERT INTO `singers` (`name`, `votes`, `status`) VALUES
('kamal', 4, 0),
('Vimal', 12, 0),
('Pawan', 16, 0),
('Cathushka', 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrators`
--

CREATE TABLE `tbadministrators` (
  `admin_id` int(5) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadministrators`
--

INSERT INTO `tbadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Kimanii', 'Kahiga', 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin', 'admin', 'admin@example.com', 'admin'),
(3, '', '', '', '29e457082db729fa1059d4294ede3909'),
(4, 'AJAY', 'kumae', 'ajay@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tbcandidates`
--

CREATE TABLE `tbcandidates` (
  `candidate_id` int(5) NOT NULL,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_position` varchar(45) NOT NULL,
  `candidate_cvotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcandidates`
--

INSERT INTO `tbcandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_cvotes`) VALUES
(3, 'Luis Nani', 'Chairperson', 11),
(4, 'Wayne Rooney', 'Chairperson', 20),
(6, 'Thomas Vaemalen', 'Vice-Secretary', 2),
(8, 'Michael Walters', 'Secretary', 9),
(9, 'Roberto Mancini', 'Secretary', 46),
(10, 'Alex Ferguson', 'Treasurer', 0),
(11, 'Howard Web', 'Vice-Treasurer', 3),
(12, 'Richard Santana', 'Vice-Treasurer', 0),
(13, 'Chemical Reaction', 'Treasurer', 0),
(14, 'Danny Welbeck', 'Vice-Secretary', 0),
(15, 'Paul Allen', 'Organizing-Secretary', 4),
(16, 'Bill Gates', 'Organizing-Secretary', 4),
(17, 'Exponential Functions', 'Vice-Chairperson', 31),
(18, 'Algebraic Equations', 'Vice-Chairperson', 14),
(19, 'abhishek', 'HOD', 7),
(20, 'Aman', 'HOD', 2),
(22, 'Vaibhav', 'HOD', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblvotes`
--

CREATE TABLE `tblvotes` (
  `id` int(11) NOT NULL,
  `voter_id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `candidateName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvotes`
--

INSERT INTO `tblvotes` (`id`, `voter_id`, `position`, `candidateName`) VALUES
(1, 5, 'Chairperson', 'Luis Nani'),
(2, 5, 'Vice-Secretary', 'Thomas Vaemalen'),
(3, 5, 'Secretary', 'Michael Walters'),
(4, 5, 'Vice-Treasurer', 'Howard Web'),
(5, 5, 'HOD', 'Aman');

-- --------------------------------------------------------

--
-- Table structure for table `tbmembers`
--

CREATE TABLE `tbmembers` (
  `member_id` int(5) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmembers`
--

INSERT INTO `tbmembers` (`member_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Kimani', 'Kahiga', 'kahiga@gmail.com', '547da2b03f947606f1d06a8dec093e64'),
(2, 'MacDonald', 'Ngowi', 'mcbcrue08@gmail.com', '14b876400a7ae986df9b17fbaffb9eca'),
(3, 'test', 'testt', 'test@example.com', '098f6bcd4621d373cade4e832627b4f6'),
(5, 'Ajay', 'Chaubey', 'ajaychaubey95@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'anil', 'k', 'anil@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbpositions`
--

CREATE TABLE `tbpositions` (
  `position_id` int(5) NOT NULL,
  `position_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpositions`
--

INSERT INTO `tbpositions` (`position_id`, `position_name`) VALUES
(1, 'Chairperson'),
(2, 'Secretary'),
(5, 'Vice-Secretary'),
(7, 'Organizing-Secretary'),
(8, 'Treasurer'),
(9, 'Vice-Treasurer'),
(10, 'Vice-Chairperson'),
(11, 'HOD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comtable`
--
ALTER TABLE `comtable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbadministrators`
--
ALTER TABLE `tbadministrators`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbcandidates`
--
ALTER TABLE `tbcandidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `tblvotes`
--
ALTER TABLE `tblvotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voter_id` (`voter_id`);

--
-- Indexes for table `tbmembers`
--
ALTER TABLE `tbmembers`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbpositions`
--
ALTER TABLE `tbpositions`
  ADD PRIMARY KEY (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `comtable`
--
ALTER TABLE `comtable`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbadministrators`
--
ALTER TABLE `tbadministrators`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbcandidates`
--
ALTER TABLE `tbcandidates`
  MODIFY `candidate_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblvotes`
--
ALTER TABLE `tblvotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbmembers`
--
ALTER TABLE `tbmembers`
  MODIFY `member_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbpositions`
--
ALTER TABLE `tbpositions`
  MODIFY `position_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblvotes`
--
ALTER TABLE `tblvotes`
  ADD CONSTRAINT `tblvotes_ibfk_1` FOREIGN KEY (`voter_id`) REFERENCES `tbmembers` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
