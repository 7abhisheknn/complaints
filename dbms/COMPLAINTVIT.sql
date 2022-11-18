-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2022 at 08:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `COMPLAINTVIT`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Phone No` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`First Name`, `Last Name`, `Gender`, `Phone No`, `Address`, `Email`, `Location`, `Username`, `Password`) VALUES
('Rahul', 'Roy', 'Male', '0123456789', 'Chennai', 'rahul@gmail.com', 'Chennai', 'admin1', 'admin1'),
('Rahul', 'Roy', 'Male', '0123456789', 'Chennai', 'rahul@gmail.com', 'Chennai', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Sl No` int(11) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Doctor` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `StudentUser` varchar(255) NOT NULL,
  `Upvote` int(11) NOT NULL DEFAULT 0,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Sl No`, `Department`, `Doctor`, `Location`, `Date`, `Time`, `StudentUser`, `Upvote`, `Status`) VALUES
(23, 'Electric', 'jhdjhjs', 'kaklk', 'nncnmb', 'oiioioo', 'Skumar23', 4, 'Approved'),
(24, 'Mess', 'Food Quality Not Good', 'Non-veg Mess', '10/11/2022', 'Rice and Roti Quality Bad', 'Skumar23', 8, 'Approved'),
(25, 'General', 'Wifi Problem', 'A Block- 444 Room', '12/11/2022', 'Wifi Is Not Connecting', 'AkashP89', 0, 'Approved'),
(26, 'House Keeping', 'Room Cleaning', 'B Block- Room 245', '16/11/2022', 'Room Is Not Cleaned Last Day', 'Santosh45', 6, 'Approved'),
(27, 'Plumbing', 'no water at 4th floor', 'back toilets', '18/11/2022', 'no water', 'Santosh45', 0, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `department_credentials`
--

CREATE TABLE `department_credentials` (
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Phone No` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_credentials`
--

INSERT INTO `department_credentials` (`First Name`, `Last Name`, `Gender`, `Phone No`, `Email`, `Designation`, `Department`, `Location`, `Username`, `Password`, `Status`) VALUES
('Rohan', 'Singh', 'Male', '0123456789', 'roham@gmail.com', 'Junior Doctor', 'Cardiology', 'Chennai', 'doc1', 'doc1', 'Blocked'),
('Suvam', 'Metia', 'M', '9834129067', 'hfhjhdjfhur@gmail.com', 'Senior D', 'Cardiology', 'Kolkata', 'SMetia', 'Smetia@123', 'Blocked');

-- --------------------------------------------------------

--
-- Table structure for table `student_credentials`
--

CREATE TABLE `student_credentials` (
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Phone No` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_credentials`
--

INSERT INTO `student_credentials` (`First Name`, `Last Name`, `Gender`, `Phone No`, `Email`, `Address`, `Username`, `Password`, `Status`) VALUES
('Santosh', 'Kumar', 'M', '9672399851', 'santoshkr34@gmail.com', 'Chennai', 'Santosh45', 'Santosh@45', ''),
('Sourav', 'Kumar', 'M', '9882356189', 'sourav@123gmail.com', 'Chennai, Tamil Nadu', 'Skumar23', 'Kumar@s098', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Sl No`);

--
-- Indexes for table `student_credentials`
--
ALTER TABLE `student_credentials`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Sl No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
