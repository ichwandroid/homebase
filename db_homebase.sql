-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 02:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_homebase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lomba`
--

CREATE TABLE `tbl_lomba` (
  `id_lomba` int(11) NOT NULL,
  `tingkat_lomba` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_lomba`
--

INSERT INTO `tbl_lomba` (`id_lomba`, `tingkat_lomba`) VALUES
(11, 'Sekolah'),
(12, 'Gugus'),
(13, 'Kecamatan'),
(14, 'Kota'),
(15, 'Provinsi'),
(16, 'Nasional'),
(17, 'Internasional'),
(18, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poinlomba`
--

CREATE TABLE `tbl_poinlomba` (
  `id_lomba` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_poinlomba`
--

INSERT INTO `tbl_poinlomba` (`id_lomba`, `status`, `poin`) VALUES
(11, 'Juara 1', 7),
(11, 'Juara 2', 6),
(11, 'Juara 3', 5),
(11, 'Juara 4', 4),
(11, 'Juara 5', 3),
(11, 'Juara 6', 2),
(11, 'Peserta', 1),
(12, 'Juara 1', 8),
(12, 'Juara 2', 7),
(12, 'Juara 3', 6),
(12, 'Juara 4', 5),
(12, 'Juara 5', 4),
(12, 'Juara 6', 3),
(12, 'Peserta', 2),
(13, 'Juara 1', 9),
(13, 'Juara 2', 8),
(13, 'Juara 3', 7),
(13, 'Juara 4', 6),
(13, 'Juara 5', 5),
(13, 'Juara 6', 4),
(13, 'Peserta', 3),
(14, 'Juara 1', 10),
(14, 'Juara 2', 9),
(14, 'Juara 3', 8),
(14, 'Juara 4', 7),
(14, 'Juara 5', 6),
(14, 'Juara 6', 5),
(14, 'Peserta', 4),
(15, 'Juara 1', 11),
(15, 'Juara 2', 10),
(15, 'Juara 3', 9),
(15, 'Juara 4', 8),
(15, 'Juara 5', 7),
(15, 'Juara 6', 6),
(15, 'Peserta', 5),
(16, 'Juara 1', 12),
(16, 'Juara 2', 11),
(16, 'Juara 3', 10),
(16, 'Juara 4', 9),
(16, 'Juara 5', 8),
(16, 'Juara 6', 7),
(16, 'Peserta', 6),
(17, 'Juara 1', 13),
(17, 'Juara 2', 12),
(17, 'Juara 3', 11),
(17, 'Juara 4', 10),
(17, 'Juara 5', 9),
(17, 'Juara 6', 8),
(17, 'Peserta', 7),
(18, 'Juara 1', 7),
(18, 'Juara 2', 6),
(18, 'Juara 3', 5),
(18, 'Juara 4', 4),
(18, 'Juara 5', 3),
(18, 'Juara 6', 2),
(18, 'Peserta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pointambahan`
--

CREATE TABLE `tbl_pointambahan` (
  `id_tambahan` int(11) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_pointambahan`
--

INSERT INTO `tbl_pointambahan` (`id_tambahan`, `poin`) VALUES
(31, 6),
(31, 5),
(31, 4),
(31, 3),
(31, 2),
(31, 1),
(32, 6),
(32, 5),
(32, 4),
(32, 3),
(32, 2),
(32, 1),
(33, 3),
(33, 2),
(33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poinupacara`
--

CREATE TABLE `tbl_poinupacara` (
  `id_tugas` int(11) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_poinupacara`
--

INSERT INTO `tbl_poinupacara` (`id_tugas`, `poin`) VALUES
(21, 3),
(21, 2),
(21, 1),
(22, 3),
(22, 2),
(22, 1),
(23, 3),
(23, 2),
(23, 1),
(24, 3),
(24, 2),
(24, 1),
(25, 3),
(25, 2),
(25, 1),
(26, 3),
(26, 2),
(26, 1),
(27, 3),
(27, 2),
(27, 1),
(28, 5),
(28, 4),
(28, 3),
(28, 2),
(28, 1),
(29, 5),
(29, 4),
(29, 3),
(29, 2),
(29, 1),
(210, 5),
(210, 4),
(210, 3),
(210, 2),
(210, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `timescan` datetime NOT NULL,
  `nis` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `poin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`timescan`, `nis`, `status`, `poin`) VALUES
('2023-10-23 12:11:48', '1659', '3', '7'),
('2023-10-23 12:12:20', '1895', '6', '10'),
('2023-10-23 13:21:00', '1806', '11', '2'),
('2023-10-23 15:26:26', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tambahan`
--

CREATE TABLE `tbl_tambahan` (
  `id_tambahan` int(11) NOT NULL,
  `nama_tambahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_tambahan`
--

INSERT INTO `tbl_tambahan` (`id_tambahan`, `nama_tambahan`) VALUES
(31, 'Piket kelas '),
(32, 'Piket SCCB'),
(33, 'perilaku inisiatif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upacara`
--

CREATE TABLE `tbl_upacara` (
  `id_tugas` int(11) NOT NULL,
  `tugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_upacara`
--

INSERT INTO `tbl_upacara` (`id_tugas`, `tugas`) VALUES
(21, 'Komandan'),
(22, 'MC Ind'),
(23, 'MC Eng'),
(24, 'Pancasila'),
(25, 'UUD'),
(26, 'Derijen'),
(27, 'Doa'),
(28, 'P.K'),
(29, 'P.B'),
(210, 'Paski');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lomba`
--
ALTER TABLE `tbl_lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `tbl_tambahan`
--
ALTER TABLE `tbl_tambahan`
  ADD PRIMARY KEY (`id_tambahan`);

--
-- Indexes for table `tbl_upacara`
--
ALTER TABLE `tbl_upacara`
  ADD PRIMARY KEY (`id_tugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
