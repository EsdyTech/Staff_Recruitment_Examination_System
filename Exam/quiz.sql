-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2014 at 01:27 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--
CREATE DATABASE `quiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_master`
--

CREATE TABLE IF NOT EXISTS `faculty_master` (
  `Faculty_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Faculty_Name` varchar(100) NOT NULL,
  PRIMARY KEY (`Faculty_Id`),
  UNIQUE KEY `Faculty_Name` (`Faculty_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faculty_master`
--

INSERT INTO `faculty_master` (`Faculty_Id`, `Faculty_Name`) VALUES
(5, 'Engineering'),
(4, 'Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `question_master`
--

CREATE TABLE IF NOT EXISTS `question_master` (
  `Question_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Faculty` varchar(100) NOT NULL,
  `Question` varchar(2000) NOT NULL,
  `Option1` varchar(1000) NOT NULL,
  `Option2` varchar(1000) NOT NULL,
  `Option3` varchar(1000) NOT NULL,
  `Option4` varchar(1000) NOT NULL,
  `Answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`Question_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `question_master`
--

INSERT INTO `question_master` (`Question_Id`, `Faculty`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
(3, 'JSS1', 'What is Full Form of PHP?', 'Personal Home Page', 'Private Home Page', 'Public Home Page', 'Hypertext Preprocessor', 'D'),
(4, 'SSS1', 'GET is used to', 'Transfer Data Throgh Form', 'Transfer Data Throgh URL', 'Transfer Data Throgh Session', 'Transfer Data Throgh Cookie', 'B'),
(5, 'SSS1', 'Which Function is used to connect with MySQL?', 'mysql_con', 'mysql_connect', 'mysql_connection', 'sql_connect', 'B'),
(6, 'SSS1', 'what is my name', 'dami', 'ade', 'ola', 'bola', 'A'),
(7, 'JSS1', 'The characters used in formatting numbers depends on the locale of the operating system. What is the name for this? ', 'universal locale ', 'automatic locale ', 'default locale ', 'virtual locale ', 'C'),
(8, 'JSS2', 'What is the capital of Imo State  ', 'Owerri', 'Jos', 'Anambra', 'Lagos', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_category`
--

CREATE TABLE IF NOT EXISTS `quiz_category` (
  `Quiz_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Quiz_Name` varchar(20) NOT NULL,
  PRIMARY KEY (`Quiz_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `quiz_category`
--

INSERT INTO `quiz_category` (`Quiz_Id`, `Quiz_Name`) VALUES
(2, 'Mid Semester Exam'),
(3, 'Termwork Exam'),
(4, 'Final Sem Exam');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_schedule`
--

CREATE TABLE IF NOT EXISTS `quiz_schedule` (
  `Schedule_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Quiz_Id` int(11) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Subject_Id` int(11) NOT NULL,
  `QuizDate` date NOT NULL,
  `QuizTime` time NOT NULL,
  PRIMARY KEY (`Schedule_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `quiz_schedule`
--

INSERT INTO `quiz_schedule` (`Schedule_Id`, `Quiz_Id`, `Semester`, `Subject_Id`, `QuizDate`, `QuizTime`) VALUES
(1, 2, '1', 1, '2013-10-22', '09:00:00'),
(2, 4, '1', 2, '2013-10-23', '09:00:00'),
(3, 4, '2', 3, '2013-10-24', '09:00:00'),
(4, 2, '3', 4, '2013-10-25', '09:00:00'),
(5, 2, '4', 5, '2013-10-26', '09:00:00'),
(6, 2, '2', 2, '2014-09-03', '06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `result_master`
--

CREATE TABLE IF NOT EXISTS `result_master` (
  `Result_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Faculty` varchar(100) NOT NULL,
  `Student_Id` varchar(15) NOT NULL,
  `Total` int(11) NOT NULL,
  `Correct` int(11) NOT NULL,
  `Wrong` int(11) NOT NULL,
  `per` varchar(7) NOT NULL,
  PRIMARY KEY (`Result_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `result_master`
--

INSERT INTO `result_master` (`Result_Id`, `Faculty`, `Student_Id`, `Total`, `Correct`, `Wrong`, `per`) VALUES
(2, 'SSS1', '66553347RE', 3, 3, 0, '100'),
(3, 'JSS1', '457688er55', 2, 2, 0, '100');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE IF NOT EXISTS `student_registration` (
  `Student_Id` int(11) NOT NULL AUTO_INCREMENT,
  `RollNumber` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Student_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`Student_Id`, `RollNumber`, `Name`, `Faculty`, `Email`, `Mobile`, `UserName`, `Password`) VALUES
(3, 'MCA01001', 'Patel Jagruti', 'JSS1', 'jagruti@gmail.com', '9898989898', 'jagruti', 'jagruti'),
(4, 'MCA01002', 'Patel Monika', 'JSS1', 'monika@gmail.com', '7878787878', 'monika', 'monika'),
(5, '66553347RE', 'FATAI OMOTUNDE', 'SSS1', 'fatai@yahoo.co', '0809998778', 'fatai12', 'fatai12'),
(6, '457688er55', 'Dami Hassan', 'JSS1', 'dagg@yahoo.com', '0809997777', 'hassan45', 'hassan45');

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE IF NOT EXISTS `subject_master` (
  `Subject_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Subject_Name` varchar(30) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  PRIMARY KEY (`Subject_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subject_master`
--

INSERT INTO `subject_master` (`Subject_Id`, `Subject_Name`, `Semester`) VALUES
(2, 'PHP', '1'),
(3, 'JAVA', '2'),
(4, 'VB.NET', '3'),
(5, 'Android', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(20) NOT NULL,
  `User_Password` varchar(20) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`User_Id`, `User_Name`, `User_Password`) VALUES
(1, 'admin', 'admin'),
(2, 'hassan', 'hassan12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
