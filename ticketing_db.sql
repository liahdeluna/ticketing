-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2024 at 10:04 AM
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
-- Database: `ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_ID` varchar(255) NOT NULL,
  `user_Fname` varchar(255) NOT NULL,
  `User_Lname` varchar(255) NOT NULL,
  `User_MobileNum` varchar(255) NOT NULL,
  `User_Dept` varchar(255) NOT NULL,
  `User_JobDesc` varchar(255) NOT NULL,
  `User_Pass` varchar(255) NOT NULL,
  `User_Nickname` varchar(255) NOT NULL,
  `User_type` varchar(255) NOT NULL,
  `Tier` int(4) NOT NULL,
  `Specialty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_ID`, `user_Fname`, `User_Lname`, `User_MobileNum`, `User_Dept`, `User_JobDesc`, `User_Pass`, `User_Nickname`, `User_type`, `Tier`, `Specialty`) VALUES
('EMP001', 'Marvin', 'Reyes', '09123456789', 'ITS Department', 'Hardware and Software Head', '25bbdcd06c32d477f7fa1c3e4a91b032', 'Marvin', 'Admin', 0, 'hs'),
('EMP002', 'Clarenz', 'Dionisio', '09123456789', 'ITS Department', 'Network Admin', 'fcd04e26e900e94b9ed6dd604fed2b64', 'Clarenz', 'Admin', 0, 'n'),
('EMP101', 'Vernon', 'Caylao', '09123456789', 'ITS Department', 'Network Associate', '25bbdcd06c32d477f7fa1c3e4a91b032', 'Vernon', 'Admin', 1, 'n'),
('EMP102', 'Louie', 'De Jesus', '09123456789', 'ITS Department', 'Hardware Staff', 'fcd04e26e900e94b9ed6dd604fed2b64', 'Louie', 'Admin', 1, 'h'),
('EMP103', 'Nelson', 'Intal', '09123456789', 'ITS Department', 'Software Staff', '7cd86ecb09aa48c6e620b340f6a74592', 'Nelson', 'Admin', 1, 's'),
('EMP201', 'Jen', 'Lobo', '09123456789', 'ITS Department', 'Network Associate', '25bbdcd06c32d477f7fa1c3e4a91b032', 'Jen', 'Admin', 2, 'n'),
('EMP202', 'Marco', 'Mepua', '09123456789', 'ITS Department', 'Network Associate', 'fcd04e26e900e94b9ed6dd604fed2b64', 'Marco', 'Admin', 2, 'n'),
('EMP203', 'Gem', 'Cepriono', '09123456789', 'ITS Department', 'Hardware Staff', '7cd86ecb09aa48c6e620b340f6a74592', 'Gem', 'Admin', 2, 'h'),
('EMP204', 'Angelito', 'Dayrit', '09123456789', 'ITS Department', 'Software Staff', '95b09698fda1f64af16708ffb859eab9', 'Angelito', 'Admin', 2, 's');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `problem_id` bigint(20) UNSIGNED NOT NULL,
  `problem_category` varchar(50) DEFAULT NULL,
  `problem` varchar(100) DEFAULT NULL,
  `is_high_priority` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`problem_id`, `problem_category`, `problem`, `is_high_priority`) VALUES
(1, 'Hardware Concern', 'Computer Malfunction', 1),
(2, 'Hardware Concern', 'Broken Monitor, Broken Screen', 1),
(3, 'Hardware Concern', 'Faulty Keyboard, Faulty Mouse', 0),
(4, 'Hardware Concern', 'Printer Issue, Scanner Issue', 1),
(5, 'Hardware Concern', 'Peripheral Connectivity Issue', 0),
(6, 'Hardware Concern', 'Presentation Equipment Issue', 0),
(7, 'Hardware Concern', 'Hardware Compatibility Problem', 0),
(8, 'Software Concern', 'OS Error, OS Crash', 1),
(9, 'Software Concern', 'Software Installation / Configuration Issue', 1),
(10, 'Software Concern', 'Virus Infection, Malware Infection', 1),
(11, 'Software Concern', 'Software Compatibility Problem', 1),
(12, 'Software Concern', 'Application Crash, Application Freeze', 1),
(13, 'Software Concern', 'Software Update, Software Patch', 1),
(14, 'Software Concern', 'Software License Management', 0),
(15, 'Network Concern', 'Internet Connectivity Problem', 1),
(16, 'Network Concern', 'Slow Network', 1),
(17, 'Network Concern', 'VPN Access Issue', 1),
(18, 'Network Concern', 'Firewall Configuration, Security Settings', 0),
(19, 'Network Concern', 'Network Access Control Issue', 1),
(20, 'Network Concern', 'Network Security Incident', 1);

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `Admin_ID` varchar(255) NOT NULL,
  `Admin_Fname` varchar(255) NOT NULL,
  `Admin_Lname` varchar(255) NOT NULL,
  `Tier` int(4) NOT NULL,
  `Specialty` varchar(10) NOT NULL,
  `Admin_MobileNum` varchar(255) NOT NULL,
  `Admin_Dept` varchar(255) NOT NULL,
  `Admin_JobDesc` varchar(255) NOT NULL,
  `Admin_pass` varchar(255) NOT NULL,
  `Admin_Nickname` varchar(255) NOT NULL,
  `A_pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`Admin_ID`, `Admin_Fname`, `Admin_Lname`, `Tier`, `Specialty`, `Admin_MobileNum`, `Admin_Dept`, `Admin_JobDesc`, `Admin_pass`, `Admin_Nickname`, `A_pic`) VALUES
('EMP01', 'Super', 'Admin', 0, 'hsn', '09123456789', 'ITS Department', 'ITS Head Admin', '25bbdcd06c32d477f7fa1c3e4a91b032', 'Superadmin', '');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `Ticket_Number` int(255) NOT NULL,
  `Ticket_Subj` varchar(255) NOT NULL,
  `Ticket_type` varchar(2555) NOT NULL,
  `Ticket_Remarks` longtext NOT NULL,
  `Ticket_Priority` varchar(255) DEFAULT NULL,
  `Ticket_Status` varchar(255) NOT NULL,
  `Ticket_DateStart` timestamp NOT NULL DEFAULT current_timestamp(),
  `Ticket_DateEnd` varchar(255) DEFAULT NULL,
  `User_Id` varchar(255) NOT NULL,
  `DateCreated` date NOT NULL DEFAULT current_timestamp(),
  `Ticket_Tier` int(4) NOT NULL,
  `Ticket_Assigned` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`Ticket_Number`, `Ticket_Subj`, `Ticket_type`, `Ticket_Remarks`, `Ticket_Priority`, `Ticket_Status`, `Ticket_DateStart`, `Ticket_DateEnd`, `User_Id`, `DateCreated`, `Ticket_Tier`, `Ticket_Assigned`) VALUES
(66, 'Software License Management', 'Software Concern', 'Need MS Office License', 'Low Priority', 'Pending', '2024-04-05 07:35:36', NULL, 'EMP2001', '2024-04-05', 2, 'EMP204'),
(67, 'Hardware Compatibility Problem', 'Hardware Concern', 'Can\'t do accounting things.', 'Medium Priority', 'Pending', '2024-04-05 07:36:36', NULL, 'EMP1001', '2024-04-05', 1, 'EMP102'),
(68, 'Firewall Configuration, Security Settings', 'Network Concern', 'Firewall is blocking access to software', 'Medium Priority', 'Pending', '2024-04-05 07:38:09', NULL, 'EMP1001', '2024-04-05', 1, 'EMP101'),
(69, 'Virus Infection, Malware Infection', 'Software Concern', 'I\'m hacked???', 'High Priority', 'Pending', '2024-04-05 07:38:45', NULL, 'EMP2001', '2024-04-05', 2, 'EMP204'),
(70, 'Faulty Keyboard, Faulty Mouse', 'Hardware Concern', 'My R key is not working.', 'Low Priority', 'Pending', '2024-04-05 07:39:23', NULL, 'EMP2001', '2024-04-05', 2, 'EMP203'),
(71, 'Broken Monitor, Broken Screen', 'Hardware Concern', 'Blue screen of death', 'High Priority', 'Done', '2024-04-05 07:39:56', '2024-04-05 16:35:40', 'EMP0001', '2024-04-05', 0, 'EMP001'),
(72, 'Application Crash, Application Freeze', 'Software Concern', 'Billing app is crashing', 'High Priority', 'Pending', '2024-04-05 07:40:29', NULL, 'EMP1001', '2024-04-05', 1, 'EMP103'),
(73, 'Peripheral Connectivity Issue', 'Hardware Concern', 'Can\'t read USB.', 'Medium Priority', 'Pending', '2024-04-05 07:40:52', NULL, 'EMP1001', '2024-04-05', 1, 'EMP102'),
(74, 'Slow Network', 'Network Concern', 'Speed is 10kbps.', 'High Priority', 'Done', '2024-04-05 07:41:20', '2024-04-06 02:39:38', 'EMP0001', '2024-04-05', 0, 'EMP002'),
(75, 'Software License Management', 'Software Concern', 'May I have an Adobe Creative Cloud license, please?', 'Low Priority', 'Pending', '2024-04-05 07:42:35', NULL, 'EMP2001', '2024-04-05', 2, 'EMP204'),
(76, 'VPN Access Issue', 'Network Concern', 'Please fix, ASAP!', 'High Priority', 'Pending', '2024-04-05 07:43:12', NULL, 'EMP1001', '2024-04-05', 1, 'EMP101'),
(77, 'Presentation Equipment Issue', 'Hardware Concern', 'Can\'t connect to wireless projector.', 'Low Priority', 'Pending', '2024-04-05 07:44:00', NULL, 'EMP2001', '2024-04-05', 2, 'EMP203'),
(78, 'Internet Connectivity Problem', 'Network Concern', 'No wifi', 'High Priority', 'Pending', '2024-04-05 07:49:36', NULL, 'EMP2001', '2024-04-05', 2, 'EMP202'),
(79, 'Network Access Control Issue', 'Network Concern', 'Files got leaked !!', 'High Priority', 'Pending', '2024-04-05 07:50:13', NULL, 'EMP2001', '2024-04-05', 2, 'EMP201'),
(80, 'Slow Network', 'Network Concern', 'We can access the website that we need because of the internet', 'High Priority', 'Pending', '2024-04-05 09:02:02', NULL, 'EMP0001', '2024-04-05', 0, 'EMP002'),
(82, 'Computer Malfunction', 'Hardware Concern', 'Sample', 'High Priority', 'Pending', '2024-04-06 03:08:48', NULL, 'EMP0001', '2024-04-06', 0, 'EMP001'),
(83, 'Computer Malfunction', 'Hardware Concern', 'Sample uli', 'High Priority', 'Pending', '2024-04-06 03:09:45', NULL, 'EMP0001', '2024-04-06', 0, 'EMP001'),
(84, 'Firewall Configuration, Security Settings', 'Network Concern', 'Firewall restricting an app.', 'High Priority', 'Pending', '2024-04-06 03:45:09', NULL, 'EMP0001', '2024-04-06', 0, 'EMP002'),
(85, 'Computer Malfunction', 'Hardware Concern', 'Hello !!!', 'High Priority', 'Pending', '2024-04-06 04:05:07', NULL, 'EMP2001', '2024-04-06', 2, 'EMP203'),
(86, 'Firewall Configuration, Security Settings', 'Network Concern', 'Can\'t access this website messenger.com', 'Low Priority', 'Pending', '2024-05-15 22:14:15', NULL, 'EMP2001', '2024-05-16', 2, 'EMP201'),
(87, 'Hardware Compatibility Problem', 'Hardware Concern', 'Can\'t connect my USB', 'High Priority', 'Pending', '2024-05-15 22:17:47', NULL, 'EMP0001', '2024-05-16', 0, 'EMP001');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_comments`
--

CREATE TABLE `ticket_comments` (
  `CommentNumber` int(255) NOT NULL,
  `Comments` varchar(1000) NOT NULL,
  `Cstamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Commenter_Id` varchar(255) DEFAULT NULL,
  `Commenter_Name` varchar(255) DEFAULT NULL,
  `TicksNums` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ticket_comments`
--

INSERT INTO `ticket_comments` (`CommentNumber`, `Comments`, `Cstamp`, `Commenter_Id`, `Commenter_Name`, `TicksNums`) VALUES
(8, 'What we did was to put the following command ing CMD (ipconfig /release and ipconfig /renew)', '2024-04-05 18:39:36', 'emp002', 'Clarenz', 74);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_group`
--

CREATE TABLE `ticket_group` (
  `group_ID` int(255) NOT NULL,
  `Group_type` varchar(255) NOT NULL,
  `Group_Desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` varchar(255) NOT NULL,
  `user_Fname` varchar(255) NOT NULL,
  `User_Lname` varchar(255) NOT NULL,
  `User_MobileNum` varchar(255) NOT NULL,
  `User_Dept` varchar(255) NOT NULL,
  `User_JobDesc` varchar(255) NOT NULL,
  `User_Pass` varchar(255) NOT NULL,
  `User_Nickname` varchar(255) NOT NULL,
  `Tier` int(4) NOT NULL,
  `User_Type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `user_Fname`, `User_Lname`, `User_MobileNum`, `User_Dept`, `User_JobDesc`, `User_Pass`, `User_Nickname`, `Tier`, `User_Type`) VALUES
('EMP0001', 'VIP', 'One', '09123456789', 'Office of the Vice President', 'Vice President of Internal Affairs', '25bbdcd06c32d477f7fa1c3e4a91b032', 'VPA', 0, 'User'),
('EMP1001', 'Accounting', 'Head', '00', 'Accounting Department', 'Accounting', '25bbdcd06c32d477f7fa1c3e4a91b032', 'AH', 1, 'User'),
('EMP2001', 'Faculty', 'Teacher1', '00', 'Faculty Office', 'Teacher', '25bbdcd06c32d477f7fa1c3e4a91b032', 'FT1', 2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `User_ID` (`User_ID`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`problem_id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `Employee_ID` (`Admin_ID`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`Ticket_Number`),
  ADD UNIQUE KEY `Ticket_Number` (`Ticket_Number`),
  ADD KEY `User_Id` (`User_Id`),
  ADD KEY `tickets_ibfk_2` (`Ticket_Assigned`);

--
-- Indexes for table `ticket_comments`
--
ALTER TABLE `ticket_comments`
  ADD PRIMARY KEY (`CommentNumber`),
  ADD KEY `TicksNums` (`TicksNums`);

--
-- Indexes for table `ticket_group`
--
ALTER TABLE `ticket_group`
  ADD PRIMARY KEY (`group_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `User_ID` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `problem_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `Ticket_Number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `ticket_comments`
--
ALTER TABLE `ticket_comments`
  MODIFY `CommentNumber` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ticket_group`
--
ALTER TABLE `ticket_group`
  MODIFY `group_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_ID`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`Ticket_Assigned`) REFERENCES `admin` (`User_ID`);

--
-- Constraints for table `ticket_comments`
--
ALTER TABLE `ticket_comments`
  ADD CONSTRAINT `ticket_comments_ibfk_1` FOREIGN KEY (`TicksNums`) REFERENCES `tickets` (`Ticket_Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
