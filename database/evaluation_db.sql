-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2022 at 12:07 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_list`
--

DROP TABLE IF EXISTS `academic_list`;
CREATE TABLE IF NOT EXISTS `academic_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `year` text NOT NULL,
  `semester` int NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0' COMMENT '0=Pending,1=Start,2=Closed',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_list`
--

INSERT INTO `academic_list` (`id`, `year`, `semester`, `is_default`, `status`) VALUES
(3, '2021-2022', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE IF NOT EXISTS `announcements` (
  `announcement_id` int NOT NULL AUTO_INCREMENT,
  `announcement_img` varchar(500) NOT NULL,
  `announcement_text` varchar(1000) NOT NULL,
  `announcement_venue` text NOT NULL,
  `announcement_date` varchar(20) NOT NULL,
  `to_date` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `date_announced` varchar(100) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`announcement_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcement_id`, `announcement_img`, `announcement_text`, `announcement_venue`, `announcement_date`, `to_date`, `description`, `date_announced`, `profile_pic`) VALUES
(51, 'Philippines-Independence--640x514.jpg', 'Event: Independence Day', 'Venue: None', '2022-06-12', '2022-06-12', 'What is the real Independence Day of the Philippines?\r\nFrom history.com, THIS DAY IN HISTORY: 1898 June 12, Philippine independence declared: “During the Spanish-American War, Filipino rebels led by Emilio Aguinaldo proclaim the independence of the Philippines after 300 years of Spanish rule.', '15-09-22 04:28:00 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

DROP TABLE IF EXISTS `class_list`;
CREATE TABLE IF NOT EXISTS `class_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `curriculum` text NOT NULL,
  `level` text NOT NULL,
  `section` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_list`
--

INSERT INTO `class_list` (`id`, `curriculum`, `level`, `section`) VALUES
(1, 'BSED', '1', 'A'),
(2, 'BSIT', '1', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_list`
--

DROP TABLE IF EXISTS `criteria_list`;
CREATE TABLE IF NOT EXISTS `criteria_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `criteria` text NOT NULL,
  `order_by` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `criteria_list`
--

INSERT INTO `criteria_list` (`id`, `criteria`, `order_by`) VALUES
(1, 'Teaching Style', 0),
(4, 'Faculty Performance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_answers`
--

DROP TABLE IF EXISTS `evaluation_answers`;
CREATE TABLE IF NOT EXISTS `evaluation_answers` (
  `evaluation_id` int NOT NULL,
  `question_id` int NOT NULL,
  `rate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluation_answers`
--

INSERT INTO `evaluation_answers` (`evaluation_id`, `question_id`, `rate`) VALUES
(1, 1, 5),
(1, 6, 4),
(1, 3, 5),
(2, 1, 5),
(2, 6, 5),
(2, 3, 4),
(3, 1, 5),
(3, 6, 5),
(3, 3, 4),
(4, 1, 2),
(4, 6, 3),
(5, 1, 4),
(5, 6, 4),
(6, 1, 4),
(6, 6, 4),
(7, 1, 2),
(7, 6, 2),
(8, 1, 4),
(8, 6, 2),
(9, 1, 4),
(9, 6, 4),
(9, 8, 4),
(10, 1, 4),
(10, 6, 4),
(10, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_list`
--

DROP TABLE IF EXISTS `evaluation_list`;
CREATE TABLE IF NOT EXISTS `evaluation_list` (
  `evaluation_id` int NOT NULL AUTO_INCREMENT,
  `academic_id` int NOT NULL,
  `class_id` int NOT NULL,
  `student_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `faculty_id` int NOT NULL,
  `restriction_id` int NOT NULL,
  `date_taken` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`evaluation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluation_list`
--

INSERT INTO `evaluation_list` (`evaluation_id`, `academic_id`, `class_id`, `student_id`, `subject_id`, `faculty_id`, `restriction_id`, `date_taken`) VALUES
(1, 3, 1, 1, 1, 1, 8, '2020-12-15 16:26:51'),
(2, 3, 2, 2, 2, 1, 9, '2020-12-15 16:33:37'),
(3, 3, 1, 3, 1, 1, 8, '2020-12-15 20:18:49'),
(4, 3, 2, 4, 2, 2, 14, '2022-09-12 13:59:29'),
(5, 3, 2, 7, 2, 2, 15, '2022-09-14 12:30:32'),
(6, 3, 2, 7, 2, 4, 17, '2022-09-14 15:00:27'),
(7, 3, 2, 5, 2, 4, 17, '2022-09-14 15:02:13'),
(8, 3, 2, 8, 2, 4, 17, '2022-09-14 15:06:00'),
(9, 3, 2, 7, 2, 2, 20, '2022-09-23 19:16:40'),
(10, 3, 2, 7, 2, 2, 21, '2022-09-23 19:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_list`
--

DROP TABLE IF EXISTS `faculty_list`;
CREATE TABLE IF NOT EXISTS `faculty_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_id` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_list`
--

INSERT INTO `faculty_list` (`id`, `school_id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(2, '12345', 'Mark Lester', 'Rabi', 'markstrike006@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1662959700_1662516975Untitled.jpg', '2022-09-12 13:15:01'),
(4, '94578', 'Carl', 'Magsino', 'carl@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1663130805Untitled.jpg', '2022-09-14 12:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `question_list`
--

DROP TABLE IF EXISTS `question_list`;
CREATE TABLE IF NOT EXISTS `question_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `academic_id` int NOT NULL,
  `question` text NOT NULL,
  `order_by` int NOT NULL,
  `criteria_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question_list`
--

INSERT INTO `question_list` (`id`, `academic_id`, `question`, `order_by`, `criteria_id`) VALUES
(1, 3, '1. Do you provide learners with opportunities to speak and write using their own unique and genuine voices?', 0, 1),
(3, 3, 'Test', 2, 2),
(5, 0, 'Question 101', 0, 1),
(6, 3, '2. Do you help learners create focus, energy, passion around the oral and written communication they want to make?', 1, 1),
(7, 3, '1. Do you provide learners with opportunities to speak and write using their own unique and genuine voices?', 3, 0),
(8, 3, '3. Does the teacher give his/her best performance?', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `restriction_list`
--

DROP TABLE IF EXISTS `restriction_list`;
CREATE TABLE IF NOT EXISTS `restriction_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `academic_id` int NOT NULL,
  `faculty_id` int NOT NULL,
  `class_id` int NOT NULL,
  `subject_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restriction_list`
--

INSERT INTO `restriction_list` (`id`, `academic_id`, `faculty_id`, `class_id`, `subject_id`) VALUES
(11, 1, 2, 2, 1),
(21, 3, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `school_profile`
--

DROP TABLE IF EXISTS `school_profile`;
CREATE TABLE IF NOT EXISTS `school_profile` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_profile`
--

INSERT INTO `school_profile` (`ID`, `Title`, `Description`) VALUES
(1, 'Profile', 'In 2004, the school was renamed into a college and opened its elementary and high school departments. Three years later, the college department opened with course offerings in Teacher Education, Business Administration, Information Technology, and Information Systems. St. Cecilia\'s College is currently a Lasallian School Supervision Office (LASSO) Consultancy School.\r\n\r\nAt present, the St. Cecilia\'s College offers complete programs from the preschool to the college level, including Special Education (SPED). It has a Senior High School (SHS) department with available strands from the Academic and the Technical-Vocational-Livelihood (TVL) tracks. Its college department, on the other hand, provides undergraduate programs in Hospitality and Tourism Management, Business Administration, Teacher Education, Criminology, and Information Technology. Also available is an associate program in Computer Technology.');

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

DROP TABLE IF EXISTS `student_list`;
CREATE TABLE IF NOT EXISTS `student_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_id` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `class_id` int NOT NULL,
  `avatar` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `school_id`, `firstname`, `lastname`, `email`, `password`, `class_id`, `avatar`, `date_created`) VALUES
(5, '5678', 'Justine', 'Rayala', 'justine006@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, '', '2022-09-13 18:49:42'),
(7, '12345', 'Jhun Mark', 'Reyes', 'jhun@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, '1663126584WIN_20220825_19_33_38_Pro.jpg', '2022-09-14 11:36:24'),
(8, '4553534', 'Shane Khloui', 'Seraspe', 'shane@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, '1663139100_WIN_20220830_03_04_39_Pro.jpg', '2022-09-14 15:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

DROP TABLE IF EXISTS `subject_list`;
CREATE TABLE IF NOT EXISTS `subject_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`id`, `code`, `subject`, `description`) VALUES
(2, 'ENG-101', 'English', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

DROP TABLE IF EXISTS `system_settings`;
CREATE TABLE IF NOT EXISTS `system_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'SCC - Online Faculty Evaluation System', 'admin@gmail.com', '+6948 8542 623', 'St. Cecilia\'s College - Cebu, INC.\r\nDe La Salle Supervised School\r\nMinglanilla, Cebu', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1607135820_avatar.jpg',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(1, 'Administrator', '', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1607135820_avatar.jpg', '2020-11-26 10:57:04'),
(4, 'Mark Lester', 'Rabi', 'markie@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1607135820_avatar.jpg', '2022-09-13 15:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `vm`
--

DROP TABLE IF EXISTS `vm`;
CREATE TABLE IF NOT EXISTS `vm` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `School` varchar(255) NOT NULL,
  `Vision` text NOT NULL,
  `Mission` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vm`
--

INSERT INTO `vm` (`ID`, `School`, `Vision`, `Mission`) VALUES
(15, 'SCC', 'SCC is a non-stock, non-profit educational institution that envisions itself to be a Center of excellence in Academics, Technology, and the Arts. It aspires to produce professionals and leaders who are globally competitive, imbued with Christian values, integrity, patriotism and stewardship, through quality human education.', 'SCC, following the ideals of St. Cecilia, commits itself to:\r\n\r\n1.   Cutivate and inculcate Christian values to its pupils/students to become men and women of faith and integrity;\r\n2.   Provide the students with knowledge and skills in academic, technology and the arts through the use of modern teaching methods and techniques;\r\n3.   Foster the development of love for country and service to fellowmen;\r\n4.   Upgrade the teachers\' skills and competencies in classroom instruction and management through Faculty Development Program;\r\n5.   Develop the critical thinking skills of students;\r\n6.   Provide opportunities to students;\r\n7.   Inculcate in the students the love, care and preservation of Mother nature.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
