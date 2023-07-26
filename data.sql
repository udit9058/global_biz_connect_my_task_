-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 04:45 PM
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
-- Database: `bg`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `admitted` varchar(20) NOT NULL,
  `patient` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`name`, `address`, `phone`, `admitted`, `patient`) VALUES
('Udit Shyam Sharma', '28 HEENA PARK MAKTAMPUR BHARUCH', 2147483647, '2023-07-26', '7587'),
('Udit Shyam Sharma', '28 HEENA PARK MAKTAMPUR BHARUCH', 2147483647, '2023-07-26', '7587'),
('Udit Shyam Sharma', '28 HEENA PARK MAKTAMPUR BHARUCH', 2147483647, '2023-07-26', '7587'),
('Udit Shyam Sharma', '28 HEENA PARK MAKTAMPUR BHARUCH', 2147483647, '2023-07-26', '7587'),
('Udit Shyam Sharma', '28 HEENA PARK MAKTAMPUR BHARUCH', 2147483647, '2023-07-26', '7587'),
('Udit Shyam Sharma', '28 HEENA PARK MAKTAMPUR BHARUCH', 2147483647, '2023-07-15', '7587');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
