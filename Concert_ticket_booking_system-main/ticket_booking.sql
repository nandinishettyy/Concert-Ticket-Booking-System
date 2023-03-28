-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 04:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `concert_id` int(11) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`concert_id`, `artist_name`, `image`, `date`, `time`, `venue_name`) VALUES
(1, 'Prateek Kuhad', 'images/prateek kuhad1.jpg', '2021-09-23', '20:30:00', 'Manpho Convention Centre'),
(2, 'A R Rahman', 'images/arr.jpg', '2021-12-20', '19:00:00', 'Manpho Convention Centre'),
(3, 'Vidya Vox', 'images/vidyavox.jpg', '2021-10-02', '19:00:00', 'Palace Grounds'),
(4, 'Armaan Malik', 'images/armaan1234.jpg', '2021-10-20', '19:00:00', 'Skydeck'),
(5, 'Shankar Mahadevan', 'images/shankar.jpg', '2021-12-30', '20:00:00', 'Manpho Convention Centre'),
(6, 'Usha Uthup', 'images/UshaUthup1200.jpg', '2021-10-21', '19:00:00', 'Manpho Convention Centre'),
(7, 'Shirley Setia', 'images/shirley.jpg', '2021-11-21', '19:00:00', 'Palace Grounds'),
(8, 'The Yellow Diary', 'images/yellow_5e4fc53466b7a.jpg', '2021-09-02', '20:00:00', 'Palace Ground'),
(9, 'Arijit Singh', 'images/arijit-singh-1200.jpg', '2021-11-02', '20:00:00', 'Manpho Convention Centre'),
(10, 'Sanjith Hegde', 'images/sanjith.jpg', '2021-09-15', '20:00:00', 'SkyDeck'),
(11, 'Swarathma', 'images/swarathma.jpg', '2021-10-09', '17:00:00', 'SkyDeck'),
(12, 'Udit Narayan', 'images/udit.jpg', '2021-10-21', '20:00:00', 'Manpho Convention Centre'),
(13, 'Raghu Dixit', 'images/raghud.jpg', '2021-10-05', '20:00:00', 'SkyDeck'),
(14, 'Shreya Ghoshal', 'images/shreya-2.jpg', '2021-12-20', '20:00:00', 'Manpho Convention Centre'),
(15, 'Sangeetha Kati', 'images/sangeetha.jpg', '2021-09-09', '20:00:00', 'Manpho Convention Centre');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `email`, `username`, `password`) VALUES
(18, 'Prabha', 'krprabhaa@gmail.com', 'prabha', '$2y$10$qJ3dVjuTz28xGQo7K0adg.iVrA3zflnSo0XTznx7r.a8xsIDDR.DK'),
(19, 'SHREYA SRI A N', 'anshreyasri@gmail.com', 'dsi1ds19cs153dmo', '$2y$10$6WZGzyAQI3LWUjR.44xPxOZ.mn6yGZomc1k2NmHrNQ8CLvQ5AN4xe'),
(20, 'Shreya sri A N .', 'anshreyasri309@gmail.com', 'shreyasri', '$2y$10$wlFeQT23ph7vX1oQn3MHTu8sMvlWKcxTfRdcbjmhGPqgEu6RzaV8e'),
(21, 'Nandini shetty', 'shettynandini01@gmail.com', 'nandini', '$2y$10$3aYAxmtDRFiQMyeguN8ukeGnYdpUNPSYEY.MJacLV9LMBHafJHoiG');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `concert_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `payment_status` int(11) DEFAULT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `concert_id`, `quantity`, `category`, `cost`, `payment_status`, `order_time`) VALUES
(13, 12, 10, 3, '6800.00', 1, '2021-08-04 18:10:37'),
(14, 12, 10, 3, '6800.00', 1, '2021-08-04 18:20:57'),
(15, 12, 10, 3, '6800.00', 1, '2021-08-04 18:21:56'),
(16, 12, 10, 2, '8500.00', 1, '2021-08-04 18:22:05'),
(17, 12, 4, 2, '3400.00', 1, '2021-08-04 18:22:48'),
(18, 12, 7, 1, '15000.00', 1, '2021-08-05 05:44:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`concert_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `concert_id` (`concert_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concert`
--
ALTER TABLE `concert`
  MODIFY `concert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`concert_id`) REFERENCES `concert` (`concert_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
