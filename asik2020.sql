-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 09:54 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asik2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungi`
--

CREATE TABLE `tbl_hubungi` (
  `id_hubungi` int(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`) VALUES
(11, 'fitri', '0feb6b04b9c65ad31fb9ffcf719ef0e6', 'Fitri'),
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `no` varchar(200) NOT NULL,
  `noujian` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tgllhr` varchar(200) NOT NULL,
  `ortu` varchar(200) NOT NULL,
  `NIS` varchar(200) NOT NULL,
  `NISN` varchar(200) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `ppkn` varchar(200) NOT NULL,
  `bindo` varchar(200) NOT NULL,
  `mtk` varchar(200) NOT NULL,
  `sejindo` varchar(200) NOT NULL,
  `bing` varchar(200) NOT NULL,
  `seni` varchar(200) NOT NULL,
  `prakarya` varchar(200) NOT NULL,
  `penjas` varchar(200) NOT NULL,
  `bjawa` varchar(200) NOT NULL,
  `mtkp` varchar(200) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `fis` varchar(200) NOT NULL,
  `kim` varchar(200) NOT NULL,
  `ekolm` varchar(200) NOT NULL,
  `geo` varchar(200) NOT NULL,
  `sasing` varchar(200) NOT NULL,
  `sejp` varchar(200) NOT NULL,
  `sosio` varchar(200) NOT NULL,
  `eko` varchar(200) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `ratana` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `ketgambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`no`, `noujian`, `name`, `tgllhr`, `ortu`, `NIS`, `NISN`, `kelas`, `agama`, `ppkn`, `bindo`, `mtk`, `sejindo`, `bing`, `seni`, `prakarya`, `penjas`, `bjawa`, `mtkp`, `bio`, `fis`, `kim`, `ekolm`, `geo`, `sasing`, `sejp`, `sosio`, `eko`, `jurusan`, `ratana`, `ket`, `ketgambar`) VALUES
('1', '5555', 'FITRI SUSIADI CHAERUDIN', 'Purbalingga, 6 Juli 1983', 'Abas Chaerudin', '5555', '667777', 'XII MIPA 1', '70', '80', '70', '80', '78', '76', '79', '80', '81', '67', '66', '55', '67', '55', '75', '', '', '', '', '', 'IPA', '71.93', 'lulus', 'lulus'),
('2', '4444', 'ILONA ALEXANDRA', 'Purbalingga, 5 Juni 2000', 'Fitri Susiadi Ch', '4444', '444333', 'XII IPS 1', '70', '80', '70', '80', '78', '76', '79', '80', '81', '67', '', '', '', '', '', '66', '55', '67', '55', '75', 'IPS', '71.93', 'lulus', 'lulus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_hubungi`
--
ALTER TABLE `tbl_hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`no`),
  ADD KEY `no` (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hubungi`
--
ALTER TABLE `tbl_hubungi`
  MODIFY `id_hubungi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
