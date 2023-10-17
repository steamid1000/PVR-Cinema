-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 06:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pvr-cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Login creds of the admin';

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `booked_seats` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`booked_seats`)),
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `movie_id`, `dates`, `booked_seats`, `name`, `email`, `age`, `gender`, `amount`) VALUES
(1, 8, '2023-07-14', '[20,1,12]', NULL, NULL, NULL, NULL, 0),
(3, 8, '2023-07-14', '[28,29]', 'Shivrudra Patil', 'stemaid100@gmail.com', 22, 'male', 600),
(4, 8, '2023-07-14', '[48,49]', 'Priya Patil', 'priyankapatil@gmail.com', 22, 'male', 600),
(5, 9, '2023-10-17', '[17,18]', 'Shivrudra', 'steamid1000@gmail.com', 20, 'Male', 1000),
(6, 9, '2023-10-17', '[1,2]', 'shivendra', 'shivendra@gmail.com', 19, 'Male', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(50) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `status`, `start_date`, `end_date`) VALUES
(9, 'Finding Nemo', 'Active', '2023-10-16', '2023-10-21'),
(10, 'Renders', 'Expired', '2023-10-10', '2023-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `movie_info`
--

CREATE TABLE `movie_info` (
  `movie_id` int(11) NOT NULL,
  `movie_thumbnail` varchar(30) NOT NULL,
  `movie_description` text NOT NULL,
  `ticket_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Contains the info about the movie';

--
-- Dumping data for table `movie_info`
--

INSERT INTO `movie_info` (`movie_id`, `movie_thumbnail`, `movie_description`, `ticket_price`) VALUES
(9, 'Finding Nemothumb.jpg', 'https://www.youtube.com/watch?v=2zLkasScy7A&pp=ygUMbmVtbyB0cmFpbGVy', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `movie_name` (`movie_name`);

--
-- Indexes for table `movie_info`
--
ALTER TABLE `movie_info`
  ADD KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `movie_info`
--
ALTER TABLE `movie_info`
  ADD CONSTRAINT `movie_info_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
