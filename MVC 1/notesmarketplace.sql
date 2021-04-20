-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 09:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notesmarketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Category_name` varchar(34) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Category_name`, `Description`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'PDF(Digital)', 'Notes in pdf format', '2021-03-28 17:30:45', NULL, NULL, NULL, b'1'),
(2, 'Scanned', 'Scanned notes', '2021-03-28 17:30:45', NULL, NULL, NULL, b'1'),
(3, 'Hard copy', 'hard copy notes', '2021-03-28 17:33:26', NULL, NULL, NULL, b'1'),
(4, 'Hand-Writing', 'Handwritten notes', '2021-03-28 15:33:26', NULL, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Country_Name` varchar(34) NOT NULL,
  `Country_Code` varchar(50) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`ID`, `Country_Name`, `Country_Code`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'Australia', '61', '2021-03-28 17:40:45', NULL, NULL, NULL, b'1'),
(2, 'Bhutan', '975', '2021-03-28 17:40:45', NULL, NULL, NULL, b'1'),
(3, 'China', '86', '2021-03-28 17:40:45', NULL, NULL, NULL, b'1'),
(4, 'Canada', '1', '2021-03-28 17:44:32', NULL, NULL, NULL, b'1'),
(5, 'Iran', '98', '2021-03-28 17:44:32', NULL, NULL, NULL, b'1'),
(6, 'India', '91', '2021-03-28 17:46:29', NULL, NULL, NULL, b'1'),
(7, 'Japan', '81', '2021-03-28 17:47:05', NULL, NULL, NULL, b'1'),
(8, 'Pakistan', '92', '2021-03-28 17:48:05', NULL, NULL, NULL, b'1'),
(9, 'Singapore', '65', '2021-03-28 17:52:16', NULL, NULL, NULL, b'1'),
(10, 'Thailand', '66', '2021-03-28 17:52:16', NULL, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NoteID` int(10) UNSIGNED NOT NULL,
  `SellerID` int(10) UNSIGNED NOT NULL,
  `DownloaderID` int(10) UNSIGNED NOT NULL,
  `IsSellerHasAllowedDownload` bit(1) NOT NULL,
  `AttachmentPath` varchar(500) DEFAULT NULL,
  `IsAttachmentDownloaded` bit(1) NOT NULL,
  `AttachmentDownloadedDate` datetime DEFAULT NULL,
  `IsPaid` int(11) UNSIGNED NOT NULL,
  `PurchasedPrice` decimal(10,0) DEFAULT NULL,
  `NoteTitle` varchar(100) NOT NULL,
  `NoteCategory` varchar(100) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`ID`, `NoteID`, `SellerID`, `DownloaderID`, `IsSellerHasAllowedDownload`, `AttachmentPath`, `IsAttachmentDownloaded`, `AttachmentDownloadedDate`, `IsPaid`, `PurchasedPrice`, `NoteTitle`, `NoteCategory`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`) VALUES
(1, 11, 1, 1, b'1', NULL, b'1', '2021-04-03 11:22:19', 4, '100', 'Web Technology', 'PDF', '2021-04-04 12:15:23', NULL, NULL, NULL),
(2, 12, 1, 1, b'1', NULL, b'1', '2021-04-04 11:26:32', 5, '180', 'AI', 'Computer', '2021-04-04 12:24:03', NULL, NULL, NULL),
(3, 13, 3, 3, b'1', NULL, b'1', '2021-04-04 11:49:21', 4, '220', 'Python', 'hard copy', '2021-04-03 12:10:44', NULL, NULL, NULL),
(4, 15, 3, 1, b'1', NULL, b'1', '2021-04-04 11:49:21', 5, '90', 'Big Data', 'Scanned', '2021-04-03 11:49:21', NULL, NULL, NULL),
(5, 16, 1, 3, b'1', NULL, b'1', '2021-04-03 11:10:52', 5, '155', 'Economics', 'Social', '2021-04-03 11:26:32', NULL, NULL, NULL),
(6, 17, 1, 3, b'1', NULL, b'1', '2021-04-03 12:10:44', 4, '110', 'Big Data', 'PDF', '2021-04-03 11:22:19', NULL, NULL, NULL),
(7, 18, 3, 1, b'1', NULL, b'1', '2021-04-03 12:15:23', 4, '120', 'INS', 'Hand-written', '2021-04-04 11:49:21', NULL, NULL, NULL),
(8, 19, 1, 3, b'1', NULL, b'1', '2021-04-04 12:15:23', 5, '160', 'Java', 'Scanned', '2021-04-04 12:15:23', NULL, NULL, NULL),
(9, 20, 3, 1, b'1', NULL, b'1', '2021-04-04 12:21:38', 5, '150', 'AI', 'PDF', '2021-04-03 12:21:38', NULL, NULL, NULL),
(10, 21, 3, 1, b'1', NULL, b'1', '2021-04-04 12:21:38', 5, '145', 'Geography', 'Social', '2021-04-04 12:21:38', NULL, NULL, NULL),
(11, 22, 1, 3, b'1', NULL, b'1', '2021-04-05 12:24:03', 5, '180', 'AI', 'IT', '2021-04-03 12:10:44', NULL, NULL, NULL),
(12, 24, 1, 3, b'1', NULL, b'1', '2021-04-03 12:24:03', 4, '125', 'Python', 'Hand-written', '2021-04-04 12:24:03', NULL, NULL, NULL),
(13, 26, 3, 1, b'1', NULL, b'1', '2021-04-04 12:21:38', 5, '140', 'Computer Networks', 'IT', '2021-03-28 07:42:39', NULL, NULL, NULL),
(15, 26, 3, 1, b'1', NULL, b'1', '2021-04-04 12:21:38', 5, '155', 'Data Mining', 'CE', '2021-03-20 15:30:43', NULL, NULL, NULL),
(17, 27, 1, 3, b'1', NULL, b'1', '2021-04-03 12:15:23', 4, '100', 'AI', 'IT', '2021-03-20 19:56:27', NULL, NULL, NULL),
(18, 28, 1, 3, b'1', NULL, b'1', '2021-04-04 15:11:53', 4, '170', 'C++', 'CE', '2021-03-25 10:24:31', NULL, NULL, NULL),
(19, 29, 3, 1, b'1', NULL, b'1', '2021-04-03 11:22:19', 5, '100', 'Database Management System', 'Manage', '2021-04-04 12:25:49', NULL, NULL, NULL),
(20, 32, 1, 3, b'1', NULL, b'1', '2021-04-03 15:19:32', 5, '90', 'English', 'Eng', '2021-03-25 10:39:07', NULL, NULL, NULL),
(21, 33, 3, 1, b'1', NULL, b'1', '2021-04-03 11:22:19', 5, '220', 'Digital Electronics', 'IT', '2021-03-20 19:56:27', NULL, NULL, NULL),
(22, 34, 1, 3, b'1', NULL, b'1', '2021-04-04 11:49:21', 4, '130', 'MCWC', 'IT', '2021-03-25 10:32:46', NULL, NULL, NULL),
(23, 35, 3, 1, b'1', NULL, b'1', '2021-04-03 11:22:19', 4, '150', 'Operating System', 'CE', '2021-03-28 07:42:39', NULL, NULL, NULL),
(24, 36, 1, 3, b'1', NULL, b'1', '2021-04-03 12:10:44', 5, '110', 'DDBMS', 'CE', '2021-03-20 19:56:27', NULL, NULL, NULL),
(25, 37, 1, 3, b'1', NULL, b'1', '2021-04-04 11:26:10', 5, '115', 'Database Management System', 'Manage', '2021-04-04 12:25:49', NULL, NULL, NULL),
(26, 38, 3, 1, b'1', NULL, b'1', '2021-04-04 12:15:23', 4, '140', 'Python', 'IT', '2021-03-25 10:36:52', NULL, NULL, NULL),
(27, 39, 3, 1, b'1', NULL, b'1', '2021-04-05 12:24:03', 5, '210', 'Java', 'IT', '2021-04-03 15:23:14', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `ID` int(10) UNSIGNED NOT NULL,
  `SellerID` int(11) UNSIGNED NOT NULL,
  `Status` int(11) UNSIGNED NOT NULL,
  `Actioned_By` int(11) UNSIGNED DEFAULT NULL,
  `Admin_Remarks` varchar(500) DEFAULT NULL,
  `PublishedDate` datetime DEFAULT NULL,
  `Note_Title` varchar(100) NOT NULL,
  `Category` int(11) UNSIGNED NOT NULL,
  `Note_Display_Picture` varchar(500) DEFAULT NULL,
  `Note_types` int(10) UNSIGNED DEFAULT NULL,
  `Note_Pages` smallint(6) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `University` varchar(100) NOT NULL,
  `Country` int(10) UNSIGNED NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Course_Code` varchar(50) NOT NULL,
  `Professor_Name` varchar(100) NOT NULL,
  `Is_Paid` int(10) UNSIGNED NOT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `NotesPreview` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`ID`, `SellerID`, `Status`, `Actioned_By`, `Admin_Remarks`, `PublishedDate`, `Note_Title`, `Category`, `Note_Display_Picture`, `Note_types`, `Note_Pages`, `Description`, `University`, `Country`, `Course`, `Course_Code`, `Professor_Name`, `Is_Paid`, `Price`, `NotesPreview`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(11, 1, 7, NULL, NULL, '2021-04-04 07:11:28', 'Science', 2, '../Members/default/note-default.jpg', 2, 200, 'basic', 'dmdvjtsgrb', 7, 'CE', '17', 'Andrea', 4, '350', '../Members/1/11/Preview_1112327933.jpg', '2021-04-04 12:44:20', 1, '2021-04-04 12:44:20', 1, b'1'),
(12, 1, 5, NULL, NULL, '2021-04-04 07:10:30', 'Big Data', 3, '../Members/1/12/DP_1112328320.jpg', 1, 220, 'big data paper', 'cvm', 5, 'CE', '17', 'louis', 5, '250', '../Members/1/12/Preview_1112328320.jpg', '2021-04-04 12:50:46', 1, '2021-04-04 12:50:46', 1, b'1'),
(13, 1, 7, NULL, NULL, '2021-04-04 07:10:27', 'Digital elecronics', 3, '../Members/1/13/DP_1112332431.jpg', 2, 250, 'digital elecronics book', 'gtu', 5, 'IT', '16', 'vinit virani', 5, '105', '../Members/1/13/Preview_1112332431.jpg', '2021-04-04 14:02:29', 1, '2021-04-04 14:02:29', 1, b'1'),
(15, 1, 5, NULL, NULL, '2021-04-03 07:10:42', 'Big Data', 1, '../Members/1/15/DP_1112351233.jpg', 1, 240, 'Lorem ipsum dolor sit amet, Neque voluptatum sit, iusto temporibus ipsam. ', 'University of Delhi', 8, 'Computer Engineering', '240520', 'Alex ', 4, '220', '../Members/1/15/Preview_1112351233.png', '2021-04-04 19:15:53', 1, '2021-04-04 19:15:53', 1, b'1'),
(16, 1, 8, NULL, NULL, '2021-04-05 07:10:59', 'Computer Operating System - Final Exam Book With Paper Solution', 2, '../Members/1/16/DP_1112351420.jpg', 2, 310, 'Lorem ipsum dolor sit amet, Neque voluptatum sit, Nesciunt earum ipsam error, aut vitae molestiae sit.', 'University of Delhi', 8, 'IT', '16', 'vini virani', 4, '300', '../Members/1/16/Preview_1112351421.png', '2021-04-04 19:22:56', 1, '2021-04-04 19:22:56', 1, b'1'),
(17, 1, 7, NULL, NULL, '2021-04-05 07:11:17', 'Computer Science - The complete reference', 3, '../Members/1/17/DP_1112351611.jpg', 1, 330, 'Lorem ipsum dolor sit amet, Neque voluptatum sit, Nesciunt earum ipsam error, aut vitae molestiae sit.', 'University of Australia', 1, 'Computer Engineering', '240520', 'Richard brown', 5, '400', '../Members/1/17/Preview_1112351611.png', '2021-04-04 19:26:33', 1, '2021-04-04 19:26:33', 1, b'1'),
(18, 1, 7, NULL, NULL, '2021-04-05 07:11:21', 'Basic Computer Engineering Tech India Publication Series', 4, '../Members/1/18/DP_1112351754.jpg', 1, 350, 'Lorem ipsum dolor sit amet, Nesciunt earum ipsam error, aut vitae molestiae sit.', 'University of London', 2, 'MBA', '213050', 'Amrita Rao', 5, '230', '../Members/1/18/Preview_1112351754.png', '2021-04-04 19:26:33', 1, '2021-04-04 19:26:33', 1, b'1'),
(19, 1, 7, NULL, NULL, '2021-04-05 07:11:16', 'Computer Science - The complete reference - Seventh Edition', 1, '../Members/1/19/DP_1112351915.jpg', 1, 450, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptatum sit, iusto temporibus ipsam. Nesciunt earum ipsam error, aut vitae molestiae sit.', 'University of Germany', 4, 'MCA', '215061', 'Dhara rathi', 4, '500', '../Members/1/19/Preview_1112351915.png', '2021-04-04 19:28:37', 1, '2021-04-04 19:28:37', 1, b'1'),
(20, 1, 7, NULL, NULL, '2021-04-05 07:11:25', 'Computer Operating System - Final Exam Book With Paper Solution', 2, '../Members/1/20/DP_1112352037.jpg', 2, 300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptatum sit, iusto temporibus ipsam. Nesciunt earum ipsam error, aut vitae molestiae sit.', 'University of India', 5, 'Computer Engineering', '240520', 'Andrea Brown', 4, '100', '../Members/1/20/Preview_1112352038.png', '2021-04-04 19:31:07', 1, '2021-04-04 19:31:07', 1, b'1'),
(21, 1, 7, NULL, NULL, '2021-04-05 07:11:32', 'Computer Science - The complete reference', 3, '../Members/1/21/DP_1112352305.jpg', 2, 250, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptatum sit, iusto temporibus ipsam. Nesciunt earum ipsam error, aut vitae molestiae sit.', 'University of Japan', 6, 'MBA', '213050', 'Naitry Doshi', 4, '410', '../Members/1/21/Preview_1112352309.png', '2021-04-04 19:35:09', 1, '2021-04-04 19:35:09', 1, b'1'),
(22, 1, 8, NULL, NULL, '2021-04-05 07:11:29', 'Basic Computer Engineering Tech India Publication Series', 4, '../Members/1/22/DP_1112352442.jpg', 1, 450, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptatum sit, iusto temporibus ipsam. Nesciunt earum ipsam error, aut vitae molestiae sit.', 'Sal institute', 7, 'MCA', '215061', 'Aymana shah', 5, '500', '../Members/1/22/Preview_1112352442.png', '2021-04-04 19:37:52', 1, '2021-04-04 19:37:52', 1, b'1'),
(24, 1, 7, NULL, NULL, '2021-04-05 07:11:43', 'Computer Operating System - Final Exam Book With Paper Solution', 3, '../Members/1/24/DP_1112352817.jpg', 1, 350, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptatum sit, iusto temporibus ipsam. Nesciunt earum ipsam error, aut vitae molestiae sit.', 'University of California', 8, 'Computer Engineering', '240520', 'Anjali vasita', 5, '410', '../Members/1/24/Preview_1112352817.png', '2021-04-04 19:43:47', 1, '2021-04-04 19:43:47', 1, b'1'),
(26, 1, 8, NULL, NULL, '2021-04-05 07:12:28', 'Course Management', 2, '../Members/default/note-default.jpg', 2, 450, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptatum sit, iusto temporibus ipsam. Nesciunt earum ipsam error, aut vitae molestiae sit.', 'University of India', 5, 'MBA', '213050', 'vinit virmani', 4, '200', '../Members/1/26/Preview_1112404443.png', '2021-04-05 10:04:32', 1, '2021-04-05 10:04:32', 1, b'1'),
(27, 1, 7, NULL, NULL, '2021-04-04 20:30:41', 'History', 1, '../Members/1/27/DP_1112443864.jpg', 1, 250, 'lorem ispum book', 'University of London', 6, 'CAT', '214020', 'Arina', 4, '0', NULL, '2021-04-03 15:28:17', 1, '2021-04-03 15:28:17', 1, b'1'),
(28, 1, 7, NULL, NULL, '2021-04-04 20:30:12', 'History', 1, '../Members/default/note-default.jpg', 1, 250, 'lorem ispum book', 'University of Japan', 6, 'MBA', '213050', 'Alex ', 4, '100', '../Members/1/28/Preview_1112444032.png', '2021-04-05 15:31:02', 1, '2021-04-05 15:31:02', 1, b'1'),
(29, 1, 8, NULL, NULL, '2021-04-04 20:30:26', 'History', 3, '../Members/1/29/DP_1112444145.jpg', 1, 450, 'history book', 'Sal institute', 5, 'Computer Engineering', '240520', 'Dhara rathi', 5, '500', '../Members/1/29/Preview_1112444145.png', '2021-04-05 15:32:55', 1, '2021-04-05 15:32:55', 1, b'1'),
(32, 1, 7, NULL, NULL, '2021-04-03 20:12:49', 'History', 2, '../Members/1/29/DP_1112444145.jpg', 2, 250, 'lorem book', 'appolo institute', 5, 'IT', '16', 'Suresh patel', 5, '250', '../Members/1/29/Preview_1112444145.png', '2021-04-03 15:25:58', 1, '2021-04-04 15:40:50', 1, b'1'),
(33, 1, 7, NULL, NULL, '2021-04-04 20:21:56', 'Maths', 3, '../Members/1/29/DP_1112444145.jpg', 2, 300, 'maths book', 'AIT', 5, 'Computer', '13', 'janvi shah', 4, '200', '../Members/1/29/Preview_1112444145.png', '2021-04-04 15:25:58', 1, '2021-04-04 15:25:58', 1, b'1'),
(34, 1, 8, NULL, NULL, '2021-04-04 11:05:06', 'History', 3, '../Members/1/34/DP_1112445421.jpg', 1, 450, 'lorem book', 'University of Germany', 4, 'IT', '213050', 'Alex ', 5, '100', '../Members/1/34/Preview_1112445421.png', '2021-04-05 15:53:43', 1, '2021-04-05 15:53:43', 1, b'1'),
(35, 1, 7, NULL, NULL, '2021-04-04 11:05:13', 'Maths', 4, '../Members/1/35/DP_1112445535.jpg', 1, 500, 'Maths book', 'University of India', 5, 'MCA', '240520', 'louis', 4, '600', '../Members/1/35/Preview_1112445535.png', '2021-04-05 15:55:39', 1, '2021-04-05 15:55:39', 1, b'1'),
(36, 1, 5, NULL, NULL, '2021-04-05 11:05:29', 'Data Science', 3, '../Members/1/36/DP_1112445638.jpg', 2, 350, 'data book', 'Sal institute', 5, 'MCA', '215061', 'Anjali Vasita', 4, '200', '../Members/1/36/Preview_1112445639.png', '2021-04-05 15:57:48', 1, '2021-04-05 15:57:48', 1, b'1'),
(37, 1, 7, NULL, NULL, '2021-04-05 11:05:36', 'History', 2, '../Members/1/37/DP_1112445810.jpg', 1, 350, 'history book', 'University of California', 8, 'MBA', '213050', 'Amita patel', 5, '100', '../Members/1/37/Preview_1112445811.png', '2021-04-05 16:00:12', 1, '2021-04-05 16:00:12', 1, b'1'),
(38, 1, 8, NULL, NULL, '2021-04-04 11:05:20', 'science', 3, '../Members/1/38/DP_1112445943.jpg', 2, 450, 'notes desc', 'University of Australia', 1, 'Computer Engineering', '240520', 'Alex ', 4, '200', '../Members/1/38/Preview_1112445943.png', '2021-04-05 16:02:33', 1, '2021-04-05 16:02:33', 1, b'1'),
(39, 1, 7, NULL, NULL, '2021-04-05 11:05:32', 'History', 1, '../Members/1/39/DP_1112446124.jpg', 2, 300, 'history book', 'University of Canada', 3, 'MCA', '215061', 'Aymana shah', 4, '500', '../Members/1/39/Preview_1112446124.png', '2021-04-05 16:05:27', 1, '2021-04-05 16:05:27', 1, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `notesattachment`
--

CREATE TABLE `notesattachment` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Note_ID` int(10) UNSIGNED NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Path` varchar(255) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notesattachment`
--

INSERT INTO `notesattachment` (`ID`, `Note_ID`, `File_Name`, `Path`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(5, 12, '5_1112328320pdf', '../Members/1/12/Attachements/5_1112328320.pdf', '2021-04-02 12:55:50', 1, NULL, NULL, b'1'),
(6, 13, '6_1112332431pdf', '../Members/1/13/Attachements/6_1112332431.pdf', '2021-04-02 14:04:21', 1, NULL, NULL, b'1'),
(7, 15, '7_1112351234pdf', '../Members/1/15/Attachements/7_1112351234.pdf', '2021-04-02 19:17:53', 1, NULL, NULL, b'1'),
(8, 16, '8_1112351421pdf', '../Members/1/16/Attachements/8_1112351421.pdf', '2021-04-02 19:20:51', 1, NULL, NULL, b'1'),
(9, 17, '9_1112351611pdf', '../Members/1/17/Attachements/9_1112351611.pdf', '2021-04-02 19:23:33', 1, NULL, NULL, b'1'),
(10, 18, '10_1112351754pdf', '../Members/1/18/Attachements/10_1112351754.pdf', '2021-04-02 19:26:34', 1, NULL, NULL, b'1'),
(11, 19, '11_1112351916pdf', '../Members/1/19/Attachements/11_1112351916.pdf', '2021-04-02 19:28:37', 1, NULL, NULL, b'1'),
(12, 20, '12_1112352039pdf', '../Members/1/20/Attachements/12_1112352039.pdf', '2021-04-02 19:31:09', 1, NULL, NULL, b'1'),
(13, 21, '13_1112352314pdf', '../Members/1/21/Attachements/13_1112352314.pdf', '2021-04-02 19:35:11', 1, NULL, NULL, b'1'),
(14, 24, '14_1112352817pdf', '../Members/1/24/Attachements/14_1112352817.pdf', '2021-04-02 19:43:47', 1, NULL, NULL, b'1'),
(16, 27, '16_1112443864pdf', '../Members/1/27/Attachements/16_1112443864.pdf', '2021-04-03 15:28:17', 1, NULL, NULL, b'1'),
(17, 28, '17_1112444032pdf', '../Members/1/28/Attachements/17_1112444032.pdf', '2021-04-03 15:31:02', 1, NULL, NULL, b'1'),
(18, 29, '18_1112444145pdf', '../Members/1/29/Attachements/18_1112444145.pdf', '2021-04-03 15:32:55', 1, NULL, NULL, b'1'),
(19, 29, '18_1112444145pdf', '../Members/1/29/Attachements//19_161744063.pdf', '2021-04-02 15:45:07', 1, NULL, NULL, b'1'),
(20, 34, '20_1112445414pdf', '../Members/1/34/Attachements/20_1112445414.pdf', '2021-04-03 15:53:43', 1, NULL, NULL, b'1'),
(21, 35, '21_1112445535pdf', '../Members/1/35/Attachements/21_1112445535.pdf', '2021-04-03 15:55:39', 1, NULL, NULL, b'1'),
(22, 36, '22_1112445639pdf', '../Members/1/36/Attachements/22_1112445639.pdf', '2021-04-03 15:57:49', 1, NULL, NULL, b'1'),
(23, 37, '23_1112445811pdf', '../Members/1/37/Attachements/23_1112445811.pdf', '2021-04-03 16:00:13', 1, NULL, NULL, b'1'),
(24, 38, '24_1112445944pdf', '../Members/1/38/Attachements/24_1112445944.pdf', '2021-04-03 16:02:33', 1, NULL, NULL, b'1'),
(25, 39, '25_1112446124pdf', '../Members/1/39/Attachements/25_1112446124.pdf', '2021-04-03 16:05:27', 1, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `referencedata`
--

CREATE TABLE `referencedata` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Value` varchar(100) NOT NULL,
  `DataValue` varchar(100) NOT NULL,
  `RefCategory` varchar(100) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referencedata`
--

INSERT INTO `referencedata` (`ID`, `Value`, `DataValue`, `RefCategory`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'Male', 'M', 'Gender', '2021-03-28 19:40:30', 3, '2021-03-28 19:40:30', 3, b'1'),
(2, 'Female', 'Fe', 'Gender', '2021-03-28 19:40:30', 3, '2021-03-28 19:40:30', 3, b'1'),
(3, 'Unknown', 'U', 'Gender', '2021-03-28 19:41:07', 3, '2021-03-28 19:41:07', 3, b'0'),
(4, 'Paid', 'P', 'Selling Mode', '2021-03-28 19:41:07', 3, '2021-03-28 19:41:07', 3, b'1'),
(5, 'Free', 'F', 'Selling Modes', '2021-03-28 19:42:22', 3, '2021-03-28 19:42:22', 3, b'1'),
(6, 'Draft', 'Draft', 'Notes Status', '2021-03-28 19:42:25', 3, '2021-03-28 19:42:25', 3, b'1'),
(7, 'Submitted for Review', 'Submitted for Review', 'Notes Status', '2021-03-28 19:43:30', 3, '2021-03-28 19:44:30', 3, b'1'),
(8, 'In Review', 'In Review', 'Notes Stauts', '2021-03-28 19:44:32', 3, '2021-03-28 19:44:32', 3, b'1'),
(9, 'Published', 'Approved', 'Notes Status', '2021-03-28 19:49:09', 3, '2021-03-28 11:49:09', 3, b'1'),
(10, 'Rejected', 'Rejected', 'Notes Status', '2021-03-28 19:50:56', 3, '2021-03-28 19:50:56', 3, b'1'),
(11, 'Removed', 'Removed', 'Notes Status', '2021-03-28 19:56:32', 3, '2021-03-28 19:56:32', 3, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NoteID` int(10) UNSIGNED NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL,
  `againstDownloadID` int(10) UNSIGNED NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review_rating`
--

CREATE TABLE `review_rating` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NoteID` int(10) UNSIGNED NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL,
  `againstdownloadID` int(10) UNSIGNED NOT NULL,
  `ratings` decimal(10,0) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_configuration`
--

CREATE TABLE `system_configuration` (
  `ID` int(10) UNSIGNED NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL,
  `Key_info` varchar(100) NOT NULL,
  `Value` varchar(255) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Type_Name` varchar(34) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`ID`, `Type_Name`, `Description`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'FREE', 'Free notes', '2021-03-26 16:22:47', NULL, NULL, NULL, b'1'),
(2, 'PAID', 'paid notes', '2021-03-25 20:14:32', NULL, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE `userroles` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(10) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`ID`, `Name`, `Description`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'notes-member', 'members', '2021-03-24 19:26:13', NULL, NULL, NULL, b'0000000000'),
(2, 'note-admin', 'admin', '2021-03-24 11:26:32', NULL, NULL, NULL, b'0000000000'),
(3, 'notes-superadmin', 'superadmin', '2021-03-24 11:28:56', NULL, NULL, NULL, b'0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL,
  `RoleID` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `Password` varchar(24) NOT NULL,
  `IsEmailVerified` bit(10) NOT NULL DEFAULT b'0',
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `IsActive` bit(10) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `RoleID`, `FirstName`, `LastName`, `EmailID`, `Password`, `IsEmailVerified`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `IsActive`) VALUES
(1, 1, 'Hani', 'Patel', 'hanipatel89@gmail.com', 'Hanip89', b'0000000001', '2021-03-27 11:36:45', NULL, NULL, b'0000000001'),
(2, 2, 'Hani', 'Vidhrani', 'hanividhrani265@gmail.com', 'Hani265', b'0000000001', '2021-03-17 20:44:53', NULL, NULL, b'0000000001'),
(3, 1, 'Harsh', 'Vidhrani', 'harshvidhrani@gmail.com', 'Harsh11', b'0000000001', '2021-04-03 16:32:38', NULL, NULL, b'0000000001');

-- --------------------------------------------------------

--
-- Table structure for table `users-details`
--

CREATE TABLE `users-details` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Role_Id` int(11) UNSIGNED NOT NULL,
  `Note_Id` int(11) UNSIGNED NOT NULL,
  `User_Type` varchar(16) NOT NULL,
  `Dob` datetime DEFAULT NULL,
  `Gender` int(10) UNSIGNED DEFAULT NULL,
  `Phone_No_Country_Code` int(10) UNSIGNED NOT NULL,
  `Phone_No` varchar(20) NOT NULL,
  `Profile_Pic` varchar(500) DEFAULT NULL,
  `Secondary_Email` varchar(100) DEFAULT NULL,
  `Address_1` varchar(100) NOT NULL,
  `Address_2` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zip_Code` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `University` varchar(100) DEFAULT NULL,
  `College` varchar(100) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `downloads_ibfk_1` (`NoteID`),
  ADD KEY `SellerID` (`SellerID`),
  ADD KEY `DownloaderID` (`DownloaderID`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SellerID` (`SellerID`),
  ADD KEY `Status` (`Status`),
  ADD KEY `Actioned_By` (`Actioned_By`),
  ADD KEY `Category` (`Category`),
  ADD KEY `Note_types` (`Note_types`),
  ADD KEY `Country` (`Country`),
  ADD KEY `Is_Paid` (`Is_Paid`);

--
-- Indexes for table `notesattachment`
--
ALTER TABLE `notesattachment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Note_ID` (`Note_ID`);

--
-- Indexes for table `referencedata`
--
ALTER TABLE `referencedata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `againstDownloadID` (`againstDownloadID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `NoteID` (`NoteID`);

--
-- Indexes for table `review_rating`
--
ALTER TABLE `review_rating`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `NoteID` (`NoteID`),
  ADD KEY `againstdownloadID` (`againstdownloadID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `system_configuration`
--
ALTER TABLE `system_configuration`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EmailID` (`EmailID`),
  ADD KEY `RoleID` (`RoleID`);

--
-- Indexes for table `users-details`
--
ALTER TABLE `users-details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Role_Id` (`Role_Id`),
  ADD KEY `Note_Id` (`Note_Id`),
  ADD KEY `Phone_No_Country_Code` (`Phone_No_Country_Code`),
  ADD KEY `Gender` (`Gender`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `notesattachment`
--
ALTER TABLE `notesattachment`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `referencedata`
--
ALTER TABLE `referencedata`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_rating`
--
ALTER TABLE `review_rating`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_configuration`
--
ALTER TABLE `system_configuration`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users-details`
--
ALTER TABLE `users-details`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `downloads_ibfk_1` FOREIGN KEY (`NoteID`) REFERENCES `notes` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `downloads_ibfk_2` FOREIGN KEY (`SellerID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `downloads_ibfk_3` FOREIGN KEY (`DownloaderID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`SellerID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`Status`) REFERENCES `referencedata` (`ID`),
  ADD CONSTRAINT `notes_ibfk_3` FOREIGN KEY (`Actioned_By`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `notes_ibfk_4` FOREIGN KEY (`Category`) REFERENCES `category` (`ID`),
  ADD CONSTRAINT `notes_ibfk_5` FOREIGN KEY (`Note_types`) REFERENCES `type` (`ID`),
  ADD CONSTRAINT `notes_ibfk_6` FOREIGN KEY (`Country`) REFERENCES `country` (`ID`),
  ADD CONSTRAINT `notes_ibfk_7` FOREIGN KEY (`Is_Paid`) REFERENCES `referencedata` (`ID`);

--
-- Constraints for table `notesattachment`
--
ALTER TABLE `notesattachment`
  ADD CONSTRAINT `notesattachment_ibfk_1` FOREIGN KEY (`Note_ID`) REFERENCES `notes` (`ID`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`againstDownloadID`) REFERENCES `downloads` (`ID`),
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `reports_ibfk_3` FOREIGN KEY (`NoteID`) REFERENCES `notes` (`ID`);

--
-- Constraints for table `review_rating`
--
ALTER TABLE `review_rating`
  ADD CONSTRAINT `review_rating_ibfk_1` FOREIGN KEY (`NoteID`) REFERENCES `notes` (`ID`),
  ADD CONSTRAINT `review_rating_ibfk_2` FOREIGN KEY (`againstdownloadID`) REFERENCES `downloads` (`ID`),
  ADD CONSTRAINT `review_rating_ibfk_3` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `system_configuration`
--
ALTER TABLE `system_configuration`
  ADD CONSTRAINT `system_configuration_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `userroles` (`ID`);

--
-- Constraints for table `users-details`
--
ALTER TABLE `users-details`
  ADD CONSTRAINT `users-details_ibfk_1` FOREIGN KEY (`Role_Id`) REFERENCES `userroles` (`ID`),
  ADD CONSTRAINT `users-details_ibfk_2` FOREIGN KEY (`Note_Id`) REFERENCES `notes` (`ID`),
  ADD CONSTRAINT `users-details_ibfk_3` FOREIGN KEY (`Phone_No_Country_Code`) REFERENCES `country` (`ID`),
  ADD CONSTRAINT `users-details_ibfk_4` FOREIGN KEY (`Gender`) REFERENCES `referencedata` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
