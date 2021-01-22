-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 09:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `postcode` int(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `membershipRadios1` varchar(100) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `Board_Name_1` varchar(100) NOT NULL,
  `Percentage_1` float NOT NULL,
  `Academic_Year_1` date NOT NULL,
  `membershipRadios2` varchar(100) NOT NULL,
  `college_name_1` varchar(100) NOT NULL,
  `Board_Name_2` varchar(100) NOT NULL,
  `Percentage_2` float NOT NULL,
  `Academic_Year_2` date NOT NULL,
  `membershipRadios3` varchar(100) NOT NULL,
  `college_name_2` varchar(100) NOT NULL,
  `Board_Name_3` varchar(100) NOT NULL,
  `Percentage_3` float NOT NULL,
  `Academic_Year_3` date NOT NULL,
  `membershipRadios4` varchar(100) NOT NULL,
  `college_name_3` varchar(100) NOT NULL,
  `University_Name` varchar(100) NOT NULL,
  `Graduation_Course` varchar(100) NOT NULL,
  `Percentage_4` float NOT NULL,
  `Academic_Year_4` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `email`, `phone`, `address1`, `state`, `address2`, `postcode`, `city`, `country`, `membershipRadios1`, `school_name`, `Board_Name_1`, `Percentage_1`, `Academic_Year_1`, `membershipRadios2`, `college_name_1`, `Board_Name_2`, `Percentage_2`, `Academic_Year_2`, `membershipRadios3`, `college_name_2`, `Board_Name_3`, `Percentage_3`, `Academic_Year_3`, `membershipRadios4`, `college_name_3`, `University_Name`, `Graduation_Course`, `Percentage_4`, `Academic_Year_4`) VALUES
(5, 'Abhishek ', 'Jha', 'abhijha9889@gmail.com', 2147483647, 'Manasarovar Complex, Bld no-3A, Room no-705, Sect-34, Kamothe, Kamothe.', 'Maharashtra', 'Manasarovar Complex, Bld no-3A, Room no-705, Sect-34, Kamothe, Kamothe.', 410209, 'Navi-Mumbai', 'India', 'Yes', 'National Public High School, Nerul', 'Mumbai Board', 80, '2012-07-04', ' Yes ', 'Tilak  Jr. College of Science and Commerce, Nerul ', 'Mumbai Board', 90, '2014-06-17', ' No ', '', '', 0, '0000-00-00', ' Yes ', 'Dr. D. Patil College of Institute and Engineering Technical Campus, Ambi', 'Savitribai Phule Pune University', 'BE/B.Tech- Bachelor of Technology', 95, '2020-10-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
