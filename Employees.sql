-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2023 at 05:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AssignmentOne`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `employee_id` varchar(6) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `department` varchar(9) NOT NULL,
  `salary_per_time` decimal(10,2) NOT NULL,
  `hours_per_month` decimal(10,2) NOT NULL,
  `monthly_salary` decimal(10,2) NOT NULL,
  `yearly_salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`employee_id`, `first_name`, `last_name`, `email`, `telephone`, `department`, `salary_per_time`, `hours_per_month`, `monthly_salary`, `yearly_salary`) VALUES
('EMP001', 'John', 'Smith', 'john.smith@example.com', '555-555-5551', 'Sales', 25.00, 160.00, 4000.00, 48000.00),
('EMP002', 'Mary', 'Johnson', 'mary.johnson@example.com', '555-555-5552', 'Marketing', 30.00, 160.00, 4800.00, 57600.00),
('EMP003', 'Michael', 'Brown', 'michael.brown@example.com', '555-555-5553', 'IT', 35.00, 160.00, 5600.00, 67200.00),
('EMP004', 'Sarah', 'Davis', 'sarah.davis@example.com', '555-555-5554', 'HR', 28.00, 160.00, 4480.00, 53760.00),
('EMP005', 'Robert', 'Wilson', 'robert.wilson@example.com', '555-555-5555', 'Finance', 32.00, 160.00, 5120.00, 61440.00),
('EMP006', 'Laura', 'Taylor', 'laura.taylor@example.com', '555-555-5556', 'Sales', 25.00, 160.00, 4000.00, 48000.00),
('EMP007', 'James', 'Anderson', 'james.anderson@example.com', '555-555-5557', 'Marketing', 30.00, 160.00, 4800.00, 57600.00),
('EMP008', 'Jennifer', 'Miller', 'jennifer.miller@example.com', '555-555-5558', 'IT', 35.00, 160.00, 5600.00, 67200.00),
('EMP009', 'William', 'Clark', 'william.clark@example.com', '555-555-5559', 'HR', 28.00, 160.00, 4480.00, 53760.00),
('EMP010', 'Emily', 'White', 'emily.white@example.com', '555-555-5560', 'Finance', 32.00, 160.00, 5120.00, 61440.00),
('EMP011', 'David', 'Hall', 'david.hall@example.com', '555-555-5561', 'Sales', 25.00, 160.00, 4000.00, 48000.00),
('EMP012', 'Jessica', 'Turner', 'jessica.turner@example.com', ' 555-555-5562', 'Marketing', 30.00, 160.00, 4800.00, 57600.00),
('EMP013', 'Daniel', 'Harris', 'daniel.harris@example.com', '555-555-5563', 'IT', 35.00, 160.00, 5600.00, 67200.00),
('EMP014', 'Olivia', 'Martin', 'olivia.martin@example.com', '555-555-5564', 'HR', 28.00, 160.00, 4480.00, 53760.00),
('EMP015', 'Matthew', 'Lewis', 'matthew.lewis@example.com', '555-555-5565', 'Finance', 32.00, 160.00, 5120.00, 61440.00),
('EMP015', 'Sophia', 'Walker', 'sophia.walker@example.com', '555-555-5566', 'Finance', 30.00, 160.00, 4800.00, 57600.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
