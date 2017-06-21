-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 05:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kom_isi` varchar(500) NOT NULL,
  `caption` varchar(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `kom_isi`, `caption`, `waktu`) VALUES
(1, 'Bahar', 'baharadi.25@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut placerat lacus.', 'caption1', '2017-05-02 00:52:26'),
(32, 'Baban', 'banirizkimaulana@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut placerat lacus.', 'caption2', '2017-05-02 00:52:26'),
(33, 'Baban', 'banirizkimaulana@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut placerat lacus.', 'caption3', '2017-05-02 00:52:26'),
(36, 'Astrid', 'astrid21am@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut placerat lacus.', 'caption1', '2017-05-02 01:22:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
