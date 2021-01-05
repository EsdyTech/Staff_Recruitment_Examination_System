-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 08:51 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `Id` int(10) NOT NULL,
  `studentId` varchar(50) NOT NULL,
  `resume` text NOT NULL,
  `coverLetter` text NOT NULL,
  `waec` text NOT NULL,
  `nysc` text NOT NULL,
  `others` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`Id`, `studentId`, `resume`, `coverLetter`, `waec`, `nysc`, `others`) VALUES
(6, 'MCA01001', '576.pdf', 'BayoOriginalCV(Justrite).pdf', 'BayoOriginalCV1.pdf.docx', 'Finance_discount_documentation.docx', 'Cooperatives API Endpoints (3).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_master`
--

CREATE TABLE `faculty_master` (
  `Faculty_Id` int(11) NOT NULL,
  `Faculty_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_master`
--

INSERT INTO `faculty_master` (`Faculty_Id`, `Faculty_Name`) VALUES
(5, 'Engineering'),
(4, 'Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `Id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`Id`, `Name`) VALUES
(1, 'Lecturer'),
(2, 'Secretary'),
(4, 'clerk');

-- --------------------------------------------------------

--
-- Table structure for table `question_master`
--

CREATE TABLE `question_master` (
  `Question_Id` int(11) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Question` varchar(2000) NOT NULL,
  `Option1` varchar(1000) NOT NULL,
  `Option2` varchar(1000) NOT NULL,
  `Option3` varchar(1000) NOT NULL,
  `Option4` varchar(1000) NOT NULL,
  `Answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_master`
--

INSERT INTO `question_master` (`Question_Id`, `Faculty`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
(4, 'SSS1', 'GET is used to', 'Transfer Data Throgh Form', 'Transfer Data Throgh URL', 'Transfer Data Throgh Session', 'Transfer Data Throgh Cookie', 'B'),
(7, 'JSS1', 'The characters used in formatting numbers depends on the locale of the operating system. What is the name for this? ', 'universal locale ', 'automatic locale ', 'default locale ', 'virtual locale ', 'C'),
(8, 'Lecturer', 'What is OPAY business Objective', 'Satisfying Customers need', 'nothing', 'all of the Above', 'getting things done', 'A'),
(9, 'Lecturer', 'What is the name of the managing director?', 'Samuel', 'Ade', 'Kemi', 'Funsho', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_category`
--

CREATE TABLE `quiz_category` (
  `Quiz_Id` int(11) NOT NULL,
  `Quiz_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `quiz_schedule` (
  `Schedule_Id` int(11) NOT NULL,
  `Quiz_Id` int(11) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Subject_Id` int(11) NOT NULL,
  `QuizDate` date NOT NULL,
  `QuizTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `result_master` (
  `Result_Id` int(11) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Student_Id` varchar(15) NOT NULL,
  `Total` int(11) NOT NULL,
  `Correct` int(11) NOT NULL,
  `Wrong` int(11) NOT NULL,
  `per` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_master`
--

INSERT INTO `result_master` (`Result_Id`, `Faculty`, `Student_Id`, `Total`, `Correct`, `Wrong`, `per`) VALUES
(2, 'SSS1', '3', 3, 3, 0, '100'),
(3, 'JSS1', '457688er55', 2, 2, 0, '100'),
(7, 'JSS1', 'MCA01001', 2, 0, 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `staffregno`
--

CREATE TABLE `staffregno` (
  `Id` int(10) NOT NULL,
  `staffRegNo` varchar(50) NOT NULL,
  `lastStaffRegNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffregno`
--

INSERT INTO `staffregno` (`Id`, `staffRegNo`, `lastStaffRegNo`) VALUES
(1, '100000', '100008');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `Student_Id` int(11) NOT NULL,
  `RollNumber` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `passport` text NOT NULL,
  `resume` text NOT NULL,
  `dateReg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`Student_Id`, `RollNumber`, `Name`, `Faculty`, `Email`, `Mobile`, `UserName`, `Password`, `passport`, `resume`, `dateReg`) VALUES
(3, 'MCA01001', 'Patel Jagruti', 'JSS1', 'jagruti@gmail.com', '0905656565', 'aaa', 'aaa', '0430112249groom.jpg', '', '0000-00-00'),
(4, 'MCA01002', 'Patel Monika', 'JSS1', 'monika@gmail.com', '7878787878', 'monika', 'monika', '', '', '0000-00-00'),
(22, '100004', 'vdsdvs', 'Lecturer', 'dsfsdf', 'sdfs', 'sdfs', 'sdfsd', '', '', '2019-06-30'),
(23, '100005', 'gsfg', 'Lecturer', 'fafa', 'ada', 'adfa', '12345', '', '', '2019-06-30'),
(24, '100006', 'fdsfs', 'Lecturer', 'sfsd', 'sdfsd', 'asaa', '12345', 'noimage.jpg', '', '2019-06-30'),
(25, '100007', 'samuel', 'Lecturer', 'samuelsam@gmail.com', '0901212334', 'samuel', '12345', 'noimage.jpg', '', '2019-07-08'),
(26, '100008', 'Kayode', 'Secretary', 'Kayode123@gmail.com', '0908787996', 'Kayode', '12345', 'noimage.jpg', '', '2019-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `Subject_Id` int(11) NOT NULL,
  `Subject_Name` varchar(30) NOT NULL,
  `Semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `user_master` (
  `User_Id` int(11) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `User_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`User_Id`, `User_Name`, `User_Password`) VALUES
(1, 'admin', 'admin'),
(2, 'hassan', 'hassan12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty_master`
--
ALTER TABLE `faculty_master`
  ADD PRIMARY KEY (`Faculty_Id`),
  ADD UNIQUE KEY `Faculty_Name` (`Faculty_Name`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `question_master`
--
ALTER TABLE `question_master`
  ADD PRIMARY KEY (`Question_Id`);

--
-- Indexes for table `quiz_category`
--
ALTER TABLE `quiz_category`
  ADD PRIMARY KEY (`Quiz_Id`);

--
-- Indexes for table `quiz_schedule`
--
ALTER TABLE `quiz_schedule`
  ADD PRIMARY KEY (`Schedule_Id`);

--
-- Indexes for table `result_master`
--
ALTER TABLE `result_master`
  ADD PRIMARY KEY (`Result_Id`);

--
-- Indexes for table `staffregno`
--
ALTER TABLE `staffregno`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD PRIMARY KEY (`Subject_Id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faculty_master`
--
ALTER TABLE `faculty_master`
  MODIFY `Faculty_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `question_master`
--
ALTER TABLE `question_master`
  MODIFY `Question_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `quiz_category`
--
ALTER TABLE `quiz_category`
  MODIFY `Quiz_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `quiz_schedule`
--
ALTER TABLE `quiz_schedule`
  MODIFY `Schedule_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `result_master`
--
ALTER TABLE `result_master`
  MODIFY `Result_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `staffregno`
--
ALTER TABLE `staffregno`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `Student_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `Subject_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
