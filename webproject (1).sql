-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2024 at 07:07 PM
-- Server version: 11.1.2-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `GetAlldivisi` () RETURNS TEXT CHARSET latin1 COLLATE latin1_swedish_ci  BEGIN
    DECLARE divisi TEXT;
    SET divisi = 'HRD';
RETURN divisi;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `waktu_kehadiran` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nama`, `divisi`, `waktu_kehadiran`) VALUES
(133, 'Bunga', 'Admin', '2024-01-08 10:16:26'),
(134, 'Citra', 'Admin', '2024-01-08 12:48:40'),
(135, 'Citra', 'Admin', '2024-01-08 12:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `auditlog`
--

CREATE TABLE `auditlog` (
  `id` int(20) NOT NULL,
  `changed_table` varchar(11) NOT NULL,
  `changed_id` int(20) NOT NULL,
  `action` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `change_table`
--

CREATE TABLE `change_table` (
  `id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `divisi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `divisi`) VALUES
(1, 'baru', 'Admin'),
(2, 'Citra', 'Finance'),
(3, 'Lestari', 'HRD'),
(4, 'Ayu', 'Operation'),
(5, 'Budi', 'Finance'),
(6, 'Reihan', 'Operation'),
(7, 'Kei', 'Admin'),
(8, 'Dwiky', 'Operation'),
(9, 'Hanikun', 'HRD'),
(10, 'Luluk', 'Admin'),
(11, 'Ikrana', 'Finance'),
(12, 'Hawa', 'HRD'),
(13, 'Fazya', 'HRD'),
(18, 'ajS', 'Finace'),
(25, 'hai', ''),
(30, 'ya', 'HRD'),
(60, 'tya', '');

--
-- Triggers `karyawan`
--
DELIMITER $$
CREATE TRIGGER `after_product_delete` AFTER DELETE ON `karyawan` FOR EACH ROW INSERT INTO auditlog (changed_table, changed_id, action)
VALUES ('karyawan', OLD.id, 'DELETE', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_keluar`
--

CREATE TABLE `karyawan_keluar` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `karyawan_keluar`
--

INSERT INTO `karyawan_keluar` (`id`, `nama`, `divisi`) VALUES
(1, 'Baru', 'Admin'),
(1, 'Baru', 'Admin'),
(1, 'Baru', 'Admin'),
(2, 'anin', 'HRD'),
(2, 'HE', ''),
(2, 'HELOO', 'OB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `change_table`
--
ALTER TABLE `change_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `change_table`
--
ALTER TABLE `change_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
