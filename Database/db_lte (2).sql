-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 03:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lte`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(5) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL,
  `satuan` char(5) NOT NULL,
  `stock_awal` int(11) NOT NULL,
  `umur` date NOT NULL,
  `input_date` datetime NOT NULL,
  `updater` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `nama_barang`, `jenis_barang`, `satuan`, `stock_awal`, `umur`, `input_date`, `updater`) VALUES
('B0001', 'TST-001', 'Kamera PTZ', 'BARANG BAGUS', '02', 1, '2024-04-02', '2024-04-02 09:10:03', 'Ghilman'),
('B0002', 'TST-002', 'BABYCAM', 'EX SERVICE', '02', 2, '2024-04-02', '2024-04-02 09:10:31', 'Ghilman'),
('B0003', 'TST-003', 'NOTEBOOK', 'BARANG BAGUS', '02', 4, '2024-04-02', '2024-04-02 09:10:55', 'Ghilman'),
('B0004', 'TST-004', 'TABLET', 'EX DEMO', '02', 6, '2024-04-02', '2024-04-02 09:11:20', 'Ghilman'),
('B0005', 'TST-005', 'UPS', 'EX SERVICE', '01', 4, '2024-04-02', '2024-04-02 09:11:46', 'Ghilman'),
('B0006', 'TST-006', 'MONITOR 23', 'EX SERVICE', '02', 2, '2024-04-02', '2024-04-02 09:12:04', 'Ghilman'),
('B0007', 'TST-007', 'MONITOR CURVE', 'RUSAK', '02', 3, '2024-04-02', '2024-04-02 09:12:23', 'Ghilman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` varchar(50) NOT NULL,
  `jenis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `jenis`) VALUES
('J001', 'BARANG BAGUS'),
('J002', 'EX SERVICE'),
('J003', 'EX DEMO'),
('J004', 'RUSAK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluar`
--

CREATE TABLE `tb_keluar` (
  `id_keluar` varchar(20) NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `barang_id` varchar(15) DEFAULT NULL,
  `jml_keluar` int(11) DEFAULT NULL,
  `input_date` datetime DEFAULT NULL,
  `updater` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_keluar`
--

INSERT INTO `tb_keluar` (`id_keluar`, `tgl_keluar`, `barang_id`, `jml_keluar`, `input_date`, `updater`) VALUES
('TK-20240527-0001', '2024-05-27', 'B0001', 2, '2024-05-27 05:09:56', 'Ghilman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_masuk`
--

CREATE TABLE `tb_masuk` (
  `id_masuk` varchar(20) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `barang_id` varchar(15) DEFAULT NULL,
  `jml_masuk` int(11) DEFAULT NULL,
  `input_date` datetime DEFAULT NULL,
  `updater` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_masuk`
--

INSERT INTO `tb_masuk` (`id_masuk`, `tgl_masuk`, `barang_id`, `jml_masuk`, `input_date`, `updater`) VALUES
('TM-20240402-0001', '2024-04-02', 'B0001', 2, '2024-04-02 09:39:43', 'Ghilman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` char(2) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `satuan`) VALUES
('01', 'PCS'),
('02', 'SET');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `create_Date` datetime NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `status`, `create_Date`, `level`) VALUES
('001', 'Ghilman', 'fc640af9c78fb7968639aa6a6f5a6c99', 1, '2024-06-06 04:32:58', 'admin'),
('010', 'Superman', 'cc03e747a6afbbcbf8be7668acfebee5', 1, '2024-06-06 04:32:28', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_keluar`
--
ALTER TABLE `tb_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
