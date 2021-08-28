-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 05:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_perusahaan` int(20) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `nomer_tlp_perusahaan` int(20) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_perusahaan`, `nama_perusahaan`, `nomer_tlp_perusahaan`, `alamat_perusahaan`) VALUES
(1, 'PT XYZ', 22456, 'xxx'),
(9999, 'PT SUBUR JAYA', 8276878, 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `data_agent`
--

CREATE TABLE `data_agent` (
  `id_agent` int(20) NOT NULL,
  `nama_agent` varchar(255) NOT NULL,
  `kategori_agent` varchar(255) NOT NULL,
  `nik` int(20) NOT NULL,
  `nomer_tlp_agent` int(20) NOT NULL,
  `alamat_agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_agent`
--

INSERT INTO `data_agent` (`id_agent`, `nama_agent`, `kategori_agent`, `nik`, `nomer_tlp_agent`, `alamat_agent`) VALUES
(1, 'Alex Simon', 'Support Business Units', 123, 123, 'xx'),
(2, 'Kevin David', 'Technical Support', 321, 321, 'yyy'),
(543, 'Franklyn ', 'Independent Support', 543, 8229999, 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` int(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `nomer_tlp` int(20) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `nomer_tlp`, `alamat`) VALUES
(123, 123, 'George Tom', '2000-10-01', 'Los Angels', 822456987, 'Buah Batu, Bandung'),
(666, 6666, 'Kelly ', '2000-10-30', 'Tasik', 8276666, 'Tasik');

-- --------------------------------------------------------

--
-- Table structure for table `data_request`
--

CREATE TABLE `data_request` (
  `case_id` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `case_req` varchar(255) NOT NULL,
  `case_desc` varchar(255) NOT NULL,
  `case_kategori` varchar(255) NOT NULL,
  `case_date` date NOT NULL,
  `case_solution` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request`
--

INSERT INTO `data_request` (`case_id`, `id_user`, `case_req`, `case_desc`, `case_kategori`, `case_date`, `case_solution`) VALUES
(1, 1, 'Problem 1', 'xxx', 'Service', '2021-07-22', 'xxxxx'),
(3232, 4, 'Case x', 'bbb', 'Incident', '2021-08-01', 'vvv');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_pertanyaan` int(20) NOT NULL,
  `list_pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_pertanyaan`, `list_pertanyaan`, `jawaban`) VALUES
(1, 'kenapa?\r\napa?\r\nbagaimana?', 'karena'),
(3443, 'Why?', 'Because');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_based`
--

CREATE TABLE `knowledge_based` (
  `id_konten` int(20) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `tanggal_konten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knowledge_based`
--

INSERT INTO `knowledge_based` (`id_konten`, `konten`, `tanggal_konten`) VALUES
(1, 'asdfghjkl', '27-7-2021'),
(7878, 'This is content', '2021-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomer_tlp` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nomer_tlp`, `email`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `password`) VALUES
(4, 'zxc', 0, 'zxc@gmail.com', '', '0000-00-00', '', '$2y$10$41YDbTQo2zxqSgduTgJNce/BP7RM1a5ZokaYu6H1/5XsG.xKv9Qeq'),
(5, 'jkl', 877745353, 'jkl@gmail.com', 'mmm', '2021-08-01', ' nnn', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `data_agent`
--
ALTER TABLE `data_agent`
  ADD PRIMARY KEY (`id_agent`);

--
-- Indexes for table `data_request`
--
ALTER TABLE `data_request`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `knowledge_based`
--
ALTER TABLE `knowledge_based`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_request`
--
ALTER TABLE `data_request`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
