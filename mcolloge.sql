-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 02:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcolloge`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'rahman@gmail.com', 'pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_fname` varchar(30) NOT NULL,
  `s_phone` varchar(15) NOT NULL,
  `s_course` varchar(10) NOT NULL,
  `s_cnic` varchar(20) NOT NULL,
  `s_username` varchar(50) NOT NULL,
  `s_password` varchar(20) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `s_pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `t_id`, `s_name`, `s_fname`, `s_phone`, `s_course`, `s_cnic`, `s_username`, `s_password`, `s_address`, `s_pic`) VALUES
(1, 2, 'umair', 'Abdul Rahman', '03091308469', 'bsit', '353014456347257', 'admin@gmail.com', '1122', 'faridia', '64367962_307560086795492_6040064211181109248_o'),
(2, 1, 'Ahamd Riaz', 'Abdul majeed', '03091308469', 'bsit', '35301-8185044-9', 'admin@gmail.com', '1111', 'haveli', '57614881_280161999535301_2079679776687128576_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(10) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_qualification` varchar(15) NOT NULL,
  `t_phone` varchar(15) NOT NULL,
  `t_subject` varchar(15) NOT NULL,
  `t_username` varchar(100) NOT NULL,
  `t_password` varchar(20) NOT NULL,
  `t_address` varchar(100) NOT NULL,
  `t_pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `t_qualification`, `t_phone`, `t_subject`, `t_username`, `t_password`, `t_address`, `t_pic`) VALUES
(1, 'Sir Shafiq', 'phd', '03091308469', 'English', 'shafiq@gmail.com', '1122', 'haveli lakkha', '64367962_307560086795492_6040064211181109248_o.jpg'),
(2, 'abdul rahman', 'phd', '03091308469', 'IT', 'sahil.abdulrahman@gmail.com', '1122', 'high school', '221312c4b3d27c101c3e2ab0733eab73.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
