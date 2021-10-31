-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 10:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kyc-yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `name` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `address` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classtime`
--

CREATE TABLE `classtime` (
  `Day` text NOT NULL,
  `Time` text NOT NULL,
  `Duration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classtime`
--

INSERT INTO `classtime` (`Day`, `Time`, `Duration`) VALUES
('Monday - Saturday ', '5:00 am to 7:00 am', '2 Hrs.'),
('Monday - Saturday ', '6:00 pm to 8:00 pm', '2 Hrs.'),
('Monday - Saturday ', '6:00 am to 8:00 am', '2 Hrs.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` varchar(20) NOT NULL,
  `headline` text NOT NULL,
  `description` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_name` text NOT NULL,
  `Material` text NOT NULL,
  `Fee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_name`, `Material`, `Fee`) VALUES
('Panchakarma', 'Panchakarma : process of purification (purification) of the body', '5000'),
('Upkarma', 'Apart from Panchkarma - As-heartedness, stomach, janu sti, shyodhara, quote, peer, fire, eyebrow, and ophthalmia, vaginal runners and sharpening, fastening, comunication, adrenaline etc. They are used in conformity with the nature of physical condition, physical condition', '7000'),
('Yoga - I', 'Yoga - I - Evening Batch', '1200/ Monthly Fee'),
('Yoga - II', 'Yoga - II - Morning Batch', '1200/ Monthly Fee');

-- --------------------------------------------------------

--
-- Table structure for table `yogaadmission`
--

CREATE TABLE `yogaadmission` (
  `name` text NOT NULL,
  `DOB` text NOT NULL,
  `Gender` text NOT NULL,
  `Package` text NOT NULL,
  `Batch` text NOT NULL,
  `Fee` text NOT NULL,
  `Address` varchar(500) NOT NULL,
  `contact` text NOT NULL,
  `DOJ` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yogaadmission`
--

INSERT INTO `yogaadmission` (`name`, `DOB`, `Gender`, `Package`, `Batch`, `Fee`, `Address`, `contact`, `DOJ`) VALUES
('Vijay Kumar', '2002-06-05', 'Male', 'Standard', 'Morning', '2000', 'Garha Jabalpur', '7773886421', '');

-- --------------------------------------------------------

--
-- Table structure for table `yogacharya`
--

CREATE TABLE `yogacharya` (
  `name` text NOT NULL,
  `specialist` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yogacharya`
--

INSERT INTO `yogacharya` (`name`, `specialist`, `contact`) VALUES
('Dr. Seemant Sharma', 'Ph.D. in Yoga', '7773886421');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
