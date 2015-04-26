-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2015 at 08:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE IF NOT EXISTS `db` (
  `username` varchar(20) DEFAULT NULL,
  `group_id` varchar(10) DEFAULT NULL,
  `prj_name` varchar(20) DEFAULT NULL,
  KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `username_3` (`username`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`username`, `group_id`, `prj_name`) VALUES
('apoorv', 'g-101', NULL),
('mike', 'gp-102', NULL),
('vaibhav', 'gp-105', 'new'),
('mettu123', 'gp-111', 'project_abc');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `staff_id` varchar(10) NOT NULL DEFAULT '',
  `staff_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`staff_id`, `staff_name`) VALUES
('1081210133', 'anurag');

-- --------------------------------------------------------

--
-- Table structure for table `group_list`
--

CREATE TABLE IF NOT EXISTS `group_list` (
  `prj_name` varchar(20) NOT NULL DEFAULT '',
  `mail1` varchar(30) DEFAULT NULL,
  `mail2` varchar(30) DEFAULT NULL,
  `mail3` varchar(30) DEFAULT NULL,
  `mail4` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`prj_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_list`
--

INSERT INTO `group_list` (`prj_name`, `mail1`, `mail2`, `mail3`, `mail4`) VALUES
('proj1', 'vaibhav@gmail.com', 'a@gmail.com', 'a@gmail.com', 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pc_db`
--

CREATE TABLE IF NOT EXISTS `pc_db` (
  `staff_id` varchar(10) DEFAULT NULL,
  `reg_no` varchar(10) DEFAULT NULL,
  `group_id` varchar(10) NOT NULL DEFAULT '',
  `prj_name` varchar(20) DEFAULT NULL,
  `flag` int(2) DEFAULT NULL,
  PRIMARY KEY (`group_id`),
  KEY `staff_id` (`staff_id`),
  KEY `reg_no` (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_db`
--

INSERT INTO `pc_db` (`staff_id`, `reg_no`, `group_id`, `prj_name`, `flag`) VALUES
('garvit', '1081210129', 'gp-101', 'proj1', 1),
('garvit', '', 'gp-105', 'new', 1),
('john123', '1081210104', 'gp-111', 'project_abc', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `task_name` varchar(30) NOT NULL,
  `task_desc` varchar(50) DEFAULT NULL,
  `task_mem` varchar(50) DEFAULT NULL,
  `task_dt` date DEFAULT NULL,
  `prj_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`task_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_name`, `task_desc`, `task_mem`, `task_dt`, `prj_name`) VALUES
('bgb', 'nbn', 'vaibhav@gmail.com', '2015-04-25', 'proj1'),
('fdf', 'fd', 'a@gmail.com', '2015-04-25', NULL),
('fdgfgf', 'fd', 'a@gmail.com', '2015-04-25', NULL),
('gbfvfgvd', 'sdffs', 'vaibhav@gmail.com', '2015-04-11', ''),
('gfgfg', 'gfgfgfg', 'vaibhav@gmail.com', '2015-04-24', NULL),
('hnhmjhj', 'ghfh', 'a@gmail.com', '2015-04-29', 'proj1'),
('user creation', 'gmfgfmg', 'vaibhav@gmail.com', '2015-04-29', 'proj1');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `pwd` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `reg` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`username`, `pwd`, `email`, `user_name`, `user_type`, `reg`) VALUES
('abcd12344', '5d41402abc4b2a76b9719d911017c592', 'garvit1608@gmail.com', 'abcd', 'ST', '1081210129'),
('apoorv', '5d41402abc4b2a76b9719d911017c592', 'garvit1608@gmail.com', 'apoorva', 'ST', NULL),
('don121', '5e36941b3d856737e81516acd45edc50', 'garvit1608@gmail.com', 'g', 'PC', '1081210133'),
('don122', '5d41402abc4b2a76b9719d911017c592', 'garvit1608@gmail.com', 'Garvit', 'PC', '1081210133'),
('don123', '5e36941b3d856737e81516acd45edc50', 'garvit1608@gmail.com', 'dffd', 'PC', '1081210133'),
('garvit', '5d41402abc4b2a76b9719d911017c592', 'garvit1608@gmail.com', 'Garvit', 'PC', '1081210131'),
('garvit1234', 'a6dcd6ccc8a3ca07da9f995919831631', 'garvit1608@gmail.com', 'gg', 'PC', '1081210129'),
('john123', '5d41402abc4b2a76b9719d911017c592', 'abc@gmail.com', 'john', 'PC', '1081210104'),
('mettu123', '5d41402abc4b2a76b9719d911017c592', 'mettu@gmail.com', 'mettu', 'ST', '1081210102'),
('mike', '5d41402abc4b2a76b9719d911017c592', 'mike@gmail.com', 'mike', 'ST', '1081210047'),
('rohit', '5d41402abc4b2a76b9719d911017c592', 'garvit1608@gmail.com', 'rohit', 'TG', '1081210147'),
('sherdil', 'ba5ef51294fea5cb4eadea5306f3ca3b', 'sheru@gmail.com', 'sher', 'ST', '1081210043'),
('v', 'c4055e3a20b6b3af3d10590ea446ef6c', 'garvit1608@gmail.com', 'f', 'PC', '1081210111'),
('vaibhav', 'ba5ef51294fea5cb4eadea5306f3ca3b', 'vaibhav@gmail.com', 'vaibhav', 'ST', '1081210004');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db`
--
ALTER TABLE `db`
  ADD CONSTRAINT `db_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user_detail` (`username`);

--
-- Constraints for table `pc_db`
--
ALTER TABLE `pc_db`
  ADD CONSTRAINT `pc_db_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `user_detail` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
