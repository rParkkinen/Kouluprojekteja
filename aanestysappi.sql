-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13.04.2018 klo 08:09
-- Palvelimen versio: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aanestysappi`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `kysymykset`
--

CREATE TABLE `kysymykset` (
  `Kysymys` text COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `Paivamaara` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vedos taulusta `kysymykset`
--

INSERT INTO `kysymykset` (`Kysymys`, `ID`, `Paivamaara`) VALUES
('moi', 28, '2018-03-26 11:02:25'),
('Kuka voittaa mestaruuden', 29, '2018-04-12 07:07:04');

-- --------------------------------------------------------

--
-- Rakenne taululle `vaihtoehdot`
--

CREATE TABLE `vaihtoehdot` (
  `ID` int(11) NOT NULL,
  `Aanestys_ID` int(11) NOT NULL,
  `Aanet` int(11) DEFAULT NULL,
  `Otsikko` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vedos taulusta `vaihtoehdot`
--

INSERT INTO `vaihtoehdot` (`ID`, `Aanestys_ID`, `Aanet`, `Otsikko`) VALUES
(37, 28, NULL, 'terve'),
(38, 28, NULL, 'juu'),
(39, 29, NULL, 'Tappara'),
(40, 29, NULL, 'KÃ¤rpÃ¤t'),
(41, 29, NULL, 'hifk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kysymykset`
--
ALTER TABLE `kysymykset`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vaihtoehdot`
--
ALTER TABLE `vaihtoehdot`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Aanestys_ID` (`Aanestys_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kysymykset`
--
ALTER TABLE `kysymykset`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `vaihtoehdot`
--
ALTER TABLE `vaihtoehdot`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Rajoitteet vedostauluille
--

--
-- Rajoitteet taululle `vaihtoehdot`
--
ALTER TABLE `vaihtoehdot`
  ADD CONSTRAINT `vaihtoehdot_ibfk_1` FOREIGN KEY (`Aanestys_ID`) REFERENCES `kysymykset` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
