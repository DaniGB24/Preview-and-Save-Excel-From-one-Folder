-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 03:33 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb_folderexcel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_mhs`
--

CREATE TABLE `kelompok_mhs` (
  `nim` int(8) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `prov` varchar(25) NOT NULL,
  `univ` varchar(25) NOT NULL,
  `prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok_mhs`
--

INSERT INTO `kelompok_mhs` (`nim`, `nama`, `prov`, `univ`, `prodi`) VALUES
(15650006, 'ILHAM ROHMAD DANI', 'Yogyakarta', 'UIN Sunan Kalijaga', 'Teknik Informatika'),
(15650016, 'MUFTIA CHALIDA', 'Yogyakarta', 'UIN Sunan Kalijaga', 'Teknik Informatika'),
(15650036, 'KITAMI AKROMUNNISA', 'Yogyakarta', 'UIN Sunan Kalijaga', 'Teknik Informatika'),
(15650000, 'Group 4 ', 'Yogyakarta', 'UIN Sunan Kalijaga', 'Teknik Informatika'),
(15650000, 'Kelompok 4', 'Yogyakarta', 'UIN Sunan Kalijaga', 'Teknik Informatika');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
