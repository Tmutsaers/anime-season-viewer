-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 23, 2023 at 01:41 PM
-- Server version: 10.8.6-MariaDB-1:10.8.6+maria~ubu2204-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime_viewer`
--

-- --------------------------------------------------------

--
-- Table structure for table `Anime`
--

CREATE TABLE `Anime` (
  `id` int(11) NOT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Day` varchar(255) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Url` varchar(255) DEFAULT NULL,
  `Year` int(200) DEFAULT NULL,
  `Season` varchar(255) DEFAULT NULL,
  `MalID` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Anime_Character`
--

CREATE TABLE `Anime_Character` (
  `characterID` int(11) NOT NULL,
  `animeID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `favorites` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Anime_Detail`
--

CREATE TABLE `Anime_Detail` (
  `id` int(11) NOT NULL,
  `ENname` varchar(255) DEFAULT NULL,
  `JPname` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `additionalInfo` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Anime`
--
ALTER TABLE `Anime`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MalID` (`MalID`);

--
-- Indexes for table `Anime_Character`
--
ALTER TABLE `Anime_Character`
  ADD PRIMARY KEY (`characterID`);

--
-- Indexes for table `Anime_Detail`
--
ALTER TABLE `Anime_Detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Anime`
--
ALTER TABLE `Anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1080;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
