-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2021 at 06:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pure_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `Player_team`
--

CREATE TABLE `Player_team` (
  `id` int(11) NOT NULL,
  `Player` varchar(50) NOT NULL,
  `Birth_country` varchar(255) NOT NULL,
  `Team` varchar(25) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Player_team`
--

INSERT INTO `Player_team` (`id`, `Player`, `Birth_country`, `Team`, `updated_at`, `created_at`) VALUES
(3, 'Cristiano Ronaldo', 'Portugal', NULL, '2021-02-19', '2021-02-19'),
(4, 'Franz Backenbouer', 'Germany', NULL, '2021-02-19', '2021-02-19'),
(9, 'a', 'a', 'a', '2021-02-18', '2021-02-18'),
(10, 'b', 'b', 'b', '2021-02-18', '2021-02-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Player_team`
--
ALTER TABLE `Player_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Player_team`
--
ALTER TABLE `Player_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
