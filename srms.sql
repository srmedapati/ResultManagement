-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 02:54 PM
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
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `name`, `password`) VALUES
('masteradmin', 'SR Medapati', 'raghuveer');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `username` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`username`, `name`, `password`) VALUES
('mern_instructor_19', 'Bhaskar Koilada', 'bhaskar_k'),
('mvc_19', 'Sayanthan.M', 'sayanthan_m');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_section`
--

CREATE TABLE `faculty_section` (
  `username` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `scode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_section`
--

INSERT INTO `faculty_section` (`username`, `class`, `scode`) VALUES
('mern_instructor_19', '10', 'WEB100'),
('sayanthan_mvc', '10', 'MAT111'),
('mvc_19', '8', 'MAT111');

-- --------------------------------------------------------

--
-- Table structure for table `sem_class`
--

CREATE TABLE `sem_class` (
  `sem` int(11) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `username` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`username`, `name`, `password`, `semester`) VALUES
('AP19110010445', 'Subhash', 'subbu_kona', 4),
('AP19110010447', 'Sridhar', 'sridhar1234', 10),
('AP19110010457', 'Jaswanth', 'j_kolisetty', 10),
('AP19110010536', 'Chandrahas', 'chandrahas', 10);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `username` varchar(20) NOT NULL,
  `subjectcode` varchar(20) NOT NULL,
  `class` int(11) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`username`, `subjectcode`, `class`, `marks`) VALUES
('AP19110010457', 'WEB100', 10, 50),
('AP19110010536', 'WEB100', 10, 49);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectname` varchar(50) NOT NULL,
  `subjectcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectname`, `subjectcode`) VALUES
('Maths', 'MAT111'),
('Hindi', 'HIN001'),
('MERN', 'WEB100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
