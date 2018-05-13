-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 05:53 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himsya`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `semester` int(5) NOT NULL,
  `alamat` text,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `semester`, `alamat`, `no_hp`) VALUES
('2116R1196', 'SITI KUROTUL AKYANI', 'TI', 4, 'Dsn. Goleng, Ds. Terkesi, Kec. Klambu, Kab. Grobogan', '08123456789'),
('2116R1189', 'DINA SUCI FAUJIYAH', 'TI', 4, 'Dusun.Sodo Desa.Karangrejo kec.Gabus', '089532189655'),
('2116R1994', 'NISA AMALIA', 'TI', 4, 'Dusun.Sukoharjo Desa.Kranggan Kec.Toroh', '0875432116986'),
('2116R1994', 'NISA AMALIA', 'TI', 4, 'Dusun.Sukoharjo Desa.Kranggan Kec.Toroh', '0875432116986'),
('2116R1174', 'KAISAR BAGUS S.P', 'TI', 4, 'Dusun.Andeande Desa.Ngembak Kec.Purwodadi', '085774217998'),
('2116R1174', 'KAISAR BAGUS S.P', 'TI', 4, 'Dusun.Andeande Desa.Ngembak Kec.Purwodadi', '085774217998'),
('2116R1186', 'ANGGA PRASITIAWAN', 'TI', 4, 'Dusun.Sono Desa.Sonotonggorejo Kec.Gabus', '087742181021'),
('2116R1190', 'HEDY HERNANDY', 'TI', 4, 'Jln.Pangkalan3 RT.04 RW.06', '087745776512'),
('2116R1192', 'MUHAMMAD AINUL YAQIN', 'TI', 4, 'Dusun.Dagangan Desa.Dapurno Kec.Wirosari', '08855211189'),
('2116R1197', 'M. IRSYADUL IBAD ARROZY', 'TI', 4, 'Dusun.Purwodadi', '087654321');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
