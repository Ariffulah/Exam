-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 01:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vermillion_store_pemalang`
--

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `Username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Pswd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`Username`, `email`, `Pswd`) VALUES
('Arif', 'arif@gmail.com', '@Arif12345'),
('', '', ''),
('arip', 'am2719608@gmail.com', '@Ayipe123'),
('', '', ''),
('', '', ''),
('', '', ''),
('Arif', 'arif@gmail.com', '@Arif12345'),
('', '', ''),
('Arif', 'arif@gmail.com', '@Arif12345'),
('', '', ''),
('asa', 'asa@gmail.com', '@Asa12345'),
('', '', ''),
('Arif', 'arif@gmail.com', '@Arif12345'),
('', '', ''),
('', '', ''),
('amar', 'amar@gmail.com', 'Amar_1234'),
('amar', 'amar@gmail.com', '$Amar12345'),
('', '', ''),
('', '', ''),
('', '', ''),
('', 'arif@gmail.com', 'password harus ada'),
('ariffulah', 'am2719608@gmail.com', 'password harus ada'),
('', '', ''),
('aldebarang', 'aldebar@gmail.com', '@Aldebar123'),
('', '', ''),
('aldebarang', 'aldebar@gmail.com', '@Aldebar12345'),
('', '', ''),
('ariffulah', 'arif@gmail.com', '@Pram12345'),
('', '', ''),
('Ariffulah', 'arif@gmail.com', '$Mulyoharjo1'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
