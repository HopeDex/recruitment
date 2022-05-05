-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2022 at 10:17 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `application_id` int(30) NOT NULL,
  `vacancy_title` varchar(50) NOT NULL,
  `vacancy_referrences` varchar(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  PRIMARY KEY (`application_id`),
  UNIQUE KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_id`, `vacancy_title`, `vacancy_referrences`, `student_id`) VALUES
(11, '5', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(300, 'IT-software'),
(301, 'Finance'),
(302, 'Adminstration'),
(303, 'Banking');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `region_id`) VALUES
(53, 'Blantyre', 25),
(54, 'Lilongwe ', 25),
(55, 'Mzuzu', 25);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
CREATE TABLE IF NOT EXISTS `division` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`division_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`division_id`, `division_name`, `district_id`) VALUES
(100, 'Itilima', 50),
(101, 'Kanadi', 50),
(102, 'Kinang\'weli', 50),
(103, 'Bumera', 50);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` char(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `group_category` varchar(50) NOT NULL,
  `group_leader` varchar(50) NOT NULL,
  `group_creation_date` date NOT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `registration_number` (`registration_number`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `region`, `registration_number`, `group_category`, `group_leader`, `group_creation_date`) VALUES
(6, 'Castel', '23', 'trust fund', 'Education and Traninng', 'Dr Mackfee', '2020-12-10'),
(7, 'Mwenye Rails', '30', 'Development', 'Engineer/architects', 'Dr Benjamin ', '2020-12-10'),
(8, 'Mwenye industries', '30', '2020GT17', 'Sales and marketing ', 'Mr mwenye', '2020-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

DROP TABLE IF EXISTS `interview`;
CREATE TABLE IF NOT EXISTS `interview` (
  `reference_number` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(30) NOT NULL,
  `employment_id` varchar(20) NOT NULL,
  PRIMARY KEY (`reference_number`),
  UNIQUE KEY `employment_id` (`employment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `employment-id` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  PRIMARY KEY (`employment-id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `join_date` date NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `first_name`, `last_name`, `gender`, `join_date`) VALUES
(1, 'Godfrey', 'Chiumia', 'm', '2020-12-12'),
(2, 'Ellen', 'Phiri', 'f', '2020-12-12'),
(3, 'Emmanuel', 'Nyamboee', 'm', '2020-12-12'),
(8, 'Vincent', 'Kandoje', 'm', '2020-12-12'),
(13, 'Godfrey', 'Circumstances', 'm', '2020-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choice`
--

DROP TABLE IF EXISTS `multiple_choice`;
CREATE TABLE IF NOT EXISTS `multiple_choice` (
  `question_id` int(20) NOT NULL AUTO_INCREMENT,
  `question_1` varchar(100) NOT NULL,
  `question_2` varchar(100) NOT NULL,
  `question_3` varchar(100) NOT NULL,
  `question_4` varchar(100) NOT NULL,
  `question_5` varchar(100) NOT NULL,
  `question_6` varchar(100) NOT NULL,
  `question_7` varchar(100) NOT NULL,
  `question_8` varchar(100) NOT NULL,
  `question_9` varchar(100) NOT NULL,
  `question_10` varchar(100) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

DROP TABLE IF EXISTS `organisation`;
CREATE TABLE IF NOT EXISTS `organisation` (
  `org_id` varchar(20) NOT NULL,
  `Organisation` varchar(255) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `City` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  PRIMARY KEY (`org_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`org_id`, `Organisation`, `Description`, `email`, `address`, `City`, `area`) VALUES
('', 'GIBIDI', ' Consider a real life example of encapsulation, in a company there are different sections like the accounts section, finance section, sales section etc. The finance section handles all the financial transactions and keep records of all the data related to finance. Similarly the sales section handles all the sales related activities and keep records of all the sales. Now there may arise a situation when for some reason an official from finance section needs all the data', 'gibidi@gmail.com', 'gidibi ave 1st street', 'Blantyre', 'Bangwe'),
('2345FERDSdawd24', 'BENGENDE', ' Consider a real life example of encapsulation, in a company there are different sections like the accounts section, finance section, sales section etc. The finance section handles all the financial transactions and keep records of all the data related to finance. Similarly the sales section handles all the sales related activities and keep records of all the sales. Now there may arise a situation when for some reason an official from finance section needs all the data', 'becau32253se@gmail.com', 'beacose ave 31st street', 'Blantyre', 'Bangwe'),
('2345VC', 'BENGENDE', ' Consider a real life example of encapsulation, in a company there are different sections like the accounts section, finance section, sales section etc. The finance section handles all the financial transactions and keep records of all the data related to finance. Similarly the sales section handles all the sales related activities and keep records of all the sales. Now there may arise a situation when for some reason an official from finance section needs all the data', 'because@gmail.com', 'beacose ave 31st street', 'Blantyre', 'Bangwe'),
('253253', 'wwwwfasdfasdcas', ' eeeeeeeeeeeConsider a real life example of encapsulation, in a company there are different sections like the accounts section, finance section, sales section etc. The finance section handles all the financial transactions and keep records of all the data related to finance. Similarly the sales section handles all the sales related activities and keep records of all the sales. Now there may arise a situation when for some reason an official from finance section needs all the data', 'rsebanda@gmail.com', 'ggggggggggg555555555555555', 'Blantyre', 'Limbe'),
('2532gasafase', 'wwwwsdvasdsdfasdcas', ' eeeeeeeeeeeConsider a real life example of encapsulation, in a company there are different sections like the accounts section, finance section, sales section etc. The finance section handles all the financial transactions and keep records of all the data related to finance. Similarly the sales section handles all the sales related activities and keep records of all the sales. Now there may arise a situation when for some reason an official from finance section needs all the data', '34343532awebanda@gmail.com', 'ggggggggggg555555555555555', 'Blantyre', 'Limbe'),
('2532gasafaserfes', 'wwwwsdvasdsdfasdcas', ' eeeeeeeeeeeConsider a real life example of encapsulation, in a company there are different sections like the accounts section, finance section, sales section etc. The finance section handles all the financial transactions and keep records of all the data related to finance. Similarly the sales section handles all the sales related activities and keep records of all the sales. Now there may arise a situation when for some reason an official from finance section needs all the data', '3898532awebanda@gmail.com', 'ggggggggggg555555555555555', 'Blantyre', 'Limbe'),
('9999', 'The Hunger project', ' focuses on providing local services and empowering women in local areas ', 'hungerproject@gmail.com', '1st street victoria venue,Blantyre', 'Blantyre', 'Limbe'),
('fsegasdzraser', 'sersrsrsr', ' Consider a real life example of encapsulation, in a company there are different sections like the accounts section, finance section, sales section etc. The finance section handles all the financial transactions and keep records of all the data related to finance. Similarly the sales section handles all the sales related activities and keep records of all the sales. Now there may arise a situation when for some reason an official from finance section needs all the data', 'adsegawegawemin@gmail.com', 'garegawegawegwega3we4gaweg', 'Lilongwe', 'Bangwe'),
('qwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwww', ' eeeeeeeeeeeConsider a real life example of encapsulation, in a company there are different sections like the accounts section, finance section, sales section etc. The finance section handles all the financial transactions and keep records of all the data related to finance. Similarly the sales section handles all the sales related activities and keep records of all the sales. Now there may arise a situation when for some reason an official from finance section needs all the data', 'williamffffffffffffffbanda@gmail.com', 'ggggggggggg555555555555555', 'Blantyre', 'Limbe');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(255) NOT NULL,
  PRIMARY KEY (`region_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`) VALUES
(23, 'Central Region '),
(30, 'Southern Region '),
(31, 'Northern Region ');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `exam_id` varchar(100) NOT NULL,
  `total_score` int(100) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `structured`
--

DROP TABLE IF EXISTS `structured`;
CREATE TABLE IF NOT EXISTS `structured` (
  `question_id` int(10) NOT NULL AUTO_INCREMENT,
  `question_1` varchar(100) NOT NULL,
  `question_2` varchar(100) NOT NULL,
  `question_3` varchar(100) NOT NULL,
  `question_4` varchar(100) NOT NULL,
  `question_5` varchar(100) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `f_name`, `l_name`, `gender`, `dob`, `email`, `password`) VALUES
('bict0417', 'chiumia', 'Godfrey ', 'Male', '1998-05-28', 'chiumiagodfrey2@gmail.com ', 'Brego123'),
('Blis1217', 'Jason', 'Kandoje', 'Male', '1999-09-30', 'vinjasonkandoje@gmail.com', 'Jason777'),
('king0617', 'kingKlong', 'king', 'male', '2021-01-20', 'king@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `address`, `city`, `dob`, `gender`, `organization`, `role`, `password`) VALUES
(1, 'dfasegsewer', '43afsfas', 'ASW245ff@gmail.com', '', 'Balaka', '2020-12-15', 'female', 'grace Bandawe', 'hr', 'defaulthr123'),
(2, 'Chicco', 'Kandoje', 'chiccokandoje7@gmail.com', 'streat 4 area49', 'Blantyre', '2016-07-01', 'Male', 'Bungwe', 'hr', 'chicco07'),
(3, 'Juice', 'wefewfwef', 'chiumiagodfrey252@gmail.com', 'streat 4 area49 derby ', 'wefqwef', '1998-05-12', 'Male', 'Mzuzu University', 'applicant', 'xxxxxxxx'),
(4, 'Jane', 'chiumia', 'janechang22@yahoo.com', 'Blantyre,chilomoni,Mthukwa3', 'Blantyre', '2000-07-18', 'Female', 'The Polytechnic ', 'applicant', 'janechang'),
(5, 'kingKlong', 'king', 'king@gmail.com', 'mzuzu', 'mzuz', '2021-01-06', 'unisex', 'mzuzu', 'applicant', '1234567890'),
(6, 'Jason', 'Kandoje', 'vinjasonkandoje@gmail.com', 'Blantyre', 'Manja', '2021-01-06', 'Male', 'Hunger Project', 'applicant', 'Jason7'),
(7, 'william', 'banda', 'williambanda@gmail.com', 'area 23 masambabise', 'Liwonde', '2018-03-06', 'Male', 'Bandawe', 'administrator', 'machine'),
(8, 'Vincent', 'Sithandane', 'sithanane19@gmail.com', 'Manja', 'Blantyre', '2021-03-08', 'Female', 'Domasi College', 'applicant', 'Queencess'),
(9, 'dfghjfg', 'sdfghj', 'fgbb@gmail.com', 'dfgh', 'Blantyre', '2021-03-09', 'Male', 'Magu', 'applicant', 'sdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

DROP TABLE IF EXISTS `vacancy`;
CREATE TABLE IF NOT EXISTS `vacancy` (
  `Refference` varchar(20) NOT NULL,
  `Companyname` varchar(30) NOT NULL,
  `category` varchar(255) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `experience` int(255) NOT NULL,
  `Pay` varchar(20) NOT NULL,
  `Positions` int(100) NOT NULL,
  `Expiration` date NOT NULL,
  `Addition` varchar(1000) NOT NULL,
  `hr` varchar(255) NOT NULL,
  `Status` int(255) NOT NULL,
  PRIMARY KEY (`Refference`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`Refference`, `Companyname`, `category`, `Title`, `Description`, `Location`, `experience`, `Pay`, `Positions`, `Expiration`, `Addition`, `hr`, `Status`) VALUES
('BBCQAR2548/54', '', 'IT-software', 'Programming lecturer at Mzuzu University', 'There is one more operator called conditional operator. This first evaluates an expression for a\r\ntrue or false value and then execute one of the two given statements depending upon the result\r\nof the evaluation. The conditional operator has this syntax:', 'Mzuzu', 2, 'H', 9, '2021-01-08', 'There is one more operator called conditional operator. This first evaluates an expression for a true or false value and then execute one of the two given statements depending upon the result of the evaluation. The conditional operator has this syntax:', '', 0),
('Dnrc012', '', 'Finance', 'DEPUTY DIRECTOR FOR NATURAL RESOURCES COLLEGE ', 'The Lilongwe University of Agriculture and Natural Resources (LUANAR) is inviting applications from suitably qualified, experienced and distinguished academic/research/administrative professionals to be considered for the position of Deputy Director tenable at Natural Resources College', 'Lilongwe', 5, 'H', 1, '2021-02-05', '', '', 0),
('GDE/25/25/854', '', 'Administration', 'Program Coordinator for ESCOM', 'There are five magical constants that change depending on where they are used. For example,\r\nthe value of LINE depends on the line that it\'s used on in your script. These special\r\nconstants are case-insensitive and are as follows:', 'Lilongwe', 3, 'D', 2, '2021-02-25', 'There is no need to write a dollar sign ($) before a constant, where as in Variable one has to write a dollar sign', '', 0),
('Jppt6360', '', 'Administration', 'CHIEF EXECUTIVE OFFICER (GRADE LWB 1)', 'In order to fulfill its mandate effectively and efficiently the LWB invites suitably qualified and experienced dynamic individuals to fill the challenging position of CHIEF EXECUTIVE OFFICER (GRADE LWB 1)on a three-year contract, renewable, based on satisfactory performance', 'LILONGWE', 5, 'H', 1, '2021-01-22', 'Only shortlisted applicants will be acknowledged. Lilongwe Water Board is an equal opportunity employer', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vacancyproposal`
--

DROP TABLE IF EXISTS `vacancyproposal`;
CREATE TABLE IF NOT EXISTS `vacancyproposal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `Refference` varchar(255) NOT NULL,
  `applicant` int(255) NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancyproposal`
--

INSERT INTO `vacancyproposal` (`id`, `file_name`, `Refference`, `applicant`, `Status`) VALUES
(1, 'solution of distributed system_2.pdf', '', 1, 'Shortlisted'),
(2, 'OOAD1 test 2.pdf', 'BBC32544', 1, ''),
(3, 'MALAWI_-_Support_to_higher_education_science_and_technology__HEST__project_.pdf', 'Dnrc012', 1, ''),
(4, 'solution of distributed system_2.pdf', 'BBC32544', 1, ''),
(5, 'solution of distributed system_2.pdf', 'BBC32544', 1, ''),
(6, 'solution of distributed system_2.pdf', 'BBC32544', 1, ''),
(7, 'OOAD1 test 2.pdf', 'BBC32544', 1, 'Shortlisted'),
(8, 'OOAD1 test 2.pdf', 'GDE/25/25/854', 1, ''),
(9, 'solution.pdf', 'BBCQAR2548/54', 4, NULL),
(10, 'solution of distributed system_2.pdf', 'BBCQAR2548/54', 4, NULL),
(11, 'solution of distributed system_2.pdf', 'BBCQAR2548/54', 4, NULL),
(12, 'successful project.docx', 'BBCQAR2548/54', 4, NULL),
(13, 'OOAD1 test 2.pdf', 'GDE/25/25/854', 4, NULL),
(14, 'OOAD1 test 2.pdf', 'BBCQAR2548/54', 4, NULL),
(15, 'solution of distributed system_2.pdf', 'BBCQAR2548/54', 4, NULL),
(16, 'Python.pdf', 'BBCQAR2548/54', 4, NULL),
(17, 'New Microsoft PowerPoint Presentation (2).pptx', 'GDE/25/25/854', 8, NULL),
(18, 'check.docx', 'Jppt6360', 8, NULL),
(19, 'problem statement.docx', 'Jppt6360', 8, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
