-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 09:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rea frankovic`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodavaonica`
--

CREATE TABLE `prodavaonica` (
  `ID` int(11) NOT NULL,
  `ime_artikla` varchar(255) NOT NULL,
  `cijena_artikla` int(11) NOT NULL,
  `velicina_artikla` varchar(255) DEFAULT 'STANDARDNO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodavaonica`
--

INSERT INTO `prodavaonica` (`ID`, `ime_artikla`, `cijena_artikla`, `velicina_artikla`) VALUES
(1, 'Tehnicka olovka', 20, 'STANDARDNO'),
(2, 'Ljepilo u sticku', 30, '40g'),
(3, 'Gumica', 5, 'STANDARDNO');

-- --------------------------------------------------------

--
-- Table structure for table `skladiste`
--

CREATE TABLE `skladiste` (
  `ID` int(11) NOT NULL,
  `prodavaonica_ID` int(11) NOT NULL,
  `kolicina_artikla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skladiste`
--

INSERT INTO `skladiste` (`ID`, `prodavaonica_ID`, `kolicina_artikla`) VALUES
(1, 3, 222),
(2, 1, 43),
(3, 2, 170);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodavaonica`
--
ALTER TABLE `prodavaonica`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skladiste`
--
ALTER TABLE `skladiste`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `prodavaonica_ID` (`prodavaonica_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodavaonica`
--
ALTER TABLE `prodavaonica`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skladiste`
--
ALTER TABLE `skladiste`
  ADD CONSTRAINT `skladiste_ibfk_1` FOREIGN KEY (`prodavaonica_ID`) REFERENCES `prodavaonica` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
