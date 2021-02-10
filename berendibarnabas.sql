-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 11:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berendibarnabas`
--

-- --------------------------------------------------------

--
-- Table structure for table `magasugrasok`
--

CREATE TABLE `magasugrasok` (
  `mu_id` int(11) NOT NULL,
  `mu_magassag` decimal(10,2) NOT NULL,
  `mu_atleta` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `mu_nemzetiseg` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `mu_datum` date NOT NULL,
  `mu_helyszin` varchar(256) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `magasugrasok`
--

INSERT INTO `magasugrasok` (`mu_id`, `mu_magassag`, `mu_atleta`, `mu_nemzetiseg`, `mu_datum`, `mu_helyszin`) VALUES
(1, '2.36', 'Gerd Wessig', 'GDR', '1980-08-01', 'Moszkva'),
(2, '2.37', 'Zhu Jianhua', 'CHN', '1983-06-11', 'Peking'),
(3, '2.38', 'Zhu Jianhua', 'CHN', '1983-09-22', 'Sanghaj'),
(4, '2.39', 'Zhu Jianhua', 'CHN', '1984-06-10', 'Eberstadt'),
(5, '2.40', 'Rudolf Povarnicsin', 'URS', '1985-08-11', 'Donyeck'),
(6, '2.41', 'Igor Paklin', 'URS', '1985-09-04', 'Kóbe'),
(7, '2.42', 'Patrik Sjöberg', 'SWE', '1987-06-30', 'Stockholm'),
(8, '2.43', 'Javier Sotomayor', 'CUB', '1988-09-08', 'Salamanca'),
(9, '2.44', 'Javier Sotomayor', 'CUB', '1989-07-29', 'Puerto Rico'),
(10, '2.45', 'Javier Sotomayor', 'CUB', '1993-07-27', 'Salamanca'),
(13, '1.00', 'Berendi Barnabás', 'HUN', '2021-02-10', 'Érd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `magasugrasok`
--
ALTER TABLE `magasugrasok`
  ADD PRIMARY KEY (`mu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `magasugrasok`
--
ALTER TABLE `magasugrasok`
  MODIFY `mu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
