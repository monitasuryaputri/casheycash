-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 09:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casheycash`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `no` int(5) NOT NULL,
  `judul` text NOT NULL,
  `Isi` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pengeluaran`
--

CREATE TABLE `kategori_pengeluaran` (
  `Id_kategori` int(1) NOT NULL,
  `jenis_pengeluaran` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level_akses`
--

CREATE TABLE `level_akses` (
  `Id_level_akses` int(1) NOT NULL,
  `Nama` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_akses`
--

INSERT INTO `level_akses` (`Id_level_akses`, `Nama`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `Id_pemasukan` char(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sumber` varchar(30) DEFAULT NULL,
  `nominal` int(12) DEFAULT NULL,
  `time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `Id_pengeluaran` int(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `keperluan` text,
  `nominal` int(12) DEFAULT NULL,
  `Id_kategori` int(1) NOT NULL,
  `time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE `planning` (
  `id_planning` int(3) NOT NULL,
  `plan` varchar(80) DEFAULT NULL,
  `month` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `id_user` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Id_level_akses` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `email`, `password`, `Id_level_akses`) VALUES
('faizal', 'faiz@gmail.com', '38d7355701b6f3760ee49852904319c1', 2),
('monita surya putri', 'monita26@gmail.com', 'ceb6a023f4b5344958a1bc0fda6baebc', 2),
('papah', 'papah@gmail.com', '8cdbaaeece079ecf0bb7e95a9684818e', 2),
('papah123', 'papah@yahoo.com', '040b7cf4a55014e185813e0644502ea9', 2),
('saidj', 'saidj@gmail.com', 'b7b791e873f143d5318310e59022175d', 2),
('silviananda', 'silvi@gmail.com', '42513881c5745ee8fa73969ce315ce6c', 2),
('siti alifah', 'sitialifah303@gmail.com', 'b39d7b65896dd10cfce83a7504553574', 2),
('siti alifah', 'sitialifah303@ymail.com', '46fd489e5a66222c54c1230da66b8c52', 2),
('yasmina', 'syaza@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2),
('tya shafira', 'tya@gmail.com', 'b626b66df044ee336f452bd5d88debb5', 2),
('yasmin', 'y@yahoo.com', '76d80224611fc919a5d54f0ff9fba446', 2),
('yasmin', 'yasmin@gmail.com', 'db04eb4b07e0aaf8d1d477ae342bdff9', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kategori_pengeluaran`
--
ALTER TABLE `kategori_pengeluaran`
  ADD PRIMARY KEY (`Id_kategori`);

--
-- Indexes for table `level_akses`
--
ALTER TABLE `level_akses`
  ADD PRIMARY KEY (`Id_level_akses`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`Id_pemasukan`),
  ADD UNIQUE KEY `Id_pemasukan` (`Id_pemasukan`),
  ADD KEY `fq_email` (`email`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`Id_pengeluaran`),
  ADD KEY `fk_email` (`email`),
  ADD KEY `fk_kategori` (`Id_kategori`);

--
-- Indexes for table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`id_planning`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `p_unik` (`password`),
  ADD KEY `fq_idlevel` (`Id_level_akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `fq_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`Id_kategori`) REFERENCES `kategori_pengeluaran` (`Id_kategori`);

--
-- Constraints for table `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `planning_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`email`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fq_idlevel` FOREIGN KEY (`Id_level_akses`) REFERENCES `level_akses` (`Id_level_akses`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
