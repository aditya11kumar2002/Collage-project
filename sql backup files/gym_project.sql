-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 07:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkstatus`
--

CREATE TABLE `checkstatus` (
  `id` int(11) NOT NULL,
  `task` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkstatus`
--

INSERT INTO `checkstatus` (`id`, `task`, `status`) VALUES
(1, 'mastering', 'In progress'),
(2, 'mastering crunch', 'In progress'),
(3, 'sadfsdf', 'Pending'),
(5, 'push up', 'In progress');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `number` int(11) NOT NULL,
  `equipment_name` varchar(40) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`number`, `equipment_name`, `Description`, `quantity`, `Price`, `supplier`, `contact_no`) VALUES
(1, 'dumble', 'sdfsdf', 1, '400', 'ram trader', '12313'),
(2, 'sdfwef', 'dsfvfsd', 2, '400', 'kjsfks', '1233455'),
(3, 'pusher', 'to pushup related excercise', 7, '875 rs', 'Amazon Enterprises', '7689543675'),
(5, 'Dumbbell', 'Its good for Muscles', 8, '765 rs', 'J.K Enterprisers', '897654378');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `serial_no` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `dor` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `charge` varchar(20) NOT NULL,
  `chosen_service` varchar(30) NOT NULL,
  `plan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`serial_no`, `name`, `username`, `password`, `gender`, `mobile_no`, `dor`, `address`, `charge`, `chosen_service`, `plan`) VALUES
(1, 'jeetu yadav', 'jeetu@gmail.com', '12478', 'Female', '7865439021', '2024-10-08', 'Mukherjee nagar,ranchi', '              $65', 'fitness', 'One Month'),
(2, 'Mohan Kumar', 'mohan@gmail.com', 'jkjhh', 'Male', '6754328965', '2024-10-02', 'Jaunpur ,u.p', '          $54', 'cardio', 'Three Month'),
(3, 'Aditya saw', 'kumar@gmail.com', '1234', 'Male', '7865432908', '0000-00-00', 'wefewfew', '     $76', 'sauna', 'One Year'),
(8, 'shyam kumar', 'shyam@gmail.com', '6754', 'Male', '8976543217', '2024-10-15', ' gdsgdfsd', '     $89', 'fitness', 'One Month'),
(9, 'Shivanshu ranjan', 'shivansh@gmail.com', '12345', 'Male', '5678905465', '2024-10-02', 'Godda jharkhand,rancho', '$78', '', 'one month'),
(10, 'Shivanshu ranjan', 'shivansh@gmail.com', '12345', 'Male', '5678905465', '2024-10-02', 'Godda jharkhand,rancho', '$78', '', 'one month'),
(11, 'Aayush kaushal', 'Aayush@gmail.com', '7865', 'Male', '7865432190', '2024-10-08', 'manali,himachal pradesh', '$89', 'cardio', 'three month'),
(12, 'Himanshu kumar', 'himanshu@gmail.com', '345678', 'Male', '1256789065', '2024-10-17', 'mirzapur,u.p', '$76', 'fitness', 'one year'),
(13, 'ajay gop', 'ajay@gmail.com', '1234', 'Male', '4567895434', '2024-10-04', 'igntu,amarkantak', '$78', 'cardio', 'one month');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `announce` varchar(120) NOT NULL,
  `dop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `announce`, `dop`) VALUES
(2, 'Rennovation is going on...', '2024-09-30'),
(3, 'This is to inform that our services are interupted for 5 days due to maintentance.', '2024-10-08'),
(4, 'this is urgent info for participating member,we organize a challenging task.', '2024-10-12'),
(5, 'hello i am kamlesh kushwahw', '2024-10-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkstatus`
--
ALTER TABLE `checkstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkstatus`
--
ALTER TABLE `checkstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
